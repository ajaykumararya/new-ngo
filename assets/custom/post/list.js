document.addEventListener('DOMContentLoaded', function () {
    const list = $('.table');

    list.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}cms/list-post`,
        },
        columns: [
            { 'data': null },
            {'data' : 'timeid'},
            { 'data': 'image' },
            { 'data': 'title' },
            { 'data': 'description' },
            { 'data': null }
        ],
        columnDefs: [{
            targets: 0,
            render: function (data, type, row, meta) {
                return `${meta.row + 1}.`;
            }
        },
        {
            targets : 1,
            render : function(data,type,row){
                const date = new Date(data * 1000);
                return moment(date).format('YYYY-MM-DD HH:mm:ss');
            }
        },
        {
            targets: 2,
            render: function (Data) {
                return `${avatar(Data,'lg')}`;
            }
        },{
            targets: -1,
            render: function (data, type, row) {
                return `
                            ${deleteBtnRender(4, row.id)}
                `;
            }
        }]
    }).on('draw', function () {
        handleDeleteRows('cms/delete-post');
        /*
        list.find('.profile-status').change(function(){
            // alert(2);
            var that = this;
            var id = $(this).data('id');
            var isChecked = $(this).is(':checked');
            SwalWarning('Confirmation!',`Are you sure, you want to ${isChecked ? 'Active' : 'De-active'} Account`,true,`${isChecked ? 'Active' : 'De-Active'}`).then((res) => {
                if(res.isConfirmed){
                    // alert(id);  
                    $.AryaAjax({
                        url : 'cms/status-post',
                        data : {id,status : isChecked ? 1 : 0},
                        success_message : `Proccess Complete Successfully...`
                    });
                }
                else{
                    $(that).prop('checked',!isChecked)
                }
            });

        })
            */
    });
})