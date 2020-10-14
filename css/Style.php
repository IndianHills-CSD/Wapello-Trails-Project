<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/*
	#533747
	#5F506B
	#6A6B83
	#76949F
	#86BBBD
*/

body {
	background: #76949F;
	color: white;
	width: 100%;
}

/*the styles for the home page */
th{border: 1px solid black;
	color: black;}
tr{
	border: 1px solid black;
}
td{border: 1px solid black;
	color: black;}

.milestones-con {
	padding:3%;
}
.milestones{
	border: 1px solid black;
	margin-left: auto;
    margin-right: auto;
	background-color: white;
}
.conContainer {;
    color: #F7F7FF;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
	height: 50%
}

.weatherwidget-io {
  display: block;
  margin-top: 50px;
  margin-bottom: 50px;
  margin-left: auto;
  margin-right: auto;
  width: 50%;
}

.ticker-wrap {
	height: 100%;
	width: 100%;
	padding-left: 100%; /* Push contents to right side of screen */
	background-color: #eee;
	color: black;
	display: inline-block; /* Lay items in a horizontal line */
  padding: 0 2rem;
  font-size: 2em;
  color: black;
}







.historytext{
	float: left;
	width: 62.5%;
	font-size: 200%;
	padding: 3% 0% 2% 0%;
}
.historylist{
	float: left;
	padding: 1% 10% 2% 10%;
	font-size: 150%;
	text-align: justify;
}
.calendar{
	width: 30.5%;
	padding-right:2%;
	padding-left: 3%;
	float: left;

}

/*END OF HOME PAGE STYLES*/



/*BEGINING SIGN UP PAGE STYLES*/

.signup-forms img{
    width: 70px;
    margin-top: -50px;
}

.signup-forms{
    width: 300px;
    box-shadow: 0 0 3px 0 rgba(0,0,0,0,3);
    background: #fff;
    padding: 20px;
    margin: 8% auto 8%;
    text-align: center;
}

.signup-forms h1{
    color: #1c8adb;
    margin-bottom: 30px;
}

.signup-forms p{
    color: #000;
}

.input-box{
    border-radius: 20px;
    padding: 10px;
    margin: 8px 0;
    width: 100%;
    border: 1px solid #999;
    outline: none;
}

.signupbtn{
	width: 100%;
	color: #fff;
	padding:10px;
	border-radius: 20px;
	font-size: 15px;
	margin: 10px 0;
	outline:none;
	border: none;
	cursor: pointer;
	background-color: #1c8adb;
}

.facebookbtn{
	color: #fff;
	background-color: #21afde;
	width: 100%;
	padding:10px;
	border-radius: 20px;
	font-size: 15px;
	margin: 10px 0;
	outline:none;
	border: none;
	cursor: pointer;
}

.signup-forms a{ text-decoration: none;}


hr{
    margin-top: 20px;
    width: 100%;
}

.or{
    background: #fff;
    width: 30px;
    margin: -12px auto 12px;
}


/*END OF SIGN UP PAGE STYLES*/



/*BEGINING OF GALLERY PAGE STYLES*/

/* content styles */
.container {
   width: 100%;
   color: #f2f2f2;
   padding: 20px 20px;
   background-color: #152836;

}

.ContainerBtn{
	margin: 25px;
	padding: 25px 25px;
	text-align:center;
}

.btn {
    font-size: inherit;
	font-family: inherit;
    color: black;
	transition: none;
    display: inline-block;
    margin: 15px 5px;
    padding: 15px 38px;
    text-decoration: none;
	border-radius: 15px;
	text-align: center;
	background-color: white;
	cursor: pointer;
	outline: none;
	position: relative;
	border: none;
	width: 225px;
}

.btn:hover {
	background: #6A6B83;
	color: white;
}

.btn:active {
	background: #5F506B;
	color: white;
}

.btn:focus {
	background: #5F506B;
	color: white;
}

.flex-img {
 	display: flex;
 	flex-wrap: wrap;
 	flex-direction: row;
 	align-items: center;
 	justify-content: center;
	padding: 30px;
}

.item {
	padding: 0 10px 10px;
}

 /* Add a transparency effect for thumnbail images */
.item img{
	margin: 5px;
 	padding: 5px;
 	border: 1px solid #FFF;
 	cursor: pointer;
}

.item img:hover {
 	-webkit-transform: scale3d(1.1, 1.1, 1.1);
    transform: scale3d(1.1, 1.1, 1.1);
 	opacity: 1;
}

/* The Modal (background) */
.modal {
 	display: none;
 	position: fixed;
 	z-index: 1;
 	padding-top: 100px;
 	left: 0;
 	top: 0;
 	width: 100%;
 	height: 100%;
 	overflow: auto;
 	background-color: #000;
}

 /* Modal Content */
.slider{
 	position: relative;
 	background-color: #fefefe;
 	margin: auto;
 	padding: 0;
 	width: 80%;
 	max-width: 1000px;
 }

 /* The Close Button */
.close {
 	color: #fff;
 	position: absolute;
 	top: 10px;
 	right: 25px;
 	font-size: 35px;
 	font-weight: bold;
}

.close:hover,
.close:focus {
 	color: #999;
 	text-decoration: none;
 	cursor: pointer;
}

.mySlides { display: none;}

.cursor {cursor: pointer;}

 /* Next & previous buttons */
.prev,.next {
 	cursor: pointer;
 	position: absolute;
 	top: 50%;
 	width: auto;
 	padding: 16px;
 	margin-top: -50px;
 	color: #f2f2f2;
 	font-weight: bold;
 	font-size: 20px;
 	transition: 0.6s ease;
 	border-radius: 0 3px 3px 0;
 	user-select: none;
 }

.next { right: 0; border-radius: 3px 0 0 3px; }

.prev:hover,.next:hover { background-color: rgba(0, 0, 0, 0.8);}

 	/* Number text (1/10 etc) */
.numbertext {
 	color: #f2f2f2;
 	font-size: 12px;
 	padding: 8px 12px;
 	position: absolute;
 	top: 0;
 }
 img { margin-bottom: -4px; }

 .caption{
	text-align: center;
	color: #EEE;
 	background-color: #000;
	padding: 12px 18px;
	font-weight: bold;
}

.Video-container{
	height: auto;
	color: #f2f2f2;
	display: flex;
	justify-content: center;
	flex-wrap: wrap;
}

.video-heading {
	text-align: center;
	color: #F7F7FF;
	padding: 20px;
}

.page-heading {
	text-align: center;
	padding-top: 5%;
}

.Video-container > iframe {
		padding: 10px;
	}

/*END OF GALLERY PAGE STYLES*/


/*
    Trails Page Styles
    Title and activity container
*/
.page-title {
    color: white;
	font-size: 2em;
    padding: 5% 0 1% 5%;
}

.activities {
    color: #F7F7FF;
    padding: .5% 0 .5% 8%;
}

.p-info {
    display: flex;
    object-fit: cover;
	padding: .2% 11% 1% 11%;
	color: #F7F7FF;
}

/* Map */
#map {
    display: flex;
    height: 95%;
    width: 65%;
    margin: 3% auto 0 auto;
	border: 3px solid #533747;
}

/* Clickable Buttons */
#menu a {
    font-size: inherit;
	font-family: inherit;
    color: black;
	transition: none;
    display: inline-block;
    margin: 5px 5px;
    padding: 15px 38px;
    text-decoration: none;
	border-radius: 15px;
	text-align: center;
	background-color: white;
	cursor: pointer;
	outline: none;
	position: relative
}

#menu a:hover {
	background: #6A6B83;
	color: white;
}

#menu a.active:hover {
	background: #6A6B83;
	color: white;
}

#menu a.active {
	background: #5F506B;
	color: white;
}

.square1 {
    background: #f8ff33;
}

.square2 {
    background: #ff9029;
}

.square3 {
    background: #21db00;
}

.square4 {
    background: #ff2424;
}

.square5 {
    background: #0206f2;
}

.square6 {
    background: #c424f9;
}

.square7 {
    background: #6800b3;
}

.square8 {
    background: #8a0000;
}

/* Admin Login Page */

.form-container {
	border-radius: 5px;
	width: 300px;
    box-shadow: 0 0 3px 0 rgba(0,0,0,0,3);
    background: #fff;
    padding: 20px;
	text-align: center;
	color: black;
	justify-content: center;
	align-items: center;
	margin: 10% auto;
    position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}

.form-container:before, .form-container:after
{
    content:"";
    position:absolute;
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 25px rgba(0,0,0,0.8);
    top:4%;
    bottom:0;
    left:1%;
    right:5%;
}

.form-container:after
{
    right:10px;
    left:auto;
    -webkit-transform:skew(8deg) rotate(3deg);
       -moz-transform:skew(8deg) rotate(3deg);
        -ms-transform:skew(8deg) rotate(3deg);
         -o-transform:skew(8deg) rotate(3deg);
            transform:skew(8deg) rotate(3deg);
}

.form-container, td{
	border: none;
}

.form-container img{
    width: 70px;
    margin-top: -50px;
}

.sign-in-btn{
	width: 100%;
	color: #fff;
	padding:10px;
	border-radius: 20px;
	font-size: 15px;
	margin: 10px 0;
	outline:none;
	border: none;
	cursor: pointer;
	background-color: #1c8adb;
}

.reset-btn{
	color: #fff;
	background-color: #1c8adb;
	width: 100%;
	padding:10px;
	border-radius: 20px;
	font-size: 15px;
	margin: 10px 0;
	outline:none;
	border: none;
	cursor: pointer;
}

/* Area Plan Styling */
.plans-page-title {
    padding: 4% 0 0 20%;
	color: white;
	font-style: inherit;
}

hr.plans-hr {
    border: 1px solid #FE5F55;
    margin-inline-start: 3%;
    margin-inline-end: 3%;
    margin-block-start: 3%;
}

.area-plan-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    padding: 3%;
    list-style: none;
}

.areaPlanIMG {
    display: flex;
    object-fit: cover;
    padding: 5% 0 0 0;
}

.area-plan-img > img {
    resize: both;
    object-fit: cover;
    width: 100%;
    align-items: baseline;
    padding: 2%;
    border: 2px solid #5F506B;
 }

.area-plan-heading {
    padding: .5% 0 .5% 8%;
	color: #533747;
}

.plan-p-info {
    display: flex;
    padding: .2% 11% 1% 11%;
    object-fit: cover;
    color: white;
}

.plan-p-info.bottom {
	margin-bottom: 5%;
}


/* Nav and Footer Styling */

@import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@500&display=swap');

* {
	box-sizing: border-box;
	margin: 0;
	padding: 0;
}

.logo {
  width: 550px;
  display: flex;
}

h1.nav {
  padding-top: 3vh;
  padding-left: 10%;
  text-align: center;
  color: white;
  font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	font-size: 25px;
	letter-spacing: 2px;
}

nav {
	padding: 30px 10%;
	color: white;
	background-color: #5F506B;
	display: flex;
	justify-content: space-around;
	align-items: center;
	height: 15vh;
    position:relative;
    -webkit-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
       -moz-box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
            box-shadow:0 1px 4px rgba(0, 0, 0, 0.3), 0 0 40px rgba(0, 0, 0, 0.1) inset;
}

nav:before, nav:after
{
    content:"";
    position:absolute;
    z-index:-1;
    -webkit-box-shadow:0 0 20px rgba(0,0,0,0.8);
    -moz-box-shadow:0 0 20px rgba(0,0,0,0.8);
    box-shadow:0 0 20px rgba(0,0,0,0.8);
    top:50%;
    bottom:0;
    left:10px;
    right:10px;
    -moz-border-radius:100px / 10px;
    border-radius:100px / 10px;
}
nav:after
{
    right:10px;
    left:auto;
    -webkit-transform:skew(8deg) rotate(3deg);
       -moz-transform:skew(8deg) rotate(3deg);
        -ms-transform:skew(8deg) rotate(3deg);
         -o-transform:skew(8deg) rotate(3deg);
            transform:skew(8deg) rotate(3deg);
}

.nav-links {
  width: 40%;
	display: flex;
	list-style-type: none;
	justify-content: space-around;
	z-index: 1;
}

.nav-links a {
	letter-spacing: 2px;
}

li, a {
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	font-size: 16px;
	text-decoration: none;
	color: white;
}

li:hover, a:hover {
	color: #a7beae;
	transition: 0.2s ease;
	cursor: pointer;
}

.burger div {
	width: 25px;
	height: 3px;
	background-color: #e7e8d1;
	margin: 5px;
	transition: all 0.3s ease;
}

.burger {
	display: none;
}

h2 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
}

h2.footer {
	padding-bottom: 10px;
}

p.footer {
	color: black;
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
	padding-bottom: 5px;
}

p.footer > a {
	color: black
}

footer {
	background-color: #ffffff;
	vertical-align: baseline;
	width: 100%;
	height: 395px;
}

.footerInfo {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 30px 10%;
}

.toTop {
	padding-top: 30px;
}

.contact {
	text-align: center;
	height: 200px;
}

.community {
	text-align: center;
	height: 200px;
}

.additional {
	text-align: center;
	height: 200px;
}

p.footer {
	margin-top: 5px;
	margin-bottom: 5px;
}

button#myBtn {
	display: block;
	margin: 25px auto 15px auto;
	background-color: #808080;
  border: none;
  color: white;
  padding: 10px 28px;
  text-align: center;
  text-decoration: none;
  font-size: 14px;
}

button#myBtn:hover {
	background-color: #8f8f8f;
}

button#myBtn:focus {
	outline: none;
}

.toTop {
	height: 80px;
}

@media only screen and (max-width: 1600px) {
  .logo {
    width: 35%;
  }

  li, a {
	  color: white;
  }

  .nav-links {
		width: 45%;
	}
}

@media only screen and (max-width: 1200px) {
  h1.nav  {
    font-size: 20px;
  }

  .nav-links {
		width: 55%;
	}

	li, a {
	  color: white;
  }

  .footerInfo {
		display: inline;
  }

	footer {
		height: 800px;
	}

	.toTop {
		padding-top: 30px;
	}
}

@media only screen and (max-width: 900px) {

	#map {
		height: 45%;
		width: 95%;
	}

	body {
		overflow-x: hidden;
	}
	.nav-links {
		background-color: #ffffff;
		position: absolute;
		right: 0px;
		height: 100%;
		top: 20vh;
		display: flex;
		flex-direction: column;
		align-items: center;
		width: 100%;
		transform: translateX(100%);
		transition: transform 0.5s ease-in;
	}

	li, a {
		color: black;
	}

  nav {
    height: 20vh;
  }

  h1.nav {
    font-size: 15px;
    padding-left: 5%;
    width: 60%;
  }

	.nav-links li {
		opacity: 0;
	}

	.burger {
		display: block;
	}

	footer {
		height: 800px;
	}

	.toTop {
		padding-top: 30px;
	}
}

.nav-active {
	transform: translateX(0%);
}

@keyframes navLinkFade {
	from {
		opacity: 0;
		transform: translateX(50px);
	}
	to {
		opacity: 1;
		transform: translateX(0px);
	}
}

.toggle .line1 {
transform:  rotate(-45deg) translate(-5px,6px);
}

.toggle .line2 {
	opacity: 0;
}

.toggle .line3 {
	transform:  rotate(45deg) translate(-5px,-6px);
}
/* stragtice plans page*/
.Plandesc{
	padding: 2%;
	font-size: 20px;
}


/* Project Page Styling */



div.projectContent {
  display: flex;
}

div.filter {
  border: 1px black solid;
  width: 15%;
  height: 45vh;
  position: sticky;
  top: 0;
  margin-bottom: 5px;
}

div.projects {
  width: 85%;
  margin: auto;
}

div.project1 {
  background-color: #cfcfcf;
  height: 30vh;
  margin-top: 25px;
  margin-bottom: 5px;
  display: flex;
  text-align: center;
}

div.project2 {
  background-color: #cfcfcf;
  height: 30vh;
  margin-bottom: 5px;
  display: flex;
  text-align: center;
}

div.project3 {
  background-color: #cfcfcf;
  height: 30vh;
  margin-bottom: 25px;
  display: flex;
  text-align: center;
}

div.projectimage {
  width: 33.33%;
  border: 1px black solid;
  display: flex;
}

div.projectdescription {
  width: 33.33%;
  border: 1px black solid;
}

div.projectinfo {
  width: 33.33%;
  border: 1px black solid;
}

div.thumbnail {
  width: 100%;
  background-color: #909090;
}

div.projecttitle {
  padding-top: 20px;
  padding-bottom: 60px;
}

@media only screen and (max-width: 900px) {

  div.projects {
    width: 100%;
  }

  div.projectimage {
    width: 100%;
    height: 200px;
    border: 1px black solid;
    display: lex;
  }

  div.projectdescription {
    width: 100%;
    border: 1px black solid;
    height: 250px;
  }

  div.projectinfo {
    width: 100%;
    height: 200px;
  }

  div.project1 {
    width: 75%;
    background-color: #cfcfcf;
    height: 650px;
    margin: auto;
    margin-top: 25px;
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
    text-align: center;
  }

  div.project2 {
    width: 75%;
    background-color: #cfcfcf;
    height: 650px;
    margin: auto;
    margin-bottom: 15px;
    display: flex;
    flex-direction: column;
    text-align: center;
  }

  div.project3 {
    width: 75%;
    background-color: #cfcfcf;
    height: 650px;
    margin: auto;
    margin-bottom: 25px;
    display: flex;
    flex-direction: column;
    text-align: center;
  }
}
/*admin email main*/

.Maintence{
	border: 5px solid white;
	
}
