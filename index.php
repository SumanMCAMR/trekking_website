<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta http-equiv="X-UA-Compatible" content="ie=edge" />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.1.3/css/bootstrap.min.css"
    />
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/2.0.1/css/ionicons.min.css"
    />
    <link
      href="//netdna.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css"
      rel="stylesheet"
    />
    <link rel="stylesheet" href="footer-1.css" />
    <!-- <link rel="stylesheet" href="footer.css"> -->
    <link rel="stylesheet" href="card.css" />
    <link rel="stylesheet" href="about.css" />
    <link rel="stylesheet" href="hover.css" />
    <script
      src="https://kit.fontawesome.com/64d58efce2.js"
      crossorigin="anonymous"
    ></script>
    <link rel="stylesheet" href="style.css" />
    <title>home-page</title>
    <link rel="stylesheet" href="header.css" />
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/swiper-bundle.min.css" />
    <!-- <link rel="stylesheet" href="review.css"> -->
    <style>
      body {
        overflow-x: hidden;
      }
    </style>
  </head>

  <body>
    <header id="header">
      <!--header-start-->
      <div class="container">
        <div class="header_left">
          <a class="logo" href="index.html"
            ><img
              src="logo122.png"
              width="
                            130px"
              alt="logo"
          /></a>
        </div>
        <div class="header_right">
          <label for="menuTrigger" class="nav_ico"
            ><i class="fa fa-bars"></i
          ></label>
          <input id="menuTrigger" type="checkbox" name="" />
          <nav class="main_nav">
            <ul>
              <li><a href="index.html">Home</a></li>
              <li>
                <a href="card.html">Our Trip</a>
                <i class="fa fa-caret-down"></i>
                <ul>
                  <li>
                    <a href="#">Trekking in Ladakh</a>
                    <i class="fa fa-caret-down"></i>
                    <ul>
                      <li>
                        <a href="inhabitants.html">Among the Inhabitants</a>
                      </li>
                      <li><a href="nurba.html">Nubra Valley</a></li>
                      <li><a href="zanskar.html">Passion of Zanskar</a></li>
                      <li>
                        <a href="ancient-lah.html"
                          >Tour of Ladakh in Ancient monasteries
                        </a>
                      </li>
                      <li>
                        <a href="markha.html">Trekking in the markha valley</a>
                      </li>
                    </ul>
                  </li>
                  <li>
                    <a href="#">Trekking in sikkim</a>
                    <i class="fa fa-caret-down"></i>
                    <ul>
                      <li>
                        <a
                          style="font-weight: lowecase"
                          href="kangchenjung.html"
                          >A peek from kangchenjunga
                        </a>
                      </li>
                      <li><a href="singelila.html">Singelila ridge trek</a></li>
                      <li>
                        <a href="sikkim-bhutan.html">Sikkim and bhutan</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="#">Trekking in south india</a>
                    <i class="fa fa-caret-down"></i>
                    <ul>
                      <li><a href="spice.html">The spice route</a></li>
                      <li>
                        <a href="mumbai.html">Mumbai to cochin</a>
                      </li>
                      <li>
                        <a href="kerala.html">Karnataka and kerala trip</a>
                      </li>
                    </ul>
                  </li>

                  <li>
                    <a href="#">Trekking in Ganges valley</a>
                    <i class="fa fa-caret-down"></i>
                    <ul>
                      <li><a href="source-ganges.html">Source of ganges</a></li>
                      <li><a href="trishuli.html">Trishuli Domain</a></li>
                      <li><a href="nanda.html">Nanda devi national park</a></li>
                    </ul>
                  </li>
                </ul>
              </li>
              <li><a href="#who are we">About Us</a></li>

              <li><a href="#">Blog</a></li>
              <li><a href="contact.html">Contact Us</a></li>
            </ul>
          </nav>
        </div>
      </div>
    </header>
    <!--header-end-->
    <main>
      <div id="slidy-container">
        <figure id="slidy">
          <img
            src="pexels-eric-sanman-1365425.jpg"
            height="500px
                        "
            alt="eyes"
          />
          <img src="pexels-krivec-ales-547116.jpg" height="500px " alt="lou" />
          <img
            src="pexels-saikat-ghosh-914128.jpg"
            height="500px "
            alt="lucie-2"
          />
          <img
            src="pexels-saikat-ghosh-914128.jpg"
            height="500px "
            alt="lucie"
          />
        </figure>
        <script src="img-sider.js"></script>
      </div>
      <script>
        /* user defined variables */
        var timeOnSlide = 3,
          // the time each image will remain static on the screen, measured in seconds
          timeBetweenSlides = 1,
          // the time taken to transition between images, measured in seconds

          // test if the browser supports animation, and if it needs a vendor prefix to do so
          animationstring = "animation",
          animation = false,
          keyframeprefix = "",
          domPrefixes = "Webkit Moz O Khtml".split(" "),
          // array of possible vendor prefixes
          pfx = "",
          slidy = document.getElementById("slidy");
        if (slidy.style.animationName !== undefined) {
          animation = true;
        }
        // browser supports keyframe animation w/o prefixes

        if (animation === false) {
          for (var i = 0; i < domPrefixes.length; i++) {
            if (slidy.style[domPrefixes[i] + "AnimationName"] !== undefined) {
              pfx = domPrefixes[i];
              animationstring = pfx + "Animation";
              keyframeprefix = "-" + pfx.toLowerCase() + "-";
              animation = true;
              break;
            }
          }
        }

        if (animation === false) {
          // animate in JavaScript fallback
        } else {
          var images = slidy.getElementsByTagName("img"),
            firstImg = images[0],
            // get the first image inside the "slidy" element.
            imgWrap = firstImg.cloneNode(false); // copy it.
          slidy.appendChild(imgWrap); // add the clone to the end of the images
          var imgCount = images.length, // count the number of images in the slide, including the new cloned element
            totalTime = (timeOnSlide + timeBetweenSlides) * (imgCount - 1), // calculate the total length of the animation by multiplying the number of _actual_ images by the amount of time for both static display of each image and motion between them
            slideRatio = (timeOnSlide / totalTime) * 100, // determine the percentage of time an induvidual image is held static during the animation
            moveRatio = (timeBetweenSlides / totalTime) * 100, // determine the percentage of time for an individual movement
            basePercentage = 100 / imgCount, // work out how wide each image should be in the slidy, as a percentage.
            position = 0, // set the initial position of the slidy element
            css = document.createElement("style"); // start marking a new style sheet
          css.type = "text/css";
          css.innerHTML +=
            "#slidy { text-align: left; margin: 0; font-size: 0; position: relative; width: " +
            imgCount * 100 +
            "%;  }\n"; // set the width for the slidy container
          css.innerHTML +=
            "#slidy img { float: left; width: " + basePercentage + "%; }\n";
          css.innerHTML += "@" + keyframeprefix + "keyframes slidy {\n";
          for (i = 0; i < imgCount - 1; i++) {
            //
            position += slideRatio; // make the keyframe the position of the image
            css.innerHTML += position + "% { left: -" + i * 100 + "%; }\n";
            position += moveRatio; // make the postion for the _next_ slide
            css.innerHTML +=
              position + "% { left: -" + (i + 1) * 100 + "%; }\n";
          }
          css.innerHTML += "}\n";
          css.innerHTML +=
            "#slidy { left: 0%; " +
            keyframeprefix +
            "transform: translate3d(0,0,0); " +
            keyframeprefix +
            "animation: " +
            totalTime +
            "s slidy infinite; }\n"; // call on the completed keyframe animation sequence
          document.body.appendChild(css); // add the new stylesheet to the end of the document
        }
      </script>
    </main>
    <!-- ----------------------------------nxt about----------------------- -->
    <!-- ----------about--- -->
    <div class="about-head">
      <h1 style="text-transform: uppercase" id="who are we">Who are We?</h1>
    </div>
    <div class="about-cont">
      <div class="child-cont">
        <p>
          TrekkingEnInde.com, is an agency specially for adventure, Hiking
          (trekking), Rafting, Climbing in the mountains (Expedition) and
          Cycling Tour. The French-speaking agency based in New Delhi, Ladakh
          (Leh), Nainital (Kumaon Valley) and Darjeeling, India. A friendly,
          dynamic and professional team that uses its experience to satisfy you
          while respecting the customs of India. Our team speaks French to
          promote exchanges. The aim of TrekkingInIndia.com is to offer everyone
          the most beautiful adventure in North India and South India.
          TrekkingEnInde.com is the agency of preference in India, Nepal and
          Bhutan, on the theme of responsible tourism and ecotourism offering a
          selection of hotels and ecological and solidarity stays in India,
          Nepal and Bhutan. TrekkingEnInde.com was born from professional
          adventurers, passionate about travel and expeditions who spent more
          than 18 years, crisscrossing the mountains and paths around the Indian
          Himalayas. For those who wish, they will be a basis for developing a
          more personalized tailor-made trip. this range of trips pays
          particular attention to the choice of itineraries, the quality of
          accommodation and catering as well as the selection of local and
          management teams. Responsible travel is a trip that you make with your
          eyes wide open to the world, to the people you will meet and to the
          nature in which you will immerse yourself. In two words, respect and
          pleasure.
        </p>
      </div>
    </div>
    <!-- ------extra text--------------------- -->
    <div class="category-name">How to get there</div>
    <br />

    <div class="card-category-1">
      <!-- ------BASIC CARD--------- -->

      <div class="basic-card basic-card-light">
        <div class="card-content">
          <span class="card-title"
            ><img src="airplane.png" width="60px" style="margin-left: 35%"
          /></span>
          <p class="card-text">
            Leh Airport is conveniently connected to Delhi, Jammu and
            Srinagar.<br /><br />
          </p>
        </div>
      </div>
      <div class="basic-card basic-card-light">
        <div class="card-content">
          <span class="card-title"
            ><img src="bus.png" width="60px" style="margin-left: 35%"
          /></span>
          <p class="card-text">
            Leh is connected by good motorable roads to all major places in
            India through Manali and Srinagar.
          </p>
        </div>
      </div>
      <div class="basic-card basic-card-light">
        <div class="card-content">
          <span class="card-title"
            ><img src="train (1).png" width="60px" style="margin-left: 35%"
          /></span>
          <p class="card-text">
            The nearest railhead is Jammu Tawi or Kalka, both connected to all
            major cities and towns in India.<br />
          </p>
        </div>
      </div>

      <br />
    </div>
    <!-- -------------------destiny------------------ -->
    <div class="card-category-2">
      <span class="card-category-name">Choose your destination</span>

      <ul>
        <li>
          <div class="img-card iCard-style1">
            <div class="card-content">
              <div class="card-image">
                <img
                  src="images/passion of zanskar.jpg"
                  width="auto"
                  height="190px"
                />
              </div>

              <div class="card-text">
                <h3>PASSION OF ZANSKAR</h3>
              </div>
            </div>

            <div class="card-link">
              <a href="#" title="Read Full"><span>contact us</span></a>
            </div>
          </div>
        </li>

        <li>
          <div class="img-card iCard-style1">
            <div class="card-content">
              <div class="card-image">
                <img
                  src="images/the markha valley.jpg"
                  width="auto"
                  height="190px"
                />
              </div>

              <div class="card-text">
                <h3>TREKKING IN THE MARKHA VALLEY</h3>
              </div>
            </div>

            <div class="card-link">
              <a href="#" title="Read Full"><span>Contact Us</span></a>
            </div>
          </div>
        </li>

        <li>
          <div class="img-card iCard-style1">
            <div class="card-content">
              <div class="card-image">
                <img src="images/inhabitants.jpg" width="auto" height="190px" />
              </div>

              <div class="card-text">
                <h3>AMONG THE INHABITANTS</h3>
              </div>
            </div>

            <div class="card-link">
              <a href="#" title="Read Full"><span>Contact Us</span></a>
            </div>
          </div>
        </li>

        <li>
          <div class="img-card iCard-style1">
            <div class="card-content">
              <div class="card-image">
                <img src="images/nubra.jpg" width="auto" height="190px" />
              </div>

              <div class="card-text">
                <h3>NUBRA VALLEY</h3>
              </div>
            </div>

            <div class="card-link">
              <a href="#" title="Read Full"><span>Contact Us</span></a>
            </div>
          </div>
        </li>
      </ul>
    </div>
    <!-- ------------------Review section-------------------------------------------------------------------- -->
    <div class="section-name">
      <h2>Customers Review</h2>
    </div>
    <div class="slide-container-review swiper">
      <div class="slide-content">
        <div class="card-wrapper swiper-wrapper">
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile1.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">George 152</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">South India Voyages</h3>
              <p class="description">
                We visit with South India Voyages Bhawna, Thanks for provide
                best services, as we covered all Rajasthan Taj Mahal & Varanasi,
                excellent hotels, transport, and we'll professional guide.
                Thanks for your support and excellent services.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile2.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">Anny</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                A fantastic and top organised trip of India with an excellent
                guide Shankar. You show us your home country with a great
                pleasure and bring us to many place of interest. If we will come
                again to India, you have to be our guide too. Thank you for the
                ineffable nice impressions.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile3.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">Ruddymichael</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Karnataka & Goa</h3>
              <p class="description">
                We have third trips with Shankar South India voyages the
                services are always top, very nice comfortable hotels, our car &
                driver Deenakaran, cities guide good knowledgeable. We are too
                happy with such services. Thanks once more.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile4.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
          <div class="card swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile5.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile6.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile7.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile8.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
          <div class="card-review swiper-slide">
            <div class="image-content">
              <span class="overlay"></span>

              <div class="card-image-review">
                <img src="images/profile9.jpg" alt="" class="card-img" />
              </div>
            </div>

            <div class="card-content-review">
              <h2 class="name-review">David Dell</h2>
              <div class="icon_rating">
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
                <img class="icon_star" src="images/star.png" />
              </div>
              <h3 class="place_name">Travel agency in delhi - India</h3>
              <p class="description">
                The lorem text the section that contains header with having open
                functionality. Lorem dolor sit amet consectetur adipisicing
                elit.
              </p>
            </div>
          </div>
        </div>
      </div>

      <div class="swiper-button-next swiper-navBtn"></div>
      <div class="swiper-button-prev swiper-navBtn"></div>
      <div class="swiper-pagination"></div>
    </div>

    <!-- ----------------------------Review end ----------------------------------nxt -->
    <div class="footer-start">
      <footer id="footer" class="footer-1">
        <div class="main-footer widgets-dark typo-light">
          <div class="row">
            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="widget subscribe no-box">
                <img src="logo122.png" alt="" width="190px" /><br /><br />
                <p>
                  TrekkingEnInde.com, is an agency specially for adventure,
                  Hiking, Rafting, Climbing in the mountains and Cycling Tour.
                </p>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="widget no-box">
                <h5 class="widget-title">Quick Links<span></span></h5>
                <ul class="thumbnail-widget">
                  <li>
                    <div class="thumb-content">
                      <a href="index.html">Home</a>
                    </div>
                  </li>
                  <li>
                    <div class="thumb-content">
                      <a href="card.html">Our trip</a>
                    </div>
                  </li>
                  <li>
                    <div class="thumb-content"><a href="#">blog</a></div>
                  </li>
                  <li>
                    <div class="thumb-content">
                      <a href="contact.html">Contact</a>
                    </div>
                  </li>
                  <li>
                    <div class="thumb-content">
                      <a href="about.html">About us</a>
                    </div>
                  </li>
                  <li></li>
                </ul>
              </div>
            </div>

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="widget no-box">
                <h5 class="widget-title">Follow up<span></span></h5>
                <a href="#"> <i class="fa fa-facebook"> </i> </a>
                <a href="#"> <i class="fa fa-twitter"> </i> </a>
                <a href="#"> <i class="fa fa-youtube"> </i> </a>
              </div>
            </div>
            <br />
            <br />

            <div class="col-xs-12 col-sm-6 col-md-3">
              <div class="widget no-box">
                <h5 class="widget-title">Contact Us<span></span></h5>
                <p class="adress-company">
                  V-3 Netaji Nagar, Near Leela Palace, New Delhi - 110023
                  <br />Phone: +919910631152 <br />Email:
                  info@trekkingeninde.com
                </p>
                <form method="POST" action = "subscribe.php">
                <div class="emailfield">
                  <input
                    type="text"
                    name="email"
                    id="email"
                    placeholder="enter your email address"
                  />
                  <input name="uri" type="hidden" value="arabiantheme" />
                  <input name="loc" type="hidden" value="en_US" />
                  <input
                    class="submitbutton ripplelink"
                    type="submit"
                    value="Subscribe"
                  />
                </div>
                </from>
              </div>
            </div>
          </div>
        </div>

        <div class="footer-copyright">
          <div class="container" style="justify-content: center">
            <div class="row">
              <div class="col-md-12 text-center">
                <p>Copyright Netcare.. © 2022. All rights reserved.</p>
              </div>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <!-- Swiper JS -->
    <script src="js/swiper-bundle.min.js"></script>

    <!-- JavaScript -->
    <script src="js/script.js"></script>
    <!-- -------------------------------footer--------------------------- -->
  </body>
</html>
