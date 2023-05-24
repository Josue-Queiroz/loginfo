<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Products'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Sales'), ['controller' => 'Sales', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Sale'), ['controller' => 'Sales', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="products form large-9 medium-8 columns content">
    <?= $this->Form->create($product) ?>
    <fieldset>
        <legend><?= __('Add Product') ?></legend>
        <div class="row">
            <div class="col-md-6"><?= $this->Form->control('name', ['label' => 'Produto', 'class' => 'form-control']); ?></div>
            <div class="col-md-3">
                <label for=""><b>Selecione a medida</b></label>
                <?= $this->Form->select('unity_of_measure', ['1' => 'Unidade', 'liters' => 'Litros', 'Kilogram' => 'Quilograma'], ['class' => 'form-control']); ?>
            </div>
            <div class="col-md-3"><?= $this->Form->control('quantitaty', ['label' => 'Quantidade']); ?></div>
        </div>
        <?php
        echo $this->Form->control('price', ['label' => 'Preço']);
        echo $this->Form->control('product_perishable', ['label' => 'É perecível']);
        echo $this->Form->control('expiration_date', ['empty' => true]);
        echo $this->Form->control('date_of_manufacture', ['label' => 'Dt. Fabricação', 'empty' => true]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
