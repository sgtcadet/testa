<?php
require_once '../Connection.php';


$connect = new Connection("nvml");


date_default_timezone_set("America/Jamaica");

class Stream
{
	private  $event_id;
	private  $event_title;
	private  $event_date;
	private  $user_id;
	private  $user_email;
	private  $user_f_name;
	private  $user_l_name;

	public function __construct()
	{
		//$this->event_id = NULL;
	}
	public function getEvent_id(){ return $this->event_id;}
	public function getEvent_title(){ return $this->event_title;}
	public function getEvent_date(){ return $this->event_date;}
	public function getUser_id(){ return $this->user_id;}
	public function getUser_email(){ return $this->user_email;}
	public function getUser_f_name(){ return $this->user_f_name;}
	public function getUser_l_name(){ return $this->user_l_name;}
	
	public function setEvent_id($event_id){ $this->event_id = $event_id;}
	public function setEvent_title($event_title){  $this->event_title = $event_title;}
	public function setEvent_date($event_date){ $this->event_date = $event_date;}
	public function setUser_id($user_id){ $this->user_id = $user_id;}
	public function setUser_email($user_email){ $this->user_email = $user_email;}
	public function setUser_f_name($user_f_name){ $this->user_f_name = $user_f_name;}
	public function setUser_l_name($User_l_name){ $this->user_l_name = $user_l_name;}
}

//$current_date = date("Y-m-d h:i:s");
/*
$eventID;
$eventTitle;
$eventDate;
$userID;
*/
/*
	SELECT event.event_id, event.event_title, event.event_date , registered_event.user_id FROM event INNER JOIN registered_event ON event.event_id = registered_event.event_id WHERE event.event_id IN (SELECT registered_event.event_id FROM registered_event)
*/

//SELECT `event_id`,`event_title`,`event_date` FROM `event` WHERE `event_id` IN (SELECT `event_id` FROM `registered_event` WHERE `event_id` = 'CT217')
//$sql = "SELECT `event_id` , `user_id` FROM `registered_event`";//SELECT `event_id`,`event_title`,`event_date` FROM event
//SELECT `event_id`,`event_title`,`event_date` FROM `event` WHERE `event_id` IN (SELECT `event_id` FROM `registered_event`)

$sql = "SELECT event.event_id, event.event_title, event.event_date , registered_event.user_id FROM event 
		INNER JOIN registered_event ON event.event_id = registered_event.event_id 
		WHERE event.event_id IN (SELECT registered_event.event_id FROM registered_event)";

$result = $connect->conn->query($sql);
echo "<h3>Welcome Bitz</h3>";
if($result->num_rows > 0)
{
	//store data of each row
	$counter = 0;
	echo "EVETNTS FOUND!!!" . "<br>";
	$stream[] = new Stream;
	
	while($row = $result->fetch_assoc())
	{
		echo "_____________________________________" . "<br>";
		echo $stream[$counter]->setEvent_id($row['event_id']); //= $row['event_id'] . "<br>";
		
		/*
		echo $eventTitle[$counter] = $row['event_title'] . "<br>";
		echo $eventDate[$counter] = $row['event_date'] . "<br>";
		echo $userID[$counter] = $row['user_id'] . "<br>";
		*/

		$counter++;
	}
	/*
	while($row = $result->fetch_assoc())
	{
		echo "_____________________________________" . "<br>";
		echo $eventID[$counter] = $row['event_id'] . "<br>";
		echo $eventTitle[$counter] = $row['event_title'] . "<br>";
		echo $eventDate[$counter] = $row['event_date'] . "<br>";
		echo $userID[$counter] = $row['user_id'] . "<br>";


		$counter++;
	}
	*/
	$size = $result->num_rows;

	$count = 0;
	/*
	*/
	$user_f_name;
	$user_l_name;
	$user_email;
	$reg_event;
	
	/*
	do
	{
		$current_date = date("Y-m-d h:i:s");
		//$count = 0;
		for($i = 0; $i < $size; $i++)
		{
			if($current_date == date("Y-m-d h:i:s",strtotime($eventDate[$count])))
			{
				//get user email send mail
				$sqlString = "SELECT user.first_name, user.last_name, user.email, registered_event.event_id
								FROM user INNER JOIN registered_event ON user.user_id = registered_event.user_id 
								WHERE registered_event.user_id = $userID[$count];";

				$resultString = $connect->conn->query($sqlString);

				while($row = $resultString->fetch_assoc())
				{
					echo $user_f_name = $row['first_name'] . "<br>";
					echo $user_l_name = $row['last_name'] . "<br>";
					echo $user_email = $row['email'] . "<br>";
					echo $reg_event = $row['event_id'] . "<br>";


					
				} 
			}
		}
	}while($current_date != date("Y-m-d h:i:s",strtotime($eventDate[$count])));
	*/
	/*
	SELECT registered_event.user_id, user.first_name, user.last_name, user.email,registered_event.event_id FROM user INNER JOIN registered_event ON user.user_id = registered_event.user_id WHERE registered_event.user_id = 1
	*/
	
}

/*
	SELECT registered_event.user_id, user.first_name, user.last_name, user.email,registered_event.event_id FROM user INNER JOIN registered_event ON user.user_id = registered_event.user_id WHERE registered_event.user_id = 1
*/


/*
$test_date = strtotime("2017-08-27 12:38:50");

echo "Today is: ". $current_date = date("Y-m-d h:i:s"). "<br/>";
echo "Test date is: ". date("Y-m-d h:i:s",$test_date) . "<br/>";




do 
{
  	echo $current_date = date("Y-m-d h:i:s");
   	if($current_date == date("Y-m-d h:i:s",$test_date))
   	{
      	echo "Date reach nigga";
   	}
}while($current_date != date("Y-m-d h:i:s",$test_date));
*/

?>