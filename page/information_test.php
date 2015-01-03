<div class="row">
    <div class="large-12 columns">
        <?php
        $manager = new TestManager($db);
        $array = $manager->getTest($_GET['id']);
        foreach ($array as $obj) {
            echo '<header id="masthead" class="site-head" role="banner">
            <div class="site-branding">
                <div class="header-avatar">
                </div>
                <h1 class="site-title">'.$obj->nomtest.'</h1>
                <p class="site-description">'.$obj->descriptiontest.'</p>
            </div>
        </header>';
        }
        ?>
    </div>
</div>