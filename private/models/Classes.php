<?php

class Classes extends Model
{
    protected $allowedColumns = [
        'class',
        'date'
    ];
    protected $beforeInsert = [
        'make_user_id',
        'make_class_id',
    ];
    protected $table = 'class';
    public function validate($data)
    {
        $this->errors = [];
//        学校名检测
        if (empty($data["class"]))
        {
            $this->errors[] = "班级不能为空";
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
            $data['class_id'] = random_string(60);
        }
        return $data;
    }
}