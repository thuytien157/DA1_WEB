<?php
class sanphamController{
    public function __construct($idtl)
    {
        include_once 'models/sanphammodel.php';
        $sanphammodel = new sanphamModel();
        $sanphammodel->dstl();
        if($idtl==''){
        
        // $ds->dsdm();
        $sanphammodel->dssp();
        $kq=$sanphammodel->sp; 
        include_once 'view/sanpham.php';
    }else{

        // $ds->dsdm();
        $kq=$sanphammodel->sptheotl($idtl);
        include_once 'view/sanpham.php';
    }
}
}