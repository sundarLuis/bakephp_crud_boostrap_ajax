<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked list-group">
            <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Users'), ['action' => 'index'],['class'=>'list-group-item']) ?></li>
            </ul>
        </div>
        <div class="col-md-10">
        <?= $this->Form->create($user) ?>
            <fieldset>
                <legend><?= __('Add User') ?></legend>
            <?php
                echo $this->Form->control('usuario');
                echo $this->Form->control('password');
            ?>
            </fieldset>
            <?= $this->Form->button(__('Submit'),['class'=>'btn btn-primary']) ?>
            <?= $this->Form->end() ?>
            </div>
        </div>
</div>




