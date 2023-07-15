<?php
// Verifica se a extensão SQLite3 está carregada
if (extension_loaded('sqlite3')) {
    echo "A extensão SQLite3 está ativada.";
} else {
    echo "A extensão SQLite3 não está ativada.";
}
?>