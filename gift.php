<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Istruzioni per il Regalo</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh;
            position: relative; /* Necessario per posizionare il div sopra lo sfondo */
            background-image: url('assets/images/3.jfif'); /* Sfondo statico */
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex; /* Usiamo Flexbox per centrare il contenuto */
            justify-content: center; /* Centratura orizzontale */
            align-items: center; /* Centratura verticale */
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

        .content-container {
            position: relative; /* Posizionato sopra l'overlay */
            z-index: 2; /* Si trova sopra l'overlay */
            background-color: transparent; /* Contenitore trasparente */
            padding: 2rem;
            border-radius: 10px;
            max-width: 400px;
            color: white; /* Testi bianchi */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile per il contenitore */
            text-align: center; /* Allinea il testo al centro */
        }

        .content-container h2 {
            font-size: 1.75rem; /* Dimensione del titolo */
            margin-bottom: 1rem; /* Spazio sotto il titolo */
        }

        .content-container p {
            font-size: 1rem; /* Dimensione del paragrafo */
            margin-bottom: 1rem; /* Spazio sotto il paragrafo */
        }

        /* Stile per il bottone */
        .content-container a.btn {
            background-color: transparent; /* Bottone trasparente */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile */
            color: white; /* Testo dei bottoni bianco */
            transition: all 0.3s ease; /* Effetto smooth al hover */
            width: 100%; /* Bottoni a larghezza piena */
        }

        /* Effetto al passaggio del mouse */
        .content-container a.btn:hover {
            background-color: white; /* Bottone bianco al hover */
            color: black; /* Testo nero al hover */
        }
    </style>
</head>
<body>
    <!-- Overlay per oscurare lo sfondo -->
    <div class="overlay"></div>

    <!-- Contenitore principale -->
    <div class="content-container">
        <h2>Istruzioni per il Regalo</h2>
        <p>Grazie per voler contribuire al nostro evento!</p>
        <p><strong>IBAN:</strong> IT1234567890123456789012345</p>
        <p>Utilizza il tuo nome come riferimento.</p>
        <a href="index.php" class="btn btn-success mt-3">Torna alla Homepage</a>
    </div>
</body>
</html>