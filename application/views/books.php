<div class="card">
        <div class="card-body">
                <h4 class="card-title">Books</h4>
                <div class="table-responsive">
                        <div class="d-flex justify-content-end mr-5">
                                <a href="<?php echo base_url('books/new'); ?>" class="btn btn-primary">Agregar Libro</a>
                        </div>
                        <table id="data-table" class="table table-bordered">
                                <thead class="thead-default">
                                        <tr>
                                                <th>Name</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Published Date</th>
                                                <th>Estatus</th>
                                                <th>Actions</th>
                                        </tr>
                                </thead>
                                <tfoot>
                                        <tr>
                                                <th>Name</th>
                                                <th>Author</th>
                                                <th>Category</th>
                                                <th>Published Date</th>
                                                <th>Estatus</th>
                                                <th>Actions</th>
                                        </tr>
                                </tfoot>
                                <tbody>
                                        <?php foreach ($books as $book) : ?>
                                                <tr>
                                                        <td><?php echo $book->name; ?></td>
                                                        <td><?php echo $book->author; ?></td>
                                                        <td><?php echo $book->category_name; ?></td>
                                                        <td><?php echo $book->published_date; ?></td>
                                                        <td><?php echo ($book->is_available == '1') ? 'Disponible' : 'No disponible'; ?></td>
                                                        <td>
                                                                <a href="<?php echo base_url('books/edit/' . $book->book_id); ?>" class="btn btn-info btn--icon">
                                                                        <i class="zmdi zmdi-edit zmdi-hc-fw"></i>
                                                                </a>
                                                                <a href="<?php echo base_url('books/reservar/' . $book->book_id); ?>" class="btn btn-success btn--icon">
                                                                        <i class="mt-2 zmdi zmdi-present-to-all zmdi-hc-fw"></i>
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