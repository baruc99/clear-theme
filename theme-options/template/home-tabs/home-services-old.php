<?php
	$services = get_option("themeoption_servicios");
?>
<div class="title-section mb-3">
    <h3><i class="fas fa-edit"></i>  Servicios</h3>
    <span class="description-title">
       La medida de los iconos de esta sección debe ser de 200x200px de preferencias.
    </span>
</div>
<div id="content-servicios">
    <?php
        $count_file = count($services['image_file_service']);

        for($i=0; $i < $count_file; $i++){
    ?>
        <div class="item-servicios-generales">
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
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_service_<?php echo $i; ?>" name="image_file_service[]" value="<?php echo esc_url($services['image_file_service'][$i]); ?>">
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
                            <input type="text" name="image_titulo_service[]" id="image_titulo_service_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_html($services['image_titulo_service'][$i]); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 control-label">Url</label>
                        <div class="col-md-10">
                            <input type="text" name="image_url_service[]" id="image_url_service_<?php echo $i; ?>" class="form-control input-sm regular-text" value="<?php echo esc_url($services['image_url_service'][$i]); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="content" class="col-md-2 control-label">Nueva ventana</label>
                        <label class="switch ctm-checkbox col-sm-10">
                            <input type="hidden" id="new_window_service_<?php echo $i; ?>" name="new_window_service[]" value="<?php echo ($services['new_window_service'][$i]); ?>"><input type="checkbox" onclick="this.previousSibling.value=1-this.previousSibling.value" <?php if($services['new_window_service'][$i] == 1) echo "checked='checked'"; ?>>
                            <div class="slider round"></div>
                        </label>
                    </div>
                </div>
                <div class="col-md-2 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-<?php echo $i; ?>" src="<?php echo (!empty($services['image_file_service'][$i])) ? $services['image_file_service'][$i] : $url_default ; ?>">
                </div>
            </div>
        </div>
    <?php } ?>
    <input type="button" id="add-more-servicio" class="btn btn-default btn-add-more-servicio" value="Agregar más">
</div>