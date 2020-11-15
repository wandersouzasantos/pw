<?php

$conn = null;

try {
    $conn = new PDO('mysql:host=mysql;dbname=aula', 'root', '12345');

    $dados = $conn->query("select * from Alunos where id=2 ");
    foreach($dados as $aluno){
        echo "O aluno ".$aluno[1]." tem ".$aluno[2]." anos <br>";
    }


} catch (PDOException $e) {
    print $e->getMessage();
    die();
}

