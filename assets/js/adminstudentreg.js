const form = document.querySelector(".astudentreg-form");
const inputs = document.querySelectorAll(".inputs");
const error = document.querySelectorAll(".astudentregerror");

form.addEventListener("submit", function (event) {
    let ok = true;

   
    if (inputs[0].value.trim() === "") {
        error[0].innerHTML = "Student name is required.";
        ok = false;
    } else error[0].innerHTML = "";

  
    if (inputs[1].value.trim() === "") {
        error[1].innerHTML = "Father name is required.";
        ok = false;
    } else error[1].innerHTML = "";

  
    if (inputs[2].value.trim() === "") {
        error[2].innerHTML = "Mother name is required.";
        ok = false;
    } else error[2].innerHTML = "";

   
    if (inputs[3].value.trim() === "") {
        error[3].innerHTML = "Age is required.";
        ok = false;
    } else if (isNaN(inputs[3].value) || Number(inputs[3].value) <= 0) {
        error[3].innerHTML = "Age must be a valid number.";
        ok = false;
    } else error[3].innerHTML = "";


    if (inputs[4].value.trim() === "") {
        error[4].innerHTML = "Phone number is required.";
        ok = false;
    } else if (!/^[0-9]{10}$/.test(inputs[4].value)) {
        error[4].innerHTML = "Phone number must be exactly 10 digits.";
        ok = false;
    } else error[4].innerHTML = "";


    if (inputs[5].value.trim() === "") {
        error[5].innerHTML = "Email is required.";
        ok = false;
    } else error[5].innerHTML = "";


    if (inputs[6].value.trim() === "") {
        error[6].innerHTML = "Address is required.";
        ok = false;
    } else error[6].innerHTML = "";

    
    if (inputs[7].value.trim() === "") {
        error[7].innerHTML = "Student ID is required.";
        ok = false;
    } else if (isNaN(inputs[7].value)) {
        error[7].innerHTML = "Student ID must be a number.";
        ok = false;
    } else error[7].innerHTML = "";

    if (!ok) {
        event.preventDefault();
    }
});
