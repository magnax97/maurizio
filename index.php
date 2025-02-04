<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conferma Presenza - Evento</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
        body {
            margin: 0;
            height: 100vh; /* Altezza completa della viewport */
            position: relative; /* Necessario per posizionare il div sopra lo sfondo */
            background-image: url('assets/images/1.jfif'); /* Sfondo statico */
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

        .content {
            position: relative; /* Posizionato sopra l'overlay */
            z-index: 2; /* Si trova sopra l'overlay */
            text-align: center;
            color: white; /* Testi bianchi */
            max-width: 400px; /* Larghezza massima del contenitore */
            padding: 2rem; /* Spazio interno */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile */
            border-radius: 10px; /* bordi arrotondati */
            background-color: transparent; /* Contenitore trasparente */
        }

        .content h1 {
            font-size: 2.5rem; /* Dimensione del titolo */
            margin-bottom: 1rem; /* Spazio sotto il titolo */
        }

        .content p {
            font-size: 1.2rem; /* Dimensione del paragrafo */
            margin-bottom: 2rem; /* Spazio sotto il paragrafo */
        }

        /* Stile per i bottoni */
        .content a.btn {
            background-color: transparent; /* Bottone trasparente */
            border: 1px solid rgba(255, 255, 255, 0.2); /* Bordo sottile */
            color: white; /* Testo dei bottoni bianco */
            transition: all 0.3s ease; /* Effetto smooth al hover */
            width: 100%; /* Bottoni a larghezza piena */
        }

        /* Effetto al passaggio del mouse */
        .content a.btn:hover {
            background-color: white; /* Bottone bianco al hover */
            color: black; /* Testo nero al hover */
        }
    </style>
</head>
<body>
    <!-- Overlay per oscurare lo sfondo -->
    <div class="overlay"></div>

    <!-- Contenitore principale -->
    <div class="content">
        <h1>Evento Speciale</h1>
        <p>Data: 15 Luglio 2023 | Luogo: Villa Paradiso</p>
        <a href="confirm.php" class="btn btn-primary btn-lg">Conferma Presenza</a>
        <a href="gift.php" class="btn btn-success btn-lg">Istruzioni per il Regalo</a>
    </div>
</body>
</html>