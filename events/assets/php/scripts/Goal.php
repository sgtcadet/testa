<?php 

class Goal
{

	private $goals;
	public $numGoals;

	public function getGoals($index){ return $this->goals[$index];}
	public function setGoals($pos, $value){ $this->goals[$pos] = $value;}


	public function __construct(){}
}


 ?>