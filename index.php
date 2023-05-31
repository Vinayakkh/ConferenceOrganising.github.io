<?php
include "conn.php";
?>
<?php
session_start(); // Start the session

// Check if the user is logged in
if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true) {
    $username = $_SESSION['username']; // Retrieve the username from the session
}
 else {
   
   $username="Technocrats";
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
<script src="https://kit.fontawesome.com/92c6f2cae7.js" crossorigin="anonymous"></script>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../Event Organising Event\pstyle.css">
    <link rel="stylesheet" href="../Event Organising Event\resp.js">
    <title>Tech Conference</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.css" />
</head>

<body>
    <nav class="navbar background h-nav-resp">
        <ul class="nav-list v-class-resp">
            <div class="logo"><img src="..\\Event Organising Event\Image\logo.png"alt="logo"></div>
            <li><a href="..\\Project/project.html">Home</a></li>
            <li><a href="#about">About</a></li>
            <li><a href="..\\Event Organising Event\ticket.html">Buy Tickets <i class="fa fa-light fa-ticket"></i></a></li>
            <li><a href="#contact">Contact Us</a></li>
            <!-- //login logout functionality -->
            <?php
            if (isset($_SESSION['loggedin']) && $_SESSION['loggedin'] === true){?>
            <li><a href="index.php?logout=1"><i class="fa fa-sign-out" aria-hidden="true"></i>Logout</a></li>
            <?php
            }else{
                ?>
        
            <li><a href="..\\Event Organising Event\Studentlogin.php">Login/Sign up</a></li>
            <?php
        }
        if (isset($_GET['logout'])) {
            // Logout button clicked
            session_unset(); // Unset all session variables
            session_destroy(); // Destroy the session
            header("Location: index.php"); // Redirect to the login page
            exit();
        }
        
        ?>
        </ul>
        <div class="rightNav v-class-resp">
            <input type="text" name="search" id="search"placeholder="Elon Musk">
            <button class="btn btn-sm" >Search</button>
        </div>
        <div class="burger">
            <div class="line"></div>
            <div class="line"></div>
            <div class="line"></div>
        </div>
    </nav>
   
    <section class="background firstSection">
        <div class="box-main">
            <div class="firstHalf">

                <p class="text-big">Hello !<i class="fa fa-solid fa-hand-wave"></i><br><?php echo $username ?> </p>
                <p class="text-small">Welcome to the world's largest conference oganization we provide you a world class features of many keynote speaker</p>
                <div class="buttons">
             <!--       <button class="btn">Subscribe</button>
                    <button class="btn">Watch Video</button> -->

                </div>
            </div>

       <!--     <div class="secondHalf"> 
                <img src="C:/Coding/Project/Image/audience-1853662_1920.jpg" alt="Laptop Image">
            </div> -->
        </div>
    </section>

    <section class="section">
        <div class="paras">
            <p class="sectionTag text-big">The end of your search is here</p>
            <p class="sectionSubTag text-small">By communicating with the experience holder we all get the knowlede of the  business and get the new and amazing ideas.
               Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
               tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
               quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
               consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
               cillum dolore eu fugiat nulla pariatur.</p>
        </div>
        <div class="thumbnail">
            <img src="..//Event Organising Event/Image/microsoft-365-oUbzU87d1Gc-unsplash.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section>

    <section class="section section-left" id="about">
        <div class="paras">
            <p class="sectionTag text-big">Get Business ideas by experienced speakers</p>
            <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. 
        </div>
        <div class="thumbnail">
            <img src="..//Event Organising Event/Image/microsoft-365-bWL-c09Ys80-unsplash.jpg" alt="laptop image" class="imgFluid">
        </div>
    </section>
    <section class="section" id="services">
        <div class="paras">
            <p class="sectionTag text-big">Lets Grow Together</p>
            <p class="sectionSubTag text-small">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
            tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
            quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
            consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
            cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
            proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>

            <p class="sectionSubTag text-small">
                Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                consequat. 
            </p>
        </div>
        <div class="thumbnail">
            <img src="..//Event Organising Event/Image/pexels-nappy-936137.jpg"alt="laptop image"
                class="imgFluid">
        </div>
   

    </section>
    <h1 class="text-center">The Great Event </h1>
    <p style="text-align:center;font-size: 42px;font-family: Comic sans;">Organising on 01 Jan 2023 at 09:00</p>
    <section class="secttion">
        <div class="paras">
        <p class="sectionTag text-big">Mr.Sunder Pichai</p>
         <p class="sectionSubTag text-small">Cheif Executer of google<br><br>      Pichai Sundararajan, better known as Sundar Pichai, is an Indian-American business executive. He is the chief executive officer of Alphabet Inc. and its subsidiary Google. Born in Madurai, India, Pichai earned his degree from IIT Kharagpur in metallurgical engineering. 
            </p>
</div>

<div class="upcoming">
        <img src="..\\Event Organising Event\Image\Sunder_pichai.jpg">
    </div>
  
</section>
<p style="text-align:center;font-size:40px;font-family:Arial Narrow">Event Starts in:</p>
<div class="launchtime">

        <div>

            <p id="days">00</p>
            <span>Days</span>
        </div>
    <div>
        <p id="hours">00</p>
        <span>Hours</span>
    </div>
    <div>
    <p id="minutes">00</p>
    <span>Minutes</span>
    </div>
    <div>
    <p id="seconds">00</p>
    <span>Seconds</span>
</div>
</div>
    <p class="sectionTag text-big"style="font-family:cursive"style="margin-left:38%">Our Past Events</p>
    
    <section>
    <div class="container">
       
        <div class="swiper">
            <!-- Additional required wrapper -->
            <div class="swiper-wrapper">
              <!-- Slides -->
              <div class="swiper-slide"><img src="..//Event Organising Event/Image/software-development-4165307_1920.jpg"></div>
              <div class="swiper-slide"><img src="..//Event Organising Event/Image/conimage.jpg"></div>
              <div class="swiper-slide"><img src="..//Event Organising Event/Image/pexels-icsa-1709003.jpg"></div>
              <div class="swiper-slide"><img src="..//Event Organising Event/Image/pexels-luis-quintero-2774556.jpg"></div>
            </div>
            
            <div class="swiper-pagination"></div>
          
            
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
          
           
          </div>
    </div>
    </section>
        
<h1 class="text-center">Speakers</h1>
<div class="speaker">
<div class="imgbox">
<figure class="hover-img">
  <img src="../Event Organising Event/Image/paul-image-1.jpg"/>
  <figcaption>
     <h3>Paul krismer</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
        <div class="imgbox">
<figure class="hover-img">
  <img src="..//Event Organising Event/Image/Liz_murray.jpeg"/>
  <figcaption>
     <h3>Liz Murray</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
        <div class="imgbox">
<figure class="hover-img">
  <img src="..//Event Organising Event/Image/Patrick Lencioni.jpg"/>
  <figcaption>
     <h3>Patrick Lencioni</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
</div>
    <div class=speaker>
        <div class="imgbox">
<figure class="hover-img">
  <img src="..//Event Organising Event/Image/prof-anil-gupta_web.jpg"/>
  <figcaption>
     <h3>Anil Kumar Gupta</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
    <div class="imgbox">
<figure class="hover-img">
  <img src="..//Event Organising Event/Image/Marcus_buckingham.jpg"/>
  <figcaption>
   <h3>Marcus Buckingham</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
    <div class="imgbox">
<figure class="hover-img">
  <img src="..//Event Organising Event/Image/Dr-Vivek-Bindra-Bada-Business-founder-CEO.jpg"/>
  <figcaption>
    <h3>Dr. Vivek Bindra</h3><br>
    <span class="fa-stack fa-2x">
        <i class="fa-brands fa-linkedin fa-stack-1x"></i>&nbsp&nbsp<i class="fa-brands fa-twitter fa-stack-1x"></i>
    </span>
  </figcaption>
</figure>
</div>
        </div>    


     <section class="contact" id="contact">
        <h1 class="text-center">Contact Us</h1>
        <div class="form">
            <input class="form-input" type="text" name="name" id="name" placeholder="Enter Your name">
            <input class="form-input" type="text" name="phone" id="phone" placeholder="Enter Your Phone">
            <input class="form-input" type="email" name="email" id="email" placeholder="Enter Your email">
            <textarea class="form-input" name="text" id="text" cols="30" rows="10"
                placeholder="Ellaborate your concern"></textarea>
            <button class="btn btn-sm btn-dark">Submit</button>
        </div>
        </section>

        <footer class="background">
            <p class="text-footer">
                Copyright &copy; 2027 - www.CseTech.com - All rights reserved
            </p>
        </footer>
        <script src="..\\Event Organising Event/resp.js"></script>
        <script src="https://cdn.jsdelivr.net/npm/swiper@8/swiper-bundle.min.js"></script>
        <script>
            const swiper = new Swiper('.swiper', {
                autoplay:{
                    delay: 3000,
                    disableOnInteraction: false,
                },
  loop: true,
  pagination: {
    el: '.swiper-pagination',
    clickable:true,
  },
  navigation: {
    nextEl: '.swiper-button-next',
    prevEl: '.swiper-button-prev',
  },

  
});


        </script>
        <script>
            var countDownDate=new Date("Jan 01, 2023 09:00:00").getTime();
            var x=setInterval(function(){
                var now=new Date().getTime();
                var distance=countDownDate - now;
                
                var days=Math.floor(distance/(1000*60*60*24));
                var hours=Math.floor((distance%(1000*60*60*24))/(1000*60*60));
                var minutes=Math.floor((distance%(1000*60*60))/(1000*60));
                var seconds=Math.floor((distance%(1000*60))/(1000));


                    document.getElementById("days").innerHTML=days;
                    document.getElementById("hours").innerHTML=hours;
                    document.getElementById("minutes").innerHTML=minutes;
                    document.getElementById("seconds").innerHTML=seconds;

                    if(distance<0){
                        clearInterval(x);
                        document.getElementById("days").innerHTML=0;
                    document.getElementById("hours").innerHTML=0;
                    document.getElementById("minutes").innerHTML=0;
                    document.getElementById("seconds").innerHTML=0;
                    }
            },1000);
            </script>
</body>

</html>