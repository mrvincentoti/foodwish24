<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billing $billing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $billing->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $billing->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Billings'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="billings form large-9 medium-8 columns content">
    <?= $this->Form->create($billing) ?>
    <fieldset>
        <legend><?= __('Edit Billing') ?></legend>
        <?php
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('country');
            echo $this->Form->control('fullname');
            echo $this->Form->control('address');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
