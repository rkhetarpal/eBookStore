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
.header h3 a
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
<th><h3><a href="http://localhost/wp-project/booklogin.html">Login</a></h3></th>
<th><h3><a href="http://localhost/wp-project/booksignup.html">Sign Up</a></h3></th>
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
<th width=53%><form name="searchform" method="post" action="http://localhost/wp-project/search.php" autocomplete="off">&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp<input type="text" name="find" placeholder="Search" size="25"/><input type="submit" value="SEARCH" name="search" style="float:right"></form></th>
</tr>
</table>
</div>
<div class="Q">
<strong>
      <div class="quotes">"So many books, so little time." - Frank Zappa</div>
      <div class="quotes">"The person, be it gentleman or lady, who has not pleasure in a good novel, must be intolerably stupid." - Jane Austen, Northanger Abbey</div>
      <div class="quotes">"Outside of a dog, a book is man's best friend. Inside of a dog it's too dark to read." - Groucho Marx</div>
      <div class="quotes">"Sometimes, you read a book and it fills you with this weird evangelical zeal, and you become convinced that the shattered world will never be put back together unless and until all living humans read the book." - John Green, The Fault in Our Stars</div>
      <div class="quotes">"Be yourself; everyone else is already taken." - Oscar Wilde</div>
      <div class="quotes">"If you tell the truth, you don't have to remember anything." - Mark Twain</div>
      <div class="quotes">"Always forgive your enemies; nothing annoys them so much." - Oscar Wilde</div>
      <div class="quotes">"Two things are infinite: the universe and human stupidity; and I'm not sure about the universe." - Albert Einstein</div>
      <div class="quotes">"Fairy tales are more than true: not because they tell us that dragons exist, but because they tell us that dragons can be beaten." - Neil Gaiman, Coraline</div>
      <div class="quotes">"What really knocks me out is a book that, when you're all done reading it, you wish the author that wrote it was a terrific friend of yours and you could call him up on the phone whenever you felt like it. That doesn't happen much, though." - J.D. Salinger, The Catcher in the Rye</div>
</strong>
</div>
<div class="su">
<h3><center>Signed Up Successfully!</center></h3><br>
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