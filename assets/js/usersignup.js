const form = document.getElementById("signupForm");
const inputs = document.querySelectorAll(".inputs");
const error = document.querySelectorAll(".USignuperror");

form.addEventListener("submit", function (event) {
    let ok = true;

    if (inputs[0].value.trim() === "") {
        error[0].innerHTML = "Email is required.";
        ok = false;
    } else {
        error[0].innerHTML = "";
    }

    if (inputs[1].value.trim() === "") {
        error[1].innerHTML = "Full name is required.";
        ok = false;
    } else {
        error[1].innerHTML = "";
    }

    if (inputs[2].value.trim() === "") {
        error[2].innerHTML = "Username is required.";
        ok = false;
    } else {
        error[2].innerHTML = "";
    }

    if (inputs[3].value.trim() === "") {
        error[3].innerHTML = "Password is required.";
        ok = false;
    } else if (inputs[3].value.length < 6) {
        error[3].innerHTML = "Password must be at least 6 characters.";
        ok = false;
    } else {
        error[3].innerHTML = "";
    }

    if (!ok) {
        event.preventDefault(); 
    }
});
