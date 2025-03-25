document.addEventListener('DOMContentLoaded', function () {
    const table = $('table#list');
    // alert(table.length);
    var dt = table.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}donor/list`,
            error : function(re){
                console.log(re.responseText);
            }
        },
        columns: [
            { 'data': 'photo' },
            { 'data': 'name' },
            { 'data': 'mobile' },
            { 'data': 'pan' },
            { 'data': 'DISTRICT_NAME' },
            { 'data': 'total_donate' },
            { 'data' : 'status'},
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
            targets : 5,
            render: function (data, type, row, meta) {
                return `${data} ${inr}`;
            }
        },        
        {
            targets : 6,
            render: function (data, type, row, meta) {
                return `<label class="form-check form-switch form-switch-2">
                                <input class="form-check-input update-status" ${data == '1' ? 'checked' : ''} data-id="${row.id}" type="checkbox">
                                <span class="form-check-label"></span>
                        </label>`;
            }
        },
        {
            targets: -1,
            orderable: false,
            searchable: false,
            render: function (data, type, row) {
                return `
                <div class="btn-group">
                    <a href="${base_url}admin/donor-receipt/${btoa(row.id)}" target="_target" class="btn btn-xs btn-sm btn-primary">
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
    $(document).on('change','.update-status',function(){
        // alert('OK')
        var id = $(this).data('id');
        var status = $(this).is(':checked') ? 1 : 0;
        $.AryaAjax({
            url : 'donor/donor_activer',
            data : {id,status},
            success_message : 'Status changed successfully..'
        });
    })
})