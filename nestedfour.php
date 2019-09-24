<?php

$a=3;
$b=5;
$c=7;
$d=11;




if($a>$b)
{
    if($a>$c)
    {
        if($a>$d)
        {
            echo "Maximum number is $a";
        }
        else
        {
            echo "Maximum number is $d";
        }
    }
    else
    {
        if($c>$d)
        {
            echo "Maximum number is $c";
        }
        else
        {
            echo "Maximum number is $d";
        }
    }
}
else
{
    if($b<$c)
    {
        echo "Maximum number is $b";
    }
    else
    {
        echo "Minimum number is $c";
    }
    if($b>$d)
    {
        echo "Maximum number is $b";
    }
    else
    {
        echo "Maximum number is $d";
    }
    if($c>$d)
    {
        echo "Maximum number is $c";
    }
    else
    {
        echo "Maximum number is $d";
    }
}





?>