<!-- Bootstrap 5 Membership Form in a Card -->
<style>
    .form-label {
        margin-bottom: 5px;
    }

    .form-control {
        margin-bottom: 12px;
    }
</style>
<div class="container my-5">
    <div class="card shadow">
        <div class="card-header bg-primary text-white">
            <h5 class="mb-0">Membership Form – Digital Media</h5>
        </div>
        <div class="card-body">
            <form class="custom-membership-form">
                <!-- Portal Details -->
                <h3 class="mb-3">Portal Details</h3>

                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Company Name</label>
                        <input type="text" class="form-control" name="company_name" placeholder="Enter company name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Web Portal Name</label>
                        <input type="text" class="form-control" name="portal_name" placeholder="Enter web portal name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone</label>
                        <input type="text" class="form-control" name="company_phone" placeholder="Enter phone number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Category</label>
                        <select class="form-control" name="company_category">
                            <option value="">Select category</option>
                            <option value="News">News</option>
                            <option value="Non-News">Non-News</option>
                            <option value="Religious">Religious</option>
                            <option value="Others">Others</option>
                        </select>
                    </div>


                    <div class="col-md-6">
                        <label class="form-label">Website</label>
                        <input type="url" class="form-control" name="website" placeholder="Enter website URL">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email</label>
                        <input type="email" class="form-control" name="company_email" placeholder="Enter email">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">YouTube Channel ID</label>
                        <input type="text" class="form-control" name="youtube_id"
                            placeholder="Enter YouTube Channel ID">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">YouTube Subscribers</label>
                        <input type="number" class="form-control" name="youtube_subscribers"
                            placeholder="Enter subscriber count">
                    </div>
                    <div class="col-md-3">
                        <label class="form-label">YouTube Viewers</label>
                        <input type="number" class="form-control" name="youtube_viewers"
                            placeholder="Enter total viewers">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Facebook ID</label>
                        <input type="text" class="form-control" name="facebook_id" placeholder="Enter Facebook ID">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Facebook Followers</label>
                        <input type="number" class="form-control" name="facebook_followers"
                            placeholder="Enter followers count">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Twitter ID</label>
                        <input type="text" class="form-control" name="twitter_id" placeholder="Enter Twitter ID">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Twitter Followers</label>
                        <input type="number" class="form-control" name="twitter_followers"
                            placeholder="Enter followers count">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Instagram ID</label>
                        <input type="text" class="form-control" name="instagram_id" placeholder="Enter Instagram ID">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Instagram Followers</label>
                        <input type="number" class="form-control" name="instagram_followers"
                            placeholder="Enter followers count">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">WhatsApp</label>
                        <input type="text" class="form-control" name="company_whatsapp"
                            placeholder="Enter WhatsApp number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Photo (Web Portal)</label>
                        <input type="file" class="form-control" name="portal_logo">
                    </div>
                </div>

                <!-- Divider -->
                <hr class="my-4">

                <!-- Personal Details -->
                <h3 class="mb-3">Personal Details</h3>
                <div class="row g-3">
                    <div class="col-md-6">
                        <label class="form-label">Editor Name (as per Aadhaar) <span id="red">*</span></label>
                        <input type="text" class="form-control" name="name" required placeholder="Enter full name">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Date of Birth <span id="red">*</span></label>
                        <input type="date" class="form-control" name="dob" required>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Phone <span id="red">*</span></label>
                        <input type="text" class="form-control" required name="mobile" placeholder="Enter phone number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Email ID <span id="red">*</span></label>
                        <input type="email" class="form-control" name="email" placeholder="Enter email">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">WhatsApp <span id="red">*</span></label>
                        <input type="text" class="form-control" name="whatsapp" placeholder="Enter WhatsApp number">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Gender <span id="red">*</span></label>
                        <select class="form-control" name="gender">
                            <option value="">Select gender</option>
                            <option value="Male">Male</option>
                            <option value="Female">Female</option>
                            <option value="Other">Other</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Marital Status</label>
                        <select class="form-control" name="marital_status">
                            <option value="">Select status</option>
                            <option value="Single">Single</option>
                            <option value="Married">Married</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Blood Group</label>
                        <select class="form-control" name="blood_group">
                            <option value="">Select Blood Group</option>
                            <option value="A+">A+</option>
                            <option value="A-">A-</option>
                            <option value="B+">B+</option>
                            <option value="B-">B-</option>
                            <option value="O+">O+</option>
                            <option value="O-">O-</option>
                            <option value="AB+">AB+</option>
                            <option value="AB-">AB-</option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Education</label>
                        <input type="text" class="form-control" name="education" placeholder="Enter education">
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Experience</label>
                        <input type="text" class="form-control" name="experience" placeholder="Enter experience">
                    </div>
                    <div class="col-md-6">
                        <label for="">State<span id="red">*</span> :</label>
                        <select class="form-control get_city" name="state_id" data-control="select2"
                            data-placeholder="Select a State">
                            <option value="">--Select--</option>
                            <option></option>
                            <?php
                            $state = $this->db->order_by('STATE_NAME', 'ASC')->get('state');
                            if ($state->num_rows()) {
                                foreach ($state->result() as $row)
                                    echo '<option value="' . $row->STATE_ID . '">' . $row->STATE_NAME . '</option>';
                            }
                            ?>
                        </select>
                    </div>
                    <div class="col-md-6 form-group-city">
                        <label for="">District<span id="red">*</span>: <span id="load"></span></label>
                        <select class="form-control list-cities" name="city_id" data-control="select2"
                            data-placeholder="Select a City">
                            <option></option>
                        </select>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Present Address</label>
                        <textarea class="form-control" rows="2" name="address"
                            placeholder="Enter current address"></textarea>
                    </div>
                    <div class="col-md-6">
                        <label class="form-label">Permanent Address</label>
                        <textarea class="form-control" rows="2" name="permanent_address"
                            placeholder="Enter permanent address"></textarea>
                    </div>
                    <div class="col-12">
                        <label class="form-label">Ever convicted in any case / FIR / Criminal Case?</label>
                        <select class="form-control" name="convicted">
                            <option value="">Select answer</option>
                            <option value="No">No</option>
                            <option value="Yes">Yes</option>
                        </select>
                    </div>
                </div>

                <!-- Submit Button -->
                <div class="text-end mt-4">
                    <button type="submit" class="btn btn-success">Submit Form</button>
                </div>
            </form>
        </div>
    </div>
</div>