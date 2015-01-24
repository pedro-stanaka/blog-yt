<div class="columns medium-9">
    <?= $this->Form->create($post); ?>
    <h3>New post</h3>

    <?php
        echo $this->Form->input('title');
        echo $this->Form->input('body');
        echo $this->Form->button('Save');
        echo $this->Form->end();
    ?>


</div>