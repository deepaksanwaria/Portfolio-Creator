<?php
if (isset($_POST['submit'])) {
    
    //DATA from input
    $name = $_POST['name'];
    $des=$_POST['des'];
    $github=$_POST['github'];
    $lindedin=$_POST['lindedin'];
    $twitter=$_POST['twitter'];
    $about=$_POST['about'];
    $skills=$_POST['skills'];
    $skillitem1=$_POST['skillitem1'];
    $skillper1=$_POST['skillper1']."%";
    $skillitem2=$_POST['skillitem2'];
    $skillper2=$_POST['skillper2']."%";
    $skillitem3=$_POST['skillitem3'];
    $skillper3=$_POST['skillper3']."%";
    $skillitem4=$_POST['skillitem4'];
    $skillper4=$_POST['skillper4']."%";
    $skillitem5=$_POST['skillitem5'];
    $skillper5=$_POST['skillper5']."%";
    $serviceh1=$_POST['serviceh1'];
    $srcvice_des1=$_POST['srcvice_des1'];
    $serviceh2=$_POST['serviceh2'];
    $srcvice_des2=$_POST['srcvice_des2'];
    $serviceh3=$_POST['serviceh3'];
    $srcvice_des3=$_POST['srcvice_des3'];
    $Address=$_POST['Address'];
    $phone=$_POST['phone'];
    $email=$_POST['email'];

    //Profile Image Upload
    $filename1 = $_FILES['pro_image']["name"];
    $tempname1 = $_FILES['pro_image']["tmp_name"];
    $profile_image="Media/temp/".$filename1;
    move_uploaded_file($tempname1,$profile_image);
    
    //project Image 1 Upload
    $filename2 = $_FILES['project1']["name"];
    $tempname2 = $_FILES['project1']["tmp_name"];
    $project_img_1="Media/temp/".$filename2;
    move_uploaded_file($tempname2,$project_img_1);
    
    //project Image 1 Upload
    $filename3 = $_FILES['project2']["name"];
    $tempname3 = $_FILES['project2']["tmp_name"];
    $project_img_2="Media/temp/".$filename3;
    move_uploaded_file($tempname3,$project_img_2);
    
    //project Image 1 Upload
    $filename4 = $_FILES['project3']["name"];
    $tempname4 = $_FILES['project3']["tmp_name"];
    $project_img_3="Media/temp/".$filename4;
    move_uploaded_file($tempname4,$project_img_3);
    

    }

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PORTFOLIO</title>
    <link rel="stylesheet" href="Stylesheets/style.css">
    <script type="text/javascript" src="script.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.2/css/all.min.css">
    <style type="text/css">
    .skills .content .col-right .bar .html:before {
            width:<?=$skillper1 ?>;
            background: #e45126;
        }
        
        .skills .content .col-right .bar .css:before {
            width:<?=$skillper2 ?>;
            background: #0c73b8;
        }
        
        .skills .content .col-right .bar .javascript:before {
            width:<?=$skillper3 ?>;
            background: #e3a324;
        }
        
        .skills .content .col-right .bar .python:before {
            width:<?=$skillper4 ?>;
            background: #30dd6d;
        }
        
        .skills .content .col-right .bar .java:before {
            width:<?=$skillper5 ?>;
            background: #6d7eb8;
        }
    </style>
</head>

<body>

    <header><a href="#" class="brand">PORTFOLIO</a>
        <div class="menu-btn"></div>
        <div class="navigation">
            <a href="#main">Home</a>
            <a href="#about">About</a>
            <a href="#skills">Skills</a>
            <a href="#services">Services</a>
            <a href="#work">Project</a>
            <a href="#contact">Contact</a>
        </div>
    </header>
    <section class="main" id="main">
        <div class="content">
            <h2>Hello, I'm<br><span><?=$name ?></span></h2>
                <h3><?=$des ?></h3>
                
            <a href="#" class="btn">HIRE ME</a>
            <div class="media-icons">
                <a href="<?=$github ?>" target="_blank"><i class="fab fa-github"></i></a>
                <a href="<?=$instagram ?>" target="_blank"><i class="fab fa-instagram"></i></a>
                <a href="<?=$lindedin ?>" target="_blank"><i class="fab fa-linkedin"></i></a>
                <a href="<?=$twitter ?>" target="_blank"><i class="fab fa-twitter"></i></a>
            </div>
        </div>

    </section>
    <section class="about" id="about">
        <div class="title">
            <h2 class="section-title">About Me</h2>
        </div>
        <div class="content">
            <div class="column col-left">
                <div class="img-card">
                    <image src="<?=$profile_image ?>" alt=""></image>
                </div>

            </div>
            <div class="column col-right ">
                <h2 class="content-title">Hey There! I'm name <?=$name ?></h2><br>
                <p class="paragraph-text"><?=$about ?></p>
                <div class="column col-right"><a href="#" class="btn">See More</a></div>
            </div>
        </div>
    </section>
    <section class="skills" id="skills">
        <div class="title ">
            <h2 class="section-title">My Skills</h2>
        </div>
        <div class="content">
            <div class="column col-left">
                <h2 class="content-title" style="color: #3a6cf4;">My Skills and Experience</h2>
                <p style="margin-top: 20px; font-size:20px;"><?=$skills ?>  </p>
                <div class="column col-left"><a href="#" class="btn">See More</a></div>
            </div>
            <div class="column col-right">
                <div class="bar">
                    <div class="info">
                        <span><?=$skillitem1 ?></span>
                        <span><?=$skillper1 ?></span>
                    </div>
                    <div class="line html"></div>
                </div>
                <div class="bar">
                    <div class="info">
                    <span><?=$skillitem2 ?></span>
                        <span><?=$skillper2 ?></span>
                    </div>
                    <div class="line css"></div>
                </div>
                <div class="bar">
                    <div class="info">
                    <span><?=$skillitem3 ?></span>
                        <span><?=$skillper3 ?></span>
                    </div>
                    <div class="line javascript"></div>
                </div>
                <div class="bar">
                    <div class="info">
                    <span><?=$skillitem4 ?></span>
                        <span><?=$skillper4 ?></span>
                    </div>
                    <div class="line python"></div>
                </div>
                <div class="bar">
                    <div class="info">
                    <span><?=$skillitem5 ?></span>
                        <span><?=$skillper5 ?></span>
                    </div>
                    <div class="line java"></div>
                </div>
            </div>
        </div>

    </section>
    <section class="services" id="services">
        <div class="title ">
            <h2 class="section-title">My Services</h2>
        </div>
        <div class="content">
            <div class="card ">
                
                <div class="info">
                    <h3><?=$serviceh1 ?></h3>
                    <p><?=$srcvice_des1."." ?></p>
                </div>
            </div>
            <div class="card ">
               
                <div class="info">
                <h3><?=$serviceh2 ?></h3>
                    <p><?=$srcvice_des2."." ?></p>
                </div>
            </div>
            <div class="card ">
                
                <div class="info">
                <h3><?=$serviceh3 ?></h3>
                    <p><?=$srcvice_des3."." ?></p>
                </div>
            </div>

        </div>
    </section>


  


   
    <section class="work" id="work">
        <div class="title">
            <h2 class="section-title">My Project</h2>
        </div>
        <div class="content">
            <div class="card">
                <div class="card-img">
                    <img src="<?=$project_img_1 ?>" alt="">
                </div>
            </div>
            <div class="card ">
                <div class="card-img">
                    <img src="<?=$project_img_2 ?>" alt="">
                </div>
            </div>
            <div class="card ">
                <div class="card-img">
                    <img src="<?=$project_img_3 ?>" alt="">
                </div>
            </div>
            <div class="title ">
                <a href="#" class="btn">See All</a>
            </div>

        </div>
    </section>






    <section class="contact" id="contact">
        <div class="title ">
            <h2 class="section-title">Contact Me</h2>
        </div>
        <div class="content">
            <div class="row">
                <div class="card ">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <div class="info">
                        <h3>Address</h3>
                        <span><?=$Address ?></span>
                    </div>
                </div>
                <div class="card ">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <div class="info">
                        <h3>Phone</h3>
                        <span><?=$phone ?></span>
                    </div>
                </div>
                <div class="card ">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <div class="info">
                        <h3>Email Address</h3>
                        <span><?=$email ?></span>
                    </div>
                </div>


            </div>
            <div class="row">
                <div class="contact-form ">
                    <h3>Send Message</h3>
                    <div class="input-box">
                        <input type="text" name="" value="" placeholder="Name">
                    </div>
                    <div class="input-box">
                        <input type="text" name="" value="" placeholder="Email">
                    </div>
                    <div class="input-box">
                        <textarea name="name" rows="8" cols="70" placeholder="Message"></textarea>
                    </div>

                    <div class="input-box">
                        <input type="submit" class="send-btn" name="" value="Send">
                    </div>

                </div>
            </div>
        </div>
    </section>


    <!--footer-->
    <footer class="footer">
        <span class="footer-title"><?=$name ?></span>
        <p>Copyright @2021 Portfolio. All Rights Reserved.</p>
    </footer>
    <script src="sript.js" charset="utf-8"></script>
</body>

</html>