document.addEventListener('DOMContentLoaded', function () {
    const list = $('.table');

    list.DataTable({
        dom: small_dom,
        ajax: {
            url: `${ajax_url}cms/list-testimonial`,
        },
        columns: [
            { 'data': null },
            { 'data': 'image' },
            { 'data': 'name' },
            { 'data': 'designation' },
            { 'data': null }
        ],
        columnDefs: [{
            targets: 0,
            render: function (data, type, row, meta) {
                return `${meta.row + 1}.`;
            }
        },
        {
            targets: 1,
            render: function (Data) {
                return `${avatar(Data)}`;
            }
        },
        {
            targets: 3,
            render: function (data, type, row) {
                return badge(data, 'info');
            }
        }, {
            targets: -1,
            render: function (data, type, row) {
                return `
                    <div class="d-flex">
                        <div class="me-3">                        
                            <label class="form-check form-switch" title="Active/In-active">
                              <input data-id="${row.id}" class="form-check-input profile-status" type="checkbox" ${ row.status == '1' ? 'checked' : '' }>
                            </label>
                        </div>
                        <div class="">
                            ${deleteBtnRender(1, row.id)}
                        </div>
                    </div>
                `;
            }
        }]
    }).on('draw', function () {
        handleDeleteRows('cms/delete-testimonial');
        list.find('.profile-status').change(function(){
            // alert(2);
            var that = this;
            var id = $(this).data('id');
            var isChecked = $(this).is(':checked');
            SwalWarning('Confirmation!',`Are you sure, you want to ${isChecked ? 'Active' : 'De-active'} Account`,true,`${isChecked ? 'Active' : 'De-Active'}`).then((res) => {
                if(res.isConfirmed){
                    // alert(id);  
                    $.AryaAjax({
                        url : 'cms/status-testimonial',
                        data : {id,status : isChecked ? 1 : 0},
                        success_message : `Proccess Complete Successfully...`
                    });
                }
                else{
                    $(that).prop('checked',!isChecked)
                }
            });

        })
    });
})