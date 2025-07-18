<?php
include('include/conn.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Convert Yes/No to 1/0
    function yn_to_bool($value) {
        return strtolower(trim($value)) === 'yes' || $value === 'होय' ? 1 : 0;
    }

    // Collect and convert form data
    $bpl_card = yn_to_bool($_POST['bpl_card'] ?? '');
    $bpl_card_details = $_POST['bpl_card_details'] ?? '';
    $mgnrega_card = yn_to_bool($_POST['mgnrega_card'] ?? '');
    $jyotiba_phule_scheme = yn_to_bool($_POST['jyotiba_phule_scheme'] ?? '');
    $marriage_scheme = yn_to_bool($_POST['marriage_scheme'] ?? '');
    $current_requirement = $_POST['current_requirement'] ?? '';
    $jan_dhan_account = yn_to_bool($_POST['jan_dhan_account'] ?? '');
    $sanjay_ghadi_scheme = yn_to_bool($_POST['sanjay_ghadi_scheme'] ?? '');
    $shravan_bal_pension = yn_to_bool($_POST['shravan_bal_pension'] ?? '');
    $widow_pension = yn_to_bool($_POST['widow_pension'] ?? '');
    $old_age_pension = yn_to_bool($_POST['old_age_pension'] ?? '');
    $disability_pension = yn_to_bool($_POST['disability_pension'] ?? '');
    $jivan_jyoti_insurance = yn_to_bool($_POST['jivan_jyoti_insurance'] ?? '');
    $other_schemes = yn_to_bool($_POST['other_schemes'] ?? '');
    $scheme_details = $_POST['scheme_details'] ?? '';

    // Fixed values
    $food_security_scheme = 1; // 'होय' = 1
    $food_security_type = "अंत्योदय,सामान्य,अन्नपूर्णा,शेतकरी,इतर";

    $monthly_food_benefit = json_encode([
        [
            'scheme' => 'अंत्योदय',
            'wheat' => $_POST['wheat_qty1'] ?? 0,
            'rice' => $_POST['rice_qty1'] ?? 0,
            'dal' => $_POST['dal_qty1'] ?? 0,
            'other' => $_POST['other_qty1'] ?? 0,
        ],
        [
            'scheme' => 'सामान्य कुटुंब',
            'wheat' => $_POST['wheat_qty2'] ?? 0,
            'rice' => $_POST['rice_qty2'] ?? 0,
            'dal' => $_POST['dal_qty2'] ?? 0,
            'other' => $_POST['other_qty2'] ?? 0,
        ],
        [
            'scheme' => 'अन्नपूर्णा',
            'wheat' => $_POST['wheat_qty3'] ?? 0,
            'rice' => $_POST['rice_qty3'] ?? 0,
            'dal' => $_POST['dal_qty3'] ?? 0,
            'other' => $_POST['other_qty3'] ?? 0,
        ],
        [
            'scheme' => 'शेतकरी लाभार्थी',
            'wheat' => $_POST['wheat_qty4'] ?? 0,
            'rice' => $_POST['rice_qty4'] ?? 0,
            'dal' => $_POST['dal_qty4'] ?? 0,
            'other' => $_POST['other_qty4'] ?? 0,
        ],
        [
            'scheme' => 'इतर',
            'wheat' => $_POST['wheat_qty5'] ?? 0,
            'rice' => $_POST['rice_qty5'] ?? 0,
            'dal' => $_POST['dal_qty5'] ?? 0,
            'other' => $_POST['other_qty5'] ?? 0,
        ]
    ], JSON_UNESCAPED_UNICODE);

    // SQL insert query (without survey_id)
    $sql = "INSERT INTO welfare_schemes (
        bpl_card, bpl_card_details, mgnrega_card,
        food_security_scheme, food_security_type, monthly_food_benefit,
        jan_dhan_account, sanjay_ghadi_scheme, shravan_bal_pension,
        widow_pension, old_age_pension, disability_pension,
        jivan_jyoti_insurance, other_schemes, jyotiba_phule_scheme,
        marriage_scheme, current_requirement, scheme_details
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);

    $stmt->bind_param(
        "ississssssssssssss",
        $bpl_card, $bpl_card_details, $mgnrega_card,
        $food_security_scheme, $food_security_type, $monthly_food_benefit,
        $jan_dhan_account, $sanjay_ghadi_scheme, $shravan_bal_pension,
        $widow_pension, $old_age_pension, $disability_pension,
        $jivan_jyoti_insurance, $other_schemes, $jyotiba_phule_scheme,
        $marriage_scheme, $current_requirement, $scheme_details
    );

    // Output HTML with SweetAlert2
    echo '<!DOCTYPE html><html><head>';
    echo '<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>';
    echo '</head><body>';

    if ($stmt->execute()) {
        echo "<script>
            Swal.fire({
                icon: 'success',
                title: 'सफलता!',
                text: 'माहिती यशस्वीरित्या सेव्ह झाली!',
                confirmButtonText: 'ठीक आहे'
            }).then(() => {
                window.location.href = 'Health_Nutrition_and_Related_Information.php';
            });
        </script>";
    } else {
        $error = $stmt->error;
        echo "<script>
            Swal.fire({
                icon: 'error',
                title: 'त्रुटी आली!',
                text: 'डेटा सेव्ह करताना त्रुटी: " . addslashes($error) . "',
                confirmButtonText: 'ठीक आहे'
            });
        </script>";
    }

    echo '</body></html>';
    $stmt->close();
    $conn->close();
}
?>
