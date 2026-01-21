<?php
// models/User.php

require_once __DIR__ . '/../assets/database/dbconn.php';

class User {

    public function authenticate($username, $password) {

        global $conn;

        /* ================= ADMIN ================= */
        $stmt = $conn->prepare(
            "SELECT id, adminuser FROM admin
             WHERE adminuser = ? AND adminpass = ?"
        );
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($row = $res->fetch_assoc()) {
            return [
                'id'       => $row['id'],
                'username' => $row['adminuser'], // normalized
                'role'     => 'admin'
            ];
        }

        /* ================= MODERATOR ================= */
        $stmt = $conn->prepare(
            "SELECT id, moduser FROM moderator
             WHERE moduser = ? AND modpass = ?"
        );
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($row = $res->fetch_assoc()) {
            return [
                'id'       => $row['id'],
                'username' => $row['moduser'], // normalized
                'role'     => 'moderator'
            ];
        }

        /* ================= USER ================= */
        $stmt = $conn->prepare(
            "SELECT id, username FROM regtable
             WHERE username = ? AND pass = ?"
        );
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($row = $res->fetch_assoc()) {
            return [
                'id'       => $row['id'],
                'username' => $row['username'],
                'role'     => 'user'
            ];
        }

        return false;
    }
}
