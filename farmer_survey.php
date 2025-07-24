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
        कृपया आत्महत्याग्रस्त शेतकऱ्यांच्या कुटुंबासंबंधीची सर्व माहिती अचूक भरुन सबमिट करा.
      </div>

      <form id="farmerForm" action="farmer_survey_db.php" method="POST" novalidate>
        <!-- Section 1: Basic Information -->
        <div class="form-section">
          <div class="row">
            <div class="col-md-6 mb-3">
              <!-- Visible Survey ID Field -->
              <label class="form-label required">सर्वेक्षण आयडी</label>
              <div class="survey-id-container">
                <!-- <div class="survey-id-label">सर्वेक्षण आयडी</div> -->
                <div class="survey-id-value"><?php echo $survey_id; ?></div>
                <input type="hidden" name="survey_id" value="<?php echo $survey_id; ?>">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label required">सर्वेक्षणाचा दिनांक</label>
              <input type="date" class="form-control" name="survey_date" required>
              <div class="validation-error">कृपया सर्वेक्षणाचा दिनांक निवडा</div>
            </div>
          </div>
        </div>

        <!-- <hr class="section-divider"> -->

        <!-- Section 2: Farmer Details -->
        <div class="form-section">
          <h4 class="form-label"
            style="color: var(--secondary-color); margin-bottom: 20px; border-bottom: 2px solid var(--secondary-color); padding-bottom: 8px;">
            आत्महत्या झालेल्या शेतकऱ्याची माहिती
          </h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">आत्महत्या झालेल्या शेतकऱ्याचे नाव</label>
              <input type="text" class="form-control" placeholder="पूर्ण नाव" name="farmer_name" required>
              <div class="validation-error">कृपया शेतकऱ्याचे नाव प्रविष्ट करा</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">आत्महत्येचा दिनांक</label>
              <input type="date" class="form-control" name="suicide_date" required>
              <div class="validation-error">कृपया आत्महत्येचा दिनांक निवडा</div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label required">आत्महत्येचा प्रकार</label>
              <select class="form-select" name="suicide_type" id="suicideType" required>
                <option selected disabled value="">निवडा</option>
                <option>विष प्राशन</option>
                <option>विहीरीत उडी</option>
                <option>गळफास</option>
                <option value="इतर">इतर</option>
              </select>
              <div class="validation-error">कृपया आत्महत्येचा प्रकार निवडा</div>
              <div class="other-field" id="suicideTypeOther">
                <label class="form-label">इतर प्रकार सांगा</label>
                <input type="text" class="form-control" name="suicide_type_other" placeholder="आत्महत्येचा प्रकार">
              </div>
            </div>
          </div>

          <div class="row">
            <div class="col-12 mb-3">
              <label class="form-label required">आत्महत्येचे कारण</label>
              <textarea class="form-control" rows="3" placeholder="कारणांचा तपशील" name="suicide_reason"
                required></textarea>
              <div class="validation-error">कृपया आत्महत्येचे कारण प्रविष्ट करा</div>
            </div>
          </div>
        </div>

        <!-- <hr class="section-divider"> -->

        <!-- Section 3: Personal Details -->
        <div class="form-section">
          <h4 class="form-label"
            style="color: var(--secondary-color); margin-bottom: 20px; border-bottom: 2px solid var(--secondary-color); padding-bottom: 8px;">
            वैयक्तिक माहिती
          </h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label">जन्म दिनांक (माहिती असल्यास)</label>
              <input type="date" class="form-control" name="birth_date">
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label required">वय</label>
              <input type="number" class="form-control" placeholder="वर्षे" name="age" min="1" max="120" required>
              <div class="validation-error">कृपया वय प्रविष्ट करा</div>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label required">लिंग</label>
              <select class="form-select" name="gender" required>
                <option selected disabled value="">निवडा</option>
                <option>पुरुष</option>
                <option>स्त्री</option>
              </select>
              <div class="validation-error">कृपया लिंग निवडा</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">आधार क्रमांक</label>
              <input type="text" class="form-control" name="aadhar_number" id="aadhaar" pattern="\d{4}\s\d{4}\s\d{4}"
                maxlength="14" placeholder="12 अंकी क्रमांक" required>
              <div class="validation-error">कृपया वैध आधार क्रमांक प्रविष्ट करा</div>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label required">बँक खाते क्रमांक</label>
              <input type="text" class="form-control" name="bank_account" placeholder="खाते क्रमांक" required>
              <div class="validation-error">कृपया खाते क्रमांक प्रविष्ट करा</div>
            </div>
            <div class="col-md-3 mb-3">
              <label class="form-label required">IFSC CODE</label>
              <input type="text" class="form-control" placeholder="IFSC कोड" name="ifsc_code" required>
              <div class="validation-error">कृपया IFSC कोड प्रविष्ट करा</div>
            </div>
          </div>
        </div>

        <!-- <hr class="section-divider"> -->

        <!-- Section 4: Address -->
        <div class="form-section">
          <h4 class="form-label"
            style="color: var(--secondary-color); margin-bottom: 20px; border-bottom: 2px solid var(--secondary-color); padding-bottom: 8px;">
            पत्ता
          </h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">गावाचे नाव</label>
              <select class="form-select" name="village" required>
                <option selected disabled value="">निवडा</option>
                <option value="पांढरकवडा">पांढरकवडा</option>
                <option value="झरी जामनी">झरी जामनी</option>
                <option value="वणी">वणी</option>
                <option value="नेर">नेर</option>
                <option value="पोहरादेवी">पोहरादेवी</option>
              </select>
              <div class="validation-error">कृपया गावाचे नाव निवडा</div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label required">तालुका</label>
              <select class="form-select" name="taluka" required>
                <option selected disabled value="">निवडा</option>
                <option value="पांढरकवडा">पांढरकवडा</option>
                <option value="दिग्रस">दिग्रस</option>
                <option value="उमरखेड">उमरखेड</option>
              </select>
              <div class="validation-error">कृपया तालुका निवडा</div>
            </div>
          </div>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">जिल्हा</label>
              <input type="text" class="form-control" value="यवतमाळ" name="district" readonly>
            </div>
          </div>
        </div>

        <!-- <hr class="section-divider"> -->

        <!-- Section 5: Informant -->
        <div class="form-section">
          <h4 class="form-label"
            style="color: var(--secondary-color); margin-bottom: 20px; border-bottom: 2px solid var(--secondary-color); padding-bottom: 8px;">
            माहिती देणारा
          </h4>

          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">माहिती देणाऱ्या व्यक्तीचे नाव</label>
              <input type="text" class="form-control" name="informant_name" placeholder="पूर्ण नाव" required>
              <div class="validation-error">कृपया माहिती देणाऱ्याचे नाव प्रविष्ट करा</div>
            </div>
            <!-- <div class="col-md-6 mb-3">
              <label class="form-label required">माहिती देणाऱ्याचा संबंध</label>
              <select class="form-select" name="informant_relation" required>
                <option selected disabled value="">निवडा</option>
                <option>पत्नी</option>
                <option>पती</option>
                <option>मुलगा</option>
                <option>मुलगी</option>
                <option>वडील</option>
                <option>आई</option>
                <option>भाऊ</option>
                <option value="इतर">इतर</option>
              </select>
              <div class="validation-error">कृपया संबंध निवडा</div>
              <div class="other-field" id="relationOther">
                <label class="form-label">इतर संबंध सांगा</label>
                <input type="text" class="form-control" name="informant_relation_other" placeholder="संबंध">
              </div>
            </div> -->
          </div>
        </div>

        <!-- <hr class="section-divider"> -->

        <!-- Section 6: Family Details -->
        <div class="form-section">
          <h4 class="form-label"
            style="color: var(--secondary-color); margin-bottom: 20px; border-bottom: 2px solid var(--secondary-color); padding-bottom: 8px;">
            कुटुंबाचे तपशील
          </h4>

          <!-- Migration Question -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">कुटुंबाने सद्यस्थितीत रोजगारासाठी स्थलांतर केले आहे का?</label>
              <div class="radio-group">
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="family_migration" id="migrationYes" value="होय"
                    required>
                  <label class="form-check-label" for="migrationYes">होय</label>
                </div>
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="family_migration" id="migrationNo" value="नाही"
                    required>
                  <label class="form-check-label" for="migrationNo">नाही</label>
                </div>
              </div>
              <div class="validation-error">कृपया स्थलांतर स्थिती निवडा</div>

              <div class="conditional-field" id="migrationDetails">
                <label class="form-label">स्थलांतर केव्हापासून</label>
                <input type="text" class="form-control" name="migration_since" placeholder="स्थलांतराचा तपशील">
              </div>
            </div>

            <div class="col-md-6 mb-3">
              <label class="form-label required">शासनाकडून अनुदान / लाभ मिळतात का?</label>
              <div class="radio-group">
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="government_subsidy" id="benefitsYes" value="होय"
                    required>
                  <label class="form-check-label" for="benefitsYes">होय</label>
                </div>
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="government_subsidy" id="benefitsNo" value="नाही"
                    required>
                  <label class="form-check-label" for="benefitsNo">नाही</label>
                </div>
              </div>
              <div class="validation-error">कृपया अनुदान स्थिती निवडा</div>

              <div class="conditional-field" id="benefitsDetails">
                <label class="form-label">लाभांचा तपशील</label>
                <input type="text" class="form-control" name="subsidy_details" placeholder="योजनेचा तपशील">
              </div>
            </div>
          </div>

          <!-- Education and Occupation -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">कुटुंब प्रमुखाचे शिक्षण</label>
              <select class="form-select" name="family_head_education" id="educationLevel" required>
                <option disabled selected value="">निवडा</option>
                <option value="अशिक्षित">अशिक्षित</option>
                <option value="प्राथमिक">प्राथमिक</option>
                <option value="माध्यमिक">माध्यमिक</option>
                <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
                <option value="पदवी">पदवी</option>
                <option value="पदव्यूत्तर">पदव्यूत्तर</option>
                <option value="तांत्रिक पदवी/पदविका">तांत्रिक पदवी/पदविका</option>
                <option value="इतर">इतर (असल्‍यास)</option>
              </select>
              <div class="validation-error">कृपया शिक्षण निवडा</div>
              <div class="other-field" id="educationOther">
                <label class="form-label">इतर शिक्षण सांगा</label>
                <input type="text" class="form-control" name="education_other" placeholder="शिक्षण तपशील">
              </div>
            </div>
            <div class="col-md-6 mb-3">
              <label class="form-label required">कुटुंब प्रमुखाचा प्रमुख व्यवसाय</label>
              <select class="form-select" name="family_head_occupation" id="occupationType" required>
                <option selected disabled value="">निवडा</option>
                <option value="स्वतःची शेती">स्वतःची शेती</option>
                <option value="शेतमजूर">शेतमजूर</option>
                <option value="रोजंदारीचे काम">रोजंदारीचे काम</option>
                <option value="घरकाम">घरकाम</option>
                <option value="विद्यार्थी">विद्यार्थी</option>
                <option value="स्वयंरोजगार">स्वयंरोजगार</option>
                <option value="निवृत्त">निवृत्त</option>
                <option value="खाजगी">खाजगी</option>
                <option value="शिक्षणासाठी">शिक्षणासाठी</option>
                <option value="सरकारी नोकरी">सरकारी नोकरी</option>
                <option value="इतर">इतर</option>
              </select>
              <div class="validation-error">कृपया व्यवसाय निवडा</div>
              <div class="other-field" id="occupationOther">
                <label class="form-label">इतर व्यवसाय सांगा</label>
                <input type="text" class="form-control" name="occupation_other" placeholder="व्यवसाय तपशील">
              </div>
            </div>
          </div>

          <!-- Loan Question -->
          <div class="row">
            <div class="col-md-6 mb-3">
              <label class="form-label required">७/१२ वर बोजा आहे का?</label>
              <div class="radio-group">
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="land_mortgage" id="loanYes" value="होय" required>
                  <label class="form-check-label" for="loanYes">होय</label>
                </div>
                <div class="radio-option">
                  <input class="form-check-input" type="radio" name="land_mortgage" id="loanNo" value="नाही" required>
                  <label class="form-check-label" for="loanNo">नाही</label>
                </div>
              </div>
              <div class="validation-error">कृपया बोजा स्थिती निवडा</div>

              <div class="conditional-field" id="loanDetails">
                <label class="form-label">बोजाचा तपशील</label>
                <textarea class="form-control" name="mortgage_details" rows="3"
                  placeholder="केव्हापासून, सविस्तर तपशील, गट नंबर, रक्कम, थकीत कालावधी"></textarea>
              </div>
            </div>
          </div>
        </div>

        <!-- Submit Button -->
        <!-- Include SweetAlert2 -->
        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <div class="text-center">
          <button type="button" class="btn btn-submit" name="register" onclick="confirmSubmit()">
            सबमिट करा
          </button>
        </div>

        <!-- <script>
          function confirmSubmit() {
            Swal.fire({
              title: 'तुम्हाला खात्री आहे का?',
              text: "फॉर्म सबमिट केल्यावर पुढील पानावर जाल.",
              icon: 'question',
              showCancelButton: true,
              confirmButtonText: 'हो, पुढे जा',
              cancelButtonText: 'रद्द करा',
              reverseButtons: true
            }).then((result) => {
              if (result.isConfirmed) {
                // Redirect after confirmation
                window.location.href = 'family_information.php';
              }
            });
          }
        </script> -->

      </form>
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

  <?php include 'include/footer.php'; ?>

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