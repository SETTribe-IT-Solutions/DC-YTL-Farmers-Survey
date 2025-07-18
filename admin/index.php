<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <?php
    // include('../include/header.php');
    ?>
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
    <div class="navbar1">
        <div class="greeting">👋 Hi Admin</div>
        <button class="logout-btn">
            <i class="bi bi-box-arrow-right"></i> Logout
        </button>
    </div>
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
    <?php
    include('../include/footer.php');
    ?>

</body>

</html>