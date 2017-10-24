<?php
/*
 Template Name: Blog
 */
?>

<?php get_header(); ?>


<div class="navigation">
    <a class="parent" href="#">Главная</a>
    <span>-</span>
    <a href="#" class="child">Блог</a>
</div>

<div class="content-wrapper">
    <div class="wrap-fix-padding">

        <section class="blog center-content">
            <div class="content-of-page">
                <h3>Блог</h3>
                <div class="smi-news">
                    <h4 class="title">
                        Сми о нас
                    </h4>
                    <div class="list-wrapper">
                        <article class="card shadowed">
                            <header>
                                <p class="date">15.03.17</p>
                            </header>
                            <div class="content">
                                <div class="img-wrapper">
                                    <img src="/wp-content/themes/twentyseventeen/assets/images/page-image-example.jpg" alt="Card image">
                                </div>
                                <p class="content-title">
                                    “Современная защита” на страже
                                    должников ВОТ УЖЕ 4 ГОДА
                                </p>
                                <p class="content-text">
                                    Совзащита обеспечила технологическую реализацию проекта по оплате покупок онлайн с помощью  сервиса Samsung Pay.  Сервис, запущенный при поддержке процессинговой
                                </p>
                            </div>
                            <footer>
                                <p class="link1">РИА Новости</p>
                                <button class="button-blue link2">Читать</button>
                            </footer>
                        </article>
                

                       <?php  $query = new WP_Query('cat=5&showposts=5'); 
                                if( $query->have_posts() ){
                                    while( $query->have_posts() ){ $query->the_post(); ?>
                                        <article class="card shadowed">
                                            <header>
                                                <p class="date"><?php the_date(); ?></p>
                                            </header>
                                            <div class="content">
                                                <div class="img-wrapper">
                                                     <?php if ( function_exists( 'add_theme_support' ) )
                                                        the_post_thumbnail( array(), array('class' => 'post_img') ); ?>
                                                </div>
                                                <p class="content-title">
                                                    <?php the_title(); ?>
                                                </p>
                                                
                                                <?php the_excerpt(); ?>
                                              
                                            </div>
                                            <!-- <p class="content-text"> -->
                                            <footer>
                                                <p class="link1">
                                                    <?php if ( get_field('from') ) {?>
                                                    <?php echo get_field('from'); ?>
                                                    <?php } else { ?>
                                                        
                                                    <?php } ?>
                                                </p>
                                                <button class="button-blue link2">
                                                    <a href="<?php the_permalink(); ?>">Читать</a>
                                                </button>
                                            </footer>
                                        </article>
                                <?php
                                    }
                                } 
                                else echo 'Записей нет.'; ?>
                        
                    </div>
                </div>
            </div>


            <div class="right-sidebar">
                <div class="company-news">
                    <h5>Новости компании</h5>
                    <div class="news-list shadowed">
                        <article class="news">
                            <header>
                                <p class="time">15.03.17</p>
                            </header>
                            <div class="content">
                                <p class="content-title">
                                    “Современная защита” на страже
                                    должников ВОТ УЖЕ 4 ГОДА
                                </p>
                                <p class="content-desc">
                                    Современная защита принимает
                                    активное участие в деловой прессе
                                    и выступает экспертом в обсуждениях обсуждениях
                                </p>
                            </div>
                            <footer>
                                <a href="#" class="link2">Читать</a>
                            </footer>
                        </article>
                    </div>
                </div>
                <div class="work-in-company">
                    <p class="title">Работа в компании</p>
                    <img src="/wp-content/themes/twentyseventeen/assets/images/work-in-company.jpg" alt="Work in company">
                    <p class="content-desc">
                        Компания Современная защита
                        открывает набор специалистов
                        колл-центра. ЗП высокая
                    </p>
                    <div class="yellow-button shadowed">узнать подробности</div>
                </div>
            </div>


        </section>

    </div>

<?php get_footer(); ?>