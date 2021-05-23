<?php 
// Data sources

require_once __DIR__ . '/../partials/database.php';

// Content type json file
header("Content-type: application/json");

// Converire data in json e stampa
echo json_encode($database);