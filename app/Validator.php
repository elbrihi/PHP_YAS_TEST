<?php

class Validator
{
    public function __construct()
    {
        
    }
    /**
     * 
     *validate if the field tackes more than 2 characters 
     */
    public function inputValSameLanuguages($post)
    {
        if(strlen($post['country']) < 2)
        {
            echo 'field valus must take more than one charactaire';

        } 
        else
        {
            return 1;
        }
    }
    /**
     * 
     * 
     * 
     *validate if the two fields tackes more than 2 characters  
     */
    public function inputValTwoCountries($post)
    {
        
        if(strlen($post['first_country']) > 2)
        {
            if(strlen($post['second_country']) > 2)
            {
                return 1;
            }
            else
            {
                echo 'the second contry must take more than 2 characteres';
            }
        }
        else
        {
            echo 'the first contry must take more than two characteres';
        }
        
        
    }
}


?>