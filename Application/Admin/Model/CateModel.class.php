<?php
namespace Admin\Model;
use Think\Model;
class CateModel extends Model {

   //写一个验证的规则

     protected $_validate = array(
      array('catename','require','栏目名必须！') //默认情况下用正则进行验证
/*
      self::EXISTS_VALIDATE 或者0 存在字段就验证（默认）
      self::MUST_VALIDATE 或者1 必须验证
      self::VALUE_VALIDATE或者2 值不为空的时候验证

      unique    验证是否唯一，系统会根据字段目前的值查询数据库来判断是否存在相同的值，当表单数据中包含主键字段时unique不可用于判断主键字段本身*/
   );

}