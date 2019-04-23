<?php

echo '<pre>';
include($_SERVER['CONTEXT_DOCUMENT_ROOT'].'/'.$_SERVER['REQUEST_URI'].'/app/classLoad.php');

session_start();


header('Location:view/index.php'); 
