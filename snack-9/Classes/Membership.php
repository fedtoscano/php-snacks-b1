<?php

class Membership {
    private $year;
    private $status;

    /**
     * Creates a new istance of a Membership class
     *
     * @param [Int] $year the year since the beginning of the Premium Membership
     * @param [type] $status the Status of the membership
     */
    public function __construct($year, $status)
    {
        $this->year = $year;
        $this->status = $status;

    }

    protected function setStatus(){
        if($this->year > 2005){
            $this-> status = 'gold';
        } elseif ($this->year > 2003){
            $this-> status = 'platinum';
        }
    }
}