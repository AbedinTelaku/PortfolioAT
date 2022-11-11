<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Abedin Telaku Portfolio</title>

   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">Home</a>
      <a href="#about">About</a>
      <a href="#services">Services</a>
      <a href="#portfolio">Portfolio</a>
      <a href="#contact">Contact</a>
   </nav>

   <div class="follow">
      <a href="#" class="fab fa-facebook-f"></a>
      <a href="#" class="fab fa-twitter"></a>
      <a href="#" class="fab fa-instagram"></a>
      <a href="#" class="fab fa-linkedin"></a>
      <a href="#" class="fab fa-github"></a>
   </div>

</header>

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/personal-photo.jpg" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">Hi, I am Abedin Telaku</h3>
      <span data-aos="fade-up">Full Stack Developer</span>
      <p data-aos="fade-up">I am Software Engineer being skilled in Java/Spring, HTML, CSS, Javascript and PHP.</p>
      <a data-aos="fade-up" href="#about" class="btn">About Me</a>
   </div>

</section>

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">During my studies I gained knowledge to write efficient, readable and maintainable code
      using standard practices HTML, CSS, Javascipt. I also have sufficient knowledge in Object
      oriented programming in Java and in the Spring framework of Java.I have experience
      integrating databases such as SQL, MySQL and variety of Cloud Services from Firebase.</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Abedin Telaku </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> abedintelaku1@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> Prishtina </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> 049658213 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 22 years </h3>
         <h3 data-aos="zoom-in"> <span>experience : </span> 2+ years </h3>
      </div>

      <a href="images/CV_ORIGINAL.pdf" download class="btn" data-aos="fade-up">download CV</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
         <div class="bar" data-aos="fade-left"> <h3><span>HTML</span> <span>95%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>CSS</span> <span>80%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>JavaScript</span> <span>65%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>PHP</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education & experience</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2018 - 2021 )</span>
               <h3>UBT</h3>
               <p>Software Engineer</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2015 - 2018 )</span>
               <h3>High School "Hamdi Berisha"</h3>
               <!-- <p>Drejtimi natyror</p> -->
            </div>


         </div>

         <div class="box-container">

            <h3 class="title" data-aos="fade-left">experience</h3>

            <div class="box" data-aos="fade-left">
               <span>( January 2021 - February 2021  )</span>
               <h3>front-end developer</h3>
               <p>HTML,CSS,JavaScript</p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>full-stack developer</h3>
               <p>HTML,CSS,JavaScript,Bootstrap,C#(NET) </p>
            </div>

            <div class="box" data-aos="fade-left">
               <span>( 2022 )</span>
               <h3>Android developer</h3>
               <p>Java and Kotlin</p>
            </div>

         </div>

      </div>

   </div>

</section>


<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>github</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3><a href="https://github.com/AbedinTelaku/KOSALBDISCOVERY">KosAlbDiscovery</a></h3>
         <p>HTML,CSS,JavaScript,Java Spring</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3><a href="https://github.com/AbedinTelaku/DSports"> D-Sport</a></h3>
         <p>HTML,CSS,JavaScript</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-code"></i>
         <h3><a href="https://github.com/AbedinTelaku/ProjektiNeWeb">KS-PRESS</a></h3>
         <p>HTML,CSS,JavaScript,PHP,DB</p>
      </div>
   </div>

</section>

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>049658213</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>abedintelaku1@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Prishtine, Kosovo</p>
      </div>

   </div>

</section>



<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Abedin Telaku</span> </div>





<script src="js/script.js"></script>


<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>