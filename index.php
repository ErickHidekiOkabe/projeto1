<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Cup Noodles</title>
  <?php include "inc/inc.css.php"; ?>
  <!-- <base href='http://localhost/landing-pages/cup-noodles/'> -->
  <base href='https://wondrous-figolla-60c520.netlify.app/'>
</head>

<body>
  <?php include "inc/header.php"; ?>

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////
                            START SECTION 2 - THE INTRO SECTION  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="home" class="intro-section">
    <div class="container">
      <div class="row align-items-center text-white">
        <!-- START THE CONTENT FOR THE INTRO  -->
        <div class="col-md-6 intros text-start">
          <h1 class="display-2">
            <span class="display-2--intro">Sabor Galinha Caipira</span>
            <span class="display-2--description lh-base">
              O sabor campeão da linha Cup Noodles!
            </span>
          </h1>
          <button type="button" class="rounded-pill btn-rounded">Veja mais!
            <span><i class="fas fa-arrow-right"></i></span>
          </button>
        </div>
        <!-- START THE CONTENT FOR THE VIDEO -->
        <div class="col-md-6 intros text-end">
          <img src="images/products/galinha-caipira.png" alt="Galinha Caipira">
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#ffffff" fill-opacity="1"
        d="M0,160L48,176C96,192,192,224,288,208C384,192,480,128,576,133.3C672,139,768,213,864,202.7C960,192,1056,96,1152,74.7C1248,53,1344,107,1392,133.3L1440,160L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                             START SECTION 3 - THE CAMPANIES SECTION  
////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="campanies" class="campanies">
    <div class="container">
      <div class="row text-center">
        <h4 class="fw-bold lead mb-3">Empresas que aprovam</h4>
        <div class="heading-line mb-5"></div>
      </div>
    </div>
    <!-- START THE CAMPANIES CONTENT  -->
    <div class="container">
      <div class="row">
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-1.png" alt="Campany 1 logo" title="Campany 1 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-2.png" alt="Campany 2 logo" title="Campany 2 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-3.png" alt="Campany 3 logo" title="Campany 3 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-4.png" alt="Campany 4 logo" title="Campany 4 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-5.png" alt="Campany 5 logo" title="Campany 5 Logo" class="img-fluid">
          </div>
        </div>
        <div class="col-md-4 col-lg-2">
          <div class="campanies__logo-box shadow-sm">
            <img src="images/campanies/campany-6.png" alt="Campany 6 logo" title="Campany 6 Logo" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- //////////////////////////////////////////////////////////////////////////////////////////////
                         START SECTION 4 - THE SERVICES  
///////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="services" class="services">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold">Receitas</h1>
        <div class="heading-line mb-1"></div>
      </div>
      <!-- START THE DESCRIPTION CONTENT  -->
      <div class="row pt-2 pb-2 mt-0 mb-3">
        <div class="col-md-6 border-right">
          <div class="bg-white p-3">
            <h2 class="fw-bold text-capitalize text-center">
              Confira nossas receitas práticas, deliciosas e surpreendentes.
            </h2>
          </div>
        </div>
        <div class="col-md-6">
          <div class="bg-white p-4 text-start">
            <p class="fw-light">
              Lorem ipsum dolor sit amet consectetur architecto magni,
              dicta maxime laborum temporibus dolorem esse doloremque illo quas nisi enim molestias.
              Tempore ducimus molestiae in dolore enim.
            </p>
          </div>
        </div>
      </div>
    </div>

    <!-- START THE CONTENT FOR THE SERVICES  -->
    <div class="container">
      <!-- START THE MARKETING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block"><i class="fas fa-utensils"></i></div>
            <h3 class="display-3--title mt-1">Bolinho Nissin Lamen</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded">Veja mais
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/products/bolinho-nissin-lamen.jpg" alt="Bolinho Nissin Lamen" class="img-fluid">
          </div>
        </div>
      </div>
      <!-- START THE WEB DEVELOPMENT CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-start">
          <div class="services__pic">
            <img src="images/products/canelone.jpg" alt="Canelone" class="img-fluid">
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block"><i class="fas fa-utensils"></i></div>
            <h3 class="display-3--title mt-1">Canelone</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded">Veja mais
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
      </div>
      <!-- START THE CLOUD HOSTING CONTENT  -->
      <div class="row">
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4">
          <div class="services__content">
            <div class="icon d-block"><i class="fas fa-utensils"></i></div>
            <h3 class="display-3--title mt-1">Espaguete Nissin ao Molho de Cerveja</h3>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi, impedit rem,
              doloremque autem quibusdam blanditiis harum alias hic accusantium
              maxime atque ratione magni repellat?
            </p>
            <button type="button" class="rounded-pill btn-rounded">Veja mais
              <span><i class="fas fa-arrow-right"></i></span>
            </button>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-12 col-xs-12 services mt-4 text-end">
          <div class="services__pic">
            <img src="images/products/espaguete-nissin-ao-molho-de-cerveja.jpg"
              alt="Espaguete Nissin ao Molho de Cerveja" class="img-fluid">
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- ////////////////////////////////////////////////////////////////////////////////////////////////
                               START SECTION 5 - THE TESTIMONIALS  
/////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="testimonials" class="testimonials">
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1"
        d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,0L1392,0C1344,0,1248,0,1152,0C1056,0,960,0,864,0C768,0,672,0,576,0C480,0,384,0,288,0C192,0,96,0,48,0L0,0Z">
      </path>
    </svg>
    <div class="container">
      <div class="row text-center text-white">
        <h1 class="display-3 fw-bold">Feedback</h1>
        <hr style="width: 100px; height: 3px; " class="mx-auto">
        <p class="lead pt-1">o que os clientes estão dizendo</p>
      </div>

      <!-- START THE CAROUSEL CONTENT  -->
      <div class="row align-items-center">
        <div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
          <div class="carousel-inner">
            <!-- CAROUSEL ITEM 1 -->
            <div class="carousel-item active">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae.
                  Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-1.jpg" alt="client-1 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Patrick Muriungi</h3>
                <p class="fw-light">CEO & founder</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 2 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae.
                  Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-2.jpg" alt="client-2 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Joy Marete</h3>
                <p class="fw-light">Finance Manager</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 3 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae.
                  Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-3.jpg" alt="client-3 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>ClaireBelle Zawadi</h3>
                <p class="fw-light">Global brand manager</p>
              </div>
            </div>
            <!-- CAROUSEL ITEM 4 -->
            <div class="carousel-item">
              <!-- testimonials card  -->
              <div class="testimonials__card">
                <p class="lh-lg">
                  <i class="fas fa-quote-left"></i>
                  Lorem ipsum dolor sit amet consectetur adipisicing elit.
                  Placeat aut consequatur illo animi optio exercitationem doloribus eligendi iusto atque repudiandae.
                  Distinctio.
                  <i class="fas fa-quote-right"></i>
                  <div class="ratings p-1">
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                    <i class="fas fa-star"></i>
                  </div>
                </p>
              </div>
              <!-- client picture  -->
              <div class="testimonials__picture">
                <img src="images/testimonials/client-4.jpg" alt="client-4 picture" class="rounded-circle img-fluid">
              </div>
              <!-- client name & role  -->
              <div class="testimonials__name">
                <h3>Uhuru Kenyatta</h3>
                <p class="fw-light">C.E.O & Founder</p>
              </div>
            </div>
          </div>
          <div class="text-center">
            <button class="btn btn-outline-light fas fa-long-arrow-alt-left" type="button"
              data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
            </button>
            <button class="btn btn-outline-light fas fa-long-arrow-alt-right" type="button"
              data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
            </button>
          </div>
        </div>
      </div>
    </div>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
      <path fill="#fff" fill-opacity="1"
        d="M0,96L48,128C96,160,192,224,288,213.3C384,203,480,117,576,117.3C672,117,768,203,864,202.7C960,203,1056,117,1152,117.3C1248,117,1344,203,1392,245.3L1440,288L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
      </path>
    </svg>
  </section>


  <!-- ///////////////////////////////////////////////////////////////////////////////////////////////////
                              START SECTION 7 - THE PORTFOLIO  
//////////////////////////////////////////////////////////////////////////////////////////////////////-->

  <section id="portfolio" class="portfolio">
    <div class="container">
      <div class="row text-center mt-5">
        <h1 class="display-3 fw-bold text-capitalize">Outros Sabores</h1>
        <div class="heading-line"></div>
        <p class="lead">
          Outros Sabores de Cup Noodles
        </p>
      </div>
      <!-- FILTER BUTTONS  -->
      <div class="row mt-5 mb-4 g-3 text-center">
        <div class="col-md-12">
          <button class="btn btn-outline-primary" type="button">Todos</button>
          <button class="btn btn-outline-primary" type="button">Carne</button>
          <button class="btn btn-outline-primary" type="button">Frango</button>
          <button class="btn btn-outline-primary" type="button">Diversos</button>
        </div>
      </div>

      <!-- START THE PORTFOLIO ITEMS  -->
      <div class="row">
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/bolonhesa.png" alt="Bolonhesa" title="Bolonhesa"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Bolonhesa</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/carne.png" alt="Carne" title="Carne"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Carne</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/cheddar.png" alt="Cheddar" title="Cheddar"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Cheddar</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/curry.png" alt="Curry" title="Curry"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Curry</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/galinha-caipira-picante.png" alt="Galinha Caipira Picante" title="Galinha Caipira Picante"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Galinha Caipira Picante</h4>
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-4 col-md-6">
          <div class="portfolio-box shadow">
            <img src="images/products/seafood.png" alt="Seafood" title="Seafood"
              class="img-fluid">
            <div class="portfolio-info">
              <div class="caption">
                <h4>Seafood</h4>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>

  <!-- /////////////////////////////////////////////////////////////////////////////////////////////////////////
              START SECTION 8 - GET STARTED  
/////////////////////////////////////////////////////////////////////////////////////////////////////////-->
  <section id="contact" class="get-started">
    <div class="container">
      <div class="row text-center">
        <h1 class="display-3 fw-bold text-capitalize">Contato</h1>
        <div class="heading-line"></div>
        <p class="lh-lg">
          Lorem ipsum, dolor sit amet consectetur adipisicing elit. Libero illum architecto modi.
        </p>
      </div>

      <!-- START THE CTA CONTENT  -->
      <div class="row text-white">
        <div class="col-12 col-lg-6 gradient shadow p-3">
          <div class="cta-info w-100">
            <h4 class="display-4 fw-bold">100% Satisfaction Guaranteed</h4>
            <p class="lh-lg">
              Lorem ipsum dolor sit amet consectetur adipisicing elit. Aperiam alias optio minima, tempore architecto
              sint ipsam dolore tempora facere laboriosam corrupti!
            </p>
            <h3 class="display-3--brief">What will be the next step?</h3>
            <ul class="cta-info__list">
              <li>We'll prepare the proposal.</li>
              <li>we'll discuss it together.</li>
              <li>let's start the discussion.</li>
            </ul>
          </div>
        </div>
        <div class="col-12 col-lg-6 bg-white shadow p-3">
          <div class="form w-100 pb-2">
            <h4 class="display-3--title mb-5">Entre em contato</h4>
            <form action="#" class="row">
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Nome" id="inputFirstName"
                  class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-6 col-md mb-3">
                <input type="text" placeholder="Sobrenome" id="inputLastName"
                  class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-12 mb-3">
                <input type="email" placeholder="E-mail" id="inputEmail"
                  class="shadow form-control form-control-lg">
              </div>
              <div class="col-lg-12 mb-3">
                <textarea name="message" placeholder="Mensagem" id="message" rows="8"
                  class="shadow form-control form-control-lg"></textarea>
              </div>
              <div class="text-center d-grid mt-1">
                <button type="button" class="btn btn-primary rounded-pill pt-3 pb-3">
                  Enviar
                  <i class="fas fa-paper-plane"></i>
                </button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </section>
  <?php include "inc/footer.php";?>
  <!-- BACK TO TOP BUTTON  -->
  <a href="#" class="shadow btn-primary rounded-circle back-to-top">
    <i class="fas fa-chevron-up"></i>
  </a>
  <?php include "inc/inc.js.php";?>
</body>

</html>