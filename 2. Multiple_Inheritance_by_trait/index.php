<?php 

require "bank.php";
require "account.php";

class Bar extends Account{
    use Bank;
}

$object = new Bar;
$object->abc();
echo "<br>";
$object->efg();
echo "<br>";
$object->account();

?>