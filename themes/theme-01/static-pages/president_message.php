<div class="row">
 
    <div class="col-md-7">
        <form action="" class="extra-setting">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">President Message Page</h3>
                </div>
                <div class="card-body">
                <div class="form-group">
                        <label for="" class="form-label">Section Title</label>
                        <input type="text" name="president_message_title" class="form-control" value="<?=ES('president_message_title')?>">
                    </div>
                    <div class="form-group">
                        <label for="activity" class="form-label required">Enter Content</label>
                        <textarea name="president_message_content" class="aryaeditor" id="activity"><?=ES('president_message_content')?></textarea>
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
    
    <div class="col-md-5">
        <form action="" class="extra-setting" enctype="multipart/form-data" data-page_load>
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title">President Message Image</h3>
                </div>
                <div class="card-body">
                    <div class="form-group">
                        <label for="image" class="form-label required">Image</label>
                        <input type="file" name="president_message_image" id="image" class="form-control">
                    </div>
                    <div class="form-group">
                        <label for="image">
                            <img src="<?= base_url('upload/') . $this->SiteModel->get_setting('president_message_image') ?>" alt=""
                                id="logo" class="img-fluid w-100 h-300px">
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