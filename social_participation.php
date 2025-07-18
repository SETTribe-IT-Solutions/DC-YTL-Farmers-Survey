<!DOCTYPE html>
<html lang="mr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>सामाजिक सहभाग माहिती फॉर्म</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-gradient: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
      --secondary-gradient: linear-gradient(135deg, #27ae60 0%, #2ecc71 100%);
      --box-shadow: 0 4px 12px rgba(0,0,0,0.15);
    }
    
    /* body {
      background-color: #f8f9fa;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
      padding: 20px;
      color: #333;
      line-height: 1.6;
    }
     */
    .container-fluid {
      margin: 0 auto;
      padding: 0 15px;
    }

    .header1 {
      background: var(--primary-gradient);
      color: white;
      text-align: center;
      padding: 25px 0;
      border-radius: 15px 15px 0 0;
      box-shadow: var(--box-shadow);
      margin-bottom: 30px;
      position: relative;
      overflow: hidden;
      margin-top: 0.5%;

    }
    
    .header1::before {
      content: "";
      position: absolute;
      top: -50%;
      left: -50%;
      width: 200%;
      height: 200%;
      background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
      transform: rotate(30deg);
    }

    .header1 h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      font-weight: 800;
      position: relative;
      z-index: 2;
    }

    .header1 p {
      font-size: 1.1rem;
      opacity: 0.9;
      position: relative;
      z-index: 2;
      max-width: 700px;
      margin: 0 auto;
    }

    .main-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 30px;
      margin-bottom: 30px;
      position: relative;
      z-index: 1;
    }

    .section-title {
      color: #3498db;
      border-bottom: 2px solid #3498db;
      padding-bottom: 12px;
      margin-bottom: 25px;
      font-weight: 700;
      font-size: 1.8rem;
      display: flex;
      align-items: center;
      gap: 15px;
    }
    
    .section-title i {
      background: #e3f2fd;
      width: 50px;
      height: 50px;
      border-radius: 50%;
      display: flex;
      align-items: center;
      justify-content: center;
      font-size: 1.5rem;
    }

    .form-label {
      font-weight: 600;
      margin-bottom: 8px;
      color: #2c3e50;
      font-size: 1.1rem;
      display: flex;
      align-items: center;
      gap: 8px;
    }

    .form-control, .form-select {
      border: 2px solid #e0e6ed;
      border-radius: 8px;
      padding: 12px 15px;
      transition: all 0.3s;
      background: #f8f9fa;
      font-size: 1rem;
    }

    .form-control:focus, .form-select:focus {
      border-color: #3498db;
      background: white;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
      outline: none;
    }
    
    .form-check-input {
      width: 20px;
      height: 20px;
      margin-top: 0.1em;
    }
    
    .form-check-label {
      font-size: 1rem;
    }
    
    .question-card {
      padding: 13px;
    }
    
    .btn-submit {
      background: var(--secondary-gradient);
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
      background: linear-gradient(90deg, transparent, rgba(255,255,255,0.4), transparent);
      transition: 0.5s;
    }

    .btn-submit:hover::after {
      left: 100%;
    }

    .info-icon {
      color: #3498db;
      margin-right: 8px;
      font-size: 1.2rem;
    }

    .required::after {
      content: " *";
      color: #e74c3c;
    }
    
    .additional-info {
      margin-top: 15px;
      padding-top: 15px;
      border-top: 1px dashed #e0e6ed;
    }
    
    .form-footer {
      text-align: center;
      margin-top: 30px;
      padding-top: 20px;
      border-top: 1px solid #e0e6ed;
      color: #6c757d;
      font-size: 0.9rem;
    }
    
    .conditional-section {
      margin-top: 15px;
      padding: 15px;
      background-color: #f9f9f9;
      border-radius: 8px;
      /* border-left: 3px solid #3498db; */
      display: none;
    }
    
    .conditional-section.visible {
      display: block;
      animation: fadeIn 0.3s ease-in-out;
    }
    
    @keyframes fadeIn {
      from { opacity: 0; transform: translateY(-10px); }
      to { opacity: 1; transform: translateY(0); }
    }

    @media (max-width: 768px) {
      .header1 h1 {
        font-size: 1.8rem;
      }
      
      .main-container {
        padding: 20px;
      }
      
      .section-title {
        font-size: 1.5rem;
      }
    }
  </style>
</head>
<body>
  <?php include('include/header.php'); ?>

<div class="container-fluid">
  <!-- <div class="header1">
    <h1><i class="fas fa-hands-helping me-3"></i>सामाजिक सहभाग माहिती फॉर्म</h1>
    <p>कृपया आपल्या सामाजिक सहभागाविषयी माहिती भरा</p>
  </div> -->
  
  <div class="main-container">
    <h4 class="section-title">
      <i class="fas fa-users"></i>सामाजिक सहभाग विषयक माहिती
    </h4>
    
    <form id="socialForm" action="social_participation_db.php" method="POST">
      <!-- Question 1: Organization Membership -->
      <div class="question-card">
        <label class="form-label">
          <span class="question-number">1.</span>
          कुटुंबातील कोणी ग्रामपंचायत सदस्‍य अथवा सोसायटी सदस्‍य किंवा इतर संस्‍था/समिती सदस्‍य आहे का ?
          <span class="required"></span>
        </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gram_panchayat_member" id="org_yes" value="1" required>
          <label class="form-check-label" for="org_yes">होय</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="gram_panchayat_member" id="org_no" value="0" >
          <label class="form-check-label" for="org_no">नाही</label>
        </div>
        
        <!-- Organization type dropdown -->
        <div id="orgTypeContainer" class="conditional-section">
          <div class="mb-3">
            <label class="form-label">संस्थेचा प्रकार निवडा:</label>
            <select class="form-select" name="society_member" id="orgType" required>
              <option value="">-- प्रकार निवडा --</option>
             <option value="gram_panchayat">ग्रामपंचायत सदस्‍य</option>
            <option value="society">सोसायटी सदस्‍य</option>
            <option value="other">संस्‍था/समिती सदस्‍य</option>
            </select>
          </div>
          
          <!-- Organization details -->
          <div id="orgDetailsContainer" class="conditional-section">
            <div class="mb-3">
              <label class="form-label">संस्थेची अधिक माहिती:</label>
              <input type="text" class="form-control" name="organization_details" placeholder="संस्थेची नाव, सदस्याचे नाव, कार्यकाल इ.">
            </div>
          </div>
        </div>
      </div>
      
      <!-- Question 2: Self Help Group Member -->
      <div class="question-card">
        <label class="form-label">
          <span class="question-number">2.</span>
         कुटुंबातील कोणी बचत गट सदस्‍य आहे का ?
          <span class="required"></span>
        </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="self_help_group_member" id="bg_yes" value="1" required>
          <label class="form-check-label" for="bg_yes">होय</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="self_help_group_member" id="bg_no" value="0">
          <label class="form-check-label" for="bg_no">नाही</label>
        </div>
        <div class="additional-info">
          <input type="text" class="form-control mt-2" name="shg_details" placeholder="अधिक माहिती">
        </div>
      </div>
      
      <!-- Question 3: SHG Benefits -->
      <div class="question-card">
        <label class="form-label">
          <span class="question-number">3.</span>
          बचत गटातील काही लाभ मिळाले आहे का ?
          <span class="required"></span>
        </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="shg_benefits" id="benefit_yes" value="1" required>
          <label class="form-check-label" for="benefit_yes">होय</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="shg_benefits" id="benefit_no" value="0">
          <label class="form-check-label" for="benefit_no">नाही</label>
        </div>
        <div class="additional-info">
          <input type="text" class="form-control mt-2" name="shg_benefit_details" placeholder="अधिक माहिती">
        </div>
      </div>
      
      <!-- Question 4: Farmer Producer Group -->
      <div class="question-card">
        <label class="form-label">
          <span class="question-number">4.</span>
         शेतकरी उत्‍पादक गटातील सदस्‍य आहे का ?
          <span class="required"></span>
        </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="farmer_producer_group" id="prod_yes" value="1" required>
          <label class="form-check-label" for="prod_yes">होय</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="farmer_producer_group" id="prod_no" value="0">
          <label class="form-check-label" for="prod_no">नाही</label>
        </div>
      </div>
      
      <!-- Question 5: Religious Activities -->
      <div class="question-card">
        <label class="form-label">
          <span class="question-number">5.</span>
          धार्मिक कार्यक्रमांची आवड आहे काय? (भजन/कीर्तन/नमाज/वेदपठन/इ. स्वरूपात)
        </label>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="religious_activities" id="religious_yes" value="1">
          <label class="form-check-label" for="religious_yes">होय</label>
        </div>
        <div class="form-check form-check-inline">
          <input class="form-check-input" type="radio" name="religious_activities" id="religious_no" value="0">
          <label class="form-check-label" for="religious_no">नाही</label>
        </div>
      </div>

        
      <div class="text-center">
        <button type="submit" class="btn btn-submit" name="register">
          <i class="fas fa-paper-plane me-2"></i>सबमिट करा
        </button>
      </div>
    </form>
  </div>
</div>

<?php include 'include/footer.php'; ?>

<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('socialForm');
    const orgTypeContainer = document.getElementById('orgTypeContainer');
    const orgDetailsContainer = document.getElementById('orgDetailsContainer');
    const orgTypeSelect = document.getElementById('orgType');
    
    // Toggle organization type dropdown based on radio selection
    function toggleOrgTypeContainer() {
      const orgYes = document.getElementById('org_yes');
      if (orgYes.checked) {
        orgTypeContainer.classList.add('visible');
      } else {
        orgTypeContainer.classList.remove('visible');
        orgDetailsContainer.classList.remove('visible');
        // Reset values when hidden
        orgTypeSelect.value = '';
        document.querySelector('input[name="organization_details"]').value = '';
      }
    }
    
    // Toggle organization details based on dropdown selection
    function toggleOrgDetailsContainer() {
      if (orgTypeSelect.value) {
        orgDetailsContainer.classList.add('visible');
      } else {
        orgDetailsContainer.classList.remove('visible');
        document.querySelector('input[name="organization_details"]').value = '';
      }
    }
    
    // Add event listeners
    document.getElementById('org_yes').addEventListener('change', toggleOrgTypeContainer);
    document.getElementById('org_no').addEventListener('change', toggleOrgTypeContainer);
    orgTypeSelect.addEventListener('change', toggleOrgDetailsContainer);
    
    // Initialize on page load
    toggleOrgTypeContainer();
    toggleOrgDetailsContainer();
    
    // Function to toggle additional info fields for other questions
    function toggleAdditionalInfo() {
      document.querySelectorAll('.question-card').forEach((card) => {
        const additionalInfo = card.querySelector('.additional-info');
        if (!additionalInfo) return;
        
        const yesRadios = card.querySelectorAll('input[type="radio"][value="1"]');
        
        let show = false;
        yesRadios.forEach(radio => {
          if (radio.checked) show = true;
        });
        
        additionalInfo.style.display = show ? 'block' : 'none';
        
        // Clear input when "No" is selected
        if (!show) {
          const input = additionalInfo.querySelector('input');
          if (input) input.value = '';
        }
      });
    }
    
    // Add event listeners to all radio buttons for other questions
    document.querySelectorAll('input[type="radio"]').forEach(radio => {
      radio.addEventListener('change', toggleAdditionalInfo);
    });
    
    // Initialize on page load
    toggleAdditionalInfo();
    
    // Form submission logic
    form.addEventListener('submit', function(e) {
      // e.preventDefault();
      
      // Simple form validation
      let valid = true;
      
      // Check all required fields
      const requiredFields = form.querySelectorAll('[required]');
      requiredFields.forEach(field => {
        if (!field.value) {
          valid = false;
          field.classList.add('is-invalid');
        } else {
          field.classList.remove('is-invalid');
        }
      });
      
      // Special validation for organization fields
      if (document.getElementById('org_yes').checked) {
        if (!orgTypeSelect.value) {
          valid = false;
          orgTypeSelect.classList.add('is-invalid');
        } else {
          orgTypeSelect.classList.remove('is-invalid');
        }
      }
      
      if (valid) {
        // Form is valid - show success message
        // alert('फॉर्म सबमिट झाला आहे! धन्यवाद!');
        form.reset();
        // Reset all conditional displays
        toggleOrgTypeContainer();
        toggleAdditionalInfo();
      } else {
        alert('कृपया सर्व आवश्यक फील्ड भरा!');
      }
    });
  });
</script>
</body>
</html>