<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');

class User_model extends Model {
      
    public function read(): array {  
        return $this->db->table('jmr_users')->get_all(); 
    }

    public function create($jmr_last_name, $jmr_first_name, $jmr_email, $jmr_gender, $jmr_address) {
       
        $data = array(
            'jmr_last_name' => $jmr_last_name,
            'jmr_first_name' => $jmr_first_name,
            'jmr_email' => $jmr_email,
            'jmr_gender' => $jmr_gender,
            'jmr_address' => $jmr_address,
        );

        return $this->db->table('jmr_users')->insert($data);
    }

    public function get_one($id) {
        return $this->db->table('jmr_users')->where('id', $id)->get();
    }    

    public function update($jmr_last_name, $jmr_first_name, $jmr_email, $jmr_gender, $jmr_address, $id) {

        $data = array(
            'jmr_last_name' => $jmr_last_name,
            'jmr_first_name'=> $jmr_first_name,
            'jmr_email'=> $jmr_email,
            'jmr_gender'=> $jmr_gender,
            'jmr_address'=> $jmr_address
        );

        return $this->db->table('jmr_users')->where('id', $id)->update($data);
    }
       

    public function delete($id){
        return $this->db->table('jmr_users')->where('id', $id)->delete();
    }
}
?>
