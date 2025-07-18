<!DOCTYPE html>
<html lang="mr">
<head>
  <meta charset="UTF-8">
  <title>9 कृषी योजना विषयक</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    label.required::after {
      content: " *";
      color: red;
    }
    
    .form-check-inline {
      margin-right: 15px;
    }
    textarea {
      resize: none;
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
      font-size: 1.5rem;
      opacity:0.95;
    }
.form-label{
font-weight:bold;
   }
  </style>
</head>
<body>

  <div class="container">
 <form  action="krushi_yojana_db.php" method="POST">
  <div class="header">
    <h4>कृषी योजना विषयक</h4>
  </div>

  <!-- Question 1 -->
  <div class="mb-3 mt-4">
    <label class="form-label required">1. पाण्याचे स्रोत असल्यास पाईप लाईन, ठिबक व तुषार संच इत्यादी उपलब्ध आहे का?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="water_source" id="yes1" value="yes">
      <label class="form-check-label" for="yes1">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="water_source" id="no1" value="no">
      <label class="form-check-label" for="no1">नाही</label>
    </div>
    <input type="text" class="form-control mt-2" name="water_source_details" placeholder="पाईप लाईन / तुषार / ठिबक">
  </div>

  <!-- Question 2 -->
  <div class="mb-3">
    <label class="form-label required">2. कोरडवाहु असल्यास मनरेगा अंतर्गत विहीरीची आवश्यकता आहे का?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="well_need" id="yes2" value="yes">
      <label class="form-check-label" for="yes2">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="well_need" id="no2" value="no">
      <label class="form-check-label" for="no2">नाही</label>
    </div>
  </div>

  <!-- Question 3 -->
  <div class="mb-3">
    <label class="form-label required">3. शेततळ्याची आवश्यकता आहे काय?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="farm_pond" id="yes3" value="yes">
      <label class="form-check-label" for="yes3">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="farm_pond" id="no3" value="no">
      <label class="form-check-label" for="no3">नाही</label>
    </div>
  </div>

  <!-- Question 4 -->
  <div class="mb-3">
    <label class="form-label required">4. कृषी खात्याच्या योजनेचा लाभ घेतलेला आहे काय?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scheme_benefit" id="yes4" value="yes">
      <label class="form-check-label" for="yes4">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="scheme_benefit" id="no4" value="no">
      <label class="form-check-label" for="no4">नाही</label>
    </div>
    <textarea class="form-control mt-2" name="scheme_details" rows="2" placeholder="योजनेचे नाव व मिळालेला लाभ"></textarea>
  </div>

  <!-- Question 5 -->
  <div class="mb-3">
    <label class="form-label required">5. कृषी खात्याच्या पिक प्रशिक्षण, पिक प्रात्यक्षिक, सेंद्रिय शेती इत्यादी मध्ये सहभागी करून घेतले जाते का?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="training" id="yes5" value="yes">
      <label class="form-check-label" for="yes5">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="training" id="no5" value="no">
      <label class="form-check-label" for="no5">नाही</label>
    </div>
  </div>

  <!-- Question 6 -->
  <div class="mb-3">
    <label class="form-label required">6. पिक विमा योजनेचा लाभ घेतलेला आहे काय?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="crop_insurance" id="yes6" value="yes">
      <label class="form-check-label" for="yes6">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="crop_insurance" id="no6" value="no">
      <label class="form-check-label" for="no6">नाही</label>
    </div>
    <div class="row mt-2">
      <div class="col-md-6 mb-2">
        <input type="text" class="form-control" name="insurance_crop" placeholder="पिके">
      </div>
      <div class="col-md-6">
        <input type="text" class="form-control" name="insurance_amount" placeholder="प्राप्त रक्कम">
      </div>
    </div>
  </div>

  <!-- Question 7 -->
  <div class="mb-3">
    <label class="form-label required">7. शेतीसंबंधी कोणत्या प्रकारची मदतीची आवश्यकता आहे काय?</label><br>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="farming_help" id="yes7" value="yes">
      <label class="form-check-label" for="yes7">होय</label>
    </div>
    <div class="form-check form-check-inline">
      <input class="form-check-input" type="radio" name="farming_help" id="no7" value="no">
      <label class="form-check-label" for="no7">नाही</label>
    </div>
    <textarea class="form-control mt-2" name="help_details" rows="2" placeholder="तपशील"></textarea>
  </div>

  <!-- Buttons -->
  <div class="text-center mt-4 mb-3">
    <button type="submit" class="btn btn-success px-4">सबमिट</button>
    <button type="reset" class="btn btn-danger px-4">रद्द करा</button>
</div>
</form>

</body>
</html>
