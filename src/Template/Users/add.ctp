<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<?php if ($username) : ?>
    <nav class="col-md-3" id="actions-sidebar">
        <ul class="side-nav">
            <li class="heading"><?= __('Actions') ?></li>
            <li><?= $this->Html->link(__('List Users'), ['action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('List Products'), ['controller' => 'Products', 'action' => 'index']) ?></li>
            <li><?= $this->Html->link(__('New Product'), ['controller' => 'Products', 'action' => 'add']) ?></li>
        </ul>
    </nav>
<?php endif; ?>
<div class="users form col">
    <div class="row">
        <div class="col-md-6 offset-md-3 mt-5">
            <div class="card">
                <div class="card-body shadow">
                    <?= $this->Form->create() ?>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="https://loginfo.com.br/wp-content/uploads/2022/03/logo_loginfo-scaled.webp" width="250px" class="rounded-circle img-fluid shadow" alt="">
                                <h1 class="mt-4"><?= __('Novo Cadastro') ?></h1>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('name', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('email', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('password', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('password'); ?>
                        </div>
                        <div class="col-md-12 mt-3">
                            <center>
                                <?= $this->Form->button(__('Cadastrar'), ['class' => 'btn btn-success w-100']) ?>
                            </center>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
