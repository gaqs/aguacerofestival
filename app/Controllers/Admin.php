<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\StandModel;
use App\Models\CompetitionModel;

class Admin extends BaseController
{
   public function index(){
      //var_dump( session()->getTempdata() );
      //session()->destroy();
   }

   public function stands(){
      
      $stand_model = new StandModel();
      $data['stands'] = $stand_model->findAll();

      $token = $this->request->getVar('token');
      $db = db_connect();
      $builder = $db->table('security_tokens')->where('token', $token)->get()->getResult();

      $data['token'] = $token;

      if( !empty($builder) ){
         echo view('templates/header');
         echo view('navbar');
         echo view('admin/stands', $data);
         echo view('templates/footer');
      }else{
         echo 'No tiene permisos suficientes para acceder a este sitio.';
      }

   }

   public function show_stand(){
      $stand_model = new StandModel();

      $id = $this->request->getVar('id');
      $data['stand'] = $stand_model->where('id', $id)->first();

      $dir = ROOTPATH . 'public/files/stands/' . $id . '/';

      $data['stand']['logo'] = array_map('basename', glob($dir."logo_*", GLOB_BRACE));
      $data['stand']['pase'] = array_map('basename', glob($dir."pase_*", GLOB_BRACE));

      echo view('admin/stand_modal',$data);

   }

   public function full_stands(){
      //var_dump( session()->getTempdata('loggedIn') );
      $token = $this->request->getVar('token');
      $db = db_connect();
      $builder = $db->table('security_tokens')->where('token', $token)->get()->getResult();

      if( !empty($builder) ){
         $stand_model = new StandModel();
         $builder = $stand_model->findAll();
         $data['stand'] = $builder;

         //echo view('templates/header');
         //echo view('navbar');
         echo view('admin/stand_table', $data);
         //echo view('templates/footer');
      }else{
         echo 'No tiene permisos suficientes para acceder a este sitio.';
      }
       
   }

   public function competition(){

      $comp_model = new CompetitionModel();
      $data['competition'] = $comp_model->findAll();

      $token = $this->request->getVar('token');
      $db = db_connect();
      $builder = $db->table('security_tokens')->where('token', $token)->get()->getResult();

      $data['token'] = $token;

      if( !empty($builder) ){
         echo view('templates/header');
         echo view('navbar');
         echo view('admin/competition', $data);
         echo view('templates/footer');
      }else{
         echo 'No tiene permisos suficientes para acceder a este sitio.';
      }

   }

   public function show_competition(){
      $comp_model = new CompetitionModel();

      $id = $this->request->getVar('id');
      $data['competition'] = $comp_model->where('id', $id)->first();

      $dir = ROOTPATH . 'public/files/competition/' . $id . '/';

      $filename = array_map('basename', glob($dir."*.{jpg,png,pdf}", GLOB_BRACE));
      $data['image'] = base_url().'/public/files/competition/'.$id.'/'.$filename[0];

      echo view('admin/competition_modal',$data);

   }

   public function full_competition(){
      //var_dump( session()->getTempdata('loggedIn') );
      $token = $this->request->getVar('token');
      $db = db_connect();
      $builder = $db->table('security_tokens')->where('token', $token)->get()->getResult();

      if( !empty($builder) ){
         $comp_model = new CompetitionModel();
         $builder = $comp_model->findAll();
         $data['competition'] = $builder;

         //echo view('templates/header');
         //echo view('navbar');
         echo view('admin/competition_table', $data);
         //echo view('templates/footer');
      }else{
         echo 'No tiene permisos suficientes para acceder a este sitio.';
      }
   }

   public function newsletter(){

      $db = db_connect();
      $builder = $db->table('newsletter_users')
                     ->select('email')
                     ->get()
                     ->getResultArray();

      for ($i=0; $i < count($builder); $i++) { 
         echo strtolower($builder[$i]['email']).'<br>';
      }
   }

   public function send_email_to(){
      
      $stand_model = new StandModel();
      $data = $stand_model->find([1,2,3,4,5,6,7,8,9,10,11,12,13,14]);
    
      for ($i=0; $i < count($data); $i++) { 
        $userData = [
            'name'         => $data[$i]['name'],
            'resp_name'    => $data[$i]['resp_name'],
            'resp_email'   => $data[$i]['resp_email'],
            'resp_phone'   => $data[$i]['resp_phone'],
            'medium'       => $data[$i]['medium'],
            'big'          => $data[$i]['big'],
            'created_at'   => $data[$i]['created_at']
         ];

        var_dump($userData);
 
        $message = view('email/stands', $userData);
        //send_email($userData['resp_email'], '', 'Postulacion correcta', $message, '');
      }
    }


}