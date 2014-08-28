<?php get_header(); ?>
  
<!-- About Section --><!--/ About Section -->
<!-- Galeria de Fotos--><!--/Galeria de Fotos-->
<?php $pages = get_pages(array('sort_order' => 'DESC')); ?>
<?php foreach ( $pages as $page ) { ?>
  	<section class="success" id="<?php echo $page->post_name; ?>">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1><?php echo $page->post_title; ?></h1>
                </div>
            </div>
            <div class="row">
                <?php echo apply_filters('the_content', $page->post_content); ?>
            </div>
        </div>
    </section>
    <?php
    //echo '<pre>';
    //print_r($page);
    //echo '</pre>';
    ?>
<?php } ?>


 

    <!-- Contact Section -->
    <section id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h1>Faça uma aula experimental</h1>
                    <p>Preencha o Formulario abaixo:</p>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8 col-lg-offset-2">
                    <!-- To configure the contact form email address, go to mail/contact_me.php and update the email address in the PHP file on line 19. -->
                    <!-- The form should work on most web servers, but if the form is not working you may need to configure your web server differently. -->
                    <form action="contact_me.php" name="sentMessage" id="contactForm" novalidate>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Nome</label>
                                <input type="text" name="name" class="form-control" placeholder="Seu Nome" id="name" required data-validation-required-message="Digite seu Nome">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email"  placeholder="Seu Email" id="email" required data-validation-required-message="Digite seu endereço de e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Seu Numero</label>
                                <input type="tel" class="form-control" name="phone"  placeholder="Seu numero" id="phone" required data-validation-required-message="Digite seu Telefone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" name="message" placeholder="Sua Mensagem" id="message" required data-validation-required-message="Digite sua Mensagem"></textarea>
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <br>
                        <div id="success"></div>
                        <div class="row">
                            <div class="form-group col-xs-12">
                                <button type="submit" class="btn btn-success btn-lg">Enviar</button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>

<?php get_footer();?>
