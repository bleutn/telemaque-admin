<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Html->link(__('Edit Userarticle'), ['action' => 'edit', $userarticle->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Userarticle'), ['action' => 'delete', $userarticle->id], ['confirm' => __('Are you sure you want to delete # {0}?', $userarticle->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Userarticles'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Userarticle'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Articles'), ['controller' => 'Articles', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Article'), ['controller' => 'Articles', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</div>
<div class="userarticles view large-10 medium-9 columns">
    <h2><?= h($userarticle->id) ?></h2>
    <div class="row">
        <div class="large-5 columns strings">
            <h6 class="subheader"><?= __('Article') ?></h6>
            <p><?= $userarticle->has('article') ? $this->Html->link($userarticle->article->name, ['controller' => 'Articles', 'action' => 'view', $userarticle->article->id]) : '' ?></p>
            <h6 class="subheader"><?= __('User') ?></h6>
            <p><?= $userarticle->has('user') ? $this->Html->link($userarticle->user->name, ['controller' => 'Users', 'action' => 'view', $userarticle->user->id]) : '' ?></p>
        </div>
        <div class="large-2 columns numbers end">
            <h6 class="subheader"><?= __('Id') ?></h6>
            <p><?= $this->Number->format($userarticle->id) ?></p>
        </div>
        <div class="large-2 columns dates end">
            <h6 class="subheader"><?= __('Created') ?></h6>
            <p><?= h($userarticle->created) ?></p>
            <h6 class="subheader"><?= __('Modified') ?></h6>
            <p><?= h($userarticle->modified) ?></p>
        </div>
    </div>
</div>
