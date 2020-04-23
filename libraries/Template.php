<?php
/*
 * Template Class
 * Creates a template/view object
 */
class Template {
    //Path to template
    protected $template;
    //Variables passed in
    protected $vars = array();

    /*
     * Class Constructor
     */
    public function __construct($template){
        $this->template = $template;
    }

    /*
     * Get Template Variables
     */
    public function __get($key){
        // TODO: Implement __get() method.
        return $this->vars[$key];
    }

    /*
     * Set Template Variables
     */
    public function __set($key, $value){
        // TODO: Implement __set() method.
        $this->vars[$key] = $value;
    }

    /*
     * Convert Object to String
     */
    public function __toString(){
        // TODO: Implement __toString() method.
        extract($this->vars);
        chdir(dirname($this->template));
        ob_start();

        include basename($this->template);

        return ob_get_clean();
    }
}
