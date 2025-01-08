<div class="container mt-5">
    <form class="membership-form" method="post" enctype="multipart/form-data">
        <div class="card p-0 border-danger">
            <div class="card-header border-bottom border-danger bg-theme">
                <h2 class="card-title text-white"><b>Membership Form</b></h2>
            </div>
            <div class="card-body">
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Name<span id="red">*</span> :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="name" required="" value="" class="form-control" placeholder="Name"
                                autocomplete="off">
                        </div>
                        <div class="col-md-3">
                            <label for="gender">Gender<span id="red">*</span> :</label>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" required="" name="gender">
                                <option value="male">Male</option>
                                <option value="female">Female</option>
                                <option value="other">Other</option>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Date of Birth<span id="red">*</span> :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="date" name="dob" value="" class="form-control">
                        </div>
                        <div class="col-md-3">
                            <label for="">Father Name<span id="red">*</span> :</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="father_name" required="" value="" class="form-control"
                                placeholder="Father Name">
                        </div>
                    </div>
                </div>

                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Profession<span id="red"></span>:</label>
                        </div>
                        <div class="col-md-3">
                            <select class="form-control" name="profession">
                                <option value="">Select Profession</option>
                                <option value="Government Job">Government Job</option>
                                <option value="Private Job">Private Job</option>
                                <option value="Police">Police</option>
                                <option value="Army">Army</option>
                                <option value="Farmer">Farmer</option>
                                <option value="Self Business">Self Business</option>
                                <option value="Student">Student</option>
                                <option value="House Wife">House Wife</option>
                            </select>
                        </div>
                        <div class="col-md-3">
                            <label for="">Blood Group<span id="red">*</span>:</label>
                        </div>
                        <div class="col-md-3">
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
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">State<span id="red">*</span> :</label>
                        </div>
                        <div class="col-md-3">
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
                        <div class="col-md-3">
                            <label for="">District<span id="red">*</span>: <span id="load"></span></label>

                        </div>
                        <div class="col-md-3 form-group-city">
                            <select class="form-control list-cities" name="city_id" data-control="select2"
                                data-placeholder="Select a City">
                                <option></option>
                            </select>
                        </div>
                    </div>
                </div>

                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Mobile No.<span id="red">*</span>:</label>
                        </div>

                        <div class="col-md-3">
                            <input type="text" required="" name="mobile" value="" class="form-control"
                                placeholder="Mobile Number">
                        </div>
                        <div class="col-md-3">
                            <label for="">Aadhar No.<span id="red">*</span>:</label>
                        </div>

                        <div class="col-md-3">
                            <input type="text" name="aadhar_no" value="" class="form-control" placeholder="Aadhar No.">
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Address<span id="red">*</span>:</label>
                        </div>
                        <div class="col-md-9">
                            <textarea name="address" required="" placeholder="Address" class="form-control"></textarea>
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Pin Code<span id="red">*</span>:</label>
                        </div>
                        <div class="col-md-3">
                            <input type="text" name="pincode" value="" class="form-control" placeholder="Pincode"
                                required="">
                        </div>
                        <div class="col-md-3">
                            <label for="">Email<span id="red"></span>:</label>
                        </div>
                        <div class="col-md-3">
                            <input type="email" name="email" value="" class="form-control" placeholder="Email">
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <label for="">Profile Picture<span id="red"></span>:</label>
                        </div>
                        <div class="col-md-3 image_div_col">
                            <div class="image_preview_div">
                                <img id="img1" src="webimg/avtar.png" alt="">
                                <label for="profile_img"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                <input type="file" id="profile_img" data-id="img1" style="visibility:hidden"
                                    accept=".png, .jpg, .jpeg" class="form-control-file border file1" name="profile">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
                <div class="form-group">
                    <div class="row">
                        <div class="col-md-3">
                            <select class="form-control" name="doc_type" id="drop">
                                <option value="">Select Your ID</option>
                                <option value="Aadhar Card">Aadhar Card</option>
                                <option value="PAN Card">PAN Card</option>
                                <option value="Voter Card">Voter Card</option>
                                <option value="Driving Licence">Driving Licence</option>
                                <option value="Rashan Card">Rashan Card</option>
                                <option value="Class 10th Marksheet">Class 10th Marksheet</option>
                            </select>
                        </div>
                        <div class="col-md-3 image_div_col">
                            <div class="image_preview_div">
                                <img id="img2" src="webimg/id.png" alt="">
                                <label for="aadhar"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                <input type="file" data-id="img2" id="aadhar" style="visibility:hidden"
                                    accept=".png, .jpg, .jpeg" class="form-control-file border file2"
                                    name="doc_file">
                            </div>
                        </div>
                        <div class="col-md-3">
                            <label for="" id="label">Other Document</label>
                        </div>
                        <div class="col-md-3 image_div_col">
                            <div class="image_preview_div">
                                <img id="img3" src="webimg/id.png" alt="">
                                <label for="press_id"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                <input type="file" id="press_id" data-id="img3" style="visibility:hidden"
                                    accept="application/pdf,application/vnd.ms-excel,.png, .jpg, .jpeg .pdf"
                                    class="form-control-file border file3" name="other_doc">
                            </div>
                        </div>
                    </div>
                </div>
                <div class="line-all">
                </div>
            </div>
            <div class="card-footer border-danger border-top">
                <button type="submit" id="submit" class="btn btn-grad sub-btn pl-4 pr-4 pt-2 pb-2 mb-2"
                    name="button">Register</button>
            </div>
        </div>
    </form>
</div>