<div class="row">
    <div class="col-md-8">
        <form action="" class="extra-setting">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Enquiry Form Setting</h3>
                </div>
                <div class="card-body">
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Section Title</label>
                        <input type="text" class="form-control" value="<?=ES('enquiry_form_section_title')?>" name="enquiry_form_section_title" placeholder="Section Title">
                    </div>
                    <div class="form-group mb-4">
                        <label for="" class="form-label">Section Short Description</label>
                        <input type="text" class="form-control" value="<?=ES('enquiry_form_section_short_descrption')?>" name="enquiry_form_section_short_descrption" placeholder="Section Short Description">
                    </div>
                    <div class="form-group">
                        <label for="" class="form-label">Enquiry Form Title</label>
                        <input type="text" class="form-control" value="<?=ES('enquiry_form_title')?>" name="enquiry_form_title" placeholder="Enquiry Form Title..">
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
    <div class="col-md-4">
        <form action="" class="extra-setting" data-page_load="reaload">
            <div class="card">
                <div class="card-header">
                    <h3 class="card-title">Left Image</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <input type="file" name="enquiry_form_left_image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">
                            <img src="<?= base_url('upload/') . ES('enquiry_form_left_image') ?>"
                                alt="" id="logo" class="img-fluid w-100 h-300px">
                        </label>
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
</div>