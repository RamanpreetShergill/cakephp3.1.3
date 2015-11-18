<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Pizzainfo'), ['action' => 'index']) ?></li>
    </ul>
</nav>
<div class="pizzainfo form large-9 medium-8 columns content">
    <?= $this->Form->create($pizzainfo) ?>
    <fieldset>
        <legend><?= __('Add Pizzainfo') ?></legend>
        <?php
            echo $this->Form->input('size');
            echo $this->Form->input('crustType');
            echo $this->Form->input('toppings');
            echo $this->Form->input('quantity');
            echo $this->Form->input('address');
            echo $this->Form->input('city');
            echo $this->Form->input('province');
            echo $this->Form->input('postalCode');
            echo $this->Form->input('contact');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
