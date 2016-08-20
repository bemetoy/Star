<?php
namespace Home\Model;
use Think\Model;
class UserModel extends Model {
    //定义自动验证
    protected $_validate = array(
        array('name','require','用户名必须'),
        array('password','require','密码必须'),
        array('level','require','级别必须'),
    );
}