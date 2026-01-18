<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Fee Structure</title>
    <link rel="stylesheet" href="/Project/VOLTECH/assets/css/FeeStructure.css">
</head>
<body>

<div class="fee-page">

    <!-- LEFT: Fee Input -->
    <div class="input-section">
        <h2>Fee Input</h2>

        <label>Per Credit Cost</label>
        <input type="number" id="perCredit" placeholder="Enter per credit cost">

        <label>Total Credits</label>
        <input type="number" id="totalCredit" placeholder="Enter total credits">

        <div class="btn-group">
            <button type="button" onclick="window.location.href='homepage2.php'">Back</button>
            <button type="button" onclick="calculateFee()">Submit</button>
            <button type="button" onclick="clearFields()">Clear</button>
            <button type="button" onclick="window.location.href='homepage2.php'">Next</button>

        </div>
    </div>

    <!-- RIGHT: Fee Breakdown -->
    <div class="result-section">
        <h2>Fee Breakdown</h2>

        <p><b>Admission Fee:</b> <span>25000</span></p>
        <p><b>Tuition Fee: </b> <span id="tuitionFee">Per Credit Cost x Total Credits</span></p>
        <p><b>Science Lab Fee:</b> <span>5000</span></p>
        <p><b>Annual Charge:</b> <span>1000</span></p>

        <hr>

        <p><b>Total:</b> <span id="totalFee">Summation Of The Above Values</span></p>
    </div>

</div>

<script src="assets/js/FeeStructure.js"></script>


</body>
</html>
