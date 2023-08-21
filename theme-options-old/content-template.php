<div class="row no-gutters">
    <div class="col-md-3 bg-gray-1">
    	<div class="content-tab-link">
            <ul class="nav nav-tabs" id="nav-theme-option" role="tablist" aria-orientation="vertical">
                <li class="nav-item">
                    <a class="nav-link active" id="configuration-theme-tab" data-toggle="tab" href="#configuration-theme" role="tab" aria-controls="configuration-theme" aria-selected="false">
                        <i class="fas fa-sliders-h"></i>  <?php echo __( 'Opciones Generales', 'clean-theme'); ?>  <i class="fas fa-angle-right"></i>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="branding-tab" data-toggle="tab" href="#branding" role="tab" aria-controls="branding" aria-selected="true">
                        <i class="fas fa-grin-alt"></i>  <?php echo __( 'Marca y social media', 'clean-theme'); ?>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" id="home-tab" data-toggle="tab" href="#home" role="tab" aria-controls="home" aria-selected="true">
                        <i class="fas fa-home"></i>  <?php echo __( 'Home', 'clean-theme'); ?>
                    </a>
                </li>
            </ul>
        </div>
    </div>

    <!-- Tab panes -->
    <div class="col-md-9 bg-gray-2">
        <div class="tab-content">
            <!-- General settings
            ============================================= -->
            <div class="tab-pane fade show active form-horizontal" id="configuration-theme" role="tabpanel" aria-labelledby="configuration-theme-tab">
                <?php get_template_part( 'theme-options/template/configuration', 'theme' ); ?>
            </div><!--#configuration-theme--> 

            <!-- Tab Branding
            ============================================= -->
            <div class="tab-pane fade form-horizontal" id="branding" role="tabpanel" aria-labelledby="branding-tab">
    			<?php get_template_part( 'theme-options/template/content', 'branding' ); ?>
            </div><!--#branding-->

            <!-- Tab Home - Menu
            ============================================= -->
            <div class="tab-pane" id="home" role="tabpanel" aria-labelledby="home-tab">
                <?php get_template_part( 'theme-options/template/home', 'slider' ); ?>
            </div><!--#home-->

        </div>
    </div>
</div>
