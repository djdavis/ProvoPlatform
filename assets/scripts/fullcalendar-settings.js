
	$(document).ready(function() {


		/* initialize the external events
		-----------------------------------------------------------------*/

		$('#external-events .fc-event').each(function() {

			// store data so the calendar knows to render an event upon drop
			$(this).data('event', {
				title: $.trim($(this).text()), // use the element's text as the event title
				stick: true // maintain when user navigates (see docs on the renderEvent method)
			});

			// make the event draggable using jQuery UI
			$(this).draggable({
				zIndex: 999,
				revert: true,      // will cause the event to go back to its
				revertDuration: 0  //  original position after the drag
			});

		});


		/* initialize the calendar
		-----------------------------------------------------------------*/


		$('#calendar').fullCalendar({
			header: {
				left: 'prev,next today',
				center: 'title',
				right: 'month,agendaWeek,agendaDay'
			},
			defaultDate: '2015-02-12',
			businessHours: true, // display business hours
			editable: true,
            droppable: true,
			events: [
				{
					title: 'All Day Event',
					start: '2015-02-01',
                    color: '#e05159'
				},
				{
					title: 'Long Event',
					start: '2015-02-07',
					end: '2015-02-10',
                    color: '#ef93b0'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-09T16:00:00',
                    color: '#c15975'
				},
				{
					id: 999,
					title: 'Repeating Event',
					start: '2015-02-16T16:00:00',
                    color: '#787e83'
				},
				{
					title: 'Conference',
					start: '2015-02-11',
					end: '2015-02-13',
                    color: '#f8835e'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T10:30:00',
					end: '2015-02-12T12:30:00',
                    color: '#e49825'
				},
				{
					title: 'Lunch',
					start: '2015-02-12T12:00:00',
                    color: '#7c689d'
				},
				{
					title: 'Meeting',
					start: '2015-02-12T14:30:00',
                    color: '#319577'
				},
				{
					title: 'Happy Hour',
					start: '2015-02-12T17:30:00',
                    color: '#60b763'
				},
				{
					title: 'Dinner',
					start: '2015-02-12T20:00:00',
                    color: '#3caed0'
				},
				{
					title: 'Birthday Party',
					start: '2015-02-13T07:00:00',
                    color: '#2d7caa'
				},
				{
					title: 'Click for Google',
					url: 'http://google.com/',
					start: '2015-02-28',
                    color: '#b5bec5'
				}
			]
		});
		
	});


