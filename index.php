<?php include 'assets/php/header.php'; ?>
<?php 

	// Sets language if user deliberately sets it
	if (isset($_GET['lang'])) {
		 $_SESSION['lang'] = $_GET['lang'];
		}
		// Checks if a session for language has been started
	if (isset($_SESSION['lang'])) {
		$lang = $_SESSION['lang'];
	} else {
		// Sets language from user browser
		$lang = substr($_SERVER['HTTP_ACCEPT_LANGUAGE'], 0, 2);
	}

	// Determins what language to show
	switch ($lang){
		case "es":
        header("Location: " . $rootUrl . "es/");
				break;
	}
    
?>
<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="Get a web design and logo design that attracts clients. Digital marketing strategy.">
    <meta name="keywords" content="web design company, web designer, web design company, digital marketing agency, logo design">

    <!-- Global site tag (gtag.js) - Google Analytics -->
  <script async src="https://www.googletagmanager.com/gtag/js?id=UA-87709644-1"></script>
  <script>
    window.dataLayer = window.dataLayer || [];
    function gtag(){dataLayer.push(arguments);}
    gtag('js', new Date()); gtag('config', 'UA-87709644-1');
  </script>

  <!-- Meta Pixel Code -->
  <script>
    !function(f,b,e,v,n,t,s)
    {if(f.fbq)return;n=f.fbq=function(){n.callMethod?
    n.callMethod.apply(n,arguments):n.queue.push(arguments)};
    if(!f._fbq)f._fbq=n;n.push=n;n.loaded=!0;n.version='2.0';
    n.queue=[];t=b.createElement(e);t.async=!0;
    t.src=v;s=b.getElementsByTagName(e)[0];
    s.parentNode.insertBefore(t,s)}(window, document,'script',
    'https://connect.facebook.net/en_US/fbevents.js');
    fbq('init', '1673990619633186');
    fbq('track', 'PageView');
    </script>
    <noscript><img height="1" width="1" style="display:none"
    src="https://www.facebook.com/tr?id=1673990619633186&ev=PageView&noscript=1"/></noscript>
    <!-- End Meta Pixel Code -->

    <title>Web Design, logo design and digital marketing strategy - IntelAtlas - Tucson, AZ</title> 
    <!-- Favicons -->
    <link href="assets/img/favicon.png" rel="icon">
    <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Vendor CSS Files -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-0evHe/X+R7YkIZDRvuzKMRqM+OrBnVFBL6DOitfPri4tjfHxaWutUpFmBp4vmVor" crossorigin="anonymous">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css"/>

    <!-- Template Main CSS File -->
    <link href="assets/css/style.css?a=7" rel="stylesheet">  
</head>
  <body>

    <div class="container">
      <header class="blog-header lh-1 py-1">
        <div class="row flex-nowrap justify-content-between align-items-center">
          <div class="col-8">
            <a href="tel: 15209558534" class="text-secondary btn btn-sm btn-call"><i class='bx bx-phone-outgoing contactIcon'></i> Call Us <span class="hidden-mobile">+1 520-955-8534</span></a>
          </div>
          <div class="col-4 d-flex justify-content-end align-items-center">
            <a class="nav-link" href="<?php echo $rootUrl; ?>es/?lang=es" ><i class='bx bx-globe'></i> Español</a>
          </div>
        </div>
      </header>
    </div>
<!-- ======= Navbar ======= -->
<div class="container-fluid navbar-main sticky-top shadow-lg">
  <div class="container">
    <header class="">
      <div class="row flex-nowrap justify-content-between align-items-center">
        <div class="col-2">
          <a class="logo display-5 fw-normal hero-logo" href="<?php echo $rootUrl; ?>">I<span class="logo-blue">A</span></a>
        </div>
        <div class="col-3 col-lg-6">
          <nav class="navbar navbar-expand-lg navbar-dark" aria-label="Offcanvas navbar large">
            <div class="container-fluid">
              <button class="navbar-toggler" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasNavbar2" aria-controls="offcanvasNavbar2">
                <span class="navbar-toggler-icon"></span>
              </button>
              <div class="offcanvas offcanvas-end text-bg-dark" tabindex="-1" id="offcanvasNavbar2" aria-labelledby="offcanvasNavbar2Label">
                <div class="offcanvas-header">
                  <h5 class="offcanvas-title" id="offcanvasNavbar2Label">Menu</h5>
                  <button type="button" class="btn-close" data-bs-dismiss="offcanvas" aria-label="Close"></button>
                </div>
                <div class="offcanvas-body d-flex justify-content-lg-end">
                  <ul class="navbar-nav mb-2 mb-md-0 text-uppercase">
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $rootUrl; ?>online-store">Online Store</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="<?php echo $rootUrl; ?>web-design">Web Design</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="#contact">Contact</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link text" href="https://www.bluehost.com/track/intelatlas/" target="_blank">Bluehost</a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </nav>
        </div>
      </div>
    </header>   
  </div>   
</div> 

  <main id="main">

    <div class="container-fluid pt-3 banner shadow">  
      <div class="container mt-3">           
        <h1 class="text-secondary animate__animated animate__bounceInDown text-uppercase punchLine fw-bold">Web Design, logo design and digital marketing</h1>
        <p class="fs-6 animate__animated animate__delay-1s animate__fadeInUpBig text-secondary">Boost your digital marketing strategy with a custom web design and logo design</p>        
      </div>
    </div>
    <img class="img-fluid animate__animated animate__fadeInUpBig banner-img center" src="assets/img/web-design-examples-by-intelatlas.png" alt="">
      

    <!-- ======= Services Section ======= -->
    <section id="services" class="services">
      <div class="container my-5">

        <div class="section-title text-center mb-5">
          <h2 class="fw-bold text-secondary text-uppercase">Top Web Services</h2>
          <p>Get services that can help your business thrive</p>
        </div>

        <div class="row text-secondary">
          <div class="col-lg-6 order-2 order-lg-1">
            <div class="icon-box mt-5 mt-lg-0">
              <i class="bx bx-images"></i>
              <h4>Web Design</h4>
              <p>Get a custom website design to showcase your products and services</p>
            </div>
            <div class="icon-box mt-5">
              <i class="bx bx-brush"></i>
              <h4>Logo Design</h4>
              <p>Get 3 logo designs concepts and unlimited revision for only $95</p>
            </div>
            <div class="icon-box mt-5">
              <i class='bx bx-shopping-bag'></i>
              <h4>Online Store</h4>
              <p>Sell online everywhere from your own website</p>
            </div>
            <div class="icon-box mt-5">
              <i class='bx bx-radar'></i>
              <h4>Digital Marketing Strategy</h4>
              <p>Promote your brand with our ads strategies on Google, Facebook and more</p>
            </div>
          </div>
          <div class="image col-lg-6 order-1 order-lg-2 shadow" style='background-image: url("assets/img/web-services.webp");'></div>
        </div>

      </div>
    </section><!-- End Services Section -->

    <!-- ======= Contact Section ======= -->
    <div id="contact" class="container col-xl-10 col-xxl-8 px-4 py-5">
      <div class="row align-items-center g-lg-5 py-5">
        <div class="col-lg-7 text-center text-lg-start">
          <h2 class="display-5 text-dark mainFont">Ready, Set, Contact!</h2>
          <p class="text-muted">We are ready to help your business grow</p>
            <nav class="d-grid gap-2 col-md-8 mt-4">
              <a href="tel:520-955-8534" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                <i class="bx bx-phone-call display-5 contactIcon"></i>
                <div>
                  <strong class="d-block">Call Us</strong>
                  <p>+1-520-955-8534</p>
                </div>
              </a>
              <a href="https://goo.gl/maps/ub3fAZdzmcvHhuXz8" target="_blank" class="btn btn-hover-light rounded-2 d-flex align-items-center gap-3 py-2 px-3 lh-sm text-start">
                <i class='bx bx-map-pin display-5 contactIcon' ></i>
                <div>
                  <strong class="d-block">Visit Us</strong>
                  <p>1690 N Stone Ave Suite 217<br>Tucson, AZ 85705</p>
                </div>
              </a>
            </nav>
        </div>
        <div class="col-md-10 mx-auto col-lg-5">
          <form action="assets/php/contact.php" method="post" role="form" class="p-3 shadow rounded-3 bg-light">
              <div class="form-floating my-3">
                <input type="text" name="name" class="form-control" placeholder="Your Name" required>
                <label for="floatingInput">Enter Name</label>
              </div>
              <div class="form-floating mb-3">
                <input type="email" class="form-control" name="email" placeholder="Your Email" required>
                <label for="floatingInput">Enter Email</label>
              </div>
            <div class="form-floating mb-3">
              <input type="text" class="form-control" name="phone" placeholder="Phone" required>
              <label for="floatingInput">Enter Phone</label>
            </div>
            <div class="form-group my-3">
              <textarea class="form-control" name="message" rows="3" placeholder="Tell us a little about your project..." required></textarea>
            </div>
            <button class="w-100 btn btn-get-started" type="submit">Send Message</button>            
          </form>
        </div>
      </div>
    </div>
    <!-- ======= Frequently Asked Questions Section ======= -->
    <section id="faq" class="faq bg-light py-3">
      <div class="container">

        <div class="section-title my-5">
          <h2 id="faqTittle" class="text-center">FREQUENTLY ASKED QUESTIONS</h2>
        </div>

        <ul class="faq-list">

          <li>
            <a data-bs-toggle="collapse" class="collapsed" data-bs-target="#faq1">What do I need to get a website? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                To have a website online fully working you need 3 things: a domain name, hosting and a web designer.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq2" class="collapsed">How soon can I be online? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                For regular websites, you can expect to be online within 2-4 days. Online store 5-10 days.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq3" class="collapsed">What if I don't have any images yet? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Don't worry, we have a great team of graphic designers and developers who can help you get images that matches you business.
              </p>
            </div>
          </li>

          <li>
            <a data-bs-toggle="collapse" data-bs-target="#faq4" class="collapsed">Do you build custom designs from scratch or use templates? <i class="bx bx-chevron-down icon-show"></i><i class="bx bx-x icon-close"></i></a>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                We build custom web sites from scratch and also use templates. Templates are great because they are already built and more stable. Custom design are great because you can give your website the look and feel you want.
              </p>
            </div>
          </li>
        </ul>

      </div>
    </section><!-- End Frequently Asked Questions Section -->

  </main><!-- End #main -->

  <!-- ======= Footer ======= -->
  <footer id="footer">
    <div class="bg-dark text-secondary px-4 py-5 text-center">
      <div class="py-5">
        <a class="logo display-3 hero-logo" href="/">I<span class="logo-blue">A</span></a>
        <h1 class="display-5 fw-bold text-white mt-5" id="followUs">Connect with us</h1>
        <div class="col-lg-6 mx-auto">
          <div class=" gap-2 d-sm-flex justify-content-sm-center">
            <a href="https://www.facebook.com/intelatlas" target="_blank" class="facebook display-3"><i class="bx bxl-facebook"></i></a>
            <a href="https://www.linkedin.com/company/intelatlas" target="_blank" class="twitter display-3"><i class='bx bxl-linkedin-square'></i></a>
            <a href="https://goo.gl/maps/Z2GWwAx9HPUjkBgM7" target="_blank" class="twitter display-3"><i class='bx bxl-google'></i></a>
            <a href="https://www.yelp.com/biz/intelatlas-tucson" target="_blank" class="twitter display-3"><i class='bx bxl-yelp'></i></a>
          </div>
          <p class="mt-5 mb-0"><script>document.write(new Date().getFullYear())</script> &copy; <strong><span>IntelAtlas</span></strong></p>
        </div>
      </div>  
    </div>
  </footer><!-- End Footer -->

    <!-- CHAT -->
    <script type="text/javascript">
var LHCChatOptions = {};
LHCChatOptions.opt = {widget_height:340,widget_width:325,popup_height:520,popup_width:500};
(function() {
var po = document.createElement('script'); po.type = 'text/javascript'; po.async = true;
var referrer = (document.referrer) ? encodeURIComponent(document.referrer.substr(document.referrer.indexOf('://')+1)) : '';
var location  = (document.location) ? encodeURIComponent(window.location.href.substring(window.location.protocol.length)) : '';
po.src = '//intelatlas.com/chat/index.php/chat/getstatus/(click)/internal/(position)/bottom_right/(ma)/br/(hide_offline)/true/(top)/350/(units)/pixels/(leaveamessage)/true?r='+referrer+'&l='+location;
var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(po, s);
})();
</script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous"></script>
  </body>
</html>