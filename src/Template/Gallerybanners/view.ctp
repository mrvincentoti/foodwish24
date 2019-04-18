<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallerybanner $gallerybanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Gallerybanner'), ['action' => 'edit', $gallerybanner->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Gallerybanner'), ['action' => 'delete', $gallerybanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallerybanner->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Gallerybanners'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gallerybanner'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="gallerybanners view large-9 medium-8 columns content">
    <h3><?= h($gallerybanner->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Image') ?></th>
            <td><?= h($gallerybanner->image) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($gallerybanner->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($gallerybanner->status) ?></td>
        </tr>
    </table>
</div>
