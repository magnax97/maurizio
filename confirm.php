<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maurizio & Elena</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            position: relative;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Playfair Display', serif;
            overflow: hidden;
            background-image: url('assets/images/img1.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-attachment: fixed;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.2);
            z-index: 1;
            pointer-events: none;
        }

        .form-container {
            position: relative;
            z-index: 2;
            background-color: transparent;
            padding: 2.5rem;
            border-radius: 10px;
            max-width: 500px;
            color: white;
            margin: auto;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .form-container h2 {
            color: white;
            margin-bottom: 2rem;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            font-weight: 400;
            text-align: center;
        }

        .form-container .form-label {
            color: white;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
        }

        .form-container input.form-control,
        .form-container select.form-control {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .form-container input.form-control:focus,
        .form-container select.form-control:focus {
            border-color: white;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .form-container .form-check-input {
            background-color: transparent;
            border-color: rgba(255, 255, 255, 0.4);
        }

        .form-container .form-check-input:checked {
            background-color: white;
            border-color: white;
        }

        .form-container .form-check-label {
            color: white;
        }

        .form-container .btn-primary,
        .form-container .btn-success {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .form-container .btn-primary:hover,
        .form-container .btn-success:hover {
            border-color: rgba(255, 255, 255, 0.8);
        }

        .form-container .alert-success {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            text-align: center;
        }

        @media (max-width: 576px) {
            .form-container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }

        /* Placeholder color */
        .form-container input::placeholder {
            color: rgba(255, 255, 255, 0.7);
        }

        /* Number input arrows color */
        .form-container input[type="number"]::-webkit-inner-spin-button {
            filter: invert(1);
        }
    </style>
</head>
<body>
    <!-- Overlay per leggera ombreggiatura -->
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
                <label for="guests" class="form-label">Numero di Adulti:</label>
                <input type="number" id="guests" name="guests" class="form-control" min="0" value="0">
            </div>
            <div class="mb-3">
                <label for="children" class="form-label">Numero di Bambini:</label>
                <input type="number" id="children" name="children" class="form-control" min="0" value="0">
            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
        <a href="index.php" class="btn btn-success w-100 mt-3">Torna alla Homepage</a>
    </div>
</body>
</html>