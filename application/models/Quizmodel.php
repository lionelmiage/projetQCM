<?php
defined('BASEPATH') OR exit('No direct script access allowed');

class quizmodel extends CI_Model {


	public function getQuestions()
	{

	//charger la base de données avec une requête sql
		$this->db->select("idqcm, question, choix1, choix2, choix3, reponse");
		$this->db->from("qcm");



	//on crée une requête
		$query = $this->db->get();
		return $query->result();
		$num_data_returned = $query->num_rows;

		if ($num_data_returned < 1){

			echo "La base de données est vide";
			exit();
		}
		
	}
}
