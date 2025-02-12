<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Maurizio & Elena</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Swiper CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
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
            background-color: #000;
        }

        .swiper {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            height: 100vh;
            z-index: 0;
        }

        .swiper-slide {
            width: 100%;
            height: 100%;
            display: flex;
            justify-content: center;
            align-items: center;
            background-size: auto 100vh;
            background-position: center;
            background-repeat: repeat-x;
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

        .content-container {
            position: relative;
            z-index: 2;
            background-color: transparent;
            padding: 2.5rem;
            border-radius: 10px;
            max-width: 500px;
            color: white;
            text-align: center;
            margin: 1rem;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .content-container h2 {
            font-size: clamp(1.8rem, 5vw, 2.5rem);
            margin-bottom: 1.5rem;
            font-weight: 400;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
        }

        .content-container p {
            font-size: clamp(1.2rem, 2.5vw, 1.4rem);
            margin-bottom: 1.5rem;
            line-height: 1.6;
            color: white;
            text-shadow: 2px 2px 8px rgba(0, 0, 0, 0.5);
            font-style: italic;
        }

        .content-container p strong {
            font-size: clamp(1.3rem, 2.5vw, 1.5rem);
            display: block;
            margin: 1rem 0;
            color: white;
        }

        .content-container p.iban {
            font-family: Arial, sans-serif;
            letter-spacing: 1px;
            font-style: normal;
        }

        .content-container p.iban strong {
            font-family: 'Playfair Display', serif;
        }

        .content-container a.btn {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
            width: 100%;
        }

        .content-container a.btn:hover {
            color: white;
            border-color: rgba(255, 255, 255, 0.8);
        }

        @media (max-width: 576px) {
            .content-container {
                padding: 1.5rem;
                margin: 1rem;
            }
        }

        @media (max-aspect-ratio: 16/9) {
            .swiper-slide {
                background-size: cover;
                background-repeat: no-repeat;
            }
        }
    </style>
</head>
<body>
    <!-- Slideshow con Swiper -->
    <div class="swiper">
        <div class="swiper-wrapper">
            <?php
            for($i = 2; $i <= 18; $i++) {
                echo "<div class='swiper-slide' style='background-image: url(\"assets/images/img{$i}.jpeg\")'></div>";
            }
            ?>
        </div>
    </div>

    <!-- Overlay per leggera ombreggiatura -->
    <div class="overlay"></div>

    <!-- Contenitore principale -->
    <div class="content-container">
        <p>Non sappiamo ancora dove e quando, ma chi desidera aiutarci nella prossima avventura, può contribuire qui</p>
        <p>Maurizio Chiesa <br>E <br> Elena Ciurli<br></p><p class="iban">IT23R0306971166100000004356</p>
        <!-- <p>Utilizza il tuo nome come riferimento.</p> -->
        <a href="index.php" class="btn btn-success mt-3">Torna alla Homepage</a>
    </div>

    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper', {
                effect: 'fade',
                fadeEffect: {
                    crossFade: true
                },
                autoplay: {
                    delay: 3000,
                    disableOnInteraction: false,
                },
                loop: true,
                speed: 1000,
            });
        });
    </script>
</body>
</html>