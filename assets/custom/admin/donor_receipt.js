document.addEventListener('DOMContentLoaded', function () {
    const form = document.getElementById('add-donor-receipt');
    var validation = MyFormValidation(form);
    validation.addField('amount', {
        validators: {
            notEmpty: { message: 'Please Enter Amount.' }
        }
    });
    validation.addField('receipt_no', {
        validators: {
            notEmpty: { message: 'Enter Receipt No.' }
        }
    });
    validation.addField('date', {
        validators: {
            notEmpty: { message: 'Please Select a Date.' }
        }
    });

    form.addEventListener('submit', function (e) {
        e.preventDefault();
        $.AryaAjax({
            url: 'donor/add-receipt',
            validation: validation,
            data: new FormData(form),
        }).then((e) => {
            log(e);
            if (e.status) {
                SwalSuccess('Successful', 'Donor Receipt added Successfully..').then((ok) => {
                    if (ok.isConfirmed) {
                        location.reload();
                    }
                });
            }
            showResponseError(e);
        });
    })
    $(document).on('click','.delete-receipt',function(){
        SwalWarning('Confirmation!', 'Are you sure for delete this receipt..',true,'Yes Delete it.').then((ok) => {
            if (ok.isConfirmed) {
                // alert(2);
                $.AryaAjax({
                    url: 'donor/delete-receipt',
                    data: {id:$(this).attr('data-id')},
                    success_message : 'Receipt Deleted Successfully..',
                    page_reload : true
                });
            }
        });
    })
})