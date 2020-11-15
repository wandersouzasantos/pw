<?php

class Alunos {

    // Call to the database
    public function getAlunosFunction() {
        return Database::query("SELECT * FROM alunos");
    }
}

?>