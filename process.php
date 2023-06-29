<html>
<body>

<?php
$box = $_POST['ind'];
if (!empty($box)) {
    $techValue = $box;
    $N = count($techValue);
    for($i=0; $i < $N; $i++)
    {
      echo($techValue[$i] . " ");
    }
} else {
    echo "The 'tech' parameter is not set.";
    
}
?>

</body>
</html>
