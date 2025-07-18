<?php
include('include/conn.php');

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $survey_id = uniqid("srvy_");

    // Type cast radio values to int (0 or 1)
    $disaster_loss = isset($_POST['disaster_loss']) ? (int)$_POST['disaster_loss'] : null;
    $disaster_details = trim($_POST['disaster_details'] ?? '');
    $compensation_received = isset($_POST['compensation_received']) ? (int)$_POST['compensation_received'] : null;
    $compensation_details = trim($_POST['compensation_details'] ?? '');

    $stmt = $conn->prepare("INSERT INTO natural_disaster 
        (survey_id, disaster_loss, disaster_details, compensation_received, compensation_details)
        VALUES (?, ?, ?, ?, ?)");

    // i = integer (for 1/0), s = string
    $stmt->bind_param("sisss", $survey_id, $disaster_loss, $disaster_details, $compensation_received, $compensation_details);
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
<?php
}
?>
