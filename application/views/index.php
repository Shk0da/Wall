    <div class="span2"></div>
    <div class="span8">
        <div class="messenger"> </div>
        <?php
            echo Form::open(URL::site('index/newMessage'), array('method' => 'post', 'class' => 'form-horizontal lgn'));
            echo '<div class="control-group">';
            echo Form::textarea('message', '', array('class' => 'span12', 'rows' => '2','placeholder' => 'Ваше сообщение'));
            echo '</div>';
            echo '<div class="control-group">';
            echo Form::submit('send', 'Отправить сообщение', array('class' => 'btn btn-primary'));
            echo '</div>';
            echo Form::close();
        ?>

        <?php foreach($posts as $post): ?>

            <div class="well">
                <h5><?php echo $post['user']; ?></h5>
                <p><?php echo $post['message']; ?></p>
            </div>

        <?php endforeach; ?>


    </div>