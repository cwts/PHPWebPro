<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class CenterInstructionModel extends ViewModel {
    public $viewFields = array(
       'Centerinstruction'=>array('id','content','time','user_name'),
   );
 }
?>

