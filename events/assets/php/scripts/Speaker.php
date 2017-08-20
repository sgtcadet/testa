<?php

	class Speaker
	{

		//Image
		private var $image;
		//Name
		private var $firstName;
		private var $lastName;

		//Occupation
		private var $occupation;
		private var $position;


		//Social icons
		private var $socialMedaia[];


		/*GETTERS & SETTERS*/
		public function getFirstName(){ return $this->firstName;}
		public function getLastName(){ return $this->lastName;}
		public function getOccupation(){ return $this->occupation;}
		public function getImage(){return $this->image;}
		public function getPosition(){return $this->position;}

		public function setFirstName($fname){ $this->firstName = $fname;}
		public function setLastName($lname){ $this->lastName = $lname;}
		public function setOccupation($occupation){ $this->occupation = $occupation;}
		//public function setImage($image){ }

	}
?>