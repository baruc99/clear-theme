var Functions = {
	templateUrl: theme_metadata.templateUrl,
	init: function(){
		Functions.open_submenu()
				 .remove_active()
				 .uploadMediaWp()
				 .addMorePatrocinador()
				 .addVideoGaleria()
				 .saveThemeOption();
	},
	addMedia: function(click_media, size = ''){
		var uploadButton =  jQuery(document);
		var mediaUploader;
		var self;
		console.log(uploadButton);

		uploadButton.off('click').on('click','#'+click_media, function(){
			var button = jQuery(this);
			index = button.data('index');
			title = button.attr('title');

			if (mediaUploader) {
				mediaUploader.open();
				return;
			}

			mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Selecciona la imagen del servicio',
				button: {
					text: title
				},
				library : {
					type : 'image'
				},
				multiple: false
			});

			self = $(this);
			mediaUploader.on('select', function() {
				attachment = mediaUploader.state().get('selection').first().toJSON();

				var imagen_use = attachment;
				if(size !== null && size !== ''){
					imagen_use = attachment.sizes;

					console.log(Object.assign({}, imagen_use));
					//console.log(attachment.sizes.'img-default'.url);

					/*var url = Object.keys(imagen_use);
					var keys = url[5];

					console.log(Object.values(imagen_use));*/

				}

				jQuery("input[name='"+click_media+"']").val(attachment.url);

			
				button.html("<img src='"+attachment.url+"' width='120px'>");

				if(attachment.url != ''){
					jQuery( '.remove-p-'+click_media).css('display', 'block');
				}else{
					jQuery( '.remove-p-'+click_media).css('display', 'none');
				}
			});

			mediaUploader.open();
			return false;
		});
	},
	addMediaVideo: function(click_media){
		var uploadButton =  jQuery(document);
		var mediaUploader;
		var self;

		uploadButton.off('click').on('click','#'+click_media, function(){
			var button = jQuery(this);

			if (mediaUploader) {
				mediaUploader.open();
				return;
			}

			mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Selecciona la imagen del servicio',
				button: {
					text: 'Load Video'
				},
				library : {
					type : 'video'
				},
				multiple: false
			});

			self = $(this);
			mediaUploader.on('select', function() {
				attachment = mediaUploader.state().get('selection').first().toJSON();
				jQuery("input[name='url_video']").val(attachment.url);
			});

			mediaUploader.open();
			return false;
		});
	},
	removeMedia: function(click_media, class_custom =''){
		var img_content =   "<img src='"+this.templateUrl+"/theme-options/images/img-not-found.png' width='60px'>";
			img_content +=  "<p> Asignar logo</p>";
		var button = jQuery("#"+click_media);
		jQuery(document).on('click', '#remove-'+click_media , function(event) {
			event.preventDefault();
			jQuery( "input[name*='"+click_media+"']" ).val('');
			button.html(img_content);
			button.removeClass(class_custom);
			jQuery( '.remove-p-'+click_media).css('display', 'none');
		});
		return this;
	},
	uploadMediaWp: function(inputfile, imgprev, index){
		var uploadButton =  jQuery(document);
		var mediaUploader;
		var inputfile = inputfile;
		var self;
		console.log(inputfile);

		uploadButton.off('click').on('click','.btn-upload', function(){
			var button = jQuery(this);
			index = jQuery(this).data('index');

			if (mediaUploader) {
				mediaUploader.open();
				return;
			}

			mediaUploader = wp.media.frames.file_frame = wp.media({
				title: 'Selecciona la imagen del slide',
				button: {
					text: 'Selecciona la imagen del slide'
				},
				library : {
					type : 'image'
				},
				multiple: false
			});

			self = $(this);
			mediaUploader.on('select', function() {
				
				attachment = mediaUploader.state().get('selection').first().toJSON();
	
				console.log(attachment);
				
				$(self).closest('.item-slide').addClass('active-parent');
				//console.log(inputfile + index);
				jQuery( inputfile + index ).val(attachment.url);
				jQuery( imgprev + index ).attr('src', attachment.url);
			});

			mediaUploader.open();
			return false;
		});
		return this;
	},
	open_submenu: function(){
		$('.open-submenu > a').on("click", function(e){
			e.preventDefault();

			if($(this).parent().find('.sub-menu').hasClass('d-none')){
				$('.sub-menu').addClass('d-none');
				$('.sub-menu').removeClass('d-block');
				$(this).parent().find('.sub-menu').addClass('d-block');
				$(this).parent().find('.sub-menu').removeClass('d-none');
			}else{
				$('.sub-menu').addClass('d-block');
				$('.sub-menu').removeClass('d-none');
				$(this).parent().find('.sub-menu').addClass('d-none');
				$(this).parent().find('.sub-menu').removeClass('d-block');
			}
			

		});
		return this;
	},
	remove_active: function(){
		$('.open-submenu .sub-menu a').click(function(){
			$(this).addClass('active');
			$('.sub-menu .nav-link').removeClass('active');
		});
		return this;
	},
    exec_dragdrop: function(){
        jQuery( "#content-form" ).sortable({
          placeholder: "ui-state-highlight"
        });
        jQuery( "#content-form" ).disableSelection();
        return this;
	},
	addMorePatrocinador: function(){
		var addmoreitem = jQuery(document);
		var deleteitem =  jQuery(document);

		Functions.uploadMediaWp('#image_file_aliados_', '.img-preview-service-g-');
		addmoreitem.on('click', '.btn-add-more-patrocinador', function(){
			var num_sliders = jQuery("#content-patrocinador .item-patrocinador").length;
			jQuery("#add-more-patrocinador").remove();
			var form_slider =   "<div class='item-module item-patrocinador'>";
					form_slider +=	"<a class='delete-item'>";
					form_slider +=		"<img src='"+Functions.templateUrl+"/theme-options/images/btn-close.png'>";
					form_slider +=  "</a>";
					form_slider +=	"<div class='row no-gutters'>";
						form_slider +=	"<div class='col-md-10'>";
						form_slider +=		"<div class='form-group row'>";
						form_slider +=			"<label for='content' class='col-md-2 control-label'>Imagen</label>";
						form_slider +=			"<div class='col-md-10'>";
						form_slider +=				"<div class='row no no-gutters'>";
							form_slider +=				"<div class='col-md-10 sin-padding-left'>";
							form_slider +=					"<input type='text' class='form-control form-upload input-sm' id='image_file_aliados_"+num_sliders+"' name='image_file_aliados[]'>";
							form_slider +=				"</div>";
							form_slider +=				"<div class='col-md-2 sin-padding'>";
							form_slider +=					"<input type='button' class='form-btn-upload btn-upload btn-style' value='Subir' id='uploadimage"+num_sliders+"' data-index='"+num_sliders+"'/>";
							form_slider +=				"</div>";
						form_slider +=				"</div>";
						form_slider +=			"</div>";
						form_slider +=		"</div>";
						form_slider +=		"<div class='form-group row'>";
						form_slider +=          "<label for='image_titulo_aliados_"+num_sliders+"' class='col-md-2 control-label'>Título</label>";
						form_slider +=          "<div class='col-md-10'>";
						form_slider +=         		"<input type='text' name='image_titulo_aliados[]' id='image_titulo_aliados_"+num_sliders+"' class='form-control input-sm regular-text' required/>";
						form_slider +=          "</div>";
						form_slider +=      "</div>";
						form_slider +=		"<div class='form-group row'>";
						form_slider += 			"<label for='image_url_"+num_sliders+"' class='col-md-2 control-label'>Url</label>";
						form_slider +=			"<div class='col-md-10'>";
						form_slider +=				"<input type='text' name='image_url_aliados[]' id='image_url_aliados_"+num_sliders+"' class='form-control input-sm regular-text'/>";
						form_slider +=			"</div>";
						form_slider +=		"</div>";
						form_slider +=	"</div>";
						form_slider +=  "<div class='col-md-2 text-center'>";
	                    form_slider +=  	"<img class='img-full img-preview-service-g-"+num_sliders+"' src='"+Functions.templateUrl+"/theme-options/images/img-not-found.png'>";
	        			form_slider +=  "</div>";
					form_slider +=	"</div>";
				form_slider +=  "</div>";
				form_slider += "<input type='button' id='add-more-patrocinador' class='btn btn-default btn-add-more-patrocinador' value='Agregar más'>";
				jQuery("#content-patrocinador").append(form_slider);
		});
		deleteitem.on('click', '.delete-item' ,function() {
			jQuery(this).parent().remove();
		});
		return this;
	},
	youtube_parser: function(url){
	    var regExp = /^.*((youtu.be\/)|(v\/)|(\/u\/\w\/)|(embed\/)|(watch\?))\??v?=?([^#&?]*).*/;
	    var match = url.match(regExp);
	    return (match&&match[7].length==11)? match[7] : false;
	},
	addVideoGaleria: function(){
		var addmoreitem = jQuery(document);
		var deleteitem =  jQuery(document);
		var index = jQuery('#content-galeria-videos').data('index');

		addmoreitem.on('click', '.btn-add-more-video', function(){
			//var num_sliders = jQuery("#content-galeria-videos .item-video").length;
			jQuery("#add-more-video").remove();
			var form_slider =   "<div class='item-module item-video'>";
					form_slider +=	"<a class='delete-item'>";
					form_slider +=		"<img src='"+Functions.templateUrl+"/theme-options/images/btn-close.png'>";
					form_slider +=  "</a>";
					form_slider +=	"<div class='row no-gutters'>";
						form_slider +=	"<div class='col-md-12'>";
						form_slider +=		"<div class='form-group row'>";
						form_slider +=          "<label for='titulo_video_youtube_"+index+"' class='col-md-2 control-label'>Título</label>";
						form_slider +=          "<div class='col-md-10'>";
						form_slider +=         		"<input type='text' name='titulo_video_youtube[]' id='titulo_video_youtube_"+index+"' class='form-control input-sm regular-text' required/>";
						form_slider +=          "</div>";
						form_slider +=      "</div>";
						form_slider +=		"<div class='form-group row'>";
						form_slider += 			"<label for='image_url_"+index+"' class='col-md-2 control-label'>Url Youtube</label>";
						form_slider +=			"<div class='col-md-10'>";
						form_slider +=				"<input type='text' name='url_video_youtube[]' id='url_video_youtube_"+index+"' class='form-control input-sm regular-text' required/>";
						form_slider +=			"</div>";
						form_slider +=		"</div>";
						form_slider +=	"</div>";
					form_slider +=	"</div>";
				form_slider +=  "</div>";
				form_slider += "<input type='button' id='add-more-video' class='btn btn-default btn-add-more-video' value='Agregar más'>";
				jQuery("#content-galeria-videos").append(form_slider);
				
				index+=1;
				console.log(index);
		});
		deleteitem.on('click', '.delete-item' ,function() {
			jQuery(this).parent().remove();
			//var num_sliders = jQuery("#content-galeria-videos .item-video").length;
			//jQuery('#content-galeria-videos').attr('data-index', num_sliders);
			//var number = parseInt(index);
			//jQuery('#content-galeria-videos').attr('data-index', number+1);
		});
		return this;
	},
	saveThemeOption: function(){
		jQuery("#theme-options-panel").submit(function(event){
			event.preventDefault();
			var self = jQuery(this);
			var data = self.serializeArray();
			jQuery.ajax({
				url: ajaxurl,
				type: 'post',
				dataType: 'json',
				data: data,
				beforeSend: function() {
			        $(self).find('.spin-loader').removeClass('fas fa-save');
					$(self).find('.spin-loader').addClass('fas fa-spinner fa-spin');
			    },
				success: function(json){
					console.log('Datos guardados');
				},
				complete: function() {
					$(self).find('.spin-loader').removeClass('fa-spinner fa-spin');
					$(self).find('.spin-loader').addClass('fas fa-check');
			    },
			    error: function(xhr) {
			        console.log("Error occured.please try again");
			        $(self).find('.spin-loader').removeClass('fa-spinner fa-spin');
					$(self).find('.spin-loader').addClass('fas fa-exclamation-triangle');
			    }
			});
		});
		return this;
	}
};
jQuery(document).on('ready', Functions.init);
