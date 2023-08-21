<?php
	$services_generals    = get_option("themeoption_servicios_generales");
    $services_generals_op = get_option("themeoption_servicios_generales_op");
?>
<div class="title-section">
    <h3><i class="fas fa-edit"></i>  Servicios generales</h3>
</div>
<div class="container">
    <div class="form-group brd-section">
        <div class="row">
            <div class="col-lg-4 label-option">
                <label for="slider-active" class="control-label">Servicios Generales</label>
                <span class="description-title">
                    (Default : no)<br>
                    Activar sección de servicios generales
                </span>
            </div>
            <div class="col-lg-8">
                <label class="switch top-switch">
                    <input type="checkbox" id="servicios-g-active" name="servicios-g-active" <?php echo ( !empty($services_generals_op['servicios-g-active']) ) ? 'checked' : ''; ?>>  Habilitar
                    <div class="slider round"></div>
                </label>
            </div>
        </div>
    </div>
    <div id="content-servicios-generales" class="mt-4">
        <p class="description-title">
           La medida de los iconos de esta sección debe ser de 200x200px de preferencias.
        </p>
    	<?php
            $count_file = count($services_generals['image_file_service_g']);

            for($i=0; $i < $count_file; $i++){
        ?>
            <div class="item-module item-servicios-generales">
                <a class="delete-item">
                    <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
                </a>
                <div class="row no-gutters">
                    <div class="col-md-10">
                        <div class="form-group row">
                            <label for="content" class="col-md-2 control-label">Imagen</label>
                            <div class="col-md-10">
                                <div class="row no-gutters">
                                    <div class="col-md-10 sin-padding-left">
                                        <input type="text" class="form-control form-upload input-sm" id="image_file_service_g_<?php echo $i; ?>" name="image_file_service_g[]" value="<?php echo esc_url($services_generals['image_file_service_g'][$i]); ?>">
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
                                <input type="text" name="image_titulo_service_g[]" id="image_titulo_service_g_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_html($services_generals['image_titulo_service_g'][$i]); ?>" required/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-2 control-label">Url</label>
                            <div class="col-md-10">
                                <input type="text" name="image_url_service_g[]" id="image_url_service_g_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_url($services_generals['image_url_service_g'][$i]); ?>"/>
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="content" class="col-md-2 control-label">Nueva ventana</label>
                            <label class="switch ctm-checkbox col-sm-10">
                                <input type="hidden" id="new_window_service_g_<?php echo $i; ?>" name="new_window_service_g[]" value="<?php echo ($services_generals['new_window_service_g'][$i]); ?>"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" <?php if($services_generals['new_window_service_g'][$i] == 1) echo "checked='checked'"; ?>>
                                <div class="slider round"></div>
                            </label>
                        </div>
                    </div>
                    <div class="col-md-2 text-center">
                        <?php
                            $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                        ?>
                        <img class="img-full img-preview-<?php echo $i; ?>" src="<?php echo (!empty($services_generals['image_file_service_g'][$i])) ? $services_generals['image_file_service_g'][$i] : $url_default ; ?>">
                    </div>
                </div>
            </div>
        <?php } ?>
        <input type="button" id="add-more-servicio-general" class="btn btn-default btn-add-more-servicio-general" value="Agregar más">
    </div>
</div>