<?php
/*
Template Name: Макет Разное 2
Template Post Type: page
*/
get_header(); ?>
    <main>
        <div class="empty-block"></div>
<?php while( have_posts() ) : the_post(); ?>
        <div class="content box">
			<div class="quiz">
				
			
			<div class="title-answer">
				
<!-- 				<div class="testbox2">
					<button class="choice">ген</button>
						<button class="choice">ком</button>
						<button class="choice">маркет
					</button>
				</div>
				<div class="testbox" data-answer="ген">
						<button class="choice">
						hjhjttttt
					</button>
						<button class="choice">
						hjghj
					</button>
						<button class="choice">
						ghjghj
					</button>
				</div>
				<div class="testbox" data-answer="ком">
						<button class="choice">
						dfd
					</button>
						<button class="choice">
						pioio
					</button>
					<button class="choice">
						xzccf
					</button>
				</div> -->
			</div>
			</div>
<style>
	.testbox {
		display: none;
	}
	.testbox:first-child {
		display: block;
	}
			</style>
        </div>
<?php  endwhile; ?>
		 
		<script>
			
			
  var questions = [
	  <?php $quizes = new WP_Query(array('post_type' => 'quizes', 'order' => 'ASC')) ?>
                <?php if ($quizes->have_posts()): ?>
                    <?php while ($quizes->have_posts()) : $quizes->the_post(); ?>
					
	   {
    question: "<?php the_title(); ?>",
    choices: [<?php echo  wp_specialchars_decode(get_field('setquiz'), ENT_QUOTES ); ?>],
    nextAnswer: "<?php echo get_field('current_answer_prev'); ?>"
  },
		 <?php endwhile; ?>
                <?php endif; ?>
                <?php wp_reset_query(); ?>
	];
			var titlebox = $('.title-answer');
  for (let i = 0; i < questions.length; i++) { // выведет 0, затем 1, затем 2
	  console.log(questions[i].question);
	  console.log(questions[i].choices);
	  
	 //Вопросы
	 titlebox.after('<div class="testbox answer' + i  + '" data-answer="' + questions[i].nextAnswer + '">' + questions[i].question + '</div>')
	  
	  for (let t = 0; t < questions[i].choices.length; t++) {
		  console.log(t)
		  $('.answer' + i).append('<div class="choice">' + questions[i].choices[t] + '</div>')
		  console.log(questions[i].choices[t])
	  }
	  
	}
			$('.testbox:last').fadeIn();
//Выбор ответа (Определение следущего вопроса)
$('.choice').click(function() {
  	console.log($(this).text());
	$(this).parent().fadeOut();
	let nextAnswer = $('[data-answer="'+ $(this).text() +'"]'); 
	nextAnswer.fadeIn();
	console.log(nextAnswer)
	
	
	
});
</script>

    </main>
<?php get_footer(); ?>