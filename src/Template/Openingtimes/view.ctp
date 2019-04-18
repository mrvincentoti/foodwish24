<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Openingtime $openingtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Openingtime'), ['action' => 'edit', $openingtime->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Openingtime'), ['action' => 'delete', $openingtime->id], ['confirm' => __('Are you sure you want to delete # {0}?', $openingtime->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Openingtimes'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Openingtime'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="openingtimes view large-9 medium-8 columns content">
    <h3><?= h($openingtime->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Days') ?></th>
            <td><?= h($openingtime->days) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Time') ?></th>
            <td><?= h($openingtime->time) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($openingtime->id) ?></td>
        </tr>
    </table>
</div>
