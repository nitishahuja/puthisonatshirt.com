<?php 
// Turn off all error reporting
error_reporting(0);

// Report simple running errors
error_reporting(E_ERROR | E_WARNING | E_PARSE);

// Reporting E_NOTICE can be good too (to report uninitialized
// variables or catch variable name misspellings ...)
error_reporting(E_ERROR | E_WARNING | E_PARSE | E_NOTICE);

// Report all errors except E_NOTICE
error_reporting(E_ALL & ~E_NOTICE);

// Report all PHP errors
error_reporting(E_ALL);

// Report all PHP errors
error_reporting(-1);

// Same as error_reporting(E_ALL);
ini_set('error_reporting', E_ALL);
ob_start();
include "header.php"; ?>
      <!--Carousel-->
           <?php include"crousel.php"; ?>
      <!--Cards-->
           <?php include "cards.php"; ?>
      <!--Bestseller-->
           <?php include "bestseller.php" ?>
      <!--!Bestseller-->
      <!--Latest-->
           <?php include "latest.php" ?>
      <!--Latest-->
     <!-- Products -->
     <?php include "all_products.php"; ?>
     <!-- !Products -->
      <!-- fanlove -->
           <?php include "fan_love.php" ?>
      <!-- !fanlove -->
           <?php include "footnote.php" ?>
