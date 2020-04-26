<?php require('core/init.php'); ?>


<?php
//Create Topics Object
$topic = new Topic();

//Get category From URL (Filter)
$category = isset($_GET['category']) ? $_GET['category'] : null;

//Get Template $ Assign Vars
$template = new Template('templates/topics.php');

//Assign Template Variables
if (isset($category)) {
        $template->topics = $topic->getByCategory($category);
        $template->title = 'Posts In "' . $topic->getCategory($category)->name . '"';
}

if (!isset($category)) {
    $template->topics = $topic->getAllTopics();
}

//Assign Vars
//$template->heading = 'This is the template heading';
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();

//Display template
echo $template;
?>
