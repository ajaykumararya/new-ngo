<?php
$config = array(
    'membership_form' => array(
        array(
            'label' => 'Name',
            'field' => 'name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Gender',
            'field' => 'gender',
            'rules' => 'required'
        ),
        array(
            'label' => 'Date of Birth',
            'field' => 'dob',
            'rules' => 'required'
        ),
        array(
            'label' => 'Shop Name / Firm Name',
            'field' => 'firm_name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Father Name',
            'field' => 'father_name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Profession',
            'field' => 'profession',
            'rules' => 'required'
        ),
        array(
            'label' => 'Blood Group',
            'field' => 'blood_group',
            'rules' => 'required'
        ),
        array(
            'label' => 'Email',
            'field' => 'email',
            'rules' => 'required|is_unique[members.email]',
            'errors' => [
                'is_unique' => 'This %s is already exists.'
            ]
        ),
        array(
            'label' => 'Address',
            'field' => 'address',
            'rules' => 'required'
        ),
        array(
            'label' => 'State',
            'field' => 'state_id',
            'rules' => 'required'
        ),
        array(
            'label' => 'City',
            'field' => 'city_id',
            'rules' => 'required'
        ),
        array(
            'label' => 'Pincode',
            'field' => 'pincode',
            'rules' => 'required'
        )
    ),
    'update_membership_form' => array(
        array(
            'label' => 'Name',
            'field' => 'name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Gender',
            'field' => 'gender',
            'rules' => 'required'
        ),
        array(
            'label' => 'Date of Birth',
            'field' => 'my_dob',
            'rules' => 'required'
        ),
        array(
            'label' => 'Father Name',
            'field' => 'father_name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Profession',
            'field' => 'profession',
            'rules' => 'required'
        ),
        array(
            'label' => 'Shop Name / Firm Name',
            'field' => 'firm_name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Blood Group',
            'field' => 'blood_group',
            'rules' => 'required'
        ),
        array(
            'label' => 'Email',
            'field' => 'email',
            'rules' => 'required'
        ),
        array(
            'label' => 'Address',
            'field' => 'address',
            'rules' => 'required'
        ),
        array(
            'label' => 'State',
            'field' => 'state_id',
            'rules' => 'required'
        ),
        array(
            'label' => 'City',
            'field' => 'city_id',
            'rules' => 'required'
        ),
        array(
            'label' => 'Pincode',
            'field' => 'pincode',
            'rules' => 'required'
        )
    ),
    'adddonor' => [
        array(
            'label' => 'Name',
            'field' => 'name',
            'rules' => 'required'
        ),
        array(
            'label' => 'Mobile',
            'field' => 'mobile',
            'rules' => 'required|is_unique[donor.mobile]',
            'errors' => [
                'is_unique' => 'This %s already Exists in account.'
            ]
        ),
        array(
            'label' => 'Pan',
            'field' => 'pan',
            'rules' => 'required'
        ),
        array(
            'label' => 'State',
            'field' => 'state_id',
            'rules' => 'required'
        ),
        array(
            'label' => 'District',
            'field' => 'city_id',
            'rules' => 'required'
        ),
    ]
);