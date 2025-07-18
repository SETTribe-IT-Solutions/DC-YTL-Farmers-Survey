<!DOCTYPE html>
<html lang="mr">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>शेतजमीन विषयक माहिती</title>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php
    include('include/cssLinks.php');
    include('include/jsLinks.php');
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


        /* Form Container */
        .main-container {
            margin: 0px auto;
            padding: 40px;
            background: #ffffff;
            border-radius: 12px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.08);
            border: 1px solid #f0f0f0;
        }

        /* Section Heading */
        .section-heading {
            font-size: 24px;
            font-weight: 600;
            margin-bottom: 30px;
            color: #333;
            text-align: center;
            position: relative;
        }

        .section-heading::after {
            content: '';
            display: block;
            width: 50px;
            height: 3px;
            background: #5e35b1;
            margin: 12px auto 0;
            border-radius: 3px;
        }

        /* Form Group */
        .form-group {
            margin-bottom: 22px;
        }

        /* Labels */
        .form-label {
            display: block;
            font-weight: 500;
            margin-bottom: 8px;
            color: #555;
            font-size: 15px;
        }

        /* Input Fields */
        .form-control {
            width: 100%;
            padding: 12px 15px;
            border: 1px solid #ddd;
            border-radius: 8px;
            background: #f9f9f9;
            font-size: 15px;
            transition: all 0.2s ease;
        }

        .form-control:focus {
            border-color: #5e35b1;
            box-shadow: 0 0 0 3px rgba(94, 53, 177, 0.1);
            outline: none;
            background: #fff;
        }

        /* Radio & Checkbox Groups */
        .radio-group,
        .checkbox-group {
            display: flex;
            gap: 15px;
            flex-wrap: wrap;
        }

        .radio-group label,
        .checkbox-group label {
            display: flex;
            align-items: center;
            gap: 8px;
            font-weight: 500;
            cursor: pointer;
            padding: 8px 15px;
            border-radius: 8px;
            background: #f5f5f5;
            transition: all 0.2s ease;
        }

        .radio-group label:hover,
        .checkbox-group label:hover {
            background: #e9e9e9;
        }

        .radio-group input[type="radio"],
        .checkbox-group input[type="checkbox"] {
            width: 16px;
            height: 16px;
            accent-color: #5e35b1;
            cursor: pointer;
        }

        /* Split Fields (for side-by-side inputs) */
        .split-fields {
            display: flex;
            gap: 20px;
        }

        .split-fields .form-group {
            flex: 1;
        }

        /* Submit Button */
        .btn-submit {
            background: #15724aff;
            color: white;
            padding: 14px 30px;
            border: none;
            border-radius: 8px;
            font-size: 16px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.2s ease;
            display: block;
            margin: 30px auto 0;
            box-shadow: 0 4px 10px rgba(94, 53, 177, 0.2);
        }

        .btn-submit:hover {
            background: #519a64ff;
            transform: translateY(-1px);
            box-shadow: 0 6px 12px rgba(61, 235, 90, 0.25);
        }

        .btn-submit:active {
            transform: translateY(0);
        }

        /* Responsive Adjustments */
        @media (max-width: 768px) {
            .main-container {
                padding: 30px;
                margin: 20px auto;
            }

            .split-fields {
                flex-direction: column;
                gap: 15px;
            }

            .radio-group,
            .checkbox-group {
                flex-direction: column;
                gap: 10px;
            }

            .btn-submit {
                width: 100%;
            }
        }
    </style>
    <style>
        .heading {
            font-size: 24px;
            font-weight: 600;
            color: #2c3e50;
            position: relative;
            padding-left: 40px;
            margin: 20px 0;
            animation: slideIn 0.8s ease-out;
            font-family: 'Segoe UI', sans-serif;
        }

        /* Add icon (🌾) using ::before */
        .heading::before {
            content: "🌾";
            position: absolute;
            left: 0;
            top: 0;
            font-size: 28px;
            animation: popIn 0.5s ease;
        }

        /* Underline using ::after */
        .heading::after {
            content: "";
            position: absolute;
            bottom: -5px;
            left: 0;
            width: 100%;
            height: 3px;
            background: linear-gradient(to right, #27ae60, #2ecc71);
            border-radius: 2px;
            animation: expandLine 1s ease;
        }

        /* Slide in animation */
        @keyframes slideIn {
            from {
                transform: translateX(-30px);
                opacity: 0;
            }

            to {
                transform: translateX(0);
                opacity: 1;
            }
        }

        /* Icon pop animation */
        @keyframes popIn {
            0% {
                transform: scale(0.3);
                opacity: 0;
            }

            100% {
                transform: scale(1);
                opacity: 1;
            }
        }

        /* Underline grow animation */
        @keyframes expandLine {
            0% {
                width: 0%;
            }

            100% {
                width: 100%;
            }
        }
    </style>
   
</head>
 <?php
    include('include/header.php')
    ?>
   
<body>
    <div class="container-fluid">
        <div class="header">
            <h1>शेतजमीन विषयक माहिती</h1>
            <p>कृपया खालील माहिती अचूकपणे भरा</p>
        </div>
        <form id="land-info-form" class="main-container" action="Agricultural_land_information_db.php" method="POST">

            <div class="div heading">शेतजमीन विषयक माहिती</div><br>

            <!-- Land area options -->
            <div class="form-group">
                <label class="form-label">शेतजमीन (एकूण) क्षेत्रफळ:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="land_total[]" required> 1 एकर पेक्षा कमी</label>
                    <label><input type="checkbox" name="land_total[]"> 1 ते 2 एकर</label>
                    <label><input type="checkbox" name="land_total[]"> 2 ते 4 एकर</label>
                    <label><input type="checkbox" name="land_total[]"> 4 ते 5 एकर</label>
                    <label><input type="checkbox" name="land_total[]"> 5 एकर पेक्षा जास्त</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">शेतजमीन (एकूण):</label>
                <div class="split-fields">
                    <input type="text" name="land_total_acre" class="form-control" placeholder="एकर" required>
                    <input type="text" name="land_total_gunta" class="form-control" placeholder="गुंठा" required>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">कोरडवाहू / जिरायत शेतजमीन:</label>
                <div class="split-fields">
                    <input type="text" name="dry_acre" class="form-control" placeholder="एकर">
                    <input type="text" name="dry_gunta" class="form-control" placeholder="गुंठा">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">हंगामी बागायत शेतजमीन:</label>
                <div class="split-fields">
                    <input type="text" name="seasonal_acre" class="form-control" placeholder="एकर">
                    <input type="text" name="seasonal_gunta" class="form-control" placeholder="गुंठा">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">बागायती शेतजमीन:</label>
                <div class="split-fields">
                    <input type="text" name="irrigated_acre" class="form-control" placeholder="एकर">
                    <input type="text" name="irrigated_gunta" class="form-control" placeholder="गुंठा">
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">बागायती असल्यास पाण्याचे स्रोत:</label>
                <div class="checkbox-group">
                    <label><input type="checkbox" name="source[]" value="विहीर"> विहीर</label>
                    <label><input type="checkbox" name="source[]" value="बोर"> बोर</label>
                    <label><input type="checkbox" name="source[]" value="कालवा"> कालवा</label>
                    <label><input type="checkbox" name="source[]" value="इतर"> नाही</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">शेतामध्ये वीज जोडणी आहे काय?</label>
                <div class="radio-group">
                    <label><input type="radio" name="electricity_connection" value="होय" required> होय</label>
                    <label><input type="radio" name="electricity_connection" value="नाही"> नाही</label>
                </div>
            </div>

            <div class="form-group">
                <label class="form-label">शेतात पाण्याच्या किती मोटार आहेत?</label>
                <input type="number" name="motor_count" class="form-control" placeholder="मोटारची संख्या लिखा" required>
            </div>

            <div class="form-group">
                <label class="form-label">वीज बील थकित आहे काय?</label>
                <div class="radio-group">
                    <label>
                        <input type="radio" name="bill_pending" value="होय" required onclick="toggleDetails(true)"> होय
                    </label>
                    <label>
                        <input type="radio" name="bill_pending" value="नाही" onclick="toggleDetails(false)"> नाही
                    </label>
                </div>
            </div>

            <div class="form-group" id="pendingBillDetails" style="display: none;">
                <label class="form-label">असल्यास तप्शील केलेला भुभाग व रक्कम</label>
                <input type="text" name="pending_bill_details" class="form-control" placeholder="तप्शील लिखा">
            </div>

            <script>
                function toggleDetails(show) {
                    const details = document.getElementById('pendingBillDetails');
                    details.style.display = show ? 'block' : 'none';
                }
            </script>


            <button type="submit" class="btn-submit">सबमिट करा</button>
        </form>

        <?php
        // ✅ SweetAlert based on GET response
        if (isset($_GET['status'])) {
            if ($_GET['status'] == 'success' && isset($_GET['survey_id'])) {
                echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'success',
                    title: 'सुरक्षितपणे जतन केले गेले!',
                    text: 'तुमची माहिती सेव्ह झाली आहे. (Survey ID: {$_GET['survey_id']})',
                    confirmButtonColor: '#28a745'
                });
            });
        </script>";
            } elseif ($_GET['status'] == 'error') {
                echo "<script>
            document.addEventListener('DOMContentLoaded', function() {
                Swal.fire({
                    icon: 'error',
                    title: 'त्रुटी!',
                    text: 'कृपया पुन्हा प्रयत्न करा.',
                    confirmButtonColor: '#d33'
                });
            });
        </script>";
            }
        }
        ?>

        <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

        <script>
            document.getElementById("land-info-form").addEventListener("submit", function(e) {
                let valid = true;
                let messages = [];

                // 1. Check required text/number fields
                const requiredFields = this.querySelectorAll("input[required]:not([type='checkbox']):not([type='radio'])");
                requiredFields.forEach(field => {
                    if (!field.value.trim()) {
                        valid = false;
                    }
                });

                // 2. Check that at least one 'land_total[]' checkbox is selected
                const landCheckboxes = this.querySelectorAll("input[name='land_total[]']");
                const oneChecked = Array.from(landCheckboxes).some(cb => cb.checked);
                if (!oneChecked) {
                    valid = false;
                    messages.push("कृपया किमान एक 'शेतजमीन क्षेत्रफळ' पर्याय निवडा.");
                }

                // 3. Check required radio groups (e.g., electricity_connection, bill_pending)
                const radioGroups = ['electricity_connection', 'bill_pending'];
                radioGroups.forEach(groupName => {
                    const radios = this.querySelectorAll(`input[name='${groupName}']`);
                    const oneSelected = Array.from(radios).some(r => r.checked);
                    if (!oneSelected) {
                        valid = false;
                        messages.push(`कृपया '${groupName}' साठी उत्तर निवडा.`);
                    }
                });

                if (!valid) {
                    e.preventDefault(); // stop form submission

                    // Combine all validation messages
                    Swal.fire({
                        icon: 'warning',
                        title: 'कृपया सर्व आवश्यक माहिती भरा.',
                        html: messages.length > 0 ? messages.join('<br>') : 'कृपया फॉर्म पुन्हा तपासा.',
                        confirmButtonText: 'ठीक आहे',
                    });
                }
            });
        </script>

        <?php
        include('include/footer.php')
        ?>


    </div>
</body>

</html>