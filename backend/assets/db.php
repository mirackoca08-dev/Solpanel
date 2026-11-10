<?php
$hostname_forumtest = "localhost";
$database_forumtest = "solpanel";
$username_forumtest = "solpanel";
$password_forumtest = "solpanel";


try {
  $solpanel = new PDO("mysql:host=$hostname_forumtest;dbname=$database_forumtest", $username_forumtest, $password_forumtest);
  // set the PDO error mode to exception
  $solpanel->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  echo "Connected successfully"; // denna rad kan tas bort om allt fungerar
} catch(PDOException $e) {
  echo "Connection failed: " . $e->getMessage();
}