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

        <?php get_the_category( 6 ) ?>

        <div class="filials-wrapper">


                        <div class="filial-wrapper">
                            <p class="filial-title">г. Москва</p>

                        <?php $cont = new WP_Query('cat=8'); ?>
                            <?php if($cont->have_posts()) { ?>
                                <?php while ($cont->have_posts()) { $cont->the_post(); ?>

                            <div class="filials-container">
                                <div class="filial shadowed">
                                    <div class="map" style="height: 200px">
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


                            <?php }  }  ?>
                        </div>

            <div class="filial-wrapper">
                <p class="filial-title">г. Санкт-Петербург</p>
            <?php $cont = new WP_Query('cat=9'); ?>
                <?php if($cont->have_posts()) { ?>
                    <?php while ($cont->have_posts()) { $cont->the_post(); ?>
                        <div class="filials-container">
                            <div class="filial shadowed">
                                <div class="map" style="height: 200px">
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
                    <?php }  }  ?>
            </div>

            <div class="filial-wrapper">
                <p class="filial-title">г. Казань</p>
            <?php $cont = new WP_Query('cat=10'); ?>
                <?php if($cont->have_posts()) { ?>
                    <?php while ($cont->have_posts()) { $cont->the_post(); ?>

                        <div class="filials-container">
                            <div class="filial shadowed">
                                <div class="map" style="height: 200px">
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
                    <?php }  }  ?>
            </div>

        </div>
    </section>
</div>





<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery-3.2.1.min.js"></script>-->
<!---->
<!---->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery.slimscroll.min.js"></script>-->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/clamp.min.js"></script>-->
<!--<script src="/wp-content/themes/twentyseventeen/assets/scripts/main.js"></script>-->
<?php //get_footer(); ?>