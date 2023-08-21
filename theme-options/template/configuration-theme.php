<div class="content-tab-home">
    <ul class="nav nav-pills" id="nav-configuration-tabs" role="tablist">
        <!-- <li class="nav-item">
            <a class="nav-link" id="configuration-seo-tab" data-toggle="pill" href="#configuration-seo" role="tab" aria-controls="configuration-seo" aria-selected="true">
                <i class="fas fa-globe"></i> Configuración SEO
            </a>
        </li> -->
        <!-- <li class="nav-item">
            <a class="nav-link" id="configuration-footer-tab" data-toggle="pill" href="#configuration-footer" role="tab" aria-controls="configuration-slider" aria-selected="true">
                <span class="dashicons dashicons-align-full-width"></span> Configuración Footer
            </a>
        </li> -->
        <li class="nav-item">
            <a class="nav-link active" id="configuration-general-tab" data-toggle="pill" href="#configuration-general" role="tab" aria-controls="configuration-general" aria-selected="false">
                <i class="fas fa-user-cog"></i> Configuración General
            </a>
        </li>
    </ul>
</div>


<div class="tab-content">
    <div class="tab-pane fade" id="configuration-seo" role="tabpanel" aria-labelledby="configuration-seo-tab">
        <?php get_template_part( 'theme-options/template/configuration-theme-tabs/configuration', 'seo' ); ?>
    </div><!--#configuration-seo-->

    <div class="tab-pane fade" id="configuration-footer" role="tabpanel" aria-labelledby="configuration-footer-tab">
        <?php get_template_part( 'theme-options/template/configuration-theme-tabs/configuration', 'footer' ); ?>
    </div><!--#configuration-footer-->

    <div class="tab-pane fade show active" id="configuration-general" role="tabpanel" aria-labelledby="configuration-general-tab">
        <?php get_template_part( 'theme-options/template/configuration-theme-tabs/configuration', 'general' ); ?>
    </div><!--#configuration-general-->
</div>