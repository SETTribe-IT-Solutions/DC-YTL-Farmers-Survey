<!DOCTYPE html>
<html lang="mr">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>कल्याणकारी योजना माहिती</title>
  <?php
  include('include/cssLinks.php');
  include('include/jsLinks.php');
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
      /* max-width: 1000px; */
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

    .header p {
      font-size: 1rem;
      opacity: 0.95;
    }

    .main-container {
      background: white;
      border-radius: 0 0 15px 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.1);
      padding: 30px;
    }

    .section-title {
      color: #2c3e50;
      font-weight: bold;
      font-size: 20px;
      border-left: 5px solid #3498db;
      padding-left: 15px;
      margin-bottom: 25px;
    }

    .form-label {
      font-weight: 600;
      color: #2c3e50;
      font-size: 1.1rem;
      margin-bottom: 8px;
      display: block;
    }

    .form-control {
      width: 100%;
      padding: 10px;
      font-size: 1rem;
      border: 2px solid #e0e6ed;
      border-radius: 8px;
      background: #f8f9fa;
      transition: 0.3s;
    }

    .form-control:focus {
      border-color: #3498db;
      background: white;
      outline: none;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.15);
    }

    .form-group {
      margin-bottom: 20px;
    }

    .radio-group {
      display: flex;
      gap: 15px;
      margin-top: 10px;
    }

    .radio-option {
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .form-row {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
    }

    .half-width {
      flex: 1 1 calc(50% - 10px);
      min-width: 300px;
    }

    .btn-submit {
      background: linear-gradient(135deg, #27ae60, #2ecc71);
      border: none;
      border-radius: 50px;
      padding: 15px 40px;
      font-size: 18px;
      font-weight: 600;
      color: white;
      display: block;
      margin: 30px auto 0;
      cursor: pointer;
      transition: 0.3s;
    }

    .btn-submit:hover {
      transform: translateY(-2px);
      box-shadow: 0 7px 20px rgba(39, 174, 96, 0.4);
    }

    table.custom-table {
      width: 100%;
      border-collapse: collapse;
    }

    table.custom-table td {
      padding: 12px;
      vertical-align: top;
    }

    table.custom-table td:first-child {
      font-weight: 600;
      width: 45%;
      color: #2c3e50;
    }

    /* General Form Styling */
    .main-container {
      font-family: 'Segoe UI', sans-serif;
      background-color: #fdfdfd;
      padding: 30px;
      border-radius: 10px;
      /* max-width: 1000px; */
      margin: 0 auto;
      box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }

    .section-title {
      font-size: 20px;
      font-weight: bold;
      color: #2c3e50;
      border-left: 6px solid #3498db;
      padding-left: 10px;
      margin-bottom: 20px;
      margin-top: 30px;
    }

    /* Form Groups and Labels */
    .form-group {
      margin-bottom: 20px;
    }

    .form-label {
      font-weight: 600;
      display: block;
      margin-bottom: 8px;
      color: #333;
    }

    /* Input and Radio Buttons */
    .form-control {
      width: 100%;
      padding: 10px 14px;
      border: 1px solid #ccc;
      border-radius: 6px;
      font-size: 14px;
      transition: border-color 0.3s ease;
    }

    .form-control:focus {
      border-color: #3498db;
      outline: none;
    }

    /* Radio Button Group */
    .radio-group {
      display: flex;
      gap: 20px;
      align-items: center;
      flex-wrap: wrap;
    }

    .radio-option {
      font-weight: 500;
      color: #333;
    }

    /* Two Column Layout */
    .form-row {
      display: flex;
      gap: 20px;
      flex-wrap: wrap;
      margin-bottom: 20px;
    }

    .half-width {
      width: calc(50% - 10px);
    }

    /* Submit Button */
    .btn-submit {
      background-color: #3498db;
      color: white;
      padding: 12px 30px;
      font-size: 16px;
      font-weight: 600;
      border: none;
      border-radius: 8px;
      cursor: pointer;
      transition: background-color 0.3s ease;
      margin-top: 30px;
    }

    .btn-submit:hover {
      background-color: #2980b9;
    }

    /* Table Styling */
    table {
      border-collapse: collapse;
      width: 100%;
      margin-top: 10px;
      font-size: 14px;
    }

    table th,
    table td {
      border: 1px solid #dcdcdc;
      padding: 10px;
      text-align: center;
    }

    table th {
      background-color: #f0f4f8;
      font-weight: 600;
      color: #2c3e50;
    }

    table td:first-child {
      text-align: left;
      font-weight: 500;
      color: #333;
    }

    table input[type="number"] {
      width: 100%;
      padding: 6px 10px;
      border: 1px solid #ccc;
      border-radius: 6px;
    }


    @media (max-width: 768px) {
      .form-row {
        flex-direction: column;
      }

      .radio-group {
        flex-direction: column;
      }
    }
  </style>


</head>

  <?php
  include('include/header.php');
  ?>
<body>
  <div class="container-fluid">
    <div class="header">
      <h1>कल्याणकारी योजनांचा लाभ संबंधित माहिती</h1>
      <p>कृपया खालील माहिती अचूकपणे भरा</p>
    </div>

    <form class="main-container" id="welfareForm" action="Welfare_Scheme_Benefit_Information_db.php" method="POST" onsubmit="return validateForm()">
      <!-- Form content remains unchanged -->

      <!-- Section 1: प्राथमिक माहिती -->
      <div class="section-title">🧾 प्राथमिक माहिती</div>
      <div class="form-group">
        <label class="form-label">दारिद्र्य रेषेखालील पिवळे राशन कार्ड धारक कुटुंब आहे का? <span style="color: red;">*</span></label>
        <div class="radio-group">
          <label class="radio-option"><input type="radio" name="bpl_card" value="होय"> होय</label>
          <label class="radio-option"><input type="radio" name="bpl_card" value="नाही"> नाही</label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">तपशील <span style="color: red;">*</span></label>
        <input type="text" name="bpl_card_details" class="form-control" placeholder="तपशील लिहा">
      </div>

      <div class="form-group">
        <label class="form-label">मनरेगा जॉब कार्ड आहे का? <span style="color: red;">*</span></label>
        <div class="radio-group">
          <label class="radio-option"><input type="radio" name="mgnrega_card" value="होय"> होय</label>
          <label class="radio-option"><input type="radio" name="mgnrega_card" value="नाही"> नाही</label>
        </div>
      </div>

      <div class="form-group">
        <label class="form-label">राष्ट्रीय अन्न सुरक्षा योजनेंतून लाभ मिळत असल्यास महिन्याला मिळणारा लाभ</label>

        <table border="1" cellpadding="8" cellspacing="0" style="width: 100%; text-align: center; border-collapse: collapse;">
          <thead style="background-color: #f2f2f2;">
            <tr>
              <th style="width: 20%;">योजनेचे नाव</th>
              <th>गहू कि.</th>
              <th>तांदूळ कि.</th>
              <th>डाळ कि.</th>
              <th>इतर</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td style="text-align: left;">1. अंत्योदय</td>
              <td><input type="number" name="wheat_qty1" class="form-control"></td>
              <td><input type="number" name="rice_qty1" class="form-control"></td>
              <td><input type="number" name="dal_qty1" class="form-control"></td>
              <td><input type="number" name="other_qty1" class="form-control"></td>
            </tr>
            <tr>
              <td style="text-align: left;">2. सामान्य कुटुंब</td>
              <td><input type="number" name="wheat_qty2" class="form-control"></td>
              <td><input type="number" name="rice_qty2" class="form-control"></td>
              <td><input type="number" name="dal_qty2" class="form-control"></td>
              <td><input type="number" name="other_qty2" class="form-control"></td>
            </tr>
            <tr>
              <td style="text-align: left;">3. अन्नपूर्णा</td>
              <td><input type="number" name="wheat_qty3" class="form-control"></td>
              <td><input type="number" name="rice_qty3" class="form-control"></td>
              <td><input type="number" name="dal_qty3" class="form-control"></td>
              <td><input type="number" name="other_qty3" class="form-control"></td>
            </tr>
            <tr>
              <td style="text-align: left;">4. शेतकरी लाभार्थी</td>
              <td><input type="number" name="wheat_qty4" class="form-control"></td>
              <td><input type="number" name="rice_qty4" class="form-control"></td>
              <td><input type="number" name="dal_qty4" class="form-control"></td>
              <td><input type="number" name="other_qty4" class="form-control"></td>
            </tr>
            <tr>
              <td style="text-align: left;">5. इतर</td>
              <td><input type="number" name="wheat_qty5" class="form-control"></td>
              <td><input type="number" name="rice_qty5" class="form-control"></td>
              <td><input type="number" name="dal_qty5" class="form-control"></td>
              <td><input type="number" name="other_qty5" class="form-control"></td>
            </tr>
          </tbody>
        </table>
      </div>

      <br><br>

      <!-- Section 2: योजनांचे तपशील -->
      <div class="section-title">📋 योजनांचे तपशील</div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">महात्‍मा ज्‍योतिबा फुले जीवनदायी आरोग्‍य योजनेचा लाभ घेतला आहे काय?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="jyotiba_phule_scheme" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="jyotiba_phule_scheme" value="नाही"> नाही</label>
          </div>
        </div>

        <div class="form-group half-width">
          <label class="form-label">शुभ मंगल सामुहीक विवाह योजनेचा लाभ घेतला आहे काय?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="marriage_scheme" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="marriage_scheme" value="नाही"> नाही</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">सद्यस्थितीत आवश्‍यक्‍ता आहे काय?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="current_requirement" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="current_requirement" value="नाही"> नाही</label>
          </div>
        </div>

        <div class="form-group half-width">
          <label class="form-label">जन धन योजनेअंतर्गत बॅंक खाते उघडले आहे का?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="jan_dhan_account" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="jan_dhan_account" value="नाही"> नाही</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">संजय गोधी निराधार अनुदान योजना लाभ मिळतो का?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="sanjay_ghadi_scheme" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="sanjay_ghadi_scheme" value="नाही"> नाही</label>
          </div>
        </div>

        <div class="form-group half-width">
          <label class="form-label">श्रावण बाळ निवृत्ती वेतन योजना लाभ मिळतो का?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="shravan_bal_pension" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="shravan_bal_pension" value="नाही"> नाही</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">इंदिरा गांधी राष्ट्रीय विधवा निवृत्ती वेतन योजना</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="widow_pension" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="widow_pension" value="नाही"> नाही</label>
          </div>
        </div>

        <div class="form-group half-width">
          <label class="form-label">इंदिरा गांधी राष्ट्रीय वृद्धापकाळ निवृत्ती वेतन योजना</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="old_age_pension" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="old_age_pension" value="नाही"> नाही</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">इंदिरा गांधी राष्ट्रीय अपंग निवृत्ती वेतन योजना</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="disability_pension" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="disability_pension" value="नाही"> नाही</label>
          </div>
        </div>

        <div class="form-group half-width">
          <label class="form-label">प्रधानमंत्री जीवनज्योत विमा योजना लाभ घेतला आहे का?</label>
          <div class="radio-group">
            <label class="radio-option"><input type="radio" name="jivan_jyoti_insurance" value="होय"> होय</label>
            <label class="radio-option"><input type="radio" name="jivan_jyoti_insurance" value="नाही"> नाही</label>
          </div>
        </div>
      </div>

      <div class="form-row">
        <div class="form-group half-width">
          <label class="form-label">इतर कोणत्या योजनेचा लाभ मिळतो का?</label>
          <input type="text" class="form-control" name="other_schemes" placeholder="अधिक माहिती लिहा">
        </div>

        <div class="form-group half-width">
          <label class="form-label">असल्यास तपशील (योजनेचे नाव)</label>
          <input type="text" class="form-control" name="scheme_details" placeholder="योजनेचे नाव लिहा">
        </div>
      </div>


      <button type="submit" class="btn-submit">सबमिट करा</button>
    </form>
    <!-- SweetAlert2 CDN (Add to <head> if not already included) -->
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <script>
      function validateForm() {
        let isValid = true;
        let firstInvalidField = null;

        const requiredRadioNames = [
          'bpl_card', 'mgnrega_card', 'jyotiba_phule_scheme', 'marriage_scheme', 'current_requirement',
          'jan_dhan_account', 'sanjay_ghadi_scheme', 'shravan_bal_pension', 'widow_pension',
          'old_age_pension', 'disability_pension', 'jivan_jyoti_insurance'
        ];

        requiredRadioNames.forEach(name => {
          const radios = document.getElementsByName(name);
          const selected = Array.from(radios).some(r => r.checked);
          const group = radios.length ? radios[0].closest('.form-group') : null;
          if (!selected && group) {
            isValid = false;
            group.style.border = '1px solid red';
            if (!firstInvalidField) firstInvalidField = group;
          } else if (group) {
            group.style.border = '';
          }
        });

        const requiredTextFields = [
          'bpl_card_details', 'other_schemes', 'scheme_details'
        ];

        requiredTextFields.forEach(id => {
          const field = document.getElementsByName(id)[0];
          if (field && field.value.trim() === '') {
            isValid = false;
            field.style.border = '2px solid red';
            if (!firstInvalidField) firstInvalidField = field;
          } else if (field) {
            field.style.border = '';
          }
        });

        if (!isValid) {
          Swal.fire({
            icon: 'warning',
            title: 'कृपया सर्व आवश्यक माहिती भरा!',
            confirmButtonText: 'ठीक आहे',
            confirmButtonColor: '#3498db'
          });

          if (firstInvalidField && firstInvalidField.scrollIntoView) {
            firstInvalidField.scrollIntoView({
              behavior: 'smooth',
              block: 'center'
            });
          }
        }

        return isValid;
      }
    </script>

  </div>
 
  <?php
  include('include/footer.php');
  ?>
</body>

</html>