<?php
	class Schedule 
	{

		private var $from;
		private var $to;
		private var $activity;
		private var $speaker;




		/*GETTERS & SETTERS*/
		public function getFrom() { return $this->from;}
		public function getTo() { return $this->to;}
		public function getActivity() { return $this->activity;}
		public function getSpeaker() { return $this->speaker;}

		public function setFrom($from) { $this->from = $from;}
		public function setTo($to) { $this->to = $to;}
		public function setActivity($activity) {$this->activity = activity;}
		public function setSpeaker($speaker) { $this->speaker = $speaker;}
	}
?>