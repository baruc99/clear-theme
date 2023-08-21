<?php
	$home_noticias = get_option("themeoption_home_noticias");
    $args = array(
        'hide_empty' => true,
        "type"      => "post",
        "orderby"   => "name",
        "order"     => "ASC"
    );
    $categories = get_categories($args);
?>
<div class="title-section mb-3">
    <h3><i class="far fa-newspaper"></i>  Noticias</h3>
</div>
<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="noticias-active" class="control-label">Sección Noticias y Timeline twitter</label>
            <span class="description-title">
                (Default : no)<br>
                Muestra sección noticias y timeline twitter en el home
            </span>
        </div>
        <div class="col-lg-9">
            <label class="switch top-switch">
                <input type="checkbox" id="noticias-active" name="noticias-active" <?php echo ( !empty($home_noticias['noticias-active']) ) ? 'checked' : ''; ?>>  Habilitar
                <div class="slider round"></div>
            </label>
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="titulo-noticias" class="control-label">Título</label>
            <span class="description-title">
                Escribe un título para la sección de noticias
            </span>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="titulo-noticias" name="titulo-noticias" value="<?php echo $home_noticias["titulo-noticias"]; ?>">
        </div>
    </div>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="category-noticias" class="control-label">Categoria sección noticias</label>
            <span class="description-title">
               Elige la categoria que deseas Mostrar en la sección de noticias
               Default: sin-categoria
            </span>
        </div>
        <div class="col-lg-9">
            <select class="form-control" id="category-noticias" name="category-noticias">
                <option>Selecionar categoria</option>
                <?php
                foreach($categories as $category){ ?>
                    <option <?php echo ($home_noticias["category-noticias"] == $category->slug ) ? "selected='selected'" : ""; ?> value ="<?php echo $category->slug; ?>">
                        <?php echo $category->name; ?>
                    </option>";
                <?php } ?>
            </select>
        </div>
    </div>
</div>

<!-------------------------->
<div class="title-section">
    <h3>Twitter</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-3 label-option">
            <label for="cuenta-twitter" class="control-label">Nombre del usuario de twitter</label>
            <span class="description-title">
                Por favor copie el usuarios de twitter "ejem: @usertw"
            </span>
        </div>
        <div class="col-lg-9">
            <input type="text" class="form-control" id="cuenta-twitter" name="cuenta-twitter" value="<?php echo esc_attr($home_noticias["cuenta-twitter"]); ?>">
        </div>
    </div>
</div>