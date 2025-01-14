<?php
$myfile = fopen("admin.json", "r");
$stat_raw = fread($myfile, filesize("admin.json"));
$stat = json_decode($stat_raw);
$last = $stat->last;
fclose($myfile);
?>

<!DOCTYPE html>
<html
  lang="zxx"
  xmlns="http://www.w3.org/1999/xhtml"
  xmlns:fb="http://ogp.me/ns/fb#"
>
  <head>
    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script
      async
      src="https://www.googletagmanager.com/gtag/js?id=UA-141882297-1"
    ></script>
    <script>
      window.dataLayer = window.dataLayer || [];
      function gtag() {
        dataLayer.push(arguments);
      }
      gtag('js', new Date());

      gtag('config', 'UA-141882297-1');
    </script>
    <title>Blogs | Placement Fundae | AnC Council, IITK</title>
    <meta charset="UTF-8" />
    <meta
      name="description"
      content="The Academics and Career Council of the Indian Institute of Technology, Kanpur is a council directly placed under the Student's Gymkhana that aims to foster all needs related to academics and research for the campus dwellers. "
    />
    <meta property="og:image" content="2/img/cover.jpg" />
    <meta
      name="keywords"
      content="academic, research, cell, anc, iit kanpur, college, study, science, gymkhana, academics, career, future"
    />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <!-- Favicon -->
    <link href="../../img/favicon.ico" rel="shortcut icon" />

    <!-- Google Font -->
    <link
      href="https://fonts.googleapis.com/css?family=Poppins:400,400i,500,500i,600,600i,700,700i"
      rel="stylesheet"
    />

    <!-- Stylesheets -->
    <link rel="stylesheet" href="../../css/bootstrap.min.css" />
    <link rel="stylesheet" href="../../css/font-awesome.min.css" />
    <link rel="stylesheet" href="../../css/magnific-popup.css" />
    <link rel="stylesheet" href="../../css/owl.carousel.min.css" />
    <link rel="stylesheet" href="../../css/style.css" />
    <link rel="stylesheet" href="../../css/animate.css" />

    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
  </head>

  <body>
    <!-- Page Preloder -->
    <div id="preloder">
      <div class="loader"></div>
    </div>

    <!-- Header section -->
    <header class="header-section">
      <div class="container">
        <a href="../../index.html" class="site-logo">
          <img
            src="../../img/anc-logo.png"
            alt="logo"
            height="100px"
            width="100px"
          />
          <!-- <h1>Academics and Career Council</h1> -->
        </a>
        <!-- Switch button -->
        <div class="nav-switch">
          <div class="ns-bar"></div>
        </div>
        <div class="header-right">
          <ul class="main-menu">
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../about.html">Academics</a></li>
            <li><a href="../../service.html">Research</a></li>
            <li><a href="../../ir.html">Int. Relations</a></li>
            <li><a href="../../crdev.html">Career Dev.</a></li>
            <li class="active"><a href="../../blog">Blogs</a></li>
            <li><a href="../../contact.html">Contact</a></li>
            <!-- <li><a href="src">SRC</a></li> -->
          </ul>
        </div>
      </div>
    </header>
    <!-- Header section end -->

    <!-- Page Top section -->
    <section
      class="page-top-section set-bg"
      data-setbg="../../img/page-top-bg/11.jpg"
    >
      <div class="container hero-title">
        <h2>Blogs</h2>
      </div>
    </section>
    <!-- Page Top section end -->

    <!-- Services section -->
    <section class="blog-section spad">
      <div class="container">
        <div class="series-title">
          <h2>Placement Fundae</h2>
          <hr />
        </div>
        <div class="blog-post">
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="blog-container">

              <?php
                for ($x = $last; $x >= 5; $x--) {
                if ($x == 7) continue;
                $data_file = fopen(strval($x)."/data.json", "r");
                $data_raw = fread($data_file, filesize(strval($x)."/data.json"));
                $data = json_decode($data_raw);
                fclose($data_file);
              ?>
                <div class="blog-card">
                    <img src="<?php echo $x;?>/img/cover.png" />
                    <div class="blog-body">
                      <h2>
                        <?php echo $data->title?>
                      </h2>
                      <span class="author"><?php echo $data->author?></span>
                      <p class="date"><?php echo $data->date?></p>
                      <p class="description">
                        <?php echo $data->intro?>
                      </p>
                      <button><a href="<?php echo $x?>">Read >></a></button>
                    </div>
                  </div>
              <?php } ?>
              
                <div class="blog-card">
                  <img src="4/ag.png" />
                  <div class="blog-body">
                    <span class="author">Arnav Garg</span>
                    <p class="date">September 16, 2020</p>
                    <p class="description">
                      From “1 Cr ka package” in first year to not even sitting for placements for higher studies, these 4 years teach you a lot more than any career counsellor ever could. With the right goal in mind, persevering towards it is the key to achieve it. With the above ‘profound’ words, let me introduce myself, my name is Arnav Garg, I’m a Y16 undergrad (would be an alum by the time you read this, sad reacts only) from the Civil Engineering department, and below is my journey from being a nervous, apprehensive freshman to securing a Day-1-Slot-1 job offer from JP Morgan and Chase as a Quantitative Researcher.
                    </p>
                    <button><a href="4">Read >></a></button>
                  </div>
                </div>
                <div class="blog-card">
                  <img src="3/img/cover.jpg" />
                  <div class="blog-body">
                    <span class="author">Aditya Lakhe</span>
                    <p class="date">November 7, 2019</p>
                    <p class="description">
                      Hi, I am Aditya Lakhe, a Y15 graduate who sat through the
                      placement season. This blog is for some useful tips and
                      tricks to ease the tension during placements.
                    </p>
                    <button><a href="3">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="2/img/cover.jpg" />
                  <div class="blog-body">
                    <span class="author">Akash Jain</span>
                    <p class="date">October 31, 2019</p>
                    <p class="description">
                      Hey. I am Akash Jain and somehow completed my bachelors
                      from Department of Aerospace Engineering, IIT Kanpur. If
                      you have not planned yet and waiting for Day 1 to knock,
                      do give this a read. I have listed a few ways to approach
                      the season smartly and bring out the best from it . . .
                    </p>
                    <button><a href="2">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="1/img/cover.jpg" />
                  <div class="blog-body">
                    <span class="author">Deepak Lunawat</span>
                    <p class="date">October 22, 2019</p>
                    <p class="description">
                      I can feel the present aura of the campus. I know you all
                      are working hard but I'm sure there are many who are
                      facing problems due to poor academic performance. As I
                      have been on the same situation . . .
                    </p>
                    <button><a href="1">Read >></a></button>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!-- Services section end -->

    <!-- Footer section -->
    <footer class="footer-section">
      <div class="container">
        <div class="footer-nav">
          <ul>
            <li><a href="../../index.html">Home</a></li>
            <li><a href="../../about.html">Academics</a></li>
            <li><a href="../../service.html">Research</a></li>
            <li><a href="../../ir.html">Int. Relations</a></li>
            <li><a href="../../crdev.html">Career Dev.</a></li>
            <li><a href="../../blog">Blogs</a></li>
            <li><a href="../../contact.html">Contact</a></li>
            <!-- <li><a href="src">SRC</a></li> -->
          </ul>
        </div>
      </div>
    </footer>
    <!-- Footer section end -->

    <!--====== Javascripts & Jquery ======-->
    <script src="../../js/jquery-3.2.1.min.js"></script>
    <script src="../../js/bootstrap.min.js"></script>
    <script src="../../js/owl.carousel.min.js"></script>
    <script src="../../js/jquery.magnific-popup.min.js"></script>
    <script src="../../js/circle-progress.min.js"></script>
    <script src="../../js/main.js"></script>
  </body>
</html>
