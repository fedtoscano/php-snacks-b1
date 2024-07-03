<?php
require_once __DIR__."/User.php";
require_once __DIR__."/../Membership.php";

class PremiumUser extends User{
    private $badgeUrl;
    private $membership;

    protected function getBadgeUrl(){
        return $this->badgeUrl;
    }

    protected function getMembership(){
        return $this->membership;
    }

    //! CONSTRUCTOR
    /**
     * Creates a new instance of the Premium User class
     *
     * @param [String] $name the name of the Premium User
     * @param [String] $email the email of the Premium User
     * @param [String] $badgeUrl the URL of the badge image 
     */
    public function __construct($name, $email, $badgeUrl, Membership $membership)
    {
        parent::__construct($name, $email);
        $this->badgeUrl = $badgeUrl;
        $this->membership = $membership;
    }
}