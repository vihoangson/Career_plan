<?php
if (!defined('BASEPATH')) exit('No direct script access allowed');
require_once(APPPATH.'libraries/smarty/Smarty.class.php');

/**
 * MySmarty Class
 *
 * initializes basic smarty settings and act as smarty object
 *
 * @final   Mysmarty
 * @category    Libraries
 * @author  Md. Ali Ahsan Rana
 * @link    http://codesamplez.com/
 */
class Mysmarty extends Smarty
{

    /**
     * constructor
     */
    function __construct()
    {
        parent::__construct();
        $this->template_dir = APPPATH."modules/news/views/";
        $this->config_dir = APPPATH."conf/";
        $this->compile_dir = APPPATH."cache/";
        $this->caching = 0;
    }
}
 ?>