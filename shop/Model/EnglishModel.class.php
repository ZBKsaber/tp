<?php
    // 命名空间 php 5.3以后版本支持
    namespace Model;
    use Think\Model;

    class EnglishModel extends Model{
        // 定义真实操作的数据表名
        protected $trueTableName = 'english';
    }
