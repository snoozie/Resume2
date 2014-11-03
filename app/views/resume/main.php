<?php
namespace views;
use core\view as View;
/*
 * Main - The main page that calls the different views
 *
 * @author Susan Theron
 * @version 1
 * @date November 3, 2014
 */

$personal_details = $data['personal_details'];
$objectives = $data['objectives'];
$skills = $data['skills'];
$education = $data['education'];
$experience = $data['experience'];
$hobbies = $data['hobbies'];
$references = $data['references'];

?>
<div class="personal_details">
    <div style="float: left; width: 40%; padding: 20px;">
        <img src="<?php echo \helpers\url::get_template_path();?>/images/photo.jpg" style="height: 120px;"></img>
    </div>
    <div style="float: right; width: 50%; padding-top: 20px; text-align: right;">
        <?php View::render('resume/personal_details', $personal_details); ?>
    </div>
</div>

View::render('resume/objectives', $objectives);
View::render('resume/skills', $skills);
View::render('resume/education', $education);
View::render('resume/experience', $experience);
View::render('resume/hobbies', $hobbies);
View::render('resume/references', $references); 
