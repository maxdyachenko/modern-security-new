           

            <div class="right-sidebar">
                <div class="company-news">
                    <h5>Новости компании</h5>
                    <div class="news-list shadowed">
                    <?php  $query = new WP_Query('cat=5&showposts=2'); 
                        if( $query->have_posts() ){
                            while( $query->have_posts() ){ $query->the_post(); ?>
                                <article class="news">
                                    <header>
                                        <p class="time"><?php the_date(); ?></p>
                                    </header>
                                    <div class="content">
                                        <p class="content-title">
                                            <?php the_title();?>
                                        </p>
                                        <span class="content-descspan">
                                            <?php the_excerpt(); ?>
                                        </span>
                                    </div>
                                    <footer>
                                        <a href="<?php the_permalink(); ?>" class="link2">Читать</a>
                                    </footer>
                                </article>
                                <?php
                            }
                        } 
                        else echo 'Записей нет.'; ?>
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