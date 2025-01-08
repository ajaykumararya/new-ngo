document.addEventListener('DOMContentLoaded', function () {
    const table = $('table#list-unverified');
    var dt = table.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}member/get_unverified_list`,
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
            { 'data': 'timestamp' },
            { 'data': null }
        ],
        columnDefs: [{
            targets: 0,
            render: function (data, type, row, meta) {
                return data;
            }
        }, {
            targets: 4,
            render: function (dateTime) {
                var datePart = dateTime.split(' ')[0];
                var [year, month, day] = datePart.split('-');
                return `${day}-${month}-${year}`;
            }
        },
        {
            targets : -1,
            orderable : false,
            searchable : false,
            render : function(data,type,row){
                return `
                    <button data-id="${row.id}" class="btn btn-xs btn-sm btn-info approv-btn">
                        <i class="fa fa-check"></i> 
                        Approve</button>

                    ${deleteBtnRender(1,row.id)}
                `;
            }
        }]
    }).on('draw',function(){
        handleDeleteRows('member/delete-member');
        table.find('.approv-btn').on('click',function(){
            var id = $(this).data('id');
            // alert(id);   
            SwalWarning('Confirmation!','Are you sure move to verified list this memeber',true,'Approve & Move').then( (res) => {
                if(res.isConfirmed){
                    // alert(id);
                    $.AryaAjax({
                        url : 'member/approve',
                        data : {id}
                    }).then( (d) => {
                        SwalSuccess('Success','Moved in Verified List..');
                        // table.ajax.reload();
                        $(table).DataTable().ajax.reload();
                    });
                }
            })         
        })
    });
})