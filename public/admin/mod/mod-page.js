var mod = 'page';

var dataColumns = [
    {
        data: null,
        width: '1%',
        sClass: 'text-center',
        orderable: false,
        render: function(data, type, row, meta){
            return meta.row + meta.settings._iDisplayStart + 1;
        }
    },
    {data: 'name', name: 'name'},
    {data: 'path', name: 'path'},
    {
        data: 'show',
        render: function(data){
            if(data == 1){
                return '<i class="fa fa-check text-success"></i> Yes';
            } else {
                return '<i class="fas fa-times text-danger"></i> No';
            }
        }
    },
    {
        data: 'icon',
        render: function(data){
            return '<i class="'+ data +'"></i> '+ data
        }
    },
    {data: 'display_name', name: "display_name"},
    {data: 'parent_page', name: "parent_page"},
    {
        data: 'id',
        width: '90px',
        sClass: 'text-center',
        render: function(data){
            return '<i class="fa fa-pencil text-primary py-2 px-3 action" style="cursor: pointer;" data-id="'+ data +'" data-toggle="edit" data-url="page/edit"></i><i class="fa fa-trash text-danger py-2 px-3 action" style="cursor: pointer;" data-id="'+ data +'" data-toggle="delete" data-url="page/delete"></i>'
        }
    }
];

var displayErrors = [
    {
        display: '#errorName',
        inputName: 'name'
    },
    {
        display: '#errorPath',
        inputName: 'path'
    },
    {
        display: '#errorShow',
        inputName: 'show'
    },
    {
        display: '#errorDisplayName',
        inputName: 'display_name'
    }
];