<?php

namespace App\Models;
use CodeIgniter\Model;

class CompetitionModel extends Model{
  protected $table = 'competition';
  protected $primaryKey = 'id';
  protected $allowedFields = ['id','name','age','email','phone','address','nacionality','category','artwork_name','description','created_at'];
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