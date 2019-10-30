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
		
		 
		<div id="quiz-result" class="modal-manager mfp-hide">
            <div class="modal-manager-layout">
                <div class="quiz-result-text">
                    <div class="result-title">Поздравляем!</div>
                    <div class="result-text">Для получения вашей персональной скидки, укажите, пожалуйста,  
                    ваш номер телефона и E-mail.
                    Наш менеджер свяжется с вами в ближайшее время.</div>
                </div>
                <form class="manager-form">
                    <div class="u-controls">
                        <input type="text" class="u-input" name="fio" placeholder="Фамилия, Имя">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input" name="phone" placeholder="Номер телефона">
                    </div>
                    <div class="u-controls">
                        <input type="text" class="u-input" name="email" placeholder="Ваш E-mail">
                    </div>
                    <div class="manager-agree">
                        Нажимая кнопку Отправить, вы принимаете <a href="#">условия соглашения</a>
                    </div>
                    <div class="manager-btn">
                        <button type="submit" class="jk-btn jk-btn-neon call ">Отправить</button>
                    </div>
                </form>
            </div>
            <div class="msg-note msg-note-manager">Сообщение отправленно</div>
        </div>
        
        <div id="quizes" class="modal-quiz mfp-hide">
            <div class="modal-manager-layout">
                <div class="quiz-answers-layout">
		        <div class="title-answer"></div>
		    </div>
            </div>
            <div class="msg-note msg-note-manager">Сообщение отправленно</div>
        </div>
		
		<div class="quiz-answers" style="background-image: url(<?php  echo get_template_directory_uri() ?>/assets/build/images/covers/bg_quiz.png)">
		    
		</div>
		
	</div>




	<style>
	.modal-quiz {
	   background-color: #2D3C3E;
	   box-shadow: 0px 30px 50px rgba(0, 0, 0, 0.6);
        border-radius: 40px;
        box-sizing: border-box;
        border-radius: 23px;
        width: auto;
        margin: auto;
        max-width: 840px;

    
	}
	.modal-quiz .mfp-close {
	        top: 0;
	}
	
	.modal-quiz .mfp-close:after {
	   content: '';
        position: absolute;
        width: 40px;
        height: 40px;
        right: 40px;
        background-size: cover;
        background-image: url("data:image/svg+xml,%3Csvg width='43' height='42' viewBox='0 0 43 42' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M41.6557 1L1.65574 41M41 41L1 1' stroke='white' stroke-width='2'/%3E%3C/svg%3E%0A");
	}
	 
	
	.jk-btn-orange {
	    border: 1px solid #ff9500;
        color: #2d3c3e;
        padding: 12px 20px 12px 46px;
        background: #FF9500;
	}
	.jk-btn.check:before {
	   content: '';
        position: absolute;
        background-size: cover;
        width: 23px;
        height: 17px;
        top: 14px;
        left: 16px;
	    background-image: url("data:image/svg+xml,%3Csvg width='30' height='25' viewBox='0 0 30 25' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M25 1.79009L11.9768 21.1127L3.00001 11.29' stroke='%232D3C3E' stroke-width='3' stroke-linecap='round' stroke-linejoin='round'/%3E%3C/svg%3E%0A");
	}
	.quiz-answers {
	   background-size: cover;
        height: 100vh;
            position: relative;
	}
	.quiz-answers-layout {
	   color: #fff;
	}
	.quiz-answers-relult {
	   color: #fff;
        background: #2D3C3E;
        box-shadow: 0px 30px 50px rgba(0, 0, 0, 0.6);
        border-radius: 40px;
        max-width: 600px;
        margin: auto;
        height: 470px;
        position: absolute;
        left: 0;
        right: 0;
        bottom: 0;
        top: 0;
	}
	.a-relult-box {
	   padding: 25px 60px 40px 60px;
	}
		.quiz  {
		    background: #2D3C3E;
			    
		}
		.quiz-layout {
			display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 20px;
            padding-top: 70px;
            padding-bottom: 70px;
		
		}
		.quiz-head {
		    font-weight: 500;
            font-size: 42px;
            line-height: 120%;
            color: #fff;
                display: flex;
		}
		.quiz-proccent {
		    font-weight: 500;
            font-size: 104px;
            line-height: 100%;
             color: #fff;
		}
		.quiz-text {
		        padding-right: 10px;
		}
		.quiz-btn .jk-btn {
    	   font-size: 18px;
            line-height: 100%;
    	}
	</style>
	
	<!--TODO: TEST-->
	<style>
	.testbox {
		display: none;
	}
	.testbox:first-child {
		display: block;
	}
	.choice {
	    margin-bottom: 28px;
	}
	.testbox-layout {
	        padding: 50px 48px;
	            position: relative;
	}
	.testbox-flex {
	    display: flex;
        justify-content: space-between;
	}
	.testbox-head {
	    display: flex;
        justify-content: space-between;
	}
	.testbox-btn {
	   position: absolute;
        left: 43px;
        bottom: 5em;
        width: 60px;
        display: flex;
        justify-content: space-between;
	}
	
	.quiz-prev {
	    position: relative;
	    cursor: pointer;
        outline: none;
	}
	.quiz-prev:after {
	   content: '';
        position: absolute;
        background-size: cover;
        width: 39px;
        height: 39px;
         transform: rotate(180deg);
        background-image: url("data:image/svg+xml,%3Csvg width='39' height='39' viewBox='0 0 39 39' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 19C9.44772 19 9 19.4477 9 20C9 20.5523 9.44772 21 10 21L10 19ZM28.7071 20.7071C29.0976 20.3166 29.0976 19.6834 28.7071 19.2929L22.3431 12.9289C21.9526 12.5384 21.3195 12.5384 20.9289 12.9289C20.5384 13.3195 20.5384 13.9526 20.9289 14.3431L26.5858 20L20.9289 25.6569C20.5384 26.0474 20.5384 26.6805 20.9289 27.0711C21.3195 27.4616 21.9526 27.4616 22.3431 27.0711L28.7071 20.7071ZM10 21L28 21L28 19L10 19L10 21Z' fill='%230EF5FF'/%3E%3Ccircle cx='19.5' cy='19.5' r='19' stroke='%230EF5FF'/%3E%3C/svg%3E%0A");
	
	    
	}
	.quiz-prev.not:after {
        transform: rotate(0deg);
		 background-image: url("data:image/svg+xml,%3Csvg width='39' height='39' viewBox='0 0 39 39' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg opacity='0.5'%3E%3Cpath d='M29 19C29.5523 19 30 19.4477 30 20C30 20.5523 29.5523 21 29 21L29 19ZM10.2929 20.7071C9.90237 20.3166 9.90237 19.6834 10.2929 19.2929L16.6569 12.9289C17.0474 12.5384 17.6805 12.5384 18.0711 12.9289C18.4616 13.3195 18.4616 13.9526 18.0711 14.3431L12.4142 20L18.0711 25.6569C18.4616 26.0474 18.4616 26.6805 18.0711 27.0711C17.6805 27.4616 17.0474 27.4616 16.6569 27.0711L10.2929 20.7071ZM29 21L11 21L11 19L29 19L29 21Z' fill='%23B8C2C4'/%3E%3Ccircle r='19' transform='matrix(-1 0 0 1 19.5 19.5)' stroke='%23B8C2C4'/%3E%3C/g%3E%3C/svg%3E%0A");

	}
	.quiz-next {
	    position: relative;
	    cursor: pointer;
        outline: none;
	}
	.quiz-next:after {
	   content: '';
        position: absolute;
        background-size: cover;
        width: 39px;
        height: 39px;
        background-image: url("data:image/svg+xml,%3Csvg width='39' height='39' viewBox='0 0 39 39' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cpath d='M10 19C9.44772 19 9 19.4477 9 20C9 20.5523 9.44772 21 10 21L10 19ZM28.7071 20.7071C29.0976 20.3166 29.0976 19.6834 28.7071 19.2929L22.3431 12.9289C21.9526 12.5384 21.3195 12.5384 20.9289 12.9289C20.5384 13.3195 20.5384 13.9526 20.9289 14.3431L26.5858 20L20.9289 25.6569C20.5384 26.0474 20.5384 26.6805 20.9289 27.0711C21.3195 27.4616 21.9526 27.4616 22.3431 27.0711L28.7071 20.7071ZM10 21L28 21L28 19L10 19L10 21Z' fill='%230EF5FF'/%3E%3Ccircle cx='19.5' cy='19.5' r='19' stroke='%230EF5FF'/%3E%3C/svg%3E%0A");
	
	}
	.quiz-next.not:after {
	     transform: rotate(180deg);
	background-image: url("data:image/svg+xml,%3Csvg width='39' height='39' viewBox='0 0 39 39' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Cg opacity='0.5'%3E%3Cpath d='M29 19C29.5523 19 30 19.4477 30 20C30 20.5523 29.5523 21 29 21L29 19ZM10.2929 20.7071C9.90237 20.3166 9.90237 19.6834 10.2929 19.2929L16.6569 12.9289C17.0474 12.5384 17.6805 12.5384 18.0711 12.9289C18.4616 13.3195 18.4616 13.9526 18.0711 14.3431L12.4142 20L18.0711 25.6569C18.4616 26.0474 18.4616 26.6805 18.0711 27.0711C17.6805 27.4616 17.0474 27.4616 16.6569 27.0711L10.2929 20.7071ZM29 21L11 21L11 19L29 19L29 21Z' fill='%23B8C2C4'/%3E%3Ccircle r='19' transform='matrix(-1 0 0 1 19.5 19.5)' stroke='%23B8C2C4'/%3E%3C/g%3E%3C/svg%3E%0A");

	}
			</style>
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
	 titlebox.after('<div class="testbox answer' + i  + '" data-answer="' + questions[i].nextAnswer + '"><div class="testbox-layout"><div class="testbox-head"><div class="testbox-count">Вопрос №</div><div class="textbox-discount">Ваша скидка<span class="js-discount"></span></div></div><div class="testbox-flex"><div class="testbox-block"><div class="testbox-title">' + questions[i].question + '</div><div class="textbox-choices"></div></div><div class="testbox-cover"><img src="' + questions[i].img + '"></div></div><div class="testbox-btn"><button type="button" class="quiz-prev"></button><button type="button" class="quiz-next not" disabled></button></div></div></div>')
	  
	  for (let t = 0; t < questions[i].choices.length; t++) {
		  //console.log(t)
		  $('.answer' + i).children().children().children().children('.textbox-choices').append('<div class="choice" data-ident="' + questions[i].identChoices[t] + '"><input type="radio" id="'+ questions[i].choices[t].substring(0, 3) +  questions[i].id +  '" name="choices' + questions[i].id + '" value="" class="u-radio"><label for="'+ questions[i].choices[t].substring(0, 3) +  questions[i].id +  '" class="ujin-label">' + questions[i].choices[t] + '</label></div>')
		  //console.log(questions[i].choices[t])
	  }
	  
	}
			
			$('.testbox:last').fadeIn();
//Выбор ответа (Определение следущего вопроса)
$('.choice').click(function() {



	
	let btnNext = $(this).parent().parent().parent().parent().children('.testbox-btn').children('.quiz-next');
	//quiz-next
	btnNext.removeClass('not').prop("disabled", false).attr('data-next', $(this).attr('data-ident'));
});
$('.quiz-next').click(function() {
    console.log('dd ' +  $(this).attr('data-next'))
    $(this).parent().parent().parent().hide();
	let nextAnswer = $('[data-answer="'+ $(this).attr('data-next') +'"]'); 

	if($(this).attr('data-next') === 'undefined'){
	    $('.quiz-answers-layout').hide();
	    $.magnificPopup.open({
            items: {src: '#quiz-result'}, type: 'inline'
        });
	}
	nextAnswer.show();
});
			
</script>
	<style>
		.u-radio {
			    position: absolute;
			top: auto;
			overflow: hidden;
			clip: rect(1px, 1px, 1px, 1px);
			width: 1px;
			height: 1px;
			white-space: nowrap;
		}
		.ujin-label {
		    font-weight: 500;
            font-size: 16px;
            line-height: 100%;
			line-height: 20px;
			padding-left: 29px;
			position: relative;
			display: inline-block;
			cursor: pointer;
			vertical-align: top;
			-webkit-user-select: none;
			-moz-user-select: none;
			-ms-user-select: none;
			user-select: none;
		}
		.u-radio + .ujin-label:before {
			line-height: 20px;
			width: 20px;
			height: 20px;
			border-radius: 50%;
			box-sizing: border-box;
			content: '';
			display: block;
			position: absolute;
			top: 0;
			left: 0;
			vertical-align: top;
			text-align: center;
    	    border: 1px solid rgba(255, 255, 255, 0.4);
			transition: all .1s ease-out;
		}
		.u-radio:active:not(:disabled):hover + .ujin-label:before {
			    color: #0EF5FF;
    			border-color: #0EF5FF;
		}
		.u-radio:checked:not(:disabled) + .ujin-label:before {
			color: #0EF5FF;
			border-color: #0EF5FF;
		}
		.u-radio:active:checked:not(:disabled):hover + .ujin-label:before {
			color: #0EF5FF;
		}
		.u-radio:checked + .ujin-label:before {
/* 			background-color: #0EF5FF; */
           content: '';
            background-image: url("data:image/svg+xml,%3Csvg width='10' height='10' viewBox='0 0 10 10' fill='none' xmlns='http://www.w3.org/2000/svg'%3E%3Ccircle cx='5' cy='5' r='5' fill='%230EF5FF'/%3E%3C/svg%3E%0A");
    	    background-repeat: no-repeat;
            background-size: 10px 18px;
            background-position: center;
		}
	
		.u-radio:hover:not(:disabled) + .ujin-label:before {
			border-color: #0EF5FF;
		}
	</style>