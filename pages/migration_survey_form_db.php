<?php
// Include DB connection
include('../include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate unique survey ID
    $survey_id = uniqid("srvy_");
    $current_migration = $_POST['current_migration'] ?? null;
    $migration_details = $_POST['migration_details'] ?? null;

    // Prepare statement
    $stmt = $conn->prepare("INSERT INTO migration_information (survey_id, current_migration, migration_details)
                            VALUES (?, ?, ?)");
    $stmt->bind_param("sss", $survey_id, $current_migration, $migration_details);

    // Execute and close
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <title>स्थलांतर माहिती सेव</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
    Swal.fire({
        title: 'सेव झाले!',
        text: 'स्थलांतराची माहिती यशस्वीरित्या सेव झाली आहे (Survey ID: <?php echo $survey_id; ?>)',
        icon: 'success',
        confirmButtonText: 'ठीक आहे'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'migration_survey_form.php';
        }
    });
</script>
</body>
</html>
