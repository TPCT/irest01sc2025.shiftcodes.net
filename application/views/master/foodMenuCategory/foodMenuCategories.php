<section class="main-content-wrapper">
    <?php
    if ($this->session->flashdata('exception')) {
        echo '<section class="alert-wrapper">
        <div class="alert alert-success alert-dismissible fade show" role="alert">     
            <div class="alert-body">
            <p><i class="m-right fa fa-check"></i>';
        echo escape_output($this->session->flashdata('exception'));unset($_SESSION['exception']);
        echo '</p></div></div></section>';
    }
    ?>
    <section class="content-header">
        <div class="row">
            <div class="col-md-6">
                <h2 class="top-left-header"><?php echo lang('food_menu_categories'); ?> </h2>
                <input type="hidden" class="datatable_name" data-title="<?php echo lang('food_menu_categories'); ?>" data-id_name="datatable">
            </div>
            <div class="col-md-offset-2 col-md-2">

            </div>
            <div class="col-md-offset-2 col-md-2">
                <a class="btn_list m-right bg-blue-btn btn" href="<?php echo base_url() ?>foodMenuCategory/sortingForPOS">
                    <i class="fa fa-exchange"></i> &nbsp; <?php echo lang('ordering_for_pos'); ?></a>
            </div>
        </div>
    </section>

        <div class="box-wrapper">
            <!-- general form elements -->
            <div class="table-box">
                <!-- /.box-header -->
                <div class="table-responsive">
                    <table id="datatable" class="table table-striped">
                        <thead>
                            <tr>
                                <th class="ir_w_1"> <?php echo lang('sn'); ?></th>
                                <th class="ir_w_28"><?php echo lang('category_name'); ?></th>
                                <th  class="ir_w_28"><?php echo lang('description'); ?></th>
                                <th class="ir_w_17"><?php echo lang('added_by'); ?></th>
                                <th  class="ir_w_1"><?php echo lang('actions'); ?></th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            if ($foodMenuCategories && !empty($foodMenuCategories)) {
                                $i = count($foodMenuCategories);
                            }
                            foreach ($foodMenuCategories as $fmc) {
                                ?>
                            <tr>
                                <td class="ir_txt_center"><span><?php echo escape_output($i--); ?></span></td>
                                <td><?php echo escape_output($fmc->category_name) ?></td>
                                <td><?php echo escape_output($fmc->description) ?></td>
                                <td><?php echo escape_output(userName($fmc->user_id)); ?></td>
                                <td class="ir_txt_center ir_txt_center">
                                    <div class="btn-group actionDropDownBtn">
                                        <button type="button" class="btn bg-blue-color dropdown-toggle"
                                            id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                            <i data-feather="more-vertical"></i>
                                        </button>
                                        <ul class="dropdown-menu dropdown-menu-lg-end" aria-labelledby="dropdownMenuButton1" role="menu">
                                            <li data-access="update-229" class="menu_assign_class"><a
                                                    href="<?php echo base_url() ?>foodMenuCategory/addEditFoodMenuCategory/<?php echo escape_output($this->custom->encrypt_decrypt($fmc->id, 'encrypt')); ?>"><i
                                                        class="fa fa-pencil tiny-icon"></i><?php echo lang('edit'); ?></a>
                                            </li>
                                            <li data-access="delete-229" class="menu_assign_class"><a class="delete"
                                                    href="<?php echo base_url() ?>foodMenuCategory/deleteFoodMenuCategory/<?php echo escape_output($this->custom->encrypt_decrypt($fmc->id, 'encrypt')); ?>"><i
                                                        class="fa fa-trash tiny-icon"></i><?php echo lang('delete'); ?></a>
                                            </li>
                                        </ul>
                                    </div>
                                </td>
                            </tr>
                            <?php
                            }
                            ?>
                        </tbody>
                      
                    </table>
                </div>
                <!-- /.box-body -->
            </div>
        </div>
  
        
</section>
<script src="<?php echo base_url(); ?>frequent_changing/js/inventory.js"></script>
<!-- DataTables -->
<script src="<?php echo base_url(); ?>assets/datatable_custom/jquery-3.3.1.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/jquery.dataTables.min.js"></script>
<script src="<?php echo base_url(); ?>assets/bower_components/datatables.net-bs/js/dataTables.bootstrap.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/dataTables.bootstrap4.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/dataTables.buttons.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/buttons.html5.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/buttons.print.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/jszip.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/pdfmake.min.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/dataTable/vfs_fonts.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/newDesign/js/forTable.js"></script>
<script src="<?php echo base_url(); ?>frequent_changing/js/custom_report.js"></script>