# VOLTECH – Student Management System (PHP)

**VOLTECH** is a role-based Student Management System developed using  
**PHP, MySQL, JavaScript, AJAX, and JSON**, following a simplified  
**MVC (Model–View–Controller)** architecture.

The system supports **Admin**, **Moderator**, and **User (Student)** roles with secure authentication, session-based authorization, and asynchronous data handling.

---

## 📌 Project Objectives

- Implement a secure, role-based authentication system
- Apply MVC (Model–View–Controller) architecture in a PHP project
- Use AJAX and JSON for asynchronous operations
- Provide separate dashboards and permissions for different roles
- Maintain clean separation between logic, data, and presentation

---

## 👥 User Roles & Permissions

### 🔑 Admin
- Login using predefined credentials
- Manage students
- Register students
- Manage funds
- View student details
- Access all admin-only pages

### 🛡️ Moderator
- Login using predefined credentials
- View and manage student details
- Limited administrative access

### 👤 User (Student)
- Register through signup
- Login with registered credentials
- View own student details
- View fee structure
- Access payment portal

---

## 🔐 Authentication & Authorization

- Authentication and authorization are handled through dedicated controllers (UserAuthController, AdminAuthController, and ModAuthController), ensuring role-based access control.
- User credentials are validated using the models/user.php model.
- Role is determined based on database table match:
  - `admin` → Admin
  - `moderator` → Moderator
  - `regtable` → User

---

## 🔄 AJAX & JSON Usage

AJAX and JSON are used for asynchronous student-related operations.

### Example Flow:
1. JavaScript sends a request using `fetch()`
2. Data is sent in JSON format
3. PHP controller decodes JSON using `json_decode()`
4. Response is sent back using `json_encode()`
5. Page updates dynamically without reload

This improves performance and user experience.

---

## 🧪 Database Design

### Tables Used
- `admin`
- `moderator`
- `regtable` (users)
- `students`

### Database Setup

Run the following file initially:

```text
assets/database/dbsetup.php

Then project can be called from home.php