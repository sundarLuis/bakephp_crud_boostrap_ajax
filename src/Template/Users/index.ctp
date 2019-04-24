<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User[]|\Cake\Collection\CollectionInterface $users
 */
?>
<div class="container">
    <div class="row">
        <div class="col-md-2">
            <ul class="nav nav-pills nav-stacked list-group">
                <li class="active"><?= __('Actions') ?></li>
                <li><?= $this->Html->link(__('New User'), ['action' => 'add'],['class'=>'list-group-item']) ?></li>

            </ul>
        </div>
        <div class="col-md-10">

       
            <h3><?= __('Users') ?></h3>
            <?= $this->form->control('search',['class'=>'form-control']);?>
        <br>
            <div class="table-content">
                <table cellpadding="0" cellspacing="0" class="table table-bordered table-hover table-sm">
                    <thead>
                        <tr>
                            <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('usuario') ?></th>
                            <th scope="col"><?= $this->Paginator->sort('password') ?></th>
                            <th scope="col" class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($users as $user): ?>
                        <tr>
                            <td><?= $this->Number->format($user->id) ?></td>
                            <td><?= h($user->usuario) ?></td>
                            <td><?= h($user->password) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $user->id],['class'=>'btn btn-info btn-sm']) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $user->id],['class'=>'btn btn-warning btn-sm']) ?>
                                <?= $this->Form->postLink(__('Delete'),
                                ['action' => 'delete', $user->id], 
                                ['class'=>'btn btn-danger btn-sm'],

                                ['confirm' => __('Are you sure you want to delete # {0}?', $user->id)]
                                ) ?> 
        
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
                
                    </p>
                </div>
            </div>    
        </div>
    </div>
</div>

<!-- <div class="container">
    <div class="row">
        <div class="col-md-3">
          <ul class="nav nav-pills nav-stacked">

            </ul>
        </div>
        <div class="col-md-9">
            
        </div>
    </div>
</div> -->
