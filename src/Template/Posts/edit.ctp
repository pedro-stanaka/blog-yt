<div class="columns medium-8 content">
    <?= $this->Form->create($post); ?>
    <fieldset>
        <legend>Create a new Post</legend>

        <?php
            echo $this->Form->input('id', ['type'=>'hidden']);
            echo $this->Form->input('title');
            echo $this->Form->input('body');
        ?>
    </fieldset>

    <?= $this->Form->button(__('Edit Post')); ?>
    <?= $this->Form->end(); ?>
</div>