F=0,1,1,2,3,5,8,13,21,
<br/>
<?php
$max=250;
$f0=0;
$f1=1;
$f2=$f0+$f1;
echo "F=0,1,";




while($f2<=$max)
{
    echo $f2.",";
    $f0=$f1;
    $f1=$f2;
    $f2=$f0+$f1;    
}