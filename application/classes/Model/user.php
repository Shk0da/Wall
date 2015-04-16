<?php defined('SYSPATH') or die('No direct script access.');

class Model_User extends Model_Auth_User{
    public function rules()	{
        return array(
            'username' => array(
                array('not_empty'),
                array('min_length', array(':value', 2)),
                array('max_length', array(':value', 32)),
                array(array($this, 'unique'), array('username', ':value')),
            ),
            'password' => array(
                array('not_empty'),
                array('min_length', array(':value', 2))
            ),
            'email' => array(
                array('not_empty'),
                array('email'),
                array(array($this, 'unique'), array('email', ':value')),
            ),
        );
    }

    protected $_callbacks = array
    (
        'username' => array('username_available'),
        'email' => array('email_available')
    );

    public function validate_create(&$array)
    {
        $array = Validate::factory($array)
            ->filter(TRUE, 'trim')
            ->rules('username', $this->_rules['username'])
            ->rules('password', $this->_rules['password'])
            ->rules('email', $this->_rules['email']);

        foreach ($this->_callbacks as $field => $callbacks)
        {
            foreach ($callbacks as $callback)
            {
                $array->callback($field, array($this, $callback));
            }
        }
        return $array;
    }

    public static function unique_username($username)
    {
        return ! DB::select(array(DB::expr('COUNT(username)'), 'total'))
            ->from('users')
            ->where('username', '=', $username)
            ->execute()
            ->get('total');
    }

    public function register($array)
    {
        // Create a new user record in the database
        $id = DB::insert(array_keys($array))
            ->values($array)
            ->execute();

        // Save the new user id to a cookie
        cookie::set('user', $id);

        return $id;
    }


}