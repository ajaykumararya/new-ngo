<div class="row">
    <div class="col-md-12">
        <form action="" id="add-form">
            <div class="{card_class}">
                <div class="card-header">
                    <h3 class="card-title"><i class="fa fa-plus"></i> Add Timeline Post</h3>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col form-group mb-2">
                            <label for="title" class="form-label required">Title</label>
                            <input type="text" class="form-control" id="title" name="title" placeholder="Enter Title">
                        </div>

                        <div class="col form-group mb-2">
                            <label for="image" class="form-label required">Image</label>
                            <input type="file" class="form-control" id="image" name="image" placeholder="Enter Title">
                        </div>

                        <div class="col-md-12 form-group mb-2">
                            <label for="" class="form-label required">Description</label>
                            <textarea name="description" class="form-control" id="" placeholder="Enter Description"></textarea>
                        </div>
                        <!-- <div class="col form-group mb-2">
                            <label for="" class="form-group mb-2">Venue</label>
                            <input type="text" name="venue" placeholder="Enter Venue" class="form-control">
                        </div>
                        <div class="col form-group mb-2">
                            <label for="" class="form-group mb-2">City</label>
                            <input type="text" name="city" placeholder="Enter City" class="form-control">
                        </div>
                        
                        <div class="col form-group mb-2">
                            <label for="" class="form-group mb-2">Event Start</label>
                            <input type="text" placeholder="Select A Date" class="form-control datepicker-default">
                        </div>
                        <div class="col form-group mb-2">
                            <label for="" class="form-group mb-2">Event End</label>
                            <input type="text" placeholder="Select A Date" class="form-control datepicker-default">
                        </div> -->
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
</div>