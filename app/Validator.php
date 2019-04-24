<?php

class Validator
{
    public function __construct()
    {
        
    }
    /**
     * 
     * 
     * 
     * 
     * 
     */
    public function inputValSameLanuguages($post)
    {
        if(strlen($post['country']) < 2)
        {
            echo 'field valus must take more than one caractaire';

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
     * 
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
            echo 'the first contry must take more than s characteres';
        }
        
        
    }
}


?>