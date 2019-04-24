<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked list-group">
          <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit User'), ['action' => 'edit', $user->id],['class'=>'list-group-item']) ?> </li>

        <li><?= $this->Form->postLink(__('Delete User'), ['action' => 'delete', $user->id], ['class'=>'list-group-item'],['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index'],['class'=>'list-group-item']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'list-group-item']) ?> </li>
 
            </ul>
        </div>
        <div class="col-md-9">
        <h3><?= h($user->id) ?></h3>
    <table class="table">
        <tr>
            <th scope="row"><?= __('Usuario') ?></th>
            <td><?= h($user->usuario) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Password') ?></th>
            <td><?= h($user->password) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($user->id) ?></td>
        </tr>
    </table>
        </div>
    </div>
</div>
