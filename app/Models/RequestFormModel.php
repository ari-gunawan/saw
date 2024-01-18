<?php

namespace App\Models;

use CodeIgniter\Model;

class RequestFormModel extends Model
{
    protected $table = 'request_form';
    protected $allowedFields = ['id', 'id_pekerja', 'jenis_permintaan', 'judul', 'sampai_tanggal', 'lampiran', 'keterangan', 'approval', 'tanggal_pengajuan', 'status'];

    public function get_form($id)
    {
        $query = $this->db->table('request_form')
            // ->from('pekerja')
            ->select('request_form.*, pekerja.NAMA, master_position.PositionText, organization_structure.OrganizatioName, pekerja.NOMOR_HANDPHONE')
            ->join('pekerja', 'pekerja.id = request_form.id_pekerja')
            ->join('organization_structure', 'organization_structure.organizationId = pekerja.OrganizationId')
            ->join('organization_assignment', 'organization_structure.OrganizationCode = organization_assignment.OrganizationId')
            ->join('master_position', 'organization_assignment.Position = master_position.Position')
            // ->join('organization_structure', 'organization_structure.organizationId = pekerja.OrganizationId')
            ->where('request_form.id', $id)->get()->getResultArray();

        return $query;
    }

    function edit_data($where, $table)
    {
        return $this->db->get_where($table, $where);
    }

    function update_data($where, $data, $table)
    {
        $this->db->where($where);
        $this->db->update($table, $data);
    }

    // public function update_user($id, $data)
    // {
    //     $this->db->where('presensi', $id);
    //     $this->db->update('request_form', $data);
    // }
}
