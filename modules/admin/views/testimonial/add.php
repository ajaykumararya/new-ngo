<form action="" class="testimonial" id="add-form">
    <div class="{card_class}">
        <div class="card-header">
            <h3 class="card-title">Add Testimonial</h3>
        </div>
        <div class="card-body">
            <div class="form-group">
                <label for="" class="form-label required">Name</label>
                <input type="text" name="name" placeholder="Enter Name" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label required">Image</label>
                <input type="file" name="image" class="form-control">
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label required">Message</label>
                <textarea name="message" class="form-control" placeholder="Message" id=""></textarea>
            </div>
            <div class="form-group mt-3">
                <label for="" class="form-label required">Designation</label>
                <input type="text" name="designation" placeholder="Designation" class="form-control">

            </div>
        </div>
        <div class="card-footer">
            {publish_button}
        </div>
    </div>
</form>