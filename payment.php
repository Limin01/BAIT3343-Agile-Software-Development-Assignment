<?php
	require_once('vendor/autoload.php'); // Require Stripe API library

	\Stripe\Stripe::setApiKey('YOUR_STRIPE_API_KEY'); // Set your Stripe API key

	if(isset($_POST['submit'])) {
		$token = $_POST['stripeToken'];
		$amount = $_POST['amount'];
		$email = $_POST['email'];

		$charge = \Stripe\Charge::create([
			'amount' => $amount,
			'currency' => 'usd',
			'source' => $token,
			'receipt_email' => $email,
		]);

		if($charge->status == 'succeeded') {
			echo "<p>Payment successful!</p>";
		} else {
			echo "<p>Payment failed!</p>";
		}
	}
?>

<!DOCTYPE html>
<html>
<head>
	<title>Payment Page</title>
	<script src="https://js.stripe.com/v3/"></script> <!-- Include Stripe.js library -->
</head>
<body>
	<h1>Payment Page</h1>
	<form method="post">
		<label for="amount">Amount:</label>
		<input type="number" name="amount" required><br><br>

		<label for="email">Email:</label>
		<input type="email" name="email" required><br><br>

		<label for="card-element">Credit or debit card:</label>
		<div id="card-element"></div>
		<div id="card-errors" role="alert"></div><br><br>

		<input type="submit" name="submit" value="Pay Now">
	</form>

	<script>
		var stripe = Stripe('YOUR_STRIPE_PUBLISHABLE_KEY'); // Set your Stripe publishable key
		var elements = stripe.elements();

		var cardElement = elements.create('card');
		cardElement.mount('#card-element');

		var cardErrors = document.getElementById('card-errors');
		cardElement.addEventListener('change', function(event) {
			if (event.error) {
				cardErrors.textContent = event.error.message;
			} else {
				cardErrors.textContent = '';
			}
		});

		var form = document.querySelector('form');
		form.addEventListener('submit', function(event) {
			event.preventDefault();

			stripe.createToken(cardElement).then(function(result) {
				if (result.error) {
					cardErrors.textContent = result.error.message;
				} else {
					form.submit();
				}
			});
		});
	</script>
</body>
</html>

