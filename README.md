# VOLTECH - – Student Management System (PHP)
VOLTECH is a role-based Student Management System developed using PHP, MySQL, JavaScript, AJAX, and JSON, following a simplified MVC architecture.
The system supports Admin, Moderator, and User (Student) roles with secure authentication, session-based authorization, and asynchronous data handling.

📌 Project Objectives:

Implement a secure, role-based authentication system

Apply MVC (Model–View–Controller) architecture in a PHP project

Use AJAX and JSON for asynchronous operations

Provide separate dashboards and permissions for different roles

Maintain clean separation between logic, data, and presentation

👥 User Roles & Permissions:
🔑 Admin

Login using predefined credentials

Manage students

Register students

Manage funds

View student details

Access all admin-only pages

🛡️ Moderator

Login using predefined credentials

View and manage student details

Limited administrative access

👤 User (Student)

Register through signup

Login with registered credentials

View own student details

View fee structure

Access payment portal

🔐 Authentication & Authorization

All authentication is handled centrally by AuthController.php

User credentials are validated using models/User.php

Role is determined based on database table match:

admin → admin

moderator → moderator

regtable → user

👥 User Roles & Permissions
🔑 Admin

Login using predefined credentials

Manage students

Register students

Manage funds

View student details

Access all admin-only pages

🛡️ Moderator

Login using predefined credentials

View and manage student details

Limited administrative access

👤 User (Student)

Register through signup

Login with registered credentials

View own student details

View fee structure

Access payment portal

🔐 Authentication & Authorization

All authentication is handled centrally by AuthController.php

User credentials are validated using models/User.php

Role is determined based on database table match:

admin → admin

moderator → moderator

regtable → user

🔄 AJAX & JSON Usage

AJAX and JSON are used for asynchronous student operations.

Example Flow:

JavaScript sends a request using fetch()

Data is sent in JSON format

PHP controller decodes JSON using json_decode()

Response is sent back using json_encode()

Page updates without reload

This improves performance and user experience.

🧪 Database Design
Tables Used:

admin

moderator

regtable (users)

students

Database setup:

Run:

assets/database/dbsetup.php


This automatically:

Creates database

Creates tables

Inserts default admin & moderator accounts



