<?php
/**
 * The custom template for the one-page style front page. Kicks in automatically.
 */

get_header(); ?>

	<div id="primary" class="content-area">
		<main id="main" class="site-main" role="main">

			<section id="call-to-action">
            	<div class="front-left">
                	<h2 class="section-title">Call to Action</h2>
                </div>
                <div class="front-right">
                	Form
                </div>
            </section>
            
            <section id="testimonials">
            	Testimonials	
            </section>			
            
            <section id="services">
            	<h2 class="section-title">Services</h2>
                some text goes here
                <ul>
                	<li>Item one</li>
                    <li>Item two</li>
                    <li>Item three</li>
                </ul>
            </section>
            
            <section id="meet">
            	<h2 class="section-title">Meet the Doctor</h2>
            </section>
            
            <section id="contact">
            	<div class="front-left">
                	<h2 class="section-title">Contact us</h2>
                </div>
                <div class="front-right">
                	Address
                </div>
            </section>

		</main><!-- #main -->
	</div><!-- #primary -->

<?php get_footer(); ?>
