<?php
include('include/conn.php'); // Include your database connection file

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Get form data
    $member_names = $_POST['member_name'] ?? [];
    $ages = $_POST['age'] ?? [];
    $genders = $_POST['gender'] ?? [];
    $relations = $_POST['relation_with_farmer'] ?? [];
    $relation_others = $_POST['relation_other'] ?? [];

    $educations = $_POST['education'] ?? [];
    $education_others = $_POST['education_other'] ?? [];

    $occupations = $_POST['occupation'] ?? [];
    $occupation_others = $_POST['occupation_other'] ?? [];

    $health_issues = $_POST['health_issues'] ?? [];

    // Prepare and bind
    $stmt = $conn->prepare("INSERT INTO family_members (
        member_name,
        age,
        gender,
        relation_with_farmer,
        relation_other,
        education,
        education_other,
        occupation,
        occupation_other,
        health_issues
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

    $stmt->bind_param(
        "sissssssss",
        $name,
        $age,
        $gender,
        $relation,
        $relation_other,
        $education,
        $education_other,
        $occupation,
        $occupation_other,
        $health
    );

    $successCount = 0;

    // Loop through all members
    for ($i = 0; $i < count($member_names); $i++) {
        // Sanitize and assign data
        $name = trim($member_names[$i]);
        $age = intval($ages[$i]);
        $gender = trim($genders[$i]);

        $relation = trim($relations[$i]);
        $relation_other = ($relation === 'इतर') ? trim($relation_others[$i]) : null;

        $education = trim($educations[$i]);
        $education_other = ($education === 'इतर शिक्षण') ? trim($education_others[$i]) : null;

        $occupation = trim($occupations[$i]);
        $occupation_other = ($occupation === 'इतर') ? trim($occupation_others[$i]) : null;

        $health = trim($health_issues[$i]);

        // Basic validation
        if (!empty($name) && $age > 0 && !empty($gender) &&
            !empty($relation) && !empty($education) &&
            !empty($occupation) && !empty($health)) {
            
            if ($stmt->execute()) {
                $successCount++;
            }
        }
    }

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

$conn->close();
?>
