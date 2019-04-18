<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Openingtime $openingtime
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $openingtime->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $openingtime->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Openingtimes'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="openingtimes form large-9 medium-8 columns content">
    <?= $this->Form->create($openingtime) ?>
    <fieldset>
        <legend><?= __('Edit Openingtime') ?></legend>
        <?php
            echo $this->Form->control('days');
            echo $this->Form->control('time');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
