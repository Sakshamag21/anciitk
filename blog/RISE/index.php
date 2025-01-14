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
    <title>Blogs | RISE | AnC Council, IITK</title>
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
          <h2>RISE With The Seniors</h2>
          <span>Research, Intern and Semester Exchange</span>
          <hr />
        </div>
        
          <div class="row">
            <div class="col-lg-10 offset-lg-1">
              <div class="blog-container">

                <?php
                  for ($x = 26; $x <= $last; $x++) {
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
                  <img src="25/ag.jpg" />
                  <div class="blog-body">
                    <h2>
                      Trouvaille in Tubingen
    
                    </h2>
                    <br />
                    <span class="author">Aditya Garg</span>
                    <p class="date">July 2, 2020</p>
                    <p class="description">
                     
                      In this blog, we have Aditya Garg, a Y16 student sharing his internship experience at Max Planck Institute for Intelligent Systems- Organization, Tuebingen in the field of Empirical Interference.
                      From having a not very clear idea about which profiles to prepare for, to getting selected in a reputed internship program, he truly believes in the power of patience and persistence.
                      Read this blog to know more about the to do's essential for an academic intern. 
                      
                      <br />
                    </p>
                    <button><a href="25/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="24/sp.jpg" />
                  <div class="blog-body">
                    <h2>
                      Physics and Europe: A Dream Come True
                    </h2>
                    <br />
                    <span class="author">Swadha Pandey</span>
                    <p class="date">June 26, 2020</p>
                    <p class="description">
                      Entering IIT Kanpur, I was clear about one thing - I loved Physics. But after two years of solving free
                      body diagrams of monkeys on ropes, I wanted to work on something real. So during my first semester
                      itself, I started looking for a professor who would be willing to give me a project. I was hesitant at
                      first since I knew nothing about research. But I left that decision up to the profs - my job was just to
                      apply.
                      <br />
                    </p>
                    <button><a href="24/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="23/sc.jpg" />
                  <div class="blog-body">
                    <h2>
                     Germany and beyond | Sagar Chaudhary
                    </h2>
                    <br />
                    <span class="author">Sagar Chaudhary</span>
                    <p class="date">June 18, 2020</p>
                    <p class="description">
                      I wouldn't tell you that “Ever since I came to IIT Kanpur, I knew I wanted to go into research”. When I came to the campus, I just wanted to explore new things. I did not know what I wanted to do, and maybe, it’s okay to not know exactly what you want. In my first year winters and the summers after that, I decided to take up robotics. Though I learnt new things and finished the projects, I concluded it wasn’t for me.
                      <br />
                    </p>
                    <button><a href="23/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="22/nv.jpg" />
                  <div class="blog-body">
                    <h2>
                     RISE with the Seniors | Nivedita Vij
                    </h2>
                    <br />
                    <span class="author">Nivedita Vij</span>
                    <p class="date">June 10, 2020</p>
                    <p class="description">
                     
                      Nivedita Vij is an undergraduate student in the Material Science department who interned at Harvard
                      University in the summer of 2019 in the field of Condensed Matter Physics. Here’s an account of her
                      application process to the various programs including the DAAD, MITACS, and the SN Bose program, the
                      article follows with a FAQ section and also a brief excerpt of her life at Boston, New York and her days
                      at Harvard.
                      <br />
                    </p>
                    <button><a href="22/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="21/tm.jpg" />
                  <div class="blog-body">
                    <h2>
                      Science and Serendipity  
                    </h2>
                    <br />
                    <span class="author">Tarun Mascarenhas</span>
                    <p class="date">June 3, 2020</p>
                    <p class="description">
                     
                      I received two valuable pieces of advice in my first year which I feel are relevant to the
                      people about to embark on a research track in college. A professor said, “Don’t worry about
                      jobs – you are IITians, if anyone is desirable in the job market, it is you! So, don’t worry
                      about the prevalent opinion that trying out research will make you less hireable”. 
                      <br />
                    </p>
                    <button><a href="21/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="20/km.jpg" />
                  <div class="blog-body">
                    <h2>
                      A Dutch Experience  
                    </h2>
                    <br />
                    <span class="author">Krishna Manoorkar</span>
                    <p class="date">May 18, 2020</p>
                    <p class="description">
                      Since my early days at IITK, I have been interested in research in pure mathematics. Thanks
                      to a project I did with Prof. Mohua Banerjee, during my second year summers, I got
                      especially interested in mathematical logic. Hence, I chose to pursue research in
                      mathematical logic for my internship. Although I applied to almost all the intern programs
                      with opportunities in logic, I could not get an internship through any programs.
                      <br />
                    </p>
                    <button><a href="20/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="19/vr.jpg" />
                  <div class="blog-body">
                    <h2>
                      Sehnsucht | Vasundhara Rakesh
                    </h2>
                    <br />
                    <span class="author">Vasundhara Rakesh</span>
                    <p class="date">May 12, 2020</p>
                    <p class="description">
                      With the world coming to a stand still, I’ve come to appreciate sehnsucht - a beautiful
                      German word which roughly translates to a deep feeling of longing for something that is
                      missing, like wanting to escape the present to the past or the future. Not knowing how
                      the upcoming summer will be, I find myself wishing I go back to the last summer, and
                      writing this piece was a great way to do that.
                      <br />Before I start, I should point out that everyone’s experience is unique. For me,
                      it was a rollercoaster - I was very lucky most of the time, and many times I was
                      disappointed and disheartened too. I did learn a lot from the journey, though, and had a
                      wonderful time interning at the Max Planck Institute for Intelligent Systems in
                      Tübingen, Germany.
                    </p>
                    <button><a href="19/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="18/pk.jpg" />
                  <div class="blog-body">
                    <h2>
                      Prashant's Blog

                    </h2>
                    <br />
                    <span class="author">Prashant Kumar</span>
                    <p class="date">May 4, 2020</p>
                    <p class="description">
                      Prashant Kumar, a Y15 Dual Degree student from the Economics department shares his experience about
                      pursuing a research internship at the University of Tuebingen, Germany which is one of the eleven
                      German Excellence Universities. He elaborates on the decision making and the work as a research
                      intern and also shares his experience of living in Germany and traveling through Europe. Do read
                      this to get an insight into the academic and non-academic aspects of pursuing an internship in
                      Europe!
                    </p>
                    <button><a href="18/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="17/ab.jpg" />
                  <div class="blog-body">
                    <h2>
                      Journey to the Garden City

                    </h2>
                    <br />
                    <span class="author">Akshay Bhola</span>
                    <p class="date">April 26, 2020</p>
                    <p class="description">
                      The penultimate year is quite a crucial period of our stay at IIT Kanpur. Amid the academic and
                      extracurricular commitments, you have to plan the undertakings for the upcoming summers. The idea of
                      going to a new city to explore corporate life or getting a taste of research at a foriegn University
                      is exciting but later on, it might get overwhelming over the multitude of available choices --
                      whether to choose an academic or corporate intern, should I target simply the core profiles or keep
                      the non-core profiles in the picture too. I remember living this scenario at the end of 4th
                      semester, having little clue of the internship process, wondering how to proceed. What I have seen
                      is that it is the case for most of us at some stage. It happens to be the first time you would be
                      joining the corporate world or flying overseas to experience another reality altogether.
                    </p>
                    <button><a href="17/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="16/pj.jpg" />
                  <div class="blog-body">
                    <h2>
                      An account from the German coast's best kept secret | Pulkit Jain
                    </h2>
                    <br />
                    <span class="author">Pulkit Jain</span>
                    <p class="date">April 18, 2020</p>
                    <p class="description">
                      I spent my Summer of 2019, a full two and a half months at Bioinorganic Chemistry Research group at
                      the University of Greifswald, working on the synthesis of novel NHC(N-Heterocyclic Carbene)
                      dithiolene compounds for reduction of nitrogen to ammonia. The project was based on the combination
                      of my interest in small molecule activation along with the group's main focus - Bioinorganic
                      Chemistry. Phew! I know that sounds heavy but don't worry, I am here to share my experience and that
                      might be helpful when you come at a crossroads in your Summers.

                    </p>
                    <button><a href="16/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="15/po.jpg" />
                  <div class="blog-body">
                    <h2>
                      Soumyadeep's Blog

                    </h2>
                    <br />
                    <span class="author">Soumyadeep Datta</span>
                    <p class="date">April 12, 2020</p>
                    <p class="description">
                      “Hope is a good thing, maybe the best of things, and no good thing ever dies.” - Andy
                      Dufresne, The Shawshank Redemption Well, I guess this summarizes my philosophy in
                      approaching this internship. I had an interesting summer last year at NYU Tandon School
                      of Engineering which exposed me to the wonderful ocean of opportunities called 5G.
                      However, I wanted more. I took the decision of staying back at IIT Kanpur for another
                      year as a Dual Degree student and started working with Prof Rohit Budhiraja who
                      currently is my thesis supervisor. I also decided to give another shot at a research
                      internship abroad. As it turned out, I got selected for the 2019 cohort of the SN Bose
                      Scholars’ Program and took this opportunity to secure an internship offer from Prof.
                      Xinyu Zhang, University of California, San Diego. I was already acquainted with the visa
                      procedures and with all that done, I safely landed in the US on 11th May.
                    </p>
                    <button><a href="15/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="14/img/i1.jpg" />
                  <div class="blog-body">
                    <h2>
                      Deep In The Heart of Texas: A Personal Journey

                    </h2>
                    <br />
                    <span class="author">Promit Chakroborty</span>
                    <p class="date">April 5, 2020</p>
                    <p class="description">
                      Standing at the cusp of the next step in my academic journey - going to grad school - I
                      can't help but look back often at the road that led me here. It doesn't help (or perhaps
                      it does, depending on your point of view) that a lot of my conversations now revolve
                      around internship or grad school applications. Somehow, I'm surrounded by people
                      interested in exploring or pursuing a career in academia. And with these thoughts fresh
                      in my mind, when the offer to write this article came my way, I jumped at the chance to
                      put them into words.
                    </p>
                    <button><a href="14/index.html">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="13/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Journey Begins
                    </h2>
                    <br />
                    <span class="author">Pranshu Garg</span>
                    <p class="date">September 5, 2019</p>
                    <p class="description">
                      If you are reading this blog series, I would say you have
                      taken the first step towards getting into higher education
                      i.e. taking it into consideration! You might find this
                      astounding, depending on your inclinations and thought
                      process, but a lot of students don’t ever consider higher
                      education after graduation.
                    </p>
                    <button><a href="13">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="12/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Internship Experience - Goldman Sachs
                    </h2>
                    <br />
                    <span class="author">Anurag Pandey</span>
                    <p class="date">September 2, 2019</p>
                    <p class="description">
                      Hello people! I am Anurag Pandey, a final year
                      undergraduate in the department of Mathematics and
                      Scientific Computing. I interned at Goldman Sachs,
                      Bangalore as a Summer Analyst in Risk Division.
                    </p>
                    <button><a href="12">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="11/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Where There Is A Will, There Is A Way
                    </h2>
                    <br />
                    <span class="author">Raghav Garg</span>
                    <p class="date">August 20, 2019</p>
                    <p class="description">
                      Hello guys and gals! I am Raghav Garg pursuing a Computer
                      Science major and I went to Samsung South Korea for my
                      summer internship in 2019 and worked with the AI R&D team
                      under Mobile Division in Suwon.
                    </p>
                    <button><a href="11">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="10/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Internship Experience - Adobe
                    </h2>
                    <br />
                    <span class="author">Abhishek Datta</span>
                    <p class="date">August 16, 2019</p>
                    <p class="description">
                      Last year during this time, I was sitting in my room and
                      wondering if I’ll secure a software internship in one of
                      the reputed companies or not. I had heard that most of
                      these “reputed” companies come in the first week itself,
                      and I hadn’t secured an internship yet at the end of it..
                    </p>
                    <button><a href="10">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="9/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Internship Experience - Texas Instruments
                    </h2>
                    <br />
                    <span class="author">Shruti Shukla</span>
                    <p class="date">August 11, 2019</p>
                    <p class="description">
                      While deciding on the third year summer internship, the
                      first step is to decide whether you want to go for an
                      academic or an industry internship. If you have a decent
                      interest in both, it would require some introspection. Ask
                      yourself, what are your expectations out of the two
                      months.
                    </p>
                    <button><a href="9">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="8/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      The Road Not Taken
                    </h2>
                    <br />
                    <span class="author">Pranav Kulkarni</span>
                    <p class="date">August 4, 2019</p>
                    <p class="description">
                      As I entered L13, a little later than the stipulated time,
                      I saw numerous eager faces occupying not just all the
                      chairs but also the floor to listen to how to get a good
                      Masters or PhD position after graduation. This was a
                      session organised by the AnC to help students get
                      acquainted with the application process for higher
                      education, and I was one of the speakers.
                    </p>
                    <button><a href="8">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="7/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>
                      Research is formalized curiosity. It is poking and prying
                      with a purpose
                    </h2>
                    <br />
                    <span class="author">Koushani Das</span>
                    <p class="date">July 28, 2019</p>
                    <p class="description">
                      Having recently completed a Bachelors of Biological
                      Sciences and Bioengineering from IITK, I have come to an
                      utmost conclusion that research demands sheer dedication
                      and immense passion. Just like every other bewildered
                      sophomore, I headed towards research with a mindset to
                      fill up quality content for my resume!
                    </p>
                    <button><a href="7">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="6/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>Udne Ke Liye Bas Pankh Chahiye</h2>
                    <br />
                    <span class="author">Agrim Bari</span>
                    <p class="date">July 21, 2019</p>
                    <p class="description">
                      What's the best way to decide whether you should or
                      shouldn't go for a foreign internship? If you should, then
                      how would you ensure that you get to see the sun on
                      foreign soil? Wait, there are stipulations/prerequisites
                      for this as well?
                    </p>
                    <button><a href="6">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="5/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>A Master's Application Guide</h2>
                    <br />
                    <span class="author">Devansh Saraswat</span>
                    <p class="date">July 14, 2019</p>
                    <p class="description">
                      One of the most stressful, time-consuming, and tedious
                      period for any Masters or Ph.D. aspirant is the university
                      application phase. Which college should I apply to? How
                      should I shortlist the universities? How many colleges
                      should I apply to? What college will I get into based on
                      my profile?
                    </p>
                    <button><a href="5">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="4/img/cover.jpg" />
                  <div class="blog-body">
                    <h2>Finding Your Way In That World</h2>
                    <br />
                    <span class="author">Mihikaa Jain</span>
                    <p class="date">July 7, 2019</p>
                    <p class="description">
                      Hello! So..welcome to third year. It's the year with
                      probably maximum opportunities and the one where most of
                      us go through maximum confusion. There are so many
                      possibilities, limited time and it becomes tough at times
                      to decide what to prioritize over what.
                    </p>
                    <button><a href="4">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="3/img/cover.jpeg" />
                  <div class="blog-body">
                    <h2>Beast Named Research..</h2>
                    <br />
                    <span class="author">Saakaar Bhatnagar</span>
                    <p class="date">June 30, 2019</p>
                    <p class="description">
                      I stepped into the IIT Kanpur campus on 21st July 2015,
                      with all the fears and doubts one associates with living
                      away from home for the first time, certain of only one
                      thing: that for the next four years, I would study
                      Aerospace Engineering. A fascination, that started during
                      my JEE days, with the complexity of flying objects put me
                      on the path I am on today..
                    </p>
                    <button><a href="3">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="2/img/cover.jpeg" />
                  <div class="blog-body">
                    <h2>An Overseas Almanac</h2>
                    <br />
                    <span class="author">Arjun Gupta</span>
                    <p class="date">June 23, 2019</p>
                    <p class="description">
                      After completing my fourth semester, I was in a dilemma as
                      to what my interests actually were. Was there something I
                      was good at or whether I should prepare for the coming
                      internship season or look for an academic internship.
                    </p>
                    <button><a href="2">Read >></a></button>
                  </div>
                </div>

                <div class="blog-card">
                  <img src="1/img/cover.jpeg" />
                  <div class="blog-body">
                    <h2>All's Well That Ends Well!</h2>
                    <br />
                    <span class="author">Avi Gupta</span>
                    <p class="date">June 16, 2019</p>
                    <p class="description">
                      “Nahin maa, abhi tak kisi ka reply nahin aaya.” As I sat
                      on the stairs of the library, the somberness in this
                      reiterating expression overpowered my fear for MSE301’s
                      end sem. This thought of not getting an intern had been
                      bothering me for a while (rather an entire semester).
                      Maybe this fear was going to daunt me some more...
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
