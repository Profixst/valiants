<div data-control="toolbar">
    <a
        href="<?= Backend::url('profixs/valiants/valiants/create') ?>"
        class="btn btn-primary oc-icon-plus">
        <?= e(trans('profixs.valiants::lang.system.buttons.new_valiant')) ?>
    </a>

    <a href="<?= Backend::url('profixs/valiants/valiants/reorder'); ?>" class="btn btn-default oc-icon-sitemap">
        <?= e(trans('profixs.valiants::lang.system.buttons.reorder_valiants')) ?>
    </a>

    <button
        class="btn btn-danger oc-icon-trash-o"
        disabled="disabled"
        onclick="$(this).data('request-data', { checked: $('.control-list').listWidget('getChecked') })"
        data-request="onDelete"
        data-request-confirm="<?= e(trans('profixs.valiants::lang.system.alerts.valiants_delete_confirm')) ?>"
        data-trigger-action="enable"
        data-trigger=".control-list input[type=checkbox]"
        data-trigger-condition="checked"
        data-request-success="$(this).prop('disabled', 'disabled')"
        data-stripe-load-indicator>
        <?= e(trans('profixs.valiants::lang.system.buttons.delete_selected')) ?>
    </button>
</div>
