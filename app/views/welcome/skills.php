<h3>Skills</h3>
<?php
print "<table>";
foreach($data as $d)
{
    print "<tr>";
echo "<td>".$d->type."</td>";
echo "<td>".$d->skill."</td>";
    print "<tr>";
}
print "</table>";
//print_r ($data);
?>