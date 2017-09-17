<?php
	class Schedule 
	{

		private $from;
		private $to;
		private $activity;
		private $speakerFirstName;
		private $speakerLastName;
		private $description;
		public $numSchedules;


		public function __construct()
		{

		}
		/*GETTERS & SETTERS*/
		public function getFrom($index) { return $this->from[$index];}
		public function getTo($index) { return $this->to[$index];}
		public function getActivity($index) { return $this->activity[$index];}
		public function getSpeaker($index) { return $this->speaker[$index];}
		public function getDescription($index){return $this->description[$index];}
		public function getSpeakerFirstName($index){ return $this->speakerFirstName[$index];}
		public function getSpeakerLastName($index){ return $this->speakerLastName[$index];}
		public function getSpeakerName($index){ return getSpeakerFirstName($index) . " " . getSpeakerLastName($index);}


		public function setFrom($pos,$value) { $this->from[$pos] = $value;}
		public function setTo($pos,$value) { $this->to[$pos] = $value;}
		public function setActivity($pos,$value) {$this->activity[$pos] = $value;}
		public function setSpeaker($pos,$value) { $this->speaker[$pos] = $value;}
		public function setDescription($pos,$value){$this->description[$pos] = $value;}
		public function setSpeakerFirstName($pos,$value){$this->speakerFirstName[$pos] = $value;}
		public function setSpeakerLastName($pos,$value){$this->speakerLastName[$pos]= $value;}
	}
?>