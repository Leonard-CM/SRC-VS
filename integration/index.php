<?php
session_start();

if(!isset($_SESSION["userAuthorisation"]) && $_SESSION["userAuthorisation"] != 1){
  header('Location: ./login/index.php');
}

 ?>

 <!DOCTYPE html >
 <!--
 Template Name: Phindiwe Bambata

 -->
 <html xmlns="">
 <head>
 <title>CPUT VOTING SYSTEM</title>
 <meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
 <link rel="stylesheet" href="layout/styles/layout.css" type="text/css" />
 <script type="text/javascript" src="layout/scripts/jquery.min.js"></script>
 <script type="text/javascript" src="layout/scripts/jquery.ui.min.js"></script>
 <!-- Homepage Specific -->
 <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.easing.1.3.js"></script>
 <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.timers.1.2.js"></script>
 <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.2.1.1.min.js"></script>
 <script type="text/javascript" src="layout/scripts/galleryviewthemes/jquery.galleryview.setup.js"></script>
 <!-- / Homepage Specific -->
 </head>
 <body id="top">
 <div class="wrapper row1">
   <div id="header" class="clear">
     <div class="fl_left">
       <h1><a href="index.html">CPUT VOTING SYSTEM</a></h1>

     </div>
     <div class="fl_right">
       <p><a href="#">Student Login</a>


     </div>
     <div id="topnav">
       <ul>
         <li class="active"><a href="index.html">Home</a></li>
         <li><a href="pages/style-demo.html">Candidates</a></li>
         <li><a href="pages/full-width.html">Voting</a></li>

       </ul>
     </div>
   </div>
 </div>
 <!-- ####################################################################################################### -->
 <div class="wrapper row2">
   <div id="hpage_featured" class="clear">
     <!-- ####################################################################################################### -->
     <div id="featured_slide">
       <ul>
         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>2021 SRC Members</h2>

           </div>
         </li>
         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Ms.Wendy Kondlo</h2>
             <h2>Chairperson</h2>

           </div>
         </li>

         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Mr.Luthando Naka</h2>
             <h2>Deputy Chairperson</h2>

           </div>
         </li>
         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Ms.Zimasa Pama</h2>
             <h2>Secretary</h2>

           </div>
         </li>

         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Mr.Vacant</h2>
             <h2> Treasurer</h2>
           </div>
         </li>

         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Mr.Itumeleng Bokale</h2>
             <h2> LHC & Wellfare Officer</h2>
           </div>
         </li>

         <li><img src="images/demo/450x320.gif" alt="" />
           <div class="panel-overlay">
             <h2>Ms. Thokozile Snono</h2>
             <h2> Sports, Arts & Culture Officer</h2>
           </div>
         </li>

       </ul>
     </div>
     <!-- ###### -->
     <div class="intro clear">
       <div class="welcome clear"><img class="imgl" src="images/demo/logo.png" alt="" />
         <div class="fl_right">
           <h2>WELCOME TO CPUT VOTING SYSTEM </h2>
           <p>This is an online voting system for CPUT registered student to vote for SRC..</p>
         </div>
       </div>

     <!-- ####################################################################################################### -->
   </div>
 </div>
 <!-- ####################################################################################################### -->
 <div class="wrapper row3">
   <div id="container" class="clear">
     <!-- ####################################################################################################### -->
     <div id="homepage" class="clear">
       <!-- ###### -->

     </div>
     <!-- ####################################################################################################### -->

 </body>
 </html>
