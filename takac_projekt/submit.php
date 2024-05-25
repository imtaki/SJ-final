<?php
require_once('_inc/classes/Database.php');
require_once('_inc/classes/Contact.php');

$contact = new Contact();
$contact->insert();

header("Location: thank_you_page.php");
exit();
?>
