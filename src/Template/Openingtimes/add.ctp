<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Openingtime $openingtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Openingtimes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="openingtimes form large-9 medium-8 columns content">
    <?= $this->Form->create($openingtime) ?>
    <fieldset>
        <legend><?= __('Add Openingtime') ?></legend>
        <?php
            echo $this->Form->control('days');
            echo $this->Form->control('time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
