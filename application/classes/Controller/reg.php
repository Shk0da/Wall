<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Reg extends Controller_Common {

    public function action_index()
    {
        $errors ='';
        if ($post = $this->request->post())
        {
            // не успел добавить валидацию на уникальность при регистрации
            try {
                    $user = ORM::factory('user')->create_user($_POST, array('username','email','password'));
                    $user->add('roles',ORM::factory('role',array('name'=>'login')));
                    $this->redirect(URL::site('reg/success'));
            } catch (ORM_Validtion_Exception $e) {
                $errors = $e->errors('user');
            }

        }
        View::set_global('errors', $errors);
        $this->template->title = 'Регистрация';
        $this->template->content = View::factory('reg');

    }

    public function action_success()
    {

        $this->template->title = 'Вы зарегистрировались!';
        $this->template->content = View::factory('regsuccess');

    }

}
