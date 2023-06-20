<?php

class Model extends  Database
{
    public $errors = [];
//    protected $table="users";
    public function __construct()
    {
        if (!property_exists($this,'table'))
        {
            $this->table = strtolower(static::class);
        }
    }
    public function where($column,$value)
    {
        $column = addslashes($column);
        $query="select * from $this->table where $column = :value ";
        return $this->query($query,[
            'value'=>$value
        ]);
    }
    public function findAll()
    {
        $query="select * from $this->table";
        return $this->query($query);
    }
//    添加
    public function insert($data)
    {
//        移除未允许的列
        if (property_exists($this,'allowedColumns'))
        {
            foreach ($data as $key =>$column)
            {
                if (!in_array($key,$this->allowedColumns))
                {
                    unset($data[$key]);
                }
            }
        }
//        在插入前运行方法 处理
        if (property_exists($this,'beforeInsert'))
        {
            foreach ($this->beforeInsert as $func)
            {
                $data = $this->$func($data);
            }
        }
        $keys = array_keys($data);
        $columns = implode(',',$keys);
        $values = implode(',:',$keys);
        //insert into table (column1,column2) values (:column1,:column2)
        $query = "insert into $this->table ($columns) values (:$values)";
//        echo $query;
        return $this->query($query,$data);
    }
//更新
    public function update($id,$data)
    {

        $str = "";
        foreach ($data as $key => $value)
        {
            $str .= $key."=:".$key.",";
        }
        $str = trim($str,",");
        $data["id"] = $id;
        //update table set column = :value,column2 = :value2 where id = :id
        $query = "update $this->table set $str where id = :id";
//        echo $query;
        return $this->query($query,$data);
    }
//    删除
    public function delete($id)
    {
//        delete from table where id = :id
        $query = "delete from $this->table where id = :id";
        $data["id"] = $id;
//        echo $query;
        return $this->query($query,$data);
    }
}