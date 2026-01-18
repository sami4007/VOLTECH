const paymentRadios = document.querySelectorAll("input[name='paymentMethod']");
const cardSection = document.querySelector(".card-section");
const mobileSection = document.querySelector(".mobile-section");

paymentRadios.forEach(radio => {
    radio.addEventListener("change", () => {
        if (radio.value === "card") {
            cardSection.style.display = "block";
            mobileSection.style.display = "none";
        } else {
            cardSection.style.display = "none";
            mobileSection.style.display = "block";
        }
    });
});

function confirmPayment() {
    const method = document.querySelector("input[name='paymentMethod']:checked").value;

    if (method === "card") {
        const cardNumber = document.getElementById("cardNumber").value;
        const cardName = document.getElementById("cardName").value;
        const expiry = document.getElementById("expiryDate").value;
        const cvv = document.getElementById("cvv").value;

        if (!/^\d{16}$/.test(cardNumber)) {
            alert("Card number must be 16 digits");
            return;
        }
        if (cardName === "") {
            alert("Enter name on card");
            return;
        }
        if (!/^\d{2}\/\d{2}$/.test(expiry)) {
            alert("Expiry format MM/YY");
            return;
        }
        if (!/^\d{3}$/.test(cvv)) {
            alert("CVV must be 3 digits");
            return;
        }
    } else {
        const mobile = document.getElementById("mobileNumber").value;
        const pin = document.getElementById("mobilePin").value;

        if (!/^\d{11}$/.test(mobile)) {
            alert("Enter valid mobile number");
            return;
        }
        if (pin.length < 4) {
            alert("Invalid PIN");
            return;
        }
    }

    alert("Payment validated successfully!");
}

function goBack() {
    window.history.back();
}

function goNext() {
    alert("Proceeding to next step...");
}
