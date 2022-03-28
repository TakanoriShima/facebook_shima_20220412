<!DOCTYPE html>
<html lang="ja">
    <head>
        <!-- Required meta tags -->
        <meta charset="utf-8">
        <!-- ViewPort Setting -->
        <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <!-- Original CSS -->
        <link rel="stylesheet" href="css/style.css">
        <!-- Favicon -->
        <link rel="icon" href="images/favicon.ico">
        <title>Facebook Clone</title>
        <!-- JavaScript Libraries -->
        <script src="https://code.jquery.com/jquery-3.3.1.min.js"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
        <!-- Original JavaScript -->
        <script src="js/script.js"></script>
    </head>
    <body style="background: url(images/gray.jpg);">
        <div class="container p-2">
            <div class="row">
                <h1 class="col-sm-12 text-center text-primary mt-2">Facebook Clone</h1>
            </div>
            <?php include_once 'views/_flush_view.php'; ?>
            <div class="row mt-4">
                <div class="offset-sm-2 col-sm-8">
                    <img src="images/top_ocean.jpg" alt="Top画像" class="mainVisual"></img>
                </div>
            </div>
            <div class="row mt-5">
                <a href="signup.php" class="offset-2 col-sm-3 btn btn-primary">会員登録</a>
                <a href="login.php" class="offset-2 col-sm-3 btn btn-danger">ログイン</a>
            </div>
        </div>
    </body>
</html>