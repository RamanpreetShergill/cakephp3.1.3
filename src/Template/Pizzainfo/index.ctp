<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Pizzainfo'), ['action' => 'add']) ?></li>
    </ul>
</nav>
<div class="pizzainfo index large-9 medium-8 columns content">
    <h3><?= __('Pizzainfo') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th><?= $this->Paginator->sort('size') ?></th>
                <th><?= $this->Paginator->sort('crustType') ?></th>
                <th><?= $this->Paginator->sort('toppings') ?></th>
                <th><?= $this->Paginator->sort('quantity') ?></th>
                <th><?= $this->Paginator->sort('address') ?></th>
                <th><?= $this->Paginator->sort('city') ?></th>
                <th><?= $this->Paginator->sort('province') ?></th>
                <th class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($pizzainfo as $pizzainfo): ?>
            <tr>
                <td><?= h($pizzainfo->size) ?></td>
                <td><?= h($pizzainfo->crustType) ?></td>
                <td><?= h($pizzainfo->toppings) ?></td>
                <td><?= $this->Number->format($pizzainfo->quantity) ?></td>
                <td><?= h($pizzainfo->address) ?></td>
                <td><?= h($pizzainfo->city) ?></td>
                <td><?= h($pizzainfo->province) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $pizzainfo->ID]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $pizzainfo->ID]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $pizzainfo->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $pizzainfo->ID)]) ?>
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
