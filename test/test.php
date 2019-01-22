<?php
include '../setup.php';
include MODEl.'/Personne.php';


use \dao\PersonDao;



    $testDao = new PersonDao();
  $result = $testDao->getPersons();
  var_dump($result);