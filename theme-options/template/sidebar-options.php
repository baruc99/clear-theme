<?php
	$sidebar_options = get_option("themeoption_sidebar_options");
?>
<div class="title-section">
	<h3>Opciones del Sidebar</h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="sidebar-active" class="control-label">Sidebar Activo</label>
            <span class="description-title">
            	(Default : si)<br>
                Muestra el sidebar en el home
            </span>
        </div>
        <div class="col-lg-9">
            <label class="switch top-switch">
                <input type="checkbox" id="sidebar-active" name="sidebar-active" <?php echo ( !empty($sidebar_options['sidebar-active']) ) ? 'checked' : ''; ?>>
                <div class="slider round"></div>
            </label>
        </div>
    </div>
</div>

<?php
	$banners_sidebar  = get_option("themeoption_banners_sidebar");
?>
<div class="title-section">
    <h3>Banner sidebar Home</h3>
    <span class="description-title">
       Los banners del sidebar del home debe ser de 744px, para que se pueda adaptar perfectamente a todas las resoluciones soportadas
    </span>
</div>
<div id="content-form">
	<?php
        $count_file = count($banners_sidebar['image_file']);

        for($i=0; $i < $count_file; $i++){
    ?>
        <div class="item-form-rich">
            <a class="delete-item">
                <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
            </a>
            <div class="row no-gutters">
                <div class="col-md-10">
                    <div class="form-group row">
                        <label for="content" class="col-md-2 control-label">Imagen</label>
                        <div class="col-md-10">
                            <div class="row no no-gutters">
                                <div class="col-md-10 sin-padding-left">
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_<?php echo $i; ?>" name="image_file[]" value="<?php echo esc_url($banners_sidebar['image_file'][$i]); ?>">
                                </div>
                                <div class="col-md-2 sin-padding">
                                    <button type='button' class="form-btn-upload btn-upload btn-style" id="uploadimage<?php echo $i; ?>" data-index="<?php echo $i; ?>"/>
                                        Subir
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="image_titulo_" class="col-md-2 control-label">Título</label>
                        <div class="col-md-10">
                            <input type="text" name="image_titulo[]" id="image_titulo_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_html($banners_sidebar['image_titulo'][$i]); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 control-label">Url</label>
                        <div class="col-md-10">
                            <input type="text" name="image_url[]" id="image_url_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_url($banners_sidebar['image_url'][$i]); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 control-label">Nueva ventana</label>
                        <label class="switch ctm-checkbox col-sm-10">
                            <input type="hidden" id="new_window_<?php echo $i; ?>" name="new_window[]" value="<?php echo ($banners_sidebar['new_window'][$i]); ?>"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" <?php if($banners_sidebar['new_window'][$i] == 1) echo "checked='checked'"; ?>>
                            <div class="slider round"></div>
                        </label>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-<?php echo $i; ?>" src="<?php echo (!empty($banners_sidebar['image_file'][$i])) ? $banners_sidebar['image_file'][$i] : $url_default ; ?>">
                </div>
            </div>
        </div>
    <?php } ?>
    <input type="button" id="add-more-home" class="btn btn-default btn-add-more-home" value="Agregar más">
</div>


