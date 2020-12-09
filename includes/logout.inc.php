<?php
//here we want to stop the session

//we have to have a session before stpping it 
session_start();

//here we stop the session
session_unset();

//here we delete the session
session_destroy();

//return user to the index page
header("Location: ../index.php");

