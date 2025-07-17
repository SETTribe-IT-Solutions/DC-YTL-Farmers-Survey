<!DOCTYPE html>
<html lang="mr">

<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>सद्यस्‍थीतीतील कर्ज विषयक माहिती</title>
   <?php
    include('include/cssLinks.php');
    include('include/jsLinks.php')
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

    .header {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      text-align: center;
      padding: 25px 0;
      border-radius: 15px 15px 0 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .header h1 {
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
</head>
<?php
include('include/header.php')

?>

<body>
  <div class="container-fluid">
    <div class="header">
      <h1>सद्यस्‍थीतीतील कर्ज विषयक माहिती</h1>
      <p>कृपया खालील माहिती अचूकपणे भरा</p>
    </div>

    <form class="main-form" action="Current_Loan_related _nformation_db.php" method="POST">
      <div class="form-section">
        <h3 class="section-title styled-heading">
          <span class="heading-icon">🌾</span> शेतजमीन विषयक माहिती
        </h3>

        <!-- Row 1: Radio Options -->
        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">शेतजमीन (एकुण)</label>
            <div class="radio-group">
              <label><input type="radio" name="total_land" required> 1 एकर पेक्षा कमी</label>
              <label><input type="radio" name="total_land"> 1 एकर ते 2 एकर</label>
              <label><input type="radio" name="total_land"> 2 एकर ते 4 एकर</label>
              <label><input type="radio" name="total_land"> 4 एकर ते 5 एकर</label>
              <label><input type="radio" name="total_land"> 5 एकर पेक्षा जास्त</label>
            </div>
          </div>

          <div class="form-group half-width">
            <label class="form-label required">कोरडवाहु /जिरायत शेतजमीन (एकुण)</label>
            <div class="radio-group">
              <label><input type="radio" name="dry_land" required> 1 एकर पेक्षा कमी</label>
              <label><input type="radio" name="dry_land"> 1 एकर ते 2 एकर</label>
              <label><input type="radio" name="dry_land"> 2 एकर ते 4 एकर</label>
              <label><input type="radio" name="dry_land"> 4 एकर ते 5 एकर</label>
              <label><input type="radio" name="dry_land"> 5 एकर पेक्षा जास्त</label>
            </div>
          </div>
        </div>

        <!-- Row 2: Radio Options -->
        <div class="form-row">
          <div class="form-group half-width">
            <label class="form-label required">हंगामी बागायत शेतजमीन (एकुण)</label>
            <div class="radio-group">
              <label><input type="radio" name="seasonal_irrigated" required> 1 एकर पेक्षा कमी</label>
              <label><input type="radio" name="seasonal_irrigated"> 1 एकर ते 2 एकर</label>
              <label><input type="radio" name="seasonal_irrigated"> 2 एकर ते 4 एकर</label>
              <label><input type="radio" name="seasonal_irrigated"> 4 एकर ते 5 एकर</label>
              <label><input type="radio" name="seasonal_irrigated"> 5 एकर पेक्षा जास्त</label>
            </div>
          </div>

          <div class="form-group half-width">
            <label class="form-label required">बागायत शेतजमीन (एकुण)</label>
            <div class="radio-group">
              <label><input type="radio" name="irrigated_total" required> 1 एकर पेक्षा कमी</label>
              <label><input type="radio" name="irrigated_total"> 1 एकर ते 2 एकर</label>
              <label><input type="radio" name="irrigated_total"> 2 एकर ते 4 एकर</label>
              <label><input type="radio" name="irrigated_total"> 4 एकर ते 5 एकर</label>
              <label><input type="radio" name="irrigated_total"> 5 एकर पेक्षा जास्त</label>
            </div>
          </div>
        </div>

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

      <button type="submit" class="submit-btn">सबमिट करा</button>
    </form>
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