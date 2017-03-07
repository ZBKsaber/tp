<?php
namespace Admin\Model;
use Think\Model;

class CategoryModel extends Model{
    private $_db = '';

    public function __construct(){
        $this -> _db = M('Category');
    }

    public function select(){
        // 因为模板有排序功能,所以后台排序用处不大
        return $this -> _db -> where('status != -1')
                -> field(array('cat_id','path','cat_name','pid','status',"concat(path,',',cat_id)"=>'fullpath'))
                -> order('fullpath,path')->select();
    }
}
