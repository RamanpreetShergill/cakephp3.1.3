<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="employee index large-9 medium-8 columns content">
    <h3><?= __('Employee') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('ID') ?></th>
                <th><?= $this->Paginator->sort('name') ?></th>
                <th><?= $this->Paginator->sort('password') ?></th>
                <th><?= $this->Paginator->sort('position') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($employee as $employee): ?>
            <tr>
                <td><?= $this->Number->format($employee->ID) ?></td>
                <td><?= h($employee->name) ?></td>
                <td><?= h($employee->password) ?></td>
                <td><?= h($employee->position) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $employee->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $employee->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $employee->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->ID)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
        </ul>
        <p><?= $this->Paginator->counter() ?></p>
    </div>
</div>
