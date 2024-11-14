<?php
class trangchuController{
    public function __construct($id = null){
        include_once "models/trangchumodel.php";
        $trangchumodel = new trangchuModel();
        if ($id != '') {
            $trangchumodel->onesp($id);    //sp->motsp
            $trangchumodel->splienquan($id,$idtl);
            include_once 'views/chitietsanpham.php';
        }else{
            $trangchumodel->dssp();
            $trangchumodel->dsspMoi();
            $trangchumodel->dsspSale();
            include_once "view/trangchu.php";
        }
    }
}
