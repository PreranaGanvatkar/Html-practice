<?php
   /* Online PHP Compiler (Interpreter) and Editor */
//   echo "<p>Hello, World!</p>\n";
$test= array(1,2,3,4);
printf("Before adding array\n");
for($i=0;$i<count($test);$i++){
    printf($test[$i]);
    printf("\n");
}
$test[4]=5;
printf("\nafter adding array\n");
for($i=0;$i<count($test);$i++){
    printf($test[$i]);
    printf("\n");
}
unset($test[4]);
printf("\nAfter deleting\n");
// foreach($test as $i){
//     printf($i);
//     printf("\n");
// }
for($i=0;$i<count($test);$i++){
    printf($test[$i]);
    printf("\n");
}
if(isset($test[1]))
    printf("Yes element is present value is %d \n",$test[1]);
else
    printf("No\n");
?>