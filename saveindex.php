<!doctype html>
<html lang="en">
 
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Banque du peuple</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="src/public/template/vendor/bootstrap/css/bootstrap.min.css">
    <link href="src/public/template/vendor/fonts/circular-std/style.css" rel="stylesheet">
    <link rel="stylesheet" href="src/public/template/libs/css/style.css">
    <link rel="stylesheet" href="src/public/template/vendor/fonts/fontawesome/css/fontawesome-all.css">
    <style>
    html,
    body {
        height: 100%;
    }

    body {
        display: -ms-flexbox;
        display: flex;
        -ms-flex-align: center;
        align-items: center;
        padding-top: 40px;
        padding-bottom: 40px;
    }
    </style>
</head>

<body>
    <!-- ============================================================== -->
    <!-- login page  -->
    <!-- ============================================================== -->
    <div class="splash-container">
        <div class="card ">
            <div class="card-header text-center"><a class="navbar-brand" href="">Banque du peuple</a><span class="splash-description">Entrez votre login et mot de passe.</span></div>
            <div class="card-body">
                <!-- <form action="boot.php" method="post" > -->
                <form action="Admin/connect" method="post" >
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="login" name="login" type="text" placeholder="Login" autocomplete="off" required>
                    </div>
                    <div class="form-group">
                        <input class="form-control form-control-lg" id="mdp" name="mdp" type="password" placeholder="Mot de passe" required>
                    </div>
                    <div class="form-group">
                        <label class="custom-control custom-checkbox">
                            <input class="custom-control-input" type="checkbox"><span class="custom-control-label">Se souvenir de moi</span>
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary btn-lg btn-block">Se connecter</button>
                </form>
            </div>
            
            <!-- <div class="card-footer bg-white p-0  ">
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Create An Account</a></div>
                <div class="card-footer-item card-footer-item-bordered">
                    <a href="#" class="footer-link">Forgot Password</a>
                </div>
            </div> -->
        </div>
    </div>
  
    <!-- ============================================================== -->
    <!-- end login page  -->
    <!-- ============================================================== -->
    <!-- Optional JavaScript -->
    <script src="src/public/template/vendor/jquery/jquery-3.3.1.min.js"></script>
    <script src="src/public/template/vendor/bootstrap/js/bootstrap.bundle.js"></script>
</body>
 
</html>