<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Presenza</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            position: relative; /* Necessario per posizionare il div sopra lo sfondo */
            background-image: url('assets/images/2.jfif'); /* Sfondo statico */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        /* Div per oscurare lo sfondo */
        .overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.5); /* Oscuramento semitrasparente */
            z-index: 1; /* Si trova sopra lo sfondo */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile per l'overlay */
        }

        .form-container {
            position: relative; /* Posizionato sopra l'overlay */
            z-index: 2; /* Si trova sopra l'overlay */
            background-color: transparent; /* Card completamente trasparente */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile per la card */
            padding: 2rem;
            border-radius: 10px;
            max-width: 400px;
            color: black; /* Testi neri */
            margin: auto; /* Centrato verticalmente e orizzontalmente */
            top: 50%;
            transform: translateY(-50%);
        }

        .form-container h2 {
            color: black; /* Titolo nero */
            margin-top: 0;
        }

        .form-container .form-label {
            color: black; /* Etichette degli input nere */
        }

        .form-container input.form-control,
        .form-container select.form-control {
            background-color: transparent; /* Input trasparenti */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile per gli input */
            color: black; /* Testo degli input nero */
        }

        .form-container input.form-control:focus,
        .form-container select.form-control:focus {
            border-color: #0d6efd; /* Colore del bordo al focus */
            box-shadow: 0 0 5px rgba(13, 110, 253, 0.5); /* Effetto shadow al focus */
        }

        .form-container .btn-primary {
            background-color: transparent; /* Bottone trasparente */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile per il bottone */
            color: black; /* Testo nero */
        }

        .form-container .btn-primary:hover {
            background-color: white; /* Bottone bianco al hover */
            color: black; /* Testo nero al hover */
        }

        .form-container .alert-success {
            background-color: rgba(0, 128, 0, 0.2); /* Messaggio di conferma semitrasparente */
            border: 1px solid green; /* Bordo verde per il messaggio */
            color: black; /* Testo nero */
        }
    </style>
</head>
<body>
    <!-- Overlay per oscurare lo sfondo -->
    <div class="overlay"></div>

    <!-- Contenitore principale -->
    <div class="form-container">
        <h2>Conferma la tua Presenza</h2>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            $name = htmlspecialchars($_POST['name']);
            $attending = $_POST['attending'];
            $guests = intval($_POST['guests']);
            $children = isset($_POST['children']) ? intval($_POST['children']) : 0;

            // Salva i dati nel file CSV
            $data = [$name, $attending, $guests, $children];
            $file = fopen("data.csv", "a");
            fputcsv($file, $data);
            fclose($file);

            echo "<div class='alert alert-success'>Grazie per la tua conferma!</div>";
            echo '<meta http-equiv="refresh" content="3;url=index.php">';
        }
        ?>

        <form method="POST" action="">
            <div class="mb-3">
                <label for="name" class="form-label">Nome e Cognome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label class="form-label">Parteciperai?</label><br>
                <div class="form-check form-check-inline">
                    <input type="radio" id="yes" name="attending" value="Si" class="form-check-input" required>
                    <label for="yes" class="form-check-label">Sì</label>
                </div>
                <div class="form-check form-check-inline">
                    <input type="radio" id="no" name="attending" value="No" class="form-check-input">
                    <label for="no" class="form-check-label">No</label>
                </div>
            </div>
            <div class="mb-3">
                <label for="guests" class="form-label">Numero di Persone che ti accompagnano:</label>
                <input type="number" id="guests" name="guests" class="form-control" min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="children" class="form-label">Numero di Bambini:</label>
                <input type="number" id="children" name="children" class="form-control" min="0" value="0">
            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
    </div>
</body>
</html>