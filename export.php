<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Imposta gli header per il download del file CSV
header('Content-Type: text/csv');
header('Content-Disposition: attachment; filename="presenze_matrimonio_' . date('Y-m-d') . '.csv"');

// Apri il file di output
$output = fopen('php://output', 'w');

// Scrivi l'intestazione UTF-8 BOM per Excel
fprintf($output, chr(0xEF).chr(0xBB).chr(0xBF));

// Scrivi le intestazioni
fputcsv($output, ['Nome e Cognome', 'Adulti', 'Bambini', 'Esigenze Alimentari', 'Scommessa']);

// Leggi e scrivi i dati
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
        fputcsv($output, $row);
    }
    fclose($handle);
}

fclose($output);
exit;
?> 