<style>
	.salon-products { 
		color:#fff; 
		background-color:#66a9a3; 
		padding:3em 0em;
	}
	.salon-products .container .row div { padding: 2rem 0rem; }
	.salon-products .btn-secondary, .salon-products .btn-secondary:hover {
		background-color: transparent;
    	border-color: #fff;
    	border-width:3px;
	}
	.salon-coral-cta {
		background-color: #ff6d70;
		color:#fff;
		padding:1em 0em;
	}
	.salon-green-cta { 
		background:#DBCF1E url(<?php echo get_stylesheet_directory_uri(); ?>/img/cb-cta-bgnd.png) no-repeat center center /cover; 
		color:#fff; 
		padding:3em 0em;
	}
	.salon-green-cta p {
    font-weight: 600;
    font-size: 22px;
    line-height: 1.5;
	}
	.green-frame {
		margin:6%;
	}
	.green-frame h2 { color:#66a9a3; font-size:1.5em; margin:3em 0em 1em; }
	.hero-salon-page {
		background-image: url(<?php echo get_stylesheet_directory_uri(); ?>/img/salon-page-hero-bgnd.png);
		background-repeat: repeat;
		background-position: right center;
	}
	.hero-salon-page h1 { font-size:2em; padding:1em 0em .25em; }
	.hero-salon-page p { font-size:18px; font-weight:500; line-height:1.4 !important; }
	.child-theme ul { padding-inline-start:10px; }
	.child-theme ul li {
		color: inherit; 
		display: inline-block;
		list-style: none; 
		margin: 0 0 16px 1.1225em;
		padding: 0;
		position: relative;
		font-weight:500;
		line-height:1.2;
	}

	.child-theme ul li::before {
		color: #ff6d70;  
		content: "\2022"; 
		display: inline-block;
		font-size: 1.5em; 
		left: -0.5em; 
		position: absolute;
		top: -0.375em; 
	}

	.salon-form {
		background-color:#ACADAD;
	}
	.form-group { margin-bottom:40px; }
	.wpcf7 label { font-weight:500; }
	.form-control { font-size:14px !important; font-weight:500; color:#b5b5b5; }
	</style>


<section class="hero-salon-page">
	<div class="NOTcontainer-fluid" style="overflow:hidden;">
		<div class="row">
			<div class="col-md-6">
				<div class="row">
					<div class="col-xs-11 col-xs-offset-1">
						<h1><?php the_field('salon_hero_title'); ?></h1>
						<p><?php the_field('salon_hero_text'); ?></p>
					</div>
				</div>
			</div>
			<div class="col-md-6">
				<img class="NOTempty-spacer" src="<?php the_field('salon_hero_image'); ?>" alt="All Natural Skin Care Products" style="width:100%;">
			</div>
		</div>
	</div>
</section>

<section class="salon-coral-cta">
	<div class="NOTcontainer-fluid" style="margin:auto; max-width:80vw;">
		<?php the_field('salon_main_cta'); ?>
	</div>
</section>

<section class="content-one" style="padding:4em 0em;">
	<div class="container">
		<?php the_field('salon_content_one'); ?>
	</div>	
</section>

<div class="salon-products text-center">
	<div class="container">
		<?php the_field('salon_content_two'); ?>
	</div>
</div>

<div class="salon-green-cta text-center">
	<div class="container">
		<?php the_field('salon_secondary_cta'); ?>
	</div>
</div>

<section class="content-three" style="padding:4em 0em;">
	<div class="container">
		<?php the_field('salon_content_three'); ?>
	</div>
</section>

<div class="salon-form">
	<div class="container"><a id="salon-form"></a>
		<div class="row">
			<div class="col-xs-10 col-xs-offset-1 col-md-8 col-md-offset-2">
				<h3 style="padding:4rem 0rem 2rem;">Spa/Salon Business Partner Application</h3>
				<?php echo do_shortcode('[contact-form-7 id="1480" title="Salon Form"]'); ?>
			</div>
		</div>

	</div>
</div>