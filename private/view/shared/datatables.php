<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous"></script>
<script defer src="https://use.fontawesome.com/releases/v5.15.4/js/all.js" integrity="sha384-rOA1PnstxnOBLzCLMcre8ybwbTmemjzdNlILg8O7z1lUkLXozs4DHonlDtnE7fpc" crossorigin="anonymous"></script>

<script src="<?=ROOT?>/private/js/DataTables/datatables.min.js"></script>
<?php if(!isset($table_name)) {$table_name=array();} ?>
<?php foreach ($table_name as $table_name): ?>
<script>
    $(document).ready(function () {
        if(!$.fn.DataTable.isDataTable('#<?php echo $table_name; ?>')){
        $('#<?php echo $table_name; ?>').DataTable({
            scrollY: 200,
            scrollX: true,
            paging: true,
           columnDefs:[{
                targets:'no-sort',
               orderable:false,
           }]
        });
        }
    });
</script>
<?php endforeach;?>
