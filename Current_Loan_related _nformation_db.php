<?php
include('include/conn.php');

// Fetch and sanitize inputs
function getPost($key, $default = '')
{
    return isset($_POST[$key]) ? trim($_POST[$key]) : $default;
}

// Numeric fields
$total_land_acres = (int) getPost('total_land_acres', 0);
$total_land_guntha = (int) getPost('total_land_guntha', 0);

$dry_land_acres = (int) getPost('dry_land_acres', 0);
$dry_land_guntha = (int) getPost('dry_land_guntha', 0);

$seasonal_garden_acres = (int) getPost('seasonal_garden_acres', 0);
$seasonal_garden_guntha = (int) getPost('seasonal_garden_guntha', 0);

$garden_acres = (int) getPost('garden_acres', 0);
$garden_guntha = (int) getPost('garden_guntha', 0);

$well_irrigated_acres = (int) getPost('well_irrigated_acres', 0);
$well_irrigated_guntha = (int) getPost('well_irrigated_guntha', 0);

$bore_irrigated_acres = (int) getPost('bore_irrigated_acres', 0);
$bore_irrigated_guntha = (int) getPost('bore_irrigated_guntha', 0);

$canal_irrigated_acres = (int) getPost('canal_irrigated_acres', 0);
$canal_irrigated_guntha = (int) getPost('canal_irrigated_guntha', 0);

$other_irrigated_acres = (int) getPost('other_irrigated_acres', 0);
$other_irrigated_guntha = (int) getPost('other_irrigated_guntha', 0);

// Text fields
$water_source_garden = getPost('water_source_garden');
$electricity_connection = getPost('electricity_connection');
$motor_count = (int) getPost('motor_count', 0);
$electricity_bill_pending = getPost('electricity_bill_pending');
$bill_pending_since = getPost('bill_pending_since');
$bill_pending_amount = getPost('bill_pending_amount');

// SQL Insert
$sql = "INSERT INTO land_information (
    total_land_acres, total_land_guntha,
    dry_land_acres, dry_land_guntha,
    seasonal_garden_acres, seasonal_garden_guntha,
    garden_acres, garden_guntha,
    well_irrigated_acres, well_irrigated_guntha,
    bore_irrigated_acres, bore_irrigated_guntha,
    canal_irrigated_acres, canal_irrigated_guntha,
    other_irrigated_acres, other_irrigated_guntha,
    water_source_garden, electricity_connection, motor_count,
    electricity_bill_pending, bill_pending_since, bill_pending_amount
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

$stmt = $conn->prepare($sql);

if ($stmt) {
    $stmt->bind_param(
        "iiiiiiiiiiiiiiiiississ",
        $total_land_acres,
        $total_land_guntha,
        $dry_land_acres,
        $dry_land_guntha,
        $seasonal_garden_acres,
        $seasonal_garden_guntha,
        $garden_acres,
        $garden_guntha,
        $well_irrigated_acres,
        $well_irrigated_guntha,
        $bore_irrigated_acres,
        $bore_irrigated_guntha,
        $canal_irrigated_acres,
        $canal_irrigated_guntha,
        $other_irrigated_acres,
        $other_irrigated_guntha,
        $water_source_garden,
        $electricity_connection,
        $motor_count,
        $electricity_bill_pending,
        $bill_pending_since,
        $bill_pending_amount
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
                window.location.href = 'Current_Loan_related _nformation.php';
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
} else {
    echo "❌ SQL प्रिपेअर एरर: " . $conn->error;
}

$conn->close();
?>
.