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

}

?>