<?php Block::put('breadcrumb') ?>
    <ul>
        <li>
            <a href="<?= Backend::url('profixs/valiants/valiants') ?>">
                <?= e(trans('profixs.valiants::lang.system.buttons.valiants')) ?>
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
        <a href="<?= Backend::url('profixs/valiants/valiants') ?>" class="btn btn-default">
            <?= e(trans('profixs.valiants::lang.system.buttons.return_to_valiants_list')) ?>
        </a>
    </p>

<?php endif ?>
