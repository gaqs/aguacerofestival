<?php

namespace App\Models;
use CodeIgniter\Model;

class StandModel extends Model{
  protected $table = 'stands';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id','name','rrss','description','stands','resp_name','resp_email','resp_phone', 'resp_country', 'resp_participants','business_name','business_rut','business_sii','business_sell','business_legalname','business_legaladdress','business_legalphone','bank_titular','bank_rut','bank_email','bank_name','bank_type','bank_number','created_at'];
  protected $useSoftDeletes = false;
  protected $useTimestamps = true;
  protected $createdField  = 'created_at';
  protected $updatedField  = 'updated_at';
  protected $deletedField  = 'deleted_at';
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