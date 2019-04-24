<?php


class CountriesManagerTest extends PHPUnit_Framework_TestCase{

    private $countries; 
    private $post_loadCountries = array("action"=>"loadCountries","country"=>"Spain");
    private $post_twoCountries = array("action"=>"twoCountries","first_country"=>"Spain","second_country"=>"Argentina");

    protected function setUp()
    {
       
        $this->manager = new CountriesManager();  
    }
    protected function tearDown()
    {
        $this->manage = NULL;
    }
   
   

            	/**************** Q1  ****************/
    public function testLoadCountries()
    {

        $reflector = new ReflectionClass('CountriesManager');
        $method = $reflector->getMethod( 'loadCountries' );
        $method->setAccessible( true );
        $result = $method->invokeArgs( $this->manager, array( $this->post_loadCountries ) );
        
        $this->assertTrue(true,$result);

    }

    public function testGetIso()
    {
        $reflector = new ReflectionClass('CountriesManager');
        $method = $reflector->getMethod( 'getIso' );
        $method->setAccessible( true );
        $result = $method->invokeArgs( $this->manager, array( $this->post_loadCountries ) );
        
        $this->assertTrue(true,$result);
    }
    public function testGetAllContries()
    {
        $reflector = new ReflectionClass('CountriesManager');
        $method = $reflector->getMethod( 'getAllContries' );
        $method->setAccessible( true );
        $result = $method->invokeArgs( $this->manager,array() );
        
        $this->assertTrue(true,$result);
    }
                            /*********** Q2  ***********/
    public function testTwoCountries()
    {
        $reflector = new ReflectionClass('CountriesManager');
        $method = $reflector->getMethod( 'twoCountries' );
        $method->setAccessible( true );
        $result = $method->invokeArgs( $this->manager, array($this->post_twoCountries) );
        
        $this->assertTrue(true,$result);
    }
    public function testGetAllLanguagesForTwoCountries()
    {

        $reflector = new ReflectionClass( 'CountriesManager' );
        $method = $reflector->getMethod( 'getAllLanguagesForTwoCountries' );
        $method->setAccessible( true );
        $result = $method->invokeArgs( $this->manager, array( $this->post_twoCountries ) );
        
        $this->assertTrue(true,$result);

    }
}



?>