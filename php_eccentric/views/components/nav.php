<?php
$menu = array(
    "home",
    "about",
    "services",
    "contact"
);
?>

<div class="w3l-header" id="home">
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-dark pl-0 pr-0">
            <a class="navbar-brand m-0" href="index.php?action=home"><span class="fa fa-gamepad"></span> Eccentric </a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ml-auto" style="text-transform: capitalize;">
                    <?php foreach ($menu as $key) : ?>
                        <?php if (isset($_GET['action'])) : ?>
                            <?php if ($_GET['action'] == $key) : ?>
                                <li class="nav-item active mr-lg-4">
                                    <a class="nav-link pl-0 pr-0" href="index.php?action=<?php echo $key ?>"><?php echo $key ?><span class="sr-only">(current)</span></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item mr-lg-4">
                                    <a class="nav-link pl-0 pr-0" href="index.php?action=<?php echo $key ?>"><?php echo $key ?></a>
                                </li>
                            <?php endif ?>
                        <?php else : ?>
                            <?php if ($key == "home") : ?>
                                <li class="nav-item active mr-lg-4">
                                    <a class="nav-link pl-0 pr-0" href="index.php?action=<?php echo $key ?>"><?php echo $key ?><span class="sr-only">(current)</span></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item mr-lg-4">
                                    <a class="nav-link pl-0 pr-0" href="index.php?action=<?php echo $key ?>"><?php echo $key ?></a>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
        </nav>
    </div>
</div>