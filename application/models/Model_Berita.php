<?php

class Model_Berita extends CI_Model
{

    function tampil_data_berita()
    {
        $data = $this->db->query("SELECT*FROM data_karyawan");
        return $data;
    }

    function simpan_berita($id, $nama_lengkap, $tgl_lahir, $alamat, $email, $jabatan)
    {
        $data = $this->db->query("INSERT INTO data_karyawan (id,nama_lengkap,tgl_lahir,alamat,email,jabatan) value('$id','$nama_lengkap','$tgl_lahir','$alamat','$email','$jabatan')");
        return $data;
    }

    function update_berita($id, $nama_lengkap, $tgl_lahir, $alamat, $email, $jabatan)
    {
        $data = $this->db->query("UPDATE data_karyawan set nama_lengkap='$nama_lengkap',tgl_lahir='$tgl_lahir',alamat='$alamat',email='$email',jabatan='$jabatan' where id='$id'");
        return $data;
    }
    function edit_berita($id)
    {
        $data = $this->db->query("SELECT*FROM data_karyawan where id='$id'");
        return $data;
    }
    function hapus_berita($id)
    {
        $data = $this->db->query("DELETE FROM data_karyawan where id='$id'");
        return $data;
    }
}
