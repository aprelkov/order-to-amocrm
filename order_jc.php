<?php
error_reporting(-1);
$root=__DIR__.DIRECTORY_SEPARATOR;
require $root.'prepare.php'; # There will be carried out preparatory acts, declarations of functions, etc.
require $root.'auth.php'; # There will be user authentication
require $root.'account_current.php'; # Here we will receive information about account
require $root.'fields_info.php'; # Obtain information about the fields
require $root.'contacts_list.php'; # Obtain contact information
require $root.'lead_add.php'; # There will be adding a Laed
require $root.'contact_add.php'; # There will be adding a Contact lenked with the Lead
?>
