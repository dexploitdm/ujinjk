<div class="quiz">
		<div class="quiz-layout box">
			<div class="quiz-head">
			     <div class="quiz-text">Пройдите опрос <br>
и получите скидку</div>
			     <div class="quiz-proccent">5%</div></div>
            <div class="quiz-btn">
                <a href="#quizes" class="jk-btn jk-btn-orange check js-start-quiz">Пройти опрос и получить скидку</a>
            </div>
		</div>
		
		 
		<div id="quiz-result" class="modal-manager modal-quiz-result mfp-hide">
            <div class="modal-manager-layout">
                <div class="quiz-result-text">
                    <div class="result-title">Поздравляем!</div>
                    <div class="result-text">Для получения вашей персональной скидки, укажите, пожалуйста,  
                    ваш номер телефона и E-mail.
                    Наш менеджер свяжется с вами в ближайшее время.</div>
                </div>
                <form class="manager-form">
                     <div class="u-controls">
                        <input type="text" class="u-input js-fio" name="fio" placeholder="Фамилия, Имя">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input js-telephone" name="phone" placeholder="Номер телефона">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input js-emailsend" name="email" placeholder="Ваш E-mail">
                    </div>
                    <div class="manager-agree">
                        Нажимая кнопку Отправить, вы принимаете <a href="#">условия соглашения</a>
                    </div>
                    <div class="manager-btn">
                        <button type="submit" class="jk-btn jk-btn-neon call js-submit-formes" disabled >Отправить</button>
                    </div>
                </form>
            </div>
            <div class="msg-note msg-note-manager">Сообщение отправленно</div>
        </div>
        
        <div id="quizes" class="modal-quiz mfp-hide">
            <div class="modal-manager-layout js-quiz-layout">
                <div class="quiz-answers-layout" data-state="open">
		            <div class="title-answer"></div>
		        </div>
            </div>
            <div class="modal-manager-layout js-result-layout" style="display: none">
                <div class="quiz-result-text">
                    <div class="result-title">Поздравляем!</div>
                    <div class="result-text">Для получения вашей персональной скидки, укажите, пожалуйста
                        ваш номер телефона и E-mail.
                        Наш менеджер свяжется с вами в ближайшее время.</div>
                </div>
                <form class="manager-form">
                    <div class="u-controls">
                        <input type="text" class="u-input js-fio" name="fio" placeholder="Фамилия, Имя">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input js-telephone" name="phone" placeholder="Номер телефона">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input js-emailsend" name="email" placeholder="Ваш E-mail">
                    </div>
                    <div class="manager-agree">
                        Нажимая кнопку Отправить, вы принимаете <a href="#">условия соглашения</a>
                    </div>
                    <div class="manager-btn">
                        <button type="submit" class="jk-btn jk-btn-neon call js-submit-formes" disabled >Отправить</button>
                    </div>
                </form>
            </div>
            <div class="msg-note msg-note-manager">Сообщение отправленно</div>

        </div>

		
	</div>


	<script>



  var questions = [
	  <?php $quizes = new WP_Query(array('post_type' => 'quizes','showposts'=> '30', 'order' => 'ASC')) ?>
                <?php if ($quizes->have_posts()): ?>
                    <?php while ($quizes->have_posts()) : $quizes->the_post(); ?>
					
	   {
    question: "<?php the_title(); ?>",
	id: "<?php the_ID(); ?>",	   
	img: "<?php the_post_thumbnail_url(); ?>",
    choices: [<?php echo  wp_specialchars_decode(get_field('setquiz'), ENT_QUOTES ); ?>],
	identChoices: [<?php echo  wp_specialchars_decode(get_field('id_next'), ENT_QUOTES ); ?>],   
    nextAnswer: "<?php echo get_field('current_answer_prev'); ?>"
  },
		 <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
	];
			var titlebox = $('.title-answer');
			
			
  for (let i = 0; i < questions.length; i++) { // выведет 0, затем 1, затем 2
// 	  console.log(questions[i].question);
// 	  console.log(questions[i].choices);

	 //Вопросы
	 titlebox.after('<div class="testbox answer' + i  + '" data-answer="' + questions[i].nextAnswer + '"><div class="testbox-layout"><div class="testbox-head"><div class="testbox-count">Вопрос <span class="js-number"></span> из 5</div><div class="testbox-discount">Ваша скидка <span class="js-number"></span> %</div></div><div class="testbox-flex"><div class="testbox-block"><div class="testbox-title">' + questions[i].question + '</div><div class="textbox-choices"></div></div><div class="testbox-cover"><img src="' + questions[i].img + '"></div></div><div class="testbox-btn"><button type="button" class="quiz-prev"></button><button type="button" class="quiz-next not" disabled></button></div></div></div>')
	  
	  for (let t = 0; t < questions[i].choices.length; t++) {
		  //console.log(t)
		  let identChoces = questions[i].id + randomInteger(1, 99);
		  $('.answer' + i).children().children().children().children('.textbox-choices').append('<div class="choice" data-ident="' + questions[i].identChoices[t] + '"><input type="radio" id="'+ questions[i].choices[t].substring(0, 3) +  identChoces +  '" name="choices' + questions[i].id + '" value="" class="u-radio"><label for="'+ questions[i].choices[t].substring(0, 3) +  identChoces +  '" class="ujin-label">' + questions[i].choices[t] + '</label></div>')
		  //console.log(questions[i].choices[t])
	  }
	  
	}
			
	$('.testbox:last').fadeIn();
    let currentAnswerNumber = 1;
    let prevAnswer = '';
    const answerNumber = $('.js-number');
    const quizBox = $('#quizes');
    answerNumber.text(currentAnswerNumber);


//Выбор ответа (Определение следущего вопроса)
$('.choice').click(function() {
	let btnNext = $(this).parent().parent().parent().parent().children('.testbox-btn').children('.quiz-next');
	//quiz-next
	btnNext.removeClass('not').prop("disabled", false).attr('data-next', $(this).attr('data-ident'));
});
//Следующий вопрос
$('.quiz-next').click(function() {
    let answerBox = $(this).parent().parent().parent();
    prevAnswer = answerBox.attr('class');
    answerBox.hide();
	let nextAnswer = $('[data-answer="'+ $(this).attr('data-next') +'"]');

	if($(this).attr('data-next') === 'undefined'){
	    $('.js-quiz-layout').hide();
	    $('.js-result-layout').show();
        $('.quiz-answers-layout').attr('data-state','close');
        quizBox.removeClass('modal-quiz');
        quizBox.addClass('modal-manager');
        quizBox.addClass('modal-quiz-result');
	}
    currentAnswerNumber = currentAnswerNumber + 1;
    answerNumber.text(currentAnswerNumber);

	nextAnswer.show();
});
//Предыдущий вопрос
  $('.quiz-prev').click(function() {
      let answerBox2 = $(this).parent().parent().parent();
      answerBox2.hide();
      $('.' + formatClass(prevAnswer)).show();
      currentAnswerNumber = currentAnswerNumber - 1;
      answerNumber.text(currentAnswerNumber);
  });
//Проверка состояния завершение опроса при открытии
  $('.js-start-quiz').click(function() {
      let currentQuizState = $('.quiz-answers-layout');
      if(currentQuizState.attr('data-state') === 'close'){
          quizBox.addClass('modal-quiz');
          quizBox.removeClass('modal-manager');
          quizBox.removeClass('modal-quiz-result');
          $('.js-result-layout').hide();
          currentAnswerNumber = 1;
          answerNumber.text(currentAnswerNumber);
          $('.js-quiz-layout').show();
          $('.answer0').show();
          currentQuizState.attr('data-state', 'open');
      }
  });
  function formatClass(words) {
      var n = words.split(" ");
      return n[n.length - 1];
  }
  function randomInteger(min, max) {
      // получить случайное число от (min-0.5) до (max+0.5)
      let rand = min - 0.5 + Math.random() * (max - min + 1);
      return Math.round(rand);
    }
</script>
