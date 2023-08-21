<?php 
	$modal_options = get_option("themeoption_modal_options");
?>
<div class="title-section">
	<h3>Opciones del popup</h3>    
</div>

<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="sidebar-active" class="control-label">Activar Popup</label>
        <span class="description-title">
        	(Default : no)<br>
            Activar popup
        </span>
    </div>
    <div class="col-lg-9">
        <label class="switch top-switch">
            <input type="checkbox" id="sidebar-active" name="modal-active" <?php echo ( !empty($modal_options['modal-active']) ) ? 'checked' : ''; ?>>
            <div class="slider round"></div>
        </label>
    </div>
</div>
<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="sidebar-active" class="control-label">Imagen</label>
        <span class="description-title">
        	(Default : no)<br>
            Imagen opcional
        </span>
    </div>
    <div class="col-lg-9">
        <div class="widget-media text-left">
			<?php if(isset($modal_options['img-modal']) && !empty($modal_options['img-modal'])){ ?>
                <a title="Agregar imagen" id="img-modal" onclick="Theme_init.addMedia('img-modal')">
                    <img src='<?php echo $modal_options['img-modal']; ?>' width='120px'>
                </a>
            <?php }else{ ?>
                <a title="Asignar imagen" id="img-modal" onclick="Theme_init.addMedia('img-modal')">
                	<img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png' width='60px'>
                	<p>
                    	Asignar Imagen
                    </p>
                </a>
                
            <?php } ?>
            <p class="remove-p-img-modal" <?php echo (isset($modal_options['img-modal']) && !empty($modal_options['img-modal'])) ? " " : "style=display:none;"; ?>>
                <a href="#" id="remove-img-modal" onclick="Theme_init.removeMedia('img-modal')">Quitar imagen</a>
            </p>
            <input type="hidden" name="img-modal" value="<?php echo $modal_options['img-modal']; ?>">
    	</div>
    </div>
</div>
<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="timeline-active" class="control-label">Título Alerta</label>
        <span class="description-title">
            Agregar un título de alerta
        </span>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="titulo-alerta" name="titulo-alerta" value="<?php echo esc_attr($modal_options["titulo-alerta"]); ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="timeline-active" class="control-label">Contenido de Alerta</label>
        <span class="description-title">
        	(Default : no)<br>
            Contenido del popup
        </span>
    </div>
    <div class="col-lg-9">
        <?php 
			$settings = array( 
				'textarea_name' => 'content-modal',
				'teeny' => true,
				'textarea_rows' => 4,
				'quicktags' => true,
				'media_buttons' => false,
				'tinymce' =>false
			);
			wp_editor( $modal_options["content-modal"] , 'content-modal', $settings );
        ?>
    </div>
</div>
<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="timeline-active" class="control-label">Link de archivo</label>
        <span class="description-title">
            Agregar el link de archivo en pdf
        </span>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="link-modal" name="link-modal" value="<?php echo esc_attr($modal_options["link-modal"]); ?>">
    </div>
</div>
<div class="form-group">
    <div class="col-lg-3 label-option">
        <label for="timeline-active" class="control-label">Url video youtube</label>
        <span class="description-title">
            Agregar la url del video complementario
        </span>
    </div>
    <div class="col-lg-9">
        <input type="text" class="form-control" id="url-video" name="url-video" value="<?php echo esc_attr($modal_options["url-video"]); ?>">
    </div>
</div>