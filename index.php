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
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&family=Dancing+Script:wght@400;700&display=swap" rel="stylesheet">
    <!-- Aggiungiamo Font Awesome per l'icona -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css">
    <style>
        body {
            margin: 0;
            min-height: 100vh;
            position: relative;
            background-image: url('assets/images/img_principale.jpeg');
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            background-color: #333;
            background-attachment: fixed;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 0;
            font-family: 'Playfair Display', serif;
        }

        .overlay {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-color: rgba(0, 0, 0, 0.4);
            z-index: 1;
        }

        .content {
            position: relative;
            z-index: 2;
            text-align: center;
            color: white;
            width: 100%;
            max-width: 600px;
            padding: 2rem;
            border-radius: 10px;
            background-color: transparent;
            display: flex;
            flex-direction: column;
            justify-content: space-between;
            gap: 2rem;
        }

        .quote {
            font-family: 'Dancing Script', cursive;
            font-size: clamp(2rem, 4.5vw, 3.5rem);
            line-height: 1.8;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            position: relative;
            width: 100%;
            padding: 0 2rem;
            max-width: 800px;
            margin: 0 auto;
            font-weight: 400;
            letter-spacing: 0.5px;
        }

        .event-details {
            position: relative;
            width: 100%;
        }

        .content h1 {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            margin-bottom: 1rem;
            font-weight: 400;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
        }

        .content p {
            font-size: clamp(1.4rem, 3.5vw, 2rem);
            margin-bottom: 2rem;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.5);
            line-height: 1.6;
        }

        .content .event-details p {
            font-size: clamp(1.2rem, 3vw, 1.8rem);
            margin-bottom: 2rem;
        }

        .content a.btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            width: 100%;
            margin-bottom: 1rem;
            font-size: clamp(0.9rem, 2.5vw, 1.1rem);
            text-shadow: 1px 1px 2px rgba(0, 0, 0, 0.5);
        }

        .content a.btn:hover {
            background-color: rgba(255, 255, 255, 0.9);
            color: black;
            text-shadow: none;
        }

        @media (max-width: 576px) {
            body {
                padding: 1rem;
            }
            .content {
                padding: 1rem;
                gap: 1rem;
            }
            .quote {
                font-size: clamp(1.8rem, 5vw, 2.2rem)!important;
                line-height: 1.6;
                padding: 0 1rem;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            body {
                background-size: auto 100vh;
            }
        }

        @media (max-width: 768px) {
            body {
                background-size: cover;
            }
        }

        .location-link {
            color: white;
            text-decoration: none;
            margin-left: 0;
            transition: all 0.3s ease;
            display: inline-flex;
            align-items: center;
            gap: 0.5rem;
        }

        .location-link:hover {
            color: rgba(255, 255, 255, 0.8);
        }

        .location-icon {
            font-size: 1em;
        }
    </style>
</head>
<body>
    <!-- Overlay per oscurare lo sfondo -->
    <div class="overlay"></div>

    <!-- Contenitore principale -->
    <div class="content">
        <p class="quote">~ Stare insieme è giurarsi la cecità del 'sempre'. Sposarsi è promettersi la bellezza del 'nonostante' ~</p>
        <div class="event-details">
            <h1>Matrimonio<br> Maurizio & Elena</h1>
            <p>Data: 12 Aprile 2025 ore 11:00<br>Luogo: 
                <a href="https://maps.app.goo.gl/oDANC13nhqa8tpmR8" target="_blank" class="location-link" title="Apri in Google Maps">
                    Agriturismo Colleoli
                    <i class="fas fa-location-dot location-icon"></i>
                </a>
            </p>
            <a href="confirm.php" class="btn btn-primary btn-lg">Conferma Presenza</a>
            <a href="gift.php" class="btn btn-success btn-lg">Per il Nostro Viaggio</a>
        </div>
    </div>
</body>
</html>