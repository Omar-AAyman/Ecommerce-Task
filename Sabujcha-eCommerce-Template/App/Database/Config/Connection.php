<?php

namespace App\Database\Config;
use mysqli;

class Connection
{
    protected $DBhostName = 'localhost';
    protected $DBusername = 'root';
    protected $DBpassword = '';
    protected $DBdatabase = 'nti_ecommerce';
    protected $DBport = '3306';


    public function __construct()
    {
        $con = new mysqli($this->DBhostName, $this->DBusername, $this->DBpassword, $this->DBdatabase, $this->DBport);

        // // Connection checker
        // if ($con->connect_error) {
        //     die("Connection failed: " . $con->connect_error);
        // }
        // echo "Connected successfully";
    }
}
// new Connection;
