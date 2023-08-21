<?php
	$branding = get_option("themeoption_branding");
?>
<!-- Favicon
============================================= -->
<div class="title-section">
    <h3><i class="fas fa-grin-alt"></i>  <?php echo __( 'Marca', 'clean-theme'); ?></h3>
</div>
<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="favicon" class="control-label">
                <?php echo __( 'Favicon', 'clean-theme'); ?>
            </label>
            <span class="description-title">
                <?php echo __( 'Las medidas del favicon son de 64px x 64px en formato .png (requerido)', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-4">
            <div class="widget-media col-md-6 text-center">
                <?php if(isset($branding['favicon']) && !empty($branding['favicon'])){ ?>
                    <a title="Agregar favicon" id="favicon" onclick="Functions.addMedia('favicon')">
                        <img src='<?php echo $branding['favicon']; ?>' width='64px'>
                    </a>
                <?php }else{ ?>
                    <a title="Agregar favicon" id="favicon" onclick="Functions.addMedia('favicon')">
                        <img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png' width='64px'>
                        <p>
                            <?php echo __( 'Agregar favicon', 'clean-theme'); ?>
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-favicon" <?php echo (isset($branding['favicon']) && !empty($branding['favicon'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-favicon" onclick="Functions.removeMedia('favicon')"><?php echo __( 'Quitar favicon', 'clean-theme'); ?></a>
                </p>
                <input type="hidden" name="favicon" value="<?php echo $branding['favicon']; ?>">
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<!-- Branding - logos
============================================= -->
<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="logo-principal" class="control-label">
                <?php echo __( 'Logo principal', 'clean-theme'); ?>
            </label>
            <span class="description-title">
                <?php echo __( 'La medida recomendada para el logo es de 600px en formato .jpg or .png', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-4">
            <div class="widget-media col-md-6 text-center">
                <?php if(isset($branding['logo-principal']) && !empty($branding['logo-principal'])){ ?>
                    <a title="Agregar logo principal" id="logo-principal" onclick="Functions.addMedia('logo-principal')">
                        <img src='<?php echo $branding['logo-principal']; ?>' width='120px'>
                    </a>
                <?php }else{ ?>
                    <a title="Agregar logo principal" id="logo-principal" onclick="Functions.addMedia('logo-principal')">
                        <img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png' width='120px'>
                        <p>
                            <?php echo __( 'Agregar logo', 'clean-theme'); ?>
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-logo-principal" <?php echo (isset($branding['logo-principal']) && !empty($branding['logo-principal'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-logo-principal" onclick="Functions.removeMedia('logo-principal')"><?php echo __( 'Quitar logo', 'clean-theme'); ?></a>
                </p>
                <input type="hidden" name="logo-principal" value="<?php echo $branding['logo-principal']; ?>">
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<!-- Redes sociales
============================================= -->

<div class="title-section">
    <h3><?php echo __( 'Social media', 'clean-theme'); ?></h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="facebook-url" class="control-label"><?php echo __( 'Facebook Url', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Escriba la dirección de su cuenta de facebook', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="facebook-url" name="facebook-url" value="<?php echo $branding["facebook-url"]; ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="twitter-url" class="control-label"><?php echo __( 'Twitter Url', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Escriba la dirección de su cuenta de Twitter', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="twitter-url" name="twitter-url" value="<?php echo $branding["twitter-url"]; ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="youtube-url" class="control-label"><?php echo __( 'Youtube Url', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Escriba la dirección de su canal de
                Youtube', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="youtube-url" name="youtube-url" value="<?php echo $branding["youtube-url"]; ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="instagram-url" class="control-label"><?php echo __( 'Instagram Url', 'clean-theme'); ?></label>
            <span class="description-title">
                <?php echo __( 'Escriba la dirección de su cuenta de Instagram', 'clean-theme'); ?>
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="instagram-url" name="instagram-url" value="<?php echo $branding["instagram-url"]; ?>">
        </div>
    </div>
</div>
