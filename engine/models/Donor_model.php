<?php
class Donor_model extends MY_Model
{
    function get_switch($case = 'all', $condition = [], $withCenter = true)
    {
        extract($condition);
        $this->db->select('d.*,
            district.DISTRICT_NAME,
            COALESCE(SUM(dr.amount),0) as total_donate')
            ->from('donor as d')
            ->join('state', 'state.STATE_ID = d.state_id')
            ->join('donor_receipts as dr' ,'dr.donor_id = d.id','left')
            ->group_by('d.id')
            ->join('district', 'district.DISTRICT_ID = d.city_id and district.STATE_ID = state.STATE_ID')
        ;
        switch ($case) {
            case 'via_id':
                $this->db->where('d.id', $id);
                break;
            case 'verified':
                $this->db->where('d.status!=', 0);
                break;
            case 'get_verified_donor':
                $this->db->where('d.status', 1);
                $this->db->where('d.id', $id);
                break;
            case 'unverified':
                $this->db->where('d.status', 0);
                break;
        }
        return $this->db->get();
    }
    function all($where = [])
    {
        return $this->get_switch('all', $where);
    }
    function unverified_list()
    {
        return $this->get_switch('unverified');
    }
    function verified_list()
    {
        return $this->get_switch('verified');
    }
    function get_verified_donor($where = [])
    {
        return $this->get_switch('get_verified_donor', $where);
    }
    function get_via_id($id)
    {
        return $this->get_switch('via_id', ['id' => $id]);
    }
}
?>