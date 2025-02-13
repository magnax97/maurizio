<?php
session_start();
if (!isset($_SESSION['logged_in']) || $_SESSION['logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

// Array per mappare i valori delle scommesse
$bet_mapping = [
    'sposa_cade' => 'La sposa cade , caduta completa, non vale l\'inciampo (1,50:1)',
    'scarpe_sposa' => 'Le scarpe della sposa si rompono (1,50:1)',
    'pantaloni_sposo' => 'I pantaloni dello sposo si rompono (1,20:1)',
    'alcol' => 'Prima della torta lo sposo dimostra di reggere l\'alcol peggio della sposa (2:1)',
    'invitato_dorme' => 'Un invitato si addormenta al tavolino (non valgono i bambini) (2:1)',
    'invitata_cade' => 'Un\' invitata cade nel tentativo di prendere (o non prendere) il bouquet (1,2:1)',
    'invitato_cade' => 'Un invitato cade nel tentativo di non far prendere il bouquet alla propria partner (2:1)'
];

function countTotal($data) {
    $adults = 0;
    $children = 0;
    foreach ($data as $row) {
        $adults += intval($row[1]);
        $children += intval($row[2]);
    }
    return ['adults' => $adults, 'children' => $children];
}

$data = [];
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
        $data[] = $row;
    }
    fclose($handle);
}

$totals = countTotal($data);
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Panel - Maurizio & Elena</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-image: url('assets/images/img1.jpeg');
            background-size: auto 100vh;
            background-position: center;
            background-color: #000;
            background-attachment: fixed;
            background-repeat: repeat-x;
            min-height: 100vh;
            margin: 0;
            padding: 20px;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2);
            z-index: 1;
        }

        .container {
            position: relative;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.6);
            border-radius: 10px;
            padding: 2rem;
            margin-top: 2rem;
            color: white;
            max-width: 1200px;
        }

        h1 {
            text-align: center;
            margin-bottom: 2rem;
            font-size: clamp(1.8rem, 4vw, 2.5rem);
        }

        .stats {
            background-color: rgba(255, 255, 255, 0.1);
            padding: 1.5rem;
            border-radius: 8px;
            margin-bottom: 2rem;
        }

        .stats h2 {
            font-size: clamp(1.4rem, 3vw, 1.8rem);
            margin-bottom: 1rem;
        }

        .stats p {
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            margin-bottom: 0.5rem;
        }

        .table-responsive {
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 8px;
            padding: 1rem;
        }

        .table {
            color: white;
            margin-bottom: 0;
        }

        .table th {
            font-size: clamp(0.9rem, 2vw, 1.1rem);
            font-weight: 600;
        }

        .table td {
            font-size: clamp(0.8rem, 1.8vw, 1rem);
            vertical-align: middle;
        }

        .btn-logout {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
        }

        .btn-logout:hover {
            background-color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            color: black;
        }

        .action-buttons {
            margin-bottom: 1rem;
        }

        .btn-export, .btn-print {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            margin-right: 0.5rem;
        }

        .btn-export:hover, .btn-print:hover {
            background-color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            color: black;
        }

        @media (max-width: 768px) {
            .container {
                padding: 1rem;
                margin-top: 1rem;
            }

            .stats, .table-responsive {
                padding: 1rem;
            }

            .table {
                font-size: 0.9rem;
            }
        }

        @media print {
            body {
                background: none;
                padding: 0;
            }

            .overlay, .btn-logout, .action-buttons {
                display: none;
            }

            .container {
                background: none;
                color: black;
                margin: 0;
                padding: 0;
                max-width: 100%;
            }

            .stats, .table-responsive {
                background: none;
            }

            .table {
                color: black;
            }

            .table th, .table td {
                border-color: #000;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            body {
                background-size: cover;
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>
    
    <div class="container">
        <div class="d-flex justify-content-end mb-3">
            <a href="logout.php" class="btn btn-logout">Logout</a>
        </div>

        <h1>Pannello di Amministrazione</h1>

        <div class="action-buttons">
            <button class="btn btn-print" onclick="window.print()">
                <i class="fas fa-print"></i> Stampa
            </button>
            <a href="export.php" class="btn btn-export">
                <i class="fas fa-file-export"></i> Esporta CSV
            </a>
        </div>

        <div class="stats">
            <h2>Statistiche Generali</h2>
            <p>Numero totale di conferme: <?php echo count($data); ?></p>
            <p>Totale adulti: <?php echo $totals['adults']; ?></p>
            <p>Totale bambini: <?php echo $totals['children']; ?></p>
            <p>Totale invitati: <?php echo $totals['adults'] + $totals['children']; ?></p>
        </div>

        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Nome e Cognome</th>
                        <th>Adulti</th>
                        <th>Bambini</th>
                        <th>Esigenze Alimentari</th>
                        <th>Scommessa</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                    <tr>
                        <td><?php echo htmlspecialchars($row[0]); ?></td>
                        <td><?php echo htmlspecialchars($row[1]); ?></td>
                        <td><?php echo htmlspecialchars($row[2]); ?></td>
                        <td><?php echo htmlspecialchars($row[3]); ?></td>
                        <td><?php echo isset($bet_mapping[$row[4]]) ? htmlspecialchars($bet_mapping[$row[4]]) : htmlspecialchars($row[4]); ?></td>
                    </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>