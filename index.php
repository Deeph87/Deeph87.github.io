<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>jhaudry-maintenance</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/stylesheets/screen.css" media="all">
    <script src="assets/js/jquery-3.1.1.min.js"></script>
</head>
<body>
<section>
    <div class="logo-container">
        <img class="logo" src="assets/images/logov1_0.png" alt="Logo">
    </div>
    <div class="form-container">
        <form action="#" method="post">
            <input class="input-text" type="email" name="email" placeholder="Email" ><br />
            <input class="input-text" type="text" name="sujet" placeholder="Sujet" ><br />
            <textarea class="input-textarea" name="message" placeholder="Message"></textarea><br />
            <input class="input-submit" type="submit" value="Envoyer" />
        </form>
    </div>
</section>
</body>
</html>

<script>
    $(document).ready(function(){
        console.log("jQuery est prêt !");
    });
</script>