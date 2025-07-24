<!DOCTYPE html>
<html lang="hi">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet" />
    <?php
    include('include/cssLinks.php');
    // include('include/header.php');
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
    <div class="navbar1">
        <div class="greeting">👋 Hi Admin</div>
        <button class="logout-btn">
            <i class="bi bi-box-arrow-right"></i> Logout
        </button>
    </div>

    <h4 class="section-title">Report
    </h4>


    <div class="table-section">


        <h5>भाग १ - प्राथमिक माहिती</h5>

        <div class="table-responsive">
            <table>
                <tr>
                    <th>क्रमांक</th>
                    <th>सर्वेक्षण दिनांक</th>
                    <th>शेतकऱ्याचे नाव</th>
                    <th>आत्महत्येचा दिनांक</th>
                    <th>आत्महत्येचा प्रकार</th>
                    <th>आत्महत्येचे कारण</th>
                    <th>वय</th>
                    <th>लिंग</th>
                    <th>जन्म दिनांक</th>
                    <th>आधार क्रमांक</th>
                    <th>बँक खाते क्रमांक</th>
                    <th>IFSC कोड</th>
                    <th>गावाचे नाव</th>
                    <th>तालुका</th>
                    <th>जिल्हा</th>
                    <th>माहिती देणाऱ्याचे नाव</th>
                    <th>स्थलांतर?</th>
                    <th>स्थलांतर तपशील</th>
                    <th>शासकीय लाभ?</th>
                    <th>योजना तपशील</th>
                    <th>शिक्षण</th>
                    <th>प्रमुख व्यवसाय</th>
                    <th>7/12 वर बोजा?</th>
                    <th>बोजा केव्हापासून</th>
                    <th>बोजा तपशील</th>
                </tr>
                <tr>
                    <td>1</td>
                    <td>10/07/2025</td>
                    <td>रामराव देशमुख</td>
                    <td>05/06/2025</td>
                    <td>विष प्राशन</td>
                    <td>कर्जबाजारीपणा</td>
                    <td>45</td>
                    <td>पुरुष</td>
                    <td>12/03/1980</td>
                    <td>1234-5678-9012</td>
                    <td>1234567890</td>
                    <td>SBIN0001234</td>
                    <td>दहेगाव</td>
                    <td>पंढरपूर</td>
                    <td>सोलापूर</td>
                    <td>शिवाजी देशमुख</td>
                    <td>होय</td>
                    <td>कामासाठी शहरात स्थलांतर</td>
                    <td>होय</td>
                    <td>प्रधानमंत्री किसान योजना</td>
                    <td>माध्यमिक</td>
                    <td>स्वतःची शेती</td>
                    <td>होय</td>
                    <td>2023-04</td>
                    <td>बँकेचे 5 लाख कर्ज</td>
                </tr>
            </table>
        </div>


        <!--section2-->

        <div class="table-responsive">
            <table border="1" class="table table-bordered text-center align-middle">
                <thead>
                    <tr>
                        <th colspan="8">भाग २ - कौटुंबिक माहिती</th>
                    </tr>
                    <tr>
                        <th colspan="8">१. शेतकरी कुटुंबातील सदस्य</th>
                    </tr>
                    <tr>
                        <th>अ.क्र</th>
                        <th>सदस्याचे नाव</th>
                        <th>वय</th>
                        <th>लिंग</th>
                        <th>शेतकऱ्याशी नाते</th>
                        <th>शिक्षण</th>
                        <th>व्यवसाय</th>
                        <th>आरोग्य विषयक / विमा तपशील</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>रामराव देशमुख</td>
                        <td>45</td>
                        <td>पुरुष</td>
                        <td>वडील</td>
                        <td>पदवी</td>
                        <td>शेती</td>
                        <td>PMJAY विमा</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>सविता देशमुख</td>
                        <td>42</td>
                        <td>स्त्री</td>
                        <td>पत्नी</td>
                        <td>माध्यमिक</td>
                        <td>गृहिणी</td>
                        <td>आरोग्य कार्ड</td>
                    </tr>
                    <!-- आणखी सदस्यांची माहिती इथे टाका -->
                </tbody>
            </table>
        </div>



        <!--section3-->
        <style>
            table,
            th,
            td {
                border: 1px solid #000 !important;
            }

            th,
            td {
                vertical-align: middle;
                text-align: center;
                padding: 8px;
            }
        </style>

        <h5 class="text-center fw-bold my-4">इतर कौटुंबिक माहिती</h5>

        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>अ.क्र</th>
                        <th>कुटुंबात विवाह योग्य मुली आहेत काय?</th>
                        <th>मुलीच्या विवाहासाठी आर्थिक अडचण आहे का?</th>
                        <th>घरात/बाहेर आदर नाही का?</th>
                        <th>कर्जामुळे कलह होतो का?</th>
                        <th>व्यसन आहे का?</th>
                        <th>व्यसनाचा प्रकार</th>
                        <th>गंभीर आजार आहे का?</th>
                        <th>अजाराचा प्रकार</th>
                        <th>आत्महत्या / प्रयत्न</th>
                        <th>बेरोजगार आहेत का?</th>
                        <th>बेरोजगार संख्या</th>
                        <th>आर्थिक अडचण निर्माण झाली का?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td>दारू</td>
                        <td>नाही</td>
                        <td>-</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>2</td>
                        <td>होय</td>
                    </tr>
                </tbody>
            </table>
        </div>


        <!--section4-->
        <style>
            h5 {
                font-weight: bold;
                text-align: center;
                margin-bottom: 15px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            table {
                width: 100%;
                min-width: 1000px;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #333;
                padding: 10px;
                text-align: center;
            }

            label {
                margin-right: 10px;
            }
        </style>
        <h5 style="font-weight:bold;">२. घरघुती सुविधा विषयक माहिती</h5>

        <div class="table-responsive">
            <table border="1" cellpadding="8" cellspacing="0"
                style="width:100%; border-collapse:collapse; text-align:center;">
                <thead>
                    <tr>
                        <th>स्वतःचे घर आहे का?</th>
                        <th>असल्यास प्रकार?</th>
                        <th>शासकीय योजनेतून मिळाले आहे का?</th>
                        <th>घरकुल योजनेअंतर्गत घराची आवश्यकता?</th>
                        <th>घरासाठी कर्ज काढले आहे का?</th>
                        <th>वीज जोडणी आहे का?</th>
                        <th>गॅस जोडणी आहे का?</th>
                        <th>नळ जोडणी आहे का?</th>
                        <th>घरी शौचालय आहे का?</th>
                        <th>स्वच्छ भारत मिशन अंतर्गत मागणी केली आहे का?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>होय</td>
                        <td>पक्के</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>नाही</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--section5-->
        <style>
            h5 {
                font-weight: bold;
                text-align: center;
                margin-bottom: 15px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            table {
                width: 100%;
                min-width: 1200px;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #333;
                padding: 10px;
                text-align: center;
            }
        </style>

        <h5>३. सामाजिक सहभाग विषयक माहिती</h5>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>ग्रामपंचायत/सोसायटी/समिती सदस्य?</th>
                        <th>तपशील</th>
                        <th>बचत गट सदस्य?</th>
                        <th>तपशील</th>
                        <th>बचत गट लाभ?</th>
                        <th>तपशील</th>
                        <th>शेतकरी उत्पादक गट सदस्य?</th>
                        <th>तपशील</th>
                        <th>इतर उपक्रम सदस्य?</th>
                        <th>तपशील</th>
                        <th>धार्मिक कार्याची आवड?</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>होय</td>
                        <td>ग्रामपंचायत सदस्य 2022 पासून</td>
                        <td>नाही</td>
                        <td>-</td>
                        <td>होय</td>
                        <td>स्वयंरोजगारासाठी कर्ज मिळाले</td>
                        <td>नाही</td>
                        <td>-</td>
                        <td>होय</td>
                        <td>महिला मंडळात सक्रीय</td>
                        <td>भजन आणि कीर्तन</td>
                    </tr>
                </tbody>
            </table>
        </div>

        <!--section6-->
        <style>
            h5 {
                font-weight: bold;
                text-align: center;
                margin-bottom: 15px;
            }

            .table-responsive {
                overflow-x: auto;
            }

            table {
                width: 100%;
                min-width: 1500px;
                border-collapse: collapse;
            }

            th,
            td {
                border: 1px solid #444;
                padding: 10px;
                text-align: center;
                vertical-align: middle;
            }

            textarea,
            input[type="text"] {
                width: 100%;
                height: 50px;
                border: none;
                resize: none;
                background-color: #f9f9f9;
            }

            textarea:focus,
            input[type="text"]:focus {
                outline: none;
            }
        </style>

        <h5>४. कल्याणकारी योजनेचा लाभ विषयक माहिती (फक्त डिस्प्ले)</h5>

        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>पिवळे रेशन कार्ड?</th>
                        <th>तपशील</th>
                        <th>नरेगा कार्ड?</th>
                        <th>अन्न सुरक्षा लाभ?</th>
                        <th>महिना लाभ (कि.ग्रॅ.)</th>
                        <th>पात्र योजना</th>
                        <th>जीवनदायी योजना?</th>
                        <th>सामुहिक विवाह?</th>
                        <th>सद्यस्थितीत गरज?</th>
                        <th>जनधन खाते?</th>
                        <th>निराधार योजना?</th>
                        <th>श्रावणबाळ योजना?</th>
                        <th>विधवा निवृत्ती?</th>
                        <th>वृद्धापकाळ योजना?</th>
                        <th>अपंग निवृत्ती?</th>
                        <th>जीवनज्योत विमा?</th>
                        <th>इतर योजना?</th>
                        <th>तपशील</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>होय</td>
                        <td><textarea readonly>उदा: 123456789</textarea></td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>
                            <input type="text" value="गहू: 5kg"><br>
                            <input type="text" value="तांदूळ: 3kg"><br>
                            <input type="text" value="डाळ: 2kg"><br>
                            <input type="text" value="साखर: 1kg">
                        </td>
                        <td>पात्र नसल्यास – अर्ज केला आहे</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td><textarea readonly>इतर – उज्ज्वला योजना</textarea></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--section7-->
        <style>
            table,
            th,
            td {
                border: 1px solid #666;
                border-collapse: collapse;
            }

            th,
            td {
                padding: 8px;
                text-align: center;
                vertical-align: middle;
            }

            th {
                background-color: #f8f9fa;
            }

            h5 {
                font-weight: bold;
            }

            input[readonly],
            textarea[readonly] {
                border: none;
                background-color: #f9f9f9;
                resize: none;
                width: 100%;
            }
        </style>

        <h5>5. आरोग्‍य पोषण व शिक्षण विषयक माहीती</h5>
        <div class="table-responsive">
            <table>
                <thead>
                    <tr>
                        <th>1. आरोग्य उपचाराची आवश्यकता आहे का?</th>
                        <th>2. सविस्तर तपशील</th>
                        <th>3. गरोदर माता आहे का?</th>
                        <th>4. जननी माता योजनेचा लाभ?</th>
                        <th>5. 0 ते 6 वयोगटातील बालक?</th>
                        <th>6. लसीकरण झाले आहे का?</th>
                        <th>7. पोषण आहार व उपचार?</th>
                        <th>8. शिक्षण सोडले आहे का?</th>
                        <th>9. वर्ष व वर्ग</th>
                        <th>10. आर्थिक विवंचना?</th>
                        <th>11. तपशील</th>
                        <th>12. होस्टेलची आवश्यकता?</th>
                        <th>13. होस्टेल तपशील</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>होय</td>
                        <td><input type="text" value="डॉक्टर भेट आवश्यक आहे" readonly></td>
                        <td>नाही</td>
                        <td>नाही</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td>होय</td>
                        <td>नाही</td>
                        <td><input type="text" value="2023 - इयत्ता 4 थी" readonly></td>
                        <td>होय</td>
                        <td><input type="text" value="आई-वडील दोघेही बेरोजगार" readonly></td>
                        <td>होय</td>
                        <td><input type="text" value="नजीकचे शहर – नागपूर" readonly></td>
                    </tr>
                </tbody>
            </table>
        </div>
        <!--section7-->
        <h5>6. सद्यस्‍थीतीतील कर्ज विषयक माहीती
        </h5>
        <div class="table-responsive">
            <table border="1" cellpadding="8" cellspacing="0"
                style="width:100%; border-collapse:collapse; text-align:center;">
                <thead>
                    <tr>
                        <th>क्रमांक</th>
                        <th>कर्जाचा प्रकार</th>
                        <th>कर्ज आहे का?</th>
                        <th>1 लाख पेक्षा कमी</th>
                        <th>1 लाख ते 2 लाख</th>
                        <th>2 लाख ते 3 लाख</th>
                        <th>3 लाख पेक्षा जास्त</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>राष्ट्रीय बँकेचे कर्ज</td>
                        <td>होय</td>
                        <td>✓</td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>सहकारी संस्थेचे कर्ज</td>
                        <td>नाही</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>वित्तीय संस्थेचे कर्ज</td>
                        <td>होय</td>
                        <td></td>
                        <td>✓</td>
                        <td></td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>4</td>
                        <td>खाजगी सावकाराचे कर्ज</td>
                        <td>होय</td>
                        <td></td>
                        <td></td>
                        <td>✓</td>
                        <td></td>
                    </tr>
                    <tr>
                        <td>5</td>
                        <td>इतर कोणाचे कर्ज</td>
                        <td>नाही</td>
                        <td></td>
                        <td></td>
                        <td></td>
                        <td></td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>
    <?php
    include('include/footer.php');
    ?>

</body>

</html>