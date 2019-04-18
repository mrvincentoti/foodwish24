<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Billing $billing
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Billing'), ['action' => 'edit', $billing->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Billing'), ['action' => 'delete', $billing->id], ['confirm' => __('Are you sure you want to delete # {0}?', $billing->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Billings'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Billing'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="billings view large-9 medium-8 columns content">
    <h3><?= h($billing->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $billing->has('user') ? $this->Html->link($billing->user->id, ['controller' => 'Users', 'action' => 'view', $billing->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Country') ?></th>
            <td><?= h($billing->country) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fullname') ?></th>
            <td><?= h($billing->fullname) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($billing->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($billing->status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($billing->address)); ?>
    </div>
</div>
