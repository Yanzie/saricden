<!doctype html>
<html>
<head>
<title>saricDen by Kirk</title>
<link rel="stylesheet" type="text/css" href="src/css/main.css">
<link rel="shortcut icon" href="src/img/favicon.ico" type="image/x-icon">
<link rel="icon" href="src/img/favicon.ico" type="image/x-icon">
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
</div>

<div id="newsfeed" class="burrito">
    <h2>What's new?</h2>
    <ul>
        <li>2 days ago on twitter I said "Apples are super rad"</li>
        <li>3 days ago on twitter I said "I haven't made up my mind about apples"</li>
        <li>3 days ago I commited <i>e3fa99</i> "Added apple logo"</li>
        <li>On Jul. 29th I commited <i>3fabcc</i> "Made something cool"</li>
        <li>On Jul. 27th on twitter I said "#renametwittertotwatter"</li>
    </ul>
    <div class="centered">
        coming to you from:<br>
        <a href><img style="width:75px;height:75px;" alt="Twitter"></a>
        <a href><img style="width:75px;height:75px;" alt="Github"></a>
    </div>
</div>

<div class="burrito">
    <h2>What does saricDen mean?</h2>
    <p>Saric 'sare - ick' is my online name for pretty much every game I played (starting with Runescape way back when). Anyways when I made my first site, I thought of it as my cozy online den so I appended den and 'saricDen' was born.</p>
</div>

<div id="bigfoot" class="burrito">
    &#169; Kirk Morris
</div>

<?php
include_once 'src/php/sdUtils.class.php';
if (sdUtils::sendView())
{
    echo "&#10004;";
}
else
{
    echo "x";
}
?>

</body>
</html>