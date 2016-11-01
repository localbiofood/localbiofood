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
		$('#region_dropdown').change(function(){
			googleMapAdd.zoomRegion($('#region_dropdown').val());
		})

		// On media icon click, get value, and leave it active
		$('.media').click(function(){
			var id = $(this).data("id");
			if ($(this).hasClass('active'))
			{
				$(this).removeClass('active');
				$()
			} else {
				$(this).addClass('active');
			}
		});



	}

}