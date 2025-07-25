<?php
include('../include/conn.php');

// Generate survey ID for display
$currentYear = date("Y");
$sql = "SELECT MAX(survey_id) AS last_id FROM farmer_survey WHERE survey_id LIKE 'survey{$currentYear}_%'";
$result = $conn->query($sql);
$lastNumber = 0;

if ($result && $result->num_rows > 0) {
    $row = $result->fetch_assoc();
    if ($row['last_id']) {
        $parts = explode('_', $row['last_id']);
        $lastNumber = intval(end($parts));
    }
}

$nextNumber = $lastNumber + 1;
$survey_id = "survey{$currentYear}_" . str_pad($nextNumber, 2, '0', STR_PAD_LEFT);
?>
<!DOCTYPE html>
<html lang="mr">

<head>
    <base href="../">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>आत्महत्याग्रस्त शेतकरी माहिती फॉर्म</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-base.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-ui.min.js"></script>
    <script src="https://cdn.anychart.com/releases/v8/js/anychart-exports.min.js"></script>
    <link href="https://cdn.anychart.com/releases/v8/css/anychart-ui.min.css" type="text/css" rel="stylesheet">
    <link href="https://cdn.anychart.com/releases/v8/fonts/css/an ychart-font.min.css" type="text/css" rel="stylesheet
    ">
    </style>
    <?php
    include('../include/cssLinks.php');
    ?>
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #27ae60;
            --light-bg: #f8f9fa;
            --error-color: #e74c3c;
        }

        /* body {
      background: linear-gradient(135deg, #f1f5f9 0%, #e2e8f0 100%);
      font-family: 'Segoe UI', 'Nirmala UI', 'Arial', sans-serif;
      color: #333;
      min-height: 100vh;
      padding-bottom: 40px;
    } */

        .container-fluid {
            /* max-width: 1200px; */
            margin: 20px auto;
            padding: 0 15px;
        }

        .header1 {
            background: linear-gradient(135deg, var(--primary-color) 0%, var(--secondary-color) 100%);
            color: white;
            text-align: center;
            padding: 30px 0;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.15);
            margin-bottom: 30px;
            /* position: relative; */
            overflow: hidden;
        }

        .header1::before {
            content: "";
            position: absolute;
            top: -50%;
            left: -50%;
            width: 200%;
            height: 200%;
            background: radial-gradient(circle, rgba(255, 255, 255, 0.1) 0%, transparent 70%);
            transform: rotate(30deg);
        }

        .header1 h1 {
            font-size: 2.2rem;
            margin-bottom: 10px;
            font-weight: 700;
            text-shadow: 1px 1px 3px rgba(0, 0, 0, 0.3);
            /* position: relative; */
        }

        .header1 p {
            font-size: 1.1rem;
            opacity: 0.9;
            /* position: relative; */
            max-width: 700px;
            margin: 0 auto;
        }

        .main-container {
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.12);
            overflow: hidden;
            padding: 30px;
            margin-bottom: 30px;
            /* position: relative; */
            z-index: 1;
        }

        .form-label {
            font-weight: 600;
            margin-bottom: 8px;
            color: var(--primary-color);
            font-size: 1.05rem;
            display: block;
        }

        .form-control,
        .form-select {
            border: 2px solid #e0e6ed;
            border-radius: 8px;
            padding: 9px 15px;
            transition: all 0.3s;
            background: var(--light-bg);
            font-size: 1rem;
        }

        .form-control:focus,
        .form-select:focus {
            border-color: var(--secondary-color);
            background: white;
            box-shadow: 0 0 0 4px rgba(52, 152, 219, 0.1);
            outline: none;
        }

        .form-control[readonly] {
            background-color: #f8f9fa;
            border-color: #ced4da;
            cursor: not-allowed;
            opacity: 0.9;
        }

        .btn-submit {
            background: linear-gradient(135deg, var(--accent-color) 0%, #2ecc71 100%);
            border: none;
            border-radius: 50px;
            padding: 14px 45px;
            font-size: 18px;
            font-weight: 600;
            letter-spacing: 0.5px;
            box-shadow: 0 5px 15px rgba(39, 174, 96, 0.3);
            transition: all 0.3s;
            position: relative;
            overflow: hidden;
            color: white;
            display: block;
            margin: 40px auto 10px;
        }

        .btn-submit:hover {
            transform: translateY(-3px);
            box-shadow: 0 8px 20px rgba(39, 174, 96, 0.4);
        }

        .btn-submit:active {
            transform: translateY(-1px);
        }

        .btn-submit::after {
            content: "";
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.3), transparent);
            transition: 0.5s;
        }

        .btn-submit:hover::after {
            left: 100%;
        }

        .form-group {
            margin-bottom: 25px;
        }

        .info-box {
            background: linear-gradient(135deg, rgba(52, 152, 219, 0.1) 0%, rgba(41, 128, 185, 0.1) 100%);
            /* border-left: 4px solid var(--secondary-color); */
            padding: 20px;
            border-radius: 0 8px 8px 0;
            margin: 25px 0;
            font-size: 1rem;
            color: var(--primary-color);
            text-align: left;
            margin-top: -1%;
        }

        .required::after {
            content: " *";
            color: var(--error-color);
        }

        .conditional-field {
            display: none;
            margin-top: 15px;
            animation: fadeIn 0.4s ease;
            padding: 15px;
            border-radius: 8px;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
                transform: translateY(-10px);
            }

            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        .form-footer {
            text-align: center;
            margin-top: 30px;
            color: #7f8c8d;
            font-size: 0.95rem;
            padding-top: 20px;
            border-top: 1px solid #eee;
        }

        .section-divider {
            height: 2px;
            background: linear-gradient(90deg, transparent, var(--secondary-color), transparent);
            margin: 35px 0;
            border: none;
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 8px;
        }

        .radio-option {
            display: flex;
            align-items: center;
        }

        .radio-option input {
            margin-right: 8px;
        }

        .form-row {
            margin-bottom: 20px;
        }

        .form-section {
            margin-bottom: 30px;
            padding: 0 10px;
        }

        /* Validation error styles */
        .validation-error {
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 5px;
            display: none;
            animation: fadeIn 0.3s ease;
        }

        .is-invalid {
            border-color: var(--error-color) !important;
        }

        .is-invalid:focus {
            box-shadow: 0 0 0 4px rgba(231, 76, 60, 0.1) !important;
        }

        .radio-group-error {
            display: block;
            color: var(--error-color);
            font-size: 0.85rem;
            margin-top: 5px;
        }

        .other-field {
            margin-top: 10px;
            display: none;
            animation: fadeIn 0.4s ease;
        }

        .form-banner {
            background: linear-gradient(135deg, rgba(39, 174, 96, 0.1) 0%, rgba(46, 204, 113, 0.1) 100%);
            border-radius: 10px;
            padding: 15px;
            margin-bottom: 20px;
            text-align: center;
            border: 2px dashed var(--accent-color);
        }

        .survey-id-container {
            /* background-color: #e9f7fe; */
            background: var(--light-bg);
            border-radius: 8px;
            padding: 8px 15px;
            /* border-left: 4px solid var(--secondary-color); */
            border: 2px solid #e0e6ed;
        }

        .survey-id-label {
            font-weight: 600;
            color: var(--primary-color);
            font-size: 0.9rem;
            margin-bottom: 3px;
        }

        .survey-id-value {
            font-size: 1.1rem;
            font-weight: 700;
            color: #2c3e50;
        }

        @media (max-width: 768px) {
            .header1 {
                padding: 20px 0;
            }

            .header1 h1 {
                font-size: 1.8rem;
            }

            .main-container {
                padding: 20px;
            }

            .btn-submit {
                width: 100%;
                padding: 15px;
                font-size: 16px;
            }

            .radio-group {
                flex-direction: column;
                gap: 10px;
            }
        }

        .section-title {
            color: #3498db;
            border-bottom: 2px solid #3498db;
            padding-bottom: 12px;
            margin-bottom: 25px;
            font-weight: 700;
            text-align: center;
            font-size: 1.8rem;
        }
    </style>

    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f0f4f8;
            color: #333;
        }

        .navbar1 {
            background-color: #1e2a38;
            color: white;
            padding: 18px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
            border-bottom: 4px solid #00bfa6;
            margin-top: 3rem;
        }

        .greeting {
            font-size: 20px;
            font-weight: 600;
        }

        .logout-btn {
            background-color: #00bfa6;
            padding: 8px 16px;
            border: none;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            transition: 0.3s ease;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
        }

        .logout-btn i {
            margin-right: 8px;
        }

        .logout-btn:hover {
            background-color: #009e8e;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        /* Cards */
        .status-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .status-card {
            background: white;
            border-radius: 18px;
            padding: 20px;
            display: flex;
            gap: 18px;
            align-items: center;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.06);
            transition: 0.3s ease;
            border-left: 6px solid transparent;
        }

        .status-card:hover {
            transform: translateY(-4px);
            box-shadow: 0 12px 24px rgba(0, 0, 0, 0.08);
        }

        .card-icon {
            font-size: 30px;
            padding: 18px;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-content h3 {
            margin: 0;
            font-size: 17px;
            font-weight: 600;
            color: #444;
        }

        .card-content .count {
            font-size: 26px;
            font-weight: bold;
            color: #1e2a38;
        }

        /* Color Types */
        .pending .card-icon {
            background-color: #ffa726;
        }

        .approved .card-icon {
            background-color: #66bb6a;
        }

        .rejected .card-icon {
            background-color: #ef5350;
        }

        .completed .card-icon {
            background-color: #42a5f5;
        }

        /* Admin Table */
        .table-section {
            background: white;
            padding: 24px;
            border-radius: 16px;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.05);
        }

        .table-section h3 {
            margin-bottom: 20px;
            font-size: 22px;
            color: #1e2a38;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
            background-color: #ffffff;
            overflow: hidden;
            border-radius: 12px;
        }

        .table-container thead {
            background-color: #1e2a38;
            color: white;
        }

        .table-container th,
        .table-container td {
            padding: 14px 18px;
            border-bottom: 1px solid #e0e6ed;
            text-align: left;
            font-size: 15px;
        }

        .table-container tbody tr:hover {
            background-color: #f5fafd;
        }

        .actions {
            display: flex;
            gap: 8px;
        }

        .actions button {
            border: none;
            padding: 6px 12px;
            border-radius: 6px;
            color: white;
            cursor: pointer;
            font-size: 13px;
            transition: background 0.2s ease;
        }

        .view-btn {
            background-color: #2196f3;
        }

        .view-btn:hover {
            background-color: #1976d2;
        }

        .edit-btn {
            background-color: #ffca28;
            color: #1e2a38;
        }

        .edit-btn:hover {
            background-color: #fbc02d;
        }

        .delete-btn {
            background-color: #e53935;
        }

        .delete-btn:hover {
            background-color: #c62828;
        }

        .dashboard-card {
            display: flex;
            align-items: center;
            justify-content: space-between;
            padding: 1rem 1.2rem;
            border-radius: 1.2rem;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.06);
            color: #333;
            min-width: 200px;
            max-width: 280px;
            margin: 10px;
            flex: 1;
        }

        .dashboard-card .icon-box {
            font-size: 2rem;
            padding: 0.8rem;
            border-radius: 50%;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-right: 1rem;
        }

        /* Text area */
        .dashboard-card .text-content {
            display: flex;
            flex-direction: column;
        }

        .dashboard-card .label {
            font-size: 1rem;
            font-weight: 500;
        }

        .dashboard-card .value {
            font-size: 1.5rem;
            font-weight: 700;
            margin-top: 0.2rem;
        }

        /* Card variants */
        .card-total {
            background-color: #eaf3ff;
        }

        .card-total .icon-box {
            background-color: #2b78e4;
        }

        .card-approved {
            background-color: #e6f7eb;
        }

        .card-approved .icon-box {
            background-color: #28a745;
        }

        .card-rejected {
            background-color: #fdeeee;
        }

        .card-rejected .icon-box {
            background-color: #dc3545;
        }

        .card-pending {
            background-color: #fffbea;
        }

        .card-pending .icon-box {
            background-color: #ffc107;
        }

        /* Responsive Flex */
        .dashboard-row {
            display: flex;
            flex-wrap: wrap;
            gap: 1rem;
        }
    </style>
</head>

<body>
    <?php include('../include/admin-header.php'); ?>

    <div class="container-fluid">
        <div class="main-container">

            <div class="container">
                <div class="dashboard-row">
                    <div class="dashboard-card card-total">
                        <div class="icon-box"><i class="fas fa-clipboard-list"></i></div>
                        <div class="text-content">
                            <div class="label">एकूण अर्ज</div>
                            <div class="value">10</div>
                        </div>
                    </div>

                    <div class="dashboard-card card-approved">
                        <div class="icon-box"><i class="fas fa-check-circle"></i></div>
                        <div class="text-content">
                            <div class="label">मंजूर अर्ज</div>
                            <div class="value">4</div>
                        </div>
                    </div>

                    <div class="dashboard-card card-rejected">
                        <div class="icon-box"><i class="fas fa-times-circle"></i></div>
                        <div class="text-content">
                            <div class="label">नामंजूर अर्ज</div>
                            <div class="value">3</div>
                        </div>
                    </div>

                    <div class="dashboard-card card-pending">
                        <div class="icon-box"><i class="fas fa-hourglass-half"></i></div>
                        <div class="text-content">
                            <div class="label">प्रलंबित अर्ज</div>
                            <div class="value">3</div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4">
                    <div class="table-section my-3">
                        <div class="row">
                            <div class="col-md-12">
                                <h3>आत्महत्येचा प्रकार</h3>
                                <div id="container" style="width: 100%;height: 300px;"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-8">
                    <div class="table-section">
                        <h3><i class="bi bi-table"></i> User Submissions</h3>
                        <div class="table-container">
                            <table>
                                <thead>
                                    <tr>
                                        <th>Name</th>
                                        <th>Taluka</th>
                                        <th>Village</th>
                                        <th>Submitted On</th>
                                        <th>Status</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>Gaurav Patil</td>
                                        <td>Haveli</td>
                                        <td>Wagholi</td>
                                        <td>2025-07-15</td>
                                        <td>Pending</td>
                                    </tr>
                                    <tr>
                                        <td>Ravi Deshmukh</td>
                                        <td>Mulshi</td>
                                        <td>Paud</td>
                                        <td>2025-07-12</td>
                                        <td>Approved</td>
                                    </tr>
                                    <tr>
                                        <td>Sunil Shinde</td>
                                        <td>Pune City</td>
                                        <td>Shivajinagar</td>
                                        <td>2025-07-10</td>
                                        <td>Rejected</td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <script>
            function confirmSubmit() {
                Swal.fire({
                    title: 'तुम्हाला खात्री आहे का?',
                    text: "फॉर्म सबमिट केल्यावर पुढील पानावर जाल.",
                    icon: 'question',
                    showCancelButton: true,
                    confirmButtonText: 'हो, सबमिट करा',
                    cancelButtonText: 'रद्द करा',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        document.getElementById('farmerForm').submit(); // ✅ Properly submits the form
                    }
                });
            }
        </script>

        <?php include '../include/footer.php'; ?>

        <script>

            anychart.onDocumentReady(function () {
                // create pie chart with passed data
                var chart = anychart.pie([
                    ['विष प्राशन', 1222],
                    ['विहीरीत उडी', 2431],
                    ['गळफास', 3624],
                    ['इतर', 5243],
                ]);

                // set chart title text settings
                chart
                    // .title   ('Cosmetic Sales with Grouped Point')
                    // set points grouping settings
                    .group(function (value) {
                        return value >= 1000;
                    });

                chart.labels().position('outside');
                // set container id for the chart
                chart.container('container');
                // initiate chart drawing
                chart.draw();
            });

        </script>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
        <script>
            document.addEventListener('DOMContentLoaded', function () {
                // Set today's date for survey date field
                const today = new Date().toISOString().split('T')[0];
                document.querySelector('input[name="survey_date"]').value = today;

                // Migration radio button logic
                const migrationYes = document.getElementById('migrationYes');
                const migrationNo = document.getElementById('migrationNo');
                const migrationDetails = document.getElementById('migrationDetails');

                migrationYes.addEventListener('change', function () {
                    if (this.checked) {
                        migrationDetails.style.display = 'block';
                    }
                });

                migrationNo.addEventListener('change', function () {
                    if (this.checked) {
                        migrationDetails.style.display = 'none';
                    }
                });

                // Benefits radio button logic
                const benefitsYes = document.getElementById('benefitsYes');
                const benefitsNo = document.getElementById('benefitsNo');
                const benefitsDetails = document.getElementById('benefitsDetails');

                benefitsYes.addEventListener('change', function () {
                    if (this.checked) {
                        benefitsDetails.style.display = 'block';
                    }
                });

                benefitsNo.addEventListener('change', function () {
                    if (this.checked) {
                        benefitsDetails.style.display = 'none';
                    }
                });

                // Loan radio button logic
                const loanYes = document.getElementById('loanYes');
                const loanNo = document.getElementById('loanNo');
                const loanDetails = document.getElementById('loanDetails');

                loanYes.addEventListener('change', function () {
                    if (this.checked) {
                        loanDetails.style.display = 'block';
                    }
                });

                loanNo.addEventListener('change', function () {
                    if (this.checked) {
                        loanDetails.style.display = 'none';
                    }
                });

                // Aadhaar formatting
                const aadhaarInput = document.getElementById('aadhaar');
                aadhaarInput.addEventListener('input', function (e) {
                    let value = this.value.replace(/\D/g, '').substring(0, 12);
                    const parts = value.match(/.{1,4}/g);
                    this.value = parts ? parts.join(' ') : '';
                });

                // "Other" field handlers
                const suicideType = document.getElementById('suicideType');
                const suicideTypeOther = document.getElementById('suicideTypeOther');

                suicideType.addEventListener('change', function () {
                    if (this.value === 'इतर') {
                        suicideTypeOther.style.display = 'block';
                    } else {
                        suicideTypeOther.style.display = 'none';
                    }
                });

                const educationLevel = document.getElementById('educationLevel');
                const educationOther = document.getElementById('educationOther');

                educationLevel.addEventListener('change', function () {
                    if (this.value === 'इतर') {
                        educationOther.style.display = 'block';
                    } else {
                        educationOther.style.display = 'none';
                    }
                });

                const occupationType = document.getElementById('occupationType');
                const occupationOther = document.getElementById('occupationOther');

                occupationType.addEventListener('change', function () {
                    if (this.value === 'इतर') {
                        occupationOther.style.display = 'block';
                    } else {
                        occupationOther.style.display = 'none';
                    }
                });

                const relationSelect = document.querySelector('select[name="informant_relation"]');
                const relationOther = document.getElementById('relationOther');

                relationSelect.addEventListener('change', function () {
                    if (this.value === 'इतर') {
                        relationOther.style.display = 'block';
                    } else {
                        relationOther.style.display = 'none';
                    }
                });

                // Form validation
                const form = document.getElementById('farmerForm');

                // Add input event listeners to clear validation errors
                const inputs = form.querySelectorAll('input, select, textarea');
                inputs.forEach(input => {
                    input.addEventListener('input', function () {
                        this.classList.remove('is-invalid');
                        const errorElement = this.nextElementSibling;
                        if (errorElement && errorElement.classList.contains('validation-error')) {
                            errorElement.style.display = 'none';
                        }
                    });

                    // For radio buttons
                    if (input.type === 'radio') {
                        input.addEventListener('change', function () {
                            const radioGroup = this.closest('.radio-group');
                            if (radioGroup) {
                                const errorElement = radioGroup.nextElementSibling;
                                if (errorElement && errorElement.classList.contains('validation-error')) {
                                    errorElement.style.display = 'none';
                                }
                            }
                        });
                    }
                });

                // Form submission
                form.addEventListener('submit', function (e) {
                    e.preventDefault();
                    let isValid = true;

                    // Reset all errors
                    document.querySelectorAll('.validation-error').forEach(el => {
                        el.style.display = 'none';
                    });
                    document.querySelectorAll('.is-invalid').forEach(el => {
                        el.classList.remove('is-invalid');
                    });

                    // Validate all required fields
                    const requiredFields = form.querySelectorAll('[required]');
                    requiredFields.forEach(field => {
                        let fieldValid = true;

                        if (field.type === 'radio') {
                            const radioGroup = document.querySelectorAll(`[name="${field.name}"]`);
                            const isChecked = Array.from(radioGroup).some(radio => radio.checked);
                            if (!isChecked) {
                                fieldValid = false;
                                // Find the error element after the radio group
                                const radioGroupContainer = radioGroup[0].closest('.radio-group');
                                if (radioGroupContainer) {
                                    const errorElement = radioGroupContainer.nextElementSibling;
                                    if (errorElement && errorElement.classList.contains('validation-error')) {
                                        errorElement.style.display = 'block';
                                    }
                                }
                            }
                        } else if (!field.value) {
                            fieldValid = false;
                            field.classList.add('is-invalid');
                            const errorElement = field.nextElementSibling;
                            if (errorElement && errorElement.classList.contains('validation-error')) {
                                errorElement.style.display = 'block';
                            }
                        }

                        if (!fieldValid) {
                            isValid = false;
                        }
                    });

                    // Validate "Other" fields if visible
                    const otherFields = [
                        { select: suicideType, input: suicideTypeOther },
                        { select: educationLevel, input: educationOther },
                        { select: occupationType, input: occupationOther },
                        { select: relationSelect, input: relationOther }
                    ];

                    otherFields.forEach(item => {
                        if (item.select.value === 'इतर') {
                            const otherInput = item.input.querySelector('input');
                            if (!otherInput.value) {
                                isValid = false;
                                otherInput.classList.add('is-invalid');
                                const errorElement = document.createElement('div');
                                errorElement.className = 'validation-error';
                                errorElement.textContent = 'कृपया इतर माहिती प्रविष्ट करा';
                                errorElement.style.display = 'block';
                                if (!otherInput.nextElementSibling ||
                                    !otherInput.nextElementSibling.classList.contains('validation-error')) {
                                    otherInput.parentNode.appendChild(errorElement);
                                }
                            }
                        }
                    });

                    if (!isValid) {
                        Swal.fire({
                            icon: 'error',
                            title: 'त्रुटी',
                            text: 'कृपया सर्व आवश्यक माहिती भरा.',
                            confirmButtonText: 'ठीक आहे'
                        });
                        return;
                    }

                    // Submit the form if valid
                    form.submit();
                });
            });
        </script>
</body>

</html>