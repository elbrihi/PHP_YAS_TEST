<?php


require('../app/classLoad.php');
session_start();
    
    
    $CountriesActionController = new CountriesActionController('Countries');
  
?>
<!DOCTYPE html>
<!--[if IE 8]> <html lang="en" class="ie8"> <![endif]-->
<!--[if IE 9]> <html lang="en" class="ie9"> <![endif]-->
<!--[if !IE]><!--> <html lang="en"> <!--<![endif]-->
    <head>
        <?php include('../include/head.php') ?>
    </head>
    <span id="alert_action"></span>

        <div class="row">  
            <div class="input-daterange">
                <div class="col-md-8">
                    <input type="text" name="country" id="country"  class="form-control" />
                </div>     
                </div>
                <div class="col-md-4">
                <input type="button" name="search" id="country_language" value="search" class="btn btn-info" />
            </div>
            
        </div>
        <div class="row">
            <div class="input-daterange">
                <div class="col-md-8">
                   <div class="loadCountries"></div>
                </div>
            </div>
        </div>
        <div class="row">  
            <div class="input-daterange">
                <div class="col-md-4">
                    <input type="text" name="country" id="first_country"  class="form-control" />
                </div>

                <div class="col-md-4">
                    <input type="text" name="country" id="second_country"  class="form-control" />
                </div>     
  
                <div class="col-md-4">
                    <input type="button" name="search" id="same_language" value="search" class="btn btn-info" />
                </div>
            </div>
            <div class="same_language"></div>
        </div>
        <div class="row">
            <div class="input-daterange">
                <div class="col-md-8">
                   <div class="twoCountries"></div>
                </div>
            </div>
        </div>
        
        <script>
        $(document).ready(function(){

        $('#country_language').click(function(){
            load_data();
        });
        
        function load_data()  
           {  
                var action = "loadCountries";  
                var country = $('#country').val();
                
                $.ajax({  
                     url:"../app/Dispatcher.php",  
                     method:"POST",  
                     data:{action:action,country:country},  
                     success:function(data)  
                     {  
                        console.log(data);  
                        $('.loadCountries').html(data); 
                     }  
                });  
           }

           
        $('#same_language').click(function(){
            load_data_twoCountries();
        });
        
        function load_data_twoCountries()  
           {  
                var action = "twoCountries";  
                var first_country = $('#first_country').val();
                var second_country = $('#second_country').val();
                $.ajax({  
                     url:"../app/Dispatcher.php",  
                     method:"POST",  
                     data:{action:action,first_country:first_country, second_country:second_country},  
                     success:function(data)  
                     {  
                        $('.twoCountries').html(data);    
                     }  
                });  
           }

        });
        </script>
</html>

