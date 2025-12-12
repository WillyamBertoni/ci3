<?php
defined('BASEPATH') OR exit('No direct script access allowed');
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title><?= $title_page ?></title>

    <!-- Bootstrap core CSS -->
    <link href="https://getbootstrap.com/docs/4.1/dist/css/bootstrap.min.css" rel="stylesheet">

    <body>
        <!-- Begin Page Content -->
        <div class="container-fluid">
            <nav aria-label="breadcrumb">
                <ol class="breadcrumb ">
                </ol>
            </nav>

            <h1> Tampil Data Postgre </h1>
            
            <!-- DataTables Example -->
            <div class="card shadow">
            
                <div class="card-header d-sm-flex align-items-center justify-content-between">
                    <a href="#" onClick="window.location.reload();" class="continue d-none d-sm-inline-block btn btn-sm btn-primary shadow-sm"><i class="fas fa-sync fa-sm text-white-50"></i> Refresh</a>
                </div>
                <div class="card-card-body table-responsive p-0">
                    <div class="table table-striped align-middle">
                        <table class="table table-bordered table-striped nowrap text-gray-900" id="dataTable" style="font-size: 13px;" width="100%" cellspacing="0">
                            <thead>
                                <tr class="table-success">
                                    <th scope="col">NO.</th>
                                    <th scope="col">NO. REG</th>
                                    <th scope="col">NO. RM</th>                          
                                    
                                </tr>
                            </thead>
                            <tbody>
                                <?php foreach ($cara_keluar as $view_data): ?>
                                    <tr>
                                        <td><?php echo $view_data->kd_statuskeluar ?></td>
                                        <td><?php echo $view_data->kd_instalasi ?></td>
                                        <td><?php echo $view_data->ktif ?></td>
                                    </tr>
                                </tbody>
                                <?php endforeach; ?>
                        </table>                                
                    </div>
                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        </div>
        <!-- End of Main Content -->
         <script src="ajax.googleapis.com"></script>
        <script src="<?php echo base_url('assets/js/adminlte.min.js'); ?>"></script>
    </body>
</html>