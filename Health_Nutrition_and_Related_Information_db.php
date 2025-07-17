<?php
include('include/conn.php'); // Database connection

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    // Convert Yes/No to 1/0
    function yn_to_bool($value) {
        return strtolower(trim($value)) === 'yes' || $value === 'होय' ? 1 : 0;
    }

    // Collect and convert form data
    $health_treatment_needed = yn_to_bool($_POST['health_required'] ?? '');
    $health_treatment_details = $_POST['health_details'] ?? '';
    $pregnant_woman = yn_to_bool($_POST['pregnant_woman'] ?? '');
    $janani_scheme = yn_to_bool($_POST['maternity_scheme'] ?? '');
    $children_0_6 = yn_to_bool($_POST['child_0_6'] ?? '');
    $vaccination_complete = yn_to_bool($_POST['vaccinated'] ?? '');
    $nutrition_treatment = yn_to_bool($_POST['nutrition'] ?? '');
    $school_dropout = yn_to_bool($_POST['dropout_6_18'] ?? '');
    $dropout_year_class = $_POST['dropout_details'] ?? '';
    $girls_education_financial_constraint = yn_to_bool($_POST['education_problem'] ?? '');
    $education_constraint_details = $_POST['financial_details'] ?? '';
    $government_hostel_needed = yn_to_bool($_POST['hostel_required'] ?? '');
    $mjp_health_scheme = yn_to_bool($_POST['mjp_health_scheme'] ?? '');
    $subh_mangal_marriage = yn_to_bool($_POST['subh_mangal_marriage'] ?? '');
    $current_need = $_POST['current_need'] ?? '';

    // Prepare SQL statement (without survey_id)
    $sql = "INSERT INTO health_education (
        health_treatment_needed,
        health_treatment_details,
        pregnant_woman,
        janani_scheme,
        children_0_6,
        vaccination_complete,
        nutrition_treatment,
        school_dropout,
        dropout_year_class,
        girls_education_financial_constraint,
        education_constraint_details,
        government_hostel_needed,
        mjp_health_scheme,
        subh_mangal_marriage,
        current_need
    ) VALUES (?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?, ?)";

    $stmt = $conn->prepare($sql);
    $stmt->bind_param(
        "isiiiiiiisissis",
        $health_treatment_needed,
        $health_treatment_details,
        $pregnant_woman,
        $janani_scheme,
        $children_0_6,
        $vaccination_complete,
        $nutrition_treatment,
        $school_dropout,
        $dropout_year_class,
        $girls_education_financial_constraint,
        $education_constraint_details,
        $government_hostel_needed,
        $mjp_health_scheme,
        $subh_mangal_marriage,
        $current_need
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
