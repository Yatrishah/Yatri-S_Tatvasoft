<?php
session_start();

?>
<!-- <!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" type="text/css" href="../assets/css/bootstrap/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <link rel="stylesheet" type="text/css" href="../assets/css/footer.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/model.css">
    <link rel="stylesheet" type="text/css" href="../assets/css/Registration.css"> 
    <link rel="stylesheet" type="text/css" href="../assets/css/navbar.css">      -->
    <link rel="stylesheet" type="text/css" href="../assets/css/pricess.css"> 

    <?php include '../views/include/header_css.php';?>

    <title>Price Page</title>
</head>

<body>


 <?php include '../views/include/login.php';?>
 <?php include '../views/include/header.php';?>



 <!-- -------------------------------------------------- Price Image------------------------------------------------------------------  -->
<div>
    <img src="../assets/image/pricebackground.png"class="img-fluid"style="width:100%">
</div>
 <!-- -------------------------------------------------- End of Price Image--------------------------------------------------------------------  -->

 <!-- --------------------------------------------------Price Box ------------------------------------------------------------  -->

<div class="price">

        <p class="">Price</p>
</div>
 <div>
        <div style="text-align: center;">
            <div class="lineLeft"></div>
            <img src="../assets/image/faqstar.png" class="starfaq">
            <div class="lineRight"></div>
        </div>


<section class="container" id="pricelist">
  <div class="card card1">
<div class="head1">  <p class="text1">Prices</p>  </div>  
<p class="text2">18 €<small class="text-muted">/hr</small>
</p>

<img src="../assets/image/tick.png" style=" width: 25px;height: 24    px;margin: 37px 8px 19px 151px;">
<p class="text4">CheckmarkLower prices</p>

<img src="../assets/image/tick.png" style=" width: 25px;height: 24px;margin: 19px 8px 19px 151px;">
<p class="text4">CheckmarkEasy online & secure payment </p>

<img src="../assets/image/tick.png" style=" width: 25px;height: 24px;margin: 29px 8px 19px 151px;">
<p class="text4">CheckmarkEasy amendment</p>


</section>

 <!-- -------------------------------------------------- End of Price Box ------------------------------------------------------------  -->

  <!-- -------------------------------------------------Extra Services------------------------------------------------------------  -->

<section id="extraservice">
<div>
<hr style="width:80%; margin:auto;margin-top: 51px;" />

</div> 

<div class="price">

        <p class="">Extra services</p>
</div>
 <div>
        <div style="text-align: center;">
            <div class="lineLeft"></div>
            <img src="../assets/image/faqstar.png" class="starfaq">
            <div class="lineRight"></div>
        </div>

<section class="container text-center " style="margin:auto;">

    <div class="row ">
         
        <div class="col-lg col-6 ">
         <div class=" circle1 "> <img src="../assets/image/extraservice1.png"> </div>
         <h2 class="servicetxt1" title="Inside cabinets">Inside cabinets</h2>
         <p class="servicetxt2">30 minutes </p>
          </div>
<div class="col-lg col-6 ">
         <div class=" circle1 "> <img src="../assets/image/extraservice2.png">  </div>
         <h2 class="servicetxt1" title="  Inside fridge  " >Inside fridge</h2>
         <p class="servicetxt2">30 minutes </p>
          </div>
    
     <div class="col-lg col-6 ">
         <div class=" circle1 "> <img src="../assets/image/extraservice3.png"style="margin-top:5px ;margin-left: -10px;">  </div>
         <h2 class="servicetxt1" title="  Inside oven  ">Inside oven</h2>
         <p class="servicetxt2">30 minutes  </p>
          </div>


 <div class="col-lg col-6 ">
         <div class=" circle1 "> <img src="../assets/image/extraservice4.png" >  </div>
         <h2 class="servicetxt1" title="Laundry wash & dry">Laundry wash & dry</h2>
         <p class="servicetxt2">30 minutes </p>
          </div>

          <div class="col-lg col-6 ">
         <div class=" circle1 "> <img src="../assets/image/extraservice5.png"style="margin-top:1px ;margin-left: -7px;">  </div>
         <h2 class="servicetxt1" title="Interior windows">Interior windows</h2>
         <p class="servicetxt2">30 minutes</p>
          </div>

       </section>  

  <!-- -------------------------------------------------End of Extra Services------------------------------------------------------------  -->

  <!-- ------------------------------------------------Cleaning ------------------------------------------------------------  -->

    <section id="s-cleaning">
            <div class="services">
                <div class="c-header">
                    <h1 title="What we include in cleaning  ">What we include in cleaning</h1>
                    <div class="h-line">
                          <div class="lineLeft"></div>
                         <img src="../assets/image/faqstar.png" class="starfaq">
                        <div class="lineRight"></div>
                    </div>
                </div>
   
                <div class="row ">
                    <div class="col-lg-4 col-md-4">
                        <div class="c-img">
                            <img src="../assets/image/cleaning1.png" alt="">
                        </div>
                        <div class="c-content">
                            <div class="content-title" title="Badroom And Living Room">Bedroom and Living Room</div>
                            <div class="content-includes">
                                <ul class="list">
                                    <li><img src="../assets/image/included.png" alt=""> Included Dust all accessible surfaces
                                    </li>
                                    <li><img src="../assets/image/included.png" alt="">Included  Wipe down all mirrors and glass fixtures</li>
                                    <li><img src="../assets/image/included.png" alt=""> Not Included Not Included Clean all floor surfaces</li>
                                    <li><img src="../assets/image/included.png" alt=""> Included Take out garbage and recycling</li>
                                     <li><img src="../assets/image/included.png" alt=""> Included To clean up</li>                                  
                                   <li><img src="../assets/image/included.png" alt=""> Included Make beds</li>


                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="c-img">
                            <img src="../assets/image/cleaning2.png" alt="">
                        </div>
                        <div class="c-content">
                            <div class="content-title" title="Bathrooms">Bathrooms</div>
                            <div class="content-includes">
                                <ul class="list">
                                    <li><img src="../assets/image/included.png" alt="">Included Wash and sanitize the toilet, shower, tub, sink</li>
                                    <li><img src="../assets/image/included.png" alt="">Not Included Not Included Dust all accessible surfaces
                                    </li>
                                    <li><img src="../assets/image/included.png" alt="">Included Wipe down all mirrors and glass fixtures</li>
                                    <li><img src="../assets/image/included.png" alt="">Not Included Not Included Clean all floor surfaces</li>
                                    <li><img src="../assets/image/included.png" alt="">Included Take out garbage and recycling</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-4">
                        <div class="c-img">
                            <img src="../assets/image/cleaning3.png" alt="">
                        </div>
                        <div class="c-content">
                            <div class="content-title" title="Kitchen">Kitchen</div>
                            <div class="content-includes">
                                <ul class="list">
                                    <li><img src="../assets/image/included.png" alt="">Included Cleaning the sink
                                    </li>
                                    <li><img src="../assets/image/included.png" alt="">Included Cleaning the oven (outside)
                                        dishwasher</li>
                                    <li><img src="../assets/image/included.png" alt="">Included Cleaning the work surfaces</li>
                                    <li><img src="../assets/image/included.png" alt="">Included Dust all accessible surfaces</li>
                                    <li><img src="../assets/image/included.png" alt="">Included Clean all floor surfaces</li>
                                    <li><img src="../assets/image/included.png" alt=""> Included Take out garbage and recycling
                                    </li>

                                   
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
  <!-- -------------------------------------------------End of Cleaning-----------------------------------------------------------  -->

  <!-- -------------------------------------------------Helperland------------------------------------------------------------  -->


 <section id="section-whyhelper1">
            <div class="whyhelper1">
                <div class="whyhelper-head1" title=" Why Helperland  ">
                    <h1>Why Helperland</h1>
                      <div class="lineLeft"></div>
                         <img src="../assets/image/faqstar.png" class="starfaq">
                        <div class="lineRight"></div>
                    </div>

                <div class="row ">
                    <div class="col-lg-4 leftside">
                        <div class="gap">
                            <h4>Experienced and vetted professionals</h4>
                            <p>dominate the industry in scale and scope with an adaptable, extensive network that
                             consistently delivers exceptional results.</p>
                        </div>
                            <h4>Dedicated customer service</h4>
                            <p>to our customers and are guided in all we do by their needs. The team is always happy to
                                support you and offer all the information. you need.</p>
                    </div>
                    <div class="col-lg-4 whyhelperimg text-center">
                        <img src="../assets/image/cleaning4.png" alt="">
                    </div>
                    <div class="col-lg-4 rightside">
                        <div class="gap">
                            <h4>Every cleaning is insured</h4>
                            <p>and seek to provide exceptional service and engage in proactive behavior. We‘d be happy
                                to clean your homes.</p>
                        </div>
                        <div class="d-second">
                            <h4>Secure online payment</h4>
                            <p>Payment is processed securely online. Customers pay safely online and manage the booking.
                            </p>
                        </div>
                    </div>
                </div>

            </div>
            <div class="d-flex justify-content-center">
            <div class="btn-lets">
            <?php
      if(!isset($_SESSION['UserId'])){?>  
      <div>  
            <button class="btn btn-outline-light text-light " title="Let’s Book a Cleaner" >
                <a href="#" data-bs-toggle="modal" data-bs-target="#exampleModallogin" 
                data-bs-dismiss="modal" class="text-white">Let’s Book a Cleaner</button></a> 
      </button> 
      </div>
            <?php
            }
        else{

            //echo "<li class='nav-item'>Hello ".$_SESSION['FirstName']."</li>"; ?>
             <?php
      if($_SESSION['UserTypeId']==1){?>

<div>
                    <button class="btn btn-outline-light text-light " title="Let’s Book a Cleaner" >
                        <a href="book-service.php" class="text-white" >Let’s Book a Cleaner</a></button>
                </div>
      <?php
         }
?>
        <?php
         }
?> 
    
        </section>     



            <a href="#"  class="toptoback" id="backtotop" ><img src="../assets/image/up.png" ></a>

  <!-- -------------------------------------------------Mail------------------------------------------------------------  -->
 
 <!-- --------------------------------------------------End of Mail------------------------------------------------------------  -->
   <!-- --------------------------------------------------Footer ------------------------------------------------------------  -->

    <?php include '../views/include/footer.php';?>
        
  
 <!-- -------------------------------------------------- End of about us Image--------------------------------------------------------------------  -->

 </body>
<!-- <script type="text/javascript" src="../assets/css/bootstrap/js/bootstrap.min.js"></script> -->
<?php include '../views/include/footer_js.php';?>

</html>



