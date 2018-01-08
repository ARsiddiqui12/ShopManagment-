







            <div class="row wrapper border-bottom white-bg page-heading">
                <div class="col-lg-10">
                    <h2>Product Records</h2>
                    <ol class="breadcrumb">
                        <li>
                            <a href="<?php echo site_url('dashboard'); ?>">Home</a>
                        </li>
                       
                        <li class="active">
                            <strong>Product Records</strong>
                        </li>
                    </ol>
                </div>
                <div class="col-lg-2">

                </div>
            </div>
            
                            
        <div class="wrapper wrapper-content animated fadeInRight">
            
            
            
        </div>           


       <div class="wrapper wrapper-content animated fadeInRight" style="margin-top:-50px;">
            <div class="row">
                <div class="col-lg-12">
                <div class="ibox float-e-margins">
                    <div class="ibox-title">
                        <h5>All Products Details &nbsp;&nbsp;&nbsp;<span style="margin-left:140px;"><a href="<?php echo site_url('categoryc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Category</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('shopc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Shop</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('companyc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Company</a>&nbsp;&nbsp;&nbsp;&nbsp;<a href="<?php echo site_url('productc'); ?>" class="btn btn-sm btn-primary  m-t-n-xs">Add New Product</a></span></h5>
                        
                    </div>
                   
                    <div class="ibox-content">

                    <table class="table table-striped table-bordered table-hover dataTables-example" >
                    <thead>
                    <tr>
                        <th style="text-align:center !important;">Product Image</th>
                        <th style="text-align:center !important;">Product Name</th>
                         <th style="text-align:center !important;">Product Company</th>
                         <th style="text-align:center !important;">Shop Company</th>
                        <th style="text-align:center !important;">Product Quantity</th>
                        <th style="text-align:center !important;">Product Barcode</th>
                        <th style="text-align:center !important;">Actions</th>
                    </tr>
                    </thead>
                    <tbody>
              



                    <?php


                     ?>
                    <?php foreach ($info as $value) {
                    ?>
                   
                    <tr>
                        <td class="customtds"><img src="<?php echo base_url('productuploads')."/".$value->image; ?>" width="50" height="50"></td>
                        <td class="customtds">
                            <?php echo $value->product_name; ?>
                        </td>
                        <td class="customtds"><?php echo $value->company_name;  ?></td>
                        <td class="customtds"><?php echo $value->shop_name;  ?></td>
                        <td class="customtds"><?php echo $value->product_quantity; ?></td>
                        <td class="customtds">
                        <?php  $kode = $value->barcode; ?>
                        <img src="<?php echo site_url();?>/MainController/bikin_barcode/<?php echo $kode;?>"></td>
                        <td class="customtds"><a href="<?php echo site_url('productv')."/".$value->product_id; ?>"><i class="fa fa-table" style="font-size:30px;"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('productu')."/".$value->product_id; ?>"><i class="fa fa-edit" style="font-size:30px;"></i></a>&nbsp;&nbsp;<a href="<?php echo site_url('productd')."/".$value->product_id; ?>"><i class="fa fa-trash-o" style="font-size:30px;"></i></a></td>
                    </tr>
                  <?php } ?>
                    </tbody>
                    <tfoot>
                    <tr>
                        <th style="text-align:center !important;">Product Image</th>
                        <th style="text-align:center !important;">Product Name</th>
                         <th style="text-align:center !important;">Product Company</th>
                         <th style="text-align:center !important;">Shop Company</th>
                        <th style="text-align:center !important;">Product Quantity</th>
                        <th style="text-align:center !important;">Product Barcode</th>
                        <th style="text-align:center !important;">Actions</th>
                    </tr>
                    </tfoot>
                    </table>

                    </div>
                </div>
            </div>
            </div>
            
        </div>



<?php



?>
       