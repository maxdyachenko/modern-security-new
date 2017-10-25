<?php get_header(); ?>



<div class="navigation">
    <a class="parent" href="#">Главная</a>
    <span>-</span>
    <a href="#" class="parent">Блог</a>
    <span>-</span>
    <a href="#" class="child">Имя страницы</a>
</div>

<div class="content-wrapper">
    <div class="wrap-fix-padding">
        <section class="center-content page-wrapper">
        	<?php if(have_posts()): ?>
            	<?php while(have_posts()) : the_post() ?>
            		<?php query_posts('cat=5showposts=1'); ?>
			            <div class="content-of-page">
			                <h3><?php the_title(); ?></h3>

			                <div class="page-date"><?php the_date(); ?></div>
			                <div class="text-content">
			                    <?php the_content(); ?>
			                </div>
			                <button class="butBack" type="submit" onclick="history.back()">back</button>
			            </div>
				<?php endwhile; ?>
			<?php endif; ?>

            <?php get_sidebar(); ?>

<!--             <div class="right-sidebar">
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
            </div> -->
        </section>
    </div>
</div>

<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery-3.2.1.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery.slimscroll.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/clamp.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/main.js"></script>
