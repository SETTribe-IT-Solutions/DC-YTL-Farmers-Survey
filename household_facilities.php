<!DOCTYPE html>
<html lang="mr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>इतर कुटुंबिक माहिती फॉर्म</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    /* * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      background-color: #f0f8ff;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      line-height: 1.6;
    } */

    .container-fluid {
      margin: 20px auto;
      padding: 0 15px;
    }

    .header1 {
      background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
      color: white;
      text-align: center;
      padding: 25px 0;
      border-radius: 15px 15px 0 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
      margin-bottom: 30px;
    }

    .header1 h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      font-weight: 800;
    }

    .header1 p {
      font-size: 1.1rem;
      opacity: 0.9;
    }

    .main-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 30px;
      margin-bottom: 30px;
      /* margin-top: -2% !important; */
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

    .form-label {
      font-weight: 600;
      margin-bottom: 8px;
      color: #2c3e50;
      font-size: 1.1rem;
    }

    .btn-submit {
      background: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
      border: none;
      border-radius: 50px;
      padding: 15px 40px;
      font-size: 18px;
      font-weight: 600;
      letter-spacing: 0.5px;
      box-shadow: 0 4px 15px rgba(39, 174, 96, 0.3);
      transition: all 0.3s;
      position: relative;
      overflow: hidden;
      color: white;
      display: block;
      margin: 30px auto 0;
    }

    .btn-submit:hover {
      transform: translateY(-3px);
      box-shadow: 0 7px 20px rgba(39, 174, 96, 0.4);
    }

    .form-group {
      margin-bottom: 25px;
    }

    .info-icon {
      color: #3498db;
      margin-right: 8px;
      font-size: 1.2rem;
    }

    .conditional-field {
      display: none;
      animation: fadeIn 0.4s ease;
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

    .validation-error {
      color: #e74c3c;
      font-size: 0.9rem;
      margin-top: 5px;
      display: none;
    }

    .required::after {
      content: " *";
      color: #e74c3c;
    }

    .info-box {
      background-color: #e3f2fd;
      /* border-left: 4px solid #3498db; */
      padding: 15px;
      border-radius: 0 8px 8px 0;
      margin: 20px 0;
    }

    .conditional-container {
      padding: 15px;
    }

    .double-column {
      display: grid;
      gap: 15px;
    }

    .mobile-column {
      display: flex;
      flex-direction: column;
      gap: 20px;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      margin-right: -5px;
      margin-left: -5px;
    }

    .form-col {
      padding-left: 5px;
      padding-right: 5px;
      flex: 1 0 0%;
    }

    @media (max-width: 768px) {
      .header1 h1 {
        font-size: 1.8rem;
      }

      .main-container {
        padding: 20px;
      }

      .btn-submit {
        width: 100%;
        padding: 15px;
      }

      .radio-group {
        flex-direction: column;
        gap: 10px;
      }

      .double-column {
        grid-template-columns: 1fr;
        gap: 20px;
      }

      .form-row {
        flex-direction: column;
      }
    }
  </style>
</head>

<body>
  <?php include 'include/header.php'; ?>
  <div class="container-fluid">
    <!-- <div class="header1">
    <h1><i class="fas fa-users me-3"></i>कुटुंबिक माहिती फॉर्म</h1>
    <p>कृपया आपल्या कुटुंबाची सविस्तर माहिती भरा</p>
  </div> -->

    <div class="main-container">
      <!-- <div class="info-box">
      <i class="fas fa-info-circle me-2"></i>ही माहिती गोपनीय राखली जाईल आणि केवळ सरकारी योजनांसाठी वापरली जाईल
    </div> -->

      <form id="familyForm" novalidate>
        <!-- Hidden field for survey ID -->
        <input type="hidden" name="survey_id" value="<?php echo uniqid('survey_'); ?>">

        <!-- इतर कुटुंबिक माहिती Section -->
        <div class="sub-section">
          <h4 class="section-title">1. इतर कुटुंबिक माहिती
            <!-- <i class="fas fa-info-circle info-icon"></i> -->
          </h4>

          <div class="double-column">
            <div class="mobile-column">
              <!-- Row 1 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">1. कुटुंबात विवाह योग्य मुली आहेत का?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marriageable_daughters" id="q1_yes" value="1"
                          required>
                        <label class="form-check-label" for="q1_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marriageable_daughters" id="q1_no" value="0">
                        <label class="form-check-label" for="q1_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">2. असल्‍यास मुलीच्‍या विवाहासाठी आर्थिक अडचण आहे काय ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marriage_financial_difficulty" id="q2_yes"
                          value="1" required>
                        <label class="form-check-label" for="q2_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="marriage_financial_difficulty" id="q2_no"
                          value="0">
                        <label class="form-check-label" for="q2_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>
              </div>

              <!-- Row 2 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">3. कुटुंबातील व्‍यक्‍तीचा घरात अथवा बाहेर आदर केला जात नाही
                      का?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="family_respect_issue" id="q3_yes" value="1"
                          required>
                        <label class="form-check-label" for="q3_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="family_respect_issue" id="q3_no" value="0">
                        <label class="form-check-label" for="q3_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">4. कर्जामुळे किंवा इतर कोणत्‍याही कारणामुळे कौटुंबिक कलह निर्माण
                      होतो का?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="family_conflict" id="q4_yes" value="1"
                          required>
                        <label class="form-check-label" for="q4_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="family_conflict" id="q4_no" value="0">
                        <label class="form-check-label" for="q4_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>
              </div>

              <!-- Row 3 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">5. तुम्‍हाला किंवा घरातील इतर कोणत्‍याही व्‍यक्‍तीस व्‍यसन आहे का
                      ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="addiction_in_family" id="q5_yes" value="1"
                          required>
                        <label class="form-check-label" for="q5_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="addiction_in_family" id="q5_no" value="0">
                        <label class="form-check-label" for="q5_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group conditional-field" id="q6-container">
                    <label class="form-label">6. व्‍यसन असल्‍यास व्‍यसनाचा प्रकार :</label>
                    <select name="addiction_type" class="form-select">
                      <option value="" disabled selected>निवडा</option>
                      <option value="तंबाखू">तंबाखू</option>
                      <option value="दारू">दारू</option>
                      <option value="इतर">इतर</option>
                    </select>
                  </div>
                </div>
              </div>
            </div>

            <div class="mobile-column">
              <!-- Row 4 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">7. घरात कोणाला गंभीर / दुर्धर आजार आहे का ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="serious_illness" id="q7_yes" value="1"
                          required>
                        <label class="form-check-label" for="q7_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="serious_illness" id="q7_no" value="0">
                        <label class="form-check-label" for="q7_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group conditional-field" id="q8-container">
                    <label class="form-label">8. आजार असल्‍यास आजाराचा प्रकार: </label>
                    <select name="illness_type" class="form-select">
                      <option value="" disabled selected>निवडा</option>
                      <option value="शेवटच्या टप्प्यातील कर्करोग">शेवटच्या टप्प्यातील कर्करोग</option>
                      <option value="फुफ्फुसाचे आजार">फुफ्फुसाचे आजार</option>
                      <option value="अतिसार">अतिसार</option>
                      <option value="पोटाचा अल्सर">पोटाचा अल्सर</option>
                      <option value="पार्किन्स">पार्किन्स</option>
                      <option value="मज्जातंतु संबंधी आजार">मज्जातंतु संबंधी आजार</option>
                      <option value="दमा">दमा</option>
                      <option value="इतर">इतर</option>
                    </select>
                  </div>
                </div>
              </div>

              <!-- Row 5 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">9. घरात किंवा आई कडील/वडीलाकडील नातेवाईकात कोणी आत्‍महत्‍या केली
                      आहे का / किंवा आत्‍महत्‍या करण्‍याचा प्रयत्‍न केला आहे काय ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="suicide_history" id="q9_yes" value="1"
                          required>
                        <label class="form-check-label" for="q9_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="suicide_history" id="q9_no" value="0">
                        <label class="form-check-label" for="q9_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">10. घरात कोणी बेरोजगार आहेत का ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="unemployment" id="q10_yes" value="1"
                          required>
                        <label class="form-check-label" for="q10_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="unemployment" id="q10_no" value="0">
                        <label class="form-check-label" for="q10_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>
              </div>

              <!-- Row 6 -->
              <div class="form-row">
                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label">11. बेरोजगार असल्‍यास किती जण आहेत ?</label>
                    <input type="number" name="unemployed_count" class="form-control" min="0" max="20" placeholder="0">
                    <div class="validation-error" style="display: none;"></div>
                  </div>
                </div>

                <div class="form-col col-md-6">
                  <div class="form-group">
                    <label class="form-label required">12. नापिकी/नैसर्गिक आपत्‍ती किंवा इतर कारणांमुळे आर्थिक अडचण
                      निर्माण झाली आहे का ?</label>
                    <div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="financial_difficulty" id="q12_yes" value="1"
                          required>
                        <label class="form-check-label" for="q12_yes">होय</label>
                      </div>
                      <div class="form-check form-check-inline">
                        <input class="form-check-input" type="radio" name="financial_difficulty" id="q12_no" value="0">
                        <label class="form-check-label" for="q12_no">नाही</label>
                      </div>
                    </div>
                    <div class="validation-error">कृपया उत्तर निवडा</div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
    </div>

    <!-- घरसुखी सुविधा विषयक माहिती Section -->
    <div class="main-container">
      <div class="sub-section">
        <h4 class="section-title">2. घरसुखी सुविधा विषयक माहिती
          <!-- <i class="fas fa-home info-icon"></i>  -->
        </h4>

        <div class="double-column">
          <div class="mobile-column">
            <!-- Row 1 -->
            <div class="form-row">
              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">1. स्वतःचे घर आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="own_house" id="house_yes" value="1" required>
                      <label class="form-check-label" for="house_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="own_house" id="house_no" value="0">
                      <label class="form-check-label" for="house_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>

              <!-- House type fields - shown only if user has own house -->
              <div id="own-house-yes-fields" class="conditional-container">
                <div class="form-row">
                  <div class="form-col col-md-6">
                    <div class="form-group">
                      <label class="form-label required">2. स्वतःचे घर असल्‍यास प्रकार ?</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="house_type" id="clean_kachchhe"
                            value="कच्चे">
                          <label class="form-check-label" for="clean_kachchhe">कच्चे</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="house_type" id="clean_pakke" value="पक्के">
                          <label class="form-check-label" for="clean_pakke">पक्के</label>
                        </div>
                      </div>
                      <div class="validation-error">कृपया उत्तर निवडा</div>
                    </div>
                  </div>

                  <div class="form-col col-md-6">
                    <div class="form-group">
                      <label class="form-label required">3. स्वतःचे घर असल्‍यास शासकिय योजनेतुन मिळाले आहे काय ?</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="government_housing_scheme"
                            id="toilet_govt_yes" value="1">
                          <label class="form-check-label" for="toilet_govt_yes">होय</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="government_housing_scheme"
                            id="toilet_govt_no" value="0">
                          <label class="form-check-label" for="toilet_govt_no">नाही</label>
                        </div>
                      </div>
                      <div class="validation-error">कृपया उत्तर निवडा</div>
                    </div>
                  </div>
                </div>
              </div>

              <!-- Housing need field - shown only if user doesn't have own house -->
              <div id="own-house-no-field" class="conditional-container">
                <div class="form-row">
                  <div class="form-col col-md-6">
                    <div class="form-group">
                      <label class="form-label required">4. स्वतःचे घर नसल्‍यास घरकुल योजने अंतर्गत घराची आवश्‍यक्‍ता
                        आहे का ?</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="housing_need" id="house_scheme_yes"
                            value="1">
                          <label class="form-check-label" for="house_scheme_yes">होय</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="housing_need" id="house_scheme_no"
                            value="0">
                          <label class="form-check-label" for="house_scheme_no">नाही</label>
                        </div>
                      </div>
                      <div class="validation-error">कृपया उत्तर निवडा</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>

            <!-- Row 3 -->
            <div class="form-row">
              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">5. घरासाठी कर्ज काढण्‍यात आले आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="house_loan_taken" id="house_loan_yes"
                        value="होय" required>
                      <label class="form-check-label" for="house_loan_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="house_loan_taken" id="house_loan_no"
                        value="नाही">
                      <label class="form-check-label" for="house_loan_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>

              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">6. वीज जोडणी आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="electricity_connection" id="electricity_yes"
                        value="1" required>
                      <label class="form-check-label" for="electricity_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="electricity_connection" id="electricity_no"
                        value="0">
                      <label class="form-check-label" for="electricity_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>
            </div>

            <!-- Row 4 -->
            <div class="form-row">
              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">7.गॅस जोडणी आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gas_connection" id="gas_yes" value="1"
                        required>
                      <label class="form-check-label" for="gas_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="gas_connection" id="gas_no" value="0">
                      <label class="form-check-label" for="gas_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>

              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">8. नळ जोडणी आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="water_connection" id="water_yes" value="1"
                        required>
                      <label class="form-check-label" for="water_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="water_connection" id="water_no" value="0">
                      <label class="form-check-label" for="water_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>
            </div>

            <!-- Row 5 -->
            <div class="form-row">
              <div class="form-col col-md-6">
                <div class="form-group">
                  <label class="form-label required">9. घरी शौचालय आहे का ?</label>
                  <div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="toilet_facility" id="toilet_yes" value="1"
                        required>
                      <label class="form-check-label" for="toilet_yes">होय</label>
                    </div>
                    <div class="form-check form-check-inline">
                      <input class="form-check-input" type="radio" name="toilet_facility" id="toilet_no" value="0">
                      <label class="form-check-label" for="toilet_no">नाही</label>
                    </div>
                  </div>
                  <div class="validation-error">कृपया उत्तर निवडा</div>
                </div>
              </div>

              <!-- Swachh Bharat field - shown only if toilet facility is not available -->
              <div id="toilet-no-field" class="conditional-container">
                <div class="form-row">
                  <div class="form-col col-md-6">
                    <div class="form-group">
                      <label class="form-label required">10. घरी शौचालय नसल्‍यास स्‍वच्‍छ भारत मिशन अंतर्गत मागणी केली
                        आहे का ?</label>
                      <div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="swachh_bharat_application" id="swachh_yes"
                            value="1">
                          <label class="form-check-label" for="swachh_yes">होय</label>
                        </div>
                        <div class="form-check form-check-inline">
                          <input class="form-check-input" type="radio" name="swachh_bharat_application" id="swachh_no"
                            value="0">
                          <label class="form-check-label" for="swachh_no">नाही</label>
                        </div>
                      </div>
                      <div class="validation-error">कृपया उत्तर निवडा</div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Submit Button -->
    <!-- Include SweetAlert2 -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <div class="text-center">
      <button type="submit" class="btn btn-submit" name="register">
        सबमिट करा
      </button>
    </div>

   <script>
document.getElementById('familyForm').addEventListener('submit', function (e) {
  e.preventDefault(); // Prevent default submit

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
      const form = document.getElementById('familyForm');
      const formData = new FormData(form);

      fetch('farmer_survey_db.php', {
        method: 'POST',
        body: formData
      })
      .then(response => response.json())
      .then(data => {
        if (data.status === 'success') {
          Swal.fire({
            title: 'यशस्वी!',
            text: data.message,
            icon: 'success',
            confirmButtonText: 'पुढे जा'
          }).then(() => {
            window.location.href = 'social_participation.php'; // Redirect
          });
        } else {
          Swal.fire('त्रुटी', data.message || 'काहीतरी चूक झाली आहे.', 'error');
        }
      })
      .catch(error => {
        console.error('Error:', error);
        Swal.fire('त्रुटी', 'नेटवर्क किंवा सर्व्हर त्रुटी आली.', 'error');
      });
    }
  });
});
</script>


    </form>
  </div>
  </div>

  <?php include 'include/footer.php'; ?>

  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
  <script>
    document.addEventListener('DOMContentLoaded', function () {
      const form = document.getElementById('familyForm');

      // Elements for conditional display
      const ownHouseYes = document.getElementById('house_yes');
      const ownHouseNo = document.getElementById('house_no');
      const ownHouseYesFields = document.getElementById('own-house-yes-fields');
      const ownHouseNoField = document.getElementById('own-house-no-field');

      const toiletYes = document.getElementById('toilet_yes');
      const toiletNo = document.getElementById('toilet_no');
      const toiletNoField = document.getElementById('toilet-no-field');

      // Toggle conditional fields
      function toggleConditionalFields() {
        // Toggle housing fields based on own_house
        const addiction_in_familyYes = document.querySelector('input[name="addiction_in_family"][value="1"]')?.checked;
        const serious_illnessYes = document.querySelector('input[name="serious_illness"][value="1"]')?.checked;
        const ownHouse = document.querySelector('input[name="own_house"]:checked')?.value;
        const hasToilet = document.querySelector('input[name="toilet_facility"]:checked')?.value;

        const q6Container = document.getElementById('q6-container');
        const q8Container = document.getElementById('q8-container');

        // Addiction type field
        if (q6Container) {
          q6Container.style.display = addiction_in_familyYes ? 'block' : 'none';
        }

        // Illness type field
        if (q8Container) {
          q8Container.style.display = serious_illnessYes ? 'block' : 'none';
        }

        // Housing fields
        if (ownHouseYesFields && ownHouseNoField) {
          if (ownHouse === "1") {
            ownHouseYesFields.style.display = 'block';
            ownHouseNoField.style.display = 'none';

            // Make house type and govt scheme fields required
            document.querySelectorAll('input[name="house_type"]').forEach(el => {
              el.required = true;
            });
            document.querySelectorAll('input[name="government_housing_scheme"]').forEach(el => {
              el.required = true;
            });

            // Unrequire housing need field
            document.querySelectorAll('input[name="housing_need"]').forEach(el => {
              el.required = false;
            });
          } else if (ownHouse === "0") {
            ownHouseYesFields.style.display = 'none';
            ownHouseNoField.style.display = 'block';

            // Make housing need field required
            document.querySelectorAll('input[name="housing_need"]').forEach(el => {
              el.required = true;
            });

            // Unrequire house type and govt scheme fields
            document.querySelectorAll('input[name="house_type"]').forEach(el => {
              el.required = false;
            });
            document.querySelectorAll('input[name="government_housing_scheme"]').forEach(el => {
              el.required = false;
            });
          } else {
            ownHouseYesFields.style.display = 'none';
            ownHouseNoField.style.display = 'none';
          }
        }

        // Toilet field
        if (toiletNoField) {
          if (hasToilet === "0") {
            toiletNoField.style.display = 'block';

            // Make Swachh Bharat field required
            document.querySelectorAll('input[name="swachh_bharat_application"]').forEach(el => {
              el.required = true;
            });
          } else {
            toiletNoField.style.display = 'none';

            // Unrequire Swachh Bharat field
            document.querySelectorAll('input[name="swachh_bharat_application"]').forEach(el => {
              el.required = false;
            });
          }
        }
      }

      // Add event listeners for conditional questions
      document.querySelectorAll('input[name="addiction_in_family"]').forEach(el => {
        el.addEventListener('change', toggleConditionalFields);
      });

      document.querySelectorAll('input[name="serious_illness"]').forEach(el => {
        el.addEventListener('change', toggleConditionalFields);
      });

      document.querySelectorAll('input[name="own_house"]').forEach(el => {
        el.addEventListener('change', toggleConditionalFields);
      });

      document.querySelectorAll('input[name="toilet_facility"]').forEach(el => {
        el.addEventListener('change', toggleConditionalFields);
      });

      // Form validation
      form.addEventListener('submit', function (e) {
        e.preventDefault();
        let valid = true;

        // Clear previous errors
        document.querySelectorAll('.validation-error').forEach(el => {
          el.style.display = 'none';
        });

        // Check required fields
        const requiredFields = form.querySelectorAll('[required]');
        requiredFields.forEach(field => {
          if (field.type === 'radio') {
            const radioGroup = form.querySelectorAll(`input[name="${field.name}"]`);
            const isChecked = Array.from(radioGroup).some(radio => radio.checked);
            if (!isChecked) {
              valid = false;
              const error = field.closest('.form-group')?.querySelector('.validation-error');
              if (error) error.style.display = 'block';
            }
          } else if (!field.value) {
            valid = false;
            const error = field.closest('.form-group')?.querySelector('.validation-error') ||
              field.parentElement.querySelector('.validation-error');
            if (error) error.style.display = 'block';
          }
        });

        // Check unemployed count if unemployment is yes
        const unemploymentYes = document.querySelector('input[name="unemployment"][value="1"]')?.checked;
        const unemployedCount = document.querySelector('input[name="unemployed_count"]');
        if (unemploymentYes && (!unemployedCount.value || parseInt(unemployedCount.value) <= 0)) {
          valid = false;
          const error = unemployedCount.nextElementSibling;
          if (error) {
            error.style.display = 'block';
            error.textContent = "कृपया बेरोजगार व्यक्तींची संख्या प्रविष्ट करा";
          }
        }

        if (!valid) {
          Swal.fire({
            icon: 'error',
            title: 'त्रुटी',
            text: 'कृपया सर्व आवश्यक माहिती भरा.',
            confirmButtonText: 'ठीक आहे'
          });

          // Scroll to first error
          const firstError = document.querySelector('.validation-error[style*="block"]');
          if (firstError) {
            firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
          }
        } else {
          // AJAX submission
          const formData = new FormData(form);

          fetch('household_facilities_db.php', {
            method: 'POST',
            body: formData
          })
            .then(response => response.json())
            .then(data => {
              if (data.status === 'success') {
                Swal.fire({
                  icon: 'success',
                  title: 'यशस्वी',
                  text: data.message,
                  confirmButtonText: 'ठीक आहे'
                }).then(() => {
                  // Reset the form
                  form.reset();
                  toggleConditionalFields();
                });
              } else {
                Swal.fire({
                  icon: 'error',
                  title: 'त्रुटी',
                  text: data.message,
                  confirmButtonText: 'ठीक आहे'
                });
              }
            })
            .catch(error => {
              Swal.fire({
                icon: 'error',
                title: 'त्रुटी',
                text: 'अपेक्षित त्रुटी: ' + error,
                confirmButtonText: 'ठीक आहे'
              });
            });
        }
      });

      // Initialize conditional fields
      toggleConditionalFields();
    });
  </script>
</body>

</html>