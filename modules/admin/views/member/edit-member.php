<?php
$id = $this->uri->segment(3, 0);
try {
    if (!$id)
        throw new Exception('Member id not matched');
    $id = base64_decode($id);
    // echo $id;
    $get = $this->db->where('id', $id)->get('members');
    if (!$get->num_rows())
        throw new Exception('Member not found..');
    // exit;
    $row = $get->row();
    ?>

    <style>
        body {
            overflow-x: hidden;
        }

        .line-all {
            width: 101%;
            height: 2px;
            margin-bottom: 20px;
            margin-top: 8px;
            background: rgb(255, 93, 0);
            background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
        }

        #red {
            color: red
        }

        .image_div_col label {
            position: absolute;
            font-size: 40px;
            top: 50%;
            transform: translateY(-50%);
            cursor: pointer;
            right: 30px;
        }

        .image_div_col img {
            position: absolute;
            height: 90%;
            /* width: 100%; */
            top: 50%;
            transform: translateY(-50%);
            left: 30px;
        }

        .image_div_col {
            position: relative;
            /* border: 1px solid red; */
            border-radius: 10px;
        }

        .btn-grad {
            background: rgb(255, 93, 0);
            background: radial-gradient(circle, rgba(255, 93, 0, 1) 0%, rgba(255, 51, 0, 1) 100%);
        }

        .image_preview_div {
            border: 2px solid gray;
            height: 100% !important;
            border-radius: 10px;
            padding: 5px;
        }
    </style>
    <div class="row">
        <div class="col-md-12">
            <form action="" class="edit-member">
                <div class="{card_class}">
                    <div class="card-body">
                        <input type="hidden" name="userid" value="<?=base64_encode($row->id)?>">
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Name<span id="red">*</span> :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="name" required="" value="<?= $row->name ?>"
                                        class="form-control" placeholder="Name">
                                </div>
                                <div class="col-md-3">
                                    <label for="gender">Gender<span id="red">*</span> :</label>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" id="sel1" required="" name="gender">
                                        <option value="Male" <?= $row->gender == 'Male' ? 'selected' : '' ?>
                                            selected="selected">
                                            Male</option>
                                        <option value="Female" <?= $row->gender == 'Female' ? 'selected' : '' ?>>Female
                                        </option>
                                        <option value="Other" <?= $row->gender == 'Other' ? 'selected' : '' ?>>Other</option>
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
                                    <input type="date" name="my_dob" value="<?= date('Y-m-d', strtotime($row->dob)) ?>"
                                        class="form-control">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Father Name<span id="red">*</span> :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="father_name" value="<?= $row->father_name ?>"
                                        class="form-control" placeholder="Father Name">
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
                                        <?php
                                        $professions = ['Government Job', 'Police', 'Army', 'Farmer', 'Self Business', 'Student', 'Hourse Wife'];
                                        foreach ($professions as $pr) {
                                            echo '<option value="' . $pr . '" ' . ($pr == $row->profession ? 'selected' : '') . '>' . $pr . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">Blood Group<span id="red">*</span>:</label>
                                </div>
                                <div class="col-md-3">
                                    <select class="form-control" name="blood_group">
                                        <option value="">Select Blood Group</option>
                                        <option value="A+" <?= $row->blood_group == 'A+' ? 'selected' : '' ?>>A+</option>
                                        <option value="A-" <?= $row->blood_group == 'A-' ? 'selected' : '' ?>>A-</option>
                                        <option value="B+" <?= $row->blood_group == 'B+' ? 'selected' : '' ?>>B+</option>
                                        <option value="B-" <?= $row->blood_group == 'B-' ? 'selected' : '' ?>>B-</option>
                                        <option value="O+" <?= $row->blood_group == 'O+' ? 'selected' : '' ?>>O+</option>
                                        <option value="O-" <?= $row->blood_group == 'O-' ? 'selected' : '' ?>>O-</option>
                                        <option value="AB+" <?= $row->blood_group == 'AB+' ? 'selected' : '' ?>>AB+</option>
                                        <option value="AB-" <?= $row->blood_group == 'AB-' ? 'selected' : '' ?>>AB-</option>
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
                                    <select class="form-control get_city" name="state_id"
                                        data-placeholder="Select a State">
                                        <option value="">--Select--</option>
                                        <?php
                                        $state = $this->db->order_by('STATE_NAME', 'ASC')->get('state');
                                        if ($state->num_rows()) {
                                            foreach ($state->result() as $drow)
                                                echo '<option value="' . $drow->STATE_ID . '" '.($drow->STATE_ID == $row->state_id ? 'selected' : '').'>' . $drow->STATE_NAME . '</option>';
                                        }
                                        ?>
                                    </select>
                                </div>
                                <div class="col-md-3">
                                    <label for="">District<span id="red">*</span>: <span id="load"></span></label>

                                </div>
                                <div class="col-md-3 form-group-city">
                                    <select class="form-control list-cities" name="city_id"
                                        data-placeholder="Select a City">
                                        <option value="">--Select--</option>
                                        <?php
                                        $getCities = $this->db->order_by('DISTRICT_NAME','ASC')->get('district');
                                        if($getCities->num_rows()){
                                            foreach($getCities->result() as $crow)
                                                echo '<option value="'.$crow->DISTRICT_ID.'" '.($row->city_id == $crow->DISTRICT_ID ? 'selected' : '').'>'.$crow->DISTRICT_NAME.'</option>';
                                        }
                                        ?>
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
                                    <input type="text" name="mobile" required="" value="<?=$row->mobile?>" class="form-control"
                                        placeholder="Number">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Aadhar No.<span id="red">*</span>:</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="aadhar_no" value="<?=$row->aadhar_no?>" class="form-control"
                                        placeholder="Aadhar No.">
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
                                    <input type="text" name="pincode" value="<?=$row->pincode?>" class="form-control"
                                        placeholder="Pincode">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Email<span id="red"></span>:</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="email" name="email" value="<?=$row->email?>" class="form-control" placeholder="Email">
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
                                    <textarea name="address" placeholder="Address"
                                        class="form-control"><?=$row->address?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="line-all">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Authority<span id="red">*</span>:</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="text" name="authority" value="<?=$row->authority?>" class="form-control"
                                        placeholder="Authority" required="">
                                </div>
                            </div>
                        </div>
                        <div class="line-all">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Validity Start<span id="red">*</span> :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="validity_start" value="<?=$row->validity_start?>" class="form-control"
                                        required="">
                                </div>
                                <div class="col-md-3">
                                    <label for="">Validity End<span id="red">*</span> :</label>
                                </div>
                                <div class="col-md-3">
                                    <input type="date" name="validity_end" value="<?=$row->validity_end?>" class="form-control"
                                        required="">
                                </div>
                            </div>
                        </div>
                        <div class="line-all">
                        </div>
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <label for="">Profile<span id="red"></span> :</label>
                                </div>

                                <div class="col-md-3 image_div_col">
                                    <div class="image_preview_div">
                                        <img id="img1" src="{base_url}upload/<?=$row->profile_img?>" alt="">
                                        <label for="profile_img"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                        <input type="file" id="profile_img" data-id="img1" style="visibility:hidden"
                                            accept=".png, .jpg, .jpeg" class="form-control-file border file1" name="image1">
                                    </div>
                                </div>


                            </div>
                        </div>
                        <div class="line-all">
                        </div>
                        <!-- Aadhar Front -->
                        <div class="form-group">
                            <div class="row">
                                <div class="col-md-3">
                                    <select class="form-control" name="doc_type" id="drop">
                                        <option value="">Select Your ID</option>
                                        <option value="Aadhar Card" <?=$row->doc_type == 'Aadhar Card' ? 'selected' : ''?>>Aadhar Card</option>
                                        <option value="PAN Card" <?=$row->doc_type == 'PAN Card' ? 'selected' : ''?>>PAN Card</option>

                                        <option value="Voter Card" <?=$row->doc_type == 'Voter Card' ? 'selected' : ''?>>Voter Card</option>
                                        <option value="Driving Licence" <?=$row->doc_type == 'Driving Licence' ? 'selected' : ''?>>Driving Licence</option>
                                        <option value="Rashan Card" <?=$row->doc_type == 'Rashan Card' ? 'selected' : ''?>>Rashan Card</option>
                                        <option value="Class 10th Marksheet" <?=$row->doc_type == 'Class 10th Marksheet' ? 'selected' : ''?>>Class 10th Marksheet</option>
                                    </select>
                                </div>

                                <div class="col-md-3 image_div_col">
                                    <div class="image_preview_div">
                                        <img id="img2" src="{base_url}upload/<?=$row->doc_file?>" alt="">
                                        <label for="aadhar"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                        <input type="file" data-id="img2" id="aadhar" style="visibility:hidden"
                                            accept=".png, .jpg, .jpeg" class="form-control-file border file2"
                                            name="doc_file">
                                    </div>
                                </div>


                                <!-- Aadhar Back -->
                                <div class="col-md-3">
                                    <label for="">Other Document<span id="red"></span> :</label>
                                </div>
                                <div class="col-md-3 image_div_col">
                                    <div class="image_preview_div">
                                        <img id="img3" src="{base_url}upload/<?=$row->other_doc?>" alt="">
                                        <label for="press_id"><i class="fa fa-camera" aria-hidden="true"></i></label>
                                        <input type="file" id="press_id" data-id="img3" style="visibility:hidden"
                                            accept="application/pdf,application/vnd.ms-excel,.png, .jpg, .jpeg .pdf"
                                            class="form-control-file border file3" name="other_doc">
                                    </div>
                                </div>

                                <script type="text/javascript">

                                    function preview() {
                                        $('.preview').html(
                                            `
                                                    <style>
                                                    .image_preview{
                                                     position: fixed;
                                                     top: 50%;
                                                     left: 50%;
                                                     transform:translate(-50%,-50%);
                                                     height: 500px;
                                                     width: 360px;
                                                     background: #fff;
                                                     box-shadow: 0px 0px 5px 1px lightgray;
                                                     border-radius: 10px;
                                                     z-index: 999;
                                                     overflow: hidden;
                                                     display: none;
                                                 }
                                                 .image_preview div{
                                                     height: 100%;
                                                     width: 100%;
                                                     position: relative;

                                                 }
                                                 .image_preview img{
                                                     width: 90%;
                                                     height: auto;
                                                     position: absolute;
                                                     top: 50%;
                                                     left: 50%;
                                                     transform:translate(-50%,-50%);
                                                     z-index: 999999999;
                                                 }
                                                 .image_preview p{
                                                     padding: 10px;
                                                     background: #e62e25;
                                                     text-align: center;
                                                     color: #fff;
                                                     font-size: 20px;
                                                     transition: .3s;
                                                     cursor: pointer;
                                                 }
                                                 img{
                                                     cursor: pointer;
                                                 }
                                                 .image_preview p:hover{
                                                     background: #e8524a;
                                                     transition: .3s;
                                                 }
                                                    </style>
                                                    <div class="image_preview">
                                                     <div class="">
                                                         <p id="preview_cancel">Cancel</p>
                                                         <img src="complain_img/Screenshot (2)_0412022140228.png" alt="">
                                                     </div>
                                                 </div>
                                                    `
                                        );
                                        $(document).on('click', 'img', function () {
                                            var src = $(this).attr('src');
                                            $('.image_preview img').attr('src', src);
                                            $('.image_preview').css('display', 'block');
                                        })
                                        $(document).on('click', '#preview_cancel', function () {
                                            $('.image_preview').css('display', 'none');
                                        })
                                    }
                                    preview();
                                    $(document).on('change', 'input[type=file]', function (event) {
                                        var id = $(this).attr('data-id');
                                        var img = document.getElementById(`${id}`);
                                        var reader = new FileReader();
                                        reader.onload = function () {
                                            img.src = reader.result;
                                        };
                                        reader.readAsDataURL(event.target.files[0]);
                                    })
                                </script>

                            </div>
                        </div>
                    </div>
                    <div class="card-footer">
                        {publish_button}
                    </div>
                </div>
            </form>
        </div>
    </div>
    <?php
} catch (Exception $e) {
    echo alert($e->getMessage(), 'danger');
}

?>