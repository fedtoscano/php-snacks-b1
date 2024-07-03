<?php
/**
 * Class of a basic user
 */
class User{
    private $name;
    private $email;


    //! CONSTRUCTOR
    protected function __construct($name, $email){
        $this->name = $name;
        $this->email = $email;
    }
    

    //! GETTER
    /**
     * Get the name of the user
     *
     * @return name of the user as a String
     */
    protected function getName(){
        return $this->name;
    }

    /**
     * Get the email of the user
     *
     * @return email of the user as a String
     */
    protected function getEmail(){
        return $this->email;
    }

    //! SETTER
    /**
     * Sets the name of the user
     *
     * @param [String] $name the new name of the user
     * @return void
     */
    protected function setName($name){
        $this->name = $name;
    }

    /**
     * Sets the email of the user
     *
     * @param [String] $email the new email of the user
     * @return void
     */
    protected function setEmail($email){
        $this->email = $email;
    }
}