<?php
class pagination_model extends CI_Model{

    function __construct()
    {
        parent::__construct();
    }

    //fetch books
    function get_books($limit, $start, $st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from siswa left join jurusan on siswa.kd_jurusan = jurusan.kd where siswa.nama like '%$st%' limit " . $start . ", " . $limit;
        $query = $this->db->query($sql);
        return $query->result();
    }
    
    function get_books_count($st = NULL)
    {
        if ($st == "NIL") $st = "";
        $sql = "select * from siswa left join jurusan on siswa.kd_jurusan = jurusan.kd where siswa.nama like '%$st%'";
        $query = $this->db->query($sql);
        return $query->num_rows();
    }
}
?>