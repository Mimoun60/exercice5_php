<?php
$test1="J'aime";
$test2="les fraises";
function Fusion($test1,$test2)
{
  return $test1 . $test2;
}
echo Fusion("J'aime","les fraises");
echo Fusion($test1,$test2);
?>
