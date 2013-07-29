<?php
/**
 * Template Name: Home
 *
 * This template is the default content template. It is used to display the content of a
 * template file, when no more specific content-*.php file is available.
 *
 * @package WooFramework
 * @subpackage Template
 */

/**
 * Settings for this template file.
 *
 * This is where the specify the HTML tags for the title.
 * These options can be filtered via a child theme.
 *
 * @link http://codex.wordpress.org/Plugin_API#Filters
 */
 get_header();
?>
    <!-- #content Starts -->
	<?php woo_content_before(); ?>
    <div id="content" class="col-full">

    	<div id="main-sidebar-container">

            <!-- #main Starts -->
            <?php woo_main_before(); ?>
            <section id="main">

				<?php woo_loop_before(); ?>

                <!-- Post Starts -->
                <?php woo_post_before(); ?>
                <article class="post">

                    <?php woo_post_inside_before(); ?>

                    <!--<h1 class="title"><?php the_title(); ?></h1>-->

                    <section class="entry">

<!-- START HOMEPAGE TEMPLATE -->
<div class="section bg-white" id="about-us">
	<div class="col-full">
		<header>
			<h1>Who We Are</h1>
		</header>
		<div class="fivecol-four single-col">
			<p>At Peterson Group we look at your business in a way that is very different from most other accounting firms. We take a holistic approach to your business and the economic, legal and financial environment which directly effects it.</p>
			<p>It is our ability to understand and draw together the external factors that effect your business that makes Peterson Group a leader in financial services – and delivers successful financial outcomes for our clients.</p>
			<p>For Peterson clients it means you are receiving ‘big-picture’ financial advice from client advisors who insist on considering the whole of your business or your personal finances, not just part of it. We use this accumulated knowledge to keep you at the forefront of change and advise you how to be best positioned for the future.</p>
			<p>To be successful in business today and reach your personal financial goals, you need more than just an accountant to balance the books - you need professional independent financial and business guidance from a total business success centre.</p>
			<p><strong>Nicolas Kyriopoulos</strong><br />
			CEO</p>
		</div>
		<img src="<?php echo site_url(); ?>/wp-content/uploads/Nicolas-Kyriopoulos.png" class="section-img" />
	</div>
</div>

<div class="section" id="services">
	<div class="col-full">
		<header>
			<h1>Expertise</h1>
			<p class="subtitle">We offer financial advise and expertise to deliver successful outcomes for our clients.</p>
		</header>
		<div class="grid single-col span10">
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/business-essentials/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/business-essentials.jpg" class="no-border no-pad">
					<h2>Business Essentials</h2>
					<div class="mask" style="background-color: rgba(241,91,43, 0.9);"></div>
					<div class="content">
						<h2>Business Essentials</h2>  
						<p>Ultimately, the aim of any accounting firm is to deliver successful financial outcomes for its clients.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/business-essentials/" class="info">Learn More</a></p>
					</div>  
				</a>
				
			</div>
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/wealth-creation/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/wealth-creation_240x180.jpg" class="no-border no-pad">
					<h2>Wealth Creation</h2>
					<div class="mask" style="background-color: rgba(154,216,222, 0.9);"></div>
					<div class="content">
						<h2>Wealth Creation</h2>  
						<p>Building business success and accumulating wealth are two key platforms on which we were founded.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/wealth-creation/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one last view view-second">
				<a href="<?php echo site_url(); ?>/services/finance-business-restructuring/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/business-restructuring.jpg" class="no-border no-pad">
					<h2>Business Restructuring</h2>
					<div class="mask" style="background-color: rgba(254,188,22, 0.9);"></div>
					<div class="content">
						<h2>Business Restructuring</h2>  
						<p>We understand the marketplace and the critical factors at play.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/finance-business-restructuring/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/business-consulting/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/business-consulting.jpg" class="no-border no-pad">
					<h2>Business Consulting</h2>
					<div class="mask" style="background-color: rgba(60,36,23, 0.9);"></div>
					<div class="content">
						<h2>Business Consulting</h2>  
						<p>Today, more than ever, business needs a multi faceted approach to reach its full potential.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/business-consulting/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/asset-protection/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/asset-protection_240x180.jpg" class="no-border no-pad">
					<h2>Asset Protection</h2>
					<div class="mask" style="background-color: rgba(189,32,46, 0.9);"></div>
					<div class="content">
						<h2>Asset Protection</h2>  
						<p>Latest US figures indicate around 30% of all business people have either been sued or are currently in the courts suing some-one.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/asset-protection/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one last view view-second">
				<a href="<?php echo site_url(); ?>/services/self-managed-super-funds/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/self-managed-super.jpg" class="no-border no-pad">
					<h2>Self Managed Super</h2>
					<div class="mask" style="background-color: rgba(194,182,156, 0.9);"></div>
					<div class="content">
						<h2>Self Managed Super</h2>  
						<p>A self-managed superannuation fund can offer you the most flexible option for making the most of your retirement.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/self-managed-super-funds/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/virtual-cfo/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/virtual-cfo.jpg" class="no-border no-pad">
					<h2>Virtual CFO</h2>
					<div class="mask" style="background-color: rgba(121,155,62, 0.9);"></div>
					<div class="content">
						<h2>Virtual CFO</h2>  
						<p>A Peterson Virtual CFO can take a business further than you ever imagined.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/virtual-cfo/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one view view-second">
				<a href="<?php echo site_url(); ?>/services/property-professionals/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/property-professionals.jpg" class="no-border no-pad">
					<h2>Property Professionals</h2>
					<div class="mask" style="background-color: rgba(133,113,87, 0.9);"></div>
					<div class="content">
						<h2>Property Professionals</h2>  
						<p>If you could travel back in time, what would you change?</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/property-professionals/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
			<div class="grid-item threecol-one last view view-second">
				<a href="<?php echo site_url(); ?>/services/business-coaching/">
					<img src="<?php echo site_url(); ?>/wp-content/uploads/business-coaching.jpg" class="no-border no-pad">
					<h2>Business Coaching</h2>
					<div class="mask" style="background-color: rgba(36,124,29, 0.9);"></div>
					<div class="content">
						<h2>Business Coaching</h2>  
						<p>The ideal partnership for the business owner who thrives on being motivated and challenged.</p>
						<p class="center"><a href="<?php echo site_url(); ?>/services/business-coaching/" class="info">Learn More</a></p>
					</div>
				</a>
			</div>
		</div>
	</div>
</div>

<div class="section bg-white" id="contact">
	<div class="col-full">
		<header>
			<h1>Contact Us</h1>
			<p class="subtitle">It will be the best decision your finances ever made.</p>
		</header>
		<div class="twocol-one">
			<p class="text-large text-black"><span class="text-light">Let's talk.</span><br />(03) 9381 1500</p>
			<p>Ask us about our services or tell us a bit about yourself and your business. We’re all ears.</p>
			<div class="threecol-two text-small">
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-envelope icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Email</span><br /><a href="#">info@petersongroup.com.au</a></p>
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-home icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Address</span><br /><a href="#">First Floor, 4/35 Hope Street<br />Brunswick VIC 3056</a></p>
			</div>
			<div class="threecol-one text-small last">
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-skype icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Skype</span><br /><a href="#">PetersonGroup</a></p>
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-twitter icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Twitter</span><br /><a href="#">PetersonGroup</a></p>
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-facebook icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Facebook</span><br /><a href="#">PetersonGroup</a></p>
				<div class="contact-icon"><span class="icon-stack"><i class="icon-circle icon-2x icon-stack-base"></i><i class="icon-google-plus icon-2x icon-light"></i></span></div>
				<p><span class="text-caps text-black">Google +</span><br /><a href="#">PetersonGroup</a></p>
			</div>
		</div>
		<div class="twocol-one last"><img class="alignright" src="<?php echo site_url(); ?>/wp-content/uploads/Peterson-Group-Map-Location-Address.jpg"></div>
	</div>
</div>


<!-- END HOMEPAGE TEMPLATE -->


                    	<div class="fix"></div>
                    </section>

                    <?php woo_post_inside_after(); ?>

                </article><!-- /.post -->
                <?php woo_post_after(); ?>
                <div class="fix"></div>

            </section><!-- /#main -->
            <?php woo_main_after(); ?>

            <?php get_sidebar(); ?>

		</div><!-- /#main-sidebar-container -->

		<?php get_sidebar( 'alt' ); ?>

    </div><!-- /#content -->
	<?php woo_content_after(); ?>

<?php get_footer(); ?>