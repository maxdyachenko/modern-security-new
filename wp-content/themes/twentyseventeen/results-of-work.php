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
                <div class="document-wrapper">
                    <div class="text-block">
                        <p class="sum">
                            СПИСАНИЕ: <span>1 233 00 РУБ.</span>
                        </p>
                        <div class="info">
                            <div class="term">
                                <p>Было</p>
                                <p>Долг 644 644 руб.</p>
                            </div>
                            <div class="term">
                                <p>Решение</p>
                                <p>Полное списание долга</p>
                            </div>
                            <div class="term">
                                <p>Номер дела</p>
                                <p>АО - 123456</p>
                            </div>
                        </div>
                    </div>
                    <div class="document shadowed">
                        <img src="/assets/images/document-example.jpg" alt="">
                        <div class="make-bigger-button"></div>
                    </div>
                    <p class="document-date">13.03.15</p>
                </div>

        </section>
    </div>
</div>


<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery-3.2.1.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/jquery.slimscroll.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/libs/clamp.min.js"></script>
<script src="/wp-content/themes/twentyseventeen/assets/scripts/main.js"></script>
