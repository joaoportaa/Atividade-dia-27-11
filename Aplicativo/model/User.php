<?php
class User {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function register($username, $email, $password) {
        $stmt = $this->pdo->prepare("SELECT id FROM users WHERE email = ?");
        $stmt->execute([$email]);
        if ($stmt->fetch()) {
            return false;
        }

        $sql = "INSERT INTO users (username, email, password) VALUES (?, ?, ?)";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$username, $email, $password]);
    }

    public function login($email, $password) {
        $stmt = $this->pdo->prepare("SELECT * FROM users WHERE email = ?");
        $stmt->execute([$email]);
        $user = $stmt->fetch(PDO::FETCH_ASSOC);

        if ($user && $user['password'] == $password) {
            return $user;
        }
        return false;
    }
}
?>