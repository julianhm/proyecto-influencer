<?php

namespace App\Controllers;

use Config\Services;

use App\Models\PagoModel;
use App\Models\PaisModel;
use App\Models\MarcaModel;
use App\Models\RedesModel;
use App\Models\CiudadModel;
use App\Models\IdiomaModel;
use App\Models\GaleriaModel;
use App\Models\CategoriasModel;
use App\Models\InfluencerModel;
use App\Models\MensajeCorreoModel;
use App\Models\InfluencerPagoModel;
use App\Models\InfluencerMarcaModel;
use App\Models\IdiomaInfluencerModel;
use App\Models\InfluencersRedesModel;
use App\Models\InfluencerCategoriaModel;

class InfluencerController extends BaseController
{
    
    //CARGA LA PAGINA DEL PERFIL DEL INFLUENCER
    public function index()
    {
        
        $this-> _loadDefaultView('Busca Influencer',['mensaje'=>"",'validation'=> \Config\Services::validation(),],'index');

    }

    //CARGA LA PAGINA DE POLITICA DE PRIVACIDAD
    public function privacidad()
    {
        $this-> _loadDefaultView('Politica de Privacidad',['mensaje'=>""],'privacidad');

    }


    //METODO QUE ME PERMITE CARGAR PAGINAS
    private function _loadDefaultView($title,$data,$view){

        
        $dataHeader =[
            'titulo' => $title,
            
        ];
        
       if($data==null){
        echo view("influencer/templates/header",$dataHeader);
        echo view("influencer/influencers/$view");
        echo view("influencer/templates/footer");
       }else{
        echo view("influencer/templates/header",$dataHeader);
        echo view("influencer/influencers/$view",$data);
        echo view("influencer/templates/footer");
       }

    }

    //METODO QUE CARGA LA VISTA DE REGISTRO DE INFLUENCER
    public function new(){
        //CARGAR LOS ARREGLOS DESDE LAS VISTAS
        $paises = new PaisModel();
        $idioma = new IdiomaModel();
       
        
        $misIdiomas=$idioma->findAll();
        $misPaises=$paises->findAll();
        
        $ciudades=$this->_cargarCiudades($misPaises);
        session();
        
        $validation =  \Config\Services::validation();
        
        //CARGAR LA VISTA
        $this->_loadDefaultView('Crear Influencer',['validation'=>$validation, 
        'paises'=> $misPaises,
        'ciudades'=> $ciudades,
        'mensaje'=>""],'new');

    }

    //CREA EL NUEVO INFLUENCER
    public function create(){
        //SE DEFINEN LOS MODELOS
        $influencerModel=new InfluencerModel();
        $mensajes="";
       
        //SE CREAN LAS REGLAS DE VALIDACION PARA LOS CAMPOS
        $rules=[
            'nombre'=>'required|min_length[4]|max_length[50]',
            'alias'=>'required|min_length[2]|max_length[20]',
            'password'=>'required|min_length[5]|max_length[20]',
            'correo'=>'required|valid_email',
            'pais'=>'required|max_length[50]',
            'ciudades'=>'required|max_length[50]',
            'resenia'=>'required|min_length[10]|max_length[5000]',
        ];

        $imagefile = $this->request->getFiles();

        //SI SE VALIDAN LAS REGLAS
        if($this->validate($rules)){
            $nombreinflu= $this->request->getPost('nombre');
            $alias= $this->request->getPost('alias');
            $password= $this->request->getPost('password');
            $usuario= $this->request->getPost('password');
            $ciudad= $this->request->getPost('ciudades');
            $correo= $this->request->getPost('correo');
            $resenia= $this->request->getPost('resenia');
            $archivofoto=$this->_upload2('fotoperfil');
            
            $datainsertar = [
                'nombreinflu' => $nombreinflu,
                'alias' => $alias,
                'password' => $password,
                'correo' => $correo,
                'resenia' => $resenia,
                'usuario' => $correo,
                'foto_perfil'=>$archivofoto,
                'idciudad'=>$ciudad,
            ];

            //SE CREA EL INFLUENCER
            $id=$influencerModel->insert($datainsertar);
            $mensajes=$mensajes." "."Se crea el influencer correctamente";
            return redirect()->to("/influencer/new2/$id")->with('mensaje', 'Tu cuenta se creo con exito');

        }
      return redirect()->back()->withinput();
   }

   //CARGA LA VISTA DE REGISTRO DE REDES SOCIALES
    public function registro($id=null){
 
         $influencer=new InfluencerModel();
                  
         $miInfluencer=$influencer->find($id);
         
         session();
         
         $validation =  \Config\Services::validation();
         
         //CARGAR LA VISTA
         $this->_loadDefaultView('Crear Influencer',['validation'=>$validation, 
         'influencer'=>$miInfluencer,
         'mensaje'=>""],'new2');

    }


    //SE GUARDAN LAS REDES SOCIALES
    public function guardarRedesSociales(){
        
        $id=$this->request->getPost('influencerid3');
        $influencerModel=new InfluencerModel();

        //SE CREA EL INFLUENCER
        $ide=$influencerModel->find($id);

        //CREACION DE REDES SOCIALES EN LA BASE DE DATOS
        if($this->_crearRedesSociales($id)){
            //CARGAR LA VISTA
            return redirect()->to("/influencer/new3/$id")->with('mensaje', 'Tus redes se agregaron correctamente');

        }
   
        return redirect()->back()->withinput();
    }

//SE CARGA LA VISTA FINAL DEL REGISTRO
    public function registrofinal($id=null){

        $influencer=new InfluencerModel();
        $idioma=new IdiomaModel();

        $miInfluencer=$influencer->find($id);
        $misIdiomas=$idioma->findAll();

        //CARGAR LOS ARREGLOS DESDE LAS VISTAS
        $categorias = new CategoriasModel();
        $misCategorias=$categorias->findAll();
        session();
        
        $validation =  \Config\Services::validation();
        
        //CARGAR LA VISTA
        $this->_loadDefaultView('Crear Influencer',['validation'=>$validation,
        'categorias'=>$misCategorias, 'influencer'=>$miInfluencer, 'idiomas'=>$misIdiomas,
        'mensaje'=>""],'new3');
    }


    //SE GUARDAN LAS MARCAS; LAS CATEGORIAS; LOS VIDEOS
    public function continuarregistro(){

        $influencerModel=new InfluencerModel();
        $galeriamodel=new GaleriaModel();
        $marca = new MarcaModel();
        $mensajes="";
        
        $id=$this->request->getPost('influencerid30');
       
        //SE CREA EL INFLUENCER
        $ide=$influencerModel->find($id);
       
        //SE CREAN LAS REGLAS DE VALIDACION PARA LOS CAMPOS
        $rules=[
            
        ];

        $imagefile = $this->request->getFiles();

        
            
            $archivofoto=$this->_upload2('fotoperfil');
            $archivovideo=$this->_uploadvideo('videoperfil');
            
            $tipoMarca= $this->request->getPost('tipoMarca');
            $marcanuevaempresa =$this->request->getPost('marcatxt');
            

            $influencerModel->UPDATE($ide,['video'=>$archivovideo]);

            
            //SE CREA EL INFLUENCER
            $mensajes=$mensajes." "."Se crea el influencer correctamente";

             
            //SE VALIDAN LAS CATEGORIAS            
            $this->_guardarCategorias($id);

            //SE CARGA EL IDIOMA
            $idioma=new IdiomaInfluencerModel();
            $miIdioma=$this->request->getPost('langSelect');
            $idioma->insert(['ididioma'=>$miIdioma,'idinfluencer'=>$id]);
            

            //SE CARGA LA GALERIA
            $galeria=$this->_upload('galeriaperfil',$imagefile);
            if(count($galeria)>5){
                for ($i=0; $i < 5 ; $i++) { 
                    $galeriamodel->insert(['idinfluencer'=>$id,'url'=>$galeria[$i]]);
                }
            }else{
                for ($i=0; $i < count($galeria) ; $i++) { 
                    $galeriamodel->insert(['idinfluencer'=>$id,'url'=>$galeria[$i]]);
                }
            }
            
        
            //SE CARGAN LAS EMPRESAS O MARCAS
            if(!($marcanuevaempresa==""||$marcanuevaempresa==null)){
                $idmarca=$marca->insert(['nombre'=>$marcanuevaempresa,'tipo'=>$tipoMarca,'idinfluencer'=>$id]); 
            }

            //SE CARGAN LOS PAGOS
            $this->_guardarPago($id);


        return redirect()->to("/perfil/$id")->with('mensaje', 'Tu cuenta se creo con exito');

    
       
        

    }

    public function edit($id = null){

        $influencer = new InfluencerModel();
        $pais= new PaisModel();
        $ciudad= new CiudadModel();
        $redes= new RedesModel();
        $categoria= new CategoriasModel();
        $galeria= new GaleriaModel();
        $idioma=new IdiomaModel();
        $pago=new PagoModel();
        $marca=new MarcaModel();
        $influcatefori=new InfluencerCategoriaModel();
        
        $influpago=new InfluencerPagoModel();
        $influredes=new InfluencersRedesModel();
        $influidioma=new IdiomaInfluencerModel();

        if ($influencer->find($id) != null)
        {
            $inf=$influencer->find($id);
            
            $ciu=$ciudad->find($inf['idciudad']);
            $pai=$pais->find($ciu['idpais']);

            $idcateg=$influcatefori->where('idinfluencer', $id)->findAll();
            $idmarca=$marca->where('idinfluencer', $id)->findAll();
            $idpago=$influpago->where('idinfluencer', $id)->findAll();
            $idredes=$influredes->where('idinfluencer', $id)->findAll();
            $ididioma= $influidioma->where('idinfluencer', $id)->findAll();

            $misCategorias=[];
            $categoriasNoUso= $categoria->findAll();
            //var_dump($categoriasNoUso);
            foreach ($idcateg as $key => $m) {
                array_push($misCategorias,$categoria->find($m['idcategoria']));
                unset($categoriasNoUso[$m['idcategoria']-1]);
            }

            

            $misPagos=[];
            $misPagosNoUsados=$pago->findAll();
            foreach ($idpago as $key => $m) {
                array_push($misPagos,$pago->find($m['idpago']));
                unset($misPagosNoUsados[$m['idpago']-1]);
            }

            $misRedes=[];
            $misRedesNoUsadas=$redes->findAll();
            $misUsuariosRedes=[];
            foreach ($idredes as $key => $m) {
                array_push($misRedes,$redes->find($m['idredes']));
                array_push($misUsuariosRedes,$m['user']);
                unset($misRedesNoUsadas[$m['idredes']-1]);
            }

            $misIdiomas=[];
            $misIdiomasNoUsados= $idioma->findAll();
            foreach ($ididioma as $key => $m) {
                array_push($misIdiomas,$idioma->find($m['ididioma']));
                unset($misIdiomasNoUsados[$m['ididioma']-1]);
            }
           

           $migaleria= $galeria->where('idinfluencer', $id)->findAll();

            //var_dump($idcateg);
            $validation =  \Config\Services::validation();
    
            $datos=['validation'=>$validation,
            'influencer'=>$inf,
            'pais'=>$pai,
            'ciudad'=>$ciu,
            'categorias'=>$misCategorias,
            'categoriasNoUsadas'=>$categoriasNoUso,
            'influencermarca'=>$idmarca,
            'pagos'=>$misPagos,
            'pagosNoUsados'=>$misPagosNoUsados,
            'influencerPagos'=>$idpago,
            'redes'=>$misRedes,
            'redesNoUsadas'=>$misRedesNoUsadas,
            'redesUsuarios'=>$misUsuariosRedes,
            'redesInfluencer'=>$idredes,
            'idiomas'=>$misIdiomas,
            'galeria' => $migaleria,
            'categoriainfluencer'=>$idcateg,
            'idiomainfluencer'=>$ididioma,
            'idimanousado'=>$misIdiomasNoUsados ];
    
            
            $this->_loadDefaultView('Crear influencer',$datos,'edit');

            
        } else {
            
            throw PageNotFoundException::forPageNotFound();
        }  

        
    }



    public function delete($id=null)
    {

       

        $influencerModel=new InfluencerModel();

        if ($influencerModel->find($id) == null)
        {
            throw PageNotFoundException::forPageNotFound();
        }

        $influencerModel->delete($id);
          // echo $id;
             return redirect()->to('/influencer')->with('mensaje', 'Tu cuanta se elimino correctamente');
    }


    public function update($id=null)
    {

        

        return redirect()->to('/influencer')->with('mensaje', 'Tu cuanta se actualizó correctamente');

    
        
        //return redirect()->back()->withInput();
    
 
    }

    public function show($id = null){
        
        $influencerModel = new InfluencerModel();

        if ($influencerModel->find($id) == null)
        {
            throw PageNotFoundException::forPageNotFound();
        }   

        var_dump($influencerModel->asObject()->find($id)->id);

    }


        //PERMITE CARGAR LA LAS CIUDADES DESDE LA BASE DE DATOS
        private function _cargarCiudades($misPaises){
            $ciudades = new CiudadModel();
            $mis_ciudades=$ciudades->findAll();
            $arregloCiudades=[];
    
            for ($i=0; $i <count($misPaises) ; $i++) { 
              $arregloPorPais=[];
                
                foreach ($mis_ciudades as $key => $m) {
                    if($m['idpais']==$misPaises[$i]['idpais']){
                        array_push($arregloPorPais,$m);
                    }
                }
                $arregloCiudades[$misPaises[$i]['idpais']]=$arregloPorPais;
            }
            return $arregloCiudades;
        }



    private function _upload($name,$imagefile){

        $arraygaleria=[];
        if ($imagefile = $this->request->getFiles()) {
            
            foreach ($imagefile[$name] as $img) {
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move(ROOTPATH.'public/uploads', $newName);
                    array_push($arraygaleria,$newName);
                }
            }
        }
        return $arraygaleria;
    }
   

    private function _upload2($name){

        if($imagefile = $this->request->getFile($name)){
            
            if ($imagefile->isValid() && ! $imagefile->hasMoved())
            {
               
                    $newName = $imagefile->getRandomName();
                    $imagefile->move(ROOTPATH.'public/uploads', $newName);
                    return $newName;
              

            }
        }
        return null;
    }

    private function _uploadvideo($name){

        if($imagefile = $this->request->getFile($name)){
            
            if ($imagefile->isValid() && ! $imagefile->hasMoved())
            {
               
                    $newName = $imagefile->getRandomName();
                    $imagefile->move(ROOTPATH.'public/video', $newName);
                    return $newName;
              

            }
        }
        return null;
    }
    


    private function _crearRedesSociales($id){
        $redesmodel=new RedesModel();
        $influencerredesmodel=new InfluencersRedesModel();
        $redesSociales= $redesmodel->findAll();
            
        foreach ($redesSociales as $key => $m) {
            
                if($m['nombre']=="Behance"){
                    $behance= $this->request->getPost('behance');
                    if(!($behance=="" || $behance==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$behance,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Ello"){
                    $ello= $this->request->getPost('ello');
                    if(!($ello=="" || $ello==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$ello,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Facebook"){
                    $facebook= $this->request->getPost('facebook');
                    if(!($facebook=="" || $facebook==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$facebook,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Instagram"){
                    $instagram= $this->request->getPost('instagram');
                    if(!($instagram=="" || $instagram==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$instagram,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Linkedin"){
                    $linkedin= $this->request->getPost('linkedin');
                    if(!($linkedin=="" || $linkedin==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$linkedin,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="OnlyFans"){
                    $onlyfans= $this->request->getPost('onlyfans');
                    if(!($onlyfans=="" || $onlyfans==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$onlyfans,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Pinterest"){
                    $pinterest= $this->request->getPost('pinterest');
                    if(!($pinterest=="" || $pinterest==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$pinterest,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="QQ"){
                    $qq= $this->request->getPost('qq');
                    if(!($qq=="" || $qq==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$qq,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Qzone"){
                    $qzone= $this->request->getPost('qzone');
                    if(!($qzone=="" || $qzone==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$qzone,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Reddit"){
                    $reddit= $this->request->getPost('reddit');
                    if(!($reddit=="" || $reddit==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$reddit,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Snapchat"){
                    $snapchat= $this->request->getPost('snapchat');
                    if(!($snapchat=="" || $snapchat==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$snapchat,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Telegram"){
                    $telegram= $this->request->getPost('telegram');
                    if(!($telegram=="" || $telegram==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$telegram,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="TikTok"){
                    $tiktok= $this->request->getPost('tiktok');
                    if(!($tiktok=="" || $tiktok==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$tiktok,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Tumblr"){
                    $tumblr= $this->request->getPost('tumblr');
                    if(!($tumblr=="" || $tumblr==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$tumblr,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Twitter"){
                    $twitter= $this->request->getPost('twitter');
                    if(!($twitter=="" || $twitter==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$twitter,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Twitch"){
                    $twitch= $this->request->getPost('twitch');
                    if(!($twitch=="" || $twitch==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$twitch,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Vimeo"){
                    $vimeo= $this->request->getPost('vimeo');
                    if(!($vimeo=="" || $vimeo==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$vimeo,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Wechat"){
                    $wechat= $this->request->getPost('wechat');
                    if(!($wechat=="" || $wechat==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$wechat,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Weibo"){
                    $Weibo= $this->request->getPost('Weibo');
                    if(!($Weibo=="" || $Weibo==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$Weibo,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="Youtube"){
                    $youtube= $this->request->getPost('youtube');
                    if(!($youtube=="" || $youtube==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$youtube,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }else
                if($m['nombre']=="blog"){
                    $blog= $this->request->getPost('blog');
                    if(!($blog=="" || $blog==null)){
                        $influencerredesmodel->insert(['idinfluencer'=>$id,'idredes'=>$m['idredes'],'user'=>$blog,'cant_seguidores'=>rand(1000,5000000)]);
                    }
                }
        }
        return true;
        
    }

    private function _guardarCategorias($id){
        $categoriasmodel= new CategoriasModel();
        $influencercategoriamodel= new InfluencerCategoriaModel();
        $array=[];
        
        if (isset($_REQUEST['gastronomia'])) {
            array_push($array,'Gastronomia'); 
         }
         if (isset($_REQUEST['tecnologia'])) {
             array_push($array,'Tecnologia'); 
         }  
         if (isset($_REQUEST['ciencia'])) {
             array_push($array,'Ciencia'); 
         }  
         if (isset($_REQUEST['arte'])) {
             array_push($array,'Arte y Diseño'); 
         } 
         if (isset($_REQUEST['moda'])) {
             array_push($array,'Moda'); 
         } 
         if (isset($_REQUEST['educacion'])) {
             array_push($array,'Educacion'); 
         }    
         if (isset($_REQUEST['farandula'])) {
             array_push($array,'Farandula'); 
         }    
         if (isset($_REQUEST['entretenimiento'])) {
             array_push($array,'Entretenimiento '); 
         }    
         if (isset($_REQUEST['cine'])) {
             array_push($array,'Cine'); 
         }    
         if (isset($_REQUEST['politica'])) {
             array_push($array,'Politica y Sociedad'); 
         }    
         if (isset($_REQUEST['juegos'])) {
             array_push($array,'Juegos'); 
         }    
         if (isset($_REQUEST['deportes'])) {
             array_push($array,'Deportes'); 
         }  
         if (isset($_REQUEST['estilo'])) {
             array_push($array,'Estilo de vida'); 
         }
         if (isset($_REQUEST['belleza'])) {
             array_push($array,'Belleza'); 
         }
         if (isset($_REQUEST['talentos'])) {
             array_push($array,'Talentos especiales'); 
         }
         if (isset($_REQUEST['nutricion'])) {
             array_push($array,'Nutricion'); 
         }
         if (isset($_REQUEST['salud'])) {
             array_push($array,'Salud'); 
         }
         if (isset($_REQUEST['amor'])) {
             array_push($array,'Amor'); 
         }  
         if (isset($_REQUEST['humanidades'])) {
             array_push($array,'Humanidades'); 
         }
         if (isset($_REQUEST['transporte'])) {
             array_push($array,'Transporte'); 
         }
         if (isset($_REQUEST['sexo'])) {
             array_push($array,'Sexo'); 
         }
         if (isset($_REQUEST['musica'])) {
             array_push($array,'Musica'); 
         }
         if (isset($_REQUEST['turismo'])) {
             array_push($array,'Turismo y viajes'); 
         }
         if (isset($_REQUEST['aventura'])) {
             array_push($array,'Aventura'); 
         }
         if (isset($_REQUEST['todo'])) {
             array_push($array,'De todo'); 
         }
         if (isset($_REQUEST['esoterismo'])) {
             array_push($array,'Esoterismo'); 
         }
         if (isset($_REQUEST['astrologia'])) {
             array_push($array,'Astrologia'); 
         }
         if (isset($_REQUEST['superacion'])) {
             array_push($array,'Superacion'); 
         }
         if (isset($_REQUEST['finanzas'])) {
             array_push($array,'Finanzas'); 
         }
         if (isset($_REQUEST['entrenamiento'])) {
             array_push($array,'Entrenamiento'); 
         }
         if (isset($_REQUEST['identidad'])) {
             array_push($array,'Identidad'); 
         }
         if (isset($_REQUEST['opinion'])) {
             array_push($array,'Opinion'); 
         }
         if (isset($_REQUEST['religion'])) {
             array_push($array,'Religion'); 
         }
         var_dump($array);

         $cate=$categoriasmodel->findAll();   
 
         for ($i=0; $i < count($array) ; $i++) { 
             for ($j=0; $j < count($cate) ; $j++) { 
                 if($array[$i]==$cate[$j]['nombrecat']){
                     $influencercategoriamodel->insert([
                         'idinfluencer'=>$id,
                         'idcategoria'=>$cate[$j]['idcategoria']
                     ]);
                 }
             }
         }
         $otro=$this->request->getPost('agregar');
         if(!($otro == ""|| $otro == null)){
             $idecat=$categoriasmodel->insert(['nombrecat'=> $otro,'mostradas'=>0]);
             $influencercategoriamodel->insert([
                 'idinfluencer'=>$id,
                 'idcategoria'=>$idecat
             ]);
         }
    }

    private function _guardarPago($id){
        $infleuncerpago= new InfluencerPagoModel();
        $pagos=new PagoModel();
        

        $arraypago=[];
 
         if (isset($_REQUEST['canje'])) {
             array_push($arraypago,'Canje por Producto'); 
         }
         if (isset($_REQUEST['dinero'])) {
             array_push($arraypago,'Dinero'); 
         }
         if (isset($_REQUEST['servicios'])) {
             array_push($arraypago,'Servicio'); 
         }
         if (isset($_REQUEST['patrocinio'])) {
             array_push($arraypago,'Patrocinio'); 
         }
 
         $cate=$pagos->findAll(); 
          
 
         for ($i=0; $i < count($arraypago) ; $i++) { 
             for ($j=0; $j < count($cate) ; $j++) { 
                 if($arraypago[$i]==$cate[$j]['nombre']){
                     $infleuncerpago->insert([
                         'idinfluencer'=>$id,
                         'idpago'=>$cate[$j]['idpago']
                     ]);
                 }
             }
         }
         
    }

    public function cambiarFotoPerfil(){

        $influencer=new InfluencerModel();
        $id= $this->request->getPost('picId');
        

        
        if($imagefile = $this->request->getFile('newfoto')){
            
            if ($imagefile->isValid() && ! $imagefile->hasMoved())
            {
               
                    $newName = $imagefile->getRandomName();
                    $imagefile->move(ROOTPATH.'public/uploads', $newName);
                    $influencer->update($id,['foto_perfil'=>$newName]);
                    return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu foto se actualizó con exito');


            }
        }else{
            
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu foto');

        }

        
    }

    public function agregarRedSocial(){

        $redinfluencer=new InfluencersRedesModel();
        
        $id= $this->request->getPost('influencerid1');
        $redsocial= $this->request->getPost('redessocialesagregar');
        $usuarioredsocial= $this->request->getPost('textousuariored');
        if(!($usuarioredsocial==null || $usuarioredsocial=="")){
            if($redinfluencer->insert(['idinfluencer'=>$id,'idredes'=>$redsocial,'user'=>$usuarioredsocial])!=null){
                return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tus Redes se actualizaron con exito');
    
            }
        }    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu red social');
    }

    public function agregarCantidadSeguidores($cant, $redsocial){
        $redinfluencer=new InfluencersRedesModel();
            if($redinfluencer->update($redsocial,['cant_seguidores'=>$cant])!=null){
                return true;
    
            }
        return false;
    }

    

    public function elminarRedes(){

        $redinfluencer=new InfluencersRedesModel();
        $ide=$this->request->getPost('redeseliminar');
        
        $id=$this->request->getPost('influencerid2');

        if($redinfluencer->where('id', $ide)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tus Red se elimino con exito con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminiar tu red social');

           
    }

    public function actualizarPerfil(){

        $influencer=new InfluencerModel();
        $nombre=$this->request->getPost('nombredit');
        $alias=$this->request->getPost('aliasedit');
        $usuario=$this->request->getPost('usuarioedit');
        
        $id=$this->request->getPost('influencerid3');
        $data=[
            'nombreinflu'=>$nombre,
            'alias'=>$alias,
            'usuario'=>$usuario
        ];

        if($influencer->update($id,$data)!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tus datos se actualizaron con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tus datos');

           
    }

    public function elminarCategoria(){

        $categoriaInfluencer=new InfluencerCategoriaModel();
        $ide=$this->request->getPost('categoriaeliminar');
        
        $id=$this->request->getPost('influencerid3');

        if($categoriaInfluencer->where('id', $ide)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Categoria se elimino con exito con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminiar tu categoria');

           
    }
    
    public function adicionarCategoria(){

        $categoriaInfluencer=new InfluencerCategoriaModel();
        
        $id= $this->request->getPost('influencerid4');

        $idcatagoria= $this->request->getPost('categorianew');
        
        if($categoriaInfluencer->insert(['idinfluencer'=>$id,'idcategoria'=>$idcatagoria])!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Categoria se actualizó con exito');
  
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu categoria');
    }

    public function eliminarLenguaje(){


        $lenguajeInfluencer=new IdiomaInfluencerModel();

        $ide=$this->request->getPost('idiomaeliminar');
        
        $id=$this->request->getPost('influencerid5');

        if($lenguajeInfluencer->where('id', $ide)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Idioma se elimino con exito con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminiar tu Idioma');

           
    }

    public function adicionarIdioma(){

        $idiomaInfluencer=new IdiomaInfluencerModel();
        
        $id= $this->request->getPost('influencerid6');

        $ididioma= $this->request->getPost('idiomanew');
        
        if($idiomaInfluencer->insert(['idinfluencer'=>$id,'ididioma'=>$ididioma])!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Idioma se actualizó con exito');
  
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu idioma');
    }

    public function eliminarVideo(){

        $influencer=new InfluencerModel();
        $id= $this->request->getPost('influencerid7');
        

        
        if($influencer->update($id,['video'=>null])!=null){
            
        
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu video se elimino con exito');


            
        }else{
            
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminat tu video');

        }

        
    }

    public function cambiarVideo(){

        $influencer=new InfluencerModel();
        $id= $this->request->getPost('influencer9');
        

        
        if($imagefile = $this->request->getFile('newvideo')){
            
            if ($imagefile->isValid() && ! $imagefile->hasMoved())
            {
               
                    $newName = $imagefile->getRandomName();
                    $imagefile->move(ROOTPATH.'public/video', $newName);
                    $influencer->update($id,['video'=>$newName]);
                    return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu video se actualizó con exito');


            }
        }else{
            
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu video');

        }

        
    }

    public function eliminarFotoGaleria(){

        $galeria=new GaleriaModel();
        $id= $this->request->getPost('influencerid10');
        $idgaleria= $this->request->getPost('fotoGaeliminar');

        if($galeria->where('idfoto', $idgaleria)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu foto se elimino con exito');
        }else{
            
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminar tu foto');

        }

        
    }

    public function agregarFotoGaleria(){

        $galeria=new GaleriaModel();

        $id= $this->request->getPost('influencer11');

        $fotos=$galeria->where('idinfluencer',$id)->findAll();
        $cantidadFotos=count($fotos);
        $contador=0;
        
        if ($imagefile = $this->request->getFiles()) {
            
                foreach ($imagefile['newfotoGaleria'] as $img) {
                    if ($cantidadFotos < 5) {
                        if ($img->isValid() && ! $img->hasMoved()) {
                            $newName = $img->getRandomName();
                            $img->move(ROOTPATH.'public/uploads', $newName);
                            $galeria->insert(['url'=>$newName,'idinfluencer'=>$id]);
                            $cantidadFotos++;
                        }
                    }else if($contador<5){
                        if ($img->isValid() && ! $img->hasMoved()) {
                            $newName = $img->getRandomName();
                            $img->move(ROOTPATH.'public/uploads', $newName);
                            //var_dump($fotos[$contador]['idfoto']);
                            $galeria->update($fotos[$contador]['idfoto'],['url'=>$newName]);
                            $contador++;
                        }
                    }
                } 
                return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu fotos se agregaron con exito');
        }else{
            
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al agregar sus fotos');

        }

        
    }

    public function editarResenia(){

        $influencer=new InfluencerModel();
        $resenia=$this->request->getPost('reseniaInfluencer');
        $id=$this->request->getPost('influencerid12');

        $data=[
            'resenia'=>$resenia
        ];

        if($influencer->update($id,$data)!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tus reseña se actualizó con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu reseña');
    }

    public function eliminarMarcas(){


        $marca=new MarcaModel();

        $ide=$this->request->getPost('marcaeliminada');
        
        $id=$this->request->getPost('influencerid13');

        if($marca->where('idmarca', $ide)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Marca se elimino con exito con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminiar tu Marca');

           
    }

    public function eliminarPagos(){


        $pagoInfluencer=new InfluencerPagoModel();

        $ide=$this->request->getPost('pagoeliminada');
        
        $id=$this->request->getPost('influencerid15');

        if($pagoInfluencer->where('id', $ide)->delete()!=null){
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu PAgo se elimino con exito con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al eliminiar tu Pago');

           
    }

    public function adicionarEmpresa(){

        
        $marca=new MarcaModel();
        
        $id= $this->request->getPost('influencerid16');
        $tipo= $this->request->getPost('tipoempres');
        $marcaText= $this->request->getPost('empresanewtxt');

        if(!($marcaText==null || $marcaText=="")){
            $marca->insert(['nombre'=>$marcaText,'idinfluencer'=>$id, 'tipo'=>$tipo]);
            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu marca se actualizó con exito');
      
            
        }
        
        
    
        return redirect()->to("/influencer/$id/edit")->with('mensaje', 'ocurrió un error al actualizar tu idioma');
    }

    public function adicionarPago(){

        $pagosInfluencer=new InfluencerPagoModel();
        
        $id= $this->request->getPost('influencerid17');

        $idpago= $this->request->getPost('pagonew');
        
        if($pagosInfluencer->insert(['idinfluencer'=>$id,'idpago'=>$idpago])!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tu Pago se actualizó con exito');
  
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu pago');
    }

    public function editarOferta(){

        $influencer=new InfluencerModel();

        $oferta=$this->request->getPost('promocion');
        $id=$this->request->getPost('influencerid19');

        $data=[
            'oferta'=>$oferta
        ];

        if($influencer->update($id,$data)!=null){

            return redirect()->to("/influencer/edit/$id")->with('mensaje', 'Tus oferta se actualizó con exito');
            
        }
    
        return redirect()->to("/influencer/edit/$id")->with('mensaje', 'ocurrió un error al actualizar tu oferta');
    }

    function _validar_clave($clave,&$error_clave){
        if(strlen($clave) < 6){
           $error_clave = "La clave debe tener al menos 6 caracteres";
           return false;
        }
        if(strlen($clave) > 16){
           $error_clave = "La clave no puede tener más de 16 caracteres";
           return false;
        }
        if (!preg_match('`[a-z]`',$clave)){
           $error_clave = "La clave debe tener al menos una letra minúscula";
           return false;
        }
        if (!preg_match('`[A-Z]`',$clave)){
           $error_clave = "La clave debe tener al menos una letra mayúscula";
           return false;
        }
        if (!preg_match('`[0-9]`',$clave)){
           $error_clave = "La clave debe tener al menos un caracter numérico";
           return false;
        }
        $error_clave = "";
        return true;
     }

      //CARGA LA VISTA DE REGISTRO DE REDES SOCIALES
    public function mensajesInfluencer($id=null){
 
        $influencer=new InfluencerModel();
        $correos=new MensajeCorreoModel();
                 
        $miInfluencer=$influencer->find($id);
        $misCorreos=$correos->where(['idinfluencer'=>$id])->OrderBy('created_at','DESC')->findAll();
        //var_dump($misCorreos);
        
        session();
        $validation =  \Config\Services::validation();
        $data=['validation'=>$validation, 
        'influencer'=>$miInfluencer,
        'mensaje'=>"",'correos'=>$misCorreos];
        
        
        
        //CARGAR LA VISTA
        $this->_loadDefaultView('Mis Mensajes',$data,'mensajes');

   }

   

}