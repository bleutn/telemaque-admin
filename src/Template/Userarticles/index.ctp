<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Userarticle'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="userarticles index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('article_id') ?></th>
            <th><?= $this->Paginator->sort('user_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($userarticles as $userarticle): ?>
        <tr>
            <td><?= $this->Number->format($userarticle->id) ?></td>
            <td>
                <?= $userarticle->has('article') ? $this->Html->link($userarticle->article->name, ['controller' => 'Articles', 'action' => 'view', $userarticle->article->id]) : '' ?>
            </td>
            <td>
                <?= $userarticle->has('user') ? $this->Html->link($userarticle->user->name, ['controller' => 'Users', 'action' => 'view', $userarticle->user->id]) : '' ?>
            </td>
            <td><?= h($userarticle->created) ?></td>
            <td><?= h($userarticle->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $userarticle->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $userarticle->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $userarticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userarticle->id)]) ?>
            </td>
        </tr>

    <?php endforeach; ?>
    </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
