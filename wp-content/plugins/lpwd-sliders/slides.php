<div class="slider" id="banner-fade">
    <ul class="bjqs">
        <?php
            // parcours l'ensemble des slides
            while ($slides->have_posts()) {
                // récupère le contenu du slide
                $slides->the_post();
                global $post;

                include $pluginPath.'/slide.php';
            }
        ?>
    </ul>
</div>
