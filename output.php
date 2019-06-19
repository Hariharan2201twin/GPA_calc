<!DOCTYPE html>
<html>
<head>
	<title>c2</title>
</head>
<body>
<?php
$a=$_POST['s1'];
$b=$_POST['s2'];
$c=$_POST['s3'];
$d=$_POST['s4'];
$e=$_POST['s5'];
if($a=='S'){
	
	$g=4*10;
}
elseif($a=='A'){
	$g=4*9;
}

elseif($a=='B'){
	$g=4*8;
}

elseif($a=='C'){
	$g=4*7;
}

elseif($a=='D'){
	$g=4*6;
}
elseif($a=='E'){
	$g=4*5;
}








if($b=='S'){
	
	$g1=4*10;
}
elseif($b=='A'){
	$g1=4*9;
}

elseif($b=='B'){
	$g1=4*8;
}

elseif($b=='C'){
	$g1=4*7;
}

elseif($b=='D'){
	$g1=4*6;
}
elseif($b=='E'){
	$g1=4*5;
}



if($c=='S'){
	
	$g2=4*10;
}
elseif($c=='A'){
	$g2=4*9;
}

elseif($c=='B'){
	$g2=4*8;
}

elseif($c=='C'){
	$g2=4*7;
}

elseif($c=='D'){
	$g2=4*6;
}
elseif($c=='E'){
	$g2=4*5;
}



if($d=='S'){
	
	$g3=3*10;
}
elseif($d=='A'){
	$g3=3*9;
}

elseif($d=='B'){
	$g3=3*8;
}

elseif($d=='C'){
	$g3=3*7;
}

elseif($d=='D'){
	$g3=3*6;
}
elseif($d=='E'){
	$g3=3*5;
}




if($e=='S'){
	
	$g4=3*10;
}
elseif($e=='A'){
	$g4=3*9;
}

elseif($e=='B'){
	$g4=3*8;
}

elseif($e=='C'){
	$g4=3*7;
}

elseif($e=='D'){
	$g4=3*6;
}
elseif($e=='E'){
	$g4=3*5;
}

if($a=="U"&&$b=="U"&&$c=="U"&&$d="U"&&$e=="U")
{
	$c=0;
}
elseif($a=="U"&&$b=="U"&&$c=="U"&&$d=="U")
{
	$c=$g4/3;
	
}
elseif($b=="U"&&$c=="U"&&$d=="U"&&$e=="U")
{
   $c=$g/4;
}
elseif($a=="U"&&$c=="U"&&$d=="U"&&$e=="U")
{
	$c=$g1/4;
}
elseif($a=="U"&&$b=="U"&&$d=="U"&&$e=="U")
{
	$c=$g2/4;
}
elseif($a=="U"&&$b=="U"&&$c=="U"&&$e=="U")
{
	$c=$g3/3;

}
elseif($a=="U"&&$b=="U"&&$c=="U")
{
	$c=($g3+$g4)/6;
}
elseif($a=="U"&&$b=="U"&&$d=="U")
{
	$c=($g2+$g4)/7;
}
elseif($a=="U"&&$b=="U"&&$e=="U")
{
	$c=($g2+$g3)/7;
}
elseif($a=="U"&&$c=="U"&&$d=="U")
{
	$c=($g1+$g4)/7;
}
elseif($a=="U"&&$c=="U"&&$e=="U")
{
	$c=($g1+$g3)/7;
}
elseif($a=="U"&&$d=="U"&&$e=="U")
{
	$c=($g1+$g2)/8;
}
elseif($b=="U"&&$c=="U"&&$d=="U")
{
	$c=($g+$g4)/7;
}
elseif($b=="U"&&$d=="U"&&$e=="U")
{
	$c=($g+$g2)/8;
}
elseif($c=="U"&&$d=="U"&&$e=="U")
{
	$c=($g+$g1)/8;
}


elseif($a=="U"&&$b=="U")
{
	$c=($g2+$g3+$g4)/10;
}
elseif($a=="U"&&$c=="U")
{
	$c=($g1+$g3+$g4)/10;
}
elseif($a=="U"&&$d=="U")
{
	$c=($g1+$g2+$g4)/11;
}
elseif($a=="U"&&$e=="U")
{
	$c=($g1+$g2+$g3)/11;
}
elseif($b=="U"&&$c=="U")
{
	$c=($g+$g3+$g4)/10;
}
elseif($b=="U"&&$d=="U")
{
	$c=($g+$g2+$g4)/10;
}
elseif($b=="U"&&$e=="U")
{
	$c=($g+$g2+$g3)/11;
}
elseif($c=="U"&&$d=="U")
{
	$c=($g+$g1+$g4)/11;
}
elseif($c=="U"&&$e=="U")
{
	$c=($g+$g1+$g3)/11;
}
elseif($d=="U"&&$e=="U")
{
	$c=($g+$g1+$g2)/12;
}



elseif($a=="U")
{
	$c=($g1+$g2+$g3+$g4)/14;
}
elseif($b=="U")
{
	$c=($g+$g2+$g3+$g4)/14;
}
elseif($c=="U")
{
	$c=($g+$g1+$g3+$g4)/14;
}
elseif($d=="U")
{
	$c=($g+$g1+$g2+$g4)/15;
}
elseif($e=="U")
{
	$c=($g+$g1+$g2+$g3)/15;
}

else{
	$c=($g+$g1+$g2+$g3+$g4)/18;
}









echo "your cgpa is:".$c;



?>
</body>
</html>