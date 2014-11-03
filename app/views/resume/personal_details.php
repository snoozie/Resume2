<?php

/*
 * Personal Details - sub view for personal details section
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

/*
 * Display personal details
 */
foreach($data as $d)
{
echo "<span style='font-size: 25pt;'>".$d->name."</span></br>";
echo "<span style='padding: 4px;'>".$d->address."</span></br>";
echo "<span>Phone: ".$d->phone."</span></br>";
echo "<span>Email: ".$d->email."</span></br>";
}

?>
