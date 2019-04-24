<?php
class CountriesActionController {

    //attributes
   
    protected $_CountriesManager;
    protected $_validation;
   
    //constructor
    public function __construct(){
        
        $this->_CountriesManager = new CountriesManager();
        $this->_validation = new Validator();
    	
    }

    /**
     * @param array 
     * 
     * get html code of all countries speack same languagues after validate input  
     */
    public function loadCountries($post)
    {
        if($this->_validation->inputValSameLanuguages($post))
        {
            $this->_CountriesManager->loadCountries($post);
        }
           
    }
    /**
     * @param array 
     * 
     * get html code of the two countries speacks same language or not  
     */
    public function twoCountries($post)
    {
        
        if($this->_validation->inputValTwoCountries($post))
        {
            $this->_CountriesManager->twoCountries($post); 
        }
           
    }

}
    