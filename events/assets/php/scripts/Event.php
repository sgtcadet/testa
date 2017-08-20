<?php
 require_once 'assets/php/scripts/Connection.php';
 require_once 'assets/php/scripts/Speaker.php';

    // $string = "nvml";
    // $connect = new Connection::withDBname($string);

class Event
{

    //$connect = new Connection::withDBname("nvml");

    //Event members
    var $connect                    = "";// new Connection();
    private var $eventID            = "";
    private var $eventTitle         = "";
    private var $eventLocation      = "";
    private var $eventDateTime;
    private var $eventSubTitle;
    private var $eventAbout;
    private var $eventGoal;
    private var $eventGoalDescription;
    private Speaker $speaker = new Speaker;



    //var $connect  = new Connection("nvml");
    function __construct ()
    {
        $this->connect = new Connection("nvml");
    }
    //REMINDER: Fix this block above
    //Use constructor name

    function Select($query,$id)
    {
        $sql = "SELECT $query FROM `events` WHERE event_id = '".$id."'";
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
                $this->eventLocation = $row['event_location'];
                //echo "ID: ".$row["event_id"]." Title: ".$row["event_title"]." ".$row["event_location"]."";
            }
        }
        else
        {
            echo "0 results";
        }

        
    }

 }

?>