<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gallerybanner $gallerybanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gallerybanners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="gallerybanners form large-9 medium-8 columns content">
    <?= $this->Form->create($gallerybanner) ?>
    <fieldset>
        <legend><?= __('Add Gallerybanner') ?></legend>
        <?php
            echo $this->Form->control('image');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
