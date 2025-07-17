<?php
include('../include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $survey_id = uniqid("srvy_");

    $disaster_loss = $_POST['disaster_loss'] ?? null;
    $disaster_details = $_POST['disaster_details'] ?? null;
    $compensation_received = $_POST['compensation_received'] ?? null;
    $compensation_details = $_POST['compensation_details'] ?? null;

    $stmt = $conn->prepare("INSERT INTO natural_disaster 
        (survey_id, disaster_loss, disaster_details, compensation_received, compensation_details)
        VALUES (?, ?, ?, ?, ?)");

    $stmt->bind_param("sssss", $survey_id, $disaster_loss, $disaster_details, $compensation_received, $compensation_details);
    $stmt->execute();
    $stmt->close();
    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="mr">
<head>
    <meta charset="UTF-8">
    <title>नैसर्गिक आपत्ती साठवले</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<body>
<script>
    Swal.fire({
        title: 'सेव झाले!',
        text: 'नैसर्गिक आपत्तीबद्दल माहिती सेव झाली आहे (Survey ID: <?php echo $survey_id; ?>)',
        icon: 'success',
        confirmButtonText: 'ठीक आहे'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'natural_calamity_impact_form.php';
        }
    });
</script>
</body>
</html>
