$( document ).ready(function() {
	App.timepicker();
	App.timetable();
});

var App = {
	timepicker: function ()
	{
		$('#time_from').timepicker({ 'timeFormat': 'H:i' });

		$('#time_to').timepicker({
			'timeFormat': 'H:i',
			'maxTime': '24',
		});

	},

	timetable: function ()
	{

	}

}