<?php 
/**
 * About Section
 * ----------------
 */
if ( ! function_exists( 'thorium_ext_about_template' ) ) {

 function thorium_ext_about_template(){
  if ( ( get_theme_mod('thorium_ext_about_show_section', 1 ) ) === 1 ) {
  ?>
  	<!-- About Section -->
    <section id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2 class="section-heading"><?php echo get_theme_mod('thorium_ext_about_title', __( 'About','thorium-ext' ) ); ?></h2>
                    <h3 class="section-subheading text-muted"><?php echo get_theme_mod('thorium_ext_about_description', '' ); ?></h3>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                	<ul class="timeline">
                		<?php if ( is_active_sidebar( 'thorium-ext-section-about' ) ){
                
                			dynamic_sidebar( 'thorium-ext-section-about' );
                			
                		} ?>
                		<li class="timeline-inverted">
                            <div class="timeline-image">
                                <h4><?php _e('Be Part
                                    <br>Of Our
                                    <br>Story!','thorium-ext'); ?></h4>
                            </div>
                        </li>
                	</ul>
                </div>
            </div>
        </div>
    </section>
    <?php } 
    }
    
}
add_action('thorium_frontpage_sections','thorium_ext_about_template', 30);