$(document).on('click', '.add_tax_user', function () {
    $('#addTaxUserModal').appendTo('body').modal('show');
});

$('#addTaxUserModal').on('hidden.bs.modal', function () {
    resetModalForm('#addTaxUserForm', '#validationErrorsBox');
});

$(document).on('click', '.view-btn', function () {
    let id = $(this).parent().attr('data-id');
    $.ajax({
        url: showStudentUrl + "/" + id,
        method: "GET",
        success: function(res){
            if(res.student){
                let student = res.student;
                if(student.image_path){
                    $('#viewModal #avatar').attr("src", imageUrl+'/'+student.image_path);
                }
                $('#viewModal #name').text(student.name);
                $('#viewModal #year').text(student.year);
                $('#viewModal #gender').text(student.gender == 'male'?'Male':'Female');
                $('#viewModal #dob').text(student.date_of_birth);
                $('#viewModal #programme').text(student.programme);
                $('#viewModal #minor').text(student.minor);
                $('#viewModal #email').text(student.email);
                $('#viewModal #address').text(student.address);
                $('#viewModal #phone').text(student.phone);
                $('#viewModal').appendTo('body').modal('show');
            }
    }});
});

$(document).on('click', '.edit-btn', function () {
    let id = $(this).parent().attr('data-id');
    $.ajax({
        url: editStudentUrl+'/'+id,
        method: "GET",
        success: function(res){
            let student = res.student;
            $('#modal #name').text(student.name);
            $('#modal #year').text(student.year);
            $('#modal #gender').text(student.gender == 'male'?'Male':'Female');
            $('#modal #dob').text(student.date_of_birth);
            $('#modal #programme').text(student.programme);
            $('#modal #minor').text(student.minor);
            $('#modal #email').text(student.email);
            $('#modal #address').text(student.address);
            $('#modal #phone').text(student.phone);
            $('#modal').appendTo('body').modal('show');
        }
});
});

$('#modal').on('hidden.bs.modal', function () {
    resetModalForm('#editTaxUserForm');
});

$(document).on('click','#delete-btn',function() {
    let CSRF_TOKEN = $('meta[name="csrf-token"]').attr('content');
    let id = $(this).parent('td').attr('id');
    let deleteUserUrl = "{{ route('superadmin.taxuser.delete') }}";

    Swal.fire({
        title: "Delete",
        text: "Are you sure you would like to delete this Tax User?",
        icon: "warning",
        showCancelButton: true,
        confirmButtonText: "Delete",
        cancelButtonText: "Cancel"
    }).then(function(e){
        if(e.value === true){
            $.ajax({
                url: deleteUserUrl+'/'+id,
                type: 'DELETE',
                data: {_token: CSRF_TOKEN},
                dataType: 'JSON',
                success: function (result) {
                    if (result.status == 200) {
                        location.reload();
                    }else if(result.status == 404){
                        Toast.fire({
                            icon: 'error',
                            title: result.message
                        });
                    }
                },
                error: function (result) {
                    Toast.fire({
                        icon: 'error',
                        title: 'Something error in delete.'
                    });
                },
            });
        }
    });
});