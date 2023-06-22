<?php

require 'connection.php';
session_start();
 ?>
 
 
 <!DOCTYPE html>
<html lang="en">
  <head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Student Management Information System</title>
   
    <link rel="stylesheet" href="style.css">
      <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
 

    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet" integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN"

        crossorigin="anonymous">

    <link rel="stylesheet" href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
    integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p" crossorigin="anonymous" />
    <!-- Font Awesome Icons -->
    <link
      rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css"
    />
    <!-- Google Fonts -->
    <link
      href="https://fonts.googleapis.com/css2?family=Poppins:wght@600;700&display=swap"
      rel="stylesheet"
    />
    <!-- Stylesheet -->
    <link rel="stylesheet" href="style.css" />
    <style>
    
        #slider{
    margin:0 auto;
    width:100%;
    height: 500px;
    overflow:hidden;
    
    background: rgb(230, 230, 230);
    }
    .img1{
    width:100%;
    height: 500px;
    }
    
    @media (max-width:567px){
    #slider{
      width:100%;

    height: 50%;
    
    }
    .img1{
      height: 200px;
    }
    }
    .select{
      height: 100px;
      width: 32%;
      border: 2px solid transparent;
    }
    
    
    
    
  body{
    background-color: #fffefa;
  }
  * {
  padding: 0;
  margin: 0;
  box-sizing: border-box;
}
html {
  font-size: 62.5%;
}
*:not(i) {
  font-family: "Poppins", sans-serif;
}
header {
position: fixed;
  width: 100%;
  height: 110px;
  background-color: #f70808;
  padding: 3rem 5rem;
  color: gold;
}
nav {
  display: flex;
  justify-content: space-between;
  align-items: center;
}
nav ul {
  list-style: none;
  display: flex;
  gap: 2rem;
  color: gold;

}nav  a{
  color: gold;
}
nav a {
  font-size: 1.8rem;
  text-decoration: none;
}

nav ul a {
  color: #ffffff;
  font-weight: 600;
}
nav ul a:hover {
  border-bottom: 2.0px solid #ffffff;
}
section#home {
  height: 100vh;
  display: flex;

}
h1 {
  font-size: 4rem;
}
#ham-menu {
  display: none;
}
nav ul.active {
  left: 0;
}
@media only screen and (max-width: 991px) {
  .slider{
    margin-top: 280px;
  }
  .slides{
    margin-top: 100px;
  }
  html {
    font-size: 56.25%;
  }
  header {
    padding: 2.2rem 5rem;
  }
}
@media only screen and (max-width: 767px) {
  html {
    font-size: 50%;
  }
  #ham-menu {
    display: block;
    color: #ffffff;
  }
  nav a#logo,
  #ham-menu {
    font-size: 3.2rem;
  }
  nav ul {
   
    background-color: rgba(22, 13, 13, 0.692);
    transition: all 0.3s ease-in;
   
    position:absolute;
  
    left: -100vw;
    margin-top: 10px;
    top: 73.6px;
    
    width: 50%;
    height: calc(100vh - 73.6px);
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: space-around;
    transition: 1s;
    gap: 0;
  }
}
@media only screen and (max-width: 575px) {
  html {
    font-size: 46.87%;
  }
  header {
    padding: 2rem 3rem;
  }
  nav ul {
    top: 65.18px;
    height: calc(100vh - 65.18px);
  }
}


/* New H2 Tag for heading*/

.system h2{
     
  scrollbar-color: red;
  color:red;
   font-size: 36px;
   font-family: 'Times New Roman';
   padding-left: 11px;
   margin-top: 9.2%;
   letter-spacing: 2px;

}

@media only screen and (max-width:500px) {
   
  .img{
    width: 50%;
    margin: auto;
  }

body{
  margin: auto;
 
}
.system h2 {
  margin: auto;
  font-size: 35px;

  width: 90%;
}
.ppp{
  width: 80%;
  margin: auto;
display: none;
}
.st{
  margin: auto;
}.paa{
  margin-top: 10px;
}
.paa{
  width: 80%;
  margin: auto;
}




 .footer2{

 }
 .placement1{
  width: 90%;
  margin: auto;
 }
 
}
part-c



.part-c{
  width: 35%;
  margin-left: 100px;
  height: 400px;

  border: 2px solid transparent(201, 29, 29);
}
@media only screen and (max-width:500px) {
  .footer{
    margin-top: 1250px;
    height: 200px;
    width: 300px;
    margin: auto;
    
  }
.footer1{
  margin: auto;
  height: 250px;
  width: 80%;
  margin-top: 400px;
}
  /* For tablets: */
  .part-c {
    width: 90%;
   
    margin: auto;
margin-top: 200px;
  }}


.partd{
  padding: 10px;
  border: 2px solid black;
  height: 400px;
}

.inbox{ color: aliceblue;
font-size: 18PX;
height: 50px;
width: 80%;
background-color: rgb(219, 18, 18);
border-radius: 10PX;
margin: 20px auto;
border: 2px solid black;
}

.partd{
padding: 10px;
}
.aab{

  float: left;
  height: 400px;
  margin-left: 300px;
  border: 2px solid transparent(12, 233, 174);
}
.pa{
font-size: 38PX;
color: blue;background-color: RED; 
border-radius: 45%;width: 30%;
}
@media only screen and (max-width: 500px) {
  .pa p{
    background-color: #ff0707;
    font-size: 20px;
  border-radius: 20%;
    margin: auto;
  }
 
  .name{
  font-size: 27px;
  margin-left: 0;
  }
  .partd{
  padding: 10px;
  }
  .aab{
 
  margin: auto;

  }
  }
@media only screen and (max-width:500px) {

  .intension{
    margin: auto;
  }
  /* For mobile phones: */
.aab {
    width: auto;
 height: auto;
 
margin: auto;
}
.paa{
  margin-top: 10px;
}
}
.middle h2{
  font-size: 36px;
  color: #f70808;
}

@media only screen and (max-width:500px) {
/* For tablets: */
.middle1 h2{
  font-size: 20px;
  color: #f70808;
  margin-top: 20px;
}
.partc {
width: 80%;

align-items: center;
margin-top: 10px;
}
.system h2{
  font-size: 22px;
}

.second1 p{

  font-size: 5px;
}
.secondpart{
  font-size: 5px;
}
.second1{
  width: 100%;
}

}


.secondpart{
height: 400px;
width: auto;
background-color: #ffffff;
}
.second1{
  height: 400px;
  width: 70%;
 margin: auto;
  background-color: #ffffff;

}
.secondpart1{
  margin-top: 18px;
  height: 500px;
  width: auto;
background-image: url(img/combine1jpg.jpg);

  
  }
  
  .second2{
    height: 00px;
    width: 80%;
 top: 10px;
    margin: auto;
    background-color: #2ca059;
  
  }
 
 
  @media screen and (max-width: 500px) {

    .middle2{
      margin-top: 10px;
    }
  .middle p {
   font-size: small;
    margin: auto;
  }
.noticee{
width: 80%;
margin: auto;

height: 80%;




}
.second2{
  margin: auto;
}

    .select{
     max-width: 300px;
     min-width: 250px;
     min-height: 300px;
        margin-top: 40px;
  margin-top: 30px;
  margin: auto;
    }}
    @media only screen and (max-width:800px) {
      /* For tablets: */
      
      .ab{
      width:90%;
      height:25px;
     
      }}
      @media only screen and (max-width:200px) {
        /* For tablets: */
        
        .avv{
        width:50%;
        height:25px;
        font-size:2px;
        }
        }
        .avv{
          width:50px;
         max-block-size: 100px;
         max-height: 100px;
          font-size: 8px;
          max-width: 100px;
          size: 6;
        }
        .p{
          margin-top: 30px;
          font-size: 20px;
          font-style: oblique;
      
           
        }
        select{
         margin-left: 10px;
        }






        

.firstss {
  width: 22%;
  display: inline-block;
  height: 320px;
 
  border: 2px solid transparent;
}

.secondss {
  width: 22%;
  height: 320px;
  display: inline-block;
  border: 2px solid transparent;
}

.thirdss {
  width: 22%;
  height: 320px;
  display: inline-block;
  border: 2px solid transparent;
}
.thirdsf {
  width: 22%;
  height: 320px;
  display: inline-block;
  border: 2px solid transparent;
}
@media screen and (max-width: 500px) {
  .pa{
 
   margin: auto;
  }

  .firstss,
 .thirdsf,
  .secondss,
  .thirdss {
      width: 100%;
    
  }
  .inbox B{
      width: 100%;
      font-size: 13PX;
  }
}

@import url(https://fonts.googleapis.com/css?family=Raleway:400,500);
figure.snip1206 {
  font-family: 'Raleway', Arial, sans-serif;
  color: #fff;
  position: relative;
  overflow: hidden;

  min-width: 220px;
  max-width: 310px;
  max-height: 220px;
  float: left;
  width: 100%;


  color: #000000;
  text-align: center;
}
.snip12067{
  margin-left: 50px;
}


figure.snip1206 * {
  -webkit-box-sizing: border-box;
  box-sizing: border-box;
  -webkit-transition: all 0.6s ease;
  transition: all 0.6s ease;
}
figure.snip1206 img {

  opacity: 1;
  width: 100%;
  -webkit-transition: opacity 0.35s;
  transition: opacity 0.35s;
}
figure.snip1206:after {
  background: #ffffff;
  width: 100%;
  height: 100%;
  position: absolute;
  left: 0;
  bottom: 0;
  content: '';
  opacity: 0.75;
  -webkit-transform: skew(-45deg) scaleX(0);
  transform: skew(-45deg) scaleX(0);
  -webkit-transition: all 0.3s ease-in-out;
  transition: all 0.3s ease-in-out;
}
figure.snip1206 figcaption {
  position: absolute;
  top: 50%;
  left: 0;
  width: 100%;
  -webkit-transform: translateY(-50%);
  transform: translateY(-50%);
  z-index: 1;
}
figure.snip1206 h2,
figure.snip1206 p {
  margin: 0;
  width: 100%;
  opacity: 0;
}
figure.snip1206 h2 {
  padding: 0 30px;
  display: inline-block;
  font-weight: 400;
  text-transform: uppercase;
}
figure.snip1206 p {
  padding: 0 50px;
  font-size: 0.8em;
  font-weight: 500;
}
figure.snip1206 a {
  left: 0;
  right: 0;
  top: 0;
  bottom: 0;
  position: absolute;
  z-index: 1;
}
figure.snip1206:hover:after,
figure.snip1206.hover:after {
  -webkit-transform: skew(-45deg) scaleX(1);
  transform: skew(-45deg) scaleX(1);
  transition: all 400ms cubic-bezier(0.175, 0.885, 0.32, 1.275);
}
figure.snip1206:hover figcaption h2,
figure.snip1206.hover figcaption h2,
figure.snip1206:hover figcaption p,
figure.snip1206.hover figcaption p {
  -webkit-transform: translate3d(0%, 0%, 0);
  transform: translate3d(0%, 0%, 0);
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
figure.snip1206:hover figcaption h2,
figure.snip1206.hover figcaption h2 {
  opacity: 1;
}
figure.snip1206:hover figcaption p,
figure.snip1206.hover figcaption p {
  opacity: 0.7;
}

.cards{
  max-width: 1100px;
  margin: 0 auto;
  text-align: center;
  padding: 30px;
}
.cards h2.header{
  font-size: 40px;
  margin: 0 0 30px 0;
  text-transform: uppercase;
  letter-spacing: 1px;
}
.services{
  display: flex;
  align-items: center;
}
.content  h2{
  color: rgb(252, 18, 18);
}
.content{
  color: rgb(247, 247, 247);
  display: flex;
  flex-wrap: wrap;
  flex: 1;
  margin: 20px;
  padding: 20px;
  border: 2px solid black;
  border-radius: 4px;
  transition: all .3s ease;
}
.content .fab{
  font-size: 70px;
  margin: 16px 0;
}
.content > *{
  flex: 1 1 100%;
}
.content p:hover{
  color: rgb(58, 4, 255);



}
.content:hover a{
  border-color: white;
  background: white;
}
.content-1:hover{
  border-color: #1DA1F2;
  background: #1DA1F2;
}
.content-1:hover a{
  color: #bd3918;
}
.content-2:hover{
  border-color: #e5fd08;
  background: #f7f309;
}
.content-2:hover a{
  color: #E1306C;
}
.content-3:hover{
  border-color: #ff0000;
  background: #ff0000;
}
.content-3:hover a{
  color: #ff0000;
}
.content h2{
  font-size: 30px;
  margin: 16px 0;
  letter-spacing: 1px;
  text-transform: uppercase;
}
.content p{
  font-size: 17px;
  color:gold;
  font-family: 'Poppins',sans-serif;
}
.content a{
  margin: 22px 0;
  background: black;
  color: white;
  text-decoration: none;
  text-transform: uppercase;
  border: 1px solid black;
  padding: 15px 0;
  border-radius: 25px;
  transition: .3s ease;
}
.content a:hover{
  border-radius: 4px;
}
@media (max-width: 900px) {
  .content content-1:hover,
.content content-2,
.content content-3,
.content content-4,
.content content-5,
.content content-6
{
  opacity: 0.2;
}
  .services{
    display: flex;
    flex-direction: column;
  }
}
.content content-1:hover {
  -webkit-transform: translate3d(0%, 0%, 0);
  transform: translate3d(0%, 0%, 0);
  -webkit-transition-delay: 0.2s;
  transition-delay: 0.2s;
}
.content content-1 h2:hover  ,
.content content-2  h2.hover{
  opacity: 1;
  color: #1DA1F2;
}




</style>
  </head>
  <body>
    <header>
        <nav style="color:gold;">
          <a href="#home" id="logo" style="font-size: 20px;"><img src="img/techno.png" class="img" style="height: 70px; width: 300px;"></a>
          <i class="fas fa-bars" id="ham-menu"></i>
          <ul id="nav-bar" >
            
            <li >
              <a href="topbar/explore.html" >Explore</a>
            </li>
            <li>
              <a href="topbar/academic.html"  >Academics</a>
            </li>
            <li>
              <a href="topbar/campas.html" >Campuses</a>
            </li>
            
            <li>
              <a href="topbar/facilities.html"  >Facilities</a>
            </li>
  
            <li>
              <a href="topbar/contact.html"  >Contact Us</a>
            </li>
  
            <li>
              <a  href="http://makautexam.net/"><img src="img/makaut.png" alt="Avatar" style="width:45px;  border-radius: 50%;"></a>
            </li>
            <li>
              <a href="#contact"><i class='fas fa-volume-up' style='font-size:32px;color:rgb(8, 1, 1)' onclick="playAudio()" class="song"></i></a>
            </li>
                  
      <audio id="myAudio">
        <source src="img/My Video.mp3" type="audio/ogg">
      
      
      </audio><script>
      var x = document.getElementById("myAudio"); 
      
      function playAudio() { 
        x.play(); 
      } 
      
      function pauseAudio() { 
        x.pause(); 
  
        
      } 
      </script>
          </ul>
        </nav>
      </header>
  



    
    <section id="home">


      <div  style="width: auto;height: 600px;" class="body1">

    

        <div id="slider" onclick="pauseAudio()">
            <div class="slides">
              <img src="img/combine.jpg" width="100%" class="img1" />
             </div>
          
              <div class="slides">
              <img src="img/combine1.jpg" width="100%"  class="img1" />
            </div>
          
              <div class="slides">
              <img src="img/combine3.jpg" width="100%"  class="img1" />
            </div>
          
            
              <div id="dot"><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span><span class="dot"></span></div>
             </div>
          
          
             <script type="text/javascript">
                var index = 0;
                var slides = document.querySelectorAll(".slides");
                var dot = document.querySelectorAll(".dot");
                
                function changeSlide(){
                
                  if(index<0){
                    index = slides.length-1;
                  }
                
                  if(index>slides.length-1){
                    index = 0;
                  }
                
                  for(let i=0;i<slides.length;i++){
                    slides[i].style.display = "none";
                    dot[i].classList.remove("active");
                  }
                
                  slides[index].style.display= "block";
                  dot[index].classList.add("active");
                
                  index++;
                
                  setTimeout(changeSlide,2000);
                
                }
                
                changeSlide();
                </script>









      <div class="eeee" style="margin-top: 100px;">


        <div  class="system" style="padding-left:16px;font-weight: bold;">
         
    
   
                      </div>

                    </div>

                    <div class="secondpart" onclick="pauseAudio()">
  
                      <div class="second1">
                                 <div  class="system" style="padding-left:16px;font-weight: bold;">
                          <h2> <span>STUDENT INFORMATION  MANAGEMENT SYSTEM</span>  <img src="img/SIMS.png" style="height: 100px; width: 100px; border-radius: 40%;margin-left: 50px;" ></h2>
                        
                         
                        </div> 
                        <p class="paragraph" style="color: rgb(32, 28, 3);font-size: 18px;
                        padding: 15px;">
                          
                          A Student Management System is also known as a Student Information System (SIS).
                           These systems work to coordinate scheduling and communications between faculty regarding students.
                           Faculty members and parents need to have consistent information as to what their kid’s schedule is.
                            Both field trips and academic study schedules help parents understand what’s going on. 
                            This information is beneficial at the preschool and college levels. 
                             This system exists to simplify information tracking for both parents and administrative staff.
                                    
                                    
                                          
                                    
                                 </p>
                      
                                   
                      
                      
                      
                                  </div>
                      </div>







                      <div class="secondpart1" onclick="pauseAudio()">



                        <div class="second2">
                    
                    
                          <div class="select">
                              
                          <center>  
                                         
                            <b>
                              <p style="color:rgb(253, 52, 7);" class="p">SELECT YOUR COLLEGE:</p></b></center> 
                              <select  class="ab" name="links" id="" size="1" onchange="window.location.href=this.value;">
                                                <option class="avv" value="#" style="height:20px; background-color:black;color:blue;">SELECT YOUR COLLEGES</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/technosaltlake.html">Techno Main Saltlake (Formerly Techno India Saltlake)</option>
                                                <option class="avv" style="font-size: 14px; color:blue;"value="college/netajisubhas.html">  Netaji Subhash Engineering College</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/bengal.html">  Bengal Institute of Technology</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/MEGNAND.HTML">Meghnad Saha Institute of Technology </option>
                                                <option  class="avv" style="font-size: 14px; color:blue;" value="college/TECHNOLOGY.HTML">Techno India College of Technology</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/home/Admin/banipur.php"> Techno Engineering College Banipur</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/SOROJ.HTML"> Saroj Mohan Institute of Technology</option>
                                                <option class="avv"  style="font-size: 14px; color:blue;"value="college/DURGAPUR.HTML"> Techno India Durgapur</option>
                                                <option class="avv" style="font-size: 14px; color:blue;"value="college/BALURGHAT.HTML">Techno India Balurghat</option>
                                                <option class="avv" style="font-size: 14px; color:blue;"value="college/SILIGURI.HTML">Siliguri Institute of Technology</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/RAJIB.HTML">Rajib Gandhi Memorial Ayurvedic College & Hospital</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/SNU.HTML">Sister Nivedita University</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/ASANSOL.HTML">Asansol Engineering College </option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/ABACUS.HTML"> Abacus Institute of Engineering & Management</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/HOOGLY.HTML">Techno India Hooghly</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/BATANAGAR.HTML"> Techno India Batanagar</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/UNIVERSITY.HTML">Techno India University</option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/Techno India Institute of Technology.HTML">Techno India Institute of Technology </option>
                                                <option class="avv" style="font-size: 14px; color:blue;" value="college/RAMGARH.HTML">Ramgarh Engineering College, Ramgarh(PPP)Techno India</option>
                                                <option class="avv"  style="font-size: 14px; color:blue;"value="college/CHAIBASA.HTML">Chaibasa Engineering College, Chaibasa(PPP)Techno India</option>
                                                <option class="avv"  style="font-size: 14px; color:blue;"value="college/DUMKA.HTML"> Dumka Engineering College, Dumka(PPP)Techno India</option>
                                                <option class="avv"  style="font-size: 14px; color:blue;"value="college/AGARTALA.HTML">Techno India Agartala </option>
                                              </select>
                            
                                            
                                </div>
                        
                             <div  class="noticee" style="height:200px; width:320px ;  background-color: rgba(22, 13, 13, 0.692);
                             transition: all 0.3s ease-in;
                             overflow-y: hidden; float: right;display: block;border-radius: 10%;">
                            
                    
                      
                      
                      
                    
                      <CENter>
                      <div style="height: 20px; width: 100px; background-color: yellow; color: #10101E; font-size: 15PX;">NOTICE</div>
                      </CENter>
                      
                       
                                            <marquee scrollamount=6  height="180" direction="up" style="color:gold;">
                                            <?php

require 'connection.php';

 ?>    
                                         <?php 
                                         
                                          $query="SELECT* FROM notice1"; $data= mysqli_query($con,$query);
                                         
                                          $total= mysqli_num_rows($data);
                                         
                                         while( $result=mysqli_fetch_assoc($data))
                                            {
                                             echo" <center><B><div> <i class='fas fa-caret-right' style='font-size:25px;color:red'></i>$result[subject]<br></div></B></center>
                                                        
                                                         <br><br>
                                         ";
                                         
                                         }
                                          
                                          
                                         ?> </marquee>
                       
                      
                      
                    </div>   
                        
                        
                        
                        </div>
                        
                    </div>




                    
<center>
  <div  style="height: auto;width: 90%; box-shadow: 0 14px 28px rgba(0,0,0,0.25), 0 10px 10px rgba(0,0,0,0.22);">
  <p style="font-size: 35PX; color: red; margin-top: 10px;   align-items: center;"> WHAT'S BUZZING @SMS</p>

<br>
  <div class="cards">
  
    <div class="services">
       <div class="content content-1" style=" background-image: url(img/student.jpg); ">
         
          <h2>
             Student Management
          </h2>
          <p>
            These systems work to coordinate scheduling and communications between faculty regarding students.
          </p>
        </div>



       <div class="content content-2" style=" background-image: url(img/teacher.1jpg.jpg); ">
       
          <h2>
            Teacher Management
          </h2>
          <p >
            These systems work to coordinate scheduling and communications between faculty regarding Teachers.
          </p>
          
       </div>




       <div class="content content-3" style=" background-image: url(img/attendence1.jpg); ">
     
          <h2 >
            Attendence Management 
          </h2>
          <p >
            These systems work to coordinate scheduling and attendence between faculty regarding students.
          </p>
        
       </div>

    
    </div>
    
    <div class="services">
      <div class="content content-1" style=" background-image: url(img/library.jpg); ">
        
         <h2>
            Library Management
         </h2>
         <p >
          These systems work to coordinate library recording and communications between faculty regarding students.
         </p>
       </div>



      <div class="content content-2" style=" background-image: url(img/result.jpg); ">
      
         <h2>
            Result Management
         </h2>
         <p >
          These systems work to coordinate result generates and communications between faculty regarding students's results.
         </p>
         
      </div>




      <div class="content content-3" style=" background-image: url(img/Subject-combination.jpg); ">
    
         <h2>
           Subject Management 
         </h2>
         <p >
          These systems work to coordinate recording and communications between faculty regarding students.
         </p>
       
      </div>

   
   </div>

 






</div>
</center>


<div onclick="pauseAudio()" style="height: 1200px;width: auto;background-color: rgb(255, 255, 255);  box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);"  class="middle2">
    <div class="cards">
      <h2 class="header">
    SIMS SERVICES
      </h2>
      <div class="services"  style="color:balck;">
         <div class="content content-1"  style="color:balck;">
           <img src="img/SIMS.png" style="width:20px; height: 100px; border-radius: 80%;" >
            <h2  style="color:balck;">
               App Version
            </h2>
            <p>
            An Abundance of Study Material and All information .Less Paper for More Enrollment.. Better Communication.
            </p>
            <a href="#">SIMS</a>
         </div>
         <div class="content content-2">
          <i class='fas fa-receipt' style='font-size:98px;color:red'></i>
            <h2>
               Fees Receipt
            </h2>
            <p>
            fee management system is software that automates the fee collection process.Reminders.digital Fee reports.
            </p>
            <a href="#">SIMS</a>
         </div>
         <div class="content content-3">
          <img src="img/research.png" style="width:200px; height: 100px; border-radius: 30%;" >
            <h2>
              Result 
            </h2>
            <p>
            Academic results or  report card communicates and tracks a student’s academic growth during the specific period. 
            </p>
            <a href="#">SIMS</a>
         </div>
      </div>
   </div>
   
  
  
  
  <center>
  <div class="pa" onclick="pauseAudio()">
    <p > INTENSION</p></div>
  <div class="aab"><img src="img/consult.jpg" style="margin-top: 40px; width:80%; height:70% ;box-shadow: 0 19px 38px rgba(0,0,0,0.30), 0 15px 12px rgba(0,0,0,0.22);" alt=""></div>
  <div class="part-c"> <p style="font-size: 25px; font-weight: bold;margin-top: 30px;  color: red;">
  WE WANT TO BE A PART OF YOUR GROWTH
  </p><br><br><br>
  <p style="color: gold; font-size: 10px;padding: 20px;" class="consulty"> Consultancy is an integral part of Techno India Group: our elite faculty members and renowned experts have been carrying forward 32+ glorious years of expertise in the field of academics for guiding innumerable students.
  
  We are extremely proud of our vibrant alumni base who have proved their mettle over time across premier MNCs since the past few decades. As an academic group that believes in imparting quality education, Techno India exploits the industry experience of our alumni and utilizes their exposure to corporate assignments in framing the academic curricula.
  <br><br>  
  
  <a href="topbar/unitg.HTML"><button style="background-color: red;  height: 35px;">READ MORE</button></a></p></div>
  </div>






<center>


  
  
  

     

      
   
   
      <br><br>
       
       <center>
       
         
     <img  class="footer1"src="img/15.jpg" >
     </div>
       </div>
      </center>


    </section>
    <!-- Script -->
    <script src="script.js"></script>
  </body>
</html>
