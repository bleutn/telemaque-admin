<div class="actions columns large-2 medium-3">
    <h3><?= __('Actions') ?></h3>
    <ul class="side-nav">
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $orderstatus->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $orderstatus->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Orderstatus'), ['action' => 'index']) ?></li>
    </ul>
</div>
<div class="orderstatus form large-10 medium-9 columns">
    <?= $this->Form->create($orderstatus) ?>
    <fieldset>
        <legend><?= __('Edit Orderstatus') ?></legend>
        <?php
            echo $this->Form->input('label');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
