</div>
    </div>
    </div>
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
      //init DateTimePickers
     // materialKit.initFormExtendedDatetimepickers();
      // Sliders Init
     // materialKit.initSliders();
     CrearLottie($('.logoanimate'),'<?php echo base_url();?>assets/Json/cycle_animation.json');
    });
  </script>
</body>
</html>