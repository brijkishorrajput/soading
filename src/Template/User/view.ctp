<?php
/**
  * @var \App\View\AppView $this
  * @var \App\Model\Entity\User $user
  */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List User'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Task'), ['controller' => 'Task', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Task'), ['controller' => 'Task', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="user view large-9 medium-8 columns content">
    <h3><?= h($user->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Name') ?></th>
            <td><?= h($user->name) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Address') ?></th>
            <td><?= h($user->address) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Age') ?></th>
            <td><?= $this->Number->format($user->age) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Salary') ?></th>
            <td><?= $this->Number->format($user->salary) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Task') ?></h4>
        <?php if (!empty($user->task)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('User Id') ?></th>
                <th scope="col"><?= __('Name') ?></th>
                <th scope="col"><?= __('Description') ?></th>
                <th scope="col"><?= __('DateCreated') ?></th>
                <th scope="col"><?= __('DateUpdated') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($user->task as $task): ?>
            <tr>
                <td><?= h($task->id) ?></td>
                <td><?= h($task->user_id) ?></td>
                <td><?= h($task->name) ?></td>
                <td><?= h($task->description) ?></td>
                <td><?= h($task->dateCreated) ?></td>
                <td><?= h($task->dateUpdated) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Task', 'action' => 'view', $task->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Task', 'action' => 'edit', $task->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Task', 'action' => 'delete', $task->id], ['confirm' => __('Are you sure you want to delete # {0}?', $task->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
