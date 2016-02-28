$(document).on("page:change", function() {
  var calends;
  calends = $('#calendar').fullCalendar({
      allDaySlot: false,
      aspectRatio: 2,
      defaultView: 'agendaWeek',
      events: eval(document.getElementById('calendar').getAttribute("data-events")),
      selectable: true,
      select: function(start, end) {
        $('#createEventModal #begin').val(moment(start).format('YYYY-MM-DD[T]HH:mm:ss'));
        $('#createEventModal #end').val(moment(end).format('YYYY-MM-DD[T]HH:mm:ss'));
        $('#createEventModal').modal('show');
      },
    });
