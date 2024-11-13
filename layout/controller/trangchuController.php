<?php
class trangchuController{
    public function __construct($id = null){
        include_once "models/trangchumodel.php";
        $trangchumodel = new trangchuModel();
        // if ($id != '') {
        //     $trangchumodel->onesp($id);    //sp->motsp
        //     $trangchumodel->splienquan($id,$iddm);
        //     include_once 'views/chitietsanpham.php';
        // }else{
            $trangchumodel->dssp();
            include_once "view/trangchu.php";
           
        // }
    }
}
