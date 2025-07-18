<!DOCTYPE html>
<html lang="mr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>शेतजमीन विषयक माहिती</title>
  <?php
  // include('include/cssLinks.php');
  // include('include/header.php');
  // include('include/jsLinks.php')
  ?>
  <style>
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
      background: linear-gradient(135deg, #2c3e50, #3498db);
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

    /* Main Form Styles */
    .main-form {
      background: white;
      border-radius: 12px;
      box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
      padding: 30px;
      margin: 0 auto;
      font-family: Arial, sans-serif;
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

    .heading-icon {
      margin-right: 10px;
    }

    /* Form Rows */
    .form-row {
      display: flex;
      gap: 25px;
      margin-bottom: 20px;
      flex-wrap: wrap;
    }

    .form-group {
      margin-bottom: 20px;
      width: 100%;
    }

    .half-width {
      flex: 1 1 calc(50% - 12.5px);
      min-width: 280px;
    }

    /* Labels */
    .form-label {
      display: block;
      font-weight: 600;
      margin-bottom: 8px;
      color: #2c3e50;
      font-size: 15px;
    }

    .form-label.required::after {
      content: '*';
      color: red;
      margin-left: 4px;
    }

    /* Input Fields */
    input[type="text"],
    input[type="number"],
    select {
      width: 100%;
      padding: 10px 12px;
      border: 1px solid #ddd;
      border-radius: 6px;
      font-size: 15px;
      transition: all 0.2s;
    }

    input[type="text"]:focus,
    input[type="number"]:focus,
    select:focus {
      border-color: #3498db;
      outline: none;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
    }

    /* Radio Groups */
    .radio-group {
      display: flex;
      flex-direction: column;
      gap: 8px;
    }

    .radio-group label {
      display: flex;
      align-items: center;
      gap: 8px;
      font-weight: 500;
      cursor: pointer;
    }

    .radio-group input[type="radio"] {
      width: 16px;
      height: 16px;
      accent-color: #3498db;
    }

    /* Water Source Section */
    .multi-source {
      display: flex;
      flex-direction: column;
      gap: 12px;
    }


    .sub-row {
      display: flex;
      align-items: center;
      gap: 15px;
    }

    .sub-row span {
      min-width: 60px;
      font-weight: 500;
    }

    .sub-row input {
      flex: 1;
      max-width: 100px;
    }

    /* Submit Button */
    .submit-btn {
      background: #27ae60;
      color: white;
      border: none;
      border-radius: 6px;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      cursor: pointer;
      display: block;
      margin: 30px auto 0;
      transition: all 0.2s;
    }

    .submit-btn:hover {
      background: #219955;
      transform: translateY(-1px);
    }

    .form-label.required::after {
      content: '*';
      color: red;
      margin-left: 4px;
    }

    /* Responsive */
    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
        gap: 15px;
      }

      .half-width {
        flex: 1 1 100%;
      }

      .sub-row {
        flex-wrap: wrap;
      }
    }


    @media (max-width: 768px) {
      .radio-group {
        flex-direction: column;
        align-items: center;
      }

      table th,
      table td {
        font-size: 0.9rem;
        padding: 8px;
      }
    }
  </style>
  <style>
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

    .heading-icon {
      margin-right: 8px;
      font-size: 1.2em;
      vertical-align: middle;
    }
  </style>
  <style>
    .custom-option-grid {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
      gap: 15px;
    }

    .custom-option-card {
      background: #fff;
      border: 2px solid #e0e0e0;
      border-radius: 10px;
      padding: 12px 15px;
      text-align: center;
      cursor: pointer;
      font-weight: 600;
      transition: all 0.3s ease;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
      display: flex;
      align-items: center;
      justify-content: center;
    }

    .custom-option-card:hover {
      border-color: #667eea;
      box-shadow: 0 4px 10px rgba(102, 126, 234, 0.15);
    }

    .custom-option-card input[type="radio"] {
      display: none;
    }

    .custom-option-card input[type="radio"]:checked+span {
      background: #667eea;
      color: white;
      padding: 8px 12px;
      border-radius: 8px;
      display: inline-block;
      width: 100%;
    }
    
  </style>
  <?php
  include('include/header.php')

  ?>
</head>

<body>
  <div class="container-fluid">
    <div class="header1">
      <h1>शेतजमीन विषयक माहिती</h1>
      <p>कृपया खालील माहिती अचूकपणे भरा</p>
    </div>

    <form class="main-form" action="Agricultural_land_information_db.php" method="POST" novalidate>
      <div class="form-section container mt-4">
        <h3 class="section-title styled-heading text-center mb-4">
          <span class="heading-icon">🌾</span> शेतजमीन विषयक माहिती
        </h3>

        <!-- Radio Options Section -->
        <div class="row mb-4">
          <!-- Total Land -->
          <div class="col-md-6 mb-3">
            <label class="form-label required heading-title">शेतजमीन (एकुण)</label>
            <div class="custom-option-grid">
              <label class="custom-option-card">
                <input type="radio" name="total_land" value="<1" required>
                <span>1 एकर पेक्षा कमी</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="total_land" value="1-2">
                <span>1 एकर ते 2 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="total_land" value="2-4">
                <span>2 एकर ते 4 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="total_land" value="4-5">
                <span>4 एकर ते 5 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="total_land" value=">5">
                <span>5 एकर पेक्षा जास्त</span>
              </label>
            </div>
            <!-- <div class="invalid-feedback">कृपया एक पर्याय निवडा</div> -->
          </div><br><br>

          <!-- Dry Land -->
          <div class="col-md-6 mb-3">
            <label class="form-label required heading-title">कोरडवाहु /जिरायत शेतजमीन (एकुण)</label>
            <div class="custom-option-grid">
              <label class="custom-option-card">
                <input type="radio" name="dry_land" value="<1" required>
                <span>1 एकर पेक्षा कमी</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="dry_land" value="1-2">
                <span>1 एकर ते 2 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="dry_land" value="2-4">
                <span>2 एकर ते 4 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="dry_land" value="4-5">
                <span>4 एकर ते 5 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="dry_land" value=">5">
                <span>5 एकर पेक्षा जास्त</span>
              </label>
            </div>
            <!-- <div class="invalid-feedback">कृपया एक पर्याय निवडा</div> -->
          </div>
        </div><br><br>

        <div class="row mb-4">
          <!-- Seasonal Irrigated -->
          <div class="col-md-6 mb-3">
            <label class="form-label required heading-title">हंगामी बागायत शेतजमीन (एकुण)</label>
            <div class="custom-option-grid">
              <label class="custom-option-card">
                <input type="radio" name="seasonal_irrigated" value="<1" required>
                <span>1 एकर पेक्षा कमी</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="seasonal_irrigated" value="1-2">
                <span>1 एकर ते 2 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="seasonal_irrigated" value="2-4">
                <span>2 एकर ते 4 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="seasonal_irrigated" value="4-5">
                <span>4 एकर ते 5 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="seasonal_irrigated" value=">5">
                <span>5 एकर पेक्षा जास्त</span>
              </label>
            </div>
            <!-- <div class="invalid-feedback">कृपया एक पर्याय निवडा</div> -->
          </div><br><br>

          <!-- Irrigated Total -->
          <div class="col-md-6 mb-3">
            <label class="form-label required heading-title">बागायत शेतजमीन (एकुण)</label>
            <div class="custom-option-grid">
              <label class="custom-option-card">
                <input type="radio" name="irrigated_total" value="<1" required>
                <span>1 एकर पेक्षा कमी</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="irrigated_total" value="1-2">
                <span>1 एकर ते 2 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="irrigated_total" value="2-4">
                <span>2 एकर ते 4 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="irrigated_total" value="4-5">
                <span>4 एकर ते 5 एकर</span>
              </label>
              <label class="custom-option-card">
                <input type="radio" name="irrigated_total" value=">5">
                <span>5 एकर पेक्षा जास्त</span>
              </label>
            </div>
            <!-- <div class="invalid-feedback">कृपया एक पर्याय निवडा</div> -->
          </div>
        </div><br><br>

        <!-- Acre/Guntha Fields -->
        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">शेतजमीन (एकर)</label>
            <input type="number" min="0" required>
          </div>
          <div class="form-group half-width">
            <label class="form-label required">गुंठा</label>
            <input type="number" min="0" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">कोरडवाहु / जिरायत (एकर)</label>
            <input type="number" min="0" required>
          </div>
          <div class="form-group half-width">
            <label class="form-label required">गुंठा</label>
            <input type="number" min="0" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">हंगामी बागायत (एकर)</label>
            <input type="number" min="0" required>
          </div>
          <div class="form-group half-width">
            <label class="form-label required">गुंठा</label>
            <input type="number" min="0" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">बागायती (एकर)</label>
            <input type="number" min="0" required>
          </div>
          <div class="form-group half-width">
            <label class="form-label required">गुंठा</label>
            <input type="number" min="0" required>
          </div>
        </div>

        <!-- Water Source -->
        <div class="form-group">
          <label class="form-label">बागायती असल्‍यास पाण्‍याचे स्‍त्रोत:</label>
          <div class="multi-source">
            <div class="sub-row">
              <span>विहीर</span>
              <input type="number" placeholder="एकर" min="0">
              <input type="number" placeholder="गुंठा" min="0">
            </div>
            <div class="sub-row">
              <span>बोर</span>
              <input type="number" placeholder="एकर" min="0">
              <input type="number" placeholder="गुंठा" min="0">
            </div>
            <div class="sub-row">
              <span>कालवा</span>
              <input type="number" placeholder="एकर" min="0">
              <input type="number" placeholder="गुंठा" min="0">
            </div>
            <div class="sub-row">
              <span>इतर</span>
              <input type="number" placeholder="एकर" min="0">
              <input type="number" placeholder="गुंठा" min="0">
            </div>
          </div>
        </div>

        <!-- Electricity Info -->
        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">शेतामध्‍ये वीज जोडणी आहे काय?</label>
            <select required>
              <option value="">-- निवडा --</option>
              <option>होय</option>
              <option>नाही</option>
            </select>
          </div>

          <div class="form-group half-width">
            <label class="form-label required">शेतात पाण्‍याच्‍या किती मोटार आहेत</label>
            <input type="number" min="0" required>
          </div>
        </div>

        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label">वीज बील थकीत आहे काय?</label>
            <select>
              <option value="">-- निवडा --</option>
              <option>होय</option>
              <option>नाही</option>
            </select>
          </div>
          <div class="form-group half-width">
            <label class="form-label">असल्‍यास तपशील (केव्‍हा पासुन व रक्‍कम)</label>
            <input type="text">
          </div>
        </div>
      </div>
      <div class="text-center mt-4">
        <button type="submit" class="btn btn-primary submit-btn">सबमिट करा</button>
      </div>
  </div>
  </form>
  <!-- Bootstrap Validation Script -->
  <script>
    // Example starter JavaScript for disabling form submissions if there are invalid fields
    (function() {
      'use strict'

      // Fetch all the forms we want to apply custom Bootstrap validation styles to
      var forms = document.querySelectorAll('.main-form')

      // Loop over them and prevent submission
      Array.prototype.slice.call(forms)
        .forEach(function(form) {
          form.addEventListener('submit', function(event) {
            if (!form.checkValidity()) {
              event.preventDefault()
              event.stopPropagation()
            }

            form.classList.add('was-validated')
          }, false)
        })
    })()
  </script>

  <style>
    .form-label.required:after {
      content: " *";
      color: red;
    }

    .styled-heading {
      color: #2c3e50;
      border-bottom: 2px solid #3498db;
      padding-bottom: 10px;
    }

    .heading-icon {
      margin-right: 10px;
    }

    .form-control {
      padding: 15px;
      border-radius: 5px;
      background-color: #f8f9fa;
    }

    .submit-btn {
      padding: 10px 30px;
      font-size: 18px;
      background-color: #28a745;
      border: none;
    }

    .submit-btn:hover {
      background-color: #218838;
    }

    .form-check {
      margin-bottom: 8px;
    }

    .invalid-feedback {
      color: #dc3545;
      font-size: 0.875em;
    }
  </style>
  <script>
    document.querySelector(".main-form").addEventListener("submit", function(e) {
      const requiredFields = document.querySelectorAll("input[required], select[required]");
      let valid = true;

      requiredFields.forEach(field => {
        if (!field.value) {
          field.style.borderColor = "red";
          valid = false;
        } else {
          field.style.borderColor = "#ccc";
        }
      });

      if (!valid) {
        alert("कृपया सर्व आवश्यक माहिती भरा.");
        e.preventDefault();
      }
    });
  </script>
  </div>
  <?php

  include('include/footer.php')
  ?>

</body>

</html>