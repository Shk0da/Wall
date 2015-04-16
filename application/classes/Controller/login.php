<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Login extends Controller_Common {

    public function action_index()
    {

        $this->template->title = 'Авторизация';

        if($_POST)
        {
            if (Auth::instance()->login($_POST['username'], $_POST['password']))
            {
                $this->redirect(URL::site());
            }
            else
            {
                $this->template->title = 'Не удалось авторизоваться';
                $this->template->content = View::factory('login');
            }
        }

        $this->template->content = View::factory('login');

    }

    public function action_logout(){
        Auth::instance()->logout();
        $this->redirect(URL::site());
    }

}
