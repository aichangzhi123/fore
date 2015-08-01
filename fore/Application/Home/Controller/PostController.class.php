<?php

namespace Home\Controller;
use Think\Controller;
class PostController extends Controller{
    function ShowAll(){
        $post=D("post");
        $info=$post->select();
        $this->assign("info",$info);
        //var_dump($info);
        $this->display(); 
    }
    
    function ShowPost($postid){
        $post=D("post");
        $mes=$post->where("postid= '$postid' ")->select();
        $this->assign("mes",$mes);
        $this->display();
    }
    
    
    
    
}

