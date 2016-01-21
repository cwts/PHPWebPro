<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class ImagesViewModel extends ViewModel {
   public $viewFields = array(
     'images'=>array('id','name','location','time','user_id','status','url'),
     'modulecategory'=>array('name'=>'module_name','_on'=>'images.location=modulecategory.id'),
     'member'=>array('username', '_on'=>'images.user_id=member.id'),
   );
 }

?>