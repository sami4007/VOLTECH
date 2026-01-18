function searchStudent() {
    const name = document.getElementById("studentName").value.trim();

    if (name === "") {
        alert("Please enter a student name to search");
        return;
    }

   
    document.getElementById("resultSection").innerHTML =
        "<p>Searching for student: <strong>" + name + "</strong></p>";
}

function clearSearch() {
    document.getElementById("studentName").value = "";
    document.getElementById("resultSection").innerHTML = "";
}

function goBack() {
    window.history.back();
}
