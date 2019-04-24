<?php

class CountriesManager extends Api{

	//attributes
	

	//constructor
    public function __construct(){
				
	}

																/**************** Q1  ****************/
																						 

	/**
	  * @var one parametre the name of the country 
	  *
	  * generate html code for the languges for one country
	  */
		public function loadCountries($post)
		{
			
			$array = $this->getIso($post);
		
			foreach($array as $key=>$arrs)
			{
				
				$a = 'Country language code: '. $key.'   '.$post['country'].'  speaks same language with these countries:';;
				
				for($i = 1; $i < sizeof($arrs); $i++)
				{
					$a.= $arrs[$i].', ' ;
				}
				$b[] = $a;
			}
			for($i = 0 ; $i<sizeof($b); $i++)
			{
				
				echo rtrim($b[$i],", ").'.  <br />';
			}
		}
		/**
	 * @var paramatres  parametre the name of the country 
	 * 
	 *get array takes the iso(code languge) as the key of the contries that speacke this language
	 * 
	 * return array 
	 */
	private function getIso($post):array
	{
		
		$allCountries = $this->getAllContries();
		$searchByCountryNames = $this->getContriesByNameAbtsruct($post);
		
		foreach($searchByCountryNames as $searchByCountryName)
		{
			$langNamesCountries = $searchByCountryName['languages'];
			foreach($langNamesCountries as $langNamesCountrie)
			{
				//echo $langNamesCountrie['iso639_1'];

				foreach($allCountries as $allCountrie)
				{
					$langAllCountries = $allCountrie['languages'];
				
					foreach($langAllCountries as $langAllCountrie)
					{
						//echo $langAllCountrie['iso639_1'];
						if($langNamesCountrie['iso639_1'] == $langAllCountrie['iso639_1'])
						{
							$lang = $langNamesCountrie['iso639_1'];
							$country = $allCountrie['name'];
							//print_r($data);
							//echo $lang.'=>'.$country.'  ';
							$array[$lang][] =	$country;	
						}
					}
				}
				
			}			 
		}

		return $array;
	}


	protected function getAllContries():array
	{
		return $this->getAllCountriesAbsruct();
	}
  
	protected function getContriesByName()
	{
	}

	                                            /*********** Q2  ***********/
	/**
	 * 
	 * 
	 * generate html code for two countries speacks same laugauges
	 */


	public function twoCountries($post)
	{
		
		if (is_null($this->hasCountries($post)))
		{
			echo  $post['first_country'] .' AND '. $post['second_country'].' do not  speack same language'  ;
		}else
		{
			echo $post['first_country'] .' AND '. $post['second_country'].'  speack same language'  ;
		}
		
		
	}
	/**
	 *  @var two paramertes the first country and scond contry
	 * 
	 * get two values one bool(true) value if exist two countries speacks same languages and second null value if not
	 * return bool(true)  if the two countries speacks same lanaguages an noll values if not 
	 */
	private function hasCountries($post)
	{
		$result = $this->getAllLanguagesForTwoCountries($post);

		for($i = 0 ; $i<sizeof($result); $i++)
		{	
			
			for($j= $i+1; $j<sizeof($result); $j++)
			{
				
				if($result[$i] == $result[$j] )
				{				
					$a = 0;	
					$a++;		
					if($a > 0)
					{
						return  (bool) 1;
					}
					else
					{
						return (boolean) 0;
					}
				}
				
			}
		}

	}

  

	/**
	 * 
	 * @var two paramertes the first country and scond contry
	 * 
	 * merge two (iso639_1, name,nativeName ...)_countries array in same array 
	 * return array
	 */
	private function getAllLanguagesForTwoCountries($post):array
	{
			
		$maps_arrays = $this->getAllContries();

		foreach($maps_arrays as $maps_array)
		{
		
			if($post['first_country']==$maps_array['name'])
			{
				$a = $maps_array['languages'];
			}
			if($post['second_country']==$maps_array['name'])
			{
				$b = $maps_array['languages'];
			}
		}
	
		$result = array_merge($a,$b);
		return $result;
	}


	
}
	