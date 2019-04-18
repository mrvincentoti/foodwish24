<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallerybanner[]|\Cake\Collection\CollectionInterface $gallerybanners
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Gallerybanner'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gallerybanners index large-9 medium-8 columns content">
    <h3><?= __('Gallerybanners') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('image') ?></th>
                <th scope="col"><?= $this->Paginator->sort('status') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($gallerybanners as $gallerybanner): ?>
            <tr>
                <td><?= $this->Number->format($gallerybanner->id) ?></td>
                <td><?= h($gallerybanner->image) ?></td>
                <td><?= $this->Number->format($gallerybanner->status) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $gallerybanner->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $gallerybanner->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $gallerybanner->id], ['confirm' => __('Are you sure you want to delete # {0}?', $gallerybanner->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
