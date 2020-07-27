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
.historytext{
	padding-top: 5%;
	padding-left:10%;
	padding-right:10%;
	font-size: 200%;
}
/*END OF HOME PAGE STYLES*/