<?php $this->view('includes/header'); ?>
<?php
//print_r($errors);
//print_r($_POST);
?>
<form method="post">
<div class=" p-4 mx-auto shadow rounded" style=" margin-top:100px;width: 100%;max-width: 310px">
    <h2 class="text-center">学校管理系统</h2>
    <img src="<?=ROOT?>/asserts/images/logo.jpg" alt="" style="width: 100px" class="d-block mx-auto">
    <h3 class="text-center">添加成员</h3>
    <?php
    if (count($errors)>0){
    ?>
    <div class="alert alert-warning alert-dismissible fade show" role="alert">
        <strong>错误!</strong>
        <?php
        foreach ($errors as $error)
        {
            echo "<br>$error";
        }
        ?>
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    <?php } ?>
    <br>
    <input type="text" name="lastname" placeholder="姓" class="my-2 form-control" value="<?php get_var('lastname'); ?>">
    <input type="text" name="firstname" placeholder="名" class="my-2 form-control" value="<?php get_var('firstname'); ?>">
    <input type="email" name="email" placeholder="邮箱" class="my-2 form-control" value="<?php get_var('email'); ?>">
    <select name="gender" id="" class="form-control my-2">
        <option <?php get_select('gender',''); ?> value="">--选择性别--</option>
        <option <?php get_select('gender','男'); ?> value="男">男</option>
        <option <?php get_select('gender','女'); ?> value="女">女</option>
    </select>
    <select name="rank" id="" class="form-control my-2">
        <option <?php get_select('rank',''); ?> value="">--选择成员类别--</option>
        <option <?php get_select('rank','学生'); ?> value="学生">学生</option>
        <option <?php get_select('rank','教师'); ?> value="教师">教师</option>
        <option <?php get_select('rank','行政人员'); ?> value="行政人员">行政人员</option>
        <option <?php get_select('rank','学校管理员'); ?> value="学校管理员">学校管理员</option>
        <option <?php get_select('rank','超级管理员'); ?> value="超级管理员">超级管理员</option>
    </select>
    <input type="text" name="password" placeholder="密码" class="my-2 form-control" value="<?php get_var('password'); ?>">
    <input type="text" <?php get_var('password2'); ?> name="password2" placeholder="重复密码" class="my-2 form-control" value="<?php get_var('password2'); ?>">
    <br>
    <button type="button" class="btn btn-danger text-white">取消</button>
    <button class="btn btn-primary float-end" >添加成员</button>
</div>
</form>
<?php $this->view('includes/footer'); ?>
