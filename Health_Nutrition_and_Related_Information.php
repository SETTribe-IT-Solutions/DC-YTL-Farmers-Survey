<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>आरोग्‍य पोषण व शिक्षण विषयक माहीती </title>
    <!-- Bootstrap 5 CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Bootstrap Icons -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css" rel="stylesheet">
    <?php
    include('include/header.php');
    ?>
    <style>
        /* --- Previous Styles (unchanged for consistency) --- */
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

        /* Main Container */
        .main-container {
            background: white;
            border-radius: 12px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.08);
            padding: 40px;
            /* max-width: 900px; */
            margin: 0 auto;
            border: 1px solid #f0f0f0;
        }

        /* Heading */
        .heading {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            text-align: center;
            margin-bottom: 30px;
            padding-bottom: 10px;
            border-bottom: 2px solid #f0f0f0;
        }

        /* Form Layout */
        .form-row {
            display: flex;
            gap: 25px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }

        .form-group {
            margin-bottom: 22px;
            width: 100%;
        }

        .half-width {
            flex: 1 1 calc(50% - 12.5px);
            min-width: 280px;
        }

        /* Labels */
        .form-label {
            font-weight: 600;
            display: block;
            margin-bottom: 10px;
            color: #2c3e50;
            font-size: 15px;
        }

        /* Input Fields */
        .form-control {
            width: 100%;
            padding: 12px 15px;
            font-size: 15px;
            border: 1px solid #e0e3e7;
            border-radius: 8px;
            background: #f8fafc;
            transition: all 0.2s ease;
            color: #333;
        }

        .form-control:focus {
            border-color: #3498db;
            background: white;
            outline: none;
            box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
        }

        /* Radio Buttons */
        .radio-group {
            display: flex;
            gap: 20px;
            margin-top: 8px;
            flex-wrap: wrap;
        }

        .radio-option {
            display: flex;
            align-items: center;
            gap: 10px;
        }

        .radio-option input[type="radio"] {
            width: 16px;
            height: 16px;
            accent-color: #3498db;
            cursor: pointer;
        }

        .radio-option label {
            font-weight: 500;
            color: #34495e;
            cursor: pointer;
        }

        /* Submit Button */
        .btn-submit {
            background: linear-gradient(to right, #27ae60, #2ecc71);
            border: none;
            border-radius: 8px;
            padding: 14px 36px;
            font-size: 16px;
            font-weight: 600;
            color: white;
            display: block;
            margin: 35px auto 0;
            cursor: pointer;
            transition: all 0.2s ease;
            box-shadow: 0 4px 12px rgba(39, 174, 96, 0.2);
            width: fit-content;
        }

        .btn-submit:hover {
            background: linear-gradient(to right, #219955, #27ad5f);
            box-shadow: 0 6px 16px rgba(39, 174, 96, 0.3);
            transform: translateY(-1px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-container {
                padding: 30px;
                border-radius: 10px;
            }

            .form-row {
                flex-direction: column;
                gap: 15px;
            }

            .half-width {
                flex: 1 1 100%;
                min-width: auto;
            }

            .btn-submit {
                width: 100%;
                padding: 14px;
            }
        }

        /* Responsive */
        @media (max-width: 768px) {
            .main-container {
                padding: 30px;
                border-radius: 10px;
            }

            .form-row {
                flex-direction: column;
                gap: 15px;
            }

            .half-width {
                flex: 1 1 100%;
                min-width: auto;
            }

            .btn-submit {
                width: 100%;
                padding: 14px;
            }
        }
    </style>
    <style>
        .heading.health-education {
            font-size: 24px;
            font-weight: 600;
            color: #0d47a1;
            /* Dark blue */
            border-bottom: 3px solid #64b5f6;
            /* Light blue underline */
            padding-bottom: 5px;
            margin: 25px 0;
            font-family: 'Segoe UI', sans-serif;
            animation: fadeInSlide 0.6s ease-out;
            margin-right: 75rem;
        }

        /* Smooth fade and slide-in animation */
        @keyframes fadeInSlide {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }

            to {
                opacity: 1;
                transform: translateX(0);
            }
        }
    </style>
    <style>
        .section-heading {
            font-size: 20px;
            font-weight: 600;
            color: #033c5dff;
            /* Deep red */
            background-color: #b7b5e8ff;
            /* Light pinkish background */
            padding: 12px 20px;
            border-left: 5px solid #1b2531ff;
            border-radius: 6px;
            margin: 20px 0;
            display: flex;
            align-items: center;
            box-shadow: 0 2px 6px rgba(0, 0, 0, 0.1);
            font-family: 'Segoe UI', sans-serif;
        }

        .section-heading i {
            font-size: 22px;
            margin-right: 10px;
        }
    </style>
    <?php
    // include('include/header.php');
    // include('include/cssLinks.php');
    // include('include/jsLinks.php')
    ?>

</head>

<body>
    <div class="container-fluid">
        <div class="header1">
            <h1>आरोग्‍य पोषण व शिक्षण विषयक माहीती </h1>
            <p>कृपया खालील माहिती अचूकपणे भरा</p>
        </div>

        <form class="main-container needs-validation" action="Health_Nutrition_and_Related_Information_db.php" method="POST" novalidate>
            <div class="section-heading health-education">
                <i class="bi bi-heart-pulse-fill text-danger me-2"></i>
                आरोग्‍य पोषण व शिक्षण विषयक माहीती
            </div><br>

            <!-- Row 1 -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">कुटुंबातील सदस्यांपैकी कुणाला आरोग्य विषयक उपचाराची आवश्यकता आहे का? <span class="text-danger">*</span></label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="health_required" value="होय" required> होय</label>
                        <label class="radio-option"><input type="radio" name="health_required" value="नाही"> नाही</label>
                    </div>
                    <div class="invalid-feedback">कृपया एक पर्याय निवडा.</div>
                </div>
                <div class="form-group half-width" id="health_details_wrapper">
                    <label class="form-label">अस्वस्थतेचा सविस्तर तपशील</label>
                    <input type="text" class="form-control" name="health_details" id="health_details" placeholder="तपशील लिहा">
                </div>
            </div>

            <!-- Row 2 -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">कुटुंबातील कोणी गर्भवती माता आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="pregnant_woman" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="pregnant_woman" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width">
                    <label class="form-label">जननी माता योजनेचा लाभ मिळतो का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="maternity_scheme" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="maternity_scheme" value="नाही"> नाही</label>
                    </div>
                </div>
            </div>

            <!-- Row 3 -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">0 ते 6 वयोगटातील बालक आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="child_0_6" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="child_0_6" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width">
                    <label class="form-label">बालकाचे सर्व प्रकारचे लसीकरण झाले आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="vaccinated" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="vaccinated" value="नाही"> नाही</label>
                    </div>
                </div>
            </div>

            <!-- Row 4 -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">पोषण आहार व उपचार चालू आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="nutrition" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="nutrition" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width">
                    <label class="form-label">6 ते 18 वयोगटातील कोणी शिक्षण सोडले आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="dropout_6_18" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="dropout_6_18" value="नाही"> नाही</label>
                    </div>
                </div>
            </div>

            <!-- Dropout Details (Always Visible) -->
            <div class="form-row" id="dropoutDetailsSection">
                <div class="form-group half-width">
                    <label class="form-label">शिक्षण सोडलेले वय व वर्ग</label>
                    <input type="text" class="form-control" name="dropout_details" placeholder="वय व वर्ग लिहा">
                </div>
                <div class="form-group half-width"></div>
            </div>

            <!-- Row 5 -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">मुलांचे शिक्षण विषयक आर्थिक विवंचना आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="education_problem" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="education_problem" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width" id="financial_details_input">
                    <label class="form-label">आर्थिक विवंचनेचा तपशील</label>
                    <input type="text" class="form-control" name="financial_details" placeholder="तपशील लिहा">
                </div>
            </div>

            <!-- Hostel Details -->
            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">शासकीय होस्टेलची आवश्यकता आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="hostel_required" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="hostel_required" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width" id="hostel_details_input">
                    <label class="form-label">असल्यास तपशील द्यावा</label>
                    <input type="text" class="form-control" name="hostel_details" placeholder="तपशील लिहा">
                </div>
            </div>

            <div class="form-row">
                <div class="form-group half-width">
                    <label class="form-label">शुभमंगल विवाह योजनेचा लाभ घेतला आहे का?</label>
                    <div class="radio-group">
                        <label class="radio-option"><input type="radio" name="subh_mangal_marriage" value="होय"> होय</label>
                        <label class="radio-option"><input type="radio" name="subh_mangal_marriage" value="नाही"> नाही</label>
                    </div>
                </div>
                <div class="form-group half-width">
                    <label class="form-label">सध्याची गरज</label>
                    <input type="text" class="form-control" name="current_need" placeholder="सध्याची गरज लिहा">
                </div>
            </div>

            <button type="submit" class="btn-submit">सबमिट करा</button>
        </form>

        <script>
            // Validation Script for Required Radio Buttons Only
            function validateHealthForm() {
                let isValid = true;
                let firstInvalid = null;

                const requiredRadioNames = [
                    "health_required", "pregnant_woman", "maternity_scheme", "child_0_6",
                    "vaccinated", "nutrition", "dropout_6_18", "education_problem",
                    "hostel_required", "subh_mangal_marriage"
                ];

                requiredRadioNames.forEach(name => {
                    const radios = document.getElementsByName(name);
                    const selected = Array.from(radios).some(r => r.checked);
                    const group = radios.length ? radios[0].closest('.form-group') : null;
                    if (!selected && group) {
                        isValid = false;
                        group.style.border = '1px solid red';
                        if (!firstInvalid) firstInvalid = group;
                    } else if (group) {
                        group.style.border = '';
                    }
                });

                if (!isValid) {
                    Swal.fire({
                        icon: "warning",
                        title: "कृपया सर्व आवश्यक माहिती भरा!",
                        confirmButtonText: "ठीक आहे",
                        confirmButtonColor: "#3498db"
                    });

                    if (firstInvalid && firstInvalid.scrollIntoView) {
                        firstInvalid.scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });
                    }

                    return false;
                }
                return true;
            }

            document.querySelector('form').addEventListener('submit', function(e) {
                if (!validateHealthForm()) {
                    e.preventDefault();
                }
            });
        </script>
        <script>
            function toggleField(radioName, fieldId, show) {
                const wrapper = document.getElementById(fieldId + '_wrapper');
                const field = document.getElementById(fieldId);
                if (wrapper) wrapper.style.display = show ? 'block' : 'none';
                if (field) field.required = show;
                if (!show) field.value = ''; // reset value if hiding
            }
        </script>

        <!-- Update validation -->
        <script>
            function validateHealthForm() {
                let isValid = true;
                let firstInvalid = null;

                const requiredRadioNames = [
                    "health_required", "pregnant_woman", "maternity_scheme", "child_0_6",
                    "vaccinated", "nutrition", "dropout_6_18", "education_problem",
                    "hostel_required", "subh_mangal_marriage"
                ];

                requiredRadioNames.forEach(name => {
                    const radios = document.getElementsByName(name);
                    const selected = Array.from(radios).some(r => r.checked);
                    const group = radios.length ? radios[0].closest('.form-group') : null;
                    if (!selected && group) {
                        isValid = false;
                        group.style.border = '1px solid red';
                        if (!firstInvalid) firstInvalid = group;
                    } else if (group) {
                        group.style.border = '';
                    }
                });

                const conditionalFields = [{
                    radio: 'health_required',
                    value: 'होय',
                    field: 'health_details'
                }, ];

                conditionalFields.forEach(item => {
                    const selected = document.querySelector(`input[name="${item.radio}"]:checked`);
                    const input = document.getElementById(item.field);
                    if (selected && selected.value === item.value && input.value.trim() === '') {
                        isValid = false;
                        input.style.border = '2px solid red';
                        if (!firstInvalid) firstInvalid = input;
                    } else if (input) {
                        input.style.border = '';
                    }
                });

                if (!isValid) {
                    Swal.fire({
                        icon: "warning",
                        title: "कृपया सर्व आवश्यक माहिती भरा!",
                        confirmButtonText: "ठीक आहे",
                        confirmButtonColor: "#3498db"
                    });

                    if (firstInvalid && firstInvalid.scrollIntoView) {
                        firstInvalid.scrollIntoView({
                            behavior: "smooth",
                            block: "center"
                        });
                    }

                    return false;
                }
                return true;
            }

            document.querySelector('form[action="Health_Nutrition_and_Related_Information_db.php"]').addEventListener('submit', function(e) {
                if (!validateHealthForm()) {
                    e.preventDefault();
                }
            });
        </script>


    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    include('include/footer.php')
    ?>
</body>

</html>