<!DOCTYPE html>
<html>
<head>
<title>eBookShop</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta.3/css/bootstrap.min.css" integrity="sha384-Zug+QiDoJOrZ5t4lssLdxGhVrurbmBWopoEl+M6BdEfwnCJZtKxi1KgxUyJq13dy" crossorigin="anonymous">
<style>
.dropdown-content {
    display: none;
    position: absolute;
    background-color: #f9f9f9;
    min-width: 160px;
    box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
    z-index: 1;
}
.deal a
{
text-decoration:none;
color:black;
}
.dropdown-content a {
    float: none;
    color: black;
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    text-align: left;
}

.dropdown-content a:hover {
    background-color: #ddd;
}

.dropdown:hover .dropdown-content {
    display: block;
}
.special a,.author a
{
text-decoration:none;
color:white;
}
.menu a
{
text-decoration:none;
color:black;
}
.dropdown h5
{
color:black;
}
.header
{
background-color:black    ;
color:white;
}
.header h3 a,h5 a
{
text-decoration:none;
color:white;
}
.special,.author,.footer
{
color:white;
background-color:black  ;
}
.quotes{
	color:white;
	text-align: center;
	background:black  ;
	width:100%;
	height:75px;
	padding: 10px 2.5%;
}
.about a,.readchoice a
{
text-decoration:none;
color:black;
}
.disc
{
color:red;
}
.author img
{
border-radius: 50%;
}
.su
{
background:black;
color:white;
border:solid white;
}
.su a
{
color:white;
text-decoration:none;
}
</style>
</head>
<body>
<div class="header">
<table>
<col width=2500>
<col width=190>
<col width=350>
<tr>
<th height=50><h3><a href="http://localhost/wp-project/bhomepage.html">eBookShop</a></h3></th>
<th><h5>Hello,<?php session_start(); $uname=$_SESSION['uname']; echo $uname; ?>!</h5></th>
<th><h5><a href="http://localhost/wp-project/bhomepage.html">Log Out</a></h5></th>
</tr>
</table>
</div>
<div class="menu">
<table width=100%>
<tr>
<th width=10%><div class="dropdown"><h5>Categories</h5>
    <div class="dropdown-content">
      <a href="http://localhost/wp-project/bookbs.html">Best Sellers</a>
      <a href="http://localhost/wp-project/booklit.html">Literature and Fiction</a>
      <a href="http://localhost/wp-project/bookcnt.html">Crime and Thriller</a>
      <a href="http://localhost/wp-project/bookrom.html">Romance</a>
      <a href="http://localhost/wp-project/bookclassics.html">Classics</a>
      <a href="http://localhost/wp-project/bookscifi.html">Science Fiction</a>
      <a href="http://localhost/wp-project/bookfan.html">Fantasy</a>
      <a href="http://localhost/wp-project/bookyoung.html">Young Adult</a>
      <a href="http://localhost/wp-project/bookchild.html">Children</a>
      <a href="http://localhost/wp-project/booknonfi.html">Non Fiction</a>
    </div>
  </div> </th>
<th width=10%><h5><a href="http://localhost/wp-project/bookbs.html">Best Sellers</a></h5></th>
<th width=13%><h5><a href="http://localhost/wp-project/fb.html">Featured Books</a></h5></th>
<th width=10%><h5><a href="http://localhost/wp-project/na.html">Newly Added</a></h5></th>
<th width=53%><form name="searchform" method="post" action="http://localhost/wp-project/search.php" autocomplete="off">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="find" placeholder="Search" size="25"/><input type="submit" value="SEARCH" name="search" style="float:right"/></form></th>
</tr>
</table>
</div>
<div class="Q">
<strong>
      <div class="quotes">"So many books, so little time." - Frank Zappa</div>
      <div class="quotes">"The person, be it gentleman or lady, who has not pleasure in a good novel, must be intolerably stupid." - Jane Austen, Northanger Abbey</div>
      <div class="quotes">"Outside of a dog, a book is man's best friend. Inside of a dog it's too dark to read." - Groucho Marx</div>
      <div class="quotes">"Sometimes, you read a book and it fills you with this weird evangelical zeal, and you become convinced that the shattered world will never be put back together unless and until all living humans read the book." - John Green, The Fault in Our Stars</div>
      <div class="quotes">"Be yourself; everyone else is already taken."- Oscar Wilde</div>
      <div class="quotes">"If you tell the truth, you don't have to remember anything." - Mark Twain</div>
      <div class="quotes">"Always forgive your enemies; nothing annoys them so much." - Oscar Wilde</div>
      <div class="quotes">"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe." - Albert Einstein</div>
      <div class="quotes">"Fairy tales are more than true: not because they tell us that dragons exist, but because they tell us that dragons can be beaten." - Neil Gaiman, Coraline</div>
      <div class="quotes">"What really knocks me out is a book that, when you're all done reading it, you wish the author that wrote it was a terrific friend of yours and you could call him up on the phone whenever you felt like it. That doesn't happen much, though." - J.D. Salinger, The Catcher in the Rye</div>
</strong>
</div>
<div class="deal">
<strong><h3><center>DEAL OF THE DAY</center></h3></strong>
<table width=100%>
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<tr>
<th><center><a href="http://localhost/wp-project/The Pelican Brief.html"><img src="PelicanBrief.jpg" height="200" width="150"/><br>The Pelican Brief</a><br><span class="disc"><strike>300</strike>&nbsp200</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knot.html"><img src="shopaties.jpg" height="200" width="150"/><br>Shopaholic Ties The Knots</a><br><span class="disc"><strike>200</strike>&nbsp150</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic & Baby.html"><img src="shopababy.jpg" height="200" width="150"/><br>Shopaholic & Baby</a><br><span class="disc"><strike>200</strike>&nbsp175</span></center></th>
<th><center><a href="http://localhost/wp-project/The Scorpio Races.html"><img src="scorpio.jpg" height="200" width="150"/><br>The Scorpio Races</a><br><span class="disc"><strike>350</strike>&nbsp250</span></center></th>
<th><center><br><a href="http://localhost/wp-project/Things I Want My Daughters To Know.html"><img src="thingsdaughters.jpg" height="200" width="150"/><br>Things I Want My Daughters To Know</a><br><span class="disc"><strike>300</strike>&nbsp195</span></center></th>
</tr>
<tr>
<th><center><a href="http://localhost/wp-project/The Subtle Knife"><img src="subtleknife.jpg" height="200" width="150"/><br>The Subtle Knife</a><br><span class="disc"><strike>175</strike>&nbsp50</span></center></th>
<th><center><a href="http://localhost/wp-project/Code To zero.html"><img src="codetozero.jpg" height="200" width="150"/><br>Code To zero</a><br><span class="disc"><strike>100</strike>&nbsp75</span></center></th>
<th><center><a href="http://localhost/wp-project/The Lady On My Left.html"><img src="ladyleft.jpg" height="200" width="150"/><br>The Lady on my Left</a><br><span class="disc"><strike>120</strike>&nbsp92</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="freak.jpg" height="200" width="130"/><br>FREAKonomics</a><br><span class="disc"><strike>240</strike>&nbsp60</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="child.jpg" height="200" width="150"/><br>The Child Inside</a><br><span class="disc"><strike>101</strike>&nbsp89</span></center></th>
</tr>
<tr>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="inkexchange.jpg" height="200" width="150"/><br>Ink Exchange</a><br><span class="disc"><strike>123</strike>&nbsp90</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="firstdays.jpg" height="200" width="150"/><br>The First Days</a><br><span class="disc"><strike>111</strike>&nbsp65</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="rise.jpg" height="200" width="150"/><br>Rise Again</a><br><span class="disc"><strike>300</strike>&nbsp151</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="dead.jpg" height="200" width="150"/><br>Apocalypse of the Dead</a><br><span class="disc"><strike>301</strike>&nbsp201</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="siege.jpg" height="200" width="150"/><br>Siege</a><br><span class="disc"><strike>110</strike>&nbsp93</span></center></th>
</tr>
<tr>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="wwz.jpg" height="200" width="150"/><br>World War Z</a><br><span class="disc"><strike>500</strike>&nbsp368</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="warbrides.jpg" height="200" width="150"/><br>War Brides</a><br><span class="disc"><strike>301</strike>&nbsp234</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="silence.jpg" height="200" width="130"/><br>The Silence of Trees</a><br><span class="disc"><strike>95</strike></span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="wwz.jpg" height="200" width="150"/><br>World War Z</a><br><span class="disc"><strike>500</strike>&nbsp368</span></center></th>
<th><center><a href="http://localhost/wp-project/Shopaholic Ties The Knots.html"><img src="wwz.jpg" height="200" width="150"/><br>World War Z</a><br><span class="disc"><strike>500</strike>&nbsp368</span></center></th>
</tr>
</table>
</div>
<div class="special">
<strong><h3><center>SPECIAL PACKS<br><br></center></h3></strong>
<table width=100%>
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<tr>
<th><center><a href="#"><img src="jamespack.jpg" height="200" width="150"/><br>James Patterson</a><br><span class="disc"><strike>1198</strike>&nbsp298</span></center></th>
<th><center><a href="#"><img src="billbrysonpack.jpg" height="200" width="150"/><br>Bill Bryson</a><br><span class="disc"><strike>1999</strike>&nbsp478</span></center></th>
<th><center><a href="#"><img src="hppack.jpg" height="200" width="150"/><br>J.K.Rowling</a><br><span class="disc"><strike>5000</strike>&nbsp3750</span></center></th>
<th><center><a href="#"><img src="colinpack.jpg" height="200" width="150"/><br>Colin Dexter</a><br><span class="disc"><strike>1999</strike>&nbsp498</span></center></th>
<th><center><a href="#"><img src="jeffreypack.jpg" height="200" width="150"/><br>Jeffrey Archer</a><br><span class="disc"><strike>2200</strike>&nbsp1800</span></center></th>
</tr>
<tr>
<th><center><a href="#"><img src="davidpack.jpg" height="200" width="150"/><br>David Baldacci</a><br><span class="disc"><strike>1999</strike>&nbsp458</span></center></th>
<th><center><a href="#"><img src="salmanpack.jpg" height="200" width="150"/><br>Salman Rushdie</a><br><span class="disc"><strike>1199</strike>&nbsp548</span></center></th>
<th><center><a href="#"><img src="stepheniepack.jpg" height="200" width="150"/><br>Stephenie Meyer</a><br><span class="disc"><strike>2250</strike>&nbsp298</span></center></th>
<th><center><a href="#"><img src="stiegpack.jpg" height="200" width="150"/><br>Stieg Larsson</a><br><span class="disc"><strike>300</strike>&nbsp200</span></center></th>
<th><center><a href="#"><img src="stephenpack.jpg" height="200" width="150"/><br>Stephen Fry</a><br><span class="disc"><strike>1199</strike>&nbsp228</span></center></th>
</tr>
</table>
</div>
<div class="readchoice">
<strong><h3><center>READER'S CHOICE<br></center></h3></strong>
<table width=100%>
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<tr>
<th><center><a href="#"><img src="baudo.jpg" height="200" width="150"/><br>Baudolino</a><br><span class="disc"><strike>650</strike>&nbsp158</span></center></th>
<th><center><a href="#"><img src="bendriver.jpg" height="200" width="150"/><br>A Bend in The River</a><br><span class="disc"><strike>499</strike>&nbsp188</span></center></th>
<th><center><a href="#"><img src="wallflower.jpg" height="200" width="150"/><br>The Perks of Being A Wallflower</a><br><span class="disc"><strike>499</strike>&nbsp194</span></center></th>
<th><center><a href="#"><img src="rain.jpg" height="200" width="150"/><br>The Sheltering Rain</a><br><span class="disc"><strike>420</strike>&nbsp201</span></center></th>
<th><center><br><a href="#"><img src="paulo.jpg" height="200" width="150"/><br>By The River Piedro, I Sat Down And Wept</a><br><span class="disc"><strike>907</strike>&nbsp210</span></center></th>
</tr>
<tr>
<th><center><a href="#"><img src="purple.jpg" height="200" width="150"/><br>Purple Hibiscus</a><br><span class="disc"><strike>930</strike>&nbsp215</span></center></th>
<th><center><br><a href="#"><img src="history.jpg" height="200" width="150"/><br>A Short History of Nearly Everything</a><br><span class="disc"><strike>599</strike>&nbsp237</span></center></th>
<th><center><a href="#"><img src="girlleft.jpg" height="200" width="150"/><br>The Girl you Left You Behind</a><br><span class="disc"><strike>399</strike>&nbsp249</span></center></th>
<th><center><a href="#"><img src="suitableboy.jpg" height="200" width="150"/><br>A Suitable Boy</a><br><span class="disc"><strike>500</strike>&nbsp274</span></center></th>
<th><center><a href="#"><img src="bookthief.jpg" height="200" width="150"/><br>The Book Thief</a><br><span class="disc"><strike>424</strike>&nbsp282</span></center></th>
</tr>
</table>
</div>
<div class="author">
<strong><h3><center>AUTHOR'S IN FOCUS</center></h3></strong>
<table width=100%>
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<col width="20%">
<tr>
<th><center><a href="#"><img src="gabriel.jpg" height="200" width="150"/><br>Gabriel Garcia Marquez</a></th>
<th><center><a href="#"><img src="nora.jpg" height="200" width="150"/><br>Nora roberts</a></th>
<th><center><a href="#"><img src="stephenking.jpg" height="200" width="150"/><br>Stephen King</a></th>
<th><center><a href="#"><img src="ian.jpg" height="200" width="150"/><br>Ian Rankin</a></th>
<th><center><br><a href="#"><img src="colin.jpg" height="200" width="150"/><br>Colin Dexter</a></th>
</tr>
<tr>
<th><center><a href="#"><img src="jeff.jpg" height="200" width="150"/><br>Jeffrey Archer</a></th>
<th><center><br><a href="#"><img src="j.k..jpg" height="200" width="150"/><br>J.K. Rowling</a></th>
<th><center><a href="#"><img src="david.jpg" height="200" width="150"/><br>David Baldacci</a></th>
<th><center><a href="#"><img src="dan.jpg" height="200" width="150"/><br>Dan Brown</a><br></th>
<th><center><a href="#"><img src="agatha.jpg" height="200" width="150"/><br>Agatha Christie</a></th>
</tr>
</table>
</div>
<div class="about">
<table width=100%>
<col width=65%>
<col width=35%>
<tr>
<th><h2><center>About Us</center></h2><center>Ever wanted to buy a book but could not because it was too expensive? worry not! because eBookShop is here! eBookShop, these days in news,is being called
as the Robinhood of the world of books. eBookShop team is committed to bring to you all kinds of best books at the minimal prices ever seen anywhere.
Yes, we are literally giving you away a steal.</center></th>
<th><center>
<img src="https://media.giphy.com/media/H6KB7Tqy3OlOM/giphy.gif"/></center></th>
</tr>
</table>
</div>
<div class="footer">
<h6>&copy;eBookShop. All Rights Reserved.</h6>
</div>
</body>
<script>
var myIndex = 0;
carousel();
function carousel() {
    var i;
    var x = document.getElementsByClassName("quotes");
    for (i = 0; i < x.length; i++) {
       x[i].style.display = "none";
    }
    myIndex++;
    if (myIndex > x.length) {myIndex = 1}
    x[myIndex-1].style.display = "block";
    setTimeout(carousel, 3000);
}
</script>
</html
