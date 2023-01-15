<?php

namespace App\Controllers;

use Config\Services;
use App\Models\PagoModel;
use App\Models\MarcaModel;
use App\Models\RedesModel;
use App\Models\IdiomaModel;
use App\Models\GaleriaModel;
use App\Models\MensajesModel;
use App\Models\InfluencerModel;
use App\Models\MensajeCorreoModel;
use App\Models\InfluencerPagoModel;
use App\Models\IdiomaInfluencerModel;
use App\Models\InfluencersRedesModel;

class PerfilController extends BaseController
{
    public function index($id=null)
    {
        $influencermodel= new InfluencerModel();
        $redesinfluencer = new InfluencersRedesModel();
        $redes = new RedesModel();
        $mensajes = new MensajesModel();
        $galeria= new GaleriaModel();
        $idiomas = new IdiomaInfluencerModel();
        $idiomasInfluencer = new IdiomaModel();
        $pago= new PagoModel();
        $influpago = new InfluencerPagoModel();
        $marcas= new MarcaModel();
        


        $influ= $influencermodel->find($id);
        $misredes= $redesinfluencer->where(['idinfluencer'=>$id])->find();
        $misMensajes= $mensajes->where(['idinfluencer'=>$id])->find();
        $misFotos= $galeria->where(['idinfluencer'=>$id])->find();
        $misIdiomas = $idiomas->where(['idinfluencer'=>$id])->find();
        $mispagos = $influpago->where(['idinfluencer'=>$id])->find();
        $mismarcas = $marcas->where(['idinfluencer'=>$id])->find();


        $arregloDeredes=[];
        foreach ($misredes as $key => $m) {
            array_push($arregloDeredes,$redes->find($m['idredes']));
        }

        $arregloDeidiomas=[];
        foreach ($misIdiomas as $key => $m) {
            array_push($arregloDeidiomas,$idiomasInfluencer->find($m['ididioma']));
        }

        $arregloDepagos=[];
        foreach ($mispagos as $key => $m) {
            array_push($arregloDepagos,$pago->find($m['idpago']));
        }

        $arregloDeMarcas=[];
        foreach ($mismarcas as $key => $m) {
            array_push($arregloDeMarcas,$pago->find($m['idmarca']));
        }
       
        $data=['mensaje'=>"", 'influencer'=>$influ,'redes'=>$misredes,'arregloredes'=>$arregloDeredes,
    'mensajes'=>$misMensajes,'misfotos'=>$misFotos, 'misidiomas'=>$arregloDeidiomas,'pagos'=>$arregloDepagos,
'marcas'=>$mismarcas];

        if($influ!=null){
            $this-> _loadDefaultView('Perfil-Busca Influencer',$data,'perfil');
        }
        
        
    }

    private function _loadDefaultView($title,$data,$view){

        
        $dataHeader =[
            'titulo' => $title
        ];

       
        echo view("influencer/templates/header",$dataHeader);
        echo view("influencer/influencers/$view",$data);
        echo view("influencer/templates/footer");
       

    }

    Public function enviarMensajeAInfluencer(){

        $nombre= $this->request->getPost('nombre');
        $id= $this->request->getPost('influencerid31');
        $empresa= $this->request->getPost('empresa');
        $cuerpo= $this->request->getPost('cuerpo');
        $valoracion= $this->request->getPost('valoracion');
        
        $mensaje= new MensajesModel();

        $data=['nombre'=>$nombre,'empresa'=>$empresa,'cuerpo'=>$cuerpo,'valoracion'=>$valoracion,'idinfluencer'=>$id];
        echo $valoracion;
               
        if($mensaje->insert($data)!=null){
            return redirect()->to("/")->with('mensaje', 'Tu mensaje de envió con exito');
        }
        return redirect()->back()->withinput();
 
    }

    Public function enviarCorreoLocal(){
        
        $influencer = new InfluencerModel();
        $correo=new MensajeCorreoModel();

        $id= $this->request->getPost('influencerid32');
        $nombre= $this->request->getPost('nombrecontacto');
        $empresa= $this->request->getPost('empresacontacto');
        $correoremi= $this->request->getPost('emailcontacto');
        $celular= $this->request->getPost('celularcontacto');
        $cuerpo= $this->request->getPost('cuerpocontacto');
        
        $miInfluencer= $influencer->find($id);
 
/** 
        $email = Services::email();

        $email->setFrom($correo, 'WD STUDIO CORP');
        $email->setTo($miInfluencer['correo']);
        

        $email->setSubject($nombre);
        $email->setMessage($cuerpo);

        $email->send();
*/

        $data=['idinfluencer'=>$id,'nombre'=>$nombre,'empresa'=>$empresa,
                'correoremitente'=>$correoremi,'celularremitente'=>$celular,'cuerpo'=>$cuerpo,
    ];
       $validation =  \Config\Services::validation();

        if($correo->insert($data)!=null){
            return redirect()->to("/perfil/$id")->with('mensaje', 'Tu correo de envió con exito');
        }
        
        return redirect()->to("/perfil/$id")->with('mensaje', 'Ocurrio un error al enviar tu correo');

       
        
    }

}
