<?php
namespace Admin\Model;
use Think\Model;

class CategoryModel extends Model{
    // 是否批处理验证
    protected $patchValidate    =   true;
    // 设置用户注册验证规则
    protected $_validate = array(
        // 验证用户名 非空
        //array(字段名称是表单域name属性来的,验证规则,错误提示,[验证条件,附加规则,验证时间]);
        array('cat_name','require','分类名不能为空'),
        array('cat_name','','分类名已存在',0,'unique'),
        array('pid','require','所属分类不能为空'),
        array('pid','number','数据异常'),
        array('status','require','状态不能为空'),
        array('status','number','数据异常')
    );

    private $_db = '';

    public function __construct(){
        $this -> _db = M('Category');
    }

    public function catInit(){
        // 因为模板有排序功能,所以后台排序用处不大
        return $this -> _db -> where('status != -1')
                -> field(array('cat_id','path','cat_name','pid','status',"concat(path,',',cat_id)"=>'fullpath'))
                -> order('fullpath,path')->select();
    }
}
