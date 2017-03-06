<?php
    // 命名空间 php 5.3以后版本支持
    namespace Model;
    use Think\Model;

    class AuthModel extends Model{
        // 是否批处理验证
        protected $patchValidate    =   true;
        // 设置用户注册验证规则
        protected $_validate = array(
            // 验证用户名 非空
            //array(字段名称是表单域name属性来的,验证规则,错误提示,[验证条件,附加规则,验证时间]);
            array('auth_name','require','权限名称不能为空'),
            array('auth_name','','权限名称已经存在',0,'unique'),
            array('auth_pid','number','父级权限必须为数字'),
            array('auth_c','require','控制器名称不能为空'),
            array('auth_c','english','控制器名称只能为英文'),
            array('auth_a','require','方法名称不能为空'),
            array('auth_a','english','方法名称只能为英文'),
        );
        // 全路径 和 等级 二期制作
        // 权限信息整体维护
        public function saveData($four){
            // 利用已有数据生成一条新记录(获得新记录主键id值)
            $newid = $this -> add($four); // 数组方式添加数据
            // 利用新记录信息制作 全路径和等级
            // 判断该权限是否是 顶级权限 ,根据结果的不同,全路径 和 等级 都不一样
            if($four['auth_pid'] == 0){
                $path = $newid;
            }else{
                // 获取对应父级权限的信息
                $pinfo = $this -> find($four['auth_pid']);
                $ppath = $pinfo['auth_path'];// 父级全路径
                $path = $ppath.'-'.$newid;
            }
            // 等级的值依赖全路径中 - 的个数
            $level = substr_count($path,'-');
            // 把剩余的两个字段更新
            $sql = "update sw_auth set auth_path='$path',auth_level='$level' where auth_id='$newid'";
            return $this -> execute($sql);
        }
    }
