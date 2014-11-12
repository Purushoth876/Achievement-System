<?php

abstract class AbstractFactory {

    abstract function getStudentsRecord();

    abstract function getFacultyRecord();
}

class Factory extends AbstractFactory { 

    function __construct() {
        $name = "purushoth";
    }

    public function getStudentsRecord() {
        return new Student;
    }

    public function getFacultyRecord() {
        return new Faculty;
    }

}

abstract class Users {
    abstract function authUsers($regno);
    abstract function school($empid);
}

class Student extends Users {

    var $sql;
    var $result;
    var $dataArray;
    var $i=0;
    function __construct() {
        $this->dbcon = new mysqli("localhost", "root", "", "vit");
        $this->dataArray = array();
    }

    public function authUsers($regno) {
         $this->sql = "Select * from users where RegNo = '$regno'";
        $this->result = $this->dbcon->query($this->sql);
        while ($data = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[$this->i] = $data['Name'];
            $this->i++;
        }
        return $data;
    }

    public function school($regno) {
        $this->sql = "Select * from users where RegNo = '$regno'";
        $this->result = $this->dbcon->query($this->sql);
        while ($data = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[$this->i] = $data['School'];
            $this->i++;
        }
        return $data;
    }

}

class Faculty extends Users {

    var $sql;
    var $result;
    var $dataArray;
    var $i=0;
    function __construct() {
        $this->dbcon = new mysqli("localhost", "root", "", "vit");
        $this->dataArray = array();
    }

    public function authUsers($empid) {
        $this->sql = "Select * from faculty where EmpID = '$empid'";
        $this->result = $this->dbcon->query($this->sql);
        while ($data = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[$this->i] = $data['Name'];
            $this->i++;
        }
        return $data;
    }

    public function school($empid) {
        $this->sql = "Select * from faculty where EmpID = '$empid'";
        $this->result = $this->dbcon->query($this->sql);
        while ($data = $this->result->fetch_array(MYSQLI_ASSOC)) {
            $dataArray[$this->i] = $data['School'];
            $this->i++;
        }
        return $data;
    }

}

?>