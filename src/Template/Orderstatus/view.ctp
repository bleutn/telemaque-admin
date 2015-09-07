<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Orderstatus'), ['action' => 'edit', $orderstatus->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Orderstatus'), ['action' => 'delete', $orderstatus->id], ['confirm' => __('Are you sure you want to delete # {0}?', $orderstatus->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Orderstatus'), ['action' => 'add']) ?> </li>
    </ul>
</div>
<div class="orderstatus view large-10 medium-9 columns">
    <h2><?= h($orderstatus->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Label') ?></h6>
            <p><?= h($orderstatus->label) ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($orderstatus->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($orderstatus->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($orderstatus->modified) ?></p>
        </div>
    </div>
</div>
