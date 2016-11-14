$( document ).ready(function() {
	App.timepicker();
	App.timetable();
});

var App = {
	timepicker: function ()
	{
		$('#time_when').timepicker({ 'timeFormat': 'H:i' });

		$('#time_when').timepicker({
			'timeFormat': 'H:i',
			'maxTime': '24',
		});

	},

	timetable: function ()
	{
		$('#region').change(function(){
			googleMapAdd.zoomRegion($('#region').val());
		})

		// On media icon click, get value, and leave it active
		$('.media').click(function(){
			var id = $(this).data("id");
			if (id == 'all')
			{
				if ($('.active').length === $('.media').length)
				{
					$('.media').removeClass('active');
					$('.media input').val(0)
				} else {
					$('.media').addClass('active');
					$('.media input').val(1)
				}

			} else {
				if ($(this).hasClass('active'))
				{
					$("#" + id).val(0);
					$(this).removeClass('active');
				} else {
					$("#" + id).val(1);
					$(this).addClass('active');
				}
			}

		});
	}
}