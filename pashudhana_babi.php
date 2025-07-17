<!DOCTYPE html>
<html lang="mr">
<head>
  <meta charset="UTF-8">
  <title>पशुधन विषयक बाबी</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
  <style>
    body {
      font-family: 'Sarabun', sans-serif;
    }

    .form-section {
      border: 1px solid #ccc;
      border-radius: 8px;
      padding: 15px;
      margin-bottom: 20px;
      box-shadow: 0 2px 6px rgba(0, 0, 0, 0.05);
    }

    h4 {
      
      color:#3498db;
      padding: 12px;
      border-radius: 8px;
      text-align: center;
      margin-bottom: 25px;
      font-weight:bold;
     border-bottom-style: solid;
     border-bottom-color:#3498db;
    }

    label {
      font-weight: bold;
      color: black;
    }

    .text-danger {
      color: red;
    }
 label.required::after {
      content: " *";
      color: red;
      
    }
    .radio-label {
      margin-right: 15px;
    }

    .input {
      display: flex;
      flex-wrap: wrap;
      gap: 12px;
    }

    .header {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      text-align: center;
      padding: 20px;
      border-radius: 15px;
      margin-bottom: 30px;
    }

    .header h1 {
      margin: 0;
      font-size: 1.75rem;
    }
    
  </style>
</head>
<body>

<div class="container">
  <div class="header">
    <h1>पशुधन विषयक बाबी</h1>
  </div>

 
      <div class="container mt-4">
     <form id="livestockForm" onsubmit="return validateForm()">
     
<div class="row border">
    <!-- Country Cow -->
    <div class="col-12 mb-2">
     <h4 class="mb-4">पशुधन माहिती फॉर्म</h4>
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
 
    <label class="mt-3">9. वर्षभर वैरण हिरवा चारा पुरेसा आहे काय?<span class="text-danger">*</span></label>
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


<script>
  document.getElementById('livestockForm').addEventListener('submit', function(e) {
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
      
    </div>
  </div>
</form>


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

document.getElementById('livestockForm').addEventListener('submit', function(e) {
  if (!this.checkValidity()) {
    e.preventDefault();
    alert('कृपया सर्व आवश्यक माहिती भरा.');
  }
});
</script>


</body>
</html>
