<?php
class Topic {
    //Init DB Variable
    private $db;

    /*
     * Constructor
     */
    public function __construct(){
        $this->db = new Database();
    }

    /*
     * Get All Topics
     */
    public function getAllTopics(){
        $this->db->query("SELECT topics.*, users.username, users.avatar, categories.name 
                        FROM topics
                        INNER JOIN users 
                        ON topics.user_id = users.id
                        INNER JOIN categories 
                        ON topics.category_id = categories.id
                        ORDER BY create_date DESC 
                        ");
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    /*
     * Get Total # of Topics
     */
    public function getTotalTopics(){
        $this->db->query('SELECT * FROM topics');
        $row = $this->db->resultSet();
        return $this->db->rowCount();
    }

    /*
     * Get Total # of Categories
     */
    public function getTotalCategories(){
        $this->db->query('SELECT * FROM categories');
        $row = $this->db->resultSet();
        return $this->db->rowCount();
    }

    /*
     * Get Total # of Replies
     */
    public function getTotalReplies($topic_id){
        $this->db->query('SELECT * FROM replies WHERE topic_id = '.$topic_id);
        $row = $this->db->resultSet();
        return $this->db->rowCount();
    }

    /*
     * Get Topics By Category_ID
     */
    public function getByCategory($category_id){
        $this->db->query("SELECT topics.*,categories.*, users.username, users.avatar
                        FROM topics
                        INNER JOIN users 
                        ON topics.user_id = users.id
                        INNER JOIN categories 
                        ON topics.category_id = categories.id
                        WHERE topics.category_id = :category_id 
                        ");

        // Bind value by category_id
        $this->db->bind(':category_id', $category_id);

        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    /*
     * Get Category By ID
     */
    public function getCategory($category_id){
        $this->db->query('SELECT * FROM categories WHERE id = :category_id');

        //Bind Value
        $this->db->bind(':category_id', $category_id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

    /*
     * Get Topics By Username
     */
    public function getByUser($user_id){
        $this->db->query("SELECT topics.*, categories.*, users.username, users.avatar
                                FROM topics 
                                INNER JOIN categories
                                ON topics.category_id = categories.id
                                INNER JOIN users
                                ON topics.user_id = users.id
                                WHERE topics.user_id = :user_id");

        //Bind Value
        $this->db->bind(':user_id', $user_id);
        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }

    /*
     * Get Topic By ID
     */
    public function getTopic($id){
        $this->db->query("SELECT topics.*, users.username, users.name, users.avatar FROM topics
                           INNER JOIN users
                           ON topics.user_id = users.id
                           WHERE topics.id = :id");
        //Bind Value
        $this->db->bind(':id', $id);

        //Assign Row
        $row = $this->db->single();

        return $row;
    }

    /*
     * Get Topic Replies
     */
    public function getReplies($topic_id){
        $this->db->query("SELECT replies.*, users.* FROM replies
                                INNER JOIN users
                                ON replies.user_id = users.id
                                WHERE replies.topic_id = :topic_id");
        //Bind Value
        $this->db->bind(':topic_id', $topic_id);

        //Assign Result Set
        $results = $this->db->resultSet();

        return $results;
    }
}

?>