<?php
	$home_multimedia = get_option("themeoption_home_multimedia");
?>
<div class="title-section mb-3">
    <h3><i class="far fa-play-circle"></i>  Multimedia</h3>
</div>
<div class="form-group">
    <p>
        Para activar la galería en el home es necesario: <br>
        - Crear una categoria con el nombre "videos"<br>
        - Crear un post y asignarle la categoría videos <br>
        - Escribir una descripción para el video (opcional)<br>
        - Asignar una imagen destacada (opcional) <br>
        - Agregar la url del video de youtube (requerido)<br>
    </p>
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="multimedia-active" class="control-label">Sección Multimedia</label>
            <span class="description-title">
                (Default : no)<br>
                Muestra sección multimedia en el home
            </span>
        </div>
        <div class="col-lg-9">
            <label class="switch top-switch">
                <input type="checkbox" id="multimedia-active" name="multimedia-active" <?php echo ( !empty($home_multimedia['multimedia-active']) ) ? 'checked' : ''; ?>>  Habilitar
                <div class="slider round"></div>
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="num-videos" class="control-label">Número de videos a mostrar</label>
            <span class="description-title">
            Número de videos a mostrar en carrousel ( Default : 8 )
            </span>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="num-videos" name="num-videos" value="<?php echo esc_attr($home_multimedia ["num-videos"]); ?>">
        </div>
    </div>
</div>