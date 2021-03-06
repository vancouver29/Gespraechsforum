<?php
/*
 * Get # of replies per topic
 */
function replyCount($topic_id){
    try {

        $db = new Database();
        $db->query('SELECT * FROM replies WHERE topic_id = :topic_id');
        $db->bind(':topic_id', $topic_id);

        //Assign Rows
        $rows = $db->resultSet();

        //Get Count
        return $db->rowCount();
    } catch (PDOException $e){
        echo "Error: " . $e->getMessage();
    }
}

/*
 * Get Categories
 */
function getCategories(){
    try {
        $db = new Database();
        $db->query('SELECT * FROM categories');

        //Assign Result Set
        $results = $db->resultSet();

        return $results;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

/*
 * User Posts
 */
function userPostCount($user_id){
    $db = new Database();
    $db->query('SELECT * FROM topics WHERE user_id = :user_id');
    $db->bind(':user_id', $user_id);
    //Assign Rows
    $rows = $db->resultSet();
    //Get Count
    $topic_count = $db->rowCount();

    $db->query('SELECT * FROM replies WHERE user_id = :user_id');
    $db->bind('user_id', $user_id);
    //Assign Rows
    $rows = $db->resultSet();
    //Get Count
    $reply_count = $db->rowCount();

    return $topic_count + $reply_count;

}

/*
 * Get Total Topics
 */
function getTotalTopicsHelper(){
    try {
        $db = new Database();

        $db->query('SELECT * FROM topics');

        $rows = $db->resultSet();

        //Get Count
        $topics_count = $db->rowCount();

        return $topics_count;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}

/*
 * Get Total Topics of Category
 */
function getTopicsOfCategoryHelper($category_id){
    try {
        $db = new Database();

        $db->query('SELECT * FROM topics WHERE category_id = :category_id');
        //Bind Value
        $db->bind(':category_id', $category_id);
        //Get Rows
        $rows = $db->resultSet();

        //Get Count
        $topicsCategory_count = $db->rowCount();

        return $topicsCategory_count;
    } catch (PDOException $e) {
        echo "Error: " . $e->getMessage();
    }
}