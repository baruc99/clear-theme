<?php
	$home_slider = get_option("themeoption_home_slider");
    $args = array(
        'hide_empty' => true,
        "type"      => "post",
        "orderby"   => "name",
        "order"     => "ASC"
    );
    $categories = get_categories($args);
?>
<div class="title-section mb-3">
    <h3><i class="far fa-images"></i>  Slider</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="slider-active" class="control-label">Sección Slider</label>
            <span class="description-title">
                (Default : no)<br>
                Muestra sección slider en el home
            </span>
        </div>
        <div class="col-lg-8">
            <label class="switch top-switch">
                <input type="checkbox" id="slider-active" name="slider-active" <?php echo ( !empty($home_slider['slider-active']) ) ? 'checked' : ''; ?>>  Habilitar
                <div class="slider round"></div>
            </label>
        </div>
    </div>
    <div class="row mt-3">
        <div class="col-lg-4 label-option">
            <label for="slider-active" class="control-label">Tipo slider</label>
            <span class="description-title">
                (Default : por categoria)<br>
                Seleccionar tipo de slider ya sea por imagen independiente o por entrada asignada a una categoria
            </span>
        </div>
        <div class="col-lg-8">
            <div class="nav nav-pills" role="tablist">
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" data-toggle="collapse" data-target="#for_category" name="tipo_slider" id="por_categoria" value="por_categoria" >
                    <label class="form-check-label" for="por_categoria">Por categoria</label>
                </div>
                <div class="form-check form-check-inline">
                    <input class="form-check-input" type="radio" data-toggle="collapse" data-target="#for_imagen" name="tipo_slider" id="por_imagen" value="por_imagen">
                    <label class="form-check-label" for="por_imagen">Por Imagen</label>
                </div>
            </div>
        </div>
    </div>
</div>

<div class="form-group brd-section">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="num-videos" class="control-label">Número de sliders a mostrar</label>
            <span class="description-title">
                Número de slider a mostrar ( Default : 6 )
            </span>
        </div>
        <div class="col-lg-8">
            <input type="number" max="10" class="form-control" id="num-slider" name="num-slider" value="<?php echo esc_attr($home_slider["num-slider"]); ?>">
        </div>
    </div>
</div>

<div id="for_category" class="collapse show">
    <div class="form-group">
        <div class="row">
            <div class="col-lg-4 label-option">
                <label for="category-slider" class="control-label">Categoria para Slider Principal</label>
                <span class="description-title">
                   Elige la categoria que deseas Mostrar en el slider
                   Default: slider
                </span>
            </div>
            <div class="col-lg-8">
                <select class="form-control" id="category-slider" name="category-slider">
                    <option>Selecionar categoria</option>
                    <?php
                    foreach($categories as $category){ ?>
                        <option <?php echo ($home_slider["category-slider"] == $category->slug ) ? "selected='selected'" : ""; ?> value ="<?php echo $category->slug; ?>">
                            <?php echo $category->name; ?>
                        </option>";
                    <?php } ?>
                </select>
            </div>
        </div>
    </div>
</div>

<div id="for_imagen" class="collapse">
    Weekly
</div>





