<br>
<br>
<br>
<div class="align-center">
<nav aria-label="...">
  <ul class="pagination justify-content-center">
    <li class="page-item disabled">
      <span class="page-link">Previous</span>
    </li>
    <li class="page-item active"><a class="page-link" href="#">1</a></li>
    <li class="page-item ">
      <span class="page-link">
        2
        <span class="sr-only">(current)</span>
      </span>
    </li>
    <li class="page-item"><a class="page-link" href="#">3</a></li>
    <li class="page-item">
      <a class="page-link" href="#">Next</a>
    </li>
  </ul>
</nav>
</div>
</div>
    </div>
    </div>

<!--Modal Anuncios-->
<div class="modal" id='modalanuncio' tabindex="-1" role="dialog">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <div class="modal-header">
        <h5 class="modal-title">Modal title</h5>
        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
          <span aria-hidden="true">&times;</span>
        </button>
      </div>
      <div class="modal-body">
        <p>Modal body text goes here.</p>
      </div>
      <div class="modal-footer">
        <button type="button" class="btn btn-primary">Save changes</button>
        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
      </div>
    </div>
  </div>
</div>
<!--Cierre Modal Anuncios-->



<footer class="footer" data-background-color="black">
    <div class="container">
      <nav class="float-left">
        <ul>
          <li class="dropdown nav-item">
          <a href="#" class="dropdown-toggle nav-link" data-toggle="dropdown">
              <i class="material-icons">apps</i> Categorias
            </a>
            <div class="dropdown-menu dropdown-with-icons">
              <a href="./index.html" class="dropdown-item">
                <i class="material-icons">layers</i> All Components
              </a>
              <a href="https://demos.creative-tim.com/material-kit/docs/2.0/getting-started/introduction.html" class="dropdown-item">
                <i class="material-icons">content_paste</i> Documentation
              </a>
            </div>
          </li>
          <li>
            <a href="https://creative-tim.com/presentation">
              Nosostros
            </a>
          </li>
          <li>
            <a href="http://blog.creative-tim.com">
              Noticias
            </a>
          </li>
          <li>
            <a href="https://www.creative-tim.com/license">
              Eventos
            </a>
          </li>
        </ul>
      </nav>
      <div class="copyright float-right">
        &copy;
        <script>
          document.write(new Date().getFullYear())
        </script>, hecho con <i class="material-icons">favorite</i> por estudiantes del itla.
      </div>
    </div>
  </footer>
    <!--   Core JS Files   -->
  <script src="<?php echo base_url();?>assets/js/core/popper.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/core/bootstrap-material-design.min.js" type="text/javascript"></script>
  <script src="<?php echo base_url();?>assets/js/plugins/moment.min.js"></script>
   <!-- Control Center for Material Kit: parallax effects, scripts for the example pages etc -->
   <script src="<?php echo base_url();?>assets/js/material-kit.js?v=2.0.4" type="text/javascript"></script>
   <script src="<?php echo base_url();?>assets/js/lottie.js" type="text/javascript"></script>
  <script>
  function CrearLottie(element, archivo)
  {
    for (let index = 0; index < element.length; index++) {
      lottie.loadAnimation({
  container: element[index], // the dom element that will contain the animation
  renderer: 'svg',
  loop: true,
  autoplay: true,
  path: archivo // the path to the animation json
});
      
    }
     //lottie
    
  }
  $(document).ready(function() {
    $('#aregistro').click(function(){
      Mover_Bici_menu(2500,"910px","<?php echo base_url('Pagina_Principal/Registro#registrarse');?>");
    });
      //init DateTimePickers
     // materialKit.initFormExtendedDatetimepickers();
      // Sliders Init
     // materialKit.initSliders();
     CrearLottie($('.logoanimate'),'<?php echo base_url();?>assets/json/cycle_animation.json');
    });
  </script>
    <script>

    function scrollToIniciarSesion() {
      if ($('.section-signup').length != 0) {
        Mover_Bici_menu(2500,"810px","<?php echo base_url('.#contener-login');?>");
        $("html, body").animate({
          scrollTop: $('.section-signup').offset().top
        }, 1000);
      }
    }
    function Mover_Bici_menu(interval,left,action)
    {
      $('.logoanimate').animate({
      left: left
    }, interval,function(){href(action);});
    }
    function href (url)
     {
       if(url!=null)
       {
         window.location=url;
       }
     }
     function SubirAnuncios()
     {
      Mover_Bici_menu(2500,"1040px",null);
      <?php
      if(!isset($_SESSION["Apodo"]))
      {
        echo "setTimeout('scrollToIniciarSesion()',2500);";
      }
      else
      {
        echo "setTimeout('mostrarmodalanuncio()',2500);";
      }
      ?>
     }
    function mostrarmodalanuncio()
     {
      $('#modalanuncio').modal('show');
     }
    </script>
</body>
</html>