<?php
include('include/conn.php');

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    // Convert Yes/No to boolean 1/0
    function yn_to_bool($val) {
        return strtolower(trim($val)) === 'yes' || $val === 'होय' ? 1 : 0;
    }

    // Step 1: Gather form data
    $land_total = isset($_POST['land_total']) ? json_encode($_POST['land_total']) : json_encode([]);
    $water_sources = isset($_POST['source']) ? json_encode($_POST['source']) : json_encode([]);

    $land_total_acre = $_POST['land_total_acre'] ?? '';
    $land_total_gunta = $_POST['land_total_gunta'] ?? '';
    $dry_acre = $_POST['dry_acre'] ?? '';
    $dry_gunta = $_POST['dry_gunta'] ?? '';
    $seasonal_acre = $_POST['seasonal_acre'] ?? '';
    $seasonal_gunta = $_POST['seasonal_gunta'] ?? '';
    $irrigated_acre = $_POST['irrigated_acre'] ?? '';
    $irrigated_gunta = $_POST['irrigated_gunta'] ?? '';
    $electricity_connection = yn_to_bool($_POST['electricity_connection'] ?? '');
    $motor_count = $_POST['motor_count'] ?? 0;
    $bill_pending = yn_to_bool($_POST['bill_pending'] ?? '');
    $pending_bill_details = $_POST['pending_bill_details'] ?? '';

    // Step 2: Insert into DB (without survey_id)
    $sql = "INSERT INTO agricultural_land_info (
        land_total, land_total_acre, land_total_gunta,
        dry_acre, dry_gunta, seasonal_acre, seasonal_gunta,
        irrigated_acre, irrigated_gunta, water_sources,
        electricity_connection, motor_count, bill_pending, pending_bill_details
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "ssssssssssssss",
        $land_total, $land_total_acre, $land_total_gunta,
        $dry_acre, $dry_gunta, $seasonal_acre, $seasonal_gunta,
        $irrigated_acre, $irrigated_gunta, $water_sources,
        $electricity_connection, $motor_count, $bill_pending, $pending_bill_details
    );

    // ✅ Output HTML with SweetAlert2
    echo '<!DOCTYPE html><html><head>';
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '</head><body>';

    if ($stmt->execute()) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'सुरक्षितपणे जतन केले गेले!',
                text: 'तुमची माहिती सेव्ह झाली आहे.',
                confirmButtonText: 'ठीक आहे'
            }).then(() => {
                window.location.href = 'Agricultural_land_information.php';
            });
        </script>";
    } else {
        $error = $stmt->error;
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'त्रुटी!',
                text: 'डेटा सेव्ह करताना त्रुटी आली: " . addslashes($error) . "',
                confirmButtonText: 'ठीक आहे'
            });
        </script>";
    }

    echo '</body></html>';

    $stmt->close();
    $conn->close();
}
?>
