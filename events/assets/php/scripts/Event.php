<?php
 require_once 'assets/php/scripts/Connection.php';

    // $string = "nvml";
    // $connect = new Connection::withDBname($string);

class Event
{

    //$connect = new Connection::withDBname("nvml");

//     //Event members
     var $connect            = "";// new Connection();
     var $eventID            = "";
     var $eventTitle         = "";
     var $eventLocation      = "";
     //var $connect  = new Connection("nvml");
    function __construct ()
    {
        $this->connect = new Connection("nvml");
    }
    //REMINDER: Fix this block above

    function Select($query,$id)
    {
        $sql = "SELECT $query FROM `events` WHERE event_id = '".$id."'";
        //$sql = "SELECT event_id, event_title, event_location FROM `events`";
        $result = $this->connect->conn->query($sql);

        if(!$result){
            echo "FUCK THIS SHIT!!!";
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