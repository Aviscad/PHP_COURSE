<?php 
/* --- Object Oriented Programming -- */

/*
  From PHP5 onwards you can write PHP in either a procedural or object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/

class User{

    // Properties are just variables that belong to a class.
    // Access Modifiers: public, private, protected
    // public - can be accessed from anywhere
    // private - can only be accessed from inside the class
    // protected - can only be accessed from inside the class and by inheriting classes
    public $name;
    public $email;
    public $password;

    //A constructor is a method that runs when an object is created
    function __construct($name, $email, $password){
        $this -> name = $name;
        $this -> email = $email;
        $this -> password = $password;
    }

    //Methos is a function that belongs to a class
    function set_name($name){
        $this -> name = $name;

    }

    function get_name(){
        return $this -> name;
    }
}


//Instantiate a user object

$user1 = new User("Manuel","mail@mail.com","1234");
$user2 = new User("Antonio","mail@mail.com","1234");

// echo $user1-> email;
// echo $user2-> name;

// $user1-> set_name("Manuel");
// $user2-> set_name("Antonio");
// echo $user1 -> get_name();
// echo "<br>";
// echo $user2 -> get_name();
// //$user1->name = "Manuel";

// echo "<br><br> ";
// var_dump($user1);
// echo "<br>";
// var_dump($user2);


//Inheritence
class Employee extends User{
    
    public $title;

    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this-> title = $title;
    }

    public function get_title(){
        return $this-> title;
    }
}

$employee1 = new Employee("Sarah","mail@mail.com","1234","Manager");
echo $employee1->title;