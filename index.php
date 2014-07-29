<!doctype html>
<html>
<head>
<style>
@font-face
{
    font-family: customTitle;
    src: url(src/font/basictitlefont.ttf);
}
html, body
{
margin: 0;
padding: 0;
font-family: sans-serif;
font-size: 92%;
color: #333;
}
div.burrito
{
width: 95%;
max-width: 800px;
margin: 0 auto;
}
b.box-count
{
padding: 0 2px;
border: solid 1px #FFF;
border-radius: 2px;
text-align: center;
font-weight: normal;
}
#top-bar
{
color: #FFF;
background-color: #7A7;
}
#top-bar span
{
display: block;
float: left;
padding: 10px 0;
padding-left: 25px;
background-image: url(src/img/mini-logo2.png);
background-repeat: no-repeat;
background-position: left center;
}
#top-bar a
{
display: block;
float: right;
padding: 10px 15px;
color: #FFF;
text-decoration: none;
}
#main
{
margin-top: 30px;
text-align: justify;
}
#bigfoot
{
max-width: 200px;
padding-top: 7px;
border-top: solid 1px #AAA;
text-align: center;
color: #AAA;
}
h1
{
line-height: 50px;
margin: 0;
color: #7A7;
font-family: customTitle;
font-size: 50px;
text-align: center;
}
</style>
</head>
<body>

<div id="top-bar">
    <div class="burrito">
        <span><b>saricDen</b> by Kirk</span>
        
        <a href="">Contact</a>
        <a href="">Games <b class="box-count">12</b></a>
        <a href="">Projects <b class="box-count">2</b></a>
        
        <br style="clear:both;">
    </div>
</div>

<div id="main" class="burrito">
    <h1>Kirk M. // saricDen</h1>
    <p>I'm das Toronto-based programmer who code lots of stuff I think is the shit because it's pretty fun. My day to day stuff is backend PHP (and learning Rails), however I'm a big fan of frontend web dev. In my spare time I make web apps or games. Or play Skyrim. Mostly Skyrim.</p>
    <br>
    <br>
    <p>(Site still a work in progress, but nearing completion!)</p>
</div>

<div id="bigfoot" class="burrito">
    &#169; Kirk Morris
</div>

</body>
</html>