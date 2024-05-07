<div class="container">
<div class="column-responsive column-80">
<div class="users form content">
    <h1 class="display-4">LOGIN</h1>
    <?= $this->Form->create() ?>
    <div class="form-group">
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'Email']) ?>
    </div>
    <div class="form-group">
        <?= $this->Form->control('password', ['class' => 'form-control', 'placeholder' => 'Contraseña']) ?>
    </div>
    <?= $this->Form->button('Login', ['class' => 'btn btn-primary']) ?>
    <?= $this->Form->end() ?>
</div>
</div>
</div>

