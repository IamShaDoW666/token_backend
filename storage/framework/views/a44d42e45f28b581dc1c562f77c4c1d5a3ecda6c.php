
<?php $__env->startSection('title','Reports'); ?>
<?php $__env->startSection('report','active'); ?>
<?php $__env->startSection('queue_list_report','active'); ?>
<?php $__env->startSection('css'); ?>
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/data-tables/css/jquery.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/data-tables/extensions/responsive/css/responsive.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/vendors/data-tables/css/select.dataTables.min.css')); ?>">
<link rel="stylesheet" type="text/css" href="<?php echo e(asset('app-assets/css/pages/data-tables.css')); ?>">
<?php $__env->stopSection(); ?>
<?php $__env->startSection('content'); ?>
<div id="main">
    <div id="breadcrumbs-wrapper">
        <div class="container">
            <div class="row">
                <div class="col s12 m12 l12 pb-1">
                    <h5 class="breadcrumbs-title col s5"><b><?php echo e(__('messages.menu.queue list')); ?></b></h5>
                    <ol class="breadcrumbs col s7 right-align">
                    </ol>
                </div>
            </div>
        </div>
    </div>
    <div class="row">
        <div class="col s12 m12 l12">
            <div id="inline-form" class="card card card-default scrollspy">
                <div class="card-content">
                    <form action="<?php echo e(route('queue_list_report')); ?>" id="queue_list_report_form" autocomplete="off">
                        <div class="row">
                            <div class="input-field col m5 s4">
                                <input id="starting_date" name="starting_date" type="text" class="datepicker" data-error=".starting_date" value="<?php echo e($selected_starting_date); ?>">
                                <label for="starting_date"><?php echo e(__('messages.reports.starting date')); ?></label>
                                <div class="starting_date">
                                    <?php if($errors->has('starting_date')): ?>
                                    <span class="text-danger errbk"><?php echo e($errors->first('starting_date')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-field col m5 s4">
                                <input id="ending_date" name="ending_date" type="text" class="datepicker" value="<?php echo e($selected_ending_date); ?>" data-error=".ending_date">
                                <label for="ending_date"><?php echo e(__('messages.reports.ending date')); ?></label>
                                <div class="ending_date">
                                    <?php if($errors->has('ending_date')): ?>
                                    <span class="text-danger errbk"><?php echo e($errors->first('ending_date')); ?></span>
                                    <?php endif; ?>
                                </div>
                            </div>
                            <div class="input-field col m2 s2">
                                <div class="input-field col s12">
                                    <button class="btn waves-effect waves-light" id="gobtn" type="submit">
                                        <?php echo e(__('messages.reports.go')); ?></button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
    <?php if($reports): ?>
    <div class="col s12">
        <div class="container" style="width: 99%;">
            <div class="section-data-tables">
                <div class="row">
                    <div class="col s12">
                        <div class="card">
                            <div class="card-content">
                                <div class="row">
                                    <div class="col s12">
                                        <table id="page-length-option" class="display dataTable">
                                            <thead>
                                                <tr>
                                                    <th width="10px">#</th>
                                                    <th><?php echo e(__('messages.reports.service')); ?></th>
                                                    <th><?php echo e(__('messages.reports.date')); ?></th>
                                                    <th><?php echo e(__('messages.reports.token number')); ?></th>
                                                    <th><?php echo e(__('messages.reports.called')); ?></th>
                                                    <th><?php echo e(__('messages.reports.user')); ?></th>
                                                    <th><?php echo e(__('messages.reports.counter')); ?></th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $__currentLoopData = $reports; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key=>$report): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <tr>
                                                    <td><?php echo e($key+1); ?></td>
                                                    <td><?php echo e($report->service_name); ?></td>
                                                    <td><?php echo e(\Carbon\Carbon::parse($report->date)->timezone($timezone)->toDateString()); ?></td>
                                                    <td><?php echo e($report->token_letter); ?>-<?php echo e($report->token_number); ?></td>
                                                    <td><?php echo e($report->called ==1 ? 'Yes' : 'No'); ?></td>
                                                    <td><?php echo e($report->user_name ? $report->user_name : 'Nil'); ?></td>
                                                    <td><?php echo e($report->counter_name ? $report->counter_name : 'Nil'); ?></td>
                                                </tr>
                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <?php endif; ?>
</div>
<?php $__env->stopSection(); ?>
<?php $__env->startSection('js'); ?>
<script src="<?php echo e(asset('app-assets/vendors/data-tables/js/jquery.dataTables.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/data-tables/extensions/responsive/js/dataTables.responsive.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/data-tables/js/dataTables.select.min.js')); ?>"></script>
<script src="<?php echo e(asset('app-assets/vendors/jquery-validation/jquery.validate.min.js')); ?>"></script>
<script>
    $(document).ready(function() {
        $('.datepicker').datepicker({
            format: 'yyyy-mm-dd'
        });

        $('body').addClass('loaded');

        var starting_date = $('#starting_date').val();
        var ending_date = $('#ending_date').val();

        if (starting_date == "" || ending_date == "") {
            $('#gobtn').attr('disabled', 'disabled');
        } else {
            $('#gobtn').removeAttr('disabled');
        }

    });

    $('#starting_date,#ending_date').change(function(event) {
        let starting_date = $('#starting_date').val();
        let ending_date = $('#ending_date').val();

        if (starting_date == "" || ending_date == "") {
            $('#gobtn').attr('disabled', 'disabled');
        } else {
            $('#gobtn').removeAttr('disabled');
        }
    });

    $('#queue_list_report_form').validate({
        rules: {
            starting_date: {
                required: true,
            },
            ending_date: {
                required: true,
            },
        },
        errorElement: 'div',
        errorPlacement: function(error, element) {
            var placement = $(element).data('error');
            if (placement) {
                $(placement).append(error)
            } else {
                error.insertAfter(element);
            }
        }
    });

    $('#page-length-option').DataTable({
        "responsive": true,
        "searching": false,
        "autoHeight": false,
        "scrollX": true,
        "lengthMenu": [
            [10, 25, 50, -1],
            [10, 25, 50, "All"]
        ],
    });
</script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layout.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\Milan\Desktop\Work\token\resources\views/reports/queue_list_report.blade.php ENDPATH**/ ?>