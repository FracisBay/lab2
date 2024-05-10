<html>

  <style>
    h4     {
      text-align: center;
      padding: 10px; 
      margin: auto; 
      background-color: FF9800; 
      }
	  
    h2 {
      text-align: center; 
	  height: 10px;
      }

    #grad2 {
      margin: auto;
      width: 60%;
      height: 200px
      padding: 10px;
      text-align: center;
      }
	
	body {
	  background-color:lightblue;
	  height: 1000px;
      }
	  
    .*   {
      box-sizing: border-box;
     }

    body {
      margin: 0;
     }


    .header {
      background-color: #f1f1f1;
      padding: 20px;
      text-align: center;
     }


    .topnav {
      overflow: hidden;
      background-color: #1c1c84;
     }


    .topnav a {
      float: left;
      display: block;
      color: #f2f2f2;
      text-align: center;
      padding: 14px 223px;
      text-decoration: none;
     }


    .topnav a:hover {
      background-color: #ddd;
      color: black;
     }
    
    
  </style>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  
<body>
  <div id="grad1">
     <h4 style="color:blue;">Hello Traveler! Welcome to my Personal Webpage!</h4>
  </div>

    <div class="topnav">
     <a href="#">Home</a>
     <a href="#">About Me</a>
     <a href="#">Contact Me</a>
    </div>

	 <h2> Welcome to my Webpage </h2>
	 
	 <p>Full Name: Francis Bayotlang<br>
	    Nickname: Kiko<br>
		Course: ACT-FSTACK (Associate in Computer Technology Full Stack Development)<br>
		Did you choose this course? Yes<br>
        Why Yes?: This is to follow the same path as what my big brother did when he was taking up the same course but from a different school<br>
		If No, what course would you choose? I could’ve taken the course of Architecture<br>
		I.T. Experience: Programming / Gaming / Others: None<br>
		Hobbies / Interests / libangan: Hiking, working out, designing<br>
		What do you expect to learn from this course (Web Programming)?: I would love to learn how to build a functioning and professional looking website<br>
		What do you want to learn to help you in your chosen Major? I would love to dive deeper and get deeper context of the fundamentals needed to build a website<br>
		Goals in life. What do you wish to accomplish in your life? I want to become a Full-Stack Developer someday<br>
		Do you have a dream that you wish to fulfill? If yes, what is your dream? The dream I would want to fulfill is to earn some certifications from various IT platforms, to earn myself a degree of accomplishment so that I can say I’m ready to take part of becoming a full-pledged IT professional and ready to take on some challenges in the real IT industry.<br>
        Any other interesting aspects of your life that you would like to share: I’ve been working since 18 years old and this was the only time I had the chance to go to school. Since it was also part of my dream to get a degree after college even if its an Associate level degree<br></p>
	 <p id="schnee"></p>
	 <p id="keisuke"></p>
	 <p id="schnee2"></p>
	 <p id="schnee3"></p>
	 
		<div id="schnee1">
		<p>YOLO</p>
		<p>YOLO2</p>
		</div>
		
		<p id="demo"></p>
     <script>
	 const person = {
	  newHobby: "cooking",
	  newHobby2: "drawing",
	 };
	 
	 document.getElementById("schnee").innerHTML = " I've got two new passions which are " + person.newHobby + 
	 " and " + person.newHobby2; //JS Object 
	 
	 const x = document.getElementById("schnee1");
     const y = x.getElementsByTagName("p");

     document.getElementById("demo").innerHTML = 
     'The first paragraph (index 105) inside "schnee" is: ' + y[0].innerHTML; // JS HTML DOM
	 
	 document.getElementById("schnee2").innerHTML = 
     "The full URL of this page is:<br>" + window.location.href; // JS Browser DOM 
	 
	 function myGreeting(getsu) {
		document.getElementById("schnee3").innerHTML = getsu; 
	 }
	 
	 function myFirst() {
		myGreeting ("This is the continuation of my webpage");
	 }
	 
	 function mySecond() {
		myGreeting ("Goodbye");
	 }
	 
	 mySecond();
	 myFirst(); // JS Callback
	 </script>
		<script>
	  class Person = {
	   constructor(hobby, year) {
		this.hobby = hobby;
		this.year = year;
	   
	   }
	   age() {
		const date = new Date();
		return date.getFullYear() - this.year;
	   }
	 }
	 
	 const myHobby = new Hobby("Hiking", 2022);
	 document.getElementById("keisuke").innerHTML = 
	 " I started doing hiking and went to Mt. Batulao in my first hike last " + myHobby.age() + " of August. "
	 //JS Class
	</script>

   <?php
   $draw = "draw";
   echo "My mom told me that I" . $draw . "since I was at the age of 5 years old" . "<br>";
   //PHP Introduction 
   
   $txt1 = "About to get started with PHP";
   $txt2 = "W3Schools.com";

   echo "<h2>" . $txt1 . "</h2>";
   //Echo and Print

   
   ?>

   


</body>
</html>
