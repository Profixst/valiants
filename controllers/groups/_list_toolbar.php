<div data-control="toolbar">
    <?php if ($this->user->hasAccess('profixs.valiants.groups.allow_create')): ?>
        <a
            href="<?= Backend::url('profixs/valiants/groups/create') ?>"
            class="btn btn-primary oc-icon-plus">
            <?= e(trans('profixs.valiants::lang.system.buttons.new_group')) ?>
        </a>
    <?php endif ?>

    <a href="<?= Backend::url('profixs/valiants/groups/reorder'); ?>" class="btn btn-default oc-icon-sitemap">
        <?= e(trans('profixs.valiants::lang.system.buttons.reorder_groups')) ?>
    </a>

    <?php if ($this->user->hasAccess('profixs.valiants.groups.allow_delete')): ?>
        <button
            class="btn btn-danger oc-icon-trash-o"
            disabled="disabled"
            onclick="$(this).data('request-data', { checked: $('.control-list').listWidget('getChecked') })"
            data-request="onDelete"
            data-request-confirm="<?= e(trans('profixs.valiants::lang.system.alerts.groups_delete_confirm')) ?>"
            data-trigger-action="enable"
            data-trigger=".control-list input[type=checkbox]"
            data-trigger-condition="checked"
            data-request-success="$(this).prop('disabled', 'disabled')"
            data-stripe-load-indicator>
            <?= e(trans('profixs.valiants::lang.system.buttons.delete_selected')) ?>
        </button>
    <?php endif ?>
</div>