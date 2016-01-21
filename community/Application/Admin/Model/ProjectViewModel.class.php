<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class ProjectViewModel extends ViewModel {
   public $viewFields = array(
     'project'=>array('id','title','content','user_id','cate_id','time'),
     'projectcategory'=>array('name'=>'category_name','_on'=>'project.cate_id=projectcategory.id'),
     'member'=>array('username', '_on'=>'project.user_id=member.id'),
   );
 }

?>