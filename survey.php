<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
<link rel="stylesheet" href="survey.css">
<script>
var code;
function createCaptcha() {
  document.getElementById("submitbtn").disabled = true;
  document.getElementById("submitbtn").style.cursor ="not-allowed";
  document.getElementById('captcha').innerHTML = "";
  var charsArray =
  "0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ@!#$%^&*";
  var lengthOtp = 6;
  var captcha = [];
  for (var i = 0; i < lengthOtp; i++) {
    var index = Math.floor(Math.random() * charsArray.length + 1);
    if (captcha.indexOf(charsArray[index]) == -1)
      captcha.push(charsArray[index]);
    else i--;
  }
  var canv = document.createElement("canvas");
  canv.id = "captcha";
  canv.width = 100;
  canv.height = 50;
  var ctx = canv.getContext("2d");
  ctx.font = "25px Georgia";
  ctx.strokeText(captcha.join(""), 0, 30);
  code = captcha.join("");
  document.getElementById("captcha").appendChild(canv);
}
function validateCaptcha() {
  if (document.getElementById("cpatchaTextBox").value == code) {
	document.getElementById("submitbtn").disabled = false;
	document.getElementById("submitbtn").style.cursor ="pointer";
	alert("Valid Captcha");
  }
   else{
    alert("Invalid Captcha. try Again");
    createCaptcha();
  }

}
</script>
</head>
<body onload="createCaptcha()">
<div class="container">
  <header class="header">
    <h1 id="title" class="text-center">Survey Form</h1>
    <p id="description" class="description text-center">
      Thank you for taking the time to help us improve the platform
    </p>
  </header>
  <form id="survey-form" action="form.php" method="post">
    <div class="form-group">
      <label id="name-label" for="name">Name</label>
      <input
        type="text"
        name="name"
        id="name"
        class="form-control"
        placeholder="Enter your name"
        required
      />
    </div>
    <div class="form-group">
      <label id="email-label" for="email">Email</label>
      <input
        type="email"
        name="email"
        id="email"
        class="form-control"
        placeholder="Enter your Email"
        required
      />
    </div>
    <div class="form-group">
      <label id="number-label" for="number"
        >Age<span class="clue">(optional)</span></label
      >
      <input
        type="number"
        name="age"
        id="number"
        min="10"
        max="99"
        class="form-control"
        placeholder="Age"
      />
    </div>
    <div class="form-group">
      <p>Which option best describes your current role?</p>
      <select id="dropdown" name="role" class="form-control" required>
        <option disabled selected value>Select current role</option>
        <option value="trainer">Trainer</option>
        <option value="gymgoer">Gym Goer</option>
        <option value="other">Other</option>
      </select>
    </div>

    <div class="form-group">
      <p>Would you recommend our website to a friend?</p>
      <label>
        <input
          name="user-recommend"
          value="definitely"
          type="radio"
          class="input-radio"
          checked
        />Definitely</label
      >
      <label>
        <input
          name="user-recommend"
          value="maybe"
          type="radio"
          class="input-radio"
        />Maybe</label
      >

      <label
        ><input
          name="user-recommend"
          value="not-sure"
          type="radio"
          class="input-radio"
        />Not sure</label
      >
    </div>

    <div class="form-group">
      <p>
        What is your favorite feature of our product?
      </p>
      <select id="most-like" name="mostLike" class="form-control" required>
        <option disabled selected value>Select an option</option>
        <option value="challenges">Analysis</option>
        <option value="projects">Review</option>
        <option value="community">Measurement Accuracy</option>
      </select>
    </div>

    <div class="form-group">
      <p>
        What would you like to see improved?
        <span class="clue">(Check all that apply)</span>
      </p>

      <label
        ><input
          name="prefer1"
          value="analyzing"
          type="checkbox"
          class="input-checkbox"
        />Analyzing capacity</label
      >
      <label>
        <input
          name="prefer2"
          value="measurement"
          type="checkbox"
          class="input-checkbox"
        />Measurement capacity</label
      >
      <label
        ><input
          name="prefer3"
          value="review"
          type="checkbox"
          class="input-checkbox"
        />Review Capacity</label
      >
      <label
        ><input
          name="prefer4"
          value="website"
          type="checkbox"
          class="input-checkbox"
        />Website</label
      >
      <label
        ><input
          name="prefer5"
          value="User Interface"
          type="checkbox"
          class="input-checkbox"
        />User Interface</label
      >

    </div>

    <div class="form-group">
      <p>Any comments or suggestions?</p>
      <textarea
        id="comments"
        class="input-textarea"
        name="comment"
        placeholder="Enter your comment here..."
      ></textarea>
    </div>
    <div class="capt">
    <div class='sanju' id="captcha">
    </div>
    <br><br>
    <input type="text" placeholder="Captcha" id="cpatchaTextBox" onchange="validateCaptcha()"/>
    <input style="background-color: #4CAF50; border: none; color: white; padding: 12px 30px; text-decoration: none; margin: 4px 2px; cursor: not-allowed;" type="submit" name="submit" value="Submit" id="submitbtn"/>
    </div>
  </form>
</body>
</html>
