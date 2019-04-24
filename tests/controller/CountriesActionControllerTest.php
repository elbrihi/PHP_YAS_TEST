<?php

include($_SERVER['PWD'].'/controller/CountriesActionController.php');
include($_SERVER['PWD'].'/app/Api.php');
include($_SERVER['PWD'].'/model/CountriesManager.php');
include($_SERVER['PWD'].'/app/Validator.php');


class CountriesActionControllerTest extends PHPUnit_Framework_TestCase{

    private $countries; 
    private $post_loadCountries = array("action"=>"loadCountries","country"=>"Spain");
    private $post_twoCountries = array("action"=>"twoCountries","first_country"=>"Spain","second_country"=>"Argentina");

    protected function setUp()
    {
       
        $this->countires = new CountriesActionController();  
    }
    protected function tearDown()
    {
        $this->countires = NULL;
    }
    public function testLoadCountries()
    {
        $this->assertTrue(true,$this->countires->loadCountries($this->post_loadCountries));
    }
    public function testTwoCountries()
    {
        $this->assertTrue(true,$this->countires->twoCountries($this->post_twoCountries));
    }
}



?>