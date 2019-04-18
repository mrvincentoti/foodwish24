<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aboutusbanner $aboutusbanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aboutusbanner'), ['action' => 'edit', $aboutusbanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aboutusbanner'), ['action' => 'delete', $aboutusbanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutusbanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aboutusbanners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aboutusbanner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aboutusbanners view large-9 medium-8 columns content">
    <h3><?= h($aboutusbanner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($aboutusbanner->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aboutusbanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($aboutusbanner->status) ?></td>
        </tr>
    </table>
</div>
