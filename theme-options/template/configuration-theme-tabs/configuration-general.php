<?php
	$configuration_theme = get_option("themeoption_configuration_general");
?>
<div class="title-section">
	<h3><i class="fas fa-user-cog"></i>  Configuración General</h3>
</div>

<?php //if( $isSuperAdmin == true ){ ?>
<!-- soy superadmin -->
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="code-google-analytics" class="control-label">ID de seguimiento Google Analytics</label>
            <span class="description-title">
                Pega aquí el ID de seguimiento de tu cuenta de Google Analytics
                ejemplo: "G-XXXXXXXXXX"
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="code-google-analytics" name="code-google-analytics" value="<?php echo $configuration_theme["code-google-analytics"]; ?>">
        </div>
    </div>
</div>

<?php// }?>
<div class="title-section">
    <h3>Correo Electrónico</h3>
</div>
<div class="form-group">
    <div class="row mb-3">
        <div class="col-lg-4 label-option">
            <span class="description-title">
                Escribe el e-mail en donde llegarán
                los mensajes de tu página del sitio.
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="e-mail" name="e-mail" value="<?php echo $configuration_theme["e-mail"]; ?>">
        </div>
    </div>
</div>

<div class="title-section">
    <h3>Telefono</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="phone" class="control-label">Telefono</label>
            <span class="description-title">
                Escribe el telefono en donde se reciben
                las llamadas de contacto.
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="phone" name="phone" value="<?php echo $configuration_theme["phone"];?>">
        </div>
    </div>
   
</div>

<div class="title-section">
    <h3>WhatsApp</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="whatsapp" class="control-label">WhatsApp</label>
            <span class="description-title">
                Escribe el telefono en donde se reciben
                whatsapp de contacto.
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="whatsapp" name="whatsapp" value="<?php echo $configuration_theme["whatsapp"];?>">
        </div>
    </div>

    <div class="row mt-3">
        <div class="col-lg-4 label-option">
            <label for="msg-whatsapp" class="control-label">Mensaje</label>
            <span class="description-title">
                Escribe el mensaje que para recibir 
                en whatsapp.
                ejemplo: ¡Hola!, Quisiera hacer un pedido
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="msg-whatsapp" name="msg-whatsapp" value="<?php echo $configuration_theme["msg-whatsapp"];?>">
        </div>
    </div>
</div>
<div class="title-section">
    <h3>Telegram</h3>
</div>
<div class="form-group">
    <div class="row">
        <div class="col-lg-4 label-option">
            <label for="telegram" class="control-label">Telegram</label>
            <span class="description-title">
                Escribe el usuario de 
                telegram.
                ejemplo: user01
            </span>
        </div>
        <div class="col-lg-8">
            <input class="form-control" id="telegram" name="telegram" value="<?php echo $configuration_theme["telegram"];?>">
        </div>
    </div>
</div>
