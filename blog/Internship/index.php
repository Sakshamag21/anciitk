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
    <title>Blogs | The More You Know | AnC Council, IITK</title>
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
          <h2>The More You Know</h2>
          <hr />
        </div>
        
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="blog-container">

                <?php
                  for ($x = 11; $x <= $last; $x++) {
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
                <img src="18/rcover.png" />
                <div class="blog-body">
                  <h2>
                    The More You Know 
                  </h2>
                  <span class="author">Amisha Shahdeo</span>
                  <p class="date">June 24, 2021</p>
                  <p class="description">
                    Hello all the readers!!! <br/>
                    I am Amisha from the department of Chemical Engineering. Here’s a blog on what I learned and experienced during the internship drive of 2020. I have also tried to incorporate the tips and advice I received from my seniors that helped me get through
                  </p><button><a href="18/index.html">Read >></a></button>
                </div>
              </div>

                
                <div class="blog-card">
                <img src="16/rcover.png" />
                <div class="blog-body">
                  <h2>
                    The More You Know 
                  </h2>
                  <span class="author">Kaushiki Agarwal</span>
                  <p class="date">June 15, 2021</p>
                  <p class="description">
                    Hello all the readers!!! <br/>
                    So here I am describing my journey of getting an internship at AB InBev, how I prepared for it, and the entire process of selection. Starting with a little introduction about myself – I am kind of a person who is not much involved in campus activities and clubs. 
                  </p><button><a href="16/index.html">Read >></a></button>
                </div>
              </div>



                <div class="blog-card">
                <img src="15/rcover.png" />
                <div class="blog-body">
                  <h2>
                    The More You Know 
                  </h2>
                  <span class="author">Ritik Saxena</span>
                  <p class="date">June 9, 2021</p>
                  <p class="description">
                    Hi there!<br/>
                    Hello there! I am Ritik Saxena, a Y18 in the department of Electrical Engineering. Tbh, I was surprised when I got this opportunity to pen down my preparation journey for the summer internships. But I do have some things to tell that I feel could be of great use to you during the tides coming your way.                  </p>
                  <button><a href="15/index.html">Read >></a></button>
                </div>
              </div>

                <div class="blog-card">
                <img src="14/img/cover.png" />
                <div class="blog-body">
                  <h2>
                    The More You Know 
                  </h2>
                  <span class="author">Gavish Saraf</span>
                  <p class="date">May 29, 2021</p>
                  <p class="description">
                    Hi there!<br/>
                    My name is Gavish and this is not a guide to the Internship season. At best, it’s just a collection of my thoughts and experiences, written, deleted and re-written again. The AnC guys convinced me that this may help people to prepare for internships and other stuff, nevertheless they have paid me well for this so why not?
                  </p>
                  <button><a href="14/index.html">Read >></a></button>
                </div>
              </div>
    

                <div class="blog-card">
                <img src="10/vt.png" />
                <div class="blog-body">
                  <h2>
                    The More You Know 
                  </h2>
                  <span class="author">Vatsalya Tandon</span>
                  <p class="date">June 24, 2020</p>
                  <p class="description">
                    Hi there!<br/>
                    My name is Vatsalya and this is not a guide to the Internship season. At best, it’s just a collection of my thoughts and experiences, written, deleted and re-written again. The AnC guys convinced me that this may help people to prepare for internships and other stuff, nevertheless they have paid me well for this so why not?
                  </p>
                  <button><a href="10/index.html">Read >></a></button>
                </div>
              </div>
    
                <div class="blog-card">
                  <img src="9/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Ritika Ajmera</span>
                    <p class="date">Jun 16, 2020</p>
                    <p class="description">
                      I was very delighted when I got this opportunity to pen down my internship journey. I would be more than happy to share it. Before starting, I would like to brief you about my profile so that you may decide whether this blog might be useful for you or not. I am a Y17 student in the Economics department. At the end of the second year, my CPI was 8.4. Major POR - Manager, Ritambhara, Antaragni'19. I'm currently interning at Deskera in the Software Development profile.
                    </p>
                    <button><a href="9">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="7/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Tushar Goswamy</span>
                    <p class="date">May 27, 2020</p>
                    <p class="description">
                      My primary motive for writing this blog is to help and guide any student who feels that he/she has a low CPI and/or does not belong to a ‘top’ branch since I had a similar profile. There are ample resources and blogs to guide those who have a stellar academic record and belong to the ‘top’ branches which tech companies prefer. Hence I want to reach out to the students who do not fit this criterion and provide tips based on my personal experience.
                    </p>
                    <button><a href="7">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="6/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Yashika</span>
                    <p class="date">April 20, 2020</p>
                    <p class="description">
                      This blog is all about grabbing a Chemical Engineering Core Internship with more inclination towards Dr Reddy’s internship profile. My internship preparation was mainly during the second year summers and I strongly suggest to use this extended vacation effectively.
                    </p>
                    <button><a href="6">Read >></a></button>
                  </div>
                </div>
       
                <div class="blog-card">
                  <img src="5/Ayush.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Ayush Gupta</span>
                    <p class="date">April 17, 2020</p>
                    <p class="description">
                      Hey everyone! <br />
                                My blog would be slightly different from others since I did not prepare for internships
                                methodologically, but had worked in a specific field for a substantial time. This
                                article would surely tell you what you should definitely not do. I've tried to structure
                                this long article, and if you only want to read my advice and suggestions, please feel
                                free to scroll down and read the relevant portions.
                    </p>
                    <button><a href="5/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="4/as.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Siddhanta Mhambrey</span>
                    <p class="date">April 16, 2020</p>
                    <p class="description">
                      Hi! My name is Siddhanta Mhambrey and this is my internship story!
                    </p>
                    <button><a href="4/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="3/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know
                    </h2>
                    <span class="author">Parth Athale</span>
                    <p class="date">April 15, 2020</p>
                    <p class="description">
                      First off, this piece is hugely influenced by my experiences and opinions. So the only person for whom this is perfect advice is the 2019 Parth. Don’t worry though, you’re closer to him than you think :P
                    </p>
                    <button><a href="3">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="2/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Naishadh Parmar</span>
                    <p class="date">April 7, 2020</p>
                    <p class="description">
                      Yet another blog to help you get started with the internship preparation and ace the interviews
                    </p>
                    <button><a href="2">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="1/img/cover.png" />
                  <div class="blog-body">
                    <h2>
                      The More You Know 
                    </h2>
                    <span class="author">Bhavjeet Singh</span>
                    <p class="date">March 22, 2020</p>
                    <p class="description">
                      A complete guide to help you get started with the internship preparation and ace the interviews
                    </p>
                    <button><a href="1">Read >></a></button>
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
