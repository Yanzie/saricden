<!doctype html>
<html>
<head>
<title>Kirk M. // saricDen</title>
<style>
html, body
{
margin: 0;
padding: 0;
background-color: #DDD;
color: #333;
font-family: sans-serif;
}
.center-block
{
width: 90%;
max-width: 1200px;
margin: 0 auto;
}
#header
{
margin: 30px auto;
letter-spacing: 3px;
font-size: 17.5px;
}
#header div:nth-child(1)
{
float: left;
}
#header div:nth-child(2)
{
float: right;
}
#portfolio div
{
width: 30%;
height: auto;
margin: 1.5%;
float: left;
background-color: #FFF;
}
#portfolio div:before
{
content: "";
display: block;
padding-top: 50%;
}
.rumie:before
{
background: url(img/logos/rumie.png) center no-repeat,
            url(img/bg/rumie.png) center;
}
.empower:before
{
background: url(img/logos/empower.png) center no-repeat,
            url(img/bg/empower.png) center;
}
.pmr:before
{
background: url(img/logos/pmr.png) center no-repeat,
            url(img/bg/pmr.png) right;
}
.rumie a
{
background-color: orange;
}
.empower a
{
background-color: green;
}
.pmr a
{
background-color: #00529B;
}
#portfolio div span
{
display: block;
width: 85%;
margin: 0;
padding: 7.5%;
text-align: justify;
font-size: 95%;
letter-spacing: 0.5px;
}
#portfolio div span a
{
display: block;
margin: 0 auto;
padding: 3%;
color: #FFF;
text-decoration: none;
text-align: center;
}
h2
{
margin: 0;
font-weight: normal;
}
fieldset
{
width: 70%;
margin: 0 auto;
margin-top: 25px;
border: 0;
border-top: solid 1px #999;
text-align: center;
}
legend
{
display: block;
margin: 0 auto;
padding: 0 10px;
font-size: 1.1em;
font-family: serif;
text-align: center;
}
#pic
{
float: left;
width: 200px;
height: 200px;
background: url(img/me.png) center no-repeat;
}
#bio
{
float: left;
width: 70%;
padding: 2.5%;
text-align: justify;
}
#contact
{
margin-bottom: 30px;
text-align: center;
}
a
{
color: #6699FF;
text-decoration: none;
border: 0;
}
a:hover
{
text-decoration: underline;
}
a img
{
width: 64px;
height: 64px;
margin: 0 10px;
border-radius: 10px;
}
</style>
</head>
<body>
    <div id="header" class="center-block">
        <div>Kirk M. // saricDen</div>
        <div>Artistic programmer</div>
        <br style="clear:both;">
    </div>
    <div id="portfolio" class="center-block">
    <fieldset><legend>Projects I'm Involved In</legend></fieldset>
        <div class="rumie">
            <span>
                The Rumie Initiative is an organization dedicated to providing education to developing nations utilizing affordable digital tablets.
                Their systems are being designed to work without constant internet access, caching information to keep it available.
                I am currently helping build custom front end features.
                <br><br>
                <b>Technologies I'm using to help:</b>
                <ul>
                    <li>CSS3</li>
                    <li>HTML5 SVG with SMIL Animation</li>
                    <li>jQuery Plugins</li>
                    <li>JSON Data & AJAX Requests</li>
                    <li>Google Drive API</li>
                </ul>
                <a href="http://www.rumie.org" target="_blank">Have a look &raquo;</a>
            </span>
        </div>
        <div class="empower">
            <span>
                EmPOWER Health Research is a large clinical trial medical database built to collect, process, and randomize data subject data.
                Serving over 100 studies, the system is used every day to create forms, enter and audit data, perform digital e-signatures, generate reports, and more. 
                I work with the back end PHP.
                <br><br>
                <b>Technologies I'm using to help:</b>
                <ul>
                    <li>Object Orientated PHP</li>
                    <li>Symfony MVC Framework</li>
                    <li>JavaScript / jQuery</li>
                    <li>MySQL & Propel ORM</li>
                    <li>Git Source Control</li>
                </ul>
                <a href="http://www.empowerhealthresearch.ca" target="_blank">Have a look &raquo;</a>
                </span>
        </div>
        <div class="pmr">
            <span>
                PMRobot is a centralized, agile project management tool developed for consultants and digital agencies.
                The mobile-ready application provides a variety of functionality including ticket-centred conversations, time tracking, file storage, and budget tracking.
                I help design and implement features.
                <br><br>
                <b>Technologies I'm using to help:</b>
                <ul>
                    <li>CSV Data Importing / Exporting</li>
                    <li>CSS3</li>
                    <li>Object Orientated PHP</li>
                    <li>Symfony MVC Framework</li>
                    <li>JavaScript / jQuery</li>
                </ul>
                <a href="https://www.pmrobot.com" target="_blank">Have a look &raquo;</a>
            </span>
        </div>
        <br style="clear:both;">
    </div>
    
    <div class="center-block">
    <fieldset><legend>A Bit about Me</legend></fieldset>
        <div id="pic"></div>
        <div id="bio">
            Hi! My name is Kirk and I'm a programmer with a passion for learning & creativity. I've always loved to build things, ever since I was the special little kid sitting in the corner putting Lego bricks in his mouth.
            I'm a big fan of sitcoms and cop comedies. When I'm not coding something you'll find me either skateboarding, playing guitar, reading a book, or enjoying some quality Zelda / Skyrim time.
            I've also been lucky enough to travel the world and meet tons of terrific people all over.
            <br><br>
            That about sums me up.
        </div>
        <br style="clear:both;">
    </div>
    
    <div id="contact" class="center-block">
        <fieldset><legend>Get in Touch!</legend></fieldset>
        <a href="mailto:kirk@saricden.com"><img src="img/email.png"></a>
        <a href="https://www.linkedin.com/pub/kirk-morris/81/965/9ab" target="_blank"><img src="img/linkedin.png"></a>.
    </div>
</body>
</html>