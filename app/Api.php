 <?php

Abstract class Api
{
    

	protected $apiAll = 'https://restcountries.eu/rest/v2/all';

    private $searchByCountryName = 'https://restcountries.eu/rest/v2/name/{name}';
    
    //abstract protected function getApi();
    abstract protected function getAllContries();
    abstract protected function getContriesByName();
    
    /**
     *  
     * 
     *  translate code json of api of all countries  in array form
     *  @return array 
     */
    public function getAllCountriesAbsruct():array
    {
		return $this->getApi($this->apiAll);
    }

     /**
     * @param array 
     * 
     *  translate code json of api of country name  in array form
     *  @return array 
     */
    public function getContriesByNameAbtsruct($post):array
    {
        (string) $country = $post['country'];
        $searchByCountryName = str_replace('{name}',$country, $this->searchByCountryName);


        return $this->getApi($searchByCountryName);

    }
  
    /**
     * @param array 
     * 
     *  translate code json of api  in array form
     *  return array 
     */
    public function getApi($api)
    {
        
        $allCountryName =  file_get_contents($api);
        $allCountryNames = json_decode($allCountryName, true);
        return $allCountryNames ;
    }
}


?>