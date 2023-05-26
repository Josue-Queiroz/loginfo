<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>

<?= $this->Html->css('login.css') ?>
<div class="users form columns content">
    <div class="row">
        <div class="col-md-6 offset-md-3">
            <div class="card">
                <div class="card-body shadow">
                    <?= $this->Form->create() ?>
                    <div class="row">
                        <div class="col-md-12">
                            <center>
                                <img src="https://loginfo.com.br/wp-content/uploads/2022/03/logo_loginfo-scaled.webp" width="250px" class="rounded-circle img-fluid shadow" alt="">
                                <h1 class="mt-4"><?= __('Login') ?></h1>
                            </center>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('email', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-md-12">
                            <?= $this->Form->control('password', ['class' => 'form-control']); ?>
                        </div>
                        <div class="col-md-6 mt-3">
                            <?= $this->Html->link(__('Novo usuario'), ['action' => 'add']) ?>
                        </div>
                        <div class="col-md-6 mt-3">
                            <center>
                                <?= $this->Form->button(__('Logar'), ['class' => 'btn btn-success w-100']) ?>
                            </center>
                        </div>
                    </div>
                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
