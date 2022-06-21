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
?>