<?php
class ProfileController {
    private $blockModel;

    public function __construct($pdo) {
        if (!isset($_SESSION['user'])) {
            header('Location: index.php?page=login');
            exit;
        }
        $this->blockModel = new StudyBlock($pdo);
    }

    public function index() {
        $userId = $_SESSION['user']['id'];
 
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            if (isset($_POST['add_block'])) {
                $this->blockModel->create($userId, $_POST['subject']);
            }
            if (isset($_POST['save_notes'])) {
                $this->blockModel->updateNotes($_POST['block_id'], $_POST['notes']);
            }
            if (isset($_POST['delete_block'])) {
                $this->blockModel->delete($_POST['block_id']);
            }
            header('Location: index.php?page=perfil');
            exit;
        }
        $blocks = $this->blockModel->getAllByUser($userId);
        
        require 'views/header.php';
        require 'views/perfil.php';
        require 'views/footer.php';
    }
}
?>