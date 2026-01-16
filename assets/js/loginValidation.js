// loginValidation.js

document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("loginForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("username").value.trim();
        const password = document.getElementById("password").value.trim();

        // ===== EMPTY FIELD CHECK =====
        if (username === "" || password === "") {
            alert("All fields are required.");
            return;
        }

        // ===== TEMP LOGIN (for now) =====
        if (username === "sami" && password === "sami") {
            window.location.href = "homepage1.php";
        } else {
            alert("Invalid username or password.");
        }
    });
});
