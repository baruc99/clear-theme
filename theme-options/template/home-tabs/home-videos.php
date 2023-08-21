<?php
    $galeria_videos = get_option("themeoption_galeria_videos");
    $galeria_videos_op = get_option("themeoption_galeria_videos_op");
    $count_file = count($galeria_videos['url_video_youtube']);
?>
<div class="title-section">
    <h3><i class="far fa-play-circle"></i>  Galeria de videos</h3>
</div>
<div class="container">
    <div class="form-group brd-section">
        <div class="row">
            <div class="col-lg-4 label-option">
                <label for="slider-active" class="control-label">Galeria de videos</label>
                <span class="description-title">
                    (Default : no)<br>
                    Activar sección de servicios generales
                </span>
            </div>
            <div class="col-lg-8">
                <label class="switch top-switch">
                    <input type="checkbox" id="galeria-videos-active" name="galeria-videos-active" <?php echo ( !empty($galeria_videos_op['galeria-videos-active']) ) ? 'checked' : ''; ?>>  Habilitar
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
    </div>
    <div id="content-galeria-videos" class="mt-4" data-index=<?php echo $count_file; ?>>
    	<?php
            for($i=0; $i < $count_file; $i++){
        ?>
            <div class="item-module item-video">
                <a class="delete-item">
                    <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
                </a>
                <div class="row no-gutters">
                    <div class="col-md-12">
                        <div class="form-group row">
                            <label for="image_titulo_" class="col-md-2 control-label">Título</label>
                            <div class="col-md-10">
                                <input type="text" name="titulo_video_youtube[]" id="titulo_video_youtube_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_html($galeria_videos['titulo_video_youtube'][$i]); ?>" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-2 control-label">Url Youtube</label>
                            <div class="col-md-10">
                                <input type="text" name="url_video_youtube[]" id="url_video_youtube_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_url($galeria_videos['url_video_youtube'][$i]); ?>"/>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
        <input type="button" id="add-more-video" class="btn btn-default btn-add-more-video" value="Agregar más">
    </div>
</div>