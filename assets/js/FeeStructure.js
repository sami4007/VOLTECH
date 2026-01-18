// Confirm JS is loaded
console.log("FeeStructure.js loaded");

function calculateFee() {
    const perCreditInput = document.getElementById("perCredit");
    const totalCreditInput = document.getElementById("totalCredit");

    const perCredit = Number(perCreditInput.value);
    const totalCredit = Number(totalCreditInput.value);

    // Validation
    if (perCreditInput.value === "" || totalCreditInput.value === "") {
        alert("Please fill in both Per Credit Cost and Total Credits.");
        return;
    }

    if (isNaN(perCredit) || isNaN(totalCredit) || perCredit <= 0 || totalCredit <= 0) {
        alert("Please enter valid positive numbers.");
        return;
    }

    // Fixed fees
    const admissionFee = 25000;
    const scienceLabFee = 5000;
    const annualCharge = 1000;

    // Calculations
    const tuitionFee = perCredit * totalCredit;
    const totalFee =
        admissionFee +
        tuitionFee +
        scienceLabFee +
        annualCharge;

    // Update UI text (NO layout changes)
    document.getElementById("tuitionFee").innerText =
        perCredit + " x " + totalCredit + " = " + tuitionFee;

    document.getElementById("totalFee").innerText = totalFee;

    // Required alert output
    alert(
        "Fee Calculation\n\n" +
        "Tuition Fee: " + perCredit + " x " + totalCredit + " = " + tuitionFee + "\n\n" +
        "Admission Fee: 25000\n" +
        "Science Lab Fee: 5000\n" +
        "Annual Charge: 1000\n\n" +
        "Total Fee: " + totalFee
    );
}

function clearFields() {
    document.getElementById("perCredit").value = "";
    document.getElementById("totalCredit").value = "";

    document.getElementById("tuitionFee").innerText =
        "Per Credit Cost x Total Credits";

    document.getElementById("totalFee").innerText =
        "Summation Of The Above Values";
}

function goBack() {
    window.location.href = "homepage2.php";
}
