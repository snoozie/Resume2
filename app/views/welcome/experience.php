<h3>Experience</h3>
<?php
foreach($data as $d)
{
    echo "<p><b>".$d->title."</b> ".$d->start." - ".$d->end."</p>";
    $responsibility = json_decode($d->responsibilities);
    
    echo "<p>Responsibilities</p>";
    echo "<ul>";
    
    foreach($responsibility->responsibilities as $r)
    {
        echo "<li>";
        echo $r;
        echo "</li>";
    }
    
    echo "</ul>";
}
?>

