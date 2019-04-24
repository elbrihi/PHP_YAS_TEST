<?php

class ApiTest extends PHPUnit_Framework_TestCase{

    protected $newAnonymousClassFromApi;
    //private $countries; 
    protected $apiAll = 'https://restcountries.eu/rest/v2/all';

    private $post_loadCountries = array("action"=>"loadCountries","country"=>"Spain");

    protected function setUp()
    {
        $this->newAnonymousClassFromApi = new class extends Api {

            protected function getAllContries()
            {
                return 1;
            }
            protected function getContriesByName()
            {
                return 1;
            }
            

        }; 
    }
    protected function tearDown()
    {
        $this->countires = NULL;
    }
    public function testGetAllCountriesAbsruct()
    {
        $this->assertTrue(true,$this->newAnonymousClassFromApi->getAllCountriesAbsruct());

    }

    public function testGetContriesByNameAbtsruct()
    {
        $this->assertTrue(true,$this->newAnonymousClassFromApi->getContriesByNameAbtsruct($this->post_loadCountries));

    }

    public function testGetApi()
    {
        $this->assertTrue(true,$this->newAnonymousClassFromApi->getApi($this->apiAll));

    }

   
   
}



?>