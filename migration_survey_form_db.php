<?php
// Include DB connection
include('include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Generate unique survey ID
    $survey_id = uniqid("srvy_");

    // Ensure proper type casting and defaults
    $current_migration = isset($_POST['current_migration']) ? (int)$_POST['current_migration'] : null;
    $migration_details = trim($_POST['migration_details'] ?? '');

    // Prepare statement with correct data types
    $stmt = $conn->prepare("INSERT INTO migration_information (survey_id, current_migration, migration_details)
                            VALUES (?, ?, ?)");
    $stmt->bind_param("sis", $survey_id, $current_migration, $migration_details);

    // Execute and close
    $stmt->execute();
    $stmt->close();
    $conn->close();
?>
<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <title>सेव यशस्वी</title>
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
<?php
}
?>
