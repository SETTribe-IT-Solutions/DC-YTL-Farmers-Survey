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
</head>

<body>
    <?php include('../include/admin-header.php'); ?>

    <div class="container-fluid">
        <div class="main-container">
            <h4 class="section-title">
                Question wise report
            </h4>
            <div class="text-end">
                <a href="admin/question-wise-report.php">
                    <button type="button" class="btn btn-primary">
                        Back
                    </button>
                </a>
            </div>

            <div class="row">
                <div class="col-md-12">
                    <div class="table-responsive">
                        <table class="table table-bordered">
                            <thead>
                                <tr>
                                    <th>क्र</th>
                                    <th>नाव</th>
                                    <th>गाव</th>
                                    <th>तालुका</th>
                                    <th>आत्महत्येचा प्रकार</th>
                                    <th>Status</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody id="farmerTable">
                                <?php
                                $sql = "SELECT survey_id, farmer_name, suicide_date, village, taluka, suicide_type, status FROM farmer_survey";

                                $i = 1;
                                $query = mysqli_query($con, $sql);
                                if (0 == 0) {
                                    ?>
                                    <td>No Data available</td>
                                    <?php
                                }
                                /* while ($row = mysqli_fetch_assoc($query)) {
                                    ?>
                                    <tr>
                                        <td><?php echo $i++; ?></td>
                                        <td><?php echo $row['farmer_name']; ?></td>
                                        <td><?php echo $row['village']; ?></td>
                                        <td><?php echo $row['taluka']; ?></td>
                                        <td>
                                            <?php
                                            echo $row['suicide_type'];
                                            // if ($row['suicide_type'] == 'इतर') {
                                            //     echo ' (' . $row['suicide_type_other'] . ')';
                                            // }
                                            ?>

                                        </td>
                                        <td><?php echo $row['status']; ?></td>
                                        <td>

                                            <a href="view_survey.php?id=<?php echo $row['survey_id']; ?>"><button
                                                    class="btn btn-primary">View</button></a>
                                        </td>
                                    </tr>
                                    <?php
                                }*/
                                ?>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php include '../include/footer.php'; ?>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</body>

</html>