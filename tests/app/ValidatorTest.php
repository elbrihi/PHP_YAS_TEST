<?php



class ValidatorTest extends PHPUnit_Framework_TestCase{

    private $validation ;
    //private $countries; 
    private $post_loadCountries = array("action"=>"loadCountries","country"=>"Spain");
    private $post_twoCountries = array("action"=>"twoCountries","first_country"=>"Spain","second_country"=>"Argentina");

    protected function setUp()
    {
        $this->validation = new Validator();  
    }
    protected function tearDown()
    {
        $this->countires = NULL;
    }
    public function testInputValSameLanuguages()
    {
        $this->assertTrue(true,$this->validation->inputValSameLanuguages($this->post_loadCountries));

    }
    public function testInputValTwoCountries()
    {
        $this->assertTrue(true,$this->validation->inputValTwoCountries($this->post_twoCountries));
    }
    
}



?>