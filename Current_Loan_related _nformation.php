<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>सद्यस्‍थीतीतील कर्ज विषयक माहीती</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <link href="https://fonts.googleapis.com/css2?family=Noto+Sans+Devanagari&display=swap" rel="stylesheet">
    <!--  -->
    <style>
        /* --- Previous Styles (unchanged for consistency) --- */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: 'Segoe UI', sans-serif;
            background: #f2f4f8;
        }

        .container-fluid {
            margin: 20px auto;
            padding: 0 20px;
        }

        .header1 {
            background: linear-gradient(135deg, #1a2835ff, #253a48ff);
            color: white;
            text-align: center;
            padding: 25px 0;
            border-radius: 15px 15px 0 0;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
        }

        .header1 h1 {
            font-size: 2rem;
            font-weight: bold;
        }

        /* Container & Header */
        .container1 {
            margin: 0 auto;
            background: white;
            border-radius: 15px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        /* Section Heading Style */
        .section-heading {
            font-size: 20px;
            font-weight: 600;
            color: #e63946;
            background-color: #fff0f0;
            padding: 12px 20px;
            border-left: 5px solid #e63946;
            border-radius: 8px;
            margin: 20px 0 10px;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.08);
            font-family: 'Segoe UI', sans-serif;
        }

        .section-heading i {
            font-size: 20px;
            margin-right: 8px;
        }

        /* Form Content */
        .form-content {
            padding: 30px;
        }

        /* Question Block */
        .question-block {
            margin-bottom: 35px;
            padding: 25px;
            background: #f8f9fa;
            border-radius: 12px;
            border-left: 5px solid #112da5;
            transition: all 0.3s ease;
        }

        .question-block:hover {
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            transform: translateY(-2px);
        }

        .question-number {
            background: #00072aff;
            color: white;
            width: 30px;
            height: 30px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-weight: bold;
            font-size: 14px;
            margin-bottom: 15px;
        }

        .question-text {
            font-size: 18px;
            font-weight: 600;
            color: #333;
            margin-bottom: 20px;
        }

        .sub-question {
            font-size: 16px;
            color: #555;
            margin-bottom: 15px;
            padding-left: 20px;
            border-left: 3px solid #e0e0e0;
        }

        /* Options Grid */
        .options-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 15px;
            margin-bottom: 20px;
        }

        .option-group {
            background: white;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            padding: 15px;
            transition: all 0.3s ease;
            cursor: pointer;
        }

        .option-group:hover {
            border-color: #667eea;
            box-shadow: 0 2px 8px rgba(102, 126, 234, 0.1);
        }

        .option-group.selected {
            border-color: #667eea;
            background-color: #f8f9ff;
        }

        .option-group label {
            display: block;
            font-weight: 600;
            color: #333;
            margin-bottom: 8px;
            cursor: pointer;
        }

        .option-group input[type="radio"] {
            width: 18px;
            height: 18px;
            cursor: pointer;
        }

        /* Yes/No Section */
        .yes-no-section {
            display: flex;
            gap: 20px;
            margin-top: 20px;
        }

        .yes-no-option {
            flex: 1;
            padding: 15px;
            border: 2px solid #e0e0e0;
            border-radius: 8px;
            text-align: center;
            cursor: pointer;
            transition: all 0.3s ease;
        }

        .yes-no-option:hover {
            border-color: #1e1f24ff;
            background-color: #f8f9ff;
        }

        .yes-no-option.selected {
            border-color: #1b1b1dff;
            background-color: #21232dff;
            color: white;
        }

        .yes-no-option input[type="radio"] {
            display: none;
        }

        .yes-no-option label {
            font-weight: 600;
            font-size: 16px;
            cursor: pointer;
        }

        /* Buttons */
        .submit-section {
            text-align: center;
            margin-top: 40px;
            padding: 20px;
        }

        .submit-btn {
            background: linear-gradient(135deg, #1f212aff 0%, #1b181fff 100%);
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        }

        .submit-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        .reset-btn {
            background: #e74c3c;
            color: white;
            border: none;
            padding: 15px 40px;
            font-size: 18px;
            font-weight: 600;
            border-radius: 10px;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
            margin-left: 20px;
        }

        .reset-btn:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 25px rgba(0, 0, 0, 0.15);
        }

        /* Loan Table */
        .loan-details-table {
            margin-top: 20px;
            background: white;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 2px 8px rgba(0, 0, 0, 0.1);
        }

        .loan-details-table table {
            width: 100%;
            border-collapse: collapse;
            font-size: 14px;
        }

        .loan-details-table th,
        .loan-details-table td {
            padding: 12px 8px;
            text-align: center;
            border: 1px solid #e0e0e0;
            vertical-align: middle;
        }

        .loan-details-table th {
            background: #667eea;
            color: white;
            font-weight: 600;
            font-size: 13px;
        }

        .loan-details-table td:first-child,
        .loan-details-table td:nth-child(2) {
            background: #f8f9fa;
            font-weight: 600;
            color: #667eea;
            text-align: left;
            padding-left: 15px;
        }

        .table-total {
            padding: 15px;
            background: #f8f9fa;
            border-top: 2px solid #667eea;
            text-align: center;
            font-size: 16px;
            color: #667eea;
        }

        .table-note {
            padding: 15px;
            background: #fff3cd;
            border-left: 4px solid #ffc107;
            color: #856404;
            font-size: 14px;
            margin-top: 10px;
        }

        /* Inputs */
        .form-input,
        .form-select {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 6px;
            font-size: 14px;
        }

        .form-select:focus {
            outline: none;
            border-color: #667eea;
            box-shadow: 0 0 0 2px rgba(102, 126, 234, 0.1);
        }

        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 5px;
        }

        /* Responsive */
        @media (max-width: 768px) {
            .container1 {
                margin: 10px;
            }

            .form-content {
                padding: 20px;
            }

            .options-grid {
                grid-template-columns: 1fr;
            }

            .yes-no-section {
                flex-direction: column;
            }

            .submit-section {
                flex-direction: column;
                gap: 15px;
            }

            .reset-btn {
                margin-left: 0;
            }

            .loan-details-table {
                overflow-x: auto;
            }

            .loan-details-table table {
                min-width: 800px;
            }

            .loan-details-table th,
            .loan-details-table td {
                padding: 8px 4px;
                font-size: 12px;
            }
        }
/* Section Styles */
    .form-section {
      margin-bottom: 30px;
    }

    .section-title {
      font-size: 22px;
      color: #2c3e50;
      border-bottom: 2px solid #f0f0f0;
      padding-bottom: 10px;
      margin-bottom: 25px;
    }
.styled-heading {
      font-size: 24px;
      color: #0074cc;
      position: relative;
      display: inline-block;
      margin-bottom: 1.2rem;
      font-weight: 600;
      padding-bottom: 6px;
      padding-left: 5px;
    }

    .styled-heading::after {
      content: '';
      position: absolute;
      left: 0;
      bottom: 0;
      height: 3px;
      width: 100%;
      background-color: #0074cc;
      border-radius: 2px;
    }
        .form-section {
            background-color: #ffffff;
            padding: 24px 32px;
            border-radius: 12px;
            box-shadow: 0 6px 20px rgba(0, 0, 0, 0.08);
            margin: 24px auto;
            border-left: 6px solid #08472cff;
            /* Dark blue vertical line */
            position: relative;
            transition: all 0.3s ease;
        }

        .form-group {
            margin-bottom: 24px;
        }

        .form-label {
            font-size: 17px;
            font-weight: 600;
            color: #1e293b;
            /* slate-800 */
            margin-bottom: 10px;
            display: block;
        }

        .form-input {
            width: 100%;
            padding: 12px 16px;
            border: 1px solid #cbd5e1;
            /* slate-300 */
            border-radius: 10px;
            font-size: 15px;
            background-color: #f9fafb;
            /* subtle bg */
            transition: border-color 0.2s ease, box-shadow 0.2s ease;
        }

        .form-input:focus {
            outline: none;
            border-color: #3b82f6;
            /* blue-500 */
            box-shadow: 0 0 0 2px rgba(59, 130, 246, 0.2);
        }

        .radio-group {
            display: flex;
            flex-wrap: wrap;
            gap: 16px;
            margin-top: 10px;
        }

        .radio-group label {
            background-color: #f8fafc;
            padding: 12px 20px;
            border: 1px solid #d1d5db;
            /* gray-300 */
            border-radius: 10px;
            cursor: pointer;
            display: flex;
            align-items: center;
            gap: 8px;
            font-size: 15px;
            color: #1f2937;
            /* gray-800 */
            transition: all 0.2s ease;
            min-width: 150px;
        }

        .radio-group label:hover {
            border-color: #3b82f6;
            /* blue */
            background-color: #eff6ff;
            /* light blue bg */
        }

        .radio-group input[type="radio"] {
            accent-color: #2563eb;
            /* blue-600 */
            transform: scale(1.2);
            cursor: pointer;
        }
    </style>

</head>
<?php
include('include/header.php')
?>

<body>
    <div class="container-fluid">
        <div class="form-section container mt-4">
                <h1 class="section-title styled-heading text-center mb-4">शेतकरी कर्ज सर्वेक्षण फॉर्म</h1>
                <p style="font-weight:bold">कृपया सर्व प्रश्नांची उत्तरे देऊन फॉर्म भरा</p>
        

            <div class="form-content">
                <form id="surveyForm" action="Agricultural_land_information.php" method="POST" novalidate>


                    <!-- Question 1 -->
                    <div class="question-block">
                        <div class="question-number">1</div>
                        <div class="question-text">राष्ट्रीय बँकेचे कर्ज आहे का?</div>
                        <div class="sub-question">होय असल्यास सविस्तर तपशील (₹)</div>

                        <div class="options-grid">
                            <div class="option-group" onclick="selectAmount(this, 'q1_amount', 'less_than_1_lakh')">
                                <label>१ लक्ष पेक्षा कमी</label>
                                <input type="radio" name="q1_amount" value="less_than_1_lakh" id="q1_opt1">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q1_amount', '1_to_2_lakh')">
                                <label>१ लक्ष ते २ लक्ष</label>
                                <input type="radio" name="q1_amount" value="1_to_2_lakh" id="q1_opt2">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q1_amount', '2_to_3_lakh')">
                                <label>२ लक्ष ते ३ लक्ष</label>
                                <input type="radio" name="q1_amount" value="2_to_3_lakh" id="q1_opt3">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q1_amount', 'more_than_3_lakh')">
                                <label>३ लक्ष पेक्षा जास्त</label>
                                <input type="radio" name="q1_amount" value="more_than_3_lakh" id="q1_opt4">
                            </div>
                        </div>

                        <div class="yes-no-section">
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q1_status', 'yes')">
                                <input type="radio" name="q1_status" value="yes" id="q1_yes">
                                <label for="q1_yes">होय</label>
                            </div>
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q1_status', 'no')">
                                <input type="radio" name="q1_status" value="no" id="q1_no">
                                <label for="q1_no">नाही</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 2 -->
                    <div class="question-block">
                        <div class="question-number">2</div>
                        <div class="question-text">सहकारी संस्थेचे कर्ज आहे का?</div>
                        <div class="sub-question">होय असल्यास सविस्तर तपशील (₹)</div>

                        <div class="options-grid">
                            <div class="option-group" onclick="selectAmount(this, 'q2_amount', 'less_than_1_lakh')">
                                <label>१ लक्ष पेक्षा कमी</label>
                                <input type="radio" name="q2_amount" value="less_than_1_lakh" id="q2_opt1">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q2_amount', '1_to_2_lakh')">
                                <label>१ लक्ष ते २ लक्ष</label>
                                <input type="radio" name="q2_amount" value="1_to_2_lakh" id="q2_opt2">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q2_amount', '2_to_3_lakh')">
                                <label>२ लक्ष ते ३ लक्ष</label>
                                <input type="radio" name="q2_amount" value="2_to_3_lakh" id="q2_opt3">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q2_amount', 'more_than_3_lakh')">
                                <label>३ लक्ष पेक्षा जास्त</label>
                                <input type="radio" name="q2_amount" value="more_than_3_lakh" id="q2_opt4">
                            </div>
                        </div>

                        <div class="yes-no-section">
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q2_status', 'yes')">
                                <input type="radio" name="q2_status" value="yes" id="q2_yes">
                                <label for="q2_yes">होय</label>
                            </div>
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q2_status', 'no')">
                                <input type="radio" name="q2_status" value="no" id="q2_no">
                                <label for="q2_no">नाही</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 3 -->
                    <div class="question-block">
                        <div class="question-number">3</div>
                        <div class="question-text">खितीय संस्थेचे कर्ज आहे का?</div>
                        <div class="sub-question">होय असल्यास सविस्तर तपशील (₹)</div>

                        <div class="options-grid">
                            <div class="option-group" onclick="selectAmount(this, 'q3_amount', 'less_than_1_lakh')">
                                <label>१ लक्ष पेक्षा कमी</label>
                                <input type="radio" name="q3_amount" value="less_than_1_lakh" id="q3_opt1">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q3_amount', '1_to_2_lakh')">
                                <label>१ लक्ष ते २ लक्ष</label>
                                <input type="radio" name="q3_amount" value="1_to_2_lakh" id="q3_opt2">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q3_amount', '2_to_3_lakh')">
                                <label>२ लक्ष ते ३ लक्ष</label>
                                <input type="radio" name="q3_amount" value="2_to_3_lakh" id="q3_opt3">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q3_amount', 'more_than_3_lakh')">
                                <label>३ लक्ष पेक्षा जास्त</label>
                                <input type="radio" name="q3_amount" value="more_than_3_lakh" id="q3_opt4">
                            </div>
                        </div>

                        <div class="yes-no-section">
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q3_status', 'yes')">
                                <input type="radio" name="q3_status" value="yes" id="q3_yes">
                                <label for="q3_yes">होय</label>
                            </div>
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q3_status', 'no')">
                                <input type="radio" name="q3_status" value="no" id="q3_no">
                                <label for="q3_no">नाही</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 4 -->
                    <div class="question-block">
                        <div class="question-number">4</div>
                        <div class="question-text">खाजगी सावकाराचे कर्ज आहे का?</div>
                        <div class="sub-question">होय असल्यास सविस्तर तपशील (₹)</div>

                        <div class="options-grid">
                            <div class="option-group" onclick="selectAmount(this, 'q4_amount', 'less_than_1_lakh')">
                                <label>१ लक्ष पेक्षा कमी</label>
                                <input type="radio" name="q4_amount" value="less_than_1_lakh" id="q4_opt1">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q4_amount', '1_to_2_lakh')">
                                <label>१ लक्ष ते २ लक्ष</label>
                                <input type="radio" name="q4_amount" value="1_to_2_lakh" id="q4_opt2">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q4_amount', '2_to_3_lakh')">
                                <label>२ लक्ष ते ३ लक्ष</label>
                                <input type="radio" name="q4_amount" value="2_to_3_lakh" id="q4_opt3">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q4_amount', 'more_than_3_lakh')">
                                <label>३ लक्ष पेक्षा जास्त</label>
                                <input type="radio" name="q4_amount" value="more_than_3_lakh" id="q4_opt4">
                            </div>
                        </div>

                        <div class="yes-no-section">
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q4_status', 'yes')">
                                <input type="radio" name="q4_status" value="yes" id="q4_yes">
                                <label for="q4_yes">होय</label>
                            </div>
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q4_status', 'no')">
                                <input type="radio" name="q4_status" value="no" id="q4_no">
                                <label for="q4_no">नाही</label>
                            </div>
                        </div>
                    </div>

                    <!-- Question 5 -->
                    <div class="question-block">
                        <div class="question-number">5</div>
                        <div class="question-text">इतर कोणाचे कर्ज आहे का?</div>
                        <div class="sub-question">होय असल्यास सविस्तर तपशील (₹)</div>

                        <div class="options-grid">
                            <div class="option-group" onclick="selectAmount(this, 'q5_amount', 'less_than_1_lakh')">
                                <label>१ लक्ष पेक्षा कमी</label>
                                <input type="radio" name="q5_amount" value="less_than_1_lakh" id="q5_opt1">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q5_amount', '1_to_2_lakh')">
                                <label>१ लक्ष ते २ लक्ष</label>
                                <input type="radio" name="q5_amount" value="1_to_2_lakh" id="q5_opt2">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q5_amount', '2_to_3_lakh')">
                                <label>२ लक्ष ते ३ लक्ष</label>
                                <input type="radio" name="q5_amount" value="2_to_3_lakh" id="q5_opt3">
                            </div>
                            <div class="option-group" onclick="selectAmount(this, 'q5_amount', 'more_than_3_lakh')">
                                <label>३ लक्ष पेक्षा जास्त</label>
                                <input type="radio" name="q5_amount" value="more_than_3_lakh" id="q5_opt4">
                            </div>
                        </div>

                        <div class="yes-no-section">
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q5_status', 'yes')">
                                <input type="radio" name="q5_status" value="yes" id="q5_yes">
                                <label for="q5_yes">होय</label>
                            </div>
                            <div class="yes-no-option" onclick="selectYesNo(this, 'q5_status', 'no')">
                                <input type="radio" name="q5_status" value="no" id="q5_no">
                                <label for="q5_no">नाही</label>
                            </div>
                        </div>
                    </div>
                    <div class="question-block">
                        <div class="question-number">10</div>
                        <div class="question-text">होय असल्यास सविस्तर तपशील (₹)</div>
                        <div class="sub-question">स्वरूप / बाजार कशासाठी</div>

                        <div class="loan-details-table">
                            <table>
                                <thead>
                                    <tr>
                                        <th>अ.क्र.</th>
                                        <th>संस्था</th>
                                        <th>स्वरूप / बाजार कशासाठी</th>
                                        <th>१ लक्ष पेक्षा कमी</th>
                                        <th>१ लक्ष ते २ लक्ष</th>
                                        <th>२ लक्ष ते ३ लक्ष</th>
                                        <th>३ लक्ष पेक्षा जास्त</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <tr>
                                        <td>1</td>
                                        <td>राष्ट्रीय बँकेचे नाव</td>
                                        <td>
                                            <select name="q10_bank_purpose" class="form-select">
                                                <option value="">निवडा</option>
                                                <option value="crop">पिकार</option>
                                                <option value="equipment">उपकरण</option>
                                                <option value="land">जमीन</option>
                                                <option value="other">इतर</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_bank_amount" value="less_than_1_lakh" id="q10_bank_opt1">
                                            <label for="q10_bank_opt1"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_bank_amount" value="1_to_2_lakh" id="q10_bank_opt2">
                                            <label for="q10_bank_opt2"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_bank_amount" value="2_to_3_lakh" id="q10_bank_opt3">
                                            <label for="q10_bank_opt3"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_bank_amount" value="more_than_3_lakh" id="q10_bank_opt4">
                                            <label for="q10_bank_opt4"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>2</td>
                                        <td>सहकारी संस्था</td>
                                        <td>
                                            <select name="q10_coop_purpose" class="form-select">
                                                <option value="">निवडा</option>
                                                <option value="crop">पिकार</option>
                                                <option value="equipment">उपकरण</option>
                                                <option value="land">जमीन</option>
                                                <option value="other">इतर</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_coop_amount" value="less_than_1_lakh" id="q10_coop_opt1">
                                            <label for="q10_coop_opt1"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_coop_amount" value="1_to_2_lakh" id="q10_coop_opt2">
                                            <label for="q10_coop_opt2"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_coop_amount" value="2_to_3_lakh" id="q10_coop_opt3">
                                            <label for="q10_coop_opt3"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_coop_amount" value="more_than_3_lakh" id="q10_coop_opt4">
                                            <label for="q10_coop_opt4"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>3</td>
                                        <td>वित्तीय संस्था</td>
                                        <td>
                                            <select name="q10_financial_purpose" class="form-select">
                                                <option value="">निवडा</option>
                                                <option value="crop">पिकार</option>
                                                <option value="equipment">उपकरण</option>
                                                <option value="land">जमीन</option>
                                                <option value="other">इतर</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_financial_amount" value="less_than_1_lakh" id="q10_financial_opt1">
                                            <label for="q10_financial_opt1"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_financial_amount" value="1_to_2_lakh" id="q10_financial_opt2">
                                            <label for="q10_financial_opt2"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_financial_amount" value="2_to_3_lakh" id="q10_financial_opt3">
                                            <label for="q10_financial_opt3"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_financial_amount" value="more_than_3_lakh" id="q10_financial_opt4">
                                            <label for="q10_financial_opt4"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>4</td>
                                        <td>खाजगी सावकार</td>
                                        <td>
                                            <select name="q10_private_purpose" class="form-select">
                                                <option value="">निवडा</option>
                                                <option value="crop">पिकार</option>
                                                <option value="equipment">उपकरण</option>
                                                <option value="land">जमीन</option>
                                                <option value="other">इतर</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_private_amount" value="less_than_1_lakh" id="q10_private_opt1">
                                            <label for="q10_private_opt1"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_private_amount" value="1_to_2_lakh" id="q10_private_opt2">
                                            <label for="q10_private_opt2"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_private_amount" value="2_to_3_lakh" id="q10_private_opt3">
                                            <label for="q10_private_opt3"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_private_amount" value="more_than_3_lakh" id="q10_private_opt4">
                                            <label for="q10_private_opt4"></label>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td>5</td>
                                        <td>इतर</td>
                                        <td>
                                            <select name="q10_other_purpose" class="form-select">
                                                <option value="">निवडा</option>
                                                <option value="crop">पिकार</option>
                                                <option value="equipment">उपकरण</option>
                                                <option value="land">जमीन</option>
                                                <option value="other">इतर</option>
                                            </select>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_other_amount" value="less_than_1_lakh" id="q10_other_opt1">
                                            <label for="q10_other_opt1"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_other_amount" value="1_to_2_lakh" id="q10_other_opt2">
                                            <label for="q10_other_opt2"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_other_amount" value="2_to_3_lakh" id="q10_other_opt3">
                                            <label for="q10_other_opt3"></label>
                                        </td>
                                        <td>
                                            <input type="radio" name="q10_other_amount" value="more_than_3_lakh" id="q10_other_opt4">
                                            <label for="q10_other_opt4"></label>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>

                            <div class="table-total">
                                <strong>एकूण</strong>
                            </div>

                            <div class="table-note">
                                <strong>टिप:</strong> वरील तक्त्यात कर्जे विषयक स्वरूप व प्रकार खालील संदर्भाने भरावा
                            </div>
                        </div>
                    </div>
                    <div class="question-block">

                        <div class="form-group">
                            <label class="form-label">11. थकबाकीदार आहे का?</label>
                            <div class="radio-group">
                                <label><input type="radio" name="overdue" value="होय"> होय</label>
                                <label><input type="radio" name="overdue" value="नाही"> नाही</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">12. असल्या किती वर्षांपासून प्रलंबित आहे व रक्कम</label>
                            <input type="text" class="form-input" name="pending_years_amount">
                        </div>

                        <div class="form-group">
                            <label class="form-label">13. कर्ज प्रलंबित असण्याबाबत बँक/चिटणीस संस्था/पतसंस्था/ यांची नोटीस आली आहे काय</label>
                            <div class="radio-group">
                                <label><input type="radio" name="bank_notice" value="होय"> होय</label>
                                <label><input type="radio" name="bank_notice" value="नाही"> नाही</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">14. कर्ज परतफेडीसाठी प्रकरण जप्तीपर्यंत आले आहे काय?</label>
                            <div class="radio-group">
                                <label><input type="radio" name="seizure_case" value="होय"> होय</label>
                                <label><input type="radio" name="seizure_case" value="नाही"> नाही</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">15. कर्ज माफी मिळाली आहे काय?</label>
                            <div class="radio-group">
                                <label><input type="radio" name="loan_waived" value="होय"> होय</label>
                                <label><input type="radio" name="loan_waived" value="नाही"> नाही</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">16. कर्ज माफी मिळाली असल्यास वर्ष व रक्कम</label>
                            <input type="text" class="form-input" name="waiver_year_amount" placeholder="वर्ष - रक्कम -">
                        </div>

                        <div class="form-group">
                            <label class="form-label">17. बँकेकडून नव्याने मागणी केली आहे काय?</label>
                            <div class="radio-group">
                                <label><input type="radio" name="new_request" value="होय"> होय</label>
                                <label><input type="radio" name="new_request" value="नाही"> नाही</label>
                            </div>
                        </div>

                        <div class="form-group">
                            <label class="form-label">केली असल्यास तपशील:</label>
                        </div>

                        <div class="form-group">
                            <label class="form-label">१. बँकेचे नाव</label>
                            <input type="text" class="form-input" name="bank_name">
                        </div>

                        <div class="form-group">
                            <label class="form-label">२. शाखा</label>
                            <input type="text" class="form-input" name="branch">
                        </div>

                        <div class="form-group">
                            <label class="form-label">३. कर्ज मागणीचे कारण</label>
                            <input type="text" class="form-input" name="loan_reason">
                        </div>

                        <div class="form-group">
                            <label class="form-label">४. रक्कम रु. मध्ये</label>
                            <input type="text" class="form-input" name="loan_amount">
                        </div>

                    </div>
                    <div class="submit-section">
                        <button type="submit" class="submit-btn">फॉर्म सबमिट करा</button>
                        <button type="reset" class="reset-btn">रीसेट करा</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <!-- SweetAlert2 CDN -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
        function selectYesNo(element, name, value) {
            const parentBlock = element.closest('.question-block');
            const yesNoOptions = parentBlock.querySelectorAll('.yes-no-option');
            yesNoOptions.forEach(option => option.classList.remove('selected'));

            element.classList.add('selected');
            const radioButton = element.querySelector('input[type="radio"]');
            radioButton.checked = true;
        }

        function selectAmount(element, name, value) {
            const parentBlock = element.closest('.question-block');
            const amountOptions = parentBlock.querySelectorAll('.option-group');
            amountOptions.forEach(option => option.classList.remove('selected'));

            element.classList.add('selected');
            const radioButton = element.querySelector('input[type="radio"]');
            radioButton.checked = true;
        }

        // Form submission handler with Bootstrap validation
        document.getElementById('surveyForm').addEventListener('submit', function(e) {
            e.preventDefault();

            const form = this;

            // ✅ Check Bootstrap validation
            if (!form.checkValidity()) {
                form.classList.add('was-validated');
                return; // Stop here if form is invalid
            }

            // ✅ If valid, show confirmation
            Swal.fire({
                title: 'आपण खात्रीने फॉर्म सबमिट करू इच्छिता?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'होय, सबमिट करा',
                cancelButtonText: 'रद्द करा',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit(); // ✅ Submit only after confirmation
                }
            });
        });

        // Reset form handler
        document.querySelector('.reset-btn').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.selected').forEach(el => el.classList.remove('selected'));

            const form = document.getElementById('surveyForm');
            form.reset();
            form.classList.remove('was-validated'); // Remove Bootstrap validation styling
        });
    </script>


    <script>
        function selectYesNo(element, name, value) {
            const parentBlock = element.closest('.question-block');
            const yesNoOptions = parentBlock.querySelectorAll('.yes-no-option');
            yesNoOptions.forEach(option => option.classList.remove('selected'));

            element.classList.add('selected');
            const radioButton = element.querySelector('input[type="radio"]');
            radioButton.checked = true;
        }

        function selectAmount(element, name, value) {
            const parentBlock = element.closest('.question-block');
            const amountOptions = parentBlock.querySelectorAll('.option-group');
            amountOptions.forEach(option => option.classList.remove('selected'));

            element.classList.add('selected');
            const radioButton = element.querySelector('input[type="radio"]');
            radioButton.checked = true;
        }

        // Form submission with SweetAlert confirmation and redirect
        document.getElementById('surveyForm').addEventListener('submit', function(e) {
            e.preventDefault();

            Swal.fire({
                title: 'आपण खात्रीने फॉर्म सबमिट करू इच्छिता?',
                icon: 'question',
                showCancelButton: true,
                confirmButtonText: 'होय, सबमिट करा',
                cancelButtonText: 'रद्द करा',
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
            }).then((result) => {
                if (result.isConfirmed) {
                    // Optional: collect data if needed
                    const formData = new FormData(e.target);
                    const data = {};
                    for (let [key, value] of formData.entries()) {
                        data[key] = value;
                    }

                    // Show success message then redirect
                    Swal.fire({
                        title: 'फॉर्म यशस्वीरित्या सबमिट झाला!',
                        icon: 'success',
                        confirmButtonText: 'ठीक आहे',
                    }).then(() => {
                        window.location.href = 'Agricultural_land_information.php';
                    });
                }
            });
        });

        // Reset form handler
        document.querySelector('.reset-btn').addEventListener('click', function(e) {
            e.preventDefault();
            document.querySelectorAll('.selected').forEach(el => el.classList.remove('selected'));
            document.getElementById('surveyForm').reset();
        });
    </script>



    <?php
    include('include/footer.php');
    ?>
</body>

</html>