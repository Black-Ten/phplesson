<?php $this->view('includes/header'); ?>
<?php $this->view('includes/nav'); ?>
    <div class="container-fluid p-4 shadow mx-auto" style="max-width: 1000px;">
        <?php $this->view('includes/crumbs'); ?>
        <div class="row justify-content-center">
            <?php if ($rows): ?>
                <?php foreach ($rows as $row): ?>
                <?php print_r($row);?>
                    <div class="col-12 col-md-6 col-xl-4">
                        <div class="card">
                            <img src="<?=ROOT?>/asserts/images/default_head_icon.jpg" class="card-img-top" alt="...">
                            <div class="card-body">
                                <h5 class="card-title"><?=$row->class?></h5>
                                <p class="card-text"><?=$row->date?></p>
                                <a href="<?=ROOT?>/updataclasse" class="btn btn-primary">更改信息</a>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>
            <?php else: ?>
                <h4 class="text-center">未找到班级</h4>
            <?php endif; ?>
        </div>
    </div>
<?php $this->view('includes/footer'); ?>