<!DOCTYPE html>
<html lang="mr">
<head>
  <meta charset="UTF-8">
  <title>मागील एक वर्षातील पिक व उत्पादन</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <style>
    .section-header {
      color:#3498db;
      padding: 8px 0px;
      margin-top: 20px;
      border-radius: 5px;
      font-weight: bold;
    }

    label.required::after {
      content: " *";
      color: red;
      
    }
label{
font-weight:bold;
}
    .form-section {
      
      padding-bottom: 10px;
    }
    
    .header {
      background: linear-gradient(135deg, #2c3e50, #3498db);
      color: white;
      text-align: center;
      padding: 25px 0;
      border-radius: 15px 15px 0 0;
      box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
    }

    .header h4{
      font-size: 2rem;
      font-weight: bold;
      font-size: 1.5rem;
      opacity:0.95;
    }

  </style>
</head>
<body class="container py-4">

  <div class="header">
  <h4 class="m-0">मागील एक वर्षातील पिक व उत्पादन</h4>
</div>


 <form  id="testForm" method="POST">

    <!-- Repeat this block for each row -->
    
    <div class="form-section">
      <div class="section-header">खरिप पिके-१</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
      
         <div class="section-header">खरिप पिके-२</div>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>

         <div class="section-header">खरिप पिके-३</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>

         <div class="section-header">खरिप पिके- ४</div>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>

    <div class="section-header">खरिप इतर</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
    <div class="section-header">रब्‍बी पिके- १</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
    <div class="section-header">रब्‍बी पिके- २</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
    <div class="section-header">रब्‍बी पिके- ३</div>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">रब्‍बी पिके- ४</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>

 <div class="section-header">रब्‍बी इतर</div>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">उन्‍हाळी पिके - १ </div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">उन्‍हाळी पिके - २</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">उन्‍हाळी इतर</div>
      <div class="row g-3">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">फळबाग</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">चारा पिके</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
     <div class="section-header">बांधावरील झाडे</div>
      <div class="row g-3 ">
        <div class="col-md-3">
          <label class="required">पिकाचे नाव</label>
          <input type="text" class="form-control" name="pikanav[1]" required>
        </div>
        <div class="col-md-3">
          <label class="required">वाण / जात</label>
          <input type="text" class="form-control" name="van[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">क्षेत्र (एकरमध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="kshetra[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पादन (क्विंटल)</label>
          <input type="number" step="0.01" class="form-control" name="utpadan[1]" required>
        </div>
        <div class="col-md-2">
          <label class="required">उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="rakham[1]" required>
        </div>
      </div>
    </div>
    

    <!-- Example: Total Annual Income -->
    <div class="from-section">
      <div class="section-header text-center">शेतीपासून मिळणारे सर्व साधारण वार्षिक उत्पन्न</div>
      <div class="row g-3 ">
      <div class="col-md-4"></div>
        <div class="col-md-4">
          <label class="required">एकूण उत्पन्न (₹ मध्ये)</label>
          <input type="number" step="0.01" class="form-control" name="total_income" required>
        </div>
        <div class="col-md-4"></div>
      </div>
    </div>

    <div class="mt-4 mb-3 text-center">
      <button type="submit" class="btn btn-success">सबमिट करा</button>
      <button type="reset" class="btn btn-danger px-4">रद्द करा</button>
    </div>
  </form>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">

  <!-- ✅ SweetAlert2 -->
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
</head>
<!-- ✅ SweetAlert script -->
<!-- JavaScript -->
<script>
  document.getElementById('myForm').addEventListener('submit', function (e) {
    e.preventDefault(); // ✅ Prevent form from submitting

    const name = document.getElementById('name').value.trim();
    const address = document.getElementById('address').value.trim();

    if (!name || !address) {
      // ✅ Show error alert if fields are empty
      Swal.fire({
        icon: 'error',
        title: 'कृपया सर्व आवश्यक माहिती भरा',
        confirmButtonText: 'ठीक आहे',
      });
    } else {
      // ✅ If valid, show success and redirect
      Swal.fire({
        icon: 'success',
        title: 'फॉर्म यशस्वीरित्या सबमिट झाला!',
        confirmButtonText: 'पुढे जा'
      }).then(() => {
        window.location.href = "krushi_yojana.php"; // ✅ Change to your next page
      });
    }
  });
</script>
</body>
</html>
