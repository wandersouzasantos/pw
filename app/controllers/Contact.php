<?php

class Contact extends Controller {

   
    // Index of the home page (localhost/home(/index))
    public function index($param1= '', $param2= '', $param3= '') {
        
        // Initialize Alunos model
        $test = $this->model('Alunos');

        // Call function from the model
        $testData = $test->getAlunosFunction();

        $this->view('contact/index', ['alunos' => $testData]);
    }
    public function teste($param1= '', $param2= '', $param3= ''){
        $test = $this->model('Alunos');
        $alunos = $test->getAlunosForName($param2);
        $this->view('contact/index', ['alunos' => $alunos]);
    }
}

?>