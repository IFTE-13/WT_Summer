<?php

class databaseConnection{

    function openConnection(){
        $dataBaseHost = 'localhost';
        $dataBaseUser = 'root';
        $dataBasePass = '';
        $dataBase = 'labtask';

        $connection = new mysqli($dataBaseHost, $dataBaseUser, $dataBasePass, $dataBase);

        return $connection;
    }

    // function userLogin($connection, $table, $username, $password){
    //     $result = $connection->query("SELECT * FROM ". $table." WHERE username='". $username."' AND password='". $password."'");
    //     return $result;
    // }

    function userRegistration($connection, $table, $fname, $lname, $age, $designation, $planguage, $email, $password, $picture){
        $sqlQuery = "INSERT INTO $table (fname, lname, age, designation, planguage, email,  password, picture) VALUES ('$fname', '$lname', '$age', '$designation', '$planguage', '$email', '$password', '$picture')";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function showAll($connection){
        $sqlQuery = "Select * from employee";
        $result = $connection->query($sqlQuery);
        return $result;
    }

    function closeConnection($connection)
    {
        $connection -> close();
    }
}
?>