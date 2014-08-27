<?php_header();?>
  
<!-- About Section -->
    <section class="success" id="about">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Sobre</h2><br>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-lg-offset-2">
                    <p class="text">Atuando na profissão há 16 anos e há 2 anos com treinamento funcional. Comecei com o treinamento funcional através de Carlos Espinheira, que trabalha há 8 anos com essa atividade.</p> <p>A ideia surgiu através da grande demanda de pessoas querendo fazer atividade física fora do ambiente de academia.</p>
                </div>
                <div class="col-lg-4">
                    <p class="large">"Foi o que me incentivou a querer atuar nessa área. Por ser um ambiente em que as pessoas tem um maior contato com a natureza, as atividades ficam mais prazerosas e lúdicas."</p>
                </div>
               <!-- <div class="col-lg-8 col-lg-offset-2 text-center">
                    <a href="#" class="btn btn-lg btn-outline">
                        <i class="fa fa-download"></i> Download Theme
                    </a>
                </div>-->
            </div>
        </div>
    </section>
    
    <!-- Galeria de Fotos-->
    <section id="portfolio">
        <div class="container">
            <div class="row">
                <div class="col-lg-12 text-center">
                    <h2>Fotos</h2>
                </div>
            </div>

            <div class="row">
                <div class="col-sm-4 portfolio-item"> 
                    <a href="#" data-gallery class="portfolio-link">
                       <div class="caption">
                                <div class="caption-content">
                                    <i class="fa fa-search-plus fa-3x"></i>
                                </div>
                            </div>
                       <div id="links">
                           <img src="img/portfolio/cabin.png" class=" thumbnail img-responsive" alt="Image">
                        </div>
                    </a>     
                </div>
            </div>
            <div class="col-xs-12 center">
                <button type="button" class="btn btn-success btn-lg">Ver Mais</button>
          </div>
        </div><!--/container-->
    </section>

 

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
                                <input type="text" class="form-control" placeholder="Seu Nome" id="name" required data-validation-required-message="Digite seu Nome">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Email</label>
                                <input type="email" class="form-control" placeholder="Seu Email" id="email" required data-validation-required-message="Digite seu endereço de e-mail.">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Seu Numero</label>
                                <input type="tel" class="form-control" placeholder="Seu numero" id="phone" required data-validation-required-message="Digite seu Telefone">
                                <p class="help-block text-danger"></p>
                            </div>
                        </div>
                        <div class="row control-group">
                            <div class="form-group col-xs-12 floating-label-form-group controls">
                                <label>Mensagem</label>
                                <textarea rows="5" class="form-control" placeholder="Sua Mensagem" id="message" required data-validation-required-message="Digite sua Mensagem"></textarea>
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
