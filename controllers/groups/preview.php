<?php Block::put('breadcrumb') ?>
    <ul>
        <li>
            <a href="<?= Backend::url('profixs/valiants/groups') ?>">
                <?= e(trans('profixs.valiants::lang.system.buttons.groups')) ?>
            </a>
        </li>
        <li><?= e($this->pageTitle) ?></li>
    </ul>
<?php Block::endPut() ?>

<?php if (!$this->fatalError): ?>

    <div class="form-preview">
        <?= $this->formRenderPreview() ?>
    </div>

<?php else: ?>

    <p class="flash-message static error"><?= e($this->fatalError) ?></p>
    <p>
        <a href="<?= Backend::url('profixs/valiants/groups') ?>" class="btn btn-default">
            <?= e(trans('profixs.valiants::lang.system.buttons.return_to_groups_list')) ?>
        </a>
    </p>

<?php endif ?>
