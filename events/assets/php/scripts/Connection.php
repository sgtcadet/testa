<?php

//Create connection class
class Connection 
{
    var $serverName     =   "localhost";
    var $userName       =   "root";
    var $password       =   "";

    var $conn           =   "";
    var $dbname         =   "nvml";    

    // default constructor
    function __construct() {
        $argv = func_get_args();
        switch( func_num_args() ) {
            case 1:
                self::__construct1();
                break;
            case 2:
                self::__construct2( $argv[0], $argv[1], $argv[2], $argv[3]  );
                break;
            case 3:
                self::__construct3( $argv[0]);
         }
    }
    function __construct1()
    {
        //create connection
        $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->dbname);
        echo "Construct 1!!";
        if($this->conn->connect_error)
        {
            die("Connection Failed: ". $this->conn->connect_error);
        }
        echo "Connection Successful";

        //Note on the object-oriented example above: $connect_error was broken until PHP 5.2.9 and 5.3.0.
        //If you need to ensure compatibility with PHP versions prior to 5.2.9 and 5.3.0, use the following 
        //code instead:

        // Check connection
        // if (mysqli_connect_error()) {
        //     die("Database connection failed: " . mysqli_connect_error());
        // }
    }

    //primary constructor
    function __construct2($serverName,$userName,$password,$dbname)
    {
        $this->serverName = $serverName;
        $this->username  = $userName;
        $this->password = $password;
        $this->dbname = $dbname;
        echo "Construct 2!!";
        //create connection
        $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->dbname);

        if($this->conn->connect_error)
        {
            die("Connection Failed: ". $this->conn->connect_error);
        }
        echo "Connection Successful";
    }

    //secondary constructor
    //primary constructor
    public static function __construct3($dbname)
    {
        $this->dbname = $dbname;
        echo "DB name set: ".$this->dbname."";
        $this->conn = new mysqli($this->serverName,$this->userName,$this->password,$this->dbname);

        if($this->conn->connect_error)
        {
            die("Connection Failed: ". $this->conn->connect_error);
        }
        echo "Connection Successful";
        // $instance = new self();
        // $instance->dbname = $dbname;
        // //create connection
        // $instance->conn = new mysqli($instance->serverName,$instance->userName,$instance->password,$instance->dbname);

        // if($instance->conn->connect_error)
        // {
        //     die("Connection Failed: ". $instance->conn->connect_error);
        // }
        // echo "Connection Successful";

        // return $instance;
    }

}

?>