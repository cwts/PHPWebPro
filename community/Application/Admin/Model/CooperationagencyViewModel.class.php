<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class CooperationagencyViewModel extends ViewModel {
   public $viewFields = array(
     'cooperationagency'=>array('id','title','content','time','photoname','photo','user_id'),
    // 'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'post.cate_id=category.id'),
     'member'=>array('username', '_on'=>'cooperationagency.user_id=member.id'),
   );
 }

?>