<?php get_header(); ?>
  <section class="showcase">
      <div class="container">
        <h1><?php echo get_theme_mod('showcase_heading', 'Custom Bootstrap Wordpress Theme') ?></h1>
        <p><?php echo get_theme_mod('showcase_text', 'Sociis natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Aenean eu leo quam') ?></p>
        <a href="<?php echo get_theme_mod('btn_url', 'http://test.com') ?>" class="btn btn-primary btn-lg"><?php echo get_theme_mod('btn_text', 'Get Started') ?></a>
      </div>
    </section>

    <section class="boxes">
      <div class="container">
        <div class="row">
          <div class="col-md-4">
            <div class="box">
              <i class="fas fa-users"></i>
              <h3>Lorem Ipsum Dolor</h3>
              <p>Nascetur ridiculus mus. Aenean eu leo quam. Sociis natoque penatibus et magnis dis parturient montes</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fas fa-cogs"></i>
              <h3>Lorem Ipsum Dolor</h3>
              <p>Nascetur ridiculus mus. Aenean eu leo quam. Sociis natoque penatibus et magnis dis parturient montes</p>
            </div>
          </div>

          <div class="col-md-4">
            <div class="box">
              <i class="fas fa-search"></i>
              <h3>Lorem Ipsum Dolor</h3>
              <p>Nascetur ridiculus mus. Aenean eu leo quam. Sociis natoque penatibus et magnis dis parturient montes</p>
            </div>
          </div>
        </div>
      </div>
    </section>

<?php get_footer(); ?>