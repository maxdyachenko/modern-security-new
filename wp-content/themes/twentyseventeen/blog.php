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
                                                
                                                <span class="exerpt">
                                                    <?php the_excerpt(); ?>
                                                </span>
                                              
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


            <?php get_sidebar(); ?>


        </section>

    </div>

<?php get_footer(); ?>