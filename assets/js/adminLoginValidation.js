document.addEventListener("DOMContentLoaded", function () {
    const form = document.getElementById("adminLoginForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        const username = document.getElementById("adminUsername").value.trim();
        const password = document.getElementById("adminPassword").value.trim();

        if (username === "" || password === "") {
            e.preventDefault();
            alert("All fields are required.");
        }
    });
});
