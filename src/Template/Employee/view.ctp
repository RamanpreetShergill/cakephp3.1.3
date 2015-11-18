<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Employee'), ['action' => 'edit', $employee->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Employee'), ['action' => 'delete', $employee->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $employee->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Employee'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Employee'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="employee view large-9 medium-8 columns content">
    <h3><?= h($employee->name) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Name') ?></th>
            <td><?= h($employee->name) ?></td>
        </tr>
        <tr>
            <th><?= __('Password') ?></th>
            <td><?= h($employee->password) ?></td>
        </tr>
        <tr>
            <th><?= __('Position') ?></th>
            <td><?= h($employee->position) ?></td>
        </tr>
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($employee->ID) ?></td>
        </tr>
    </table>
</div>
