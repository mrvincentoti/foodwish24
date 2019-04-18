<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Contact $contact
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Contact'), ['action' => 'edit', $contact->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Contact'), ['action' => 'delete', $contact->id], ['confirm' => __('Are you sure you want to delete # {0}?', $contact->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Contacts'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Contact'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="contacts view large-9 medium-8 columns content">
    <h3><?= h($contact->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Phone1') ?></th>
            <td><?= h($contact->phone1) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Phone2') ?></th>
            <td><?= h($contact->phone2) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Email') ?></th>
            <td><?= h($contact->email) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tw') ?></th>
            <td><?= h($contact->tw) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Fb') ?></th>
            <td><?= h($contact->fb) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gg') ?></th>
            <td><?= h($contact->gg) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Inst') ?></th>
            <td><?= h($contact->inst) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Rs') ?></th>
            <td><?= h($contact->rs) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($contact->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Status') ?></th>
            <td><?= $this->Number->format($contact->status) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Address') ?></h4>
        <?= $this->Text->autoParagraph(h($contact->address)); ?>
    </div>
</div>
