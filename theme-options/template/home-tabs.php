<div class="content-tab-home">
    <ul class="nav nav-pills" id="nav-home-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="home-slider-tab" data-toggle="pill" href="#home-slider" role="tab" aria-controls="home-slider" aria-selected="true">
                <i class="far fa-images"></i> Slider
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="servicios-tab" data-toggle="pill" href="#servicios" role="tab" aria-controls="servicios" aria-selected="true">
                <i class="fas fa-edit"></i> Servicios
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="noticias-tab" data-toggle="pill" href="#noticias" role="tab" aria-controls="noticias" aria-selected="false">
                <i class="far fa-newspaper"></i> Noticias
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="videos-tab" data-toggle="pill" href="#videos" role="tab" aria-controls="videos" aria-selected="false">
                <i class="far fa-play-circle"></i> Videos
            </a>
        </li>
    </ul>
</div>


<div class="tab-content">
    <!-- Tab Branding
    ============================================= -->
    <div class="tab-pane fade show active" id="home-slider" role="tabpanel" aria-labelledby="home-slider-tab">
		<?php get_template_part( 'theme-options/template/home-tabs/home', 'slider' ); ?>
    </div><!--#home-slider-->

  	<div class="tab-pane fade" id="servicios" role="tabpanel" aria-labelledby="servicios-tab">
    	<?php get_template_part( 'theme-options/template/home-tabs/home', 'services' ); ?>
    </div><!--#servicios-->

    <div class="tab-pane fade" id="noticias" role="tabpanel" aria-labelledby="noticias-tab">
    	<?php get_template_part( 'theme-options/template/home-tabs/home', 'noticias' ); ?>
    </div><!--#noticias-->

    <div class="tab-pane fade" id="videos" role="tabpanel" aria-labelledby="videos-tab">
        <?php get_template_part( 'theme-options/template/home-tabs/home', 'videos' ); ?>
    </div><!--#videos--> 
</div>