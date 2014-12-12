<h1>Posts</h1>

<div class="posts index">
    <table>
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('id') ?></th>
                <th><?= $this->Paginator->sort('title') ?></th>
                <th><?= $this->Paginator->sort('created') ?></th>
                <th><?= $this->Paginator->sort('modified') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($posts as $post): ?>
                <tr>
                    <td><?= $post->id ?></td>
                    <td><?= $this->Html->link($post->title, ['controller'=>'Posts', 'action'=> 'view', $post->id]) ?></td>
                    <td><?= $post->created ?></td>
                    <td><?= $post->modified ?></td>
                </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
</div>

<div class="paginator">
    <ul class="pagination">
        <?php
            echo $this->Paginator->prev('< Previous');
            echo $this->Paginator->numbers();
            echo $this->Paginator->next('Next >');
        ?>
    </ul>

</div>