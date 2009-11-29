<html>
<head>
<title>Punch in the throat</title>
<meta name="punch in the throat" />
<meta description="Punch someone in the throat today. You won't regret it, and you won't go to jail!" />
<meta tags="Punch throat someone pain boss coworkers people stress relief hemmerhoids collect-callers" />
</head>
<body>
<?php 
$name = $_GET['name'];
if ($name)
{
	if (preg_match("/me/", $name))
	{
		?>You punched yourself in the throat, numb-nuts!
		<?
	} else {
	?><p><? echo $_GET['name']?> needs to be punched in the throat.</p>

<p>Did you think that was awesome?  Well, you're a dick.  Punch someone else in the throat.</p>
<? } 
}
else {
?><p>YOU need to be punched in the throat.  Provide a name, asshole!</p>
<? }
?>
<form action="" method="get">
<input type="text" name="name"></input>
<input type="submit" value="Punch this person in the throat"></input>
</form>
</body>
</html>
