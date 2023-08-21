<?php
	$configuration_theme = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><i class="fas fa-globe"></i>  <?php echo __( 'SEO', 'clean-theme'); ?></h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="text-header-title" class="control-label"><?php echo __( 'Título del sitio web', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'El título es requerido', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="text-header-title" name="text-header-title" value="<?php echo esc_attr($configuration_theme["text-header-title"]); ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="text-descripcion-corta" class="control-label"><?php echo __( 'Descripción Corta', 'clean-theme'); ?></label>
            <span class="text-descripcion-corta">
                <?php echo __( 'Expliqué brevemente de que se trata su sitio web (requerido).', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="text-descripcion-corta" name="text-descripcion-corta" value="<?php echo esc_attr($configuration_theme["text-descripcion-corta"]); ?>">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="keywords" class="control-label"><?php echo __( 'Keywords', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Describa su sitio web con palabras clave separadas por comas', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo esc_attr($configuration_theme["keywords"]); ?>">
        </div>
    </div>
</div>