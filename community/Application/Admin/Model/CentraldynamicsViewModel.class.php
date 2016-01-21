<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class CentraldynamicsViewModel extends ViewModel {
   public $viewFields = array(
     'centraldynamics'=>array('id','title','content','time','user_id'),
    // 'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'post.cate_id=category.id'),
     'member'=>array('username', '_on'=>'centraldynamics.user_id=member.id'),
   );
 }

?>