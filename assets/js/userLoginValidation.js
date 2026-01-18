document.addEventListener("DOMContentLoaded", function () {

    const form = document.getElementById("userLoginForm");
    if (!form) return;

    form.addEventListener("submit", function (e) {
        const username = document.getElementById("userUsername").value.trim();
        const password = document.getElementById("userPassword").value.trim();

        if (username === "" || password === "") {
            e.preventDefault();
            alert("All fields are required.");
        }
    });
});
