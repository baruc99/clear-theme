<?php
	$general_settings = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><i class="fas fa-globe"></i>  SEO</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="text-header-title" class="control-label">Título para el sitio web</label>
            <span class="description-title">
                Título del sitio web (requerido).
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="text-header-title" name="text-header-title" value="<?php echo esc_attr($general_settings["text-header-title"]); ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="text-descripcion-corta" class="control-label">Descripción Corta</label>
            <span class="text-descripcion-corta">
                En pocas palabras, explica de qué va este sitio (requerido).
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="text-descripcion-corta" name="text-descripcion-corta" value="<?php echo esc_attr($general_settings["text-descripcion-corta"]); ?>">
        </div>
    </div>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="keywords" class="control-label">Keywords</label>
            <span class="description-title">
                Describe tu sitio web con palabras clave separadas por coma, ejem: Veracruz, Gobierno del estado, Veracruz Oficial, Buen gobierno, etc.
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="keywords" name="keywords" value="<?php echo esc_attr($general_settings["keywords"]); ?>">
        </div>
    </div>
</div>