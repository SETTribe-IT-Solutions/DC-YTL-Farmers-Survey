<!DOCTYPE html>

<html lang="en">
<!--begin::Head-->

<head>
	<title>Farmers Survery</title>
	<meta charset="utf-8" />
	<meta name="viewport" content="width=device-width, initial-scale=1" />
	<?php
	include('include/cssLinks.php');
	?>
	<style>
		* {
			margin: 0;
			padding: 0;
			box-sizing: border-box;
		}

		.container-fluid {
			/* max-width: 900px; */
			/* margin: 0 auto; */
			margin-top: 1%;
		}

		.header {
			background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
			color: white;
			text-align: center;
			padding: 25px 0;
			border-radius: 15px 15px 0 0;
			box-shadow: 0 4px 12px rgba(0, 0, 0, 0.15);
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
		}

		.main-container {
			background: white;
			border-radius: 15px;
			box-shadow: 0 20px 40px rgba(0, 0, 0, 0.15);
			overflow: hidden;
			padding: 30px;
			margin-bottom: 30px;
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

		.sub-section {
			margin-bottom: 40px;
			padding: 20px;
			background-color: #f8f9fa;
			border-radius: 8px;
		}

		.member-title {
			font-weight: bold;
			margin-bottom: 20px;
			padding: 8px 15px;
			background: linear-gradient(135deg, #2c3e50 0%, #3498db 100%);
			border-radius: 8px;
			color: white;
			display: inline-block;
		}

		.form-label {
			font-weight: 600;
			margin-bottom: 8px;
			color: #2c3e50;
			font-size: 1.1rem;
		}

		.form-control,
		.form-select {
			border: 2px solid #e0e6ed;
			border-radius: 8px;
			padding: 5px 15px;
			transition: all 0.3s;
			background: #f8f9fa;
		}

		.form-control:focus,
		.form-select:focus {
			border-color: #3498db;
			background: white;
			box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
			outline: none;
		}

		.form-check-label {
			margin-left: 8px;
			color: #555;
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
			background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.4), transparent);
			transition: 0.5s;
		}

		.btn-submit:hover::after {
			left: 100%;
		}

		.form-group {
			margin-bottom: 25px;
		}

		.form-group {
			margin-bottom: 30px;
		}

		.form-group label {
			display: block;
			margin-bottom: 8px;
			font-weight: 600;
			color: #2c3e50;
			font-size: 1.1em;
		}


		.form-group textarea {
			width: 100%;
			padding: 12px 15px;
			border: 2px solid #e0e6ed;
			border-radius: 8px;
			font-size: 1em;
			transition: all 0.3s ease;
			background: #f8f9fa;
		}


		.form-group textarea:focus {
			outline: none;
			border-color: #3498db;
			background: white;
			box-shadow: 0 0 0 3px rgba(52, 152, 219, 0.1);
		}

		.info-icon {
			color: #3498db;
			margin-right: 8px;
			font-size: 1.2rem;
		}

		.conditional-field {
			display: none;
			animation: fadeIn 0.4s ease;
		}

		@keyframes fadeIn {
			from {
				opacity: 0;
				transform: translateY(-10px);
			}

			to {
				opacity: 1;
				transform: translateY(0);
			}
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

		.footer-note {
			text-align: center;
			margin-top: 20px;
			color: #ecf0f1;
			font-size: 0.9rem;
			padding: 15px;
			background: rgba(0, 0, 0, 0.2);
			border-radius: 8px;
		}

		.question-section {
			border-left: 4px solid #3498db;
			padding-left: 20px;
			margin-bottom: 25px;
		}

		.question-title {
			font-size: 1.2rem;
			color: #2c3e50;
			margin-bottom: 15px;
			display: flex;
			align-items: center;
		}

		.question-number {
			background: #3498db;
			color: white;
			width: 30px;
			height: 30px;
			border-radius: 50%;
			display: flex;
			align-items: center;
			justify-content: center;
			font-weight: bold;
			margin-right: 10px;
		}

		.radio-group {
			display: flex;
			gap: 20px;
			margin-top: 10px;
		}

		.radio-option {
			display: flex;
			align-items: center;
			gap: 8px;
		}

		.radio-option input[type="radio"] {
			width: auto;
			margin: 0;
			appearance: radio;
			-webkit-appearance: radio;
			-moz-appearance: radio;
		}

		.double-column {
			display: grid;
			/* grid-template-columns: 1fr 1fr; */
			gap: 15px;
		}

		.mobile-column {
			display: flex;
			flex-direction: column;
			gap: 20px;
		}

		@media (max-width: 768px) {
			.header h1 {
				font-size: 1.8rem;
			}

			.main-container {
				padding: 20px;
			}

			.btn-submit {
				width: 100%;
				padding: 15px;
			}

			.radio-group {
				flex-direction: column;
				gap: 10px;
			}

			.double-column {
				grid-template-columns: 1fr;
				gap: 20px;
			}
		}
	</style>
</head>
<!--end::Head-->
<!--begin::Body-->

<body id="kt_body" data-kt-app-header-stacked="true" data-kt-app-header-primary-enabled="true"
	data-kt-app-header-secondary-enabled="true" data-kt-app-toolbar-enabled="true" class="app-default">

	<!--begin::App-->
	<div class="d-flex flex-column flex-root app-root" id="kt_app_root">
		<!--begin::Page-->
		<div class="app-page flex-column flex-column-fluid" id="kt_app_page">
			<!--begin::Header-->
			<?php
			include('include/header.php');
			?>
			<div class="container-fluid">
				<!-- <div class="header">
			<h1><i class="fas fa-rupee-sign info-icon me-3"></i>उत्‍पन्‍नाचे स्‍त्रोत (वार्षिक )</h1>
		</div> -->

				<div class="main-container">
					<h4 class="section-title" style="color: #2c3e50; margin-bottom: 20px;">
						<!-- <i class="fas fa-wind info-icon"></i> नैसर्गिक आपत्ती विषयी माहिती -->
						<i class="fas fa-rupee-sign info-icon"></i> उत्‍पन्‍नाचे स्‍त्रोत (वार्षिक )
					</h4>



					<form id="familyForm" action="annual_income_db.php" method="POST" enctype="multipart/form-data">
						<!-- <input type="hidden" name="survey_id" value="<?php echo $survey_id; ?>"> -->



						<!-- उत्पन्नाचे स्रोत (वार्षिक) -->
						<div class="sub-section">
							<h5 class="member-title"><i class="fas fa-rupee-sign info-icon"></i>उत्पन्नाचे स्रोत
								(वार्षिक)
							</h5>

							<div class="row g-3">
								<!-- Repeat for each income source -->
								<div class="col-md-6">
									<label class="form-label">1. शेतीपासून</label>
									<input type="number" name="income_farming" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>

								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_farming" class="form-control"
										placeholder="उदा. 50%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">2. पशुपालनापासून</label>
									<input type="number" name="income_livestock" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_livestock" class="form-control"
										placeholder="उदा. 20%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">3. मजुरी</label>
									<input type="number" name="income_labour" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_labour" class="form-control"
										placeholder="उदा. 10%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">4. कौशल्य आधारित कामे</label>
									<input type="number" name="income_skill" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_skill" class="form-control" placeholder="उदा. 5%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">5. शासकीय / खासगी वेतन</label>
									<input type="number" name="income_salary" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_salary" class="form-control" placeholder="उदा. 5%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">6. इतर (भाडे इ.)</label>
									<input type="number" name="income_other" class="form-control"
										placeholder="वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
								<div class="col-md-6">
									<label class="form-label">टक्केवारी / Remarks</label>
									<input type="text" name="remarks_other" class="form-control" placeholder="उदा. 10%">
									<div class="invalid-feedback"></div>
								</div>

								<div class="col-md-6">
									<label class="form-label">7. एकूण उत्पन्न</label>
									<input type="number" name="income_total" class="form-control"
										placeholder="एकूण वार्षिक उत्पन्न (₹)">
									<div class="invalid-feedback"></div>
								</div>
							</div>
							<!-- </div> -->
							<!-- ... existing income fields ... -->

							<!-- नवीन माहिती संबंधित फील्ड्स -->
							<!-- <div class="sub-section mt-4"> -->
							<!-- <h5 class="member-title mt-4"><i class="fas fa-user info-icon"></i> माहिती व तपासणी संबंधी माहिती -->
							<!-- </h5> -->
							<h4 class="section-title mt-5" style="color: #2c3e50; margin-bottom: 20px;">
								<i class="fas fa-user info-icon"></i>माहिती व तपासणी संबंधी माहिती
							</h4>
							<div class="row g-3">
								<!-- माहिती देणाऱ्याचे पूर्ण नाव व स्वाक्षरी -->
								<div class="col-md-6">
									<label class="form-label">माहीती देणा-याचे पुर्ण नाव व स्‍वाक्षरी</label>
									<input type="text" name="info_provider_name_signature" class="form-control"
										placeholder="उदा. रमेश पाटील - स्वाक्षरी">
									<div class="invalid-feedback"></div>
								</div>

								<!-- माहिती देणाऱ्याचा मोबाईल नंबर -->
								<div class="col-md-6">
									<label class="form-label">मोबाईल नंबर (माहिती देणाऱ्याचा)</label>
									<input type="tel" name="info_provider_mobile" class="form-control"
										placeholder="उदा. 9876543210">
									<div class="invalid-feedback"></div>
								</div>

								<!-- माहिती घेणाऱ्याचे पूर्ण नाव व पदनाम -->
								<div class="col-md-6">
									<label class="form-label">माहीती घेणा-याचे पुर्ण नाव व पदनाम</label>
									<input type="text" name="info_recipient_name_designation" class="form-control"
										placeholder="उदा. योगेश काळे - ग्रामसेवक">
									<div class="invalid-feedback"></div>
								</div>

								<!-- माहिती घेणाऱ्याचा मोबाईल नंबर -->
								<div class="col-md-6">
									<label class="form-label">मोबाईल नंबर (माहिती घेणाऱ्याचा)</label>
									<input type="tel" name="info_recipient_mobile" class="form-control"
										placeholder="उदा. 9876543210">
									<div class="invalid-feedback"></div>
								</div>

								<!-- माहिती घेणाऱ्याची स्वाक्षरी -->
								<!-- माहिती घेणाऱ्याची स्‍वाक्षरी -->
								<div class="col-md-6">
									<label class="form-label">माहीती घेणा-याची स्‍वाक्षरी</label>
									<input type="file" name="info_recipient_signature" class="form-control"
										accept="image/*">
									<div class="invalid-feedback"></div>
								</div>

								<!-- तपासणी करणाऱ्याचे पूर्ण नाव, पदनाम व स्‍वाक्षरी -->
								<div class="col-md-6">
									<label class="form-label">तपासणी करणा-या अधिकारी यांचे पुर्ण नाव व पदनाम व
										स्‍वाक्षरी</label>
									<input type="file" name="verifier_name_designation_signature" class="form-control"
										accept="image/*">
									<div class="invalid-feedback"></div>
								</div>

							</div>
						</div>



						<!-- Submit Button -->
						<div class="text-center">
							<button type="submit" class="btn btn-submit">
								<i class="fas fa-paper-plane me-2"></i>सबमिट करा
							</button>
						</div>
					</form>
					<?php
					include('include/footer.php')
						?>
					<script>
						document.getElementById("familyForm").addEventListener("submit", function (e) {
							let form = e.target;
							let valid = true;

							// सर्व इनपुट्सची चुकांची अवस्था clear करा
							form.querySelectorAll('.form-control').forEach(input => {
								input.classList.remove('is-invalid');
							});

							// इनपुटसाठी फंक्शन तयार करा
							const showError = (inputName, message) => {
								const input = form[inputName];
								const feedback = input.nextElementSibling;
								input.classList.add('is-invalid');
								if (feedback && feedback.classList.contains('invalid-feedback')) {
									feedback.textContent = message;
								}
							};

							// Income fields validate
							const incomeFields = [
								{ name: "income_farming", label: "शेतीपासूनचे उत्पन्न" },
								{ name: "income_livestock", label: "पशुपालन उत्पन्न" },
								{ name: "income_labour", label: "मजुरी उत्पन्न" },
								{ name: "income_skill", label: "कौशल्य उत्पन्न" },
								{ name: "income_salary", label: "वेतन उत्पन्न" },
								{ name: "income_other", label: "इतर उत्पन्न" },
								{ name: "income_total", label: "एकूण उत्पन्न" },

							];

							incomeFields.forEach(field => {
								const value = form[field.name].value.trim();
								if (value === "" || isNaN(value) || Number(value) < 0) {
									valid = false;
									showError(field.name, `"${field.label}" योग्य रक्कम भरावी`);
								}
							});

							// Mobile validation
							const mobileFields = [
								{ name: "info_provider_mobile", label: "माहिती देणाऱ्याचा मोबाईल नंबर" },
								{ name: "info_recipient_mobile", label: "माहिती घेणाऱ्याचा मोबाईल नंबर" },
							];

							mobileFields.forEach(field => {
								const value = form[field.name].value.trim();
								if (!/^\d{10}$/.test(value)) {
									valid = false;
									showError(field.name, `"${field.label}" योग्य 10 अंकी नंबर असावा`);
								}
							});

							// Text fields
							const textFields = [
								{ name: "info_provider_name_signature", label: "माहिती देणाऱ्याचे नाव व स्वाक्षरी" },
								{ name: "info_recipient_name_designation", label: "माहिती घेणाऱ्याचे नाव व पदनाम" },
								{ name: "info_recipient_signature", label: "माहिती घेणाऱ्याची स्वाक्षरी" },
								{ name: "verifier_name_designation_signature", label: "तपासणी अधिकाऱ्याचे नाव व स्वाक्षरी" }
							];

							textFields.forEach(field => {
								const value = form[field.name].value.trim();
								if (value === "") {
									valid = false;
									showError(field.name, `"${field.label}" भरावे`);
								}
							});

							if (!valid) {
								e.preventDefault(); // Submit थांबवा
							}
						});
					</script>


				</div>
			</div>

			<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
			<script>
				document.addEventListener('DOMContentLoaded', function () {
					const form = document.getElementById('familyForm');

					// Toggle conditional fields
					function toggleConditionalFields() {
						const addiction_in_familyYes = document.querySelector('input[name="addiction_in_family"][value="होय"]')?.checked;
						const serious_illnessYes = document.querySelector('input[name="serious_illness"][value="होय"]')?.checked;

						const q6Container = document.getElementById('q6-container');
						const q8Container = document.getElementById('q8-container');

						if (q6Container) {
							q6Container.style.display = addiction_in_familyYes ? 'block' : 'none';
						}
						if (q8Container) {
							q8Container.style.display = serious_illnessYes ? 'block' : 'none';
						}
					}

					// Add event listeners for conditional questions
					document.querySelectorAll('input[name="addiction_in_family"]').forEach(el => {
						el.addEventListener('change', toggleConditionalFields);
					});

					document.querySelectorAll('input[name="serious_illness"]').forEach(el => {
						el.addEventListener('change', toggleConditionalFields);
					});

					// Form validation
					form.addEventListener('submit', function (e) {
						let valid = true;

						// Clear previous errors
						document.querySelectorAll('.validation-error').forEach(el => {
							el.style.display = 'none';
						});

						// Check required fields
						const requiredFields = form.querySelectorAll('[required]');
						requiredFields.forEach(field => {
							if (field.type === 'radio') {
								const radioGroup = form.querySelectorAll(input[name = "${field.name}"]);
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

						// Check age field
						const ageField = form.querySelector('input[name="age"]');
						if (ageField && ageField.value) {
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

						if (!valid) {
							e.preventDefault();
							Swal.fire({
								icon: 'error',
								title: 'त्रुटी',
								text: 'कृपया सर्व आवश्यक माहिती भरा.',
								confirmButtonText: 'ठीक आहे'
							});

							// Scroll to first error
							const firstError = document.querySelector('.validation-error[style*="block"]');
							if (firstError) {
								firstError.scrollIntoView({ behavior: 'smooth', block: 'center' });
							}
						}
						// } else {
						//     e.preventDefault(); // Prevent default to show SweetAlert first
						//     Swal.fire({
						//         icon: 'success',
						//         title: 'यशस्वी',
						//         text: 'फॉर्म यशस्वीरित्या सबमिट केला गेला आहे!',
						//         confirmButtonText: 'ठीक आहे'
						//     }).then(() => {
						//         form.submit(); // Submit after SweetAlert confirmation
						//     });
						// }
					});

					// Initialize conditional fields
					toggleConditionalFields();
				});
			</script>
			<script>
				let memberCount = 1; // starts with 1 as already present

				document.querySelector('button.btn-outline-primary').addEventListener('click', function () {
					memberCount++;

					const container = document.getElementById('members-container');
					const template = document.getElementById('member-template');

					const clone = template.cloneNode(true);

					// Update labels and IDs in cloned element
					clone.querySelector('.member-title').innerHTML = <i class="fas fa-user info-icon"></i>सदस्य क्रमांक ${ memberCount };

					// Clear all input values in the clone
					const inputs = clone.querySelectorAll('input, select');
					inputs.forEach(input => {
						if (input.type === 'radio' || input.type === 'checkbox') {
							input.checked = false;
						} else {
							input.value = '';
						}
					});

					// Optionally, remove or regenerate id attributes to avoid duplicates
					clone.id = '';

					container.appendChild(clone);

					// Scroll to the new member
					clone.scrollIntoView({ behavior: 'smooth' });
				});
			</script>
		</div>
		<!--end::Page-->
	</div>

	<?php
	include('include/jsLinks.php');
	?>
	<!--end::Javascript-->
</body>
<!--end::Body-->

</html>