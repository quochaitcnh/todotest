<?php use App\App\App; ?>
<script type="text/javascript" src="/public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/assets/js/jquery.validate.min.js"></script>
<script type="text/javascript" src="/public/assets/js/moment.min.js"></script>
<script type="text/javascript" src="/public/assets/js/daterangepicker.min.js"></script>
<script src="https://cdn.datatables.net/1.10.18/js/jquery.dataTables.min.js" type="text/javascript"></script>
<script src="https://cdn.datatables.net/1.10.18/js/dataTables.bootstrap.min.js" type="text/javascript"></script>

<script>
    $(document).ready(function() {
        $('#table_todo').DataTable();
        $('form').validate()

        var startDate = $('#starting_date')
        var endDate = $('#ending_date')
        if (typeof startDate !== 'undefined' && typeof endDate !== 'undefined') {

            var opt = {
                singleDatePicker: true,
                minYear: 2022,
                startDate: moment(),
                timePicker: true,
                timePicker24Hour : true,
                locale: {
                    format: 'YYYY-MM-DD HH:mm:ss',
                }
            }

            startDate.daterangepicker(opt, function(start, end, label) {
                var s = start.format('YYYY-MM-DD HH:mm:ss')

                opt.minDate = s
                endDate.daterangepicker(opt)
            })

            opt.minDate = startDate.val()
            endDate.daterangepicker(opt, function(start, end, label) {})
        }

        //handle view
        $('.view-state').on('click', function (e) {
            e.preventDefault()

            var type = $(this).data('type')

            $('.box-view').hide()
            $('.box-' + type).show()
        })

        //remove alert
        setTimeout(function () {
            if (typeof $('.alert') !== 'undefined') {
                $('.alert').remove()
            }
        }, 3000)

        //confirm delete work
        $('.delete-work').on('click', function (e) {
            e.preventDefault()

            var href = $(this).attr('href')

            if (confirm('Are you sure to delete?') == true){
                window.location.href = href
            }
        })
    })
</script>
</body>
</html>