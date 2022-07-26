<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\StandModel;

class Home extends BaseController
{
    public function index()
    {
      echo view('templates/header');
      echo view('navbar');
      echo view('competition');
      echo view('gallery');
      echo view('stands');
      echo view('honorees');
      echo view('news');
      echo view('newsletter');
      echo view('auspice');
      echo view('templates/footer');
    }

    public function save_newsletter(){
      $data = [];
      $user_model = new UserModel();
      if( $this->request->getMethod() == 'post' ){

        $rules = [
          'name'            => ['label' => 'nombre', 'rules' => 'required|min_length[3]|max_length[20]'],
          'lastname'        => ['label' => 'apellido', 'rules' => 'required|min_length[3]|max_length[20]'],
          'email'           => ['label' => 'correo electrónico', 'rules' => 'required|min_length[6]|max_length[250]|valid_email|is_unique[newsletter_users.email]'],
        ];

        if( !$this->validate($rules) ){
          return redirect()->to( base_url('home/message?status=error&id=1') );
        }else{

          $userData = [
            'name'     => ucwords(strtolower( $this->request->getVar('name') )),
            'lastname' => ucwords(strtolower( $this->request->getVar('lastname') )),
            'email'    => strtolower( $this->request->getVar('email') ),
          ];

          $user_model->save($userData);
          return redirect()->to( base_url('home/message?status=success&id=1') );
        }
        echo json_encode($data);
      }
    }//end function


    public function message(){

      echo view('templates/header');
      echo view('navbar');
      
      if( $this->request->getMethod() == 'get' ){

        $status = $this->request->getVar('status');
        $data['id'] = $this->request->getVar('id');

        if( $status == 'error' ){

          echo view('templates/error', $data);
  
        }else if( $status == 'success' ){
          
          echo view('templates/success', $data);
        
        }
      }
      echo view('templates/footer');
    }

    public function stands(){
      $data = [];
      if( $this->request->getMethod() == 'post'){
      
        $rules = [
          'email' => ['label' => 'correo electrónico', 'rules' => 'required|min_length[6]|max_length[250]|is_unique[stands.email]|valid_email']
        ];

        if( !$this->validate($rules) ){
          $data['validation'] = $this->validator;

        }else{
          $stand_model = new StandModel();

          $userData = [
            'email'             => $this->request->getVar('email'),
            'name'              => $this->request->getVar('name'),
            'rrss'              => $this->request->getVar('rrss'),
            'description'       => $this->request->getVar('description'),
            'resp_name'         => $this->request->getVar('resp_name'),
            'resp_email'        => $this->request->getVar('resp_email'),
            'resp_phone'        => $this->request->getVar('resp_phone'),
            'resp_activity'     => $this->request->getVar('radio_activity'),
            'resp_sii'          => $this->request->getVar('sii'),
            'resp_participants' => $this->request->getVar('participants'),
            'bank_titular'      => $this->request->getVar('bank_name'),
            'bank_rut'          => $this->request->getVar('bank_rut'),
            'bank_email'        => $this->request->getVar('bank_email'),
            'bank_name'         => $this->request->getVar('bank_name'),
            'bank_type'         => $this->request->getVar('bank_type'),
            'bank_number'       => $this->request->getVar('bank_number')
          ];

          $stand_model->save($userData);
          $user_id = $stand_model->insertID();

          $logo = $this->request->getFile('logo');
          $pase = $this->request->getFile('pase');

          if( $logo ){
              $ext = pathinfo( $logo->getName(), PATHINFO_EXTENSION );
              $filename = 'logo_'.uniqidReal(6).'.'.$ext; 
              $logo->move(ROOTPATH.'public/files/stands/'.$user_id.'/', $filename);
          }
          if( $pase ){
            $ext = pathinfo( $pase->getName(), PATHINFO_EXTENSION );
            $filename = 'pase_'.uniqidReal(6).'.'.$ext; 
            $pase->move(ROOTPATH.'public/files/stands/'.$user_id.'/', $filename);
          }

          return redirect()->to( base_url('home/message?status=success&id=2') );

        }
      }
      
      echo view('templates/header');
      echo view('navbar');
      echo view('forms/stands', $data);
      echo view('templates/footer');
      


      
      
    
    }


}//end class
