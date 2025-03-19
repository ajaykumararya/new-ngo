<div class="row">
    <div class="col-md-12">
        <form action="" id="add-donor">
            <div class="card border-primary">
                <div class="card-header bg-primary">
                    <h3 class="card-title text-white"><i class="fa fa-plus"></i> Add Donor</h3>
                </div>
                <div class="card-body row">
                    <div class="col-md-4 form-group mb-3">
                        <label for="" class="form-label required">Name</label>
                        <input type="text" name="name" class="form-control" placeholder="Enter Name">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <label for="" class="form-label required">Mobile</label>
                        <input type="text" name="mobile" class="form-control" placeholder="Enter Mobile">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <label for="" class="form-label required">Image</label>
                        <input type="file" name="image" class="form-control">
                    </div>
                    <div class="col-md-4 form-group mb-3">
                        <label for="" class="form-label required">PAN </label>
                        <input type="text" name="pan" class="form-control" placeholder="PAN">
                    </div>
                    <div class="form-group mb-3 col-md-4">
                        <label class="form-label required required">Select State </label>
                        <select class="form-select get_city" name="state_id">
                            <option value="">--Select--</option>
                            <?php
                            $state = $this->db->order_by('STATE_NAME', 'ASC')->get('state');
                            if ($state->num_rows()) {
                                foreach ($state->result() as $row)
                                    echo '<option value="' . $row->STATE_ID . '">' . $row->STATE_NAME . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="form-group mb-3 col-md-4 form-group mb-3 form-group-city">
                        <label class="form-label required required">Select District <span id="load"></span></label>
                        <select class="form-select list-cities" name="city_id" >
                            <option></option>
                        </select>
                    </div>
                </div>
                <div class="card-footer">
                    {publish_button}
                </div>
            </div>
        </form>
    </div>
</div>