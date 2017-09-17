<?php
 require_once 'assets/php/scripts/Connection.php';
 require_once 'assets/php/scripts/Speaker.php';
 require_once 'assets/php/scripts/Schedule.php';
 require_once 'assets/php/scripts/Goal.php';

    // $string = "nvml";
    // $connect = new Connection::withDBname($string);

class Event
{

    //$connect = new Connection::withDBname("nvml");

    //Event members
    var $connect                    = "";// new Connection();
    private  $eventID            = "";
    private  $eventTitle         = "";
    private  $eventLocation      = "";
    private  $eventDateTime;
    private  $eventSubTitle;
    private  $eventAbout         ="";
    private  $eventGoal;
    private  $eventGoalDescription = "";
    private  $speaker; //Has-a(s) speacker
    private  $schedule; //HAS-a(s) schedule

    /*
    * GETTERS
    */
    public function getEventId(){return $this->eventID;}
    public function getEventTitle(){return $this->eventTitle;}
    public function getEventLocation(){return $this->eventLocation;}
    public function getEventDateTime()
    {
        return date("d m, Y",strtotime($this->eventDateTime));
        //return $this->eventDateTime;
    }
    public function getEventSubTitle(){return $this->eventSubTitle;}
    public function getEventAbout(){return $this->eventAbout;}
    public function getEventGoalDescription(){return $this->eventGoalDescription;}
    public function getSpeakerInstance(){return $this->speaker;}
    public function getScheduleInstance(){return $this->schedule;}
    public function getGoalInstance(){return $this->eventGoal;}

    /*
    * SETTERS
    */
    public function setEventId($eventID){ $this->eventID = $eventID;}
    public function setEventTitle($eventTitle){ $this->eventTitle = $eventTitle;}
    public function setEventLocation($eventLocation){ $this->eventLocation = $eventLocation;}
    public function setEventDateTime($eventDateTime){ $this->eventDateTime = $eventDateTime;}
    public function setEventSubTitle($eventSubTitle){ $this->eventSubTitle = $eventSubTitle;}
    public function setEventAbout($eventAbout){ $this->eventAbout = $eventAbout;}
    public function setEventGoalDescription($eventGoalDescription){ $this->eventGoalDescription = $eventGoalDescription;}

    public function getSchedules($eventID)
    {
        //$sql = "SELECT `time_from`, `time_to`, `activity`, `description`, `speaker_id` FROM `event_schedule` WHERE event_id = '$eventID';";

        $sql = "SELECT event_schedule.time_from, event_schedule.time_to, event_schedule.activity, event_schedule.description, speaker.first_name, speaker.last_name FROM event_schedule INNER JOIN speaker on event_schedule.speaker_id = speaker.speaker_id WHERE event_schedule.event_id = '$eventID';";

        $results = $this->connect->conn->query($sql);
        if($results->num_rows > 0)
        {
            $pos = 0;
            $this->getScheduleInstance()->numSchedules = $results->num_rows;
            while($row = $results->fetch_assoc())
            {
                $this->getScheduleInstance()->setFrom($pos,$row['time_from']);
                $this->getScheduleInstance()->setTo($pos,$row['time_to']);
                $this->getScheduleInstance()->setActivity($pos,$row['activity']);
                $this->getScheduleInstance()->setDescription($pos,$row['description']);
                $this->getScheduleInstance()->setSpeakerFirstName($pos,$row['first_name']);
                $this->getScheduleInstance()->setSpeakerLastName($pos,$row['last_name']);
                $pos++;
            }

        }else
        {
            echo "NO SCHEDULES FOUND <br>";
        }
        //close connection
    }

    public function getGoals($eventID)
    {
        $sql = "SELECT `goal` FROM `event_goal` WHERE `event_id` = '$eventID';";

        $results = $this->connect->conn->query($sql);
        if($results->num_rows > 0)
        {
            $pos = 0;
            $this->getGoalInstance()->numGoals = $results->num_rows;
            while($row = $results->fetch_assoc())
            {
                $this->getGoalInstance()->setGoals($pos,$row['goal']);
                $pos++;
            }
        }
    }

    //var $connect  = new Connection("nvml");
    function __construct ()
    {
        $this->connect = new Connection("nvml");
        $this->speaker = new Speaker();
        $this->schedule = new Schedule();
        $this->eventGoal = new Goal();
    }
    //REMINDER: Fix this block above
    //Use class name as constructor name

    function Select($query,$eventID)
    {
        $sql = "SELECT $query FROM `event` WHERE event_id = '$eventID' ;";
        //$sql = "SELECT event_id, event_title, event_location FROM `events`";
        $result = $this->connect->conn->query($sql);

        if(!$result){
            echo "Error!!!";
        }
        // $data = array();
        // while($data =  $result->mysql_fetch_object($result))
        // {
        //     $data[] = $data;
        // }
        
        if($result->num_rows  > 0)
        {
            while($row = $result->fetch_assoc())
            {
                //Consider changing these into arrays

                $this->eventID = $row['event_id'];
                $this->eventTitle = $row['event_title'];
                $this->eventSubTitle = $row['event_sub_title'];
                $this->eventDateTime = $row['event_date'];
                $this->eventLocation = $row['event_location'];
                $this->eventGoalDescription = $row['event_goal_description'];
                $this->eventAbout = $row['event_about'];
                //echo "ID: ".$row["event_id"]." Title: ".$row["event_title"]." ".$row["event_location"]."";
            }
            //GET SPEAKERS
            $this->speaker->getSpeakers($this->eventID);
            

            echo $result->num_rows . " results <br>";
            

            //GET Schedules
            $this->getSchedules($this->eventID);

            //GET GOALS
            $this->getGoals($this->eventID);

        }
        else
        {
            echo "0 results <br>";
        }

        //close connection
    }

 }

?>