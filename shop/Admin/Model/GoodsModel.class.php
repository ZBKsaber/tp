<?php
    // 命名空间 php 5.3以后版本支持
    namespace Admin\Model;
    use Think\Model;

    class GoodsModel extends Model{
        // 是否批处理验证
        protected $patchValidate    =   true;
        // 设置用户注册验证规则
        protected $_validate = array(
            // 验证用户名 非空
            //array(字段名称是表单域name属性来的,验证规则,错误提示,[验证条件,附加规则,验证时间]);
            array('goods_name','require','商品名不能为空'),
            array('goods_name','','商品名已存在',0,'unique'),
            array('goods_category_id','number','数据异常'),
            array('goods_price','require','商品价格不能为空'),
            array('goods_number','require','商品数量不能为空'),
            array('goods_weight','require','商品重量不能为空'),
            array('goods_introduce','require','商品描述不能为空'),
            // // 用户名唯一性
            // array('username','','用户名已存在',0,'unique'),
            // // 密码,非空
            // array('password','require','密码不能为空'),
            // // 确认密码非空,和密码保持一致
            // array('password2','require','确认密码不能为空'),
            // array('password2','password','两次密码不一致',0,'confirm'),
            // // 验证邮箱格式
            // array('user_email','email','邮箱格式不确',2),
            // // qq号码 纯数字 位数5-12
            // array('user_qq','number','qq号码为纯数字'),
            // array('user_qq','5,12','qq长度为5-12位数字',0,'length'),
            // // 学历 必须选择一个
            // array('user_xueli','1,2,3,4,5','学历必须选择一个',0,'in'),
            // //爱好 至少选择两个 通过当前模型类的一个方法进行验证
            // array('user_hobby','check_hobby','爱好至少选择两个',1,'callback'),
        );
    }
