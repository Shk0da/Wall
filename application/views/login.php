
    <div class="span4"></div>
    <div class="span3">

        <div class="control-group messenger">
            <strong> <script>
                $(".messenger").html(document.title);
                $(".messenger").fadeIn("slow");
            </script> </strong>
        </div>

        <?php
            echo Form::open(URL::site('login'), array('method' => 'post', 'class' => 'control-group login'));
            echo Form::input('username', '', array('class' => 'input', 'placeholder'=>'Логин'));
            echo Form::password('password', '', array('class' => 'input', 'placeholder'=>'Пароль'));
            echo '<div class="control-group">';
            echo Form::submit('send', 'Вход', array('class' => 'btn btn-primary'));
            echo '</div>';
            echo Form::close();
        ?>

    </div>