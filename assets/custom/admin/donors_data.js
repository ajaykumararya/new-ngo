document.addEventListener('DOMContentLoaded', function () {
    const table = $('table#list');
    // alert(table.length);
    var dt = table.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}donor/list`,
        },
        columns: [
            { 'data': 'photo' },
            { 'data': 'name' },
            { 'data': 'mobile' },
            { 'data': 'pan' },
            { 'data': 'DISTRICT_NAME' },
            { 'data': null }
        ],
        columnDefs: [{
            targets: 0,
            render: function (data, type, row, meta) {
                // return data;
                return `<img src="${base_url}upload/${data}" width="50" height="50">`;

            }
        },
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function (data, type, row) {
                return `
                <div class="btn-group">
                    <a href="${base_url}admin/donor-reciept/${btoa(row.id)}" target="_target" class="btn btn-xs btn-sm btn-primary">
                        <i class="fa fa-file"></i> Reciepts
                    </a>    
                
                
                <a href="${base_url}admin/edit-member/${btoa(row.id)}" class="btn btn-xs btn-sm btn-info">
                        <i class="fa fa-edit"></i> 
                        Edit</a>

                    ${deleteBtnRender(1, row.id,'\'s Whole Recipts are delete after donor deleted.')}
                </div>
                `;
            }
        }]
    }).on('draw', function () {
        handleDeleteRows('member/delete-donor');
    });
})