<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Payment Portal</title>
    <link rel="stylesheet" href="assets/css/Payment.css">
</head>
<body>

<div class="payment-page">

    <h1>Payment Portal</h1>
    <p class="subtitle">Complete your payment</p>

    <!-- PAYMENT METHOD -->
    <div class="payment-methods">
        <label>
            <input type="radio" name="paymentMethod" value="card" checked>
            <img src="assets/images/Card.jpg" alt="Card">
        </label>

        <label>
            <input type="radio" name="paymentMethod" value="bkash">
            <img src="assets/images/bkash.jpg" alt="Bkash">
        </label>

        <label>
            <input type="radio" name="paymentMethod" value="nagad">
            <img src="assets/images/nagad.jpg" alt="Nagad">
        </label>

        <label>
            <input type="radio" name="paymentMethod" value="rocket">
            <img src="assets/images/rocket.png" alt="Rocket">
        </label>
    </div>

    <!-- CARD INPUT -->
    <div class="card-section">
        <h2>Card Details</h2>

        <input type="text" id="cardNumber" placeholder="16 Digit Card Number">
   
        <div class="card-row">
    <input type="text" id="expiryDate" placeholder="MM/YY">
    <input type="password" id="cvv" placeholder="CVV">
    </div>

        <input type="text" id="cardName" placeholder="Name on Card">
    </div>

    <!-- MOBILE PAYMENT INPUT -->
    <div class="mobile-section">
        <h2>Mobile Payment</h2>
        <input type="text" id="mobileNumber" placeholder="Mobile Number">
        <input type="password" id="mobilePin" placeholder="PIN">
    </div>

    <!-- BUTTONS -->
    <div class="btn-group">
        <button type="button" onclick="window.location.href='homepage2.php'">Back</button>
        <button type="button" onclick="confirmPayment()">Confirm</button>
        <button type="button" onclick="window.location.href='homepage2.php'">Next</button>
    </div>

</div>

<script src="assets/js/Payment.js"></script>
</body>
</html>
