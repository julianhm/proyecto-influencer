<?php

namespace App\Controllers;

class EnsayoController extends BaseController
{
    public function index()
    {
        return view('ejemplo');
    }

    public function crear(){

        $imagefile = $this->request->getFiles();
        $galeria=$this->_upload('galeriaper',$imagefile);
        $foto=$this->_upload2('fotoper');
        $otrafoto=$this->_upload2('otrafotoper');
        var_dump($galeria);
        var_dump($foto);
        var_dump($otrafoto);
        echo "llegue";
    }

    private function _upload($name,$imagefile){

        $arraygaleria=[];
        if ($imagefile = $this->request->getFiles()) {
            
            foreach ($imagefile[$name] as $img) {
                if ($img->isValid() && ! $img->hasMoved()) {
                    $newName = $img->getRandomName();
                    $img->move(WRITEPATH . 'uploads', $newName);
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
                    $imagefile->move(WRITEPATH.'uploads', $newName);
                    return $newName;
              

            }
        }
        return null;
    }
}
