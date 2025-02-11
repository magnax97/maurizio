<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Regolamento Scommesse - Maurizio & Elena</title>
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
        }

        .content-container {
            position: relative;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2.5rem;
            border-radius: 10px;
            max-width: 800px;
            color: white;
            margin: 2rem;
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        h1 {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            margin-bottom: 1.5rem;
            text-align: center;
        }

        .rules {
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
            line-height: 1.6;
        }

        .rules h2 {
            font-size: clamp(1.4rem, 3vw, 1.8rem);
            margin: 1.5rem 0 1rem;
        }

        .rules ul {
            margin-bottom: 1.5rem;
        }

        .rules li {
            margin-bottom: 0.8rem;
        }

        .btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
        }

        .btn:hover,
        .btn:active,
        .btn:focus {
            background-color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            color: black;
            text-shadow: none;
        }

        @media (max-width: 576px) {
            .content-container {
                margin: 1rem;
                padding: 1.5rem;
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>

    <div class="content-container">
        <h1>Regolamento Scommesse</h1>
        
        <div class="rules">
            <h2>Come Funziona</h2>
            <ul>
                <li>Ogni invitato può effettuare una sola scommessa</li>
                <li>La scommessa deve essere piazzata al momento della conferma di presenza</li>
                <li>Non è possibile modificare la propria scommessa una volta inviata</li>
            </ul>

            <h2>Validazione delle Scommesse</h2>
            <ul>
                <li>Gli eventi saranno validati dagli sposi</li>
                <li>Per essere valido, l'evento deve accadere durante la cerimonia o il ricevimento</li>
                <li>In caso di contestazioni, il giudizio degli sposi è insindacabile</li>
            </ul>

            <h2>Premio</h2>
            <ul>
                <li>Chi indovina riceverà un premio speciale dagli sposi</li>
                <li>In caso di più vincitori, il premio verrà diviso equamente</li>
            </ul>
        </div>

        <div class="text-center mt-4">
            <a href="confirm.php" class="btn btn-lg">Torna al Form</a>
        </div>
    </div>
</body>
</html> 