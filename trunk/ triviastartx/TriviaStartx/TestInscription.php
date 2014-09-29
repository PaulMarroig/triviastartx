<?php
require_once 'Inscription.php';

$inscription = new Inscription();

echo $inscription->afficher();
$inscription->setPassword("456");
echo $inscription->getPassword();