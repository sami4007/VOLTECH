document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("adminLoginForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        e.preventDefault();

        const username = document.getElementById("adminUsername").value.trim();
        const password = document.getElementById("adminPassword").value.trim();

        if (username === "" || password === "") {
            alert("All fields are required.");
            return;
        }

        // TEMP ADMIN LOGIN
        if (username === "sami" && password === "sami") {
            window.location.href = "homepage1.php";
        } else {
            alert("Invalid admin credentials.");
        }
    });
});
