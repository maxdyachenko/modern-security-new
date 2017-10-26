<?php 
/*
	Template Name: Team
*/
?>

<?php get_header(); ?>

<div class="navigation">
    <a class="parent" href="#">Главная</a>
    <span>-</span>
    <a href="#" class="child">Наша команда</a>
</div>

<div class="content-wrapper">

    <div class="wrap-fix-padding">

        <section id="section1" class="section1 section1-page">
            <div class="container">
                <h2>Команда
                    ООО «Современная защита»
                </h2>
                <button class="button-blue">Признать должника банкротом за 90 дней</button>
                <div class="achievments">
                    <div>
                        <p class="number">8</p>
                        <p class="text">филиалов<br> по РФ</p>
                    </div>
                    <div>
                        <p class="number">1000+</p>
                        <p class="text">банкротов<br> по РФ</p>
                    </div>
                    <div>
                        <p class="number">10</p>
                        <p class="text">лучших арбитражных<br> управляющих</p>
                    </div>
                    <div>
                        <p class="number">27</p>
                        <p class="text">юристов экспертов<br> в области банкротства</p>
                    </div>
                </div>
            </div>

            <div class="interactive-block">
                <div class="scroll-button"></div>
                <div class="phone"></div>
            </div>
        </section>


        <section class="our-team-container">
            <div class="team-list">
                <?php $quy = new WP_Query('cat=6'); ?>
                    <?php if($quy->have_posts()) { ?>
                        <?php while($quy->have_posts()) { $quy->the_post(); ?>
                            <div class="person-card shadowed">
                                <?php the_post_thumbnail(array(), array('class'=>'person-avatar')); ?>
                                <p class="person-name"><?= get_field('name'); ?></p>
                                <p class="person-position"><?= get_field('kind-of-work'); ?></p>
                                <div class="person-content">
                                    <p><?php the_content(); ?></p>
                                </div>
                                <div class="person-socials">
                                    <div class="icon">
                                        <a href="<?= get_field('vk'); ?>">
                                            <i class="fa fa-vk" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fa fa-telegram" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fa fa-facebook-square" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                    <div class="icon">
                                        <a href="#">
                                            <i class="fa fa-twitter" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    <?php } } ?>
                </div>
            </div>
        </section>
    <?php get_footer(); ?>
    </div>

</div>

