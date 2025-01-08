<?php
class Member_model extends MY_Model
{
    function get_switch($case = 'all', $condition = [], $withCenter = true)
    {
        $this->db->select('m.*,
            district.DISTRICT_NAME')
            ->from('members as m')
            ->join('state', 'state.STATE_ID = m.state_id')
            ->join('district', 'district.DISTRICT_ID = m.city_id and district.STATE_ID = state.STATE_ID')
        ;
        switch ($case) {
            case 'verified':
                $this->db->where('m.status!=', 0);
                break;
            case 'unverified':
                $this->db->where('m.status', 0);
                break;
        }
        return $this->db->get();
    }
    function unverified_list()
    {
        return $this->get_switch('unverified');
    }
    function verified_list()
    {
        return $this->get_switch('verified');
    }
}
?>