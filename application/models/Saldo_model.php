<?php


class Saldo_model extends CI_Model
{

    public function __construct()
    {
        parent::__construct();
        //Do your magic here
    }

    public function insertImageLink($id, $url){
      $data = array(
          'laporanID' => $id,
          'url_gambar' => $url,
        );

      $this->db->insert('gambar_laporan', $data);

      // $this->db->where('image_link', $url);
      // $id_image = $this->db->get('laporan_image')->row()->laporanimageID;
      // return $id_image;
    }

    public function saveLaporan($data){

        $this->db->insert('laporan', $data);
        return $this->db->insert_id();
      
    }

}
