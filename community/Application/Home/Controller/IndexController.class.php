<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){         
    	//中心动态   
        $CentralDynamicsmodel = D('CentralDynamics');       
        $CentralDynamicspost =$CentralDynamicsmodel->limit(8)->order('id desc')->select();
        $this->assign('CentralDynamicsmodel', $CentralDynamicspost);
        //社工之家
       // $CommunityMembersmodel = D('CommunityMembers');
       // $CommunityMemberspost =$CommunityMembersmodel->limit(2)->order('id desc')->select();
       // $this->assign('CommunityMembersmodel', $CommunityMemberspost);
        //特别推荐
         $SpecialRecommendationmodel = D('SpecialRecommendation');
         $SpecialRecommendationpost =$SpecialRecommendationmodel->limit(2)->order('id desc')->select();
         $this->assign('SpecialRecommendationmodel', $SpecialRecommendationpost);
         //精品项目
        $BoutiqueItemmodel = D('BoutiqueItem');
        $BoutiqueItempost =$BoutiqueItemmodel->limit(2)->where('cate_id=5')->order('id desc')->select();
        $this->assign('BoutiqueItemmodel', $BoutiqueItempost);
        $this->display();
    }
}