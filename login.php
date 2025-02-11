<?php
session_start();
if (isset($_SESSION['admin_logged_in']) && $_SESSION['admin_logged_in'] === true) {
    header("Location: admin.php");
    exit;
}

// Gestione del form di login
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST['username'];
    $password = $_POST['password'];
    if ($username === "admin" && $password === "password123") {
        $_SESSION['logged_in'] = true;
        header("Location: admin.php");
        exit;
    } else {
        $error_message = "Credenziali non valide";
    }
}
?>

<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Admin - Maurizio & Elena</title>
    <link rel="icon" type="image/x-icon" href="favicon.png">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha1/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Playfair+Display:ital,wght@0,400;0,700;1,400&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Playfair Display', serif;
            background-image: url('assets/images/img1.jpeg');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            min-height: 100vh;
            margin: 0;
            display: flex;
            align-items: center;
            justify-content: center;
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

        .login-container {
            position: relative;
            z-index: 2;
            background-color: rgba(0, 0, 0, 0.6);
            padding: 2rem;
            border-radius: 10px;
            width: 100%;
            max-width: 400px;
            margin: 1rem;
        }

        h1 {
            color: white;
            text-align: center;
            margin-bottom: 2rem;
            font-size: clamp(1.8rem, 5vw, 2.5rem);
        }

        .form-label {
            color: white;
            font-size: clamp(1.1rem, 2.5vw, 1.3rem);
        }

        .form-control {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .form-control:focus {
            background-color: transparent;
            border-color: white;
            color: white;
            box-shadow: 0 0 5px rgba(255, 255, 255, 0.5);
        }

        .btn-login {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
            transition: all 0.3s ease;
            font-size: clamp(1rem, 2.5vw, 1.2rem);
        }

        .btn-login:hover {
            background-color: rgba(255, 255, 255, 0.9);
            border-color: rgba(255, 255, 255, 0.9);
            color: black;
        }

        .alert {
            background-color: transparent;
            border: 1px solid rgba(255, 255, 255, 0.4);
            color: white;
        }

        @media (max-width: 576px) {
            .login-container {
                padding: 1.5rem;
            }

            .form-label {
                font-size: 0.9rem;
            }

            .form-control {
                font-size: 0.9rem;
            }

            .btn-login {
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="overlay"></div>

    <div class="login-container">
        <h1>Login Admin</h1>
        <?php if (isset($error_message)): ?>
            <div class="alert alert-danger text-center"><?php echo htmlspecialchars($error_message); ?></div>
        <?php endif; ?>
        <form method="POST" action="">
            <div class="mb-3">
                <label for="username" class="form-label">Username:</label>
                <input type="text" id="username" name="username" class="form-control" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label">Password:</label>
                <input type="password" id="password" name="password" class="form-control" required>
            </div>
            <button type="submit" class="btn btn-login w-100">Accedi</button>
        </form>
    </div>
</body>
</html>