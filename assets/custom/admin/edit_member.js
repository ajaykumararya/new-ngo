document.addEventListener('DOMContentLoaded',function(){
    
    $(document).on('submit','.edit-member',function(e){
        e.preventDefault();
        // alert(3);?
        $.AryaAjax({
            url : 'member/update',
            data : new FormData(this)
        }).then( (res) => {
            if(res.status){
                SwalSuccess('Success','Member Profile Updated Successfully..');
            }
            showResponseError(res);
        });
    })
})