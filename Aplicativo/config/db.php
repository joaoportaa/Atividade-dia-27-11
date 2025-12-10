<?php
$host = 'localhost';
$dbname = 'learnflow';
$username = 'root';     
$password = '';         

try {
    $dsn = "mysql:host=$host;dbname=$dbname;charset=utf8";
    
    $pdo = new PDO($dsn, $username, $password);
    
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch (PDOException $e) {
    die("Erro ao conectar com o banco de dados: " . $e->getMessage() . 
        "<br>Verifique se o servidor MySQL está ativo e se os dados de conexão em 'config/db.php' estão corretos.");
}
?>