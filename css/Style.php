<?php
    header("Content-type: text/css; charset: UTF-8");
?>

/*the styles for the home page */
th{
	border: 1px solid red;
	}
tr{
	border: 1px solid red;
}
td{border: 1px solid red;}

.conContainer {
    background: #577399;
    color: #F7F7FF;
}
.center {
    display: block;
    margin-left: auto;
    margin-right: auto;
    width: 50%;
	height: 50%
}
.milestones-con {
	padding:3%;
}
.milestones{
	border: 1px solid red;
	margin-left: auto;
    margin-right: auto;
	background-color: blue;
}
.newsbox{
	background:red;
	color: white;
	text-align: center;
	float:inline;
}
/* OUTER CONTAINER */
.tcontainer {
  width: 100%;
  overflow: hidden; /* Hide scroll bar */
}
 
/* MIDDLE CONTAINER */
.ticker-wrap {
  width: 100%;
  padding-left: 100%; /* Push contents to right side of screen */
  background-color: #eee;
}

/* INNER CONTAINER */
@keyframes ticker {
  0% { transform: translate3d(0, 0, 0); }
  100% { transform: translate3d(-100%, 0, 0); }
}
.ticker-move {
  /* Basically move items from right side of screen to left in infinite loop */
  display: inline-block;
  white-space: nowrap;
  padding-right: 100%;
  animation-iteration-count: infinite;
  animation-timing-function: linear;
  animation-name: ticker;
  animation-duration: 10s;
}
.ticker-move:hover{
  animation-play-state: paused; /* Pause scroll on mouse hover */
}

/* ITEMS */
.ticker-item{
  display: inline-block; /* Lay items in a horizontal line */
  padding: 0 2rem;
}
<<<<<<< HEAD
.historytext{
	padding-top: 5%;
	padding-left:10%;
	padding-right:10%;
	font-size: 200%;
}
/*END OF HOME PAGE STYLES*/



/*BEGINING OF GALLERY PAGE STYLES*/

h2 {
	font-family: 'Montserrat', sans-serif;
	font-weight: 500;
}

header {
	display: flex;
	justify-content: space-between;
	align-items: center;
	padding: 30px 10%;
	background-color: #edf0f1;
}

/* content styles */
.container {
   width: 90%;
   margin: 0 auto;
   background-color: #152836;
}

.flex-img {
 	display: flex;
 	flex-wrap: wrap;
 	flex-direction: row;
 	align-items: center;
 	justify-content: center;
}

.item { padding: 0 10px 10px;}

 /* Add a transparency effect for thumnbail images */
.item img{
	margin: 5px;
 	padding: 5px;
 	border: 3px solid #FFF;
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
 	color: #fff;
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

 	/* Caption text */
.caption {
 	color: #EEE;
 	background-color: rgba(0, 0, 0, 0.45);
 	bottom: 10px;
 	font-size: 12px;
 	font-weight: bold;
 	left: 0;
 	padding: 15px 20px;
 	position: fixed;
 	right: 0;
 	text-align: center;
 	margin: 0 25px  0;
}

.Video-container{
	border: dotted;
	display: flex;
	justify-content: center;
}


/*END OF GALLERY PAGE STYLES*/

