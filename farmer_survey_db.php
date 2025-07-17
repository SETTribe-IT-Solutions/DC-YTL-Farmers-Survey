<?php
include('include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate survey ID
    $currentYear = date("Y");
    $sql = "SELECT MAX(survey_id) AS last_id FROM farmer_survey WHERE survey_id LIKE 'survey{$currentYear}_%'";
    $result = $conn->query($sql);
    $lastNumber = 0;
    
    if ($result && $result->num_rows > 0) {
        $row = $result->fetch_assoc();
        if ($row['last_id']) {
            $parts = explode('_', $row['last_id']);
            $lastNumber = intval(end($parts));
        }
    }
    
    $nextNumber = $lastNumber + 1;
    $survey_id = "survey{$currentYear}_" . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);

    // Prepare and sanitize data
    $survey_date = $_POST['survey_date'];
    $farmer_name = $_POST['farmer_name'];
    $suicide_date = $_POST['suicide_date'];
    $suicide_type = $_POST['suicide_type'];
    $suicide_reason = $_POST['suicide_reason'];
    $birth_date = $_POST['birth_date'] ?: null;
    $age = intval($_POST['age']);
    $gender = $_POST['gender'];
    $aadhar_number = $_POST['aadhar_number'];
    $bank_account = $_POST['bank_account'];
    $ifsc_code = $_POST['ifsc_code'];
    $village = $_POST['village'];
    $taluka = $_POST['taluka'];
    $district = 'यवतमाळ'; // Fixed value
    $informant_name = $_POST['informant_name'];
    
    // Convert radio button values to 1/0
    $family_migration = ($_POST['family_migration'] == 'होय') ? 1 : 0;
    $government_subsidy = ($_POST['government_subsidy'] == 'होय') ? 1 : 0;
    $land_mortgage = ($_POST['land_mortgage'] == 'होय') ? 1 : 0;
    
    // Conditional fields
    $migration_since = ($family_migration == 1) ? $_POST['migration_since'] : null;
    $subsidy_details = ($government_subsidy == 1) ? $_POST['subsidy_details'] : null;
    $mortgage_details = ($land_mortgage == 1) ? $_POST['mortgage_details'] : null;
    
    $family_head_education = $_POST['family_head_education'];
    $family_head_occupation = $_POST['family_head_occupation'];

    // Prepare SQL statement
    $stmt = $conn->prepare("INSERT INTO farmer_survey (
        survey_id, survey_date, farmer_name, suicide_date, suicide_type, suicide_reason,
        birth_date, age, gender, aadhar_number, bank_account, ifsc_code, village,
        taluka, district, informant_name, family_migration, migration_since,
        government_subsidy, subsidy_details, family_head_education,
        family_head_occupation, land_mortgage, mortgage_details
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    // Bind parameters - note the change to integers for boolean fields
    $stmt->bind_param("sssssssissssssssiissssss",
        $survey_id, $survey_date, $farmer_name, $suicide_date, $suicide_type, $suicide_reason,
        $birth_date, $age, $gender, $aadhar_number, $bank_account, $ifsc_code, $village,
        $taluka, $district, $informant_name, $family_migration, $migration_since,
        $government_subsidy, $subsidy_details, $family_head_education,
        $family_head_occupation, $land_mortgage, $mortgage_details
    );

    // Execute and respond
    if ($stmt->execute()) {
        echo json_encode([
            'status' => 'success',
            'message' => 'माहिती यशस्वीरित्या साठवली गेली आहे!',
            'survey_id' => $survey_id
        ]);
    } else {
        echo json_encode([
            'status' => 'error',
            'message' => 'त्रुटी: ' . $stmt->error
        ]);
    }

    $stmt->close();
}

$conn->close();
?>