<?php defined('SYSPATH') or die('No direct script access.');

abstract class Controller_Common extends Controller_Template {

    public $template = 'template';

    public function before()
    {
        parent::before();
        View::set_global('title', 'Сайтсофт');
        $this->template->content = '';
        $this->template->styles = '';
        $this->template->scripts = '';
    }

}