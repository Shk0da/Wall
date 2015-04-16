<?php defined('SYSPATH') or die('No direct script access.');

class Model_Post extends Model
{
    protected $_tablePosts = 'posts';

    public function get_all()
    {
        $sql = "SELECT * FROM ". $this->_tablePosts." ORDER BY id DESC";

        return DB::query(Database::SELECT, $sql)
            ->execute();
    }

    public function new_message($user, $message)
    {
        return DB::insert('posts', array('user', 'message'))
            ->values(array($user, $message))
            ->execute();
    }
}