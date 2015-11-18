<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Pizzainfo'), ['action' => 'edit', $pizzainfo->ID]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Pizzainfo'), ['action' => 'delete', $pizzainfo->ID], ['confirm' => __('Are you sure you want to delete # {0}?', $pizzainfo->ID)]) ?> </li>
        <li><?= $this->Html->link(__('List Pizzainfo'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Pizzainfo'), ['action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="pizzainfo view large-9 medium-8 columns content">
    <h3><?= h($pizzainfo->ID) ?></h3>
    <table class="vertical-table">
        <tr>
            <th><?= __('Size') ?></th>
            <td><?= h($pizzainfo->size) ?></td>
        </tr>
        <tr>
            <th><?= __('CrustType') ?></th>
            <td><?= h($pizzainfo->crustType) ?></td>
        </tr>
        <tr>
            <th><?= __('Toppings') ?></th>
            <td><?= h($pizzainfo->toppings) ?></td>
        </tr>
        <tr>
            <th><?= __('Address') ?></th>
            <td><?= h($pizzainfo->address) ?></td>
        </tr>
        <tr>
            <th><?= __('City') ?></th>
            <td><?= h($pizzainfo->city) ?></td>
        </tr>
        <tr>
            <th><?= __('Province') ?></th>
            <td><?= h($pizzainfo->province) ?></td>
        </tr>
        <tr>
            <th><?= __('PostalCode') ?></th>
            <td><?= h($pizzainfo->postalCode) ?></td>
        </tr>
        <tr>
            <th><?= __('Contact') ?></th>
            <td><?= h($pizzainfo->contact) ?></td>
        </tr>
        <tr>
            <th><?= __('Quantity') ?></th>
            <td><?= $this->Number->format($pizzainfo->quantity) ?></td>
        </tr>
        <tr>
            <th><?= __('ID') ?></th>
            <td><?= $this->Number->format($pizzainfo->ID) ?></td>
        </tr>
    </table>
</div>
