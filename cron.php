<?php

//read database values from configuration file
require_once("../../config.php");
require_once($CFG->dirroot.'/user/profile/lib.php');
require_once($CFG->dirroot.'/tag/lib.php');

// test connection
if (!mysql_connect($CFG->dbhost, $CFG->dbuser, $CFG->dbpass)) {
die ("Connection to server failed.");
}

// connect to database
if (!mysql_select_db($CFG->dbname)) {
die ("Database not found.");
}

//make sure all users are receiving emails to their address they used to sign on with
//$result="UPDATE ".$CFG->prefix."user SET emailstop=0 WHERE emailstop=1";
//$result = mysql_query($result);

//make sure no email adresses are shown to everyone
$result="UPDATE ".$CFG->prefix."user SET maildisplay=0"; //  WHERE maildisplay=1 Hide all email
$result = mysql_query($result);

echo "Successfully updated users.";

//close database connection
mysql_close();

