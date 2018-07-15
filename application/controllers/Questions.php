<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class Questions extends CI_Controller {

	function __construct(){
		parent::__construct();
                //chargement de la bdd
		$this->load->database();
	}
	
	public function quizdisplay()
	{
		//on crée une vue qui joue le qcm
		$this->load->model('Quizmodel');
		$this->data['questions'] = $this->Quizmodel->getQuestions();
		$this->load->view('play_quiz',$this->data);
	}
        
        public function resultdisplay()
	{
            
            $this->data['checks'] = array(
                
                'question1'=> $this->input->post('idqcm1'),
                'question2'=> $this->input->post('idqcm2'),
                'question3'=> $this->input->post('idqcm3'),
                'question4'=> $this->input->post('idqcm4'),
                'question5'=> $this->input->post('idqcm5'),
                'question6'=> $this->input->post('idqcm6'),
                'question7'=> $this->input->post('idqcm7'),
                'question8'=> $this->input->post('idqcm8'),
                'question9'=> $this->input->post('idqcm9'),
                'question10'=> $this->input->post('idqcm10'),
                
                
                
                
                );
                $this->load->model('Quizmodel');
		$this->data['results'] = $this->Quizmodel->getQuestions();
		$this->load->view('result_display',$this->data);
	}
}
