<?php get_header(); ?>
<div id="contacto" class="contet mx-auto pt-5 pb-5">
    <div  class="container">
        <div class="row justify-content-md-center">
            <div class="col-md-7">
                <div class="wp-block-button section-button">
                    <a class="wp-block-button__link">Si tienes alguna duda, comentario o sugerencia escríbenos.</a>
                </div>
                <form id="form-contacto">
                    <input type="hidden" name="config[template_name]" value="template_form_dinamic">
                    <input type="hidden" name="config[subject]" value="Ha recibido un mensaje nuevo de ...">
                    <div class="form-group">
                        <label for="nombre">Nombre</label>
                        <input type="text" class="form-control" name="nombre" required>
                    </div>
                    <div class="form-group">
                        <label for="Asunto">Asunto</label>
                        <input type="text" class="form-control" name="asunto" required>
                    </div>
                    <div class="form-group">
                        <label for="email">E-mail</label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="form-group">
                        <label for="mensaje">Mensaje</label>
                        <textarea class="form-control" name="mensaje" required></textarea>
                    </div>
                    <button type="submit" class="mt-4 btn-green">Enviar</button>
                </form>
            </div>
        </div>
    </div>
</div>
<?php get_footer(); ?>