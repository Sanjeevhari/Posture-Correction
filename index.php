<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>HomePage</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/solid.min.css" integrity="sha512-EvFBzDO3WBynQTyPJI+wLCiV0DFXzOazn6aoy/bGjuIhGCZFh8ObhV/nVgDgL0HZYC34D89REh6DOfeJEWMwgg==" crossorigin="anonymous" referrerpolicy="no-referrer" />
  <link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Permanent+Marker&family=Ubuntu&display=swap" rel="stylesheet">
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Sriracha&display=swap');

    body {
      margin: 0;
      box-sizing: border-box;
      font-family:"Poppins",sans-serif;
    }

    .header {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #f5f5f5;
    }

    .header .logo {
      font-size: 40px;
      font-family:'Ubuntu', sans-serif;;
      font-weight: bold;
      color: #000;
      text-decoration: none;
      margin-left: 30px;
    }

    .nav-items {
      font-size:20px;
      display: flex;
      justify-content: space-around;
      align-items: center;
      background-color: #f5f5f5;
      margin-right: 20px;
    }

    .nav-items a {
      text-decoration: none;
      color: #000;
      padding: 35px 20px;
      transition:0.5s;
    }

    .nav-items a:hover{
	background-color:#36dd36;
        text-transform: uppercase;
	color:aliceblue;
	}

    .intro {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      width: 100%;
      height: 520px;
      background: linear-gradient(to bottom, rgba(0, 0, 0, 0.5) 0%, rgba(0, 0, 0, 0.5) 100%), url("1.jpg");
      background-size: cover;
      background-position: center;
      background-repeat: no-repeat;
      animation: slider 20s infinite linear;
    }

    @keyframes slider {
      0% {
    background-image: url('https://i1.wp.com/www.onlinefitnesscoach.com/wp-content/uploads/2018/04/canstockphoto48162861.jpg?fit=3000%2C2003&ssl=1');
  }

  25% {
    background-image: url('https://i0.wp.com/supersoldierproject.com/wp-content/uploads/2018/09/Depositphotos_81857628_xl-2015.jpg?ssl=1');
  }

  50% {
    background-image: url('https://a.espncdn.com/photo/2019/0118/r490507_1296x729_16-9.png');
  }

  75% {
    background-image: url('https://cdn3.whatculture.com/images/2020/11/918e74cfd02ea16b-1200x675.jpg');
  }
    }

    .intro h1 {
      font-family: sans-serif;
      font-size: 60px;
      color: #fff;
      font-weight: bold;
      text-transform: uppercase;
      margin: 0;
    }

    .intro p {
      font-size: 20px;
      color: #d1d1d1;
      text-transform: uppercase;
      margin: 20px 0;
    }

    .intro button {
      background-color: #5edaf0;
      color: #000;
      padding: 10px 25px;
      border: none;
      border-radius: 5px;
      font-size: 20px;
      font-weight: bold;
      cursor: pointer;
      box-shadow: 0px 0px 20px rgba(255, 255, 255, 0.4)
    }

    .achievements {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 80px;
    }

    .achievements .work {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .achievements .work i {
      width: fit-content;
      font-size: 50px;
      color: #333333;
      border-radius: 50%;
      border: 2px solid #333333;
      padding: 12px;
    }

    .achievements .work .work-heading {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .achievements .work .work-text {
      font-size: 20px;
      color: #585858;
      margin: 10px 0;
    }

    .about-me {
      display: flex;
      justify-content: center;
      align-items: center;
      padding: 40px 80px;
      border-top: 2px solid #eeeeee;
    }

    .about-me video {
      width: 500px;
      max-width: 100%;
      height: auto;
      border-radius: 10px;
    }

    .about-me-text h2 {
      font-size: 30px;
      color: #333333;
      text-transform: uppercase;
      margin: 0;
    }

    .about-me-text p {
      font-size: 18px;
      color: #585858;
      margin: 10px 0;
    }


    .footer {
      display: flex;
      justify-content: space-between;
      align-items: center;
      background-color: #302f49;
      padding: 40px 80px;
    }

    .footer .copy {
      color: #fff;
    }

    .bottom-links {
      display: flex;
      justify-content: space-around;
      align-items: center;
      padding: 40px 0;
    }

    .bottom-links .links {
      display: flex;
      flex-direction: column;
      justify-content: center;
      align-items: center;
      padding: 0 40px;
    }

    .bottom-links .links span {
      font-size: 20px;
      color: #fff;
      text-transform: uppercase;
      margin: 10px 0;
    }

    .bottom-links .links a {
      text-decoration: none;
      color: #a1a1a1;
      padding: 10px 20px;
    }
  </style>
</head>

<body>
  <header class="header">
    <a href="#" class="logo">Pose Correction</a>
    <nav class="nav-items">
      <a href="#">Home</a>
      <a href="#idAboutUs">About</a>
      <a href="#idContact">Contact</a>
      <a href="survey.php">Feedback</a>
    </nav>
  </header>
  <main>
    <div class="intro">
      <h1> Virtual Trainer</h1>
      <p>Our project is an AI-based Personalised Exercise Feedback Assistant Website</p>
      <button>Get started</button>
    </div>
    <div class="achievements">
      <div class="work">
        <i class="fa-solid fa-dumbbell"></i>
        <b><p class="work-heading">Workout</p></b>
        <p class="work-text">Measure the velocity of specific human body parts to analyze movement speed and count repetitions.</p>
      </div>
      <div class="work">
	<i class="fa-solid fa-magnifying-glass-chart"></i>
        <b><p class="work-heading">Analyse</p></b>
        <p class="work-text">Gather important angles of the human body and define good or bad thresholds.</p>
      </div>
      <div class="work">
        <i class="fa-solid fa-person-walking"></i>
        <b><p class="work-heading">Advice</p></b>
        <p class="work-text">Evaluate poses and movements and compare them to your individual target execution through pose estimation.</p>
      </div>
    </div>
    <div id="idAboutUs">
    <div class="about-me">
      <div class="about-me-text">
        <h2>About Project</h2>
        <p>During exercise, maintaining good posture is important. Incorrect posture can lead to ineffective workouts and health complications. The model analyzes the workout exercises by tracking the body angles derived from the changes in the body forms. A very useful visual analytical tool to enable safe physical exercises.</p>
      </div>
      <video src="2.mp4" muted autoplay loop></video>
    </div></div>
  </main>
  <footer class="footer">
    <div class="if">
      <h3 style="color:white">Contact Us!</h3>
      <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3930.620966978722!2d78.07936421409386!3d9.882132092932043!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b00c58f98cfb84d%3A0x29f51efea3e84bf2!2sThiagarajar%20College%20of%20Engineering!5e0!3m2!1sen!2sin!4v1662477882065!5m2!1sen!2sin" width="500" height="260" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
    </div>
    <div class="developers" style="color:white; padding:10px;">
      Email<br>
      <a href="mailto">posecrt@gmail.com</a>
    </div>
    <div class="bottom-links">
      <div class="links">
        <span>More Info</span>
        <a href="#">Home</a>
        <a href="#">About</a>
        <a href="login.php">Log Out</a>
      </div>
      <div id="idContact">
      <div class="links">
        <span>Social Links</span>
        <a href="#"><i class="fab fa-facebook"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-instagram"></i></a>
      </div>
    </div>
    </div>
  </footer>
</body>

</html>
