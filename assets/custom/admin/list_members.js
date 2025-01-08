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
            targets : -1,
            orderable : false,
            searchable : false,
            render : function(data,type,row){
                return `
                    <a href="${base_url}admin/edit-member/${btoa(row.id)}" class="btn btn-xs btn-sm btn-info">
                        <i class="fa fa-edit"></i> 
                        Edit</a>

                    ${deleteBtnRender(1,row.id)}
                `;
            }
        }]
    }).on('draw',function(){
        handleDeleteRows('member/delete-member');
    });
})