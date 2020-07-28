<?php
    header("Content-type: text/css; charset: UTF-8");
?>

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

.historytext{
	padding-top: 5%;
	padding-left:10%;
	padding-right:10%;
	font-size: 200%;
}
/*END OF HOME PAGE STYLES*/



/*BEGINING OF GALLERY PAGE STYLES*/

/* content styles */
.container {
   width: 100%;
   color: #f2f2f2;
   margin: 0 auto;
   padding: 20px 20px;
   background-color: #152836;
}

.flex-img {
 	display: flex;
 	flex-wrap: wrap;
 	flex-direction: row;
 	align-items: center;
 	justify-content: center;
	padding: 30px;
}

.item { padding: 0 10px 10px;}

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
	hieght: 400px;
	color: #f2f2f2;
	display: flex;
	justify-content: center;
}

/*END OF GALLERY PAGE STYLES*/


/*
    Trails Page Styles
    Title and activity container
*/
.page-title {
    color: #F7F7FF;
    padding: 1% 0 0 5%;
}

.activities {
    color: #F7F7FF;
    padding: .5% 0 .5% 8%;
}

.p-info {
    display: flex;
    object-fit: cover;
    padding: .2% 11% 1% 11%;
}

/* Map */
#map {
    display: flex;
    height: 65%;
    width: 85%;
    margin: 0 auto 0 auto;
    background: #BDD5EA;
}

/* Clickable Buttons */
.instruct {
    display: flex;
    justify-content: center;
    margin-top: 1%;
    margin-bottom: 1%;
    font-weight: bolder;
    font-size: 1.2em;
}

#menu {
    display: flex;
    z-index: 3;
    border-radius: 2px;
    color: #FE5F55;
    width: 100%;
    justify-content: center;
    margin-bottom: 1%;
}

#menu a {
    font-size: 13px;
    color: #24252A;
    display: block;
    margin: 2px;
    padding: 10px;
    text-decoration: none;
    border: 1px solid #577399;
    text-align: center;
}

#menu a:hover {
    background-color: #f8f8f8;
    color: #404040;
}

#menu a.active {
    background-color: #3887be;
    color: #ffffff;
    border: 1px solid #577399;
}

#menu a.active:hover {
    background: #3074a4;
}

/* Map Legend */
.legend-head {
    padding-left: 5%;
}

.legend-container {
    display: flex;
    flex-wrap: wrap;
    justify-content: space-around;
    list-style: none;
    align-items: stretch;
}

.legend-box-1 {
    flex: 1 0 15%;
}

.legend-box-2 {
    flex: 1 0 25%;
}

.legend {
    list-style: none;
    margin: 10%;
    color: #24252A;
}

.color-code {
    height: 10%;
    width: 10%;
    margin-left: 50%;
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

.icon {
    height: 12%;
    width: 12%;
    margin-left: 47%;
}

/* Area Plan Styling */
.plans-page-title {
    color: #FE5F55;
    font-size: 2em;
    padding: 2% 0 0 5%;
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
    border: 2px solid #FE5F55;
 }

.area-plan-heading {
    padding: .5% 0 .5% 8%;
    color: #FE5F55;
}

.plan-p-info {
    display: flex;
    padding: .2% 11% 1% 11%;
    object-fit: cover;
    color: #BDD5EA;
}
