<?php require('core/init.php'); ?>


<?php
//Create Topics Object
$topic = new Topic();

//Create User Object
$user = new User();

//Get category From URL (Filter)
$category_id = isset($_GET['category']) ? $_GET['category'] : null;

//Get user From URL (Filter)
$user_id = isset($_GET['user']) ? $_GET['user'] : null;

//Get Template $ Assign Vars
$template = new Template('templates/topics.php');

//Assign Template Variables
if (isset($category_id)) {
        $template->topics = $topic->getByCategory($category_id);
        $template->title = 'Posts In "' . $topic->getCategory($category)->name . '"';
}

//Check For User Filter
if (isset($user_id)) {
    $template->topics = $topic->getByUser($user_id);
    //$template->title = 'Posts By "' . $user->getUser($user_id)->username . '"';
}

//Check For Category Filter
if (!isset($category_id) && !isset($user_id)) {
    $template->topics = $topic->getAllTopics();
}

//Assign Vars
//$template->heading = 'This is the template heading';
$template->totalTopics = $topic->getTotalTopics();
$template->totalCategories = $topic->getTotalCategories();
$template->totalUsers = $user->getTotalUsers();

//Display template
echo $template;
?>
