<?php

class Users extends Model
{
    protected $allowedColumns = [
        'firstname',
        'lastname',
        'email',
        'password',
        'gender',
        'rank',
        'date'
    ];
    protected $beforeInsert = [
        'make_user_id',
        'make_school_id',
        'hash_password'];
    protected $table = 'users';
    public function validate($data)
    {
        $this->errors = [];
//        姓名检测
        if (empty($data["lastname"]))
        {
            $this->errors[] = "姓不能为空";
        }
        if (empty($data["firstname"]))
        {
            $this->errors[] = "名不能为空";
        }
//        邮箱检测
        if (empty($data["email"])||!filter_var($data["email"],FILTER_VALIDATE_EMAIL))
        {
            $this->errors[] = "邮箱不合法";
        }
//        检测邮箱是否存在
        if ($this->where('email',$data['email']))
        {
            $this->errors[] = "邮箱已存在";
        }
//        性别检测
        $genders = ['男','女'];
        if (empty($data['gender'])||!in_array($data['gender'],$genders))
        {
            $this->errors[] = "性别不合法";
        }
//         角色检测
        $ranks = ['学生','教师','行政人员','学校管理员','超级管理员'];
        if (empty($data['rank'])||!in_array($data['rank'],$ranks))
        {
            $this->errors[] = "角色不合法";
        }
//         密码检测
        if ($data["password"]!=$data["password2"])
        {
            $this->errors[] = "两次密码不一致";
        }
        if (strlen($data["password"])<8)
        {
            $this->errors[] = "密码不能少于8位";
        }
        if (count($this->errors) == 0)
        {
            return true;
        }
        return false;
    }
    public function make_user_id($data)
    {
        $data['user_id'] = random_string(60);
        return $data;
    }
    public function make_school_id($data)
    {
        if (isset($_SESSION['USER']->school_id))
        {
            $data['school_id'] = $_SESSION['USER']->school_id;
        }
        return $data;
    }
    public function hash_password($data)
    {
        $data['password'] = password_hash($data['password'],PASSWORD_DEFAULT);
        return $data;
    }

}