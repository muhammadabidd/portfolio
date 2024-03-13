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
    </head>
<body>

    <!--HERO START-->
    <div class="header section">
        <nav>
            <img src="img/Logo.png" alt="" class="logo">
            <ul>
                <li><a class="heading-list" href="#about">01. About</a></li>
                <li><a class="heading-list" href="#experience">02. Experience</a></li>
                <li><a class="heading-list" href="#project">03. Project</a></li>
                <li><a class="heading-list" href="#contact">04. Contact</a></li>
            </ul>
            <a href="https://muhammadabidd.github.io/blog/" target="_blank"><button class="mainbutton button"> Blog</button></a>
        </nav>
    </div>
    <div class="hero section" id="hero">
        <div class="content content-hero">
            <p class="text-pendek1">Hi, My name is</p>
            <h1 class="">Muhammad Abid;</h1>
            <h2 class=""> I Love to learn, teach, and inspect data</h2>
            
            <div class="text-hero">
                <p class="text-panjang hero-text">
                   A <span class="green">coding educator</span> with a strong interest for <span class="green">artificial intelligence (AI)</span>. While my main focus is on teaching coding, I am deeply interested in exploring the potential and applications of AI and machine learning. 
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
                        Hello, I'm Abid, a passionate educator with a Bachelor's degree in <span class="green">Mathematics Education</span>. I have a strong affinity for both teaching and mathematics. Throughout my career, I have taught at various schools, including <span class="green">Sekolah Indonesia Jeddah</span> in Saudi Arabia, and currently teach coding at <span class="green"></span>Brightchamps. Additionally, I have created mathematics learning videos for <span class="green">Roboguru</span>, which is a part of <span class="green">Ruangguru</span>. I am continuously expanding my knowledge in <span class="green">AI</span> and <span class="green">machine learning</span> fields and exploring new technologies to enhance my teaching approach.
                    </p>
                    <ul class="about_outside">
                        <ul class="about">
                            <li>Python</li>
                            <li>SQLite</li>
                            <li>Flask & Swagger-UI API</li>
                            <li>HTML & CSS</li>
                            <li>R for Data Science</li>
                            <li>Roblox Studio</li>
                            <li>Scratch</li>
                            <li>Thunkable</li>
                        </ul>

                        
            
                        <ul class="about_second">
                            <li>Wordpress</li>
                            <li>Git & Github</li>
                            <li>Notion & Miro</li>
                            <li>Visual Studio Code</li>
                        </ul>    
                    </ul>
                </div>
                <img class="potrait" src="img/Me.png" alt="">
                
            </div>

            <button class="button hero-button"> <a href="https://www.cakeresume.com/s--SrNBGToK5sS05g9-9ZlODQ--/muhammad-abid-289abf" target="_blank"> Resume</a></button>
            <button class="button hero-button"> <a href="https://blush-bath-32a.notion.site/c4645315e55a4b49b73ce529097972d9?v=d4208735eb8441199290e6a10bbe4d0e" target="_blank"> Certification</a></button>
        </div>     
    </div>
    <!--ABOUT END-->



    <!--EXPERIENCE START-->
    <div class="experience-section section"  id="experience">
        <div class="content content-experience">
            <div class="sub">
                <h3>02. Where I’ve Worked</h>
            </div>

            <div class="isi">
                <div class="tab">
                    <button class="tablinks" onclick="openExperience(event, 'Brightchamps')" id="defaultOpen">Brightchamps</button>
                    <button class="tablinks" onclick="openExperience(event, 'RAS')" >Rumah Amal Salman</button>
                    <button class="tablinks" onclick="openExperience(event, 'Ruangguru')">Ruangguru</button>

                    <button class="tablinks" onclick="openExperience(event, 'SIJ')">Indonesian School of Jeddah</button>
                    <button class="tablinks" onclick="openExperience(event, 'UPI')">Indonesia University of Education</button>
                </div>
                
                <div id="Brightchamps" class="tabcontent">
                    <h4>Coding Educator <span class="green">@ Brightchamps</span></h4>
                    <p class="time">Des 2022 - Now</p>
                    <ul class="jobdesk ">
                        <li><span class="list text-panjang" > Attained the  title of nationwide best teacher in February 2023</span></li>
                        <li><span class='list text-panjang' > Taught coding and technology skills to students in grades 1-12 as part of an international startup company</span></li>
                        <li><span class="list text-panjang" > Designed and delivered customized lesson plans for individual learning styles and needs</span></li>
                        <li><span class="list text-panjang" > Taught a diverse range of projects, including Scratch, Thunkable, 3D modeling, AR/VR, and Python</span></li>
                        <li><span class="list text-panjang" > Collaborated with parents to ensure students received necessary support and resources to succeed</span></li>
                    </ul>
                </div>

                <div id="RAS" class="tabcontent">
                    <h4>Head of Imam Muda Salman Scholarship <span class="green">@ Rumah Amal Salman</span></h4>
                    <p class="time">Jan 2022 - May 2022</p>
                    <ul class="jobdesk ">
                        <li><span class="list text-panjang" > Managed nationwide scholarship program, overseeing application screening, interview selection, and award disbursement. </span></li>
                        <li><span class='list text-panjang' > Supervised awardee progress to ensure compliance with program requirements, including academic performance and community involvement. 
                        </span></li>
                            
                        <li><span class="list text-panjang" > Coordinated with financial institutions and scholarship sponsors to distribute scholarship fees accurately and timely. 
                        </span></li>
                        <li><span class="list text-panjang" > Managed social media accounts, creating engaging content and enhancing visual assets, resulting in a 10% increase in Instagram followers within four months.
                        </span></li>

                    </ul>
                </div>

                <div id="Ruangguru" class="tabcontent">
                    <h4>Mathematics Master Teacher <span class="green">@ Ruangguru</span></h4>
                    <p class="time">May 2021 - Nov 2021</p>
                    <ul class="jobdesk">
                        <li><span class="list" > Developed and produced 350+ video solutions for math problems.</span></li>
                        <li><span class="list" > Created solutions for basic to advanced math concepts. 
                        </span></li>
                        <li><span class='list' > Managed video production from start to finish. 
                        </span></li>
                        <li><span class="list" > Maintained a comprehensive database of solutions and corresponding math problems.
                        </span> </li>
                  
                </div>



                <div id="SIJ" class="tabcontent">
                    <h4>Mathematics Teacher Intern <span class="green">@ Indonesian School of Jeddah</span></h4>
                    <p class="time">Oct 2020 - Des 2020</p>
                    <ul class="jobdesk">
                        <li><span class="list" > Designed and delivered tailored lesson plans aligned with the national curriculum. 
                        </span></li>
                        <li><span class="list" > Collaborated with teachers and administrators to promote academic achievement. 
                        </span></li>
                        <li><span class='list' > Guided and mentored student leaders in forming the Student Council (OSIS). 
                        </span></li>
                        <li><span class='list' > Recognized as a favorite teacher for making math engaging and accessible through creative and interactive teaching methods.
                        </span></li>
                </div>

                <div id="UPI" class="tabcontent">
                    <h4>Professional Laboratory Assistant <span class="green">@ Indonesia University of Education</span></h4>
                    <p class="time">Jun 2019 - Oct 2020</p>
                    <ul class="jobdesk">
                        <li><span class="list" > Maintained computer lab equipment and prepared computers for use before each class session</span></li>
                        <li><span class="list" > Troubleshot and resolved technical issues with computer software and hardware </span></li>
                        <li><span class='list' > Managed library resources by selecting, developing, cataloging, and classifying materials </span></li>
                        <li><span class='list' > Maintained accurate records of library holdings and ensured records were up-to-date </span></li>
                        <li><span class='list' > Maintained laboratory facilities and ensured they were clean and organized </span></li>
                        <li><span class='list' > Assisted students and faculty in using computer software and other laboratory resolutions</span></li>
                </div>

            </div>
            <div class="clear"></div>
        </div>
    </div>
    <!--EXPERIENCE END-->


    <!-- PROJECT START -->
    <div class="project-section section" id="project">
        <div class="content content-project">
            <div class="sub">
                <h3>03. My Project</h>
            </div>

            <div class="flexbox-container">
                <div class="flexbox-item flexbox-item-1">
                <a href="https://github.com/muhammadabidd/Binar_Gold_Challenge" target="_blank">
                    <div class="flexbox-atasbawah">
                        <div class="gambar-inline">
                            <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                            <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;"alt="">
                        </div>
                        <h4 class="flexbox-header">API Documentation for Data Processing and Modeling </h4>
                        <p class="flexbox-text">Building API for data cleansing using Flask. This API will process the inputted text/file so that there are no more unnecessary character in the text so the text will look more tidier.</p>
                    </div>
                    <div class="flexbox-atasbawah">
                        <div class="project-tag">
                            <ul>
                                <li>API</li>
                                <li>Binar Academy</li>
                                <li>Python</li>
                            </ul>
                        </div>
                    </div> 
                </a>
                </div>

                <div class="flexbox-item flexbox-item-2">
                <a href="https://github.com/muhammadabidd/Datacamp--The-GitHub-History-of-the-Scala-Language" target="_blank">
                    <div class="flexbox-atasbawah">
                        <div class="gambar-inline">
                            <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                            <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;" alt="">
                        </div>
                        <h4 class="flexbox-header">The GitHub History of the Scala Language </h4>
                        <p class="flexbox-text">With almost 30k commits and a history spanning over ten years, Scala is a mature programming language. It is a general-purpose programming language that has recently become another prominent language for data scientists. this project will find out who has had the most influence on its development and who are the experts. </p>
                    </div>
                    <div class="flexbox-atasbawah">
                        <div class="project-tag">
                            <ul>
                                <li>Datacamp</li>
                                <li>Python</li>
                                <li>Matplotlib</li>
                            </ul>
                        </div>
                    </div> 
                </a>
                </div>

                <div class="flexbox-item flexbox-item-3">
                <a href="https://github.com/muhammadabidd/DataCamp_Investigating-Netflix-Movies-and-Guest-Stars-in-The-Office" target="_blank">
                    <div class="flexbox-atasbawah">
                        <div class="gambar-inline">
                            <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                            <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;" alt="">
                        </div>
                        <h4 class="flexbox-header">Investigating Netflix Movies and Guest  Stars in The Office</h4>
                        <p class="flexbox-text">This project do some analysis throughout netflix film distributin from 1997 until 2020. </p>
                    </div>
                    <div class="flexbox-atasbawah">
                        <div class="project-tag">
                            <ul>
                                <li>Datacamp</li>
                                <li>Python</li>
                                <li>Matplotlib</li>
                            </ul>
                        </div>
                    </div> 
                </a>
                </div>

                <?php
                include("card.php");
                ?>

                
                <div class="flexbox-item flexbox-item-4">
                    <a href="https://github.com/muhammadabidd/PlatinumChallenge-Kelompok02" target="_blank">
                        <div class="flexbox-atasbawah">
                            <div class="gambar-inline">
                                <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                                <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;" alt="">
                            </div>
                            <h4 class="flexbox-header">Neural Network API</h4>
                            <p class="flexbox-text">Neural Network API to determine the sentiment of a given sentences as either positive or negative sentiment. This API use Machine Learning (Neural Network especially) to complete.
                                 </p>
                        </div>
                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <ul>
                                    <li>Machine Learning</li>
                                    <li>Python</li>
                                    <li>Neural Network</li>
                                </ul>
                            </div>
                        </div> 
                    </a>
                </div>

                <div class="flexbox-item flexbox-item-5">
                    <a href="https://www.roblox.com/games/13347095097/" target="_blank">
                        <div class="flexbox-atasbawah">
                            <div class="gambar-inline">
                                <img class="image-filter" src="img/svg/folder.svg" style="height: 44px; width: 44px;" alt="">
                                <img class = "outside-link" src="img/svg/link.svg" style="height: 25px; width: 25px;" alt="">
                            </div>
                            <h4 class="flexbox-header">Roblox - Squid Game</h4>
                            <p class="flexbox-text">This project is a Roblox game called "Squid Game" inspired by the popular Netflix series. It features a red light, green light game where players need to freeze during the red light phase to avoid being eliminated
                                 </p>
                        </div>
                        <div class="flexbox-atasbawah">
                            <div class="project-tag">
                                <ul>
                                    <li>Roblox Studio</li>
                                    <li>Lua</li>
                                    
                                </ul>
                            </div>
                        </div> 
                    </a>
                </div>


            </div>
        </div>
    </div>
    <!-- PROJECT END -->





                

                


    <!--CONTACT START-->
    <div class="contact-section section" id="contact">
        <div class="content content-contact">
            <h1 class="contact">Get In Touch</h1>
            <p class="text-panjang text-contact">Currently looking for new opportunities, my inbox is always open. Just say hi, i'll try my best to get back to you!</p> 
            <button class="button contact-button" ><a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." class="" target="_blank">Say Hi</a></button>
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
        </div>
    </div>

    <div class="SocialMedia-left">
        <a href="https://www.linkedin.com/in/muhammmadabidd/" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-1" src="img/svg/linkedin.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="https://github.com/muhammadabidd" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-2" src="img/svg/github.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." class="SocialMedia-link" target="_blank"><img class="gambar-kiri-3" src="img/svg/email.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <a href="https://api.whatsapp.com/send/?phone=6281273568772&text&type=phone_number&app_absent=0" class="SocialMedia-link" target="_blank"><img class="gambar-kiri-4" src="img/svg/whatsapp.svg" style="height: 18px; width: 18px;" alt="" target="_blank"> </a>
        <div class="vertical-line"></div>
    </div>
        

    <div class="SocialMedia-right">
        
        <p class="right"><a class = "link-right "href="mailto:muhammmadabidd@gmail.com?body=Hi%20Abid..%0D%0A..%0D%0A.." target="_blank">muhammmadabidd@gmail.com</a></p>
        <div class="vertical-line"></div>
    </div>


    <!-- SOCIAL MEDIA END -->


    <!-- FOOTER START -->
    <div class="footer-section section">
        <div class="content-footer footer">
            <p class="text-footer">Built by Muhammad Abid</p>
            <p class="text-footer">Inspired by Brittany Chiang</p>

            <p class="text-footer">@2023</p>
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
    </script>

</body>
</html>