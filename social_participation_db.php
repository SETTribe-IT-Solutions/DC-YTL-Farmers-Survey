<?php
include('include/conn.php');

// Initialize values to 0 or null if not set
$gram_panchayat = 0;
$society_member = 0;
$other_org_member = 0;
$org_details = $_POST['organization_details'] ?? '';
$religious = isset($_POST['religious_activities']) ? (int)$_POST['religious_activities'] : 0;
$shg_member = isset($_POST['self_help_group_member']) ? (int)$_POST['self_help_group_member'] : 0;
$shg_details = $_POST['shg_details'] ?? '';
$shg_benefits = isset($_POST['shg_benefits']) ? (int)$_POST['shg_benefits'] : 0;
$shg_benefit_details = $_POST['shg_benefit_details'] ?? '';
$farmer_group = isset($_POST['farmer_producer_group']) ? (int)$_POST['farmer_producer_group'] : 0;

// Handle org types only if gram_panchayat_member == 1
if (isset($_POST['gram_panchayat_member']) && $_POST['gram_panchayat_member'] == 1) {
    $org_type = $_POST['society_member'] ?? '';
    if ($org_type === 'gram') {
        $gram_panchayat = 1;
    } elseif ($org_type === 'society') {
        $society_member = 1;
    } elseif ($org_type === 'other') {
        $other_org_member = 1;
    }
}

// Prepare SQL
$stmt = $conn->prepare("INSERT INTO social_participation1 (
    gram_panchayat_member,
    society_member,
    other_organization_member,
    organization_details,
    religious_activities,
    self_help_group_member,
    shg_details,
    shg_benefits,
    shg_benefit_details,
    farmer_producer_group
) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?)");

if (!$stmt) {
    die("Prepare failed: " . $conn->error);
}

// Bind parameters
$stmt->bind_param(
    "iiisiiisii",
    $gram_panchayat,
    $society_member,
    $other_org_member,
    $org_details,
    $religious,
    $shg_member,
    $shg_details,
    $shg_benefits,
    $shg_benefit_details,
    $farmer_group
);

// Execute and give alert
if ($stmt->execute()) {
    echo "<script>
        alert('माहिती यशस्वीरित्या साठवली गेली आहे!');
        window.location.href='social_participation.php'; // change if needed
    </script>";
} else {
    echo "<script>
        alert('त्रुटी: माहिती साठवता आली नाही. कृपया पुन्हा प्रयत्न करा.');
        window.history.back();
    </script>";
}

$stmt->close();
$conn->close();
?>
