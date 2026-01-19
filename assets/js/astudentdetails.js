document.addEventListener("DOMContentLoaded", function () {

    const deleteBtn = document.querySelector("button[name='delete']");
    const updateBtn = document.querySelector("button[name='update']");

    if (deleteBtn) {
        deleteBtn.addEventListener("click", function (e) {
            if (!confirm("Are you sure you want to delete this student record?")) {
                e.preventDefault();
            }
        });
    }

    if (updateBtn) {
        updateBtn.addEventListener("click", function () {
            alert("Student record will be updated.");
        });
    }

});
