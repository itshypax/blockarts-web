<nav id="mainnav">
    <ul>
        <?php $page = basename($_SERVER['PHP_SELF']); ?>
        <?php if ($page == 'index' or $page == 'index.php' or $page == '') { ?>
            <li><a href="/imprint">Impressum</a></li>
        <?php } elseif ($page == 'imprint' or $page == 'imprint.php') { ?>
            <li><a href="/">Start</a></li>
        <?php } ?>
        <li><a href="/team">Team</a></li>
        <li><a href="#">Projekte</a></li>
        <li><a href="#">Partner</a></li>
        <img src="/assets/img/svg/ba_black.svg" alt="Blockarts.de Logo" height="32px" width="auto">
    </ul>
</nav>
<!-- <script src="/assets/js/stickyScroll.js"></script> -->