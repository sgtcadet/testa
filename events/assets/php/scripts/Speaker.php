<?php
require_once 'Connection.php';
	class Speaker
	{

		//Image
		private  $image;
		//Name
		private  $firstName;
		private  $lastName;

		//Occupation
		private  $occupation;
		private  $company;
	 	public $numSpeakers;

		//$connect = new Connection("nvml");
		function __construct ()
	    {
	        $this->connect = new Connection("nvml");
	    }


		//Social icons
		//private $socialMedaia[];


		/*GETTERS & SETTERS*/
		public function getFirstName($firstName_pos){ return $this->firstName[$firstName_pos];}
		public function getLastName($lastName_pos){ return $this->lastName[$lastName_pos];}
		public function getOccupation($occupation){ return $this->occupation[$occupation];}
		public function getImage($img){return $this->image[$image];}
		public function getCompany($company){return $this->company[$company];}

		/*
		public function setFirstName($fname){ $this->firstName = $fname;}
		public function setLastName($lname){ $this->lastName = $lname;}
		public function setOccupation($occupation){ $this->occupation = $occupation;}
		*/
		//public function setImage($image){ }

		public function getSpeakers($eventID)
		{
			$sql = "SELECT `first_name` , `last_name` , `occupation` , `company` FROM `speaker` WHERE `event_id` = '$eventID';";

			$result = $this->connect->conn->query($sql);

			$testCount = 0;
			$this->numSpeakers = $result->num_rows;
			if($result->num_rows > 0){
				while($row = $result->fetch_assoc())
				{
					//echo $row['first_name'] ." ". $row['last_name'] ." ". $row['occupation'] ." ". $row['job_position'] ."<br>" ;
					$this->firstName[$testCount] = $row['first_name'];
					$this->lastName[$testCount] = $row['last_name'];
					$this->occupation[$testCount] = $row['occupation'];
					$this->company[$testCount] = $row['company'];
					$testCount++;
				}

				//TEST BLOCK
				/*
				for($var = 0; $var < $result->num_rows; $var++)
				{
					echo "HEY !! ->" . $firstName[$var] ." ". $lastName[$var] ." ". $occupation[$var] ." ". $position[$var] ."<br>";
				}
				*/
			}
			else
			{
				echo "No Speaker!!";
			}


		}

	}

	//$test = new Speaker();
	//$test->getSpeakers("CT217");
?>