if(localStorage.getItem('mod') == 'undefined' || localStorage.getItem('mod') == null){
    localStorage.setItem('mod', mod);
}

if(localStorage.getItem('mod') !== mod){
    var dataUrl = $('#viewData').data('url');
    localStorage.setItem('url', dataUrl);
    localStorage.setItem('mod', mod);
}

if(localStorage.getItem('url') == 'undefined' || localStorage.getItem('url') == null){
    var dataUrl = $('#viewData').data('url');
    localStorage.setItem('url', dataUrl);
}

if(displayErrors == null){
    var displayErrors = []
}

loadData(dataColumns);

function loadData(columns = []){
    $('.loading-page').removeClass('d-none');
    var dataUrl = localStorage.getItem('url');
    $.ajax({
        url: url + "/administrator/" + dataUrl,
        method: 'get',
        dataType: 'html',
        success: function(data){
            $('.loading-page').addClass('d-none');
            $('#viewData').html(data);

            var dataUrl = $('#dataTables').data('url');

            $('#dataTables').DataTable({
                processing: true,
                serverSide: true,
                ajax: url + "/administrator/"+ dataUrl,
                columns: columns,
                responsive: true
            });

            loadDatatablesResponsive();
            loadDatatablesInit();
            loadAdd();
            formSubmit(displayErrors);
            select2();

            $.each(displayErrors, function(key, value){
                $('input[name="'+ value.inputName +'"]').keydown(function(){
                    $(this).removeClass('is-invalid');
                })
            })
        },
        error: function(xhr, ajaxOptions, thrownError){
            $('.loading-page').addClass('d-none');
            swal({
                title: 'Error ' + xhr.status,
                type: 'error',
                text: 'GET ' + url + '/administrator/' + dataUrl + ' ' + thrownError
            });
        }
    })
}

function dataDelete(data){
    let id = $(data).data('id');
    var dataUrl = $(data).data('url');

    swal({
        title: 'Are you sure?',
        type: 'warning',
        text: "You won't be able to revert this!",
        showCancelButton: true,
        showConfirmButton: true,
        confirmButtonText: 'Yes, delete it',
        confirmButtonClass: 'btn btn-success',
        cancelButtonText: 'Cancel'
    }).then((willDelete) => {
        if(willDelete){
            $('.loading-page').removeClass('d-none');
            $.ajax({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                url: url +'/administrator/'+ dataUrl +'/'+ id,
                method: 'delete',
                dataType: 'json',
                success: function(data){
                    $('.loading-page').addClass('d-none');
                    swal({
                        title: 'Success',
                        type: 'success',
                        text: data.pesan
                    });
                    loadData(dataColumns);
                },
                error: function(xhr, ajaxOptions, thrownError){
                    $('.loading-page').addClass('d-none');
                    if(xhr.status == 409){
                        swal({
                            title: 'Error ' + xhr.status,
                            type: 'error',
                            text: xhr.responseJSON.pesan
                        });
                    } else {
                        swal({
                            title: 'Error ' + xhr.status,
                            type: 'error',
                            text: 'GET ' + url + '/administrator/' + dataUrl + ' ' + thrownError
                        });
                    }
                }
            })
        }
    });
}

function dataUpdate(data){
    let id = $(data).data('id');
    let dataUrl = $(data).data('url');

    localStorage.setItem('url', dataUrl + '/' + id);

    $('.loading-page').removeClass('d-none');
    $.ajax({
        url: url +'/administrator/'+ dataUrl +'/'+ id,
        dataType: 'html',
        success: function(data){
            $('.loading-page').addClass('d-none');
            $('#viewData').html(data);
            formSubmit();
            select2();
        },
        error: function(xhr, ajaxOptions, thrownError){
            $('.loading-page').addClass('d-none');
            swal({
                title: 'Error ' + xhr.status,
                type: 'error',
                text: 'GET ' + url + '/administrator/' + dataUrl + ' ' + thrownError
            });
        }
    })
}

function formSubmit(){
    $('#formSubmit').submit(function(e){
        e.preventDefault();
        $('.loading-page').removeClass('d-none');
        setError(displayErrors);
        $.ajax({
            headers: {
                'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
            },
            url: $(this).attr('action'),
            method: $(this).attr('method'),
            data: new FormData(this),
            dataType: 'json',
            contentType: false,
            processData: false,
            success: function(data){
                $('.loading-page').addClass('d-none');
                swal({
                    title: 'Success',
                    type: 'success',
                    text: data.pesan
                });
                back();
            },
            error: function(xhr, ajaxOptions, thrownError){
                $('.loading-page').addClass('d-none');
                if(xhr.status == 400){
                    displayError(displayErrors, xhr.responseJSON);
                } else if(xhr.status == 409){
                    swal({
                        title: 'Error ' + xhr.status,
                        type: 'error',
                        text: xhr.responseJSON['pesan']
                    });
                } else {
                    swal({
                        title: 'Error ' + xhr.status,
                        type: 'error',
                        text: 'GET ' + url + '/' + $('#formSubmit').attr('action') + ' ' + thrownError
                    });
                }
            }
        })
    })
}

function loadAdd(){
    $('.action').click(function(e){
        e.preventDefault();
        var toggle = $(this).data('toggle'), dataUrl = $(this).data('url');

        localStorage.setItem('url', dataUrl);

        if(toggle == 'addData'){
            $('.loading-page').removeClass('d-none');
            $.ajax({
                url: url +'/administrator/'+ dataUrl,
                method: 'get',
                dataType: 'html',
                success: function(data){
                    $('.loading-page').addClass('d-none');
                    $('#viewData').html(data);
                    formSubmit();
                    select2()
                },
                error: function(xhr, ajaxOptions, thrownError){
                    $('.loading-page').addClass('d-none');
                    swal({
                        title: 'Error ' + xhr.status,
                        type: 'error',
                        text: 'GET ' + url + '/administrator/' + dataUrl + ' ' + thrownError
                    });
                }
            })
        }
    })
}

function loadDatatablesResponsive(){
    $('#dataTables').DataTable().on('responsive-display', () => {
        $('.action').click(function(){
            var toggle = $(this).data('toggle');

            if(toggle == 'edit'){
                dataUpdate(this);
            }

            if(toggle == 'delete'){
                dataDelete(this)
            }
        })
    });
}

function loadDatatablesInit(){
    $('#dataTables').on('init.dt', () => {
        $('.action').click(function(){
            var toggle = $(this).data('toggle');

            if(toggle == 'edit'){
                dataUpdate(this);
            }

            if(toggle == 'delete'){
                dataDelete(this)
            }
        })
    })
}

function back(){
    var dataUrl = $('#viewData').data('url');
    localStorage.setItem('url', dataUrl);
    loadData(dataColumns);
}

function select2(){
    $(document).ready(function(){
        $('.select2').select2();
    })
}

function displayError(options, data){
    console.log(options);
    console.log(data);
    $.each(options, function(key, value){
        if(data.messages[value.inputName] && data.messages[value.inputName][0]){
            $(value.display).removeClass('d-none');
            $('input[name="'+value.inputName+'"]').addClass('is-invalid');
            $(value.display).html(data.messages[value.inputName][0]);
        }
    });
}

function setError(options){
    $.each(options, function(key, value){
        $(value.display).addClass('d-none');
        $(value.inputName).removeClass('is-invalid');
    })
}