<?php

namespace App\Controllers\dashboard;

use App\Models\NoticiasModel;
use App\Models\InfluencerModel;
use App\Controllers\BaseController;

class DashboardController extends BaseController
{
    public function index()
    {

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];

        $data=[
            'usuario2'=> 'otro julian'
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/Dashboard', $data); 
        echo view('dashboard/templates/footer'); 
    }

    public function influencers()
    {

        $influ = new InfluencerModel();
        

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];
        
       //var_dump($color[1]);

        $data=[
            'influ'=> $influ->asObject()->paginate(5),
            'pager' => $influ->pager,
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/influencers', $data); 
        echo view('dashboard/templates/footer'); 
    }

    public function mensajes()
    {

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];

        $data=[
            'usuario2'=> 'otro julian'
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/mensajes', $data); 
        echo view('dashboard/templates/footer'); 
    }

    public function noticias()
    {

        $noticia=new NoticiasModel();

        $misNoti= $noticia->findAll();

        $data=['noticias'=>$misNoti];
        $this->_loadDefaultView('noticias',$data,'noticias');
        
    }

    public function nuevaNoticia()
    {

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];

        $data=[
            'usuario2'=> 'otro julian'
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/nueva-noticia', $data); 
        echo view('dashboard/templates/footer'); 
    }

    public function representantes()
    {

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];

        $data=[
            'usuario2'=> 'otro julian'
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/representante'); 
        echo view('dashboard/templates/footer'); 
    }

    public function visitantes()
    {

        $dataheader=[ 
            'usuario'=> 'Julian Andres'
        ];

        $data=[
            'usuario2'=> 'otro julian'
        ];

        echo view('dashboard/templates/header',$dataheader); 
        echo view('dashboard/visitantes', $data); 
        echo view('dashboard/templates/footer'); 
    }

    public function show(){

        $influencer = new InfluencerModel();
        
        var_dump($influencer->get());
    }
    
    

    public function crearnoticia(){
        
        $titulo=$this->request->getPost('newnoticia');
        $descripcion=$this->request->getPost('newcuerpo');
        $foto=$this->_upload2('fotonoticia');

        $noticia=new NoticiasModel();

        $data=['titulo'=>$titulo,'cuerpo'=>$descripcion,'url_foto'=>$foto];
        if($noticia->insert($data)!=null){
            return redirect()->to("/dashboard/noticias")->with('mensaje', 'Tu cuenta se creo con exito');

        }
        
    }
    private function _upload2($name){

        if($imagefile = $this->request->getFile($name)){
            
            if ($imagefile->isValid() && ! $imagefile->hasMoved())
            {
               
                    $newName = $imagefile->getRandomName();
                    $imagefile->move(ROOTPATH.'public/fotosnoticias', $newName);
                    return $newName;
              

            }
        }
        return null;
    }

     //METODO QUE ME PERMITE CARGAR PAGINAS
     private function _loadDefaultView($title,$data,$view){

        
        $dataHeader =[
            'usuario' => 'JULIAN ANDRES',
        ];
        
       
        echo view("dashboard/templates/header",$dataHeader);
        echo view("dashboard/$view",$data);
        echo view("dashboard/templates/footer");
       

    }
   
}