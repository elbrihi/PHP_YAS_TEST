<?php

include('classLoad.php');

$action = htmlentities($_POST['action']);
$countries = new CountriesActionController();
$countries->$action($_POST);

