function deleteSelected() {
$(document).ready(function() {

$('#multi-delete').on('click', function() {
	var button = $(this);
	var selected = [];
	$('#users-table .check:checked').each(function() {
	selected.push($(this).val());
	alert(selected);
	});

	Swal.fire({
	icon: 'warning',
		title: 'Are you sure you want to delete selected record(s)?',
		showDenyButton: false,
		showCancelButton: true,
		confirmButtonText: 'Yes'
	}).then((result) => {
	/* Read more about isConfirmed, isDenied below */
	if (result.isConfirmed) {
		$.ajax({
		type: 'post',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: button.data('route'),
		data: {
			'selected': selected
		},
		success: function (response, textStatus, xhr) {
			alert(selected);
			Swal.fire({
			icon: 'success',
				title: response,
				showDenyButton: false,
				showCancelButton: false,
				confirmButtonText: 'Yes'
			}).then((result) => {
			window.location='/users/list'
			});
		},
		error: function(result) {
console.log(result);
}
		});
	}
	});
});

$('.delete-form').on('submit', function(e) {
	e.preventDefault();
	var button = $(this);

	Swal.fire({
	icon: 'warning',
		title: 'Are you sure you want to delete this record?',
		showDenyButton: false,
		showCancelButton: true,
		confirmButtonText: 'Yes'
	}).then((result) => {
	/* Read more about isConfirmed, isDenied below */
	if (result.isConfirmed) {
		$.ajax({
		type: 'post',
		headers: {
			'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
		},
		url: button.data('route'),
		data: {
			'_method': 'delete'
		},
		success: function (response, textStatus, xhr) {
			Swal.fire({
			icon: 'success',
				title: response,
				showDenyButton: false,
				showCancelButton: false,
				confirmButtonText: 'Yes'
			}).then((result) => {
			window.location='/users/list'
			});
		}
		});
	}
	});
	
})
});
}