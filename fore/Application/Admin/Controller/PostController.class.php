<?php   
    namespace Admin\Controller;
    use Think\Controller;
    class PostController extends Controller{
        function AddNews(){
            $post=new \Model\NewsModel();
            if(!empty($_POST))
            {
                if($post->create())
                {
                $rst=$post->add();
                    if($rst)
                        $this->redirect('');	   //提交成功转向地址;
                    else 
                    {       
                    $this->failer('','');        //提交失败;  
                    }
                }
                else
                {
                $this->failer('','');        //提交失败;
                }
            }
        }
    }

?>

