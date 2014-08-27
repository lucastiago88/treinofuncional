<!-- Footer -->
    <footer class="text-center">
        <div class="footer-above">
            <div class="container">
                <div class="row">
                    <div class="footer-col col-md-4">
                        <h3>Onde Treinamos</h3>
                        <p>Praia Jardim de Alah<br>Bairro: Armação, Em frente a antiga Sede de Praia do Esporte Clube Vitória</p>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Siga-nos</h3>
                        <ul class="list-inline">
                            <li>
                                <a href="https://www.facebook.com/carlinhostreinofuncional?ref=hl" target="_blank" class="btn-social btn-outline"><i class="fa fa-fw fa-facebook"></i></a>
                            </li>
                        </ul>
                    </div>
                    <div class="footer-col col-md-4">
                        <h3>Horário</h3>
                        <p>Segunda e Quarta: das 17:30 às 19:40</p>
                        <p>Sábado: das 05:30 às 07:30</p>
                        <p>Contato Profº Carlos: (71) 9243-5956</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-below">
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">
                        Copyright &copy; Treino Funcional 2014
                    </div>
                </div>
            </div>
        </div>
    </footer>

    <!-- Scroll to Top Button (Only visible on small and extra-small screen sizes) -->
    <div class="scroll-top page-scroll visible-xs visble-sm">
        <a class="btn btn-primary" href="#page-top">
            <i class="fa fa-chevron-up"></i>
        </a>
    </div>

   
    
    <div class="modal fade" id="myModal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
      <div class="modal-dialog">
        <div class="modal-content">         
          <div class="modal-body"> 
            <div style="height:25px;clear:both;display:block;">
                <a class="controls next" href="2">next »</a>
                <a class="controls previous" href="0" style="display: none;">« prev</a>
            </div>
          </div>
        </div><!-- /.modal-content -->
      </div><!-- /.modal-dialog -->
    </div><!-- /.modal -->
    
    <script>
    $(document).ready(function(){
           $('a img').on('click',function(){
                var src = $(this).attr('src');
                var img = '<img src="' + src + '" class="img-responsive"/>';
                $('#myModal').modal();
                $('#myModal').on('shown.bs.modal', function(){
                    $('#myModal .modal-body').html(img);
                });
                $('#myModal').on('hidden.bs.modal', function(){
                    $('#myModal .modal-body').html('');
                });
           });  
        })
     //new code
        $(document).on('click', 'a.controls', function(){
            var index = $(this).attr('href');
            var src = $('ul.row li:nth-child('+ index +') img').attr('src');             
            
            $('.modal-body img').attr('src', src);
            
            var newPrevIndex = parseInt(index) - 1; 
            var newNextIndex = parseInt(newPrevIndex) + 2; 
            
            if($(this).hasClass('previous')){               
                $(this).attr('href', newPrevIndex); 
                $('a.next').attr('href', newNextIndex);
            }else{
                $(this).attr('href', newNextIndex); 
                $('a.previous').attr('href', newPrevIndex);
            }
            
            var total = $('ul.row li').length + 1; 
            //hide next button
            if(total === newNextIndex){
                $('a.next').hide();
            }else{
                $('a.next').show()
            }            
            //hide previous button
            if(newPrevIndex === 0){
                $('a.previous').hide();
            }else{
                $('a.previous').show()
            }
            
            
            return false;
        });
        
    </script>
  
    <script src="http://blueimp.github.io/Gallery/js/jquery.blueimp-gallery.min.js"></script>
    <script src="<?php echo get_template_directory(); ?>/js/bootstrap-image-gallery.min.js"></script>
    <!-- Plugin JavaScript -->
    <script src="http://cdnjs.cloudflare.com/ajax/libs/jquery-easing/1.3/jquery.easing.min.js"></script>
    <script src="<?php echo get_template_directory(); ?>/js/classie.js"></script>
    <script src="<?php echo get_template_directory(); ?>/js/cbpAnimatedHeader.js"></script>
    <!-- Contact Form JavaScript -->
    <script src="<?php echo get_template_directory(); ?>/js/jqBootstrapValidation.js"></script>
    <script src="<?php echo get_template_directory(); ?>/js/contact_me.js"></script>
    <!-- Custom Theme JavaScript -->
    <script src="<?php echo get_template_directory(); ?>/js/freelancer.js"></script>

<?php wp_footer(); ?>

</body>

</html>