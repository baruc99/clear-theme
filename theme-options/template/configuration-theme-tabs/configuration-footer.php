<?php
	$configuration_theme = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><span class="dashicons dashicons-align-full-width"></span>  Configuración Footer</h3>
</div>
<!------------------------>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="banner-footer" class="control-label">
                Banner en footer
            </label>
            <span class="description-banner-footer">
                Banner posicionado en el footer por cada Secretaría.
            </span>
        </div>
        <div class="col-lg-4">
            <div class="widget-media col-md-8 text-center">
                <?php if(isset($configuration_theme['banner-footer']) && !empty($configuration_theme['banner-footer'])){ ?>
                    <a title="Agregar imagen en footer" id="banner-footer" onclick="Functions.addMedia('banner-footer')">
                        <img src='<?php echo $configuration_theme['banner-footer']; ?>'>
                    </a>
                <?php }else{ ?>
                    <a title="Agregar imagen en footer" id="banner-footer" onclick="Functions.addMedia('banner-footer')">
                        <img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png'>
                        <p>
                            Agregar imagen en footer
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-banner-footer" <?php echo (isset($configuration_theme['banner-footer']) && !empty($configuration_theme['banner-footer'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-banner-footer" onclick="Functions.removeMedia('banner-footer')">Quitar imagen en footer</a>
                </p>
                <input type="hidden" name="banner-footer" value="<?php echo $configuration_theme['banner-footer']; ?>">
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="footter-description" class="control-label">Datos de contacto y dirección de la dependencia.</label>
            <span class="description-title">
                Escribe los datos de contacto y dirección de la dependencia.
            </span>
        </div>
        <div class="col-lg-8">
            <textarea class="form-control" id="footer-description" name="footer-description" rows="3"><?php echo $configuration_theme["footer-description"]; ?></textarea>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="text-header-title" class="control-label">Texto para latitud y longitud de donde se ubica la secretaría</label>
            <span class="description-title">
                19.5632994,-96.9321236
            </span>
        </div>
        <div class="col-lg-8">
            <input type="text" class="form-control" id="lat-lng" name="lat-lng" value="<?php echo esc_attr($configuration_theme["lat-lng"]); ?>">
        </div>
    </div>
</div>