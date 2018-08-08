<?php

use guopee\Assets;
use yii\helpers\Html;

Assets::register($this);
echo Html::activeHiddenInput($model, $attribute, ['id' => "gridtbl_{$attribute}"]);
?>
<table id="tblAppendGrid"></table>
<script type="text/javascript">
    $(function () {
        var setGridTblData = function (data) {
            $("#gridtbl_<?=$attribute?>").val(JSON.stringify(data));
        }
        var configs = <?=$configs?>;
        var funcs = {
            afterRowAppended: function () {
                var data = $('#tblAppendGrid').appendGrid('getAllValue');
                setGridTblData(data);
            },
            afterRowInserted: function () {
                var data = $('#tblAppendGrid').appendGrid('getAllValue');
                setGridTblData(data);
            },
            afterRowRemoved: function () {
                var data = $('#tblAppendGrid').appendGrid('getAllValue');
                setGridTblData(data);
            },
        }
        $.extend(configs, funcs);
        $('#tblAppendGrid').appendGrid(configs);
        $("#tblAppendGrid").on('change', 'input', function () {
            var data = $('#tblAppendGrid').appendGrid('getAllValue');
            setGridTblData(data);
        })
    })
</script>