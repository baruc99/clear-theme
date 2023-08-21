<div class="content-tab-home">
    <ul class="nav nav-pills" id="nav-configuration-tabs" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="configuration-seo-tab" data-toggle="pill" href="#configuration-seo" role="tab" aria-controls="configuration-seo" aria-selected="true">
                <i class="fas fa-globe"></i> <?php echo __( 'Opciones SEO', 'juconi'); ?>
            </a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="configuration-general-tab" data-toggle="pill" href="#configuration-general" role="tab" aria-controls="configuration-general" aria-selected="false">
                <i class="fas fa-user-cog"></i> <?php echo __( 'Opciones Generales', 'juconi'); ?>
            </a>
        </li>
    </ul>
</div>


<div class="tab-content">
    <div class="tab-pane fade show active" id="configuration-seo" role="tabpanel" aria-labelledby="configuration-seo-tab">
        <?php get_template_part( 'theme-options/template/configuration-theme-tabs/configuration', 'seo' ); ?>
    </div><!--#configuration-seo-->

    <div class="tab-pane fade" id="configuration-general" role="tabpanel" aria-labelledby="configuration-general-tab">
        <?php get_template_part( 'theme-options/template/configuration-theme-tabs/configuration', 'general' ); ?>
    </div><!--#configuration-general-->
</div>