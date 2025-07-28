<?php
session_start();
if (isset($_SESSION['user_id'])) {
    header('location: login.php');
    exit;
}
include('include/conn.php');

?>


<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <?php
    include('include/header.php');
    ?>
    <style>
        body {
            margin: 0;
            font-family: 'Segoe UI', sans-serif;
            background-color: #f5f7fa;
        }

        .navbar1 {
            background: linear-gradient(135deg, #003366, #0055a5);
            color: white;
            padding: 16px 30px;
            display: flex;
            justify-content: space-between;
            align-items: center;
            border-radius: 0 0 12px 12px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            margin-top: 3rem;
        }

        .greeting {
            font-size: 18px;
            font-weight: 500;
        }

        .logout-btn {
            background-color: #ff4d4d;
            padding: 8px 14px;
            border: none;
            border-radius: 8px;
            color: white;
            cursor: pointer;
            font-size: 14px;
            display: flex;
            align-items: center;
            transition: background 0.3s;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.2);
        }

        .logout-btn i {
            margin-right: 6px;
        }

        .logout-btn:hover {
            background-color: #e60000;
        }

        .container {
            max-width: 1200px;
            margin: 30px auto;
            padding: 0 20px;
        }

        .status-cards {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .status-card {
            background: white;
            border-radius: 16px;
            padding: 20px;
            display: flex;
            gap: 16px;
            align-items: center;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
            transition: 0.3s ease;
        }

        .card-icon {
            font-size: 28px;
            padding: 16px;
            border-radius: 12px;
            color: white;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .card-content h3 {
            margin: 0;
            font-size: 18px;
            font-weight: 600;
        }

        .card-content .count {
            font-size: 24px;
            font-weight: bold;
            margin-top: 5px;
        }

        /* Status Colors */
        .pending .card-icon {
            background-color: #4d79ff;
        }

        .approved .card-icon {
            background-color: #28a745;
        }

        .rejected .card-icon {
            background-color: #dc3545;
        }

        .completed .card-icon {
            background-color: #ffc107;
        }

        /* Table */
        .table-section {
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 6px 15px rgba(0, 0, 0, 0.05);
        }

        .table-section h3 {
            margin-bottom: 16px;
            font-size: 20px;
        }

        .table-container table {
            width: 100%;
            border-collapse: collapse;
        }

        .table-container thead {
            background-color: #003366;
            color: white;
        }

        .table-container th,
        .table-container td {
            padding: 12px 16px;
            border-bottom: 1px solid #ddd;
            text-align: left;
        }

        .suicide-type {
            padding: 4px 10px;
            border-radius: 8px;
            color: white;
            font-size: 13px;
            font-weight: 500;
        }

        .suicide-type.financial {
            background-color: #007bff;
        }

        .suicide-type.health {
            background-color: #28a745;
        }

        .suicide-type.social {
            background-color: #ff6600;
        }

        #farmerTable tr:hover {
            background-color: #f1f1f1;
            cursor: pointer;
        }
    </style>


</head>

<body>
    <div class="container">
        <div class="main-content">


            <div class="status-cards">
                <div class="status-card pending">
                    <div class="card-icon"><i class="bi bi-clipboard-data"></i></div>
                    <div class="card-content">
                        <h3>एकुण अर्ज</h3>
                        <div class="count">10</div>
                    </div>
                </div>

                <div class="status-card approved">
                    <div class="card-icon"><i class="bi bi-check-circle-fill"></i></div>
                    <div class="card-content">
                        <h3>मंजूर अर्ज</h3>
                        <div class="count">4</div>
                    </div>
                </div>

                <div class="status-card rejected">
                    <div class="card-icon"><i class="bi bi-x-circle-fill"></i></div>
                    <div class="card-content">
                        <h3>नामंजूर अर्ज</h3>
                        <div class="count">3</div>
                    </div>
                </div>

            </div>


            <div class="table-section">
                <h3><i class="bi bi-table"></i> Completed Forms</h3>
                <div class="table-container">
                    <table>
                        <thead>
                            <tr>
                                <th>क्र</th>
                                <th>नाव</th>
                                <th>गाव</th>
                                <th>तालुका</th>
                                <th>आत्महत्येचा प्रकार</th>
                                <th>Status</th>
                            </tr>
                        </thead>
                        <tbody id="farmerTable">
                            <?php
                            $userId = $_SESSION['userId'];
                            $sql = "SELECT farmer_name, suicide_date, village, taluka, suicide_type, status FROM farmer_survey WHERE created_by = '$userId'";

                            $i = 1;
                            $query = mysqli_query($con, $sql);
                            while ($row = mysqli_fetch_assoc($query)) {
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
                                </tr>
                                <?php
                            }
                            ?>
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>

    <script>
        function applyFilter() {
            const mainDate = document.getElementById('mainDate').value;
            const endDate = document.getElementById('endDate').value;

            if (mainDate && endDate) {
                alert(`Filter applied: ${mainDate} to ${endDate}`);
                // Here you would implement actual filtering logic
            } else {
                alert('Please select both dates');
            }
        }

        function removeFilter() {
            document.getElementById('mainDate').value = '';
            document.getElementById('endDate').value = '';
            alert('Filters removed');
            // Here you would reset the table and charts to show all data
        }
    </script>
    <?php
    include('include/footer.php');
    ?>
</body>

</html>