<!DOCTYPE html>
<html lang="en">

<head>
<meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
   <style>
    
/* .column{
 position: relative;
  animation: mymove 2s infinite;
}

@keyframes mymove {
  0%   {top: 0px;}
  25%  {top: 100px;}
  75%  {top: 50px}
  100% {top: 100px;}
} */

*{
  margin:0px;
  padding:0px;
  box-sizing :border-box;
  font-family:sans-serif;
}
body{
  background-color:lightblue;
}
.container{
  width:80px;
  margin:50px auto;
  padding:20px;
}
.title{
  text-align: center;
  font: size 45px;
  font-weight:bold;
  margin: bottom 75px;
  
}
.about-content{
  display: flex;
  flex-wrap: wrap;
  align-items:center;
}


.column {
  float: left;
  width: 10%;
  height:30%;
  padding: 5px;
  margin-left: auto;
}
   
 
.image{
  flex:1;
  margin-right:20px;
  overflow:hidden;
  border-radius:10px;
}

.image img{
  width:20%;
  transition:transform 0.3s ease;
}
.image:hover{
  transform: scale(1.1);

}
.content{

  margin: 0;
  position: absolute;
  top: 50%;
  -ms-transform: translateY(-50%);
  transform: translateY(-50%);

 
}
.content p{
  font-size:17px;
  line-height:1.6;
}
.readmore{
  margin-top: 20px;
  display: inline-block;
  padding: 10px 20px;
  background-color: lightyellow;
  font-size:17px;
  text-decoration: none;
  font-weight:bold;
  border-radius: 10px;
  transition:0.3s ease;
}
.readmore:hover{
  background-color:skyblue;

}
@media screen and(max-width:768px) {
  .about-content{
    flex-direction:column;
    
  }
  
  .image, .content
  {
    margin: 0;
    margin-bottom:20px;
    
  }
  .title{
    font-size:38px;
    margin: bottom 50px;
  }
  
}

    </style>

  <title>LensCARE</title>
 

  

</head>

<body>
<center>
<h1>About Us</h1>
</center>

<div class="column">
    <img align="left" src="group-image23-removebg-preview (3).png" alt="" width="700" height="700">
  </div>  

 
  <div class ="container">
   
    <div class = "about-content">
     
<div class="content">
    <p >
    LensCARE – is the  most advanced AI-based vision therapy was founded by our team.
    In our journey to redefine eye care, we, Amulya, Harsh and Maansi stood united against the status quo. It was
    Maansi's personal struggle with a lazy eye and the hurtful societal judgments that fueled our determination to create 
    something truly impactful. Our website isn't just a platform; it's our collective response to the challenges we faced.
    With comprehensive eye tests, engaging sight-improving games, a personalised face detective Lense Shop and a streamlined
    hospital management system, our creation isn't just about technology – it's about empowerment. It's about turning personal
    adversity into a force for positive change. As we stand on the brink of a new era in eye care, our website stands as a 
    testament to our journey – a journey marked by resilience, compassion, and an unwavering commitment to making a difference
     in the lives of others.
     
    It was co-created by our clinical mentors with a desire to assist amblyopic patients in restoring 
    their vision while also avoiding cosmetic embarrassment. The only tool was the vision of our
    Co-founders– to improve Amblyopic Patients' visual journeys utilizing cutting-edge technology,
    which was at the time a dream technology for the eyecare sector.

It is a result of consistent efforts, grit, and determination for curing amblyopia or
lazy eye. Our first obligation was and will continue to be towards the patients.


</p>
<a href="" class="readmore">Read More</a>
</div>
</div>
</div>
</body>
</html>