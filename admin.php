<?php
session_start();
if (!isset($_SESSION['admin_logged_in']) || $_SESSION['admin_logged_in'] !== true) {
    header("Location: login.php");
    exit;
}

$data = [];
if (($handle = fopen("data.csv", "r")) !== FALSE) {
    while (($row = fgetcsv($handle)) !== FALSE) {
        $data[] = $row;
    }
    fclose($handle);
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pannello di Amministrazione</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            background-color: #f8f9fa;
            margin: 0;
            font-family: Arial, sans-serif;
        }
        .container {
            margin-top: 2rem;
        }
        .logout-btn {
            margin-top: 1rem;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2 class="mb-4">Pannello di Amministrazione</h2>

        <!-- Tabella Responsiva -->
        <div class="table-responsive">
            <table class="table table-bordered table-striped">
                <thead class="table-dark">
                    <tr>
                        <th>Nome</th>
                        <th>Partecipa?</th>
                        <th>Persone Accomodate</th>
                        <th>Numero di Bambini</th>
                    </tr>
                </thead>
                <tbody>
                    <?php foreach ($data as $row): ?>
                        <tr>
                            <td><?php echo htmlspecialchars($row[0] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($row[1] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($row[2] ?? ''); ?></td>
                            <td><?php echo htmlspecialchars($row[3] ?? ''); ?></td>
                        </tr>
                    <?php endforeach; ?>
                </tbody>
            </table>
        </div>

        <!-- Pulsante Logout -->
        <a href="logout.php" class="btn btn-danger logout-btn">Logout</a>
    </div>
</body>
</html>