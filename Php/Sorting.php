<!-- Descending order -->
<?php
$days=array("Mon"=>"1","fri"=>"5","wed"=>"3");
arsort($days);

foreach($days as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
<!-- Ascending order -->
<?php
$days=array("Mon"=>"1","fri"=>"5","wed"=>"3");
asort($days);

foreach($days as $x=>$x_value)
   {
   echo "Key=" . $x . ", Value=" . $x_value;
   echo "<br>";
   }
?>
<!-- Random choice  -->
<?php
$test= array(1,2,3,4);
for($i=0;$i<count($test);$i++){
    printf($test[$i]);
    printf("\n");
}
$val=array_rand($test,1);
printf("\n");
printf($val);
?>

<!-- TODO: array_keys and array_values, reverse , in_array,suffle,array_walk -->
