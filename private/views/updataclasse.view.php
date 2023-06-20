<?php $this->view('includes/header'); ?>
<?php
//print_r($errors);
//print_r($_POST);
?>
<form method="post">
    <div class=" p-4 mx-auto shadow rounded" style=" margin-top:100px;width: 100%;max-width: 310px">
        <h2 class="text-center">学校管理系统</h2>
        <img src="<?=ROOT?>/asserts/images/logo.jpg" alt="" style="width: 100px" class="d-block mx-auto">
        <h3 class="text-center">更改班级</h3>
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
        <input type="text" name="class" placeholder="班级" class="my-2 form-control" value="<?php get_var('class'); ?>">
        <input type="text" name="class_id" placeholder="班级ID" class="my-2 form-control" value="<?php get_var('class_id'); ?>">
        <input type="data" name="email" placeholder="数据" class="my-2 form-control" value="<?php get_var('data'); ?>">
        <input type="text" name="user_id" placeholder="学生" class="my-2 form-control" value="<?php get_var('user_id'); ?>">
        <br>
        <button type="button" class="btn btn-danger text-white">取消</button>
        <button class="btn btn-primary float-end" >更改</button>
    </div>
</form>
<?php $this->view('includes/footer'); ?>
