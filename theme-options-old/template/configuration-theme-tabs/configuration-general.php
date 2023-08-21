<?php
    $configuration_theme = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><i class="fas fa-user-cog"></i>  <?php echo __( 'Opciones Generales', 'clean-theme'); ?></h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="code-google-analytics" class="control-label">
                <?php echo __( 'Google Analytics ID', 'clean-theme'); ?>
            </label>
            <span class="description-title">
                <?php echo __( 'pegue aquí su ID de seguimiento de "Google Analytics": "UA-XXXXXXXX-1"', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="code-google-analytics" name="code-google-analytics" value="<?php echo $configuration_theme["code-google-analytics"]; ?>">
        </div>
    </div>
</div>

<div class="title-section">
    <h3><?php echo __( 'E-mail', 'clean-theme'); ?></h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="e-mail" class="control-label"><?php echo __( 'E-mail', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Escriba su correo electrónico de contacto', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="e-mail" name="e-mail" value="<?php echo $configuration_theme["e-mail"]; ?>">
        </div>
    </div>
</div>
