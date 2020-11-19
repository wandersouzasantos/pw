<?php

class Alunos {

    
    public function getAlunosFunction() {
        return Database::query("SELECT * FROM alunos");
    }
    public function getAlunosForName($nome){
        return Database::query("SELECT * FROM alunos where nome = ?", [$nome]);
    }

}

?>