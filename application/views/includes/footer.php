<footer>
    <div class="container">
      <div class="row">
        <div class="col-md-12">
          <p><i class="fa fa-copyright"></i> Copyright 2020 by Grad School  
          
           | Design: <a href="https://templatemo.com" rel="sponsored" target="_parent">TemplateMo</a></p>
        </div>
      </div>
    </div>
  </footer>

  <!-- Scripts -->
  <!-- Bootstrap core JavaScript -->
    <script src="<?php echo base_url();?>vendor/jquery/jquery.min.js"></script>
    <script src="<?php echo base_url();?>vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

    <script src="<?php echo base_url();?>assetshome/js/isotope.min.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/owl-carousel.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/lightbox.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/tabs.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/video.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/slick-slider.js"></script>
    <script src="<?php echo base_url();?>assetshome/js/custom.js"></script>
    <script>
        //according to loftblog tut
        $('.nav li:first').addClass('active');

        var showSection = function showSection(section, isAnimate) {
          var
          direction = section.replace(/#/, ''),
          reqSection = $('.section').filter('[data-section="' + direction + '"]'),
          reqSectionPos = reqSection.offset().top - 0;

          if (isAnimate) {
            $('body, html').animate({
              scrollTop: reqSectionPos },
            800);
          } else {
            $('body, html').scrollTop(reqSectionPos);
          }

        };

        var checkSection = function checkSection() {
          $('.section').each(function () {
            var
            $this = $(this),
            topEdge = $this.offset().top - 80,
            bottomEdge = topEdge + $this.height(),
            wScroll = $(window).scrollTop();
            if (topEdge < wScroll && bottomEdge > wScroll) {
              var
              currentId = $this.data('section'),
              reqLink = $('a').filter('[href*=\\#' + currentId + ']');
              reqLink.closest('li').addClass('active').
              siblings().removeClass('active');
            }
          });
        };

        $('.main-menu, .scroll-to-section').on('click', 'a', function (e) {
          if($(e.target).hasClass('external')) {
            return;
          }
          e.preventDefault();
          $('#menu').removeClass('active');
          showSection($(this).attr('href'), true);
        });

        $(window).scroll(function () {
          checkSection();
        });
    </script>
</body>
</html>