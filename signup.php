<!doctype html>
<html>

<head>

	<script>const Uss = JSON.parse(atob('eyJAUkUtUE9TVCI6ZmFsc2UsIlBsYXRmb3JtIjoiQWxwaGEgQmFuayJ9'));</script>

	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<title>Register with us - Reichsburg Online Banking</title>
	<meta name="description" content="">

	<!-- CSS here -->
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/animate.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/swiper-bundle.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/slick.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/magnific-popup.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/font-awesome-pro.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/flaticon.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/spacing.css">
	<link rel="stylesheet" href="uss-modules/uss-bank/bank-home/assets/css/main.css">

	<link rel="shortcut icon" type="image/x-icon" href="logo.png">

	<style>
		.preloader {
			background-position: center;
			background-repeat: no-repeat;
			background-image: url(logo.png);
			background-size: 120px 120px;
		}
	</style>

	<meta name='viewport' content='width=device-width, initial-scale=1.0' data-rc='viewport'>
	<link rel='stylesheet' href='uss-core/assets/css/bootstrap.min.css' data-rc='bootstrap'>
	<link rel='stylesheet' href='uss-core/assets/vendor/bootstrap-icons/bootstrap-icons.css' data-rc='bs-icon'>
	<link rel='stylesheet' href='uss-core/assets/css/animate.min.css' data-rc='animate'>
	<link rel='stylesheet' href='uss-core/assets/vendor/glightbox/glightbox.min.css' data-rc='glightbox'>
	<link rel='stylesheet' href='uss-core/assets/vendor/toastr/toastr.min.css' data-rc='toastr'>
	<link rel='stylesheet' href='uss-core/assets/css/font-size.min.css' data-rc='font-size'>
	<link rel='stylesheet' href='uss-core/assets/css/main.css' data-rc='main-css'>
	<link rel="stylesheet" href="uss-modules/uss-dashboard-main/ud-assets/css/default.css" />
	<link rel='stylesheet' href='uss-modules/uss-bank/style.css'>
	<link rel='stylesheet' href='uss-modules/uss-support/utils/style.css' />
</head>

<body class="uss">
	<!-- header area start -->
	<?php include 'inc/header.php' ?>
	<!-- header area end -->

	
	<main class="mb-5">
		<div class="row g-0 auth-row">
			<div class="pt-5 pb-4">
				<div class="auth-cover-wrapper bg-primary-100">
					<div class="auth-cover">
						<div class="title text-center">
							<!-- image -->
							<div class='mb-2'>
								<img alt=""
									src='logo.png'
									height="60"
								/>
							</div>
							<p class="">Register an account with us</p>
						</div>
					</div>
				</div>
			</div>

			<div class="col-md-10 col-lg-8 col-xl-7 m-auto pb-5">

				<div class="border py-3 px-4 rounded-2 shadow m-1 mx-2 mx-sm-4">
					<div class="flex-grow-1">

						<div class='text-center'>
							<span class='fs-42px text-danger animate__animated animate__pulse d-inline-block'>
								<i class='bi bi-shield-lock'></i>
							</span>
						</div>
						<form method='post' action="#" id='registerForm'
							data-type='ud-signup' enctype='multipart/form-data'>
							<div class="row py-3">
								<div class="col-sm-10 col-md-9 m-auto">
									<h4 class='border-bottom mb-3 text-info'>Authentication</h4>
									<div class="mb-3">
										<input type="text" placeholder="Username" class='form-control' name='username' required
											pattern="^\s*\w+\s*$">
									</div>
									<div class="mb-3">
										<input type="email" placeholder="Email" class='form-control' name='email' required>
									</div>
									<div class='mb-4'>
										<!-- end col -->
										<div class="mb-3 row">
											<div class='col-sm-6 mb-1'>
												<input type="password" placeholder="Password" class='form-control' name='password' required
													pattern='^.{4,}$'>
											</div>
											<div class='col-sm-6 mb-1'>
												<input type="password" placeholder="Confirm Password" class='form-control'
													name='confirm_password' pattern='^.{4,}$' required>
											</div>
										</div>
										<div class="mb-3 row">
											<div class='col-sm-6 mb-1'>
												<input type="password" placeholder="Pin" class='form-control' name='bank[security][pin]'
													required pattern='^\d{4}$'>
											</div>
											<div class='col-sm-6 mb-1'>
												<input type="password" placeholder="Confirm Pin" class='form-control'
													name='bank[security][confirm_pin]' pattern='^\d{4}$' required>
											</div>
										</div>
									</div>

									<div class='mb-3'>

										<!-- PERSONAL INFO -->

										<h4 class="border-bottom mb-3 text-info">Personal Info</h4>

										<div class="row mb-4">

											<div class="col-sm-6 mb-2">
												<label class="form-label --required">First Name</label>
												<input type="text" class="form-control" name="bank[bio][firstname]" required>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label --required">Last Name</label>
												<input type="text" class="form-control" name="bank[bio][lastname]" required>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Phone</label>
												<input type="number" class="form-control" name="bank[bio][phone]">
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label --required">Birth Date</label>
												<input type="date" class="form-control" name="bank[bio][birthdate]" required>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Gender</label>
												<select name="bank[bio][gender]" class="form-select">
													<option value='male'>Male</option>
													<option value='female'>Female</option>
													<option value='others'>Others</option>
												</select>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Religioin</label>
												<select name="bank[bio][religion]" class="form-select">
													<option value='' selected>-- Please select one --</option>
													<option value='islam'>Islam</option>
													<option value='christianity'>Christianity</option>
													<option value='others'>Others</option>
												</select>
											</div>

										</div>

										<!-- ADDRESS INFO -->

										<h4 class="border-bottom mb-3 text-info">Address</h4>

										<div class="row mb-4">

											<div class="col-12 mb-2">
												<label class="form-label --required">Home Address</label>
												<input type="text" name="bank[address][location]" class="form-control" required>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label --required">State</label>
												<input type="text" name="bank[address][state]" class="form-control" required>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">City</label>
												<input type="text" name="bank[address][city]" class="form-control">
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Country</label>
												<select name="bank[address][country]" class="form-select">
													<option value='AF'>Afghanistan</option>
													<option value='AX'>Åland Islands</option>
													<option value='AL'>Albania</option>
													<option value='DZ'>Algeria</option>
													<option value='AS'>American Samoa</option>
													<option value='AD'>Andorra</option>
													<option value='AO'>Angola</option>
													<option value='AI'>Anguilla</option>
													<option value='AQ'>Antarctica</option>
													<option value='AG'>Antigua and Barbuda</option>
													<option value='AR'>Argentina</option>
													<option value='AM'>Armenia</option>
													<option value='AW'>Aruba</option>
													<option value='AU'>Australia</option>
													<option value='AT'>Austria</option>
													<option value='AZ'>Azerbaijan</option>
													<option value='BS'>Bahamas</option>
													<option value='BH'>Bahrain</option>
													<option value='BD'>Bangladesh</option>
													<option value='BB'>Barbados</option>
													<option value='BY'>Belarus</option>
													<option value='BE'>Belgium</option>
													<option value='BZ'>Belize</option>
													<option value='BJ'>Benin</option>
													<option value='BM'>Bermuda</option>
													<option value='BT'>Bhutan</option>
													<option value='BO'>Bolivia</option>
													<option value='BA'>Bosnia and Herzegovina</option>
													<option value='BW'>Botswana</option>
													<option value='BV'>Bouvet Island</option>
													<option value='BR'>Brazil</option>
													<option value='IO'>British Indian Ocean Territory</option>
													<option value='BN'>Brunei Darussalam</option>
													<option value='BG'>Bulgaria</option>
													<option value='BF'>Burkina Faso</option>
													<option value='BI'>Burundi</option>
													<option value='KH'>Cambodia</option>
													<option value='CM'>Cameroon</option>
													<option value='CA'>Canada</option>
													<option value='CV'>Cape Verde</option>
													<option value='KY'>Cayman Islands</option>
													<option value='CF'>Central African Republic</option>
													<option value='TD'>Chad</option>
													<option value='CL'>Chile</option>
													<option value='CN'>China</option>
													<option value='CX'>Christmas Island</option>
													<option value='CC'>Cocos (Keeling} Islands</option>
													<option value='CO'>Colombia</option>
													<option value='KM'>Comoros</option>
													<option value='CG'>Congo</option>
													<option value='CD'>The Democratic Republic of The Congo</option>
													<option value='CK'>Cook Islands</option>
													<option value='CR'>Costa Rica</option>
													<option value='CI'>Cote D'ivoire</option>
													<option value='HR'>Croatia</option>
													<option value='CU'>Cuba</option>
													<option value='CY'>Cyprus</option>
													<option value='CZ'>Czech Republic</option>
													<option value='DK'>Denmark</option>
													<option value='DJ'>Djibouti</option>
													<option value='DM'>Dominica</option>
													<option value='DO'>Dominican Republic</option>
													<option value='EC'>Ecuador</option>
													<option value='EG'>Egypt</option>
													<option value='SV'>El Salvador</option>
													<option value='GQ'>Equatorial Guinea</option>
													<option value='ER'>Eritrea</option>
													<option value='EE'>Estonia</option>
													<option value='ET'>Ethiopia</option>
													<option value='FK'>Falkland Islands (Malvinas}</option>
													<option value='FO'>Faroe Islands</option>
													<option value='FJ'>Fiji</option>
													<option value='FI'>Finland</option>
													<option value='FR'>France</option>
													<option value='GF'>French Guiana</option>
													<option value='PF'>French Polynesia</option>
													<option value='TF'>French Southern Territories</option>
													<option value='GA'>Gabon</option>
													<option value='GM'>Gambia</option>
													<option value='GE'>Georgia</option>
													<option value='DE'>Germany</option>
													<option value='GH'>Ghana</option>
													<option value='GI'>Gibraltar</option>
													<option value='GR'>Greece</option>
													<option value='GL'>Greenland</option>
													<option value='GD'>Grenada</option>
													<option value='GP'>Guadeloupe</option>
													<option value='GU'>Guam</option>
													<option value='GT'>Guatemala</option>
													<option value='GG'>Guernsey</option>
													<option value='GN'>Guinea</option>
													<option value='GW'>Guinea-bissau</option>
													<option value='GY'>Guyana</option>
													<option value='HT'>Haiti</option>
													<option value='HM'>Heard Island and Mcdonald Islands</option>
													<option value='VA'>Holy See (Vatican City State}</option>
													<option value='HN'>Honduras</option>
													<option value='HK'>Hong Kong</option>
													<option value='HU'>Hungary</option>
													<option value='IS'>Iceland</option>
													<option value='IN'>India</option>
													<option value='ID'>Indonesia</option>
													<option value='IR'>Iran</option>
													<option value='IQ'>Iraq</option>
													<option value='IE'>Ireland</option>
													<option value='IM'>Isle of Man</option>
													<option value='IL'>Israel</option>
													<option value='IT'>Italy</option>
													<option value='JM'>Jamaica</option>
													<option value='JP'>Japan</option>
													<option value='JE'>Jersey</option>
													<option value='JO'>Jordan</option>
													<option value='KZ'>Kazakhstan</option>
													<option value='KE'>Kenya</option>
													<option value='KI'>Kiribati</option>
													<option value='KP'>Democratic People's Republic of Korea</option>
													<option value='KR'>Republic of Korea</option>
													<option value='KW'>Kuwait</option>
													<option value='KG'>Kyrgyzstan</option>
													<option value='LA'>Lao People's Democratic Republic</option>
													<option value='LV'>Latvia</option>
													<option value='LB'>Lebanon</option>
													<option value='LS'>Lesotho</option>
													<option value='LR'>Liberia</option>
													<option value='LY'>Libya</option>
													<option value='LI'>Liechtenstein</option>
													<option value='LT'>Lithuania</option>
													<option value='LU'>Luxembourg</option>
													<option value='MO'>Macao</option>
													<option value='MK'>Macedonia</option>
													<option value='MG'>Madagascar</option>
													<option value='MW'>Malawi</option>
													<option value='MY'>Malaysia</option>
													<option value='MV'>Maldives</option>
													<option value='ML'>Mali</option>
													<option value='MT'>Malta</option>
													<option value='MH'>Marshall Islands</option>
													<option value='MQ'>Martinique</option>
													<option value='MR'>Mauritania</option>
													<option value='MU'>Mauritius</option>
													<option value='YT'>Mayotte</option>
													<option value='MX'>Mexico</option>
													<option value='FM'>Micronesia</option>
													<option value='MD'>Moldova</option>
													<option value='MC'>Monaco</option>
													<option value='MN'>Mongolia</option>
													<option value='ME'>Montenegro</option>
													<option value='MS'>Montserrat</option>
													<option value='MA'>Morocco</option>
													<option value='MZ'>Mozambique</option>
													<option value='MM'>Myanmar</option>
													<option value='NA'>Namibia</option>
													<option value='NR'>Nauru</option>
													<option value='NP'>Nepal</option>
													<option value='NL'>Netherlands</option>
													<option value='AN'>Netherlands Antilles</option>
													<option value='NC'>New Caledonia</option>
													<option value='NZ'>New Zealand</option>
													<option value='NI'>Nicaragua</option>
													<option value='NE'>Niger</option>
													<option value='NG'>Nigeria</option>
													<option value='NU'>Niue</option>
													<option value='NF'>Norfolk Island</option>
													<option value='MP'>Northern Mariana Islands</option>
													<option value='NO'>Norway</option>
													<option value='OM'>Oman</option>
													<option value='PK'>Pakistan</option>
													<option value='PW'>Palau</option>
													<option value='PS'>Palestinia</option>
													<option value='PA'>Panama</option>
													<option value='PG'>Papua New Guinea</option>
													<option value='PY'>Paraguay</option>
													<option value='PE'>Peru</option>
													<option value='PH'>Philippines</option>
													<option value='PN'>Pitcairn</option>
													<option value='PL'>Poland</option>
													<option value='PT'>Portugal</option>
													<option value='PR'>Puerto Rico</option>
													<option value='QA'>Qatar</option>
													<option value='RE'>Reunion</option>
													<option value='RO'>Romania</option>
													<option value='RU'>Russian Federation</option>
													<option value='RW'>Rwanda</option>
													<option value='SH'>Saint Helena</option>
													<option value='KN'>Saint Kitts and Nevis</option>
													<option value='LC'>Saint Lucia</option>
													<option value='PM'>Saint Pierre and Miquelon</option>
													<option value='VC'>Saint Vincent and The Grenadines</option>
													<option value='WS'>Samoa</option>
													<option value='SM'>San Marino</option>
													<option value='ST'>Sao Tome and Principe</option>
													<option value='SA'>Saudi Arabia</option>
													<option value='SN'>Senegal</option>
													<option value='RS'>Serbia</option>
													<option value='SC'>Seychelles</option>
													<option value='SL'>Sierra Leone</option>
													<option value='SG'>Singapore</option>
													<option value='SK'>Slovakia</option>
													<option value='SI'>Slovenia</option>
													<option value='SB'>Solomon Islands</option>
													<option value='SO'>Somalia</option>
													<option value='ZA'>South Africa</option>
													<option value='GS'>South Georgia and The South Sandwich Islands</option>
													<option value='ES'>Spain</option>
													<option value='LK'>Sri Lanka</option>
													<option value='SD'>Sudan</option>
													<option value='SR'>Suriname</option>
													<option value='SJ'>Svalbard and Jan Mayen</option>
													<option value='SZ'>Swaziland</option>
													<option value='SE'>Sweden</option>
													<option value='CH'>Switzerland</option>
													<option value='SY'>Syrian Arab Republic</option>
													<option value='TW'>Taiwan, Province of China</option>
													<option value='TJ'>Tajikistan</option>
													<option value='TZ'>Tanzania, United Republic of</option>
													<option value='TH'>Thailand</option>
													<option value='TL'>Timor-leste</option>
													<option value='TG'>Togo</option>
													<option value='TK'>Tokelau</option>
													<option value='TO'>Tonga</option>
													<option value='TT'>Trinidad and Tobago</option>
													<option value='TN'>Tunisia</option>
													<option value='TR'>Turkey</option>
													<option value='TM'>Turkmenistan</option>
													<option value='TC'>Turks and Caicos Islands</option>
													<option value='TV'>Tuvalu</option>
													<option value='UG'>Uganda</option>
													<option value='UA'>Ukraine</option>
													<option value='AE'>United Arab Emirates</option>
													<option value='GB'>United Kingdom</option>
													<option value='US'>United States</option>
													<option value='UM'>United States Minor Outlying Islands</option>
													<option value='UY'>Uruguay</option>
													<option value='UZ'>Uzbekistan</option>
													<option value='VU'>Vanuatu</option>
													<option value='VE'>Venezuela</option>
													<option value='VN'>Viet Nam</option>
													<option value='VG'>Virgin Islands, British</option>
													<option value='VI'>Virgin Islands, U.S.</option>
													<option value='WF'>Wallis and Futuna</option>
													<option value='EH'>Western Sahara</option>
													<option value='YE'>Yemen</option>
													<option value='ZM'>Zambia</option>
													<option value='ZW'>Zimbabwe</option>
												</select>
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Zipcode</label>
												<input type="number" name="bank[address][zipcode]" class="form-control" min="0">
											</div>

										</div>

										<!-- NEXT OF KIN INFO -->

										<h4 class="border-bottom mb-3 text-info">Next Of Kin</h4>

										<div class="row mb-4">

											<div class="col-sm-6 mb-2">
												<label class="form-label">First Name</label>
												<input type="text" name="bank[nok][firstname]" class="form-control">
											</div>

											<div class="col-sm-6 mb-2">
												<label class="form-label">Last Name</label>
												<input type="text" name="bank[nok][lastname]" class="form-control">
											</div>

											<div class="col-12 mb-2">
												<label class="form-label">Relationship</label>
												<select name="bank[nok][relationship]" class="form-select">
													<option value='' selected>- Choose One --</option>
													<option value='mother'>Mother</option>
													<option value='father'>Father</option>
													<option value='brother'>Brother</option>
													<option value='sister'>Sister</option>
													<option value='spouse'>Spouse</option>
													<option value='friend'>Friend</option>
													<option value='son'>Son</option>
													<option value='daughter'>Daughter</option>
													<option value='stepfather'>Stepfather</option>
													<option value='stepmother '>Stepmother </option>
													<option value='stepson'>Stepson</option>
													<option value='stepdaughter'>Stepdaughter</option>
												</select>
											</div>

											<div class="col-12 mb-2">
												<label class="form-label">Address</label>
												<input type="text" name="bank[nok][address]" class="form-control">
											</div>

										</div>

										<!-- BANK SYSTEM INFO -->

										<h4 class="border-bottom mb-3 text-info">Bank System Info</h4>

										<div class="row mb-4">

											<div class="col-12 mb-2">
												<label class="form-label">Prefered Currency</label>
												<select name="bank[system][currency]" class="form-select">
													<option value='USD'>US Dollar</option>
													<option value='GBP'>British Pounds</option>
												</select>
											</div>

											<div class="col-12 mb-2">
												<label class="form-label">Account Type</label>
												<select name="bank[system][account]" class="form-select">
													<option value='savings'>Savings</option>
													<option value='current'>Current</option>
													<option value='checking'>Checking</option>
													<option value='wrgsd'>Wrgsd</option>
												</select>
											</div>

										</div>

									</div> <!-- end col -->
									<div class='mb-4'>
										<div class="form-check user-select-none">
											<input class="form-check-input" type="checkbox" value="" id="tos" required>
											<label class="form-check-label" for="tos">
												<small>
													I agree to the <a href='javascript:void(0)'>Terms Of Service</a> &amp; <a
														href='javascript:void(0)'>Privacy Policy</a>
												</small>
											</label>
										</div>
									</div>
									<!-- end col -->
									<div class="button-group d-flex justify-content-center flex-wrap">
										<button class="btn btn-primary w-100" type='submit'>
											Create Account
										</button>
									</div>

								</div>
							</div>
							<!-- end row -->
						</form>

						<div class='mt-4'>
							<p class="text-sm text-medium text-dark text-center">
								Already have an account?
								<a href="dashboard" class='text-nowrap'>
									Sign In
								</a>
							</p>
						</div>

					</div>
				</div>

			</div>
		</div>
	</main>

	<!-- footer area start -->
	<?php include 'inc/footer.php' ?>
	<!-- footer area end -->
	

	<script src='uss-core/assets/js/jquery-3.6.4.min.js' data-rc='jquery'></script>
	<script src='uss-core/assets/js/bootstrap.bundle.min.js' data-rc='bootstrap'></script>
	<script src='uss-core/assets/js/bootbox.all.min.js' data-rc='bootbox'></script>
	<script src='uss-core/assets/vendor/glightbox/glightbox.min.js' data-rc='glightbox'></script>
	<script src='uss-core/assets/vendor/toastr/toastr.min.js' data-rc='toastr'></script>
	<script src='uss-core/assets/vendor/notiflix/notiflix-loading-aio-3.2.6.min.js' data-rc='notiflix'></script>
	<script src='uss-core/assets/vendor/notiflix/notiflix-block-aio-3.2.6.min.js' data-rc='notiflix'></script>
	<script src='uss-core/assets/js/main.js' data-rc='main-js'></script>
	<script src="uss-modules/uss-dashboard-main/ud-assets/js/polyfill.js"></script>
	<script src="uss-modules/uss-dashboard-main/ud-assets/js/access.js"></script>

	<!-- JS here -->
	<script src="uss-modules/uss-bank/bank-home/assets/js/vendor/waypoints.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/meanmenu.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/swiper-bundle.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/slick.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/jquery-appear.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/jquery-knob.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/range-slider.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/magnific-popup.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/nice-select.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/purecounter.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/countdown.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/wow.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/tweenmax.min.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/isotope-pkgd.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/imagesloaded-pkgd.js"></script>
	<script src="uss-modules/uss-bank/bank-home/assets/js/main.js"></script>

	<script type='module'>
		import autosize from 'uss-modules/uss-dashboard-main/ud-assets/js/autosize.js'
		if ($('.chat-block textarea').length) autosize($('.chat-block textarea'));
	</script>
	<script src='uss-modules/uss-support/utils/script.js'></script>

</body>

</html>