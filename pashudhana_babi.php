<?php
include('include/conn.php');

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
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>आत्महत्याग्रस्त शेतकरी माहिती फॉर्म</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <?php
  include('include/cssLinks.php');
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
  <?php include('include/header.php'); ?>

  <div class="container-fluid">
    <!-- <div class="header1">
      <h4>आत्महत्याग्रस्त शेतकरी माहिती फॉर्म</h4>
      <p>महाराष्ट्र सरकारची शेतकरी कल्याण योजना</p>
    </div> -->

    <div class="main-container">
      <!-- <div class="form-banner">
        <h4>शेतकऱ्यांच्या कुटुंबासाठी सहाय्य योजना</h4>
        <p>महाराष्ट्र सरकारच्या योजनेअंतर्गत आत्महत्या झालेल्या शेतकऱ्यांच्या कुटुंबियांना सहाय्य</p>
      </div> -->
      <h4 class="section-title">
        <i class="fas fa-info-circle info-icon"></i>आत्महत्याग्रस्त शेतकरी माहिती फॉर्म
      </h4>

      <div class="info-box">
        पशुधन विषयक बाबी

      </div>

      <form id="livestockForm" onsubmit="return validateForm()">

        <div class="row border">
          <!-- Country Cow -->
          <div class="col-12 mb-2">
            <strong>1. देशी गाय</strong>
            <div class="row mt-2">
              <div class="col-md-2">
                <label>संख्या<span class="text-danger">*</span></label>
                <input type="number" name="deshi_count" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                <select name="deshi_insurance" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                <input type="text" name="deshi_by_dept" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                <select name="deshi_vaccinated" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                <input type="number" name="deshi_income" class="form-control" required>
              </div>
            </div>
          </div>

          <!-- Sankarit Cow -->
          <div class="col-12 mt-2 mb-2">
            <strong>2. संकरीत गाय</strong>
            <div class="row mt-2">
              <div class="col-md-2">
                <label>संख्या</label>
                <input type="number" name="sankarit_count" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                <select name="sankarit_insurance" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                <input type="text" name="sankarit_by_dept" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                <select name="sankarit_vaccinated" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                <input type="number" name="sankarit_income" class="form-control" required>
              </div>
            </div>
          </div>

          <!-- Bail -->
          <div class="col-12 mt-2 mb-2">
            <strong>3. बैल</strong>
            <div class="row mt-2">
              <div class="col-md-2">
                <label>संख्या<span class="text-danger">*</span></label>
                <input type="number" name="bull_count" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                <select name="bull_insurance" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                <input type="text" name="bull_by_dept" class="form-control" required>
              </div>
              <div class="col-md-2">
                <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                <select name="bull_vaccinated" class="form-control" required>
                  <option value="">निवडा</option>
                  <option value="होय">होय</option>
                  <option value="नाही">नाही</option>
                </select>
              </div>
              <div class="col-md-3">
                <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                <input type="number" name="bull_income" class="form-control" required>
              </div>
            </div>



            <!-- mahis -->
            <div class="col-12 mt-2 mb-2">
              <strong>4. म्‍हैस</strong>
              <div class="row mt-2">
                <div class="col-md-2">
                  <label>संख्या<span class="text-danger">*</span></label>
                  <input type="number" name="bull_count" class="form-control" required>
                </div>
                <div class="col-md-2">
                  <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                  <select name="bull_insurance" class="form-control" required>
                    <option value="">निवडा</option>
                    <option value="होय">होय</option>
                    <option value="नाही">नाही</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                  <input type="text" name="bull_by_dept" class="form-control" required>
                </div>
                <div class="col-md-2">
                  <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                  <select name="bull_vaccinated" class="form-control" required>
                    <option value="">निवडा</option>
                    <option value="होय">होय</option>
                    <option value="नाही">नाही</option>
                  </select>
                </div>
                <div class="col-md-3">
                  <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                  <input type="number" name="bull_income" class="form-control" required>
                </div>
              </div>
              <!---3sheli-->
              <div class="col-12 mt-2 mb-2">
                <strong>5.शेळी</strong>
                <div class="row mt-2">
                  <div class="col-md-2">
                    <label>संख्या<span class="text-danger">*</span></label>
                    <input type="number" name="bull_count" class="form-control" required>
                  </div>
                  <div class="col-md-2">
                    <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                    <select name="bull_insurance" class="form-control" required>
                      <option value="">निवडा</option>
                      <option value="होय">होय</option>
                      <option value="नाही">नाही</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                    <input type="text" name="bull_by_dept" class="form-control" required>
                  </div>
                  <div class="col-md-2">
                    <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                    <select name="bull_vaccinated" class="form-control" required>
                      <option value="">निवडा</option>
                      <option value="होय">होय</option>
                      <option value="नाही">नाही</option>
                    </select>
                  </div>
                  <div class="col-md-3">
                    <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                    <input type="number" name="bull_income" class="form-control" required>
                  </div>
                </div>

                <!--मेंढी-->
                <div class="col-12 mt-2 mb-2">
                  <strong>6.मेंढी</strong>
                  <div class="row mt-2">
                    <div class="col-md-2">
                      <label>संख्या<span class="text-danger">*</span></label>
                      <input type="number" name="bull_count" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                      <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                      <select name="bull_insurance" class="form-control" required>
                        <option value="">निवडा</option>
                        <option value="होय">होय</option>
                        <option value="नाही">नाही</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                      <input type="text" name="bull_by_dept" class="form-control" required>
                    </div>
                    <div class="col-md-2">
                      <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                      <select name="bull_vaccinated" class="form-control" required>
                        <option value="">निवडा</option>
                        <option value="होय">होय</option>
                        <option value="नाही">नाही</option>
                      </select>
                    </div>
                    <div class="col-md-3">
                      <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                      <input type="number" name="bull_income" class="form-control" required>
                    </div>
                  </div>
                  <!--कुक्‍कुटपालन-->
                  <div class="col-12 mt-2 mb-2">
                    <strong>7.कुक्‍कुटपालन</strong>
                    <div class="row mt-2">
                      <div class="col-md-2">
                        <label>संख्या<span class="text-danger">*</span></label>
                        <input type="number" name="bull_count" class="form-control" required>
                      </div>
                      <div class="col-md-2">
                        <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                        <select name="bull_insurance" class="form-control" required>
                          <option value="">निवडा</option>
                          <option value="होय">होय</option>
                          <option value="नाही">नाही</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                        <input type="text" name="bull_by_dept" class="form-control" required>
                      </div>
                      <div class="col-md-2">
                        <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                        <select name="bull_vaccinated" class="form-control" required>
                          <option value="">निवडा</option>
                          <option value="होय">होय</option>
                          <option value="नाही">नाही</option>
                        </select>
                      </div>
                      <div class="col-md-3">
                        <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                        <input type="number" name="bull_income" class="form-control" required>
                      </div>
                    </div>
                    <!--ettar-->
                    <div class="col-12 mt-2 mb-2">
                      <strong>8.इतर</strong>
                      <div class="row mt-2">
                        <div class="col-md-2">
                          <label>संख्या<span class="text-danger">*</span></label>
                          <input type="number" name="bull_count" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                          <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                          <select name="bull_insurance" class="form-control" required>
                            <option value="">निवडा</option>
                            <option value="होय">होय</option>
                            <option value="नाही">नाही</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                          <input type="text" name="bull_by_dept" class="form-control" required>
                        </div>
                        <div class="col-md-2">
                          <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                          <select name="bull_vaccinated" class="form-control" required>
                            <option value="">निवडा</option>
                            <option value="होय">होय</option>
                            <option value="नाही">नाही</option>
                          </select>
                        </div>
                        <div class="col-md-3">
                          <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                          <input type="number" name="bull_income" class="form-control" required>
                        </div>
                      </div>
                      <!--total-->
                      <div class="col-12 mt-2 mb-2">
                        <strong>एकुण</strong>
                        <div class="row mt-2">
                          <div class="col-md-2">
                            <label>संख्या<span class="text-danger">*</span></label>
                            <input type="number" name="bull_count" class="form-control" required>
                          </div>
                          <div class="col-md-2">
                            <label>विमा घेतला आहे का?<span class="text-danger">*</span></label>
                            <select name="bull_insurance" class="form-control" required>
                              <option value="">निवडा</option>
                              <option value="होय">होय</option>
                              <option value="नाही">नाही</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label>पशुसंवर्धन विभागामार्फत<span class="text-danger">*</span></label>
                            <input type="text" name="bull_by_dept" class="form-control" required>
                          </div>
                          <div class="col-md-2">
                            <label>लसीकरण केले जाते<span class="text-danger">*</span></label>
                            <select name="bull_vaccinated" class="form-control" required>
                              <option value="">निवडा</option>
                              <option value="होय">होय</option>
                              <option value="नाही">नाही</option>
                            </select>
                          </div>
                          <div class="col-md-3">
                            <label>वार्षिक उत्पन्न (₹)<span class="text-danger">*</span></label>
                            <input type="number" name="bull_income" class="form-control" required>
                          </div>
                        </div>
                        <!-- Extra Questions -->

                        <label class="mt-3">9. वर्षभर वैरण हिरवा चारा पुरेसा आहे काय?<span
                            class="text-danger">*</span></label>
                        <div class="radio-group">
                          <label><input type="radio" name="fodder_available" value="होय"> होय</label>
                          <label><input type="radio" name="fodder_available" value="नाही"> नाही</label>
                        </div>

                        <label>10. वैरण विकास योजनेचा लाभ घेतलेला आहे काय?<span class="text-danger">*</span></label>
                        <div class="radio-group">
                          <label><input type="radio" name="scheme_benefit" value="होय"> होय</label>
                          <label><input type="radio" name="scheme_benefit" value="नाही"> नाही</label>
                        </div>


                        <p class="error" id="formError">कृपया सर्व आवश्यक माहिती भरा.</p>
                        <!-- Submit Button -->
                        <div class="mt-4 mb-3 text-center">
                          <button type="submit" class="btn btn-success">सबमिट करा</button>
                          <button type="reset" class="btn btn-danger px-4">रद्द करा</button>
                        </div>
                      </div>
      </form>


    </div>
  </div>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

  <script>
    document.getElementById('livestockForm').addEventListener('submit', function (e) {
      const inputs = this.querySelectorAll('input, select');
      let allFilled = true;

      inputs.forEach(input => {
        if (!input.value) {
          input.classList.add('is-invalid');
          allFilled = false;
        } else {
          input.classList.remove('is-invalid');
        }
      });

      if (!allFilled) {
        e.preventDefault();
        alert("कृपया सर्व आवश्यक माहिती भरा.");
      }
    });
  </script>


  <script>
    function toggleCount(name) {
      const selected = document.querySelector(`input[name='${name}']:checked`).value;
      const countBox = document.getElementById(`${name}_count`);
      const countRadios = countBox.querySelectorAll("input[type='radio']");

      if (selected === 'yes') {
        countBox.style.display = 'block';
        countRadios.forEach(r => r.disabled = false);
      } else {
        countBox.style.display = 'none';
        countRadios.forEach(r => {
          r.disabled = true;
          r.checked = false;
        });
      }
    }

    document.getElementById('livestockForm').addEventListener('submit', function (e) {
      if (!this.checkValidity()) {
        e.preventDefault();
        alert('कृपया सर्व आवश्यक माहिती भरा.');
      }
    });
  </script>
</body>

</html>