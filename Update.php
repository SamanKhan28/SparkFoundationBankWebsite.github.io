<?php

include 'connection.php';

if (isset($_POST['done'])) {

    $_Id = $_GET['Id'];

    $cn = $_POST['CustomerName'];
    $e = $_POST['Email'];
    $an = $_POST['AccountNo'];
    $q = "UPDATE `customersinfo` SET `CustomerName`='$cn',`CustomerEmail`='$e',`Account_Number`='$an'  WHERE Id =$_Id";


    $query = mysqli_query($con, $q);

    header('location:CustomerInfo.php');
}

?>
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SPARK BANK</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<!DOCTYPE html>
<html lang="en">

<head>
    <!-- basic -->
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <!-- mobile metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="viewport" content="initial-scale=1, maximum-scale=1">
    <!-- site metas -->
    <title>SPARK BANK</title>
    <meta name="keywords" content="">
    <meta name="description" content="">
    <meta name="author" content="">
    <!-- bootstrap css -->
    <link rel="stylesheet" href="css/bootstrap.min.css">
    <!-- style css -->
    <link rel="stylesheet" href="css/style.css">
    <!-- responsive-->
    <link rel="stylesheet" href="css/responsive.css">
    <!-- awesome fontfamily -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
</head>
<!-- body -->

<body class="main-layout inner_page">
    <!-- loader  -->
    <div class="loader_bg">
        <div class="loader"><img src="images/loading.gif" alt="" /></div>
    </div>
    <!-- end loader -->
    <div id="mySidepanel" class="sidepanel">
        <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">×</a>
        <a href="index.html">Home</a>
        <a href="about.html">About</a>
        <a href="searvices.html">Services</a>
        <a href="testimonial.html">Testimonial</a>
        <a href="works.html">Works</a>
        <a class="active" href="contact.html">Contact</a>
    </div>
    <!-- header -->
    <header>
        <!-- header inner -->
        <div class="head-top">
            <div class="container-fluid">
                <div class="row d_flex">
                    <div class="col-sm-3">
                        <div class="logo">
                            <a href="index.html">SPARK BANK</a>
                        </div>
                    </div>
                    <div class="col-sm-5">
                        <ul class="social_icon text_align_right d_none">
                            <li> <a href="Javascript:void(0)"><i class="fa fa-facebook-f"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-twitter"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-linkedin" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-instagram" aria-hidden="true"></i></a></li>
                            <li> <a href="Javascript:void(0)"><i class="fa fa-youtube-play" aria-hidden="true"></i></a></li>
                        </ul>
                    </div>
                    <div class="col-sm-4">
                        <ul class="email text_align_right">
                            <li class="d_none"><a href="Javascript:void(0)"><i class="fa fa-user" aria-hidden="true"></i></a></li>
                            <li class="d_none"> <a href="Javascript:void(0)"><i class="fa fa-search" style="cursor: pointer;" aria-hidden="true"></i></a> </li>
                            <li>
                                <button class="openbtn" onclick="openNav()"><img src="images/menu_btn.png"></button>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- end header -->
    <div class="contact">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                </div>
            </div>
            <div class="border_testi">
            <div class="row">
                <div class="col-md-12">
                    <div class="titlepage text_align_center">
                        <h2>UPDATE OPERATION</h2>
                    </div>
                </div>
                <div class=" col-md-10 offset-md-1">
                <form method="post" class="main_form" >
                <div class="row">
                 <div class="col-md-6 ">
                 <label> Customer Name: </label>
                 <input type="text" name="CustomerName" class="contactus" placeholder="Customer Name">
                 </div> 

                 <div class="col-md-6 ">
                 <label> Email: </label>
                 <input type="text" name="Email" class="contactus" placeholder="Customer Email">
                 </div> 

                 <div class="col-md-6 ">
                 <label> Account No: </label>
                 <input type="text" name="AccountNo" class="contactus" placeholder="Account Number">
                 </div> 
          
                 <div class="col-md-12">
                 <button class="send_btn"type="submit" name="done" class="text-white"> Submit</button>
                 </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

                    <!-- footer -->
                    <footer>
        <div class="footer">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <a class="logo_bottom" href="index.html">SPARK BANK</a>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class="Informa conta ">
                     <h3>Contact Us</h3>
                     <ul>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-map-marker " aria-hidden="true "></i> Location
                           </a>
                        </li>
                        <li> <a href="Javascript:void(0) "><i class="fa fa-phone " aria-hidden="true "></i> Call +01 1234567890
                           </a>
                        </li>
                        <li> <a href="Javascript:void(0) "> <i class="fa fa-envelope " aria-hidden="true "></i> demo@gmail.com
                           </a>
                        </li>
                     </ul>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 "">
                        <div class="Informa helpful">
                            <h3>Useful Link</h3>
                            <ul>
                                <li>Readable content of
                                </li>
                                <li>a page when looking
                                </li>
                                <li>at its layoutreadable
                                </li>
                                <li>content of a page
                                </li>
                                <li>when looking at its
                                </li>
                                <li>layout
                                </li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6" ">
                  <div class="Informa ">
                     <h3>Offices</h3>
                     <ul>
                        <li>Readable content of                              
                        </li>
                        <li>a page when looking                           
                        </li>
                        <li>at its layoutreadable                          
                        </li>
                        <li>content of a page                             
                        </li>
                        <li>when looking at its                         
                        </li>
                        <li>layout                          
                        </li>
                     </ul>
                  </div>
               </div>
               <div class="col-md-3 col-sm-6 ">
                  <div class="Informa ">
                     <h3>Newsletter</h3>
                     <form class="newslatter_form ">
                        <input class="ente " placeholder="Enter your email " type="text " name="Enter your email ">
                        <button class="subs_btn ">Subscribe</button>
                     </form>
                  </div>
               </div>
            </div>
            <div class="copyright text_align_center ">
               <div class="container ">
                  <div class="row ">
                     <div class="col-md-12 ">
                        <p>© 2020 All Rights Reserved. Design by   <a href="https://html.design/ "> Free Html Template</a></p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </footer>
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js "></script>
      <script src="js/bootstrap.bundle.min.js "></script>
      <script src="js/jquery-3.0.0.min.js "></script>
      <script src="js/custom.js "></script>
                <br>
            </div>
        </form>
    </div>
    </body>
</html>