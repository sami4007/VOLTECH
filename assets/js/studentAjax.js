function loadStudents(type = 'all') {
    let url = "controllers/StudentController.php";

    if (type === 'search') {
        const keyword = document.getElementById("searchBox").value;
        url += "?type=search&keyword=" + encodeURIComponent(keyword);
    }

    fetch(url)
        .then(res => res.json())
        .then(data => {
            const tbody = document.getElementById("studentBody");
            tbody.innerHTML = "";

            data.forEach(student => {
                tbody.innerHTML += `
                    <tr>
                        <td>${student.student_name}</td>
                        <td>${student.student_id}</td>
                        <td>${student.email}</td>
                        <td>${student.phone_number}</td>
                    </tr>
                `;
            });
        });
}
