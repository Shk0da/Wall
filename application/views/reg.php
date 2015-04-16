
    <div class="span4"></div>
    <div class="span8">
        <div class="messenger"> </div>
            <div class="control-group">
                <b>Регистрация</b>
            </div>
            <label for="username" class="error"><?= Arr::get($errors, 'username'); ?>
            <?php
            echo Form::open(URL::site('reg'), array('method' => 'post', 'class' => 'control-group'));
            echo '<div class="control-group">';
            echo Form::input('username', '', array('class' => 'input', 'placeholder' => 'Логин'));
            echo '</div>';
            echo '<div class="control-group">';
            echo Form::input('email', '', array('class' => 'email', 'placeholder' => 'Email'));
            echo '</div>';
            echo '<div class="control-group">';
            echo Form::password('password', '', array('class' => 'input', 'placeholder' => 'Пароль', 'id'=>'pas1'));
            echo '</div>';
            echo '<div class="control-group">';
            echo Form::password('password_confirm', '', array('class' => 'input', 'placeholder' => 'Повтоите пароль', 'id'=>'pas2'));
            echo '</div>';
            echo '<div class="control-group">';
            echo Form::submit('send', 'Отправить', array('class' => 'btn btn-primary'));
            echo '</div>';
            echo Form::close();
            ?>
    </div>