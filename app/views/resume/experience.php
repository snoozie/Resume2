<?php

/*
 * Experience - sub view for experience section
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

print "<h3>Experience</h3>";

/*
 * Display experience details
 */
foreach($data as $d)
{
    echo "<p><b>".$d->title."</b> ".date("d/m/Y", strtotime($d->start))." - ".date("d/m/Y", strtotime($d->end))."</p>";
    $responsibility = json_decode($d->responsibilities);
    $achievements = json_decode($d->achievements);
    $technology = json_decode($d->technologies);
   
    echo "<p>Responsibilities</p>";
    
    /*
     * Display responsibilities list
     */
    echo "<ul>";
    
    foreach($responsibility->responsibilities as $r)
    {
        echo "<li>";
        echo $r;
        echo "</li>";
    }
    
    echo "</ul>";
    
    if(count($achievements->achievements) > 0)
    {
        echo "<p>Achievements</p>";
    
        /*
         * Display achievements list
         */
        echo "<ul>";

        foreach($achievements->achievements as $a)
        {
            echo "<li>";
            echo $a;
            echo "</li>";
        }

        print "</ul>";
    }
    
    
    print "<p>Technologies used:</p>";
    
    /*
     * Display Technologies list
     */
    print "<ul>";
    
    foreach($technology as $tech)
    {
        echo "<li>";
        $technology_string = "";
        foreach($tech as $t)
        {
            //echo $t.",";
            $technology_string .= $t.", ";
        }
        $character_mask = ", ";
        $technology_string = trim($technology_string, $character_mask);
        print $technology_string;
        echo "</li>";
    }
    
    echo "</ul>";
}
?>

