<!doctype html>
<!--[if lt IE 7]> <html class="ie6 oldie"> <![endif]-->
<!--[if IE 7]>    <html class="ie7 oldie"> <![endif]-->
<!--[if IE 8]>    <html class="ie8 oldie"> <![endif]-->
<!--[if gt IE 8]><!-->
<html class="">
<!--<![endif]-->
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<title>Agenda Icos Beauty Style Club</title>
<link href="boilerplate.css" rel="stylesheet" type="text/css">
<link href="app.css" rel="stylesheet" type="text/css">
<link href="byas.css" rel="stylesheet" type="text/css">
<link href="SpryAssets/SpryMenuBarVertical.css" rel="stylesheet" type="text/css">
<style type="text/css">
#apDiv1 {
	position: absolute;
	left: 111px;
	top: 235px;
	/*width: 60px;
	height: 149px;*/
	z-index: 1;
	background-image: url(images/byas_back.jpg);
}

#apDiv2 {
	position: absolute;
	left: 218px;
	top: 209px;
	/*width: 100%;
	height: 100%;*/
	padding: 25px;
	margin: 25px;
	display: inline;
	font-size: 10px;
	color: #454343;
	font-family: "Lucida Grande", "Lucida Sans Unicode", Geneva, sans-serif;
	box-shadow: 4px 5px 15px 2px #B2B2B2;
	-webkit-box-shadow: 4px 5px 15px 2px #B2B2B2;
	text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.3);
	filter: dropshadow(color=#000000, offx=2, offy=2);
	background-image: url(images/byas_back.jpg);
}
</style>
<!-- 
To learn more about the conditional comments around the html tags at the top of the file:
paulirish.com/2008/conditional-stylesheets-vs-css-hacks-answer-neither/

Do the following if you're using your customized build of modernizr (http://www.modernizr.com/):
* insert the link to your js here
* remove the link below to the html5shiv
* add the "no-js" class to the html tags at the top
* you can also remove the link to respond.min.js if you included the MQ Polyfill in your modernizr build 
-->
<!--[if lt IE 9]>
<script src="//html5shiv.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->
<script src="respond.min.js"></script>
<script src="SpryAssets/SpryMenuBar.js" type="text/javascript"></script>
</head>
<body>

<div id="apDiv1">
  <ul id="MenuBar1" class="MenuBarVertical">
   
    <li>
      <h3><a href="index.php">Home</a></h3>
    </li>
    <li><a href="">overzicht</a>
      <ul>
        <li><a href="day_view_club.php">Dag</a></li>
        <li><a href="week_view_club.php">Week</a></li>
        <li><a href="month_view_club.php">Maand</a></li>
    </ul>
    </li>
    <li><a href="add_event_club.php">Afspraaken</a></li>
    
    <li><a class="MenuBarItemSubmenu" href="#">User settings</a>
            <ul>
            <li><a href="user_register_club.php">user toevoegen</a></li>
            <li><a href="user_change_passwd_club.php">wachtwoord wijzigen</a></li>
            <li><a href="user_forgot_passwd_club.php">wachtwoord vergeten</a></li>
             <li><a href="user_update_club.php">user wijzigen</a></li>
          </ul>
         
          </li>
    <li><a href="user_login_club.php">Inloggen</a></li>
    <li><a href="user_logout_club.php">Uitloggen</a></li>
    <li><a href="user_help_club.php">Help</a></li>
  </ul>
</div>
<div id="apDiv2">
<? include_once("./includes/application_top_club.php"); ?>
<?
$page_title = 'Booking Calendar - Week View';
?>

<?
print $_REQUEST['array']
?>


<?
include("./includes/widgets/week_widget_club.php")

?>
</div>
<div class="gridContainer clearfix">
  <div class="BYAS_TXT" id="LayoutDiv1"><h1>Icos Beauty Style Club Agenda App<img src="images/leaf.png"></h1>
  </div>
</div>
<p>&nbsp;		</p>
<script type="text/javascript">
var MenuBar1 = new Spry.Widget.MenuBar("MenuBar1", {imgRight:"SpryAssets/SpryMenuBarRightHover.gif"});
</script>
</body>
</html>
