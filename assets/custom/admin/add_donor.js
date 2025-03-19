document.addEventListener('DOMContentLoaded',function(){
    const form = document.getElementById('add-donor');
    var validation = MyFormValidation(form);
    validation.addField('name',{
        validators : {
            notEmpty : {message : 'Please Enter Name.'}
        }
    });
    validation.addField('mobile',{
        validators : {
            notEmpty : {message : 'Enter Mobile No.'}
        }
    });    
    validation.addField('pan',{
        validators : {
            notEmpty : {message : 'Please Enter PAN.'}
        }
    });
    validation.addField('state_id',{
        validators : {
            notEmpty : {message : 'Select State.'}
        }
    });    
    validation.addField('city_id',{
        validators : {
            notEmpty : {message : 'Select City'}
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
            url : 'donor/add',
            validation : validation,
            data : new FormData(form),
            // success_message : 'Donor Created Successfully.',
            // page_reload : true
        }).then((e) => {
            log(e);
            if (e.status) {
                SwalSuccess('Successful', 'Donor added Successfully..',true,'Add Receipt').then((ok) => {
                    if(ok.isConfirmed){
                        // alert(11);
                        location.href = e.url;
                    }
                });
            }
            showResponseError(e);
        });
    })

})