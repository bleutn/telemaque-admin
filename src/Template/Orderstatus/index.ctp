<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('New Orderstatus'), ['action' => 'add']) ?></li>
    </ul>
</div>
<div class="orderstatus index large-10 medium-9 columns">
    <table cellpadding="0" cellspacing="0">
    <thead>
        <tr>
            <th><?= $this->Paginator->sort('id') ?></th>
            <th><?= $this->Paginator->sort('label') ?></th>
            <th><?= $this->Paginator->sort('created') ?></th>
            <th><?= $this->Paginator->sort('modified') ?></th>
            <th class="actions"><?= __('Actions') ?></th>
        </tr>
    </thead>
    <tbody>
    <?php foreach ($orderstatus as $orderstatus): ?>
        <tr>
            <td><?= $this->Number->format($orderstatus->id) ?></td>
            <td><?= h($orderstatus->label) ?></td>
            <td><?= h($orderstatus->created) ?></td>
            <td><?= h($orderstatus->modified) ?></td>
            <td class="actions">
                <?= $this->Html->link(__('View'), ['action' => 'view', $orderstatus->id]) ?>
                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $orderstatus->id]) ?>
                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $orderstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderstatus->id)]) ?>
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
