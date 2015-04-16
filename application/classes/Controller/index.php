<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Index extends Controller_Common {

    public function action_index()
	{

        View::set_global('posts', Model::factory('Post')->get_all());
        $this->template->title = 'Сайтсофт';
        $this->template->content = View::factory('index');

	}

    public function action_newMessage()
    {

        if(Auth::instance()->logged_in())
        {
            $user = Auth::instance()->get_user();
            if (isset($_POST['message'])) Model::factory('Post')->new_message($user->username, $_POST['message']);
            header('Location: /');
            exit;
        }


    }

}
