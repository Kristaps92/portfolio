<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.css" integrity="sha512-UTNP5BXLIptsaj5WdKFrkFov94lDx+eBvbKyoe1YAfjeRPC+gT5kyZ10kOHCfNZqEui1sxmqvodNUx3KbuYI/A==" crossorigin="anonymous" />
    <script src="https://kit.fontawesome.com/4f6f994d7c.js" crossorigin="anonymous"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/waypoints/4.0.1/jquery.waypoints.min.js" integrity="sha512-CEiA+78TpP9KAIPzqBvxUv8hy41jyI3f2uHi7DGp/Y/Ka973qgSdybNegWFciqh6GrN2UePx2KkflnQUbUhNIA==" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous"></script>
</head>
<body>
  <div class="scroll-up-btn">
    <i class="fas fa-angle-up"></i>
  </div>
    <nav class="navbar">
        <div class="max-width">
            <div class="logo"><a href="#">Portfo<span>lio</span></a></div>
            <ul class="menu">
                <li><a href="#home">Home</a></li>
                <li><a href="#about">About</a></li>
                <li><a href="#hobbies">Hobbies</a></li>
                <li><a href="#skills">Skills</a></li>
                <li><a href="#services">Services</a></li>
                <li><a href="#contact">Contact</a></li>
            </ul>
            <div class="menu-btn">
                <i class="fas fa-bars"></i>
            </div>
        </div>
    </nav>

    <section class="home" id="home">
        <div class="max-width">
            <div class="home-content">
                <div class="text-1">Hello, my name is </div>
                <div class="text-2">Kristaps Viksne</div>
                <div class="text-3">And I'm a <span>web developer</span></div>
                <a href="#contact">Contact Me</a>
            </div>
        </div>
    </section>

    <section class="about" id="about">
        <div class="max-width">
            <h2 class="title">About me</h2>
            <div class="about-content">
                <div class="column left">
                    <img src="images/profile.jpg" alt="profile photo">
                </div>
                <div class="column right">
                    <div class="text">I'm Kristaps and I'm a <span>Web developer</span></div>
                    <p>I live in the Latvia.
                      My focus is responsive websites with HTML, JavaScript, PHP, and MySQL 
                      I am always experimenting, always learning, and never bored.
                      If you fancy a chat feel free to drop me a line.</p>
                    <br>
                    <form method="get" action="Files/CV.docx">
                       <button type="submit">Download CV</button>
                    </form>
                </div>
            </div>
        </div>
    </section>

    <section class="hobbies" id="hobbies">
      <div class="max-width">
        <h2 class="title">My hobbies</h2>
        <div class="carousel owl-carousel">
          <div class="card">
            <div class="box">
              <img src="Images/gallery/voyager.jpg" alt="image">
              <div class="text">Voyager Club</div>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/gallery/archery.jpg" alt="image">
              <div class="text">Archery</div>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/gallery/beekeeping.jpg" alt="image">
              <div class="text">Beekeeping</div>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/gallery/repair.jpg" alt="image">
              <div class="text">Repairs</div>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/gallery/gaming.jpg" alt="image">
              <div class="text">Video games</div>
            </div>
          </div>
          <div class="card">
            <div class="box">
              <img src="Images/gallery/board-game.jpg" alt="image">
              <div class="text">Board games</div>
            </div>
          </div>
        </div>
      </div>
    </section>

    <section class="skills" id="skills">
  <div class="max-width">
    <h2 class="title">My skills</h2>
    <div class="skills-content">
      <div class="column left">
        <div class="text">My creative skills & experiences.</div>
        <p>In a fast moving industry like ours, staying on top of your game means you never stop learning. 
          Technologies change just as fast as trends, and what’s common practice now might already be outdated in a few years. 
          If you want to become a great web developer, you have to stay ahead of the curve.
           That means learning new technologies and programming languages and also keeping an eye on what customers want in order to stay satisfied.</p>
        <a href="https://github.com/Kristaps92" target="_blank">See more</a>
      </div>
      <div class="column right">
        <div class="bars">
          <div class="info">
            <span>HTML</span>
            <span>90%</span>
          </div>
          <div class="line css"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>CSS</span>
            <span>70%</span>
          </div>
          <div class="line css"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>Javascript</span>
            <span>50%</span>
          </div>
          <div class="line js"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>PHP</span>
            <span>30%</span>
          </div>
          <div class="line php"></div>
        </div>
        <div class="bars">
          <div class="info">
            <span>MySQL</span>
            <span>30%</span>
          </div>
          <div class="line mysql"></div>
        </div>
      </div>
    </div>
  </div>
</section>

    <section class="services" id="services">
    <div class="max-width">
        <h2 class="title">My services</h2>
        <div class="services-content">

            <div class="card">
                <div class="box">
                    <i class="fas fa-paint-brush"></i>
                    <div class="text">Web Design</div>
                     <p>A web designer is responsible for creating the design and layout of a website or web pages</p>
                </div>
              </div>

              <div class="card">
                  <div class="box">
                      <i class="fas fa-chart-line"></i>
                      <div class="text">Google analytics</div>
                       <p>Google Analytics is a web analytics service offered by Google that tracks and reports website traffic.</p>
                  </div>
                </div>

                <div class="card">
                    <div class="box">
                        <i class="fas fa-code"></i>
                        <div class="text">Web development</div>
                         <p>Web development, which includes Web content, Web client and server scripting and network security.</p>
                    </div>
                  </div>

            </div>
        </div>
    </div>
</section>

<section class="pictures">
  <h2 class="title">My gallery</h2>
<div class="gallery">
  <div class="img-w"><img src="Images/img/IMG_20201011_191534.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20210205_083014.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20210114_161253.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201108_090439.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201108_090427.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201013_145635.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201013_145630.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201013_145611.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201011_191545.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20201007_074530.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20200925_074749.jpg" alt="" /></div>
  <div class="img-w"><img src="Images/img/IMG_20200831_195122.jpg" alt="" /></div>
</div>
</section>


<section class="contact" id="contact">
  <div class="max-width">
    <h2 class="title">Contact me</h2>
    <div class="contact-content">
      <div class="column left">
        <div class="text">Get in Touch</div>
          <p>If you like my work and have some cool project to work on, just send me direct message or contact me through social sites listed below.</p>
          <div class="icons">
            <div class="row">
              <i class="fas fa-user"></i>
              <div class="info">
                <div class="head">Name</div>
                <div class="sub-title">Kristaps Viksne</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-map-marker-alt"></i>
              <div class="info">
                <div class="head">Address</div>
                <div class="sub-title">Latvia, Kuldiga</div>
              </div>
            </div>
            <div class="row">
              <i class="fas fa-envelope"></i>
              <div class="info">
                <div class="head">Email</div>
                <div class="sub-title">viksnekristaps@gmail.com</div>
              </div>
            </div>
        </div>
      </div>
        <div class="column right">
          <?php include 'PHP/form_handler.php'?>
          <div class="text">Message me</div>
          <form action="" method="post">
            <div class="fields">
              <div class="field name">
                <input type="text" placeholder="name"  name="name" required/>
              </div>
              <div class="field email">
                <input type="email" placeholder="email" name="email" required/>
              </div>
            </div>
            <div class="field">
                <input type="text" placeholder="Subject" required/>
              </div>
              <div class="field textarea">
                <textarea cols="30" rows="10" placeholder="Your message.." name="message" required></textarea>
              </div>
              <div class="button">
                <button type="submit" name="submit" >Send message</button>
              </div>
          </form>
        </div>
      </div>
  </div>
    <footer>
      <span>Created By <a href="#">Kristaps</a> | <span class="far fa-copyright"></span>2021 All rights reserved.</span>
      <span class="footer-icons">
        <a href="https://www.facebook.com/kristaps.viksne.7" target="_blank"><i class="fab fa-facebook-square fa-2x"></i></a>
        <a href="#" target="_blank"><i class="fab fa-instagram fa-2x"></i></a>
        <a href="https://github.com/Kristaps92" target="_blank"><i class="fab fa-github-square fa-2x"></i></a>
        <a href="https://twitter.com/KristapsViksne" target="_blank"><i class="fab fa-twitter-square fa-2x"></i></a>
        <a href="#" target="_blank"><i class="fab fa-discord fa-2x"></i></a>
        <a href="https://join.skype.com/invite/BgmxxGEDwtxk" target="_blank"><i class="fab fa-skype fa-2x"></i></a>
      </span>
    </footer>

</section>




<script src="script.js"></script>
</body>
</html>
