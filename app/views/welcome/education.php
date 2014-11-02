<h3>Education</h3>
<?php
foreach($data as $d)
{
    echo "<p><b>".$d->title."</b> ".$d->start." - ".$d->end."</p>";
}
?>
