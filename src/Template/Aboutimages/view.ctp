<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aboutimage $aboutimage
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Aboutimage'), ['action' => 'edit', $aboutimage->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Aboutimage'), ['action' => 'delete', $aboutimage->id], ['confirm' => __('Are you sure you want to delete # {0}?', $aboutimage->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Aboutimages'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aboutimage'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="aboutimages view large-9 medium-8 columns content">
    <h3><?= h($aboutimage->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($aboutimage->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($aboutimage->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($aboutimage->status) ?></td>
        </tr>
    </table>
</div>
