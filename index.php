<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Muhammad Abid</title>

    <link rel="icon" href="img/Logo-header.png" type="">

    <link rel="stylesheet" href="style/style.css">
    <link rel="stylesheet" href="style/card.css">
    <link rel="stylesheet" href="style/button.css">
    <link rel="stylesheet" href="style/nav.css">
    <link rel="stylesheet" href="style/list.css">
    <link rel="stylesheet" href="style/text.css">
    <link rel="stylesheet" href="style/00hero.css">
    <link rel="stylesheet" href="style/01about.css">
    <link rel="stylesheet" href="style/02experience.css">
    <link rel="stylesheet" href="style/04contact.css">
    <link rel="stylesheet" href="style/05footer.css">
    <link rel="stylesheet" href="style/06SocialMedia.css">
    <link rel="stylesheet" href="style/06SocialMediaLeft.css">
    <link rel="stylesheet" href="style/06SocialMediaRight.css">
    <link rel="stylesheet" href="style/animation.css">
    <link rel="stylesheet" href="style/07videosection.css">
    <link rel="stylesheet" href="style/08certificationsection.css">
    <link rel="stylesheet" href="style/09datasection.css">
</head>

<body>

    <!--HERO START-->
    <div class="header section">
        <nav>
            <img src="img/Logo.png" alt="" class="logo">
            <ul>
                <li><a class="heading-list" href="#about">01. About</a></li>
                <li><a class="heading-list" href="#experience">02. Experience</a></li>
                <li><a class="heading-list" href="#certification">03. Certification</a></li>
                <li><a class="heading-list" href="#project">04 Projects</a></li>

                <li><a class="heading-list" href="#contact">05. Contact</a></li>
            </ul>
            <a href="https://muhammadabidd.github.io/blog/" target="_blank"><button class="mainbutton button"> Blog</button></a>
        </nav>
    </div>
    <div class="hero section" id="hero">
        <div class="content content-hero">
            <p class="text-pendek1">Hi, My name is</p>
            <h1 class="">Muhammad Abid;</h1>
            <h2 class=""> Data Analyst | Software Developer | Programming Teacher</h2>

            <div class="text-hero">
                <p class="text-panjang hero-text">
                Certified data analyst, specializing in Python, machine learning, and libraries like Pandas, NumPy, and TensorFlow. I apply my skills to build data-driven solutions, such as my wallet budgeting app and money management dashboard. With a passion for software development, I combine data analysis with programming in C++, Java, and game development platforms like Scratch and Roblox Studio. I also enjoy teaching and helping others learn about data analytics and software development.
                </p>
            </div>

            <button class="button hero-button"> <a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." target="_blank"> Say Hi</a></button>
        </div>
    </div>
    <!--HERO END-->


    <!--ABOUT START-->
    <div class="about-section section" id="about">
        <div class="content ">
            <h3>01. About Me</h>
                <div class="pemerataan">
                    <div class="left-about">
                        <p class="text-panjang text-about">
                            Hello, I'm Abid, a certified data analyst, with a focus on using Python, machine learning, and a variety of related libraries to analyze and visualize data. My expertise extends to libraries such as Pandas, NumPy, Scikit-learn, TensorFlow, Seaborn, and Matplotlib, which I apply to build data-driven solutions like my wallet budgeting app and money management dashboard. 

                            While my primary focus is data analysis, I’m also passionate about software development. I enjoy combining my data skills with programming to create functional applications. My complementary knowledge includes game development with Scratch and Roblox Studio, as well as strong proficiency in C++ and Java, enabling me to develop diverse projects and deliver innovative solutions.

                            In addition to my technical skills, I love helping others learn about data analytics and software development. Sharing my knowledge and helping others grow in these fields is one of the most rewarding aspects of what I do.
                        </p>
                        <ul class="about_outside">
                            <ul class="about">
                                <li>Python</li>
                                <li>SQL(Postgre)</li>
                                <li>Java</li>
                                
                                <li>Flask & Swagger-UI API</li>
                                <li>HTML & CSS</li>
                                <li>Roblox Studio</li>
                                <li>Scratch</li>
                                <li>Thunkable</li>
                            </ul>



                            <ul class="about_second">
                                <li>Machine Learning</li>
                                <li>Neural Network</li>
                                <li>Pandas</li>
                                <li>Numpy</li>
                                <li>Scipy</li>
                                <li>Matplotlib</li>
                                <li>Seaborn</li>
                            </ul>

                            <!-- <ul class="about_third">
                                <li>Wordpress</li>
                                <li>Git & Github</li>
                         
            
                            </ul> -->
                        </ul>
                    </div>
                    <img class="potrait" src="img/Me.png" alt="">

                </div>

                <button class="button hero-button"> <a href="https://www.cakeresume.com/s--SrNBGToK5sS05g9-9ZlODQ--/muhammad-abid-289abf" target="_blank"> Resume</a></button>
                <button class="button hero-button"> <a href="https://muhammadabid.notion.site/c4645315e55a4b49b73ce529097972d9?v=d4208735eb8441199290e6a10bbe4d0e&pvs=74" target="_blank"> Certification</a></button>
        </div>
    </div>
    <!--ABOUT END-->



    <!--EXPERIENCE START-->
    <?php include("sections/experience.php")  ?>
    <!--EXPERIENCE END-->

    <!-- CERTIFICATION START -->
    <?php include("sections/certifications.php")  ?>
    <!-- CERTIFICATION END -->

    <!--PROJECT START-->
    <?php include("sections/project_card.php")  ?>
    <!--PROJECT END-->

    <!-- DATA PROJECTS START -->
    <?php include("sections/data.php")  ?>
    <!-- DATA PROJECTS END -->

    <!-- COURSES TAKEN START -->
    <?php include("sections/course.php")  ?>
    <!-- COURSES TAKEN END -->

    <!-- VIDEO START -->
    <?php include("sections/video.php")  ?>
    <!-- VIDEO END -->



    <!--CONTACT START-->
    <div class="contact-section section" id="contact">
        <div class="content content-contact">
            <h1 class="contact">Get In Touch</h1>
            <p class="text-panjang text-contact">Currently looking for new opportunities, my inbox is always open. Just say hi, i'll try my best to get back to you!</p>
            <button class="button contact-button"><a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." class="" target="_blank">Say Hi</a></button>
        </div>
    </div>
    <!--CONTACT END-->


    <!-- SOCIAL MEDIA START -->
    <div class="SocialMedia-section section">
        <div class="SocialMedia-content">
            <a href="https://www.linkedin.com/in/muhammmadabidd/" class="SocialMedia-link" target="_blank"><img class="gambar-tengah-1" src="img/svg/linkedin.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
            <a href="https://github.com/muhammadabidd" class="SocialMedia-link" target="_blank"><img class="gambar-tengah-2" src="img/svg/github.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
            <a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." class="SocialMedia-link" target="_blank"><img class="gambar-tengah-3" src="img/svg/email.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
            <a href="https://api.whatsapp.com/send/?phone=6281273568772&text&type=phone_number&app_absent=0" class="SocialMedia-link" target="_blank"><img class="gambar-tengah-4" src="img/svg/whatsapp.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
            <a href="https://twitter.com/muhammmadabidd" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-5" src="img/x.png" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        </div>
    </div>

    <div class="SocialMedia-left">
        <a href="https://www.linkedin.com/in/muhammmadabidd/" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-1" src="img/svg/linkedin.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="https://github.com/muhammadabidd" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-2" src="img/svg/github.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." class="SocialMedia-link" target="_blank"><img class="gambar-kiri-3" src="img/svg/email.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="https://api.whatsapp.com/send/?phone=6281273568772&text&type=phone_number&app_absent=0" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-4" src="img/svg/whatsapp.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="https://twitter.com/muhammmadabidd" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-5" src="img/x.png" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <div class="vertical-line"></div>
    </div>


    <div class="SocialMedia-right">
        <p class="right"><a class="link-right " href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." target="_blank">muhammmadabidd@gmail.com</a></p>
        <div class="vertical-line"></div>
    </div>


    <!-- SOCIAL MEDIA END -->


    <!-- FOOTER START -->
    <div class="footer-section section">
        <div class="content-footer footer">
            <p class="text-footer">Built by Muhammad Abid</p>
            <p class="text-footer">Inspired by Brittany Chiang</p>

            <p class="text-footer">@2024</p>
        </div>
    </div>

    <!-- FOOTER END -->



    <!--SCRIPT-->
    <script>
        function openExperience(evt, experienceName) {
            var i, tabcontent, tablinks;
            tabcontent = document.getElementsByClassName("tabcontent");
            for (i = 0; i < tabcontent.length; i++) {
                tabcontent[i].style.display = "none";
            }
            tablinks = document.getElementsByClassName("tablinks");
            for (i = 0; i < tablinks.length; i++) {
                tablinks[i].className = tablinks[i].className.replace(" active", "");
            }
            document.getElementById(experienceName).style.display = "block";
            evt.currentTarget.className += " active";
        }

        // Get the element with id="defaultOpen" and click on it
        document.getElementById("defaultOpen").click();







        document.addEventListener("DOMContentLoaded", function() {
            // Data Section
            var showMoreDataBtn = document.getElementById("showMoreDataBtn");
            var dataCards = document.querySelectorAll("#data .flexbox-container .card");

            // Courses Section
            var showMoreCoursesBtn = document.getElementById("showMoreCoursesBtn");
            var courseCards = document.querySelectorAll("#courses .flexbox-container .card");

            // Courses Section
            var showMoreVideoBtn = document.getElementById("showMoreVideoBtn");
            var videoCards = document.querySelectorAll("#video .flexbox-container .card");

            var dataHidden = false;
            var courseHidden = false;
            var videoHidden = false;



            console.log(dataCards)
            console.log(courseCards)



            // CARA 1

            toggleDataCards();
            toggleCourseCards();
            toggleVideoCards();



            showMoreDataBtn.addEventListener("click", function() {
                toggleDataCards();
            });

            showMoreCoursesBtn.addEventListener("click", function() {
                toggleCourseCards();
            });

            showMoreVideoBtn.addEventListener("click", function() {
                toggleVideoCards();
            });

            function toggleDataCards() {
                for (var i = 6; i < dataCards.length; i++) {
                    console.log(dataHidden)
                    dataCards[i].classList.toggle('hidden');
                    dataCards[i].style.display = dataHidden ? "block" : 'none';
                }
                dataHidden = !dataHidden;
                showMoreDataBtn.textContent = dataHidden ? "See More" : "See Less";
            }

            function toggleCourseCards() {

                for (var i = 6; i < courseCards.length; i++) {
                    courseCards[i].classList.toggle('hidden');
                    courseCards[i].style.display = courseHidden ? "block" : 'none';
                }
                courseHidden = !courseHidden;
                showMoreCoursesBtn.textContent = courseHidden ? "See More" : "See Less";
            }

            function toggleVideoCards() {

                for (var i = 6; i < videoCards.length; i++) {
                    videoCards[i].classList.toggle('hidden');
                    videoCards[i].style.display = videoHidden ? "block" : 'none';
                }
                videoHidden = !videoHidden;
                showMoreVideoBtn.textContent = videoHidden ? "See More" : "See Less";
            }





        });
    </script>

</body>

</html>