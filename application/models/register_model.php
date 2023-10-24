<?php
class register_model extends CI_Model
{
    public function __construct()
    {
        parent::__construct();

        $this->load->database();
    }

    public function register()
    {

        $personal_info = array(
            'cust_lname' => $this->input->post('txtlname'),
            'cust_fname' => $this->input->post('txtfname'),
            'cust_bday' => $this->input->post('txtbday'),
            'cust_gender' => $this->input->post('txtgender'),
            'cust_address' => $this->input->post('txtaddress'),
            'cust_phone' => $this->input->post('txtphone'),
            'cust_email' => $this->input->post('txtemail'),
            'cust_dateRegistered' => date('Y-m-d H:i:s')
        );

        $isCustomerAdded = $this->db->insert('customers', $personal_info);

        $userAccess_info = array(
            'user_name' => $this->input->post('txtuser'),
            'user_pass' => md5($this->input->post('txtpass')),
            'user_lvl' => 2,
            'cust_id' => $this->db->insert_id(),
            'isApproved' => 0
        );

        $isUserAdded = $this->db->insert('users', $userAccess_info);

        if ($isCustomerAdded && $isUserAdded) {
            return true;
        } else {
            return false;
        }
    }
}
