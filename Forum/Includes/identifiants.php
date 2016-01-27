<?php
try
{
$db = new PDO('mysql:host=localhost;dbname=learnall', 'root', '');
}
catch (Exception $e)
{
        die('Erreur : ' . $e->getMessage());
}
?>
