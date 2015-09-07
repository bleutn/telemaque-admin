<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Lineorder'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?></li>
    </ul>
</div>
<div class="lineorders index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('order_id') ?></th>
            <th><?= $this->Paginator->sort('article_id') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($lineorders as $lineorder): ?>
        <tr>
            <td><?= $this->Number->format($lineorder->id) ?></td>
            <td>
                <?= $lineorder->has('order') ? $this->Html->link($lineorder->order->id, ['controller' => 'Orders', 'action' => 'view', $lineorder->order->id]) : '' ?>
            </td>
            <td>
                <?= $lineorder->has('article') ? $this->Html->link($lineorder->article->name, ['controller' => 'Articles', 'action' => 'view', $lineorder->article->id]) : '' ?>
            </td>
            <td><?= h($lineorder->created) ?></td>
            <td><?= h($lineorder->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $lineorder->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $lineorder->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $lineorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lineorder->id)]) ?>
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
