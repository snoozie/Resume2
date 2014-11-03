<?php

/*
 * Education - sub view for education section
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

print "<h3>Education</h3>";

/*
 * Display education details
 */
foreach($data as $d)
{
    echo "<p><b>".$d->title."</b> ".date("d/m/Y", strtotime($d->start))." - ".date("d/m/Y", strtotime($d->end))."</p>";
}

?>
