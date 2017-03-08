<?php
    // 命名空间 php 5.3以后版本支持
    namespace Admin\Model;
    use Think\Model;

    class ManagerModel extends Model{
        // 是否批处理验证
        protected $patchValidate    =   true;
        // 设置用户注册验证规则
        protected $_validate = array(
            // 验证用户名 非空
            //array(字段名称是表单域name属性来的,验证规则,错误提示,[验证条件,附加规则,验证时间]);
            array('mg_name','require','管理员名称不能为空'),
            array('mg_name','','管理员名称已存在',0,'unique'),
            array('mg_pwd','require','密码不能为空'),
            array('mg_role_id','number','数据异常'),
        );
    }
