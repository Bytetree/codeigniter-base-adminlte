<!DOCTYPE html>
<html lang="en">
    <head>
          <title>ByteTree DataWorld | <?=isset($title)?$title:'Login' ?></title>
          <!-- Tell the browser to be responsive to screen width -->
          <meta content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=no" name="viewport">

          <link rel="stylesheet" href="<?= base_url() ?>assets/css/main.min.css">
    </head>
    <body id="login-form">
        <div class="container">
            <div class="row">
                
                <div class="col-md-4 col-md-offset-4 text-center">
                    <div class="login-title">
                        <h3><span>ByteTree DataWorld</span></h3>
                    </div>
                    <?php if(isset($msg) || validation_errors() !== ''): ?>
                    <div class="alert alert-warning alert-dismissible">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">×</button>
                        <h4><i class="icon fa fa-warning"></i> Alert!</h4>
                        <?= validation_errors();?>
                        <?= isset($msg)? $msg: ''; ?>
                    </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('warning')): ?>
                          <div class="alert alert-warning">
                          <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                          <?=$this->session->flashdata('warning')?>
                        </div>
                    <?php endif; ?>
                    <?php if($this->session->flashdata('success')): ?>
                          <div class="alert alert-success">
                            <a href="#" class="close" data-dismiss="alert" aria-label="close" title="close">×</a>
                            <?=$this->session->flashdata('success')?>
                          </div>
                    <?php endif; ?>
                    <div class="form-box">
                        <?php echo form_open(base_url('auth/login'), 'class="login-form" '); ?>
                            <div class="input-group">
                                <input type="text" name="username" id="name" class="form-control" placeholder="Username" >
                                <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                                
                                <input type="submit" name="submit" id="submit" class="form-control" value="Login">
                            </div>
                        <?php echo form_close(); ?>
                    </div>
                </div>
            </div>
        </div>
    </body>
    <script src="<?= base_url() ?>assets/js/scripts.min.js"></script>
</html>