<?php
include('include/conn.php');

// Get latest survey_id and add 1
$result = $conn->query("SELECT MAX(CAST(survey_id AS UNSIGNED)) AS max_id FROM inquiry_verification_info");
$row = $result->fetch_assoc();
$survey_id = $row['max_id'] + 1;

// Handle signature uploads
function handleSignatureUpload($field_name) {
    if (isset($_FILES[$field_name]) && $_FILES[$field_name]['error'] === 0) {
        $uploadDir = '../uploads/signatures/';
        if (!is_dir($uploadDir)) {
            mkdir($uploadDir, 0777, true);
        }
        $filename = uniqid() . '_' . basename($_FILES[$field_name]['name']);
        $targetPath = $uploadDir . $filename;

        if (move_uploaded_file($_FILES[$field_name]['tmp_name'], $targetPath)) {
            return $filename;
        }
    }
    return '';
}

// Collect POST data
$info_provider_name_signature         = $_POST['info_provider_name_signature'] ?? '';
$info_provider_mobile                 = $_POST['info_provider_mobile'] ?? '';
$info_recipient_name_designation      = $_POST['info_recipient_name_designation'] ?? '';
$info_recipient_mobile                = $_POST['info_recipient_mobile'] ?? '';
$info_recipient_signature             = handleSignatureUpload('info_recipient_signature');
$verifier_name_designation_signature  = handleSignatureUpload('verifier_name_designation_signature');

// Insert into DB
$stmt = $conn->prepare("
    INSERT INTO inquiry_verification_info (
        survey_id,
        info_provider_name_signature,
        info_provider_mobile,
        info_recipient_name_designation,
        info_recipient_mobile,
        info_recipient_signature,
        verifier_name_designation_signature
    ) VALUES (?, ?, ?, ?, ?, ?, ?)
");

$stmt->bind_param(
    "issssss",
    $survey_id,
    $info_provider_name_signature,
    $info_provider_mobile,
    $info_recipient_name_designation,
    $info_recipient_mobile,
    $info_recipient_signature,
    $verifier_name_designation_signature
);

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
        text: 'माहिती व तपासणी संबंधी माहिती यशस्वीरित्या सेव झाली आहे (Survey ID: <?= $survey_id ?>)',
        icon: 'success',
        confirmButtonText: 'ठीक आहे'
    }).then(() => {
        window.location.href = 'inquiry_verification_info.php';
    });
</script>
</body>
</html>
