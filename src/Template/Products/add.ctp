<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Product $product
 */

use function PHPSTORM_META\type;

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
        <div class="card shadow">
            <div class="card-header">
                <h3><?= __('Add Product') ?></h3>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6"><?= $this->Form->control('name', ['label' => 'Produto', 'class' => 'form-control', 'required' => true]); ?></div>
                    <div class="col-md-3">
                        <label for=""><b>Selecione a medida</b></label>
                        <?= $this->Form->select('unity_of_measure', ['1' => 'Unidade', '2' => 'Litros', '3' => 'Quilograma'], ['class' => 'form-control', 'id' => 'unity_of_measure']); ?>
                    </div>
                    <div class="col-md-3">
                        <div class="row">
                            <div class="col-md-9">
                                <?= $this->Form->control('quantitaty', ['label' => 'Quantidade', 'id' => 'quantitaty', 'type' => 'text']); ?>
                            </div>
                            <div class="col text-left mt-4">
                                <small class="" id="prefixType"></small>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-2">
                        <?= $this->Form->control('price', ['label' => 'Preço', 'type' => 'text', 'id' => 'price']) ?>
                    </div>
                    <div class="col-md-2" id="product_perishable_div">
                        <label for="product_perishable"><b>Esse Produto</b></label>
                        <?= $this->Form->control('product_perishable', ['label' => 'É perecível', 'class' => 'mt-2', 'id' => 'product_perishable']) ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><b>Data de validade</b></label>
                        <?= $this->Form->control('expiration_date', ['required' => false, 'label' => '', 'id' => 'expiration_date', 'type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4">
                        <label for=""><b>Dt. Fabricação</b></label>
                        <?= $this->Form->control('date_of_manufacture', ['label' => '', 'required' => true, 'id' => 'date_of_manufacture', 'type' => 'date', 'class' => 'form-control']) ?>
                    </div>
                    <div class="col-md-4 offset-md-4">
                        <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-success w-100 mt-3']) ?>
                    </div>
                </div>
            </div>
        </div>
    </fieldset>
    <?= $this->Form->end() ?>
</div>


<?= $this->Html->script('https://code.jquery.com/jquery-3.7.0.slim.min.js') ?>
<?= $this->Html->script('https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/0.9.0/jquery.mask.min.js') ?>
<?= $this->Html->script('validateFormProducts') ?>
