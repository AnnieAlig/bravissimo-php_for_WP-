<?php 
     /*
    Template Name: Test page
    */
    get_header(); ?>

    <main role="main">
<!-- //test// -->

<section class="test-page wrapper margin-bottom">
    <h1 class="test-page_title">Пройти тест</h1>
    <form id="quizForm" class="test-page_form">
        <h3 id="questionTitle" class="test-page_form-title">
            Узнайте уровень своего итальянского
        </h3>
        <p id="questionDefinition" class="test-page_form_question-title"></p>
        <p id="questionText" class="test-page_form-question"></p>
        <p id="questionOptions" class="test-page_form-description">
            Этот тест по итальянскому языку состоит из 30 вопросов с несколькими вариантами ответов. На прохождение
            теста вам понадобится около 20 минут. Вы найдёте правильные ответы по завершению теста. Удачи!
        </p>

        <div id="questionButton">
            <input id="buttonStart" class="test-page_form-button" name="buttonStart"
                   onclick="return buttonStart_onclick()" type="button" value="Начать"/>
        </div>

    </form>

</section>

<!-- //end of test// -->
	</main>
	<?php get_footer(); ?>
	<script type="text/javascript" src="<?php echo get_template_directory_uri(); ?>/js/test.js"></script>
