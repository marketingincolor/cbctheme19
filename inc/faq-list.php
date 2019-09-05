<section class="faq-display">
	<div class="container">
		<div class="row">
			<div class="col-sm-12">

				<?php $ts_field = get_field_object('faqs_the_science'); ?>
				<div id="tsfaq" role="tablist" aria-multiselectable="true">
					<h2 class="teal"><?php echo $ts_field['label']; ?></h2>

				<?php if( have_rows('faqs_the_science') ): ?>

					<?php while( have_rows('faqs_the_science') ): the_row(); 
					$ts_question = get_sub_field('ts_question');
					$ts_answer = get_sub_field('ts_answer'); ?>

					<div class="panel">
						<?php if( $ts_question ): ?>
						<div class="" role="tab" id="ts-question-<?php echo get_row_index(); ?>">
							<h5 class="">
								<a data-toggle="collapse" data-parent="#tsfaq" href="#ts-answer-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="ts-answer-<?php echo get_row_index(); ?>"><?php echo $ts_question; ?></a>
							</h5>
						</div>
						<?php endif; ?>

						<?php if( $ts_answer ): ?>
						<div id="ts-answer-<?php echo get_row_index(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ts-question-<?php echo get_row_index(); ?>">
							<div class="">
								<?php echo $ts_answer; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>


				<?php $ab_field = get_field_object('faqs_aging_beauty'); ?>
				<div id="abfaq" role="tablist" aria-multiselectable="true">
					<h2 class="teal"><?php echo $ab_field['label']; ?></h2>

				<?php if( have_rows('faqs_aging_beauty') ): ?>

					<?php while( have_rows('faqs_aging_beauty') ): the_row(); 
					$ab_question = get_sub_field('ab_question');
					$ab_answer = get_sub_field('ab_answer'); ?>

					<div class="panel">
						<?php if( $ab_question ): ?>
						<div class="" role="tab" id="ab-question-<?php echo get_row_index(); ?>">
							<h5 class="">
								<a data-toggle="collapse" data-parent="#abfaq" href="#ab-answer-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="ab-answer-<?php echo get_row_index(); ?>"><?php echo $ab_question; ?></a>
							</h5>
						</div>
						<?php endif; ?>

						<?php if( $ab_answer ): ?>
						<div id="ab-answer-<?php echo get_row_index(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="ab-question-<?php echo get_row_index(); ?>">
							<div class="">
								<?php echo $ab_answer; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>


				<?php $hm_field = get_field_object('faqs_healing_medicinal'); ?>
				<div id="hmfaq" role="tablist" aria-multiselectable="true">
					<h2 class="teal"><?php echo $hm_field['label']; ?></h2>

				<?php if( have_rows('faqs_healing_medicinal') ): ?>

					<?php while( have_rows('faqs_healing_medicinal') ): the_row(); 
					$hm_question = get_sub_field('hm_question');
					$hm_answer = get_sub_field('hm_answer'); ?>

					<div class="panel">
						<?php if( $hm_question ): ?>
						<div class="" role="tab" id="hm-question-<?php echo get_row_index(); ?>">
							<h5 class="">
								<a data-toggle="collapse" data-parent="#hmfaq" href="#hm-answer-<?php echo get_row_index(); ?>" aria-expanded="false" aria-controls="hm-answer-<?php echo get_row_index(); ?>"><?php echo $hm_question; ?></a>
							</h5>
						</div>
						<?php endif; ?>

						<?php if( $hm_answer ): ?>
						<div id="hm-answer-<?php echo get_row_index(); ?>" class="panel-collapse collapse" role="tabpanel" aria-labelledby="hm-question-<?php echo get_row_index(); ?>">
							<div class="">
								<?php echo $hm_answer; ?>
							</div>
						</div>
						<?php endif; ?>
					</div>

					<?php endwhile; ?>
				<?php endif; ?>
				</div>

			</div>
		</div>
	</div>
</section>