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

    <?= Form::open(['class' => 'layout']) ?>

        <div class="layout-row">
            <?= $this->formRender() ?>
        </div>

        <div class="form-buttons">
            <div class="loading-indicator-container">
                <button
                    type="submit"
                    data-request="onSave"
                    data-hotkey="ctrl+s, cmd+s"
                    data-load-indicator="<?= e(trans('profixs.valiants::lang.system.labels.creating_group')) ?>"
                    class="btn btn-primary">
                    <?= e(trans('profixs.valiants::lang.system.buttons.create')) ?>
                </button>
                <button
                    type="button"
                    data-request="onSave"
                    data-request-data="close:1"
                    data-hotkey="ctrl+enter, cmd+enter"
                    data-load-indicator="<?= e(trans('profixs.valiants::lang.system.labels.creating_group')) ?>"
                    class="btn btn-default">
                    <?= e(trans('profixs.valiants::lang.system.buttons.create_and_close')) ?>
                </button>
                <span class="btn-text">
                    <?= e(trans('profixs.valiants::lang.system.labels.or')) ?>
                    <a href="<?= Backend::url('profixs/valiants/groups') ?>">
                        <?= e(trans('profixs.valiants::lang.system.buttons.cancel')) ?>
                    </a>
                </span>
            </div>
        </div>

    <?= Form::close() ?>

<?php else: ?>

    <p class="flash-message static error"><?= e($this->fatalError) ?></p>
    <p>
        <a href="<?= Backend::url('profixs/valiants/groups') ?>" class="btn btn-default">
            <?= e(trans('profixs.valiants::lang.system.buttons.return_to_groups_list')) ?>
        </a>
    </p>

<?php endif ?>
