<h3>Objectives</h3>
<?php
$count = 0;
$points = array();
foreach($data as $d)
{
    if($count == 0)
    {
        echo "<p>".$d->objective."</p>";
    }
    else
    {
        $points[] = $d->objective;
    }

    $count++;
}
print "<ul>";
foreach($points as $p)
{
    echo "<li>".$p."</li>";
}
print "</ul>";
//print_r ($data);
?>