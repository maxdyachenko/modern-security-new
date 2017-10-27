<?php
/*
	Template Name: results-of-work
*/
?>

<?php get_header(); ?>


<div class="navigation">
    <a class="parent" href="#">Главная</a>
    <span>-</span>
    <a href="#" class="child">Результаты работы</a>
</div>
<div class="content-wrapper">
    <div class="wrap-fix-padding">
        <section class="result-of-work">
            <h3>Результаты нашей работы</h3>
            <p class="title-caption">Мы заботимся о Вашем времени. На этой странице Вы можете оплатить
                Ваш договор с компанияей «Современная защита» On-line</p>
            <form action="">
                <input type="search" placeholder="Введите № дела">
                <div class="form-group checkbox-group">
                    <p>Сортировать по</p>
                    <input type="checkbox" id="checkbox1" />
                    <label for="checkbox1">Дате</label>
                    <input type="checkbox" id="checkbox2" />
                    <label for="checkbox2">Сумме</label>
                    <input type="checkbox" id="checkbox3" />
                    <label for="checkbox3">Городу</label>
                </div>
            </form>



            <div class="documents-container">

                <?php $qava = new WP_Query('cat=7&showposts=9'); ?>
                    <?php if($qava->have_posts()) { ?>
                        <?php while($qava->have_posts()) { $qava->the_post(); ?>

                            <div class="document-wrapper">
                                <div class="text-block">
                                    <p class="sum">
                                        СПИСАНИЕ: <span><?= get_field('spisanie'); ?></span>
                                    </p>
                                    <div class="info">
                                        <div class="term">
                                            <p>Было</p>
                                            <p><?= get_field('has-been'); ?></p>
                                        </div>
                                        <div class="term">
                                            <p>Решение</p>
                                            <p><?= get_field('real-time'); ?></p>
                                        </div>
                                        <div class="term">
                                            <p>Номер дела</p>
                                            <p><?= get_field('deal-number'); ?></p>
                                        </div>
                                    </div>
                                </div>
                                <div class="document shadowed">
                                    <!-- <img src="/assets/images/document-example.jpg" alt=""> -->
                                    <?php the_post_thumbnail(); ?>
                                    <div class="make-bigger-button"></div>
                                </div>
                                <p class="document-date"><?php the_date(); ?></p>
                            </div>
                <?php }  }  ?>
            </div>
        </section>
    </div>
    <?php get_footer(); ?>
</div>

