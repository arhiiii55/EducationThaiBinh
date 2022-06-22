<script>
$(document).on('ready', function() {
    // data-tables
    $('#dataTable').DataTable({
        data: dataSet,
        columns: [{
            title: "Name"
        }, {
            title: "Position"
        }, {
            title: "Office"
        }, {
            title: "Extn."
        }, {
            title: "Date"
        }, {
            title: "Salary"
        }]
    });
    $('#dataTable2').DataTable({
        data: dataSet,
        columns: [{
            title: "Name"
        }, {
            title: "Position"
        }, {
            title: "Office"
        }, {
            title: "Extn."
        }, {
            title: "Date"
        }, {
            title: "Salary"
        }]
    });

    // counter-up
    $('.counter').counterUp({
        delay: 10,
        time: 600
    });
});
</script>
<script>
$(function() {
    // Date Range Picker
    $('input[name="daterange"]').daterangepicker();

    // Date and Time Picker
    $('input[name="daterange"]').daterangepicker({
        timePicker: true,
        timePickerIncrement: 30,
        locale: {
            format: 'MM/DD/YYYY h:mm A'
        }
    });

    // Single Date Picker
    $('input[name="singledatepicker"]').daterangepicker({
        singleDatePicker: true,
        showDropdowns: true
    });

    // Predefined Ranges
    var start = moment().subtract(29, 'days');
    var end = moment();

    function cb(start, end) {
        $('#reportrange span').html(start.format('MMMM D, YYYY') + ' - ' + end.format('MMMM D, YYYY'));
    }
    $('#reportrange').daterangepicker({
        startDate: start,
        endDate: end,
        ranges: {
            'Today': [moment(), moment()],
            'Yesterday': [moment().subtract(1, 'days'), moment().subtract(1, 'days')],
            'Last 7 Days': [moment().subtract(6, 'days'), moment()],
            'Last 30 Days': [moment().subtract(29, 'days'), moment()],
            'This Month': [moment().startOf('month'), moment().endOf('month')],
            'Last Month': [moment().subtract(1, 'month').startOf('month'), moment().subtract(1,
                'month').endOf('month')]
        }
    }, cb);
    cb(start, end);
});
</script>
<!-- END Java Script for this page -->
<script type="text/javascript">
$(document).ready(function() {
    $('#dataTable').DataTable();
});
$('.counter').counterUp({
    delay: 10,
    time: 600
});
</script>