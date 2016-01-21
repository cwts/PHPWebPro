<?php 
namespace Home\Model;
use Think\Model\ViewModel;
class SpecialRecommendationModel extends ViewModel {
   public $viewFields = array(
     'specialrecommendation'=>array('id','title','content','time','user_id')
   );
 }
?>