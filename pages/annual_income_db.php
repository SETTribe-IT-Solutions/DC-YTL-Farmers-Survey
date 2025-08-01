<?php
// echo "<pre>";
// print_r($_FILES);  // For file uploads
// print_r($_POST);   // For normal text fields
// echo "</pre>";
// exit;

include('../include/conn.php');
// Get latest survey_id and add 1
$result = $conn->query("SELECT MAX(CAST(survey_id AS UNSIGNED)) AS max_id FROM income_sources");
$row = $result->fetch_assoc();
$survey_id = $row['max_id'] + 1;
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

// Income Sources
$income_sources = [
    'शेतीपासून' => ['income' => $_POST['income_farming'] ?? 0, 'remark' => $_POST['remarks_farming'] ?? ''],
    'पशुपालनापासून' => ['income' => $_POST['income_livestock'] ?? 0, 'remark' => $_POST['remarks_livestock'] ?? ''],
    'मजुरी' => ['income' => $_POST['income_labour'] ?? 0, 'remark' => $_POST['remarks_labour'] ?? ''],
    'कौशल्य आधारित कामे' => ['income' => $_POST['income_skill'] ?? 0, 'remark' => $_POST['remarks_skill'] ?? ''],
    'शासकीय / खासगी वेतन' => ['income' => $_POST['income_salary'] ?? 0, 'remark' => $_POST['remarks_salary'] ?? ''],
    'इतर (भाडे इ.)' => ['income' => $_POST['income_other'] ?? 0, 'remark' => $_POST['remarks_other'] ?? ''],
    'एकूण उत्पन्न' => ['income' => $_POST['income_total'] ?? 0, 'remark' => $_POST['remarks_total'] ?? ''],
];

// Additional info
$info_provider_name_signature        = $_POST['info_provider_name_signature'] ?? '';
$info_provider_mobile                = $_POST['info_provider_mobile'] ?? '';
$info_recipient_name_designation     = $_POST['info_recipient_name_designation'] ?? '';
$info_recipient_mobile               = $_POST['info_recipient_mobile'] ?? '';
$info_recipient_signature = handleSignatureUpload('info_recipient_signature');
$verifier_name_designation_signature = handleSignatureUpload('verifier_name_designation_signature');


// Prepare insert statement
$stmt = $conn->prepare("
    INSERT INTO income_sources (
        survey_id, source_type, annual_income, percentage,
        info_provider_name_signature,
        info_provider_mobile,
        info_recipient_name_designation,
        info_recipient_mobile,
        info_recipient_signature,
        verifier_name_designation_signature
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)
");

foreach ($income_sources as $source => $data) {
    echo "Inserting: $source - Income: {$data['income']} - Remark: {$data['remark']}<br>";

    $stmt->bind_param(
        "isdsssssss",
        $survey_id,
        $source,
        $data['income'],
        $data['remark'],
        $info_provider_name_signature,
        $info_provider_mobile,
        $info_recipient_name_designation,
        $info_recipient_mobile,
        $info_recipient_signature,
        $verifier_name_designation_signature
    );

    $stmt->execute();
}

$stmt->close();
$conn->close();

?>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
    Swal.fire({
        title: 'सेव झाले!',
        text: 'उत्पन्नाचे स्रोत यशस्वीरित्या सेव झाले आहेत (Survey ID: <?php echo $survey_id; ?>)',
        icon: 'success',
        confirmButtonText: 'ठीक आहे'
    }).then((result) => {
        if (result.isConfirmed) {
            window.location.href = 'annual_income.php';
        }
    });
</script>