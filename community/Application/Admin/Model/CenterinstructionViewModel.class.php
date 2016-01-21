<?php 
namespace Admin\Model;
use Think\Model\ViewModel;
class CenterInstructionViewModel extends ViewModel {
   public $viewFields = array(
     'Centerinstruction'=>array('id','content','time','user_name'),
    // 'category'=>array('name'=>'category_name','title'=>'category_title', '_on'=>'post.cate_id=category.id'),
    
   );
 }

?>