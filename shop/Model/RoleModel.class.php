<?php
    // 命名空间 php 5.3以后版本支持
    namespace Model;
    use Think\Model;

    class RoleModel extends Model{
        // 分配权限,收集信息,二期制作,存储信息
        public function saveAuth($role_id,$authids){
            // 1 数组的authids变为字符串的authids
            $authid_str = implode(',',$authids);
            // 2 根据字符串的authids信息 查询对应的操作方法
            $authinfo = D('Auth')->select($authid_str);
            $s = '';
            foreach($authinfo as $k=>$v){
                if(!empty($v['auth_c']) && !empty($v['auth_a'])){
                    $s .= $v['auth_c'].'-'.$v['auth_a'].',';
                }
            }
            $s = rtrim($s,',');
            $sql = "update sw_role set role_auth_ids='$authid_str',role_auth_ac='$s' where role_id='$role_id'";
            return $this -> execute($sql);
        }
    }
