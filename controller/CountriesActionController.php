<?php
class CountriesActionController {

    //attributes
    protected $_actionMessage;
    protected $_typeMessage;
    protected $_source;
    protected $_CountriesManager;
    protected $_validation;
   
    //constructor
    public function __construct(){
        
        $this->_CountriesManager = new CountriesManager();
        $this->_validation = new Validator();
    	
    }


    public function loadCountries($post)
    {
        if($this->_validation->inputValSameLanuguages($post))
        {
            $this->_CountriesManager->loadCountries($post);
        }
           
    }
    public function twoCountries($post)
    {
        
        if($this->_validation->inputValTwoCountries($post))
        {
            $this->_CountriesManager->twoCountries($post); 
        }
           
    }

    public function add($a, $b)
    {
        return $a +  $b;
    }
  
    
}
    