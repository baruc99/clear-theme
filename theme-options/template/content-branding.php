<?php
	$branding = get_option("themeoption_branding");
?>
<!-- Branding - logos
============================================= -->
<div class="title-section">
	<h3><i class="fas fa-grin-alt"></i>  Branding</h3>
</div>
<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="favicon" class="control-label">
                Favicon
            </label>
            <span class="description-title">
                La medidas y formato del
                favicon deben ser de 32px o
                64px y pueden ser en formato
                .png
            </span>
        </div>
        <div class="col-lg-4">
        	<div class="widget-media col-md-6 text-center">
    			<?php if(isset($branding['favicon']) && !empty($branding['favicon'])){ ?>
                    <a title="Agregar favicon" id="favicon" onclick="Functions.addMedia('favicon', 'icon-favicon')" class="icon-favicon">
                        <img src='<?php echo $branding['favicon']; ?>'>
                    </a>
                <?php }else{ ?>
                    <a title="Asignar favicon" id="favicon" onclick="Functions.addMedia('favicon', 'icon-favicon')" class="icon-favicon">
                    	<img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png'>
                    	<p>
                        	Asignar favicon
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-favicon" <?php echo (isset($branding['favicon']) && !empty($branding['favicon'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-favicon" onclick="Functions.removeMedia('favicon')">Quitar favicon</a>
                </p>
                <input type="hidden" name="favicon" value="<?php echo $branding['favicon']; ?>">
        	</div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="logo-principal" class="control-label">
                Logo principal
            </label>
            <span class="description-title">
                La medidas y formato del
                favicon deben ser de 32px o
                64px y pueden ser en formato
                .jpg o .png
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
                            Asignar logo
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-logo-principal" <?php echo (isset($branding['logo-principal']) && !empty($branding['logo-principal'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-logo-principal" onclick="Functions.removeMedia('logo-principal')">Quitar logo</a>
                </p>
                <input type="hidden" name="logo-principal" value="<?php echo $branding['logo-principal']; ?>">
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="logo-principal" class="control-label">
                Logo principal - modo nocturno
            </label>
            <span class="description-title">
                Logo principal de la Secretaría en modo nocturno
                (Ancho maximo 255px). Formato .png fondo transparente
                (obligatorio)
            </span>
        </div>
        <div class="col-lg-4">
            <div class="widget-media col-md-6 text-center">
                <?php if(isset($branding['logo-principal-nocturno']) && !empty($branding['logo-principal-nocturno'])){ ?>
                    <a title="Agregar logo nocturno" id="logo-principal-nocturno" onclick="Functions.addMedia('logo-principal-nocturno', 'bg-logo-nocturno')" class="bg-logo-nocturno">
                        <img src='<?php echo $branding['logo-principal-nocturno']; ?>' width='120px'>
                    </a>
                <?php }else{ ?>
                    <a title="Agregar logo nocturno" id="logo-principal-nocturno" onclick="Functions.addMedia('logo-principal-nocturno', 'bg-logo-nocturno')">
                        <img src='<?php bloginfo('template_url'); ?>/theme-options/images/img-not-found.png' width='120px'>
                        <p>
                            Asignar logo
                        </p>
                    </a>

                <?php } ?>
                <p class="remove-p-logo-principal-nocturno" <?php echo (isset($branding['logo-principal-nocturno']) && !empty($branding['logo-principal-nocturno'])) ? " " : "style=display:none;"; ?>>
                    <a href="#" id="remove-logo-principal-nocturno" onclick="Functions.removeMedia('logo-principal-nocturno', 'bg-logo-nocturno')">Quitar logo</a>
                </p>
                <input type="hidden" name="logo-principal-nocturno" value="<?php echo $branding['logo-principal-nocturno']; ?>">
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<!-- Branding - Colores
============================================= -->
<!-- <div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="paleta-colores" class="control-label">
                Paleta de colores - Colores generales
            </label>
            <span class="description-title">
                Definir paleta de colores en general
            </span>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['title-color-g']) && !empty($branding['title-color-g'])) ? $branding['title-color-g'] : "#49453c"; ?>" name="title-color-g"> <span>Color para titulos (h1, h2, h3, h4, h4, h5, h6)</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['texto-color-g']) && !empty($branding['texto-color-g'])) ? $branding['texto-color-g'] : "#494339"; ?>" name="texto-color-g"> <span>Color para textos (span, p)</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['link-color-g']) && !empty($branding['link-color-g'])) ? $branding['link-color-g'] : "#DDDAD0"; ?>" name="link-color-g"> <span>Color para enlaces</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['bg-color-g']) && !empty($branding['bg-color-g'])) ? $branding['bg-color-g'] : "#C9B77C"; ?>" name="bg-color-g"> <span>Color para background</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['border-color-g']) && !empty($branding['border-color-g'])) ? $branding['border-color-g'] : "#dbba21"; ?>" name="border-color-g"> <span>Color para border</span>
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="paleta-colores" class="control-label">
                Paleta de colores - Header
            </label>
            <span class="description-title">
                Definir paleta de colores en el header
            </span>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['icons-header']) && !empty($branding['icons-header'])) ? $branding['icons-header'] : "#AA983F"; ?>" name="icons-header"> <span>Iconos header</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['bg-menu']) && !empty($branding['bg-menu'])) ? $branding['bg-menu'] : "#AA983F"; ?>" name="bg-menu"> <span>Background menú</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['a-menu']) && !empty($branding['a-menu'])) ? $branding['a-menu'] : "#DDDAD0"; ?>" name="a-menu"> <span>Link menú</span>
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div>

<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="paleta-colores" class="control-label">
                Paleta de colores - Footer
            </label>
            <span class="description-title">
                Definir paleta de colores en el Footer
            </span>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['title-color-footer']) && !empty($branding['title-color-footer'])) ? $branding['title-color-footer'] : "#FFFFFF"; ?>" name="title-color-footer"> <span>Títulos</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['parrafos-color-footer']) && !empty($branding['parrafos-color-footer'])) ? $branding['parrafos-color-footer'] : "#FFFFFF"; ?>" name="parrafos-color-footer"> <span>Parrafos y Links</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['bg-map-links']) && !empty($branding['bg-map-links'])) ? $branding['bg-map-links'] : "#cab87c"; ?>" name="bg-map-links"> <span>Background Mapa</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['bg-menu-footer']) && !empty($branding['bg-menu-footer'])) ? $branding['bg-menu-footer'] : "#7A6F44"; ?>" name="bg-menu-footer"> <span>Background Menu Footer</span>
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div> -->

<!-- Branding - sección servicios
============================================= -->
<!-- <div class="title-section">
    <h3>Branding Servicios</h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="paleta-colores" class="control-label">
                Paleta de colores - Sección de servicios
            </label>
            <span class="description-title">
                Definir paleta de colores en la sección de servicios en el Home
            </span>
        </div>
        <div class="col-lg-4">
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['title-color-servicio']) && !empty($branding['title-color-servicio'])) ? $branding['title-color-servicio'] : "#7F703F"; ?>" name="title-color-servicio"> <span>Título servicio</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['hover-title-servicio']) && !empty($branding['hover-title-servicio'])) ? $branding['hover-title-servicio'] : "#FFFFFF"; ?>" name="hover-title-servicio"> <span>Hover - Título servicio</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['box-color-servicio']) && !empty($branding['box-color-servicio'])) ? $branding['box-color-servicio'] : "#FFF4CE"; ?>" name="box-color-servicio"> <span>Caja de servicio</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['hover-box-servicio']) && !empty($branding['hover-box-servicio'])) ? $branding['hover-box-servicio'] : "#caa500"; ?>" name="hover-box-servicio"> <span>Hover - Caja de servicio</span>
            </div>
            <div class="form-group">
                <input type="color" value="<?php echo (isset($branding['border-box-servicio']) && !empty($branding['border-box-servicio'])) ? $branding['border-box-servicio'] : "#caa500"; ?>" name="border-box-servicio"> <span>Border de caja de servicio</span>
            </div>
        </div>
        <div class="offset-md-4"></div>
    </div>
</div> -->


<!-- Redes sociales
============================================= -->

<div class="title-section">
    <h3>Social media</h3>
</div>

<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="facebook-url" class="control-label">Facebook Url</label>
            <span class="description-title">
                Escribe la url de tu cuenta de
                facebook
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
            <label for="twitter-url" class="control-label">Twitter Url</label>
            <span class="description-title">
                Escribe la url de tu cuenta de
                Twitter
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="twitter-url" name="twitter-url" value="<?php echo $branding["twitter-url"]; ?>">
        </div>
    </div>
</div>
<!-- <div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="youtube-url" class="control-label">Youtube Url</label>
            <span class="description-title">
                Escribe la url de tu cuenta de
                Youtube
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="youtube-url" name="youtube-url" value="<?php// echo $branding["youtube-url"]; ?>">
        </div>
    </div>
</div> -->
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="instagram-url" class="control-label">Instagram Url</label>
            <span class="description-title">
                Escribe la url de tu cuenta de Instagram
            </span>
        </div>
        <div class="col-lg-9">
            <input class="form-control" id="instagram-url" name="instagram-url" value="<?php echo $branding["instagram-url"]; ?>">
        </div>
    </div>
</div>
