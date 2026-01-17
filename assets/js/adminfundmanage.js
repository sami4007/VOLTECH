document.addEventListener("DOMContentLoaded", function () {

    const form = document.querySelector("form");
    const inputs = document.querySelectorAll("input");

    let teacherFund = null;
    let utilityFund = null;
    let developmentFund = null;

    form.addEventListener("submit", function (e) {
        e.preventDefault(); 

        const clickedBtn = e.submitter;
        const btnText = clickedBtn.innerText.trim();


        if (btnText === "Deposit") {

            const row = clickedBtn.closest(".fund-row");
            const input = row.querySelector("input");
            const label = row.querySelector("label").innerText;
            const value = input.value.trim();

            if (value === "" || isNaN(value) || Number(value) <= 0) {
                alert("Please enter a valid number before depositing.");
                return;
            }

            if (label.includes("Teacher")) {
                teacherFund = Number(value);
            } 
            else if (label.includes("Utility")) {
                utilityFund = Number(value);
            } 
            else if (label.includes("Development")) {
                developmentFund = Number(value);
            }

            alert(label + " deposited successfully: " + value);
        }

        if (btnText === "Show Total Fund") {

            if (
                teacherFund === null ||
                utilityFund === null ||
                developmentFund === null
            ) {
                alert("Please deposit all fund amounts before showing total.");
                return;
            }

            const total =
                teacherFund + utilityFund + developmentFund;

            alert(
                "Fund Details\n\n" +
                "Teacher Salary Fund: " + teacherFund + "\n" +
                "Utility Fund: " + utilityFund + "\n" +
                "Development Fund: " + developmentFund + "\n\n" +
                "Total Fund: " + total
            );
        }
    });

});
