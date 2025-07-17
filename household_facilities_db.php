<?php
// Enable error reporting for debugging (remove in production)
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);

// Start output buffering
ob_start();

include('include/conn.php');

// Set charset to UTF-8 for Marathi support
header('Content-Type: application/json; charset=utf-8');

// Process form data
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get all fields with proper sanitization
    $survey_id = $_POST['survey_id'] ?? uniqid('survey_');
    
    // Boolean fields
    $marriageable_daughters = isset($_POST['marriageable_daughters']) ? (int)$_POST['marriageable_daughters'] : 0;
    $marriage_financial_difficulty = isset($_POST['marriage_financial_difficulty']) ? (int)$_POST['marriage_financial_difficulty'] : 0;
    $family_respect_issue = isset($_POST['family_respect_issue']) ? (int)$_POST['family_respect_issue'] : 0;
    $family_conflict = isset($_POST['family_conflict']) ? (int)$_POST['family_conflict'] : 0;
    $addiction_in_family = isset($_POST['addiction_in_family']) ? (int)$_POST['addiction_in_family'] : 0;
    $serious_illness = isset($_POST['serious_illness']) ? (int)$_POST['serious_illness'] : 0;
    $suicide_history = isset($_POST['suicide_history']) ? (int)$_POST['suicide_history'] : 0;
    $unemployment = isset($_POST['unemployment']) ? (int)$_POST['unemployment'] : 0;
    $financial_difficulty = isset($_POST['financial_difficulty']) ? (int)$_POST['financial_difficulty'] : 0;
    $own_house = isset($_POST['own_house']) ? (int)$_POST['own_house'] : 0;
    $government_housing_scheme = isset($_POST['government_housing_scheme']) ? (int)$_POST['government_housing_scheme'] : 0;
    $housing_need = isset($_POST['housing_need']) ? (int)$_POST['housing_need'] : 0;
    $electricity_connection = isset($_POST['electricity_connection']) ? (int)$_POST['electricity_connection'] : 0;
    $gas_connection = isset($_POST['gas_connection']) ? (int)$_POST['gas_connection'] : 0;
    $water_connection = isset($_POST['water_connection']) ? (int)$_POST['water_connection'] : 0;
    $toilet_facility = isset($_POST['toilet_facility']) ? (int)$_POST['toilet_facility'] : 0;
    $swachh_bharat_application = isset($_POST['swachh_bharat_application']) ? (int)$_POST['swachh_bharat_application'] : 0;
    
    // Text fields
    $addiction_type = $_POST['addiction_type'] ?? null;
    $illness_type = $_POST['illness_type'] ?? null;
    $house_type = $_POST['house_type'] ?? null;
    $house_loan_taken = $_POST['house_loan_taken'] ?? '';
    
    // Numeric field
    $unemployed_count = isset($_POST['unemployed_count']) ? (int)$_POST['unemployed_count'] : 0;

    try {
        // Prepare SQL statement
        $sql = "INSERT INTO household_facilities (
            survey_id, marriageable_daughters, marriage_financial_difficulty, family_respect_issue, 
            family_conflict, addiction_in_family, addiction_type, serious_illness, 
            illness_type, suicide_history, unemployment, unemployed_count, 
            financial_difficulty, own_house, house_type, government_housing_scheme, 
            housing_need, house_loan_taken, electricity_connection, gas_connection, 
            water_connection, toilet_facility, swachh_bharat_application
        ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";
        
        $stmt = $conn->prepare($sql);
        
        if (!$stmt) {
            throw new Exception("Prepare failed: " . $conn->error);
        }
        
        // Bind parameters
        $stmt->bind_param(
            "siiiiisssiiiiisssiiiii", 
            $survey_id, $marriageable_daughters, $marriage_financial_difficulty, $family_respect_issue, 
            $family_conflict, $addiction_in_family, $addiction_type, $serious_illness, 
            $illness_type, $suicide_history, $unemployment, $unemployed_count, 
            $financial_difficulty, $own_house, $house_type, $government_housing_scheme, 
            $housing_need, $house_loan_taken, $electricity_connection, $gas_connection, 
            $water_connection, $toilet_facility, $swachh_bharat_application
        );
        
        if (!$stmt->execute()) {
            throw new Exception("Execute failed: " . $stmt->error);
        }
        
        $response = [
            'status' => 'success',
            'message' => 'फॉर्म यशस्वीरित्या सबमिट केला गेला आहे!'
        ];
        
    } catch (Exception $e) {
        $response = [
            'status' => 'error',
            'message' => 'त्रुटी: ' . $e->getMessage()
        ];
    }
} else {
    $response = [
        'status' => 'error',
        'message' => 'अवैध विनंती पद्धत'
    ];
}

// Clean buffer and send JSON
ob_end_clean();
echo json_encode($response);
exit;
?>