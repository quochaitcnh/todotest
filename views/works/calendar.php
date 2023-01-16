<?php require 'views/layouts/main.php' ?>
<?php
    $events = [];
    if (!empty($works)) {
        foreach ($works as $key => $work) {
            $tmp = [
                'id' => $work->id,
                'title' => $work->name,
                'start' => $work->starting_date,
                'end' => $work->ending_date
            ];
            array_push($events, $tmp);
        }
    }
?>

<header class="mt-4 mb-4">
    <div class="container">
        <h1 class="h1 text-center">To Do List</h1>
        <div class="row mt-4">
            <div class="col-6">
                <a href="/works" class="btn btn-block btn-warning">List Viewer</a>
            </div>
            <div class="col-6">
                <a class="btn btn-block btn-info" href="/works/create">Create New Work</a>
            </div>
        </div>
    </div>
</header>

<section>
    <div class="container">
        <div id='calendar'></div>
    </div>
</section>

<script type="text/javascript" src="/public/assets/js/jquery.min.js"></script>
<script type="text/javascript" src="/public/assets/js/moment.min.js"></script>
<script type="text/javascript" src="/public/assets/js/fullcalendar.min.js"></script>

<script>
    var events = <?php echo json_encode($events); ?>;

    $('#calendar').fullCalendar({
        header: {
        left: 'prev,next today',
        center: 'title',
        right: 'month,agendaWeek,agendaDay,listWeek'
        },
        defaultDate: "<?php echo date('Y-m-d') ?>",
        navLinks: true,
        editable: true,
        eventLimit: true,
        events: events
    });

</script>

<?php require 'views/layouts/bottom.php' ?>