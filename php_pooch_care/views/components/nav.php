<?php
$nav_item = array("home", "services", "contact", "about");
?>

<header id="site-header" class="fixed-top">
    <div class="container">
        <nav class="navbar navbar-expand-lg stroke">
            <h1><a class="navbar-brand" href="index.html">
                    Pooch Care
                </a></h1>
            <!-- if logo is image enable this   
      <a class="navbar-brand" href="#index.html">
          <img src="image-path" alt="Your logo" title="Your logo" style="height:35px;" />
      </a> -->
            <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </span>
            </button>

            <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                <ul class="navbar-nav ml-auto">
                    <?php foreach ($nav_item as $key) : ?>
                        <?php if (isset($_GET['action'])) : ?>
                            <?php if (($_GET['action']) == $key) : ?>
                                <li class="nav-item <?php echo "active" ?>">
                                    <a class="nav-link" href="index.php?action=<?php echo $key ?>"><?php echo $key ?><span class="sr-only">(current)</span></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?action=<?php echo $key ?>"><?php echo $key ?></a>
                                </li>
                            <?php endif ?>
                        <?php else : ?>
                            <?php if ("home" == $key) : ?>
                                <li class="nav-item <?php echo "active" ?>">
                                    <a class="nav-link" href="index.php?action=<?php echo $key ?>"><?php echo $key ?><span class="sr-only">(current)</span></a>
                                </li>
                            <?php else : ?>
                                <li class="nav-item">
                                    <a class="nav-link" href="index.php?action=<?php echo $key ?>"><?php echo $key ?></a>
                                </li>
                            <?php endif ?>
                        <?php endif ?>
                    <?php endforeach ?>
                </ul>
            </div>
            <!-- toggle switch for light and dark theme -->
            <div class="mobile-position">
                <nav class="navigation">
                    <div class="theme-switch-wrapper">
                        <label class="theme-switch" for="checkbox">
                            <input type="checkbox" id="checkbox">
                            <div class="mode-container">
                                <i class="gg-sun"></i>
                                <i class="gg-moon"></i>
                            </div>
                        </label>
                    </div>
                </nav>
            </div>
            <!-- //toggle switch for light and dark theme -->
        </nav>
    </div>
</header>