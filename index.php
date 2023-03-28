<?php
$names = array('Brad', 'John', "Jane",'meow','Bark');

$count = 0;
while ($count < count($names)) {
    echo " <li>Hi, my names is  $names[$count] </li> ";
    $count++;
}

?>


<!-- <p>My name si <?php echo $names[0] ?></p>
<p>My name si <?php echo $names[1] ?></p>
<p>My name si <?php echo $names[2] ?></p>
<p>My name si <?php echo $names[3] ?></p> -->
<!-- <p>My name si <?php echo $names[2] ?></p>  -->