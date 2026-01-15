<!DOCTYPE html>
<html lang="fr">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Connexion | Administration</title>

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <style>
        /* ... CSS ... */


        /* Surcharge pour centrer verticalement car ton body n'est pas flex par défaut */
        .login-wrapper {
            min-height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
            /* On s'assure que le background correspond à ton body */
            background-color: #f8f9fa;
        }


        .login-header {
            background: linear-gradient(180deg, #1e3a8a 0%, #1e40af 100%);
            color: white;
            border-bottom: 1px solid rgba(255, 255, 255, 0.1);
        }


        .btn-theme {
            background-color: #1e40af;
            color: white;
            border: none;
            transition: all 0.3s ease;
        }

        .btn-theme:hover {
            background-color: #1e3a8a;
            color: white;
            transform: translateY(-2px);
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }
    </style>
</head>

<body>

    <div class="login-wrapper p-3">

        <div class="card shadow-lg" style="width: 100%; max-width: 400px; border: none;">

            <div class="card-header login-header text-center py-4">
                <h4 class="mb-0"><i class="fas fa-user-circle me-2"></i>Connexion</h4>
                <p class="small mb-0 text-white-50 mt-2">Accédez à votre espace sécurisé</p>
            </div>

            <div class="card-body p-4">
                <form action="" method="POST">

                    <div class="mb-3">
                        <label for="email" class="form-label fw-bold text-secondary small">ADRESSE EMAIL</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-secondary">
                                <i class="fas fa-envelope"></i>
                            </span>
                            <input type="email" class="form-control bg-light border-start-0 ps-0" id="email"
                                name="email" placeholder="nom@exemple.com" required>
                        </div>
                    </div>

                    <div class="mb-4">
                        <label for="password" class="form-label fw-bold text-secondary small">MOT DE PASSE</label>
                        <div class="input-group">
                            <span class="input-group-text bg-light border-end-0 text-secondary">
                                <i class="fas fa-lock"></i>
                            </span>
                            <input type="password" class="form-control bg-light border-start-0 ps-0" id="password"
                                name="password" placeholder="••••••••" required>
                        </div>
                    </div>

                    <div class="d-flex justify-content-between align-items-center mb-4 small">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" id="remember">
                            <label class="form-check-label text-secondary" for="remember">
                                Se souvenir
                            </label>
                        </div>
                        <a href="#" class="text-decoration-none" style="color: #1e40af;">Mot de passe oublié ?</a>
                    </div>

                    <button type="submit" class="btn btn-theme w-100 py-2 fw-bold">
                        SE CONNECTER
                    </button>
                    <span class="text-danger"><?php isset($error) ? $error : '' ?></span>
                </form>
            </div>

            <div class="card-footer text-center py-3 bg-light border-0 small">
                <span class="text-muted">Pas encore de compte ?</span>
                <a href="#" class="fw-bold text-decoration-none ms-1" style="color: #1e40af;">Créer un compte</a>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>