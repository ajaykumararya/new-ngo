document.addEventListener('DOMContentLoaded', function () {
    const table = $('table#list-verified');
    var dt = table.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}member/get_verified_list`,
            error: function (d, e, r) {
                console.log(r);
                console.log(d);
                console.log(e);
            }
        },
        columns: [
            { 'data': 'id' },
            { 'data': 'profile_img' },
            { 'data': 'name' },
            { 'data': 'mobile' },
            { 'data': 'DISTRICT_NAME' },
            { 'data': 'authority' },
            { 'data': null }
        ],
        columnDefs: [{
            targets: 0,
            render: function (data, type, row, meta) {
                return data;
            }
        },
        {
            targets: 1,
            render: function (data, type, row, meta) {                
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
                    <a href="${base_url}print-membership/${btoa(row.id)}" target="_blank" class="btn btn-xs btn-sm btn-primary">
                        <i class="fa fa-print"></i>
                    </a>
                
                    <a href="${base_url}admin/edit-member/${btoa(row.id)}" class="btn btn-xs btn-sm btn-info">
                        <i class="fa fa-edit"></i> 
                        Edit</a>

                    ${deleteBtnRender(1, row.id)}
                </div>
                `;
            }
        }]
    }).on('draw', function () {
        handleDeleteRows('member/delete-member');
    });
})