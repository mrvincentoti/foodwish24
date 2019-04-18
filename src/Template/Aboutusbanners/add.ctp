<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Aboutusbanner $aboutusbanner
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Aboutusbanners'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="aboutusbanners form large-9 medium-8 columns content">
    <?= $this->Form->create($aboutusbanner) ?>
    <fieldset>
        <legend><?= __('Add Aboutusbanner') ?></legend>
        <?php
            echo $this->Form->control('image');
            echo $this->Form->control('status');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
