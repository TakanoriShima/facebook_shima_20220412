<?php if($errors !== null): ?>
<div class="row mt-2 text-center text-danger">
    <ul class="offset-sm-2 col-sm-8">
    <?php foreach($errors as $error): ?>
        <li id="errors"><?= $error ?></li>
    <?php endforeach; ?>
    </ul>
</div>
<?php endif; ?>