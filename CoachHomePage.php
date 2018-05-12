<?php?>
<!DOCTYPE html>
<html>
<head>
<style>
* {
    box-sizing: border-box;
}

body {
    font-family: Arial;
    padding: 10px;
    background: #f1f1f1;
}

/* Header/Blog Title */
.header {
    padding: 30px;
    text-align: center;
    background: white;
}

.header h1 {
    font-size: 50px;
}

/* Style the top navigation bar */
.topnav {
    overflow: hidden;
    background-color: #333;
}

/* Style the topnav links */
.topnav a {
    float: left;
    display: block;
    color: #f2f2f2;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
}

/* Change color on hover */
.topnav a:hover {
    background-color: #ddd;
    color: black;
}

/* Create two unequal columns that floats next to each other */
/* Left column */
.leftcolumn {   
    float: left;
    width: 25%;
}

/* Right column */
.rightcolumn {
    float: left;
    width: 75%;
    background-color: #f1f1f1;
    padding-left: 20px;
}
.rightcolumn2 {
    float: right;
    width: 35%;
    background-color: #f1f1f1;
    padding-left: 20px;
}

/* Fake image */
.fakeimg {
    background-color: #aaa;
    width: 100%;
    padding: 20px;
}

/* Add a card effect for articles */
.card {
    background-color: white;
    padding: 20px;
    margin-top: 20px;
}

/* Clear floats after the columns */
.row:after {
    content: "";
    display: table;
    clear: both;
}

#sideBarStyle ul {
    
    margin: 0;
    padding: 0;
    width: 200px;
    background-color: #f1f1f1;
}

#sideBarStyle li a {
    
    display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
}

ul, li 
{
    list-style-type: none;
    margin: 0;
    padding: 0;
}

ul#sideBarStyle li a:hover,ul#sideBarStyle li.active a
{
   background-color: #4CAF50;
   color: white;

}


/* Responsive layout - when the screen is less than 800px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 800px) {
    .leftcolumn, .rightcolumn {   
        width: 100%;
        padding: 0;
    }
}

/* Responsive layout - when the screen is less than 400px wide, make the navigation links stack on top of each other instead of next to each other */
@media screen and (max-width: 400px) {
.topnav a {
	float: none;
	width: 100%;
}


/*<li>
          <section class="box search">
            <form method="post" action="#">
              <input type="text" class="text" name="search" placeholder="Search" />
            </form>
          </section>
        </li>*/


}
</style>
</head>
<body>

 


<div class="header">
  <h1>Football Management System</h1>
</div>

<div class="topnav">
  <a href="Admin'sMainPage.html">Home </a>
  <a href="EditProfile.html">Settings</a>


  <a href="#" style="float:right">Search</a>

  <input type ="text" placeholder="Search..." style ="float:right">

</div>

<div class="row">
  
  <div class="leftcolumn">
	<!--<div class="card">
      <h2>About Me</h2>
      <div class="fakeimg" style="height:100px;">Image</div>
      <p>Some text about me in culpa qui officia deserunt mollit anim..</p>
    </div>-->
    

    	 <ul id="sideBarStyle">
         <li><a class="active" href="CountriesPage.html">Countries</a></li>
         <li><a href="CountriesLeaguePage.html">League</a></li>
         <li><a href="ClubsPage.html">Clubs</a></li>
         <li><a href="TransferNewsPage.html">Transfer News</a></li>
         <li><a href="GuestPage.html">Matches</a></li>
         <li><a href="playersPage.html">Players</a></li>
         <li><a href="TransferOfferPage.html">Transfer Page</a></li>
         <li><a href="#">Train</a></li>
         <li><a href="#">Players Transfer</a></li>
         <li><a href="myTransfersPage.html">My Transfers</a></li>
    	 </ul>


  </div>


  <div class="rightcolumn">
    
    <div class="card">

      <h2>Favorite Team</h2>
      <div class="rightcolumn2">
        <p>Name:<br>Surname:<br>Club :<br>City :<br>Salaray:<br> Salary :<br>Price :<br> </p>
      </div>
      <div class="fakeimg" style="height:200px; width: 350px">Image</div>
      <div class="rightcolumn2">
        <p>Recent Matches:</p>
      </div>
      <div class="inf" style="height:200px; width: 350px">

      <p>Info:</p>
      <p>Players: <br> Player1</p>

    </div>
  </div>

</div>

 

</body>
</html>