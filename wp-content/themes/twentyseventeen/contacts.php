<?php
/*
 Template Name: Contacts
 */
?>

<?php get_header(); ?>

<div class="navigation">
    <a class="parent" href="#">Главная</a>
    <span>-</span>
    <a href="#" class="child">Контакты</a>
</div>
<!--some changes-->
<div class="content-wrapper">

    <section class="filials">
        <h3>Филиалы компании<br>
            ООО «Современная защита»</h3>


    <?php    $args = array(
                'orderby'      => 'name',
                'order'        => 'ASC',
                'taxonomy'     => 'category',
                'exclude'      => array(5,6,7)
        ); ?>

    <?php $categories = get_categories($args); ?>
<!--        //if ($categories) {
//            foreach ($categories as  $cat) {
//                echo $cat->name;
//            }
//        } -->


                <?php
                    if($categories) {
                        foreach ($categories as $cat) {
                            $arg_post = array(
                                    'ordered' => 'name',
                                    'order'   => 'ASC',
                                    'post_type' => 'post',
                                    'post_status' => 'publish',
                                    'cat' => $cat->cat_ID //id_рубрик
                            );
                            $query = new WP_Query(($arg_post)); ?>

                            <?php if($query->have_posts() ) ?>
                                <p class="filial-title"><?php echo $cat->name; ?></p>
                                <?php while ($query->have_posts() ) : $query->the_post(); ?>
                                    <div class="filials-wrapper">
                                        <div class="filial-wrapper">
                                            <div class="filials-container">
                                                <div class="filial shadowed">
                                                    <div class="map" >
                                                        <?php $damapa = get_field('mappa'); ?>
                                                        <iframe src="<?= $damapa ?>" allowfullscreen></iframe>
                                                    </div>
                                                    <div class="text-block">
                                                        <p class="adress"><?= get_field('cont-city') ?></p>
                                                        <p class="city"><?= get_field('con-adress'); ?></p>
                                                        <p class="tel">
                                                            Тел: <?= get_field('con-phone'); ?><br>
                                                            <small>(звонок по России бесплатный, в т.ч. с мобильного)</small>
                                                        </p>
                                                        <div class="email">
                                                            <p>Email: </p>
                                                            <a href="mailto:info@sovzashchita.ru"> <?= get_field('con-email'); ?></a>
                                                        </div>
                                                        <p class="timetable">Режим работы: <?= get_field('con-graphic'); ?></p>
                                                        <button class="button-blue">Обратный звонок</button>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                <?php endwhile; wp_reset_postdata(); ?>

                            <?php
                        }
                    }
                ?>

    </section>
    <?php get_footer(); ?>
</div>





<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery-3.2.1.min.js"></script>-->
<!---->
<!---->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery.slimscroll.min.js"></script>-->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/clamp.min.js"></script>-->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/main.js"></script>-->
