<?php
include ('include/conn.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $member_names = $_POST['member_name'] ?? [];
    $ages = $_POST['age'] ?? [];
    $genders = $_POST['gender'] ?? [];
    $relations = $_POST['relation_with_farmer'] ?? [];
    $educations = $_POST['education'] ?? [];
    $occupations = $_POST['occupation'] ?? [];
    $health_issues = $_POST['health_issues'] ?? [];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO family_members (
        member_name, 
        age, 
        gender, 
        relation_with_farmer, 
        education, 
        occupation, 
        health_issues
    ) VALUES (?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sisssss", 
        $name, 
        $age, 
        $gender, 
        $relation, 
        $education, 
        $occupation, 
        $health
    );

    $successCount = 0;

    // Loop through all members
    for ($i = 0; $i < count($member_names); $i++) {
        // Sanitize and validate data
        $name = trim($member_names[$i]);
        $age = intval($ages[$i]);
        $gender = trim($genders[$i]);
        $relation = trim($relations[$i]);
        $education = trim($educations[$i]);
        $occupation = trim($occupations[$i]);
        $health = trim($health_issues[$i]);

        // Basic validation
        if (!empty($name) && $age > 0 && !empty($gender) && 
            !empty($relation) && !empty($education) && 
            !empty($occupation) && !empty($health)) {
            
            // Execute insertion
            if ($stmt->execute()) {
                $successCount++;
            }
        }
    }

    // Close statement
    $stmt->close();

    // Return JSON response
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'success',
        'message' => "$successCount सदस्यांची माहिती यशस्वीरित्या नोंदवली गेली!"
    ]);

} else {
    // Invalid request method
    header('Content-Type: application/json');
    echo json_encode([
        'status' => 'error',
        'message' => 'अवैध विनंती पद्धत'
    ]);
}

// Close connection
$conn->close();
?>