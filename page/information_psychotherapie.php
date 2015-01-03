<div class="row">
    <div class="large-12 columns">
        <?php
        $manager = new PsychotherapieManager($db);
        $array = $manager->getPsychotherapie($_GET['id']);
        foreach ($array as $obj) {
            echo '<header id="masthead" class="site-head" role="banner">
            <div class="site-branding">
                <div class="header-avatar">
                </div>
                <h1 class="site-title">'.$obj->nompsychotherapie.'</h1>
                <p class="site-description">'.$obj->descriptionpsychotherapie.'</p>
            </div>
        </header>';
        }
        ?>
    </div>
</div>