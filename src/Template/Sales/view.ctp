<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Sale $sale
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Sale'), ['action' => 'edit', $sale->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Sale'), ['action' => 'delete', $sale->id], ['confirm' => __('Are you sure you want to delete # {0}?', $sale->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Sales'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Sale'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="sales view large-9 medium-8 columns content">
    <h3><?= h($sale->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Product') ?></th>
            <td><?= $sale->has('product') ? $this->Html->link($sale->product->name, ['controller' => 'Products', 'action' => 'view', $sale->product->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $sale->has('user') ? $this->Html->link($sale->user->name, ['controller' => 'Users', 'action' => 'view', $sale->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($sale->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Buy Price') ?></th>
            <td><?= $this->Number->format($sale->buy_price) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Unity Of Measure') ?></th>
            <td><?= $this->Number->format($sale->unity_of_measure) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Quantitaty') ?></th>
            <td><?= $this->Number->format($sale->quantitaty) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created At') ?></th>
            <td><?= h($sale->created_at) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Updated At') ?></th>
            <td><?= h($sale->updated_at) ?></td>
        </tr>
    </table>
</div>
