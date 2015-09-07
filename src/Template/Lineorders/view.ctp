<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Lineorder'), ['action' => 'edit', $lineorder->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Lineorder'), ['action' => 'delete', $lineorder->id], ['confirm' => __('Are you sure you want to delete # {0}?', $lineorder->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Lineorders'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Lineorder'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Orders'), ['controller' => 'Orders', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Order'), ['controller' => 'Orders', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="lineorders view large-10 medium-9 columns">
    <h2><?= h($lineorder->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Order') ?></h6>
            <p><?= $lineorder->has('order') ? $this->Html->link($lineorder->order->id, ['controller' => 'Orders', 'action' => 'view', $lineorder->order->id]) : '' ?></p>
            <h6 class="subheader"><?= __('Article') ?></h6>
            <p><?= $lineorder->has('article') ? $this->Html->link($lineorder->article->name, ['controller' => 'Articles', 'action' => 'view', $lineorder->article->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($lineorder->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($lineorder->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($lineorder->modified) ?></p>
        </div>
    </div>
</div>
