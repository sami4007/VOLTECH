<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>VOLTECH – Student Management System</title>
</head>
<body>

    <h1>VOLTECH – Student Management System (PHP)</h1>

    <p>
        <strong>VOLTECH</strong> is a role-based Student Management System developed using
        <strong>PHP, MySQL, JavaScript, AJAX, and JSON</strong>, following a simplified
        <strong>MVC (Model–View–Controller)</strong> architecture.
        The system supports <strong>Admin</strong>, <strong>Moderator</strong>, and
        <strong>User (Student)</strong> roles with secure authentication, session-based
        authorization, and asynchronous data handling.
    </p>

    <hr>

    <h2>📌 Project Objectives</h2>
    <ul>
        <li>Implement a secure, role-based authentication system</li>
        <li>Apply MVC (Model–View–Controller) architecture in a PHP project</li>
        <li>Use AJAX and JSON for asynchronous operations</li>
        <li>Provide separate dashboards and permissions for different roles</li>
        <li>Maintain clean separation between logic, data, and presentation</li>
    </ul>

    <hr>

    <h2>👥 User Roles &amp; Permissions</h2>

    <h3>🔑 Admin</h3>
    <ul>
        <li>Login using predefined credentials</li>
        <li>Manage students</li>
        <li>Register students</li>
        <li>Manage funds</li>
        <li>View student details</li>
        <li>Access all admin-only pages</li>
    </ul>

    <h3>🛡️ Moderator</h3>
    <ul>
        <li>Login using predefined credentials</li>
        <li>View and manage student details</li>
        <li>Limited administrative access</li>
    </ul>

    <h3>👤 User (Student)</h3>
    <ul>
        <li>Register through signup</li>
        <li>Login with registered credentials</li>
        <li>View own student details</li>
        <li>View fee structure</li>
        <li>Access payment portal</li>
    </ul>

    <hr>

    <h2>🔐 Authentication &amp; Authorization</h2>
    <ul>
        <li>All authentication is handled centrally by <strong>AuthController.php</strong></li>
        <li>User credentials are validated using <strong>models/User.php</strong></li>
        <li>Role is determined based on database table matching:</li>
    </ul>

    <ul>
        <li><strong>admin</strong> &rarr; Admin role</li>
        <li><strong>moderator</strong> &rarr; Moderator role</li>
        <li><strong>regtable</strong> &rarr; User (Student) role</li>
    </ul>

    <hr>

    <h2>🔄 AJAX &amp; JSON Usage</h2>
    <p>
        AJAX and JSON are used for asynchronous student-related operations,
        allowing data exchange without full page reload.
    </p>

    <h4>Example Flow:</h4>
    <ol>
        <li>JavaScript sends a request using <code>fetch()</code></li>
        <li>Data is sent in JSON format</li>
        <li>PHP controller decodes JSON using <code>json_decode()</code></li>
        <li>Response is sent back using <code>json_encode()</code></li>
        <li>Page updates dynamically without reload</li>
    </ol>

    <p>
        This approach improves system performance and user experience.
    </p>

    <hr>

    <h2>🧪 Database Design</h2>

    <h3>Tables Used</h3>
    <ul>
        <li>admin</li>
        <li>moderator</li>
        <li>regtable (users)</li>
        <li>students</li>
    </ul>

    <h3>Database Setup</h3>
    <p>Run the following file:</p>

    <pre>
assets/database/dbsetup.php
    </pre>

    <p>This automatically:</p>
    <ul>
        <li>Creates the database</li>
        <li>Creates all required tables</li>
        <li>Inserts default Admin and Moderator accounts</li>
    </ul>

</body>
</html>
