<?php
namespace App\Controllers;
use App\Models\UserModel;
use App\Models\StandModel;
use App\Models\CompetitionModel;

class Home extends BaseController
{
    public function index()
    {
      echo view('templates/header');
      echo view('navbar');
      echo view('countdown');
      echo view('carousel');
      echo view('honorees');
      echo view('competition');
      echo view('gallery');      
      echo view('news');
      echo view('aboutus');
      echo view('auspice');
      echo view('templates/footer');
    }

    public function all_stands(){
      echo view('templates/header');
      echo view('navbar');
      echo view('stands_full');
      echo view('templates/footer');
    }

    public function briefing()
    {
      echo view('templates/header');
      echo view('navbar');
      echo view('briefing');
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

    public function competition(){
      $data = [];

      if( $this->request->getMethod() == 'post'){
      
        $rules = [
          'email' => ['label' => 'correo electrónico', 'rules' => 'required|min_length[6]|max_length[250]|valid_email'],
          'comic' => ['label' => 'archivo', 'rules' => 'max_size[comic,20000]|ext_in[comic,png,jpg,pdf]'] 
        ];

        if( !$this->validate($rules) ){
          $data['validation'] = $this->validator;

        }else{
          $stand_model = new CompetitionModel();

          $userData = [
            'name'          => $this->request->getVar('name'),
            'age'           => $this->request->getVar('age'),
            'email'         => $this->request->getVar('email'),
            'phone'         => $this->request->getVar('phone'),
            'address'       => $this->request->getVar('address'),
            'nacionality'   => $this->request->getVar('nacionality'),
            'category'      => $this->request->getVar('category'),
            'artwork_name'  => $this->request->getVar('artwork_name'),
            'description'   => $this->request->getVar('description'),

            'created_at'    => date('y-m-d H:i:s'),
          ];

          $stand_model->save($userData);
          $user_id = $stand_model->insertID();
          
          $files = $this->request->getFiles();
          $comics = $files['comic'];
          
          if( $comics ){
            foreach( $comics as $comic ){

              if ($comic->isValid() && ! $comic->hasMoved()) {

                $artwork_name = ucwords(strtolower($userData['artwork_name']));
                $name = ucwords(strtolower($userData['name']));

                $ext = pathinfo( $comic->getName(), PATHINFO_EXTENSION );
                $filename = str_replace(' ', '',$artwork_name.$name).'.'.$ext;  //trim($userData['artwork_name'].$userData['name'])
                $comic->move(ROOTPATH.'public/files/competition/'.$user_id.'/', $filename);

              }
            }
          }

          $message = view('email/competition', $userData);
          //send_email($userData['email'], '', 'Postulacion correcta', $message, '');
        
          return redirect()->to( base_url('home/message?status=success&id=3') );

        }
      }

      echo view('templates/header');
      echo view('navbar');
      echo view('forms/competition', $data);
      echo view('templates/footer');
    }

    public function stands(){
      $data = [];
      if( $this->request->getMethod() == 'post'){
      
        $rules = [
          'resp_email' => ['label' => 'correo electrónico', 'rules' => 'required|min_length[6]|max_length[250]|is_unique[stands.resp_email]|valid_email']
        ];

        if( !$this->validate($rules) ){
          $data['validation'] = $this->validator;

        }else{
          $stand_model = new StandModel();

          $userData = [
            'name'              => $this->request->getVar('name'),
            'rrss'              => $this->request->getVar('rrss'),
            'description'       => $this->request->getVar('description'),
            'medium'            => $this->request->getVar('medium'),
            'big'               => $this->request->getVar('big'),

            'resp_name'         => $this->request->getVar('resp_name'),
            'resp_email'        => $this->request->getVar('resp_email'),
            'resp_phone'        => $this->request->getVar('resp_phone'),
            'resp_participants' => $this->request->getVar('participants'),

            'business_name'     => $this->request->getVar('business_name'),
            'business_rut'      => $this->request->getVar('business_rut'),
            'business_sii'      => $this->request->getVar('business_sii'),
            'business_sell'     => $this->request->getVar('business_sell'),

            'bank_titular'      => $this->request->getVar('bank_titular'),
            'bank_rut'          => $this->request->getVar('bank_rut'),
            'bank_email'        => $this->request->getVar('bank_email'),
            'bank_name'         => $this->request->getVar('bank_name'),
            'bank_type'         => $this->request->getVar('bank_type'),
            'bank_number'       => $this->request->getVar('bank_number'),

            'created_at'        => date('y-m-d H:i:s'),
          ];

          $stand_model->save($userData);
          $user_id = $stand_model->insertID();
          
          $files = $this->request->getFiles();

          $logos  = $files['logos'];
          $pase   = $files['pase'];

          if( $logos ){
            for ($i=0; $i < count($logos); $i++) { 
              $ext = pathinfo( $logos[$i]->getName(), PATHINFO_EXTENSION );
              $filename = 'logo_'.uniqidReal(6).'.'.$ext; 
              $logos[$i]->move(ROOTPATH.'public/files/stands/'.$user_id.'/', $filename);
            }    
          }
          
          if( $pase ){
            $ext = pathinfo( $pase->getName(), PATHINFO_EXTENSION );
            $filename = 'pase_'.uniqidReal(6).'.'.$ext; 
            $pase->move(ROOTPATH.'public/files/stands/'.$user_id.'/', $filename);
          }

          $message = view('email/stands', $userData);
          send_email($userData['resp_email'], '', 'Postulacion correcta', $message, '');
        
          return redirect()->to( base_url('home/message?status=success&id=2') );

        }
      }
      
      echo view('templates/header');
      echo view('navbar');
      echo view('forms/stands', $data);
      echo view('templates/footer');

    }

    public function test_email(){

      $userData = [
        'name' => 'Stand Aguacero',
        'resp_name' => 'Gustavo Quilodrán',
        'resp_email' => 'gaqs.02@gmail.com',
        'resp_phone' => '+569 946778',
        'medium' => '1',
        'created_at' => '2022-07-31 14:40:15'
      ];

      $message = view('email/stands', $userData);
      send_email($userData['resp_email'], '', 'Postulacion correcta', $message, '');
    }

  

}//end class
