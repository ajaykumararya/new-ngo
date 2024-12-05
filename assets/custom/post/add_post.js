document.addEventListener('DOMContentLoaded',function(){
    const form = document.getElementById('add-form');
    var validation = MyFormValidation(form);
    validation.addField('title',{
        validators : {
            notEmpty : {message : 'Please Enter Title.'}
        }
    });
    validation.addField('description',{
        validators : {
            notEmpty : {message : 'Please Enter Description.'}
        }
    });    
    validation.addField('image',{
        validators: {
            notEmpty: {
                message: 'Please choose a file.'
            },
            file: {
                extension: 'jpg,jpeg,png,gif,pdf',
                type: 'image/jpeg,image/png,image/gif',
                maxSize: max_upload_size, // 5 MB
                message: 'The selected file is not valid. Allowed types: jpg, jpeg, png, gif and pdf. Maximum size: 2 MB.'
            }
        }
    })

    form.addEventListener('submit',function(e){
        e.preventDefault();
        $.AryaAjax({
            url : 'cms/add_post',
            validation : validation,
            data : new FormData(form),
            success_message : 'Post Created Successfully.',
            page_reload : true
        }).then((e) => log(e));
    })

})