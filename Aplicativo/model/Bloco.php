<?php
class StudyBlock {
    private $pdo;

    public function __construct($pdo) {
        $this->pdo = $pdo;
    }

    public function create($userId, $subject) {
        $sql = "INSERT INTO blocks (user_id, subject, notes) VALUES (?, ?, '')";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$userId, $subject]);
    }

    public function getAllByUser($userId) {
        $sql = "SELECT * FROM blocks WHERE user_id = ?";
        $stmt = $this->pdo->prepare($sql);
        $stmt->execute([$userId]);
        return $stmt->fetchAll(PDO::FETCH_ASSOC);
    }

    public function updateNotes($blockId, $notes) {
        $sql = "UPDATE blocks SET notes = ? WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$notes, $blockId]);
    }

    public function delete($blockId) {
        $sql = "DELETE FROM blocks WHERE id = ?";
        $stmt = $this->pdo->prepare($sql);
        return $stmt->execute([$blockId]);
    }
}
?>