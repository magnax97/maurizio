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

        .rules .intro {
            font-size: clamp(1.2rem, 2.5vw, 1.4rem);
            margin-bottom: 2rem;
            font-style: italic;
        }

        .rules h2 {
            font-size: clamp(1.4rem, 3vw, 1.8rem);
            margin: 1.5rem 0 1rem;
            font-weight: normal;
        }

        .rules ul {
            margin-bottom: 1.5rem;
            list-style-type: none;
            padding-left: 0;
        }

        .rules li {
            margin-bottom: 1.2rem;
            position: relative;
            padding-left: 1.5rem;
            line-height: 1.6;
        }

        .rules li:before {
            content: "-";
            position: absolute;
            left: 0;
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
        
        <div class="rules">
            <p class="intro">Un regalo speciale particolare attende il fortunato vincitore della scommessa.</p>

            <h2>Regolamento:</h2>
            <ul>
                <li>Scegli la tua scommessa (una per conferma di presenza) e scopri se l'evento si verificherà</li>
                
                <li>Le quotazioni esprimono solo una stima verosimile della probabilità dell'evento, ma sono indipendenti dal premio, che è unico</li>
                
                <li>In caso si verifichino più eventi, vincerà quello che si verificherà per primo</li>
                
                <li>È vietato favorire il verificarsi di un evento</li>
                
                <li>In caso di più vincitori, il premio sarà assegnato allo scommettitore più anziano</li>
                
                <li>In caso di assenza di vincitori, perché nessun evento si verifica, il premio sarà assegnato come consolazione al partner della fortunata donzella che si aggiudicherà il bouquet. Se il partner non esiste o non è presente, il premio sarà assegnato come consolazione alla coppia che vanta il maggior numero di anni di matrimonio</li>
            </ul>
        </div>

        <div class="text-center mt-4">
            <a href="confirm.php" class="btn btn-lg">Torna al Form</a>
        </div>
    </div>
</body>
</html> 