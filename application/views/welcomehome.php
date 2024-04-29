<?php $this->load->view("includes/header"); ?>

<!-- ***** Main Banner Area Start ***** -->
<section class="section main-banner" id="top" data-section="section1">
  <video autoplay muted loop id="bg-video">
    <source src="<?php echo base_url(); ?>assetshome/images/course-video.mp4" type="video/mp4" />
  </video>

  <div class="video-overlay header-text">
    <div class="caption">
      <h6>Graduate School of Management</h6>
      <h2><em>Your</em> Classroom</h2>
      <div class="signin-button">
        <a href="<?php echo base_url(); ?>Auth/signin" target="_blank"><button type="submit"
            class="btn btn-warning">Sign-in <i class="fa fa-sign-in" aria-hidden="true"></i></button></a>
      </div>
    </div>
  </div>
</section>
<!-- ***** Main Banner Area End ***** -->


<section class="features">
  <div class="container">
    <div class="row">
      <div class="col-lg-4 col-12">
        <div class="features-post">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-pencil"></i>All Courses</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec
                maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div class="scroll"> <a href="<?php echo base_url(); ?>allcourse" target="_blank">click
                  here</a></div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-university" aria-hidden="true"></i></i>Fresh Admission</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec
                maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div class="scroll"><a href="<?php echo base_url(); ?>FreshAddmission/index" type="click">click here</a>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-lg-4 col-12">
        <div class="features-post second-features">
          <div class="features-content">
            <div class="content-show">
              <h4><i class="fa fa-graduation-cap"></i>Virtual Class</h4>
            </div>
            <div class="content-hide">
              <p>Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a posuere imperdiet. Donec
                maximus elementum ex. Cras convallis ex rhoncus, laoreet libero eu, vehicula libero.</p>
              <p class="hidden-sm">Curabitur id eros vehicula, tincidunt libero eu, lobortis mi. In mollis eros a
                posuere imperdiet.</p>
              <div class="scroll"><a href="<?php echo base_url(); ?>Virtual_details/index">Details</a></div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
</section>

<section class="section why-us" data-section="section2">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Why choose Delhi Public School?</h2>
        </div>
      </div>
      <div class="col-md-12">
        <div id='tabs'>
          <ul>
            <li><a href='#tabs-1'>Best Education</a></li>
            <li><a href='#tabs-2'>Top Management</a></li>
            <li><a href='#tabs-3'>Quality Meeting</a></li>
          </ul>
          <section class='tabs-content'>
            <article id='tabs-1'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-01.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Best Education</h4>
                  <p>Education means a lot to us, without education we are nothing. We get motivated towards the
                    education from our childhood by our parents and from teachers when we start going to school. If one
                    is getting proper education from childhood, doing a best investment of her life.<a href=""
                      target="_parent" rel="sponsored"> a little donation</a> Please tell your friends
                    about us. Thank you.</p>
                </div>
              </div>
            </article>
            <article id='tabs-2'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-02.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Top Level</h4>
                  <p>You can modify this HTML layout by editing contents and adding more pages as you needed. Since this
                    template has options to add dropdown menus, you can put many HTML pages.</p>
                  <p>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis
                    non ante.</p>
                </div>
              </div>
            </article>
            <article id='tabs-3'>
              <div class="row">
                <div class="col-md-6">
                  <img src="<?php echo base_url(); ?>assetshome/images/choose-us-image-03.png" alt="">
                </div>
                <div class="col-md-6">
                  <h4>Quality Meeting</h4>
                  <p>You are NOT allowed to redistribute this template ZIP file on any template collection website.
                    However, you can use this template to convert into a specific theme for any kind of CMS platform
                    such as WordPress. For more information, you shall <a rel="nofollow"
                      href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> now.</p>
                </div>
              </div>
            </article>
          </section>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="section video" data-section="section5">
  <div class="container">
    <div class="row">
      <div class="col-md-6 align-self-center">
        <div class="left-content">
          <span>our presentation is for you</span>
          <h4>Watch the video to learn more <em>about Grad School</em></h4>
          <p>You are NOT allowed to redistribute this template ZIP file on any template collection website. However, you
            can use this template to convert into a specific theme for any kind of CMS platform such as WordPress. You
            may <a rel="nofollow" href="https://templatemo.com/contact" target="_parent">contact TemplateMo</a> for
            details.
            <br><br>Suspendisse tincidunt, magna ut finibus rutrum, libero dolor euismod odio, nec interdum quam felis
            non ante.
          </p>
          <div class="main-button"><a rel="nofollow" href="https://fb.com/templatemo" target="_parent">External URL</a>
          </div>
        </div>
      </div>
      <div class="col-md-6">
        <article class="video-item">
          <div class="video-caption">
            <h4>Power HTML Template</h4>
          </div>
          <figure>
            <a href="https://www.youtube.com/watch?v=r9LtOG6pNUw" class="play"><img
                src="<?php echo base_url(); ?>assetshome//images/main-thumb.png"></a>
          </figure>
        </article>
      </div>
    </div>
  </div>
</section>

<section class="section contact" data-section="section6">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <div class="section-heading">
          <h2>Let’s Keep In Touch</h2>
        </div>
      </div>
      <div class="col-md-6">

        <!-- Do you need a working HTML contact-form script?
                  
                    Please visit https://templatemo.com/contact page -->

        <form id="contact" action="" method="post">
          <div class="row">
            <div class="col-md-6">
              <fieldset>
                <input name="name" type="text" class="form-control" id="name" placeholder="Your Name" required="">
              </fieldset>
            </div>
            <div class="col-md-6">
              <fieldset>
                <input name="email" type="text" class="form-control" id="email" placeholder="Your Email" required="">
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <textarea name="message" rows="6" class="form-control" id="message" placeholder="Your message..."
                  required=""></textarea>
              </fieldset>
            </div>
            <div class="col-md-12">
              <fieldset>
                <button type="submit" id="form-submit" class="button">Send Message Now</button>
              </fieldset>
            </div>
          </div>
        </form>
      </div>
      <div class="col-md-6">
        <div id="map">
          <iframe
            src="https://maps.google.com/maps?q=Av.+L%C3%BAcio+Costa,+Rio+de+Janeiro+-+RJ,+Brazil&t=&z=13&ie=UTF8&iwloc=&output=embed"
            width="100%" height="422px" frameborder="0" style="border:0" allowfullscreen></iframe>
        </div>
      </div>
    </div>
  </div>
</section>

<?php $this->load->view("includes/footer"); ?>