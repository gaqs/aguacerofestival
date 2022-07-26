<?php

namespace App\Models;
use CodeIgniter\Model;

class StandModel extends Model{
  protected $table = 'stands';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id','email','name','rrss','description','resp_name','resp_email','resp_phone','resp_activity','resp_sii','resp_participants','bank_titular','bank_rut','bank_email','bank_name','bank_type','bank_number','created_at'];
  protected $useSoftDeletes = true;
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $beforeInsert = ['beforeInsert'];
  protected $beforeUpdate = ['beforeUpdate'];

  //antes de insertar, el modelo devuelve las pass cifrada
  protected function beforeInsert(array $data){
    $data['data']['created_at'] = date('Y-m-d H:i:s');
    return $data;
  }

  protected function beforeUpdate(array $data){
    $data['data']['updated_at'] = date('Y-m-d H:i:s');
    return $data;
  }

}

 ?>