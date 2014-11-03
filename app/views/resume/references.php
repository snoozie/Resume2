<?php

/*
 * Refences - sub view for references section
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

print "<h3>References</h3>";

/*
 * Display References
 */
foreach($data as $d)
{
    print "<p>";
    print "$d->name</br>";
    print "$d->title</br>";
    print "$d->company</br>";
    print "$d->address</br>";
    
    if(strlen($d->phone) > 0)
    {
        print "t: $d->phone ";
    }
    if(strlen($d->mobile) > 0)
    {
        print "| m: $d->mobile ";
    }
    if(strlen($d->email) > 0)
    {
        print "| $d->email ";
    }
    if(strlen($d->website) > 0)
    {
        print "| $d->website ";
    }
    print "</p>";
}

?>

