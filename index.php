<!DOCTYPE html>
<html>
<body>

<?php
$file = fopen("A SHIFT VERSATILITY.csv","r");
print_r(fgetcsv($file));
fclose($file);
?>

</body>
</html>