<?php

namespace App\Controllers;

use App\Models\PagoModel;
use App\Models\PaisModel;
use App\Models\RedesModel;
use App\Models\CiudadModel;
use App\Models\IdiomaModel;
use App\Models\CategoriasModel;
use App\Models\InfluencerModel;
use App\Models\InfluencerCategoriaModel;

class UsuarioController extends BaseController
{
    public function index()
    {
        $categorias = new CategoriasModel();
        $redes = new RedesModel();
        $idiomas = new IdiomaModel();
        $pagos = new PagoModel();
        $paises = new PaisModel();
        
        $misPaises= $paises->findAll();
        $ciudades=$this->_cargarCiudades($misPaises);
        
        


        $data=['categorias'=> $categorias->orderBy('nombrecat', 'ASC')->where('mostradas',1)->findAll(),
        'redes'=> $redes->orderBy('nombre', 'ASC')->where('activa',1)->findAll(),
        'idiomas'=> $idiomas->orderBy('nombre', 'ASC')->findAll(),
        'pagos'=> $pagos->findAll(),
        'paises'=> $misPaises,
        'ciudades'=> $ciudades,
        ];

        $this-> _loadDefaultView('Buscar Influencer',$data,'buscar');
    }

     //METODO QUE ME PERMITE CARGAR PAGINAS
     private function _loadDefaultView($title,$data,$view){

        
        $dataHeader =[
            'titulo' => $title,
            
        ];
        
       if($data==null){
        echo view("influencer/templates/header",$dataHeader);
        echo view("influencer/usuarios/$view");
        echo view("influencer/templates/footer");
       }else{
        echo view("influencer/templates/header",$dataHeader);
        echo view("influencer/usuarios/$view",$data);
        echo view("influencer/templates/footer");
       }

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


     //BUSCAR INFLUENCERS
     public function buscarInfluencers(){

        $idcategoria= $this->request->getPost('categoriaselect');
        $idredsocial= $this->request->getPost('redsocialselect');
        $cant_seguidores= $this->request->getPost('seguidores');
        $ididioma= $this->request->getPost('idiomaSelect');
        $arrayDeIdPagos=$this->_arregloDePago();
        $idpais= $this->request->getPost('pais2');
        $idregion= $this->request->getPost('ciudades2');

        $categorias = new CategoriasModel();
        $redes = new RedesModel();
        $idioma = new IdiomaModel();
        $pagos = new PagoModel();
        $pais = new PaisModel();
        $ciudad = new CiudadModel();
       
        

        $criteriosBusqueda=[
            'categoria'=>"-",
            'redes'=>"-",
            'cantidad'=>"-",
            'idioma'=>"-",
            'pago'=>"-",
        ];
       


        $influencerBuscado=[];

        $db      = \Config\Database::connect();

        $builder = $db->table('influencers_redes');
        $builder->select('*');
        $builder->where('categorias.mostradas', 1);
        $builder->join('influencers', 'influencers_redes.idinfluencer = influencers.idinfluencer');
        $builder->join('redes_sociales', 'redes_sociales.idredes = influencers_redes.idredes');
        $builder->join('influencers_categorias', 'influencers_categorias.idinfluencer = influencers.idinfluencer');
        $builder->join('categorias', 'categorias.idcategoria = influencers_categorias.idcategoria');
        $builder->join('idiomas_influencers', 'idiomas_influencers.idinfluencer = influencers.idinfluencer');
        $builder->join('idiomas', 'idiomas.ididioma = idiomas_influencers.ididioma');
        $builder->join('influencers_pagos', 'influencers_pagos.idinfluencer = influencers.idinfluencer');
        $builder->join('tipos_pagos', 'tipos_pagos.idpago = influencers_pagos.idpago');
        $query = $builder->get();
        $influencerBuscado =$query->getResultArray();
           
       
        if($idcategoria!=null && $idcategoria>0){
            $influencerBuscado=$this->_filtrarPorCategorias($influencerBuscado,$idcategoria);
            $cat=$categorias->find($idcategoria);
            $criteriosBusqueda['categoria']=$cat['nombrecat'];
        }

        if($idredsocial!=null && $idredsocial>0){
            $influencerBuscado=$this->_filtrarPorRedSocial($influencerBuscado,$idredsocial);
            $red=$redes->find($idredsocial);
            $criteriosBusqueda['redes']=$red['nombre'];
            
        }
        
        if($cant_seguidores>0){
            
            $influencerBuscado=$this->_filtrarPorCantidadSeguidores($influencerBuscado,$cant_seguidores);
            
            $criteriosBusqueda['cantidad']=$cant_seguidores;
            
        }

        if($ididioma!=null && $ididioma>0){
           
            $influencerBuscado=$this->_filtrarPorIdioma($influencerBuscado,$ididioma);
            $idi=$idioma->find($ididioma);
            $criteriosBusqueda['idioma']=$idi;
            
        }

        $misPagos= $pagos->findAll();
        $textoPagos="";
        $arrayDePagos=[];

        foreach ($misPagos as $key => $p) {
            if (isset($_REQUEST[$p['idpago']])) {
                array_push($arrayDePagos,$p);
                $textoPagos= $textoPagos."/".$p['nombre'];
                 
             }
        }
        if(count($misPagos)>0){
            $influencerBuscado=$this->_filtrarPorPago($influencerBuscado,$arrayDePagos);
            $criteriosBusqueda['pago']=$textoPagos;

        }
        
        if($idpais!=null && $idpais>0){
            $miPais=$pais->find($idpais);
            if($idregion!=null && $idregion>0){
                    $miCiudad=$ciudad->find($idregion);
                    $influencerBuscado=$this->_filtrarPorCiudadYPais($influencerBuscado,$idpais,$idregion);
                    $criteriosBusqueda['pais']=$miPais['nombre'];
                    $criteriosBusqueda['ciudad']=$miCiudad['nombre'];
                
            }else{
                $influencerBuscado=$this->_filtrarPorCiudadYPais($influencerBuscado,$idpais,null);
                
                $criteriosBusqueda['pais']=$miPais['nombre'];
            }
        }
        
        
       

        $data=['influencer'=>$influencerBuscado,
                'categorias'=>$categorias->findAll(),
                'criteriosBusqueda'=>$criteriosBusqueda,
        ];

        $this-> _loadDefaultView('Buscar Influencer',$data,'resultados');
        
    }

    private function _arregloDePago(){
       
         $arraypago=[];
         $pagos = new PagoModel();

         $misPagos= $pagos->findAll();

        foreach ($misPagos as $key => $m) {
            if (isset($_REQUEST[$m['idpago']])) {
                array_push($arraypago,$m['idpago']); 
            }
        }

        
        return $arraypago;
         
    }

    private function _filtrarPorCategorias($misInfluencer,$idCategoria){

             
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        foreach ($misInfluencer as $key => $in) {
            
            if($in['idcategoria']==$idCategoria){
                    if(count($arrayDeIdInfluencers)==0){
                        array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                        array_push($arrayInfluencerBuscado,$in);
                    } else {
                        $cont=0;
                        foreach ($arrayDeIdInfluencers as $key => $idinf) {
                            if($idinf==$in['idinfluencer']){
                                $cont++;
                            }
                        }
                        if($cont==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in); 
                        }
                    }
               
            }
        }
        return $arrayInfluencerBuscado;

    }

    private function _filtrarPorRedSocial($misInfluencer,$idRedes){

        
              
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        foreach ($misInfluencer as $key => $in) {
            
            if($in['idredes']==$idRedes){
                    if(count($arrayDeIdInfluencers)==0){
                        array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                        array_push($arrayInfluencerBuscado,$in);
                    } else {
                        $cont=0;
                        foreach ($arrayDeIdInfluencers as $key => $idinf) {
                            if($idinf==$in['idinfluencer']){
                                $cont++;
                            }
                        }
                        if($cont==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in); 
                        }
                    }
               
            }
        }
        return $arrayInfluencerBuscado;

    }

    private function _filtrarPorCantidadSeguidores($misInfluencer,$cantidad){

        
              
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        foreach ($misInfluencer as $key => $in) {
            
            if($in['cant_seguidores']>$cantidad){
                    if(count($arrayDeIdInfluencers)==0){
                        array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                        array_push($arrayInfluencerBuscado,$in);
                    } else {
                        $cont=0;
                        foreach ($arrayDeIdInfluencers as $key => $idinf) {
                            if($idinf==$in['idinfluencer']){
                                $cont++;
                            }
                        }
                        if($cont==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in); 
                        }
                    }
               
            }
        }
        return $arrayInfluencerBuscado;

    }

    private function _filtrarPorIdioma($misInfluencer,$idIdioma){

        
              
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        foreach ($misInfluencer as $key => $in) {
            
            if($in['ididioma']==$idIdioma){
                    if(count($arrayDeIdInfluencers)==0){
                        array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                        array_push($arrayInfluencerBuscado,$in);
                    } else {
                        $cont=0;
                        foreach ($arrayDeIdInfluencers as $key => $idinf) {
                            if($idinf==$in['idinfluencer']){
                                $cont++;
                            }
                        }
                        if($cont==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in); 
                        }
                    }
               
            }
        }
        return $arrayInfluencerBuscado;

    }

    private function _filtrarPorPago($misInfluencer,$arrayPagos){

        
              
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        foreach ($misInfluencer as $key => $in) {
            foreach ($arrayPagos as $key => $pa) {
                        
                if($in['idpago']==$pa['idpago']){
                        if(count($arrayDeIdInfluencers)==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in);
                        } else {
                            $cont=0;
                            foreach ($arrayDeIdInfluencers as $key => $idinf) {
                                if($idinf==$in['idinfluencer']){
                                    $cont++;
                                }
                            }
                            if($cont==0){
                                array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                                array_push($arrayInfluencerBuscado,$in); 
                            }
                        }
                
                }
            }
        }
        return $arrayInfluencerBuscado;

    }

    private function _filtrarPorCiudadYPais($misInfluencer,$idpais,$idciudad){

        $ciudad = new CiudadModel();
              
        $arrayInfluencerBuscado=[];
        $arrayDeIdInfluencers=[];

        if($idciudad==null){

            foreach ($misInfluencer as $key => $in) {

                $miCiudad= $ciudad->find($in['idciudad']);
                if($miCiudad['idpais']==$idpais){
                    if(count($arrayDeIdInfluencers)==0){
                        array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                        array_push($arrayInfluencerBuscado,$in);
                    } else {
                        $cont=0;
                        foreach ($arrayDeIdInfluencers as $key => $idinf) {
                            if($idinf==$in['idinfluencer']){
                                $cont++;
                            }
                        }
                        if($cont==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in); 
                         }
                    }
                
                }
            
             }

        }else{
            foreach ($misInfluencer as $key => $in) {
                if($in['idciudad']==$idciudad){
                        if(count($arrayDeIdInfluencers)==0){
                            array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                            array_push($arrayInfluencerBuscado,$in);
                        } else {
                            $cont=0;
                            foreach ($arrayDeIdInfluencers as $key => $idinf) {
                                if($idinf==$in['idinfluencer']){
                                    $cont++;
                                }
                            }
                            if($cont==0){
                                array_push($arrayDeIdInfluencers,$in['idinfluencer']);
                                array_push($arrayInfluencerBuscado,$in); 
                            }
                        }
                
                }
            
             }


        }
        
        return $arrayInfluencerBuscado;

    }




}