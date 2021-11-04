<?php 
/*
Template Name: Наша история
*/

get_header();
?>

<div class="aboutus">
    <div class="container">
        <h1 class="title"><?php the_field('history_title') ?></h1>
        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_1') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_1') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                        $image = get_field('history_img_1');

                        if (!empty($image)): ?>
                            <img class="aboutus__img" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                            <?php  endif ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_2');

                    if (!empty($image)): ?>
                        <img class="aboutus__img" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                        <?php  endif ?>
            </div>
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_2') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_2') ?>
            </div>
        </div>

        <div class="row">
            <div class="col-lg-6">
                <div class="subtitle">
                    <?php the_field('history_title_3') ?>
                </div>
                <div class="aboutus__text">
                    <?php the_field('history_descr_3') ?>
                </div>
            </div>
            <div class="col-lg-6">
                <?php
                    $image = get_field('history_img_3');

                    if (!empty($image)): ?>
                        <img class="aboutus__img" src="<?php echo $image['url'] ?>" alt="<?php echo $image['alt'] ?>">
                        <?php  endif ?>
            </div>
        </div>
    </div>
</div>

<?php
get_footer();