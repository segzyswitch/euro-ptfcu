<?php
require '../config/session.php';
?>

<!DOCTYPE html>
<html lang="en" data-bs-theme="light">

<head>
	<meta charset="UTF-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Crypto Deposit - Reichsburg Banks</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet">
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">
	<link rel="stylesheet" href="assets/css/style.css">
	<link rel="stylesheet" type="text/css" href="assets/vendor/mckenziearts/laravel-notify/css/notify.css" />
	<link rel="shortcut icon" href="../logo.png" type="image/png">
</head>

<body>
	<!-- Desktop Sidebar -->
	<?php include 'inc/sidebar.php'; ?>

	<!-- Main Content -->
	<div class="main-content">
		<!-- Top Bar -->
		<?php include 'inc/panel-header.php'; ?>
		<div class="content-body">
			<div class="row">
				<!-- Sidebar Nav -->
				<div class="col-md-4">
					<div class="card p-3 mb-4">
						<h5 class="mb-3">Select Deposit Method</h5>
						<div class="nav flex-column nav-pills me-3" id="deposit-tabs" role="tablist" aria-orientation="vertical">
							<button class="nav-link mb-1 text-start active"
								id="v-sepa-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-sepa"
								type="button" role="tab">SEPA Bank Transfer
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-sepa-instant-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-sepa-instant"
								type="button" role="tab">SEPA Instant
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-crypto-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-crypto"
								type="button" role="tab">Crypto On-Ramp
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-giropay-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-giropay"
								type="button" role="tab">Giropay
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-sofort-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-sofort"
								type="button" role="tab">Sofort (Klarna)
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-card-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-card"
								type="button" role="tab">Debit / Credit Card
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-paypal-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-paypal"
								type="button" role="tab">PayPal
							</button>
							<button class="nav-link mb-1 text-start"
								id="v-cash-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-cash"
								type="button" role="tab">Cash Deposit (Barzahlen/Cash26)
							</button>
							<button class="nav-link text-start"
								id="v-fintech-tab"
								data-bs-toggle="pill"
								data-bs-target="#v-fintech"
								type="button" role="tab">Fintech Wallets (Revolut/Wise)
							</button>
						</div>
					</div>
				</div>


				<!-- Tab Content -->
				<div class="col-md-8">
					<div class="tab-content" id="deposit-tabContent">
						<!-- SEPA Transfer -->
						<div class="tab-pane fade show active" id="v-sepa" role="tabpanel">
							<div class="card p-4">
								<h5 class="mb-3">SEPA Bank Transfer</h5>
								<p class="small">Transfer funds directly from your EU bank account using SEPA. It usually takes 1-2 business days.</p>
								<form>
									<div class="mb-3">
										<label class="form-label">IBAN</label>
										<input type="text" class="form-control" placeholder="DE89 3704 0044 0532 0130 00">
									</div>
									<div class="mb-3">
										<label class="form-label">BIC / SWIFT</label>
										<input type="text" class="form-control" placeholder="COBADEFFXXX">
									</div>
									<div class="mb-3">
										<label class="form-label">Amount (€)</label>
										<input type="number" class="form-control" min="1" step="0.01">
									</div>
									<button type="submit" class="btn btn-primary">Generate Deposit Instructions</button>
								</form>
							</div>
						</div>


						<!-- SEPA Instant -->
						<div class="tab-pane fade" id="v-sepa-instant" role="tabpanel">
							<div class="card p-4">
								<h5 class="fw-bold mb-3">SEPA Instant Transfer</h5>
								<p>Send money instantly between supported EU banks (under 10 seconds).</p>
								<form>
									<div class="mb-3">
										<label class="form-label">IBAN</label>
										<input type="text" class="form-control" placeholder="DE89 3704 0044 0532 0130 00">
									</div>
									<div class="mb-3">
										<label class="form-label">Amount (€)</label>
										<input type="number" class="form-control" min="1" step="0.01">
									</div>
									<button class="btn btn-success">Confirm Instant Transfer</button>
								</form>
							</div>
						</div>


						<!-- Giropay -->
					</div>
				</div>
			</div>
		</div>

		<!-- Mobile Bottom Navigation -->
		<?php include 'inc/mobile-menu.php'; ?>

		<script src="assets/global/js/jquery.min.js"></script>
		<script src="assets/vendor/mckenziearts/laravel-notify/js/notify.js"></script>
		<script src="../js/forms.js"></script>
		<script>
			$(document).ready(function () {
				$('#depositAccount').on('change', function () {
					const selectedMethod = $("#depositAccount option:selected");
					const name = selectedMethod.val();
					const wallet_address = selectedMethod.data('address');
					const qrcode = selectedMethod.data('code');
					$('#showWalletInfo').show();
					if (qrcode) {
						$('#showWalletInfo #img').show();
						$("#showWalletInfo img").attr('src', `../assets/images/wallets/${qrcode}`);
					} else {
						$('#showWalletInfo #img').hide();
					}
					$('#depositWallet').val(wallet_address);
					$("#coinInfo").html(`Send ${name} to this wallet, sending other crypto might cause delay!`)
				});
			});

			// Copy to clipboard function
			function copyInput() {
				const input = document.getElementById("depositWallet");
				input.select();
				input.setSelectionRange(0, 99999); // for mobile devices
				navigator.clipboard.writeText(input.value)
					.then(() => notifySuccess("Copied to clipboard"))
					.catch(err => console.error("Copy failed:", err));
			}
		</script>
		<script src="assets/js/theme.js"></script>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>