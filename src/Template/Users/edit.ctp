<?php $this->layout = null ?>
<h4><?= __('Edit User'); ?></h4>
<hr/>
<div>
    <?= $this->Form->create($user) ?>
    <?= $this->Form->input('name'); ?>
    <?= $this->Form->input('email'); ?>
    <?= $this->Form->input('password'); ?>
    <?= $this->Form->input('role'); ?>
    <?= $this->Form->input('is_enable'); ?>
    <hr/>
    <div class="text-center">
        <?= $this->Form->button(__('Save'), ['class' => 'btn btn-success']) ?>  
    </div>
    <?= $this->Form->end() ?>
</div>