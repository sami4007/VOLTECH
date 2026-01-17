document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("userLoginForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("userUsername").value.trim();
        const password = document.getElementById("userPassword").value.trim();

        if (username === "" || password === "") {
            alert("All fields are required.");
            return;
        }

        // TEMP USER LOGIN
        if (username === "sami" && password === "sami") {
            window.location.href = "homepage2.php";
        } else {
            alert("Invalid username or password.");
        }
    });
});
