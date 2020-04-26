<?php require('core/init.php'); ?>


<?php
//Create Topic Object
$topic = new Topic();

//Get ID From URL
$topic_id = $_GET['id'];

//Get Template $ Assign Vars
$template = new Template('templates/topic.php');

//Assign Vars
$template->topic = $topic->getTopic($topic_id);
$template->replies = $topic->getReplies($topic_id);
$template->title = $topic->getTopic($topic_id)->title;

//Display template
echo $template;
?>
