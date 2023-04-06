<?php

/*
we can write PHP in an object oriented way. OOP consists of classes that can hold "properties" and "methods". Objects can be created from classes.
*/
class User{
    //properties are attributes that belong to a class
    /*
    Access modifiers : public, private, protected
    public - accessed frrom anywhere
    private -   accessed only from inside the class
    protected - accessed from inside the class and inheriting classes
    */ 
    public $name;
    public $email;
    public $password;
    // A constructor is a functin that runs automatically when an object is created 
    public function __construct($name, $email, $password){
        $this -> name = $name;
        $this -> email = $email;
        $this -> password = $password;
    }

    //Methods are functions that belongs to a class
    function set_name($name){
        $this ->name = $name;
    }
    function get_name(){
        return $this -> name;
    }

}

//instatiate a user object
    $usr1 = new User('Joe', 'test@test.com', '1234');
    //$usr1 -> set_name('Brad');
    //$usr1 -> get_name();



//Inheritence
class Employee extends User{
    private $title;
    public function __construct($name, $email, $password, $title){
        parent::__construct($name, $email, $password);
        $this->title = $title;
    }

    public function get_title(){
        return $this->title;
    }
}

$employee1 = new Employee('Sarraa', '55@gmail.com', '4343', 'Manager');

