<div class="card">
        <div class="card-body">
                <h4 class="card-title">Category</h4>
                <div class="table-responsive">
                        <div class="d-flex justify-content-end mr-5">
                                <a href="<?php echo base_url('category/new'); ?>" class="btn btn-primary">Agregar Categoria</a>
                        </div>
                        <table id="data-table" class="table table-bordered">
                                <thead class="thead-default">
                                        <tr>
                                                <th>Name</th>
                                                <th>Descrpcion</th>
                                                <th>Actions</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                <th>Descrpcion</th>
                                                <th>Actions</th>
                                        </tr>
                                </tfoot>
                                <tbody>
                                        <?php foreach ($Category as $category) : ?>
                                                <tr>
                                                        <td><?php echo $category->name; ?></td>
                                                        <td><?php echo $category->description; ?></td>

                                                        <td>
                                                                <a href="<?php echo base_url('category/edit/' . $category->category_id); ?>" class="btn btn-info btn--icon">
                                                                        <i class="zmdi zmdi-edit zmdi-hc-fw"></i>
                                                                </a>
                                                        </td>
                                                </tr>
                                        <?php endforeach; ?>
                                </tbody>
                        </table>
                </div>
        </div>
</div>
<script src="<?php echo base_url('public/vendors/jquery/jquery.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendors/datatables/jquery.dataTables.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendors/datatables-buttons/dataTables.buttons.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendors/datatables-buttons/buttons.print.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendors/jszip/jszip.min.js'); ?>"></script>
<script src="<?php echo base_url('public/vendors/datatables-buttons/buttons.html5.min.js'); ?>"></script>