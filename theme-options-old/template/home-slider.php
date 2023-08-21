<?php
    $home_slider = get_option("themeoption_home_slider");
?>
<div class="title-section mb-3">
    <h3><i class="far fa-images"></i>  <?php echo __( 'Slider', 'clean-theme'); ?></h3>
</div>
<div class="container">
    <div id="content-slider" class="mt-4">
        <p class="description-title">
            <?php echo __( 'El tamaño de las imagenes de esta sección debe ser del al menos 1776 x 850px preferentemente.', 'clean-theme'); ?>
        </p>

        <!--slide-1-->
        <div class="item-module item-slide">
            <a class="delete-item">
                <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
            </a>
            <div class="row no-gutters">
                <div class="col-md-3 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-0" src="<?php echo (!empty($home_slider['image_file_slide'][0])) ? $home_slider['image_file_slide'][0] : $url_default ; ?>">
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-10 sin-padding-left">
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_slide_0" name="image_file_slide[]" value="<?php echo esc_url($home_slider['image_file_slide'][0]); ?>" placeholder="Imagen slider 1">
                                </div>
                                <div class="col-md-2 sin-padding">
                                    <button onclick="Functions.uploadMediaWp('#image_file_slide_','.img-preview-', 0 )" type='button' class="form-btn-upload btn-upload btn-style" id="uploadimage0" data-index="0"/>
                                        <?php echo __( 'Subir', 'clean-theme'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_titulo_slide[]" id="image_titulo_slide_0" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_titulo_slide'][0]); ?>" placeholder="<?php echo __( 'Título 1', 'clean-theme'); ?>"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="image_subtitle_slide[]" id="image_subtitle_slide_0" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_subtitle_slide'][0]); ?>" placeholder="<?php echo __( 'SubTítulo1', 'clean-theme'); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_url_slide[]" id="image_url_slide_0" class="form-control input-sm regular-text" value="<?php echo esc_url($home_slider['image_url_slide'][0]); ?>" placeholder="Url 1"/>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="image_aling_slide_0" name="image_aling_slide[]">
                                <option value=""><?php echo __( 'Select aling text', 'clean-theme'); ?></option>
                                <option <?php echo ($home_slider["image_aling_slide"][0] == 'left') ? "selected='selected'" : ""; ?> value="left">
                                    <?php echo __( 'Alinear a la izquierda', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][0] == 'center') ? "selected='selected'" : ""; ?> value ="center">
                                    <?php echo __( 'Alinear a centro', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][0] == 'right') ? "selected='selected'" : ""; ?> value ="right">
                                    <?php echo __( 'Alinear a la derecha', 'clean-theme'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--slide-1-->

        <!--slide-2-->
        <div class="item-module item-slide">
            <a class="delete-item">
                <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
            </a>
            <div class="row no-gutters">
                <div class="col-md-3 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-1" src="<?php echo (!empty($home_slider['image_file_slide'][1])) ? $home_slider['image_file_slide'][1] : $url_default ; ?>">
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-10 sin-padding-left">
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_slide_1" name="image_file_slide[]" value="<?php echo esc_url($home_slider['image_file_slide'][1]); ?>" placeholder="Imagen slider 2">
                                </div>
                                <div class="col-md-2 sin-padding">
                                    <button onclick="Functions.uploadMediaWp('#image_file_slide_','.img-preview-', 1 )" type='button' class="form-btn-upload btn-upload btn-style" id="uploadimage1" data-index="1"/>
                                        <?php echo __( 'Subir', 'clean-theme'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_titulo_slide[]" id="image_titulo_slide_1" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_titulo_slide'][1]); ?>" placeholder="<?php echo __( 'Título 2', 'clean-theme'); ?>"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="image_subtitle_slide[]" id="image_subtitle_slide_1" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_subtitle_slide'][1]); ?>" placeholder="<?php echo __( 'SubTítulo 2', 'clean-theme'); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_url_slide[]" id="image_url_slide_1" class="form-control input-sm regular-text" value="<?php echo esc_url($home_slider['image_url_slide'][1]); ?>" placeholder="Url 2"/>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="image_aling_slide_1" name="image_aling_slide[]">
                                <option value="">Select aling text</option>
                                <option <?php echo ($home_slider["image_aling_slide"][1] == 'left') ? "selected='selected'" : ""; ?> value="left">
                                    <?php echo __( 'Alinear a la izquierda', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][1] == 'center') ? "selected='selected'" : ""; ?> value ="center">
                                    <?php echo __( 'Alinear al centro', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][1] == 'right') ? "selected='selected'" : ""; ?> value ="right">
                                    <?php echo __( 'Alinear a la derecha', 'clean-theme'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--slide-2-->
        
        <!--slide-3-->
        <div class="item-module item-slide">
            <a class="delete-item">
                <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
            </a>
            <div class="row no-gutters">
                <div class="col-md-3 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-2" src="<?php echo (!empty($home_slider['image_file_slide'][2])) ? $home_slider['image_file_slide'][2] : $url_default ; ?>">
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-10 sin-padding-left">
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_slide_2" name="image_file_slide[]" value="<?php echo esc_url($home_slider['image_file_slide'][2]); ?>" placeholder="Imagen slider 3">
                                </div>
                                <div class="col-md-2 sin-padding">
                                    <button onclick="Functions.uploadMediaWp('#image_file_slide_','.img-preview-', 2 )" type='button' class="form-btn-upload btn-upload btn-style" id="uploadimage2" data-index="2"/>
                                        <?php echo __( 'Subir', 'clean-theme'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_titulo_slide[]" id="image_titulo_slide_2" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_titulo_slide'][2]); ?>" placeholder="<?php echo __( 'Título 3', 'clean-theme'); ?>"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="image_subtitle_slide[]" id="image_subtitle_slide_2" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_subtitle_slide'][2]); ?>" placeholder="<?php echo __( 'SubTítulo 3', 'clean-theme'); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_url_slide[]" id="image_url_slide_2" class="form-control input-sm regular-text" value="<?php echo esc_url($home_slider['image_url_slide'][2]); ?>" placeholder="Url 3"/>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="image_aling_slide_1" name="image_aling_slide[]">
                                <option value="">Select aling text</option>
                                <option <?php echo ($home_slider["image_aling_slide"][2] == 'left') ? "selected='selected'" : ""; ?> value="left">
                                    <?php echo __( 'Alinear a la izquierda', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][2] == 'center') ? "selected='selected'" : ""; ?> value ="center">
                                    <?php echo __( 'Alinear al centro', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][2] == 'right') ? "selected='selected'" : ""; ?> value ="right">
                                    <?php echo __( 'Alinear a la derecha', 'clean-theme'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--slide-3-->

        <!--slide-4-->
        <div class="item-module item-slide">
            <a class="delete-item">
                <img title="Eliminar" src="<?php bloginfo('template_url') ?>/theme-options/images/btn-close.png">
            </a>
            <div class="row no-gutters">
                <div class="col-md-3 text-center">
                    <?php
                        $url_default = get_bloginfo('template_url')."/theme-options/images/img-not-found.png";
                    ?>
                    <img class="img-full img-preview-3" src="<?php echo (!empty($home_slider['image_file_slide'][3])) ? $home_slider['image_file_slide'][3] : $url_default ; ?>">
                </div>
                <div class="col-md-9">
                    <div class="form-group row">
                        <div class="col-md-12">
                            <div class="row no-gutters">
                                <div class="col-md-10 sin-padding-left">
                                    <input type="text" class="form-control form-upload input-sm" id="image_file_slide_3" name="image_file_slide[]" value="<?php echo esc_url($home_slider['image_file_slide'][3]); ?>" placeholder="Imagen slider 4">
                                </div>
                                <div class="col-md-2 sin-padding">
                                    <button onclick="Functions.uploadMediaWp('#image_file_slide_','.img-preview-', 3 )" type='button' class="form-btn-upload btn-upload btn-style" id="uploadimage3" data-index="3"/>
                                        <?php echo __( 'Subir', 'clean-theme'); ?>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_titulo_slide[]" id="image_titulo_slide_3" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_titulo_slide'][3]); ?>" placeholder="<?php echo __( 'Título 4', 'clean-theme'); ?>"/>
                        </div>
                        <div class="col-md-6">
                            <input type="text" name="image_subtitle_slide[]" id="image_subtitle_slide_3" class="form-control input-sm regular-text" value="<?php echo esc_html($home_slider['image_subtitle_slide'][3]); ?>" placeholder="<?php echo __( 'SubTítulo 4', 'clean-theme'); ?>"/>
                        </div>
                    </div>
                    <div class="form-group row">
                        <div class="col-md-6">
                            <input type="text" name="image_url_slide[]" id="image_url_slide_3" class="form-control input-sm regular-text" value="<?php echo esc_url($home_slider['image_url_slide'][3]); ?>" placeholder="Url 4"/>
                        </div>
                        <div class="col-md-6">
                            <select class="form-control" id="image_aling_slide_1" name="image_aling_slide[]">
                                <option value="">Select aling text</option>
                                <option <?php echo ($home_slider["image_aling_slide"][3] == 'left') ? "selected='selected'" : ""; ?> value="left">
                                    <?php echo __( 'Alinear a la izquierda', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][3] == 'center') ? "selected='selected'" : ""; ?> value ="center">
                                    <?php echo __( 'Alinear al centro', 'clean-theme'); ?>
                                </option>

                                <option <?php echo ($home_slider["image_aling_slide"][3] == 'right') ? "selected='selected'" : ""; ?> value ="right">
                                    <?php echo __( 'Alinear a la derecha', 'clean-theme'); ?>
                                </option>
                            </select>
                        </div>
                    </div>
                </div>
            </div>
        </div><!--slide-4-->
    </div>
</div>