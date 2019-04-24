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