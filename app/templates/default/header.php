<!DOCTYPE html>
<html lang="<?php echo LANGUAGE_CODE; ?>">
<head>
    <meta charset="utf-8">
    <title><?php echo $data['title'].' - '.SITETITLE; //SITETITLE defined in index.php?></title>
    <link href="<?php echo \helpers\url::get_template_path();?>css/style.css" rel="stylesheet">

    <!-- Add jQuery library -->
    <script type="text/javascript" src="<?php echo \helpers\url::get_template_path();?>js/jquery.js"></script>

    <!-- Add fancyBox main JS and CSS files -->
    <script type="text/javascript" src="<?php echo \helpers\url::get_template_path();?>js/jquery.fancybox.js"></script>
    <link rel="stylesheet" type="text/css" href="<?php echo \helpers\url::get_template_path();?>css/jquery.fancybox.css" media="screen" />

    <script type="text/javascript" src="<?php echo \helpers\url::get_template_path();?>js/javascript.js"></script>
</head>
<body>

<div class="wrapper">
