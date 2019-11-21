<?php
 // write your name and student id here
class asprakModel extends CI_model
{

    public function addPraktikan($data){
        $this->db->insert('praktikan', $data);
    }

}