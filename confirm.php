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
            background-image: url('assets/images/img1.jpeg');
            background-size: auto 100vh;
            background-position: center;
            background-color: #000;
            background-attachment: fixed;
            background-repeat: repeat-x;
            display: flex;
            justify-content: center;
            align-items: center;
            font-family: 'Playfair Display', serif;
            overflow: hidden;
        }

        @media (max-aspect-ratio: 16/9) {
            body {
                background-size: cover;
            }
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
        .form-container .btn-success,
        .form-container .btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .form-container .btn-primary:hover,
        .form-container .btn-success:hover,
        .form-container .btn:hover,
        .form-container .btn-primary:active,
        .form-container .btn-success:active,
        .form-container .btn:active,
        .form-container .btn-primary:focus,
        .form-container .btn-success:focus,
        .form-container .btn:focus {
            background-color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            color: black;
            text-shadow: none;
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

            .form-container h2 {
                font-size: 1.5rem;
                margin-bottom: 1rem;
            }

            .form-container .form-label {
                font-size: 0.9rem;
            }

            .form-container input.form-control,
            .form-container select.form-control {
                font-size: 0.9rem;
                padding: 0.4rem 0.8rem;
                height: auto;
            }

            .form-container .btn {
                font-size: 0.9rem;
                padding: 0.4rem 0.8rem;
            }

            .form-container .alert-success {
                font-size: 0.9rem;
                padding: 0.4rem;
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

        /* Stili per select e option */
        .form-container select.form-control option {
            background-color: rgba(0, 0, 0, 0.8);
            color: white;
        }

        /* Forza la direzione del menu a tendina verso il basso */
        .form-container select.form-control {
            direction: ltr !important;
            position: relative;
        }

        /* Assicura che il menu si apra verso il basso */
        .form-container select.form-control option {
            position: relative;
            top: 100%;
        }

        /* Stile per l'opzione selezionata */
        .form-container select.form-control option:checked {
            background-color: rgba(0, 0, 0, 0.9);
        }

        /* Stile per hover sulle option */
        .form-container select.form-control option:hover {
            background-color: rgba(0, 0, 0, 0.7);
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
            $guests = intval($_POST['guests']);
            $children = isset($_POST['children']) ? intval($_POST['children']) : 0;
            $dietary = htmlspecialchars($_POST['dietary']);
            $bet = htmlspecialchars($_POST['bet']);

            $data = [$name, $guests, $children, $dietary, $bet];
            $file = fopen("data.csv", "a");
            fputcsv($file, $data);
            fclose($file);

            echo "<div class='alert alert-success'>Grazie per la tua conferma!</div>";
            echo '<meta http-equiv="refresh" content="3;url=index.php">';
        }
        ?>

        <form method="POST" action="" id="confirmForm">
            <div class="mb-3">
                <label for="name" class="form-label">Nome e Cognome:</label>
                <input type="text" id="name" name="name" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="guests" class="form-label">Numero di Adulti:</label>
                <input type="number" id="guests" name="guests" class="form-control" min="0" value="0" required>
            </div>
            <div class="mb-3">
                <label for="children" class="form-label">Numero di Bambini:</label>
                <input type="number" id="children" name="children" class="form-control" min="0" value="0" required>
            </div>
            <div class="mb-3">
                <label for="dietary" class="form-label">Esigenze Alimentari:</label>
                <input type="text" id="dietary" name="dietary" class="form-control">
            </div>
            <div class="mb-3">
                <label for="bet" class="form-label">Piazza la tua scommessa per il giorno del matrimonio:</label>
                <select id="bet" name="bet" class="form-control" required>
                    <option value="">Seleziona una scommessa...</option>
                    <option value="sposa_cade">La sposa cade (1,50:1)</option>
                    <option value="scarpe_sposa">Le scarpe della sposa si rompono (1,50:1)</option>
                    <option value="pantaloni_sposo">I pantaloni dello sposo si rompono (1,20:1)</option>
                    <option value="alcol">Prima della torta lo sposo dimostra di reggere l'alcol peggio della sposa (2:1)</option>
                    <option value="invitato_dorme">Un invitato si addormenta al tavolino (non valgono i bambini) (2:1)</option>
                    <option value="invitata_cade">Un' invitata cade nel tentativo di prendere (o non prendere) il bouquet (2:1)</option>
                    <option value="invitato_cade">Un invitato cade nel tentativo di non far prendere il bouquet alla propria partner (2:1)</option>
                </select>
                <a href="regolamento.php" class="text-white mt-2 d-block" style="font-size: 0.9rem; text-decoration: underline;" onclick="saveFormData()">Regolamento</a>
            </div>
            <button type="submit" class="btn btn-primary w-100">Invia</button>
        </form>
        <a href="index.php" class="btn btn-success w-100 mt-3">Torna alla Homepage</a>
    </div>

    <script>
        // Funzione per salvare i dati del form
        function saveFormData() {
            const formData = {
                name: document.getElementById('name').value,
                guests: document.getElementById('guests').value,
                children: document.getElementById('children').value,
                dietary: document.getElementById('dietary').value,
                bet: document.getElementById('bet').value
            };
            localStorage.setItem('formData', JSON.stringify(formData));
        }

        // Funzione per ripristinare i dati del form
        function restoreFormData() {
            const savedData = localStorage.getItem('formData');
            if (savedData) {
                const formData = JSON.parse(savedData);
                document.getElementById('name').value = formData.name;
                document.getElementById('guests').value = formData.guests;
                document.getElementById('children').value = formData.children;
                document.getElementById('dietary').value = formData.dietary;
                document.getElementById('bet').value = formData.bet;
                // Puliamo il localStorage dopo aver ripristinato i dati
                localStorage.removeItem('formData');
            }
        }

        // Ripristina i dati quando la pagina viene caricata
        document.addEventListener('DOMContentLoaded', restoreFormData);
    </script>
</body>
</html>