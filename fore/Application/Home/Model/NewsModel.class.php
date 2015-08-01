<?php
namespace Model;
use Think\Model;
class NewsModel extends Model{
        protected $patchValidate = true;
        protected $_validate =array(
        array('title','require','MUST ITEm'),       //标题，内容，作者必须
        array('essay','require','MUST ITEM'),
        array('author','require','MUST ITEM'),
        );       

        
        
}



