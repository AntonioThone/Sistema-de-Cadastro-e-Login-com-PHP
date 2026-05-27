<?php
require 'config.php';

echo "<h2>Teste de Ligação à Base de Dados</h2>";

try {
    $stmt = $pdo->query("SELECT * FROM usuarios");
    echo "✅ Ligação à base de dados OK!<br>";
    echo "Tabela 'usuarios' encontrada.<br>";
    echo "Total de utilizadores: " . $stmt->rowCount();
} catch(PDOException $e) {
    echo "❌ Erro: " . $e->getMessage();
}
?>
