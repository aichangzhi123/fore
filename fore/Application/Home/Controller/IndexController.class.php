<?php
namespace Home\Controller;
use Think\Controller;
class IndexController extends Controller {
    public function index(){
//        $indeximg=D("news");
//        $info=$indeximg->where("vital='1'")->order("timepost,desc")->limit([0],6)->select();
//        $this->assign("img",$info);
        
        $news=D("news");                //右边新闻显示：
        $rightnews=$news->limit([0],7)->select();
        $this->assign("rightnews",$rightnews);            
        $this->display();
    }
    
}