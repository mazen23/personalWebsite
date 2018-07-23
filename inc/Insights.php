<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of Insights
 *
 * @author Mazen
 */
class Insights {
    //put your code here
    private $con;
    public $numberOfVisits;
    public function __construct()
    {
        $this->numberOfVisits=0;
        $conn = new login;
        $this->con=$conn->connect();
    }
    public function selectLastId()
    {
        $sql='SELECT P_id from Persons order by P_id desc limit 1';
        $result = mysqli_query($this->con,$sql);
        if (mysqli_num_rows($result) > 0) {
            $row = mysqli_fetch_assoc($result);
            $this->numberOfVisits= $row['P_id'];
        }
//        mysqli_close($this->con);
        return $this->numberOfVisits;
    }
    public function lastTenRecords()
    {
        $sql='SELECT * from Persons order by P_id desc limit 10';

        if ($result = mysqli_query($this->con,$sql))
        {
            // Fetch one and one
            while($row=mysqli_fetch_row($result))
            {
                echo "<pre>";
                print_r($row);
                echo "</pre>";
            }
            // Free result set
            mysqli_free_result($result);
        }

    }
    public function sendEmail($name , $email , $subject, $contact_message)
    {
             $sql = "INSERT INTO messages (username,email,subject,message)
            VALUES ('" . $name . "','" . $email . "','" . $subject . "','" . $contact_message . "')";

            if ($this->con->query($sql) === TRUE) {
//            echo "record created successfully";                            
                return true;
            } else {
                  $sent=false;
                echo "Error: " . $sql . "<br>" . $this->con->error;
            }
//            $this->con->close();

    }

}
