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

    <?php Block::put('form-contents') ?>

        <div class="layout-row min-size">
            <?= $this->formRenderOutsideFields() ?>
        </div>
        <div class="layout-row">
            <?= $this->formRenderPrimaryTabs() ?>
        </div>

        <div class="form-buttons">
            <div class="loading-indicator-container">
                <button
                    type="submit"
                    data-request="onSave"
                    data-request-data="redirect:0"
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('profixs.valiants::lang.system.labels.saving_valiant')) ?>"
                    class="btn btn-primary">
                    <?= e(trans('profixs.valiants::lang.system.buttons.save')) ?>
                </button>
                <button
                    type="button"
                    data-request="onSave"
                    data-request-data="close:1"
                    data-hotkey="ctrl+enter, cmd+enter"
                    data-load-indicator="<?= e(trans('profixs.valiants::lang.system.labels.saving_valiant')) ?>"
                    class="btn btn-default">
                    <?= e(trans('profixs.valiants::lang.system.buttons.save_and_close')) ?>
                </button>
                <button
                    type="button"
                    class="oc-icon-trash-o btn-icon danger pull-right"
                    data-request="onDelete"
                    data-load-indicator="<?= e(trans('profixs.valiants::lang.system.labels.deleting_valiant')) ?>"
                    data-request-confirm="<?= e(trans('profixs.valiants::lang.system.alerts.valiant_delete_confirm')) ?>">
                </button>
                <span class="btn-text">
                    <?= e(trans('profixs.valiants::lang.system.labels.or')) ?>
                    <a href="<?= Backend::url('profixs/valiants/valiants') ?>">
                        <?= e(trans('profixs.valiants::lang.system.buttons.cancel')) ?>
                    </a>
                </span>
            </div>
        </div>

    <?php Block::endPut() ?>

    <?php Block::put('form-sidebar') ?>
        <div class="hide-tabs"><?= $this->formRenderSecondaryTabs() ?></div>
    <?php Block::endPut() ?>

    <?php Block::put('body') ?>
        <?= Form::open([
            'class' => 'layout stretch'
        ]) ?>
            <?= $this->makeLayout('form-with-sidebar') ?>
        <?= Form::close() ?>
    <?php Block::endPut() ?>

<?php else: ?>

    <p class="flash-message static error"><?= e($this->fatalError) ?></p>
    <p>
        <a href="<?= Backend::url('profixs/valiants/valiants') ?>" class="btn btn-default">
            <?= e(trans('profixs.valiants::lang.system.buttons.return_to_valiants_list')) ?>
        </a>
    </p>

<?php endif ?>