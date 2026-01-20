<?php
// models/User.php

require_once __DIR__ . '/../assets/database/dbconn.php';

class User {

    public function authenticate($username, $password) {
        
        global $conn;

        /* ================= ADMIN ================= */
        $stmt = $conn->prepare(
            "SELECT id, username FROM admin
             WHERE username = ? AND pass = ?"
        );
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows === 1) {
            return [
                'id'       => $res->fetch_assoc()['id'],
                'username' => $username,
                'role'     => 'admin'
            ];
        }

        /* ================= MODERATOR ================= */
        $stmt = $conn->prepare(
            "SELECT id, username FROM moderator
             WHERE username = ? AND pass = ?"
        );
        $stmt->bind_param("ss", $username, $password);
        $stmt->execute();
        $res = $stmt->get_result();

        if ($res->num_rows === 1) {
            return [
                'id'       => $res->fetch_assoc()['id'],
                'username' => $username,
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

        if ($res->num_rows === 1) {
            return [
                'id'       => $res->fetch_assoc()['id'],
                'username' => $username,
                'role'     => 'user'
            ];
        }

        return false;
    }
}
