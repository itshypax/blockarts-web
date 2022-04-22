<!DOCTYPE html>
<html lang="de">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blockarts.de &raquo; Home</title>
    <!-- Favicon -->
    <link rel="shortcut icon" href="/assets/img/ico/favicon.ico" type="image/x-icon">
    <!-- Metas -->
    <?php include 'assets/php/metas.php'; ?>
    <!-- Load CSS -->
    <link rel="stylesheet" href="/assets/css/style.css">
    <!--load all Font Awesome styles -->
    <link href="/assets/fontawesome/css/all.css" rel="stylesheet">
    <!-- Include Berlin font -->
    <link href="/assets/fonts/berlin/stylesheet.css" rel="stylesheet">
    <!-- Include Roboto font -->
    <link href="/assets/fonts/roboto/stylesheet.css" rel="stylesheet">
</head>
<body>
    <!-- include stickyScroll.js -->
    <?php include 'assets/php/navigation.php'; ?>
    <div class="main">
        <div class="box bord">
            <img src="/assets/img/mc-demo.webp" width="100%" draggable="false" (dragstart)="false;" oncontextmenu="return false;" class="no-drag" style="height:100vh;width:100vw;" alt="Minecraft Screenshot">
        </div>
        <div class="centered begin-text">
            <h1>Blockarts.de</h1>
            <p>
                Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et
            </p>
            <div style="text-align:center;">
                <button class="btn btn-primary btn-main-sell"><i class="fa-solid fa-paper-plane"></i> Was geht?</button>
            </div>
        </div>
    </div>
    <div class="grid-container">
        <div class="grid-item">
            <i class="fa-solid fa-block-brick"></i>
            <h2>Alle Größenordnungen</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="grid-item">
            <i class="fa-solid fa-timer"></i>
            <h2>Zeitlich flexibel</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>
        <div class="grid-item">
            <i class="fa-solid fa-compass-drafting"></i>
            <h2>Präzisionsarbeit</h2>
            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet.</p>
        </div>  
    </div>

    <?php include 'assets/php/footer.php'; ?>
</body>
</html>