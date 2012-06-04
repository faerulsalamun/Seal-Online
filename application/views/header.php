<!DOCTYPE html>
<html lang="en">
<head>
<link rel="stylesheet" href="<?php echo base_url() . 'css/'?>screen.css" />
<link rel="stylesheet" href="<?php echo base_url() . 'css/'?>print.css" />
<script type="text/javascript" src="<?php echo base_url();?>js/jquery-1.6.1.min.js"></script>
<script type="text/javascript" src="<?php echo base_url();?>js/jquery.min.js"></script>
<script type="text/javascript">
function startTime()
{
var today=new Date();
var h=today.getHours();
var m=today.getMinutes();
var s=today.getSeconds();
// add a zero in front of numbers<10
m=checkTime(m);
s=checkTime(s);
document.getElementById('txt').innerHTML=h+":"+m+":"+s;
t=setTimeout('startTime()',500);
}

function checkTime(i)
{
if (i<10)
  {
  i="0" + i;
  }
return i;
}
</script>
	<meta charset="utf-8">
	<title>Seal Online</title>

</head>
<body>
  <div class="container">

        <div id="header" class="span-24 last">
        <h1 id="book_haven"><img src="" alt="Seal Online" id="header-image" /></h1>
        </div>
        <hr />
		
        <div id="subheader" class="span-24 last">
          <h3 class="alt">Welcome To Seal online</h3>
        </div>
        <hr />
		<div class="menu">
						<ul	id="menu">
							<li>
								<a href="<?php echo base_url(); ?>home.html">Home</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/register.html">Register</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/login.html">Login</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/rank.html">Rank</a>
							</li>
							<li>
								<a href="<?php echo base_url(); ?>home/item_mall.html">Item Mall</a>
							</li>
							</ul>
		</div>
	<hr />