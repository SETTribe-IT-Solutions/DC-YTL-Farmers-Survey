<!DOCTYPE html>
<html lang="mr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>कुटुंबिक माहिती फॉर्म</title>
  <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    .container-fluid {
      margin: 20px auto;
      padding: 0 15px;
    }

    /* .header {
      background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
      color: white;
      text-align: center;
      padding: 25px 0;
      border-radius: 15px 15px 0 0;
      box-shadow: 0 4px 12px rgba(0,0,0,0.15);
      margin-bottom: 30px;
    }

    .header h1 {
      font-size: 2.2rem;
      margin-bottom: 10px;
      font-weight: 800;
    }

    .header p {
      font-size: 1.1rem;
      opacity: 0.9;
    } */

    .main-container {
      background: white;
      border-radius: 15px;
      box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
      overflow: hidden;
      padding: 30px;
      margin-bottom: 30px;
       margin-top: -2% !important;
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

    .form-control, .form-select {
      border: 2px solid #e0e6ed;
      border-radius: 8px;
      padding: 5px 15px;
      transition: all 0.3s;
      background: #f8f9fa;
    }

    .form-control:focus, .form-select:focus {
      border-color: #3498db;
      background: white;
      box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
      outline: none;
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

    .form-group {
      margin-bottom: 25px;
    }

    .info-icon {
      color: #3498db;
      margin-right: 8px;
      font-size: 1.2rem;
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

    .add-member-btn {
      padding: 12px 25px;
      font-size: 1.1rem;
      margin-top: 20px;
      border-radius: 8px;
      background: #3498db;
      color: white;
      border: none;
      transition: all 0.3s;
    }
    
    .add-member-btn:hover {
      background: #2980b9;
      transform: translateY(-2px);
    }
    
    .member-form {
      background: white;
      border-radius: 10px;
      padding: 20px;
      margin-bottom: 25px;
      box-shadow: 0 4px 10px rgba(0,0,0,0.08);
      border: 1px solid #e0e6ed;
      /* position: relative; */
    }
    
    .remove-member {
      position: relative;
      /* top: 15px;
      right: 15px; */
      top: 60%;
      right: -850%;
      background: #e74c3c;
      color: white;
      border: none;
      border-radius: 50%;
      width: 30px;
      height: 30px;
      display: flex;
      align-items: center;
      justify-content: center;
      cursor: pointer;
      transition: all 0.3s;
    }
    
    .remove-member:hover {
      transform: scale(1.1);
      background: #c0392b;
    }
    
    .member-title {
      font-weight: bold;
      margin-bottom: 20px;
      padding: 0px 15px;
      background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
      border-radius: 8px;
      color: white;
      display: inline-block;
    }

    @media (max-width: 768px) {
      /* .header h1 {
        font-size: 1.8rem;
      } */
      
      .main-container {
        padding: 20px;
      }
      
      .btn-submit {
        width: 100%;
        padding: 15px;
      }
    }
  </style>
</head>
<body>
  <?php include 'include/header.php'; ?>

<div class="container-fluid">
  <!-- <div class="header">
    <h1><i class="fas fa-users me-3"></i>कुटुंबिक माहिती फॉर्म</h1>
    <p>कृपया आपल्या कुटुंबाची सविस्तर माहिती भरा</p>
  </div> -->
  
  <div class="main-container">
    <h4 class="section-title">शेतकरी कुटुंबातील सदस्य
      <!-- <i class="fas fa-users info-icon"></i> -->
    </h4>
    
    <form id="familyForm" action="family_information_db.php" method="POST" novalidate>
      <div id="members-container">
        <!-- First member will be added here by JavaScript -->
      </div>
      
      <div class="text-center mt-4">
        <button type="button" class="btn add-member-btn" id="addMemberBtn">
          <i class="fas fa-plus-circle me-2"></i>अजून सदस्य जोडा
        </button>
      </div>
        
      <!-- Include SweetAlert2 -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<div class="text-center">
  <button type="button" class="btn btn-submit" name="register" onclick="confirmSubmit()">
    सबमिट करा
  </button>
</div>

<script>
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
        window.location.href = 'household_facilities.php';
      }
    });
  }
</script>

    </form>
  </div>
</div>
<?php include 'include/footer.php'; ?>

<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<script>
  document.addEventListener('DOMContentLoaded', function() {
    const form = document.getElementById('familyForm');
    const membersContainer = document.getElementById('members-container');
    const addMemberBtn = document.getElementById('addMemberBtn');
    let memberCount = 0;
    
    // Function to create a new member form
    function createMemberForm() {
      memberCount++;
      const memberForm = document.createElement('div');
      memberForm.className = 'member-form';
      memberForm.innerHTML = `
        <div class="member-title">
          <i class="fas fa-user info-icon"></i>सदस्य क्रमांक ${memberCount}
          <button type="button" class="remove-member" title="हा सदस्य काढा"><i class="fas fa-times"></i></button>
        </div>
        <div class="row g-3">
          <div class="col-md-6">
            <label class="form-label required">सदस्याचे नाव</label>
            <input type="text" name="member_name[]" class="form-control" required>
            <div class="validation-error">कृपया सदस्याचे नाव प्रविष्ट करा</div>
          </div>
          <div class="col-md-3">
            <label class="form-label required">वय</label>
            <input type="number" name="age[]" class="form-control" required min="0" max="120">
            <div class="validation-error">कृपया वैध वय प्रविष्ट करा</div>
          </div>
          <div class="col-md-3">
            <label class="form-label required">लिंग</label>
            <select name="gender[]" class="form-select" required>
              <option value="" disabled selected>निवडा</option>
              <option value="पुरुष">पुरुष</option>
              <option value="स्त्री">स्त्री</option>
            </select>
            <div class="validation-error">कृपया लिंग निवडा</div>
          </div>
          <div class="col-md-4">
            <label class="form-label required">शेतकरी-याशी नाते</label>
            <select name="relation_with_farmer[]" class="form-select" required>
              <option value="">निवडा</option>
              <option value="आई">आई</option>
              <option value="वडील">वडील</option>
              <option value="भाऊ">भाऊ</option>
              <option value="बहीण">बहीण</option>
              <option value="पत्नी">पत्नी</option>
              <option value="मुलगा">मुलगा</option>
              <option value="मुलगी">मुलगी</option>
              <option value="सासू">सासू</option>
              <option value="सासरे">सासरे</option>
              <option value="इतर">इतर</option>
            </select>
            <div class="validation-error">कृपया नाते निवडा</div>
          </div>
          <div class="col-md-4">
            <label class="form-label required">शिक्षण</label>
            <select name="education[]" class="form-select" required>
              <option value="" disabled selected>निवडा</option>
              <option value="अशिक्षित">अशिक्षित</option>
              <option value="प्राथमिक">प्राथमिक</option>
              <option value="माध्यमिक">माध्यमिक</option>
              <option value="उच्च माध्यमिक">उच्च माध्यमिक</option>
              <option value="पदवी">पदवी</option>
              <option value="पदव्युत्तर">पदव्युत्तर</option>
              <option value="तांत्रिक पदवी/पदविका">तांत्रिक पदवी/पदविका</option>
              <option value="इतर शिक्षण">इतर शिक्षण</option>
            </select>
            <div class="validation-error">कृपया शिक्षण प्रविष्ट करा</div>
          </div>

          <div class="col-md-4">
            <label class="form-label required">व्यवसाय</label>
            <select name="occupation[]" class="form-select" required>
              <option value="" disabled selected>निवडा</option>
              <option value="स्वतची शेती">स्वतची शेती</option>
              <option value="शेतमजूर">शेतमजूर</option>
              <option value="रोजंदारीचे काम">रोजंदारीचे काम</option>
              <option value="घरकाम">घरकाम</option>
              <option value="विद्यार्थी">विद्यार्थी</option>
              <option value="स्वयंरोजगार">स्वयंरोजगार</option>
              <option value="निवृत्त">निवृत्त</option>
              <option value="खाजगी">खाजगी</option>
              <option value="शिक्षणासाठी">शिक्षणासाठी</option>
              <option value="सरकारी नौकरी">सरकारी नौकरी</option>
              <option value="इतर">इतर</option>
            </select>
            <div class="validation-error">कृपया व्यवसाय प्रविष्ट करा</div>
          </div>
          <div class="col-12">
            <label class="form-label required">आरोग्य विषयक / विमा तपशील</label>
            <input type="text" name="health_issues[]" class="form-control" placeholder="उदा. आजार, विमा क्रमांक, इ." required>
            <div class="validation-error">कृपया आरोग्य विषयक/ विमा तपशील प्रविष्ट करा</div>
          </div>
        </div>
      `;
      
      // Add remove member functionality
      const removeBtn = memberForm.querySelector('.remove-member');
      removeBtn.addEventListener('click', function() {
        if (memberCount > 1) {
          memberForm.remove();
          memberCount--;
          updateMemberTitles();
        } else {
          Swal.fire({
            icon: 'warning',
            title: 'सूचना',
            text: 'किमान एक सदस्य असणे आवश्यक आहे!',
            confirmButtonText: 'ठीक आहे'
          });
        }
      });
      
      membersContainer.appendChild(memberForm);
      
      // Scroll to the new member
      memberForm.scrollIntoView({ behavior: 'smooth', block: 'center' });
    }
    
    // Function to update member titles after removal
    function updateMemberTitles() {
      const memberForms = document.querySelectorAll('.member-form');
      memberForms.forEach((form, index) => {
        const title = form.querySelector('.member-title');
        title.innerHTML = `
          <i class="fas fa-user info-icon"></i>सदस्य क्रमांक ${index + 1}
          <button type="button" class="remove-member" title="हा सदस्य काढा"><i class="fas fa-times"></i></button>
        `;
        
        // Reattach event listener to the new remove button
        const removeBtn = title.querySelector('.remove-member');
        removeBtn.addEventListener('click', function() {
          if (memberForms.length > 1) {
            form.remove();
            memberCount--;
            updateMemberTitles();
          } else {
            Swal.fire({
              icon: 'warning',
              title: 'सूचना',
              text: 'किमान एक सदस्य असणे आवश्यक आहे!',
              confirmButtonText: 'ठीक आहे'
            });
          }
        });
      });
    }
    
    // Create first member form on page load
    createMemberForm();
    
    // Add event listener for adding new members
    addMemberBtn.addEventListener('click', createMemberForm);
    
    // Form validation
    form.addEventListener('submit', function(e) {
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

      // Check all age fields
      const ageFields = form.querySelectorAll('input[name="age[]"]');
      ageFields.forEach(ageField => {
        if (ageField.value) {
          const age = parseInt(ageField.value);
          if (isNaN(age) || age < 0 || age > 120) {
            valid = false;
            const error = ageField.nextElementSibling;
            if (error) {
              error.style.display = 'block';
              error.textContent = "कृपया वैध वय प्रविष्ट करा (0-120)";
            }
          }
        }
      });

      if (!valid) {
  Swal.fire({
    icon: 'error',
    title: 'त्रुटी',
    text: 'कृपया सर्व आवश्यक माहिती भरा.',
    confirmButtonText: 'ठीक आहे'
  });
} else {
  const formData = new FormData(form);

  fetch('family_information_db.php', {
    method: 'POST',
    body: formData
  })
  .then(response => response.json())
  .then(data => {
    Swal.fire({
      icon: data.status === 'success' ? 'success' : 'error',
      title: data.status === 'success' ? 'यशस्वी!' : 'त्रुटी!',
      text: data.message,
      confirmButtonText: 'ठीक आहे'
    }).then(() => {
      if (data.status === 'success') {
        // Reset form and reinitialize
        form.reset();
        membersContainer.innerHTML = '';
        memberCount = 0;
        createMemberForm(); // Add first member again
      }
    });
  })
  .catch(error => {
    Swal.fire({
      icon: 'error',
      title: 'सर्व्हर त्रुटी',
      text: 'फॉर्म सबमिट करताना अडचण आली.',
      confirmButtonText: 'ठीक आहे'
    });
    console.error(error);
  });
}

    });
  });
</script>
</body>
</html>