<div class="card">
    <div class="card-body">


        <form class="row" action="<?php echo isset($data3) ? base_url('reservar/' . $data2['book']['book_id']) : (isset($data2) ? base_url('books/update/' . $data2['book']['book_id']) : base_url('books/save')); ?>" method="post">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre del Libro</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre del Libro" value="<?php echo isset($data2['book']) ? $data2['book']['name'] : ''; ?>" <?php echo isset($data3) ? 'disabled' : ''; ?>>

                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="author">Autor</label>
                    <input type="text" class="form-control" id="author" name="author" placeholder="Autor" value="<?php echo isset($data2['book']) ? $data2['book']['author'] : ''; ?>" <?php echo isset($data3) ? 'disabled' : ''; ?>>
                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="category_id">Categoría</label>
                    <select class="form-control" id="category_id" name="category_id" <?php echo isset($data3) ? 'disabled' : ''; ?>>
                        <?php foreach ($data1['categories'] as $category) : ?>
                            <option value="<?php echo $category['category_id']; ?>" <?php echo (isset($data2['book']) && $data2['book']['category_id'] == $category['category_id']) ? 'selected' : ''; ?>><?php echo $category['name']; ?></option>
                        <?php endforeach; ?>
                    </select>
                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="published_date">Fecha de Publicación</label>
                    <input type="date" class="form-control" id="published_date" name="published_date" value="<?php echo isset($data2['book']) ? $data2['book']['published_date'] : ''; ?>" <?php echo isset($data3) ? 'disabled' : ''; ?>>
                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="is_available">Disponible</label>
                    <select class="form-control" id="is_available" name="is_available" <?php echo isset($data3) ? 'disabled' : ''; ?>>>
                        <option value="1" <?php echo (isset($data2['book']) && $data2['book']['is_available'] == 1) ? 'selected' : ''; ?>>Sí</option>
                        <option value="0" <?php echo (isset($data2['book']) && $data2['book']['is_available'] == 0) ? 'selected' : ''; ?>>No</option>
                    </select>
                    <i class="form-group__bar"></i>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
            <?php if (isset($data3)) : ?>
                <div class="form-group">
                    <label for="author">Autor</label>
                    <select class="form-control" id="user_id" name="user_id">
                        <?php if (isset($data3)) : ?>
                            <option value='0'>Seleccionar algun usuario
                                </option>
                            <?php foreach ($data3 as $user) : ?>
                                
                                <option value="<?php echo $user['user_id']; ?>" <?php echo (isset($data2['book']) && $data2['book']['user_id'] == $user['user_id']) ? 'selected' : ''; ?>>
                                    <?php echo $user['name']; ?> (<?php echo $user['email']; ?>)
                                </option>
                            <?php endforeach; ?>
                        <?php else : ?>
                            <option value="" disabled>No hay usuarios disponibles</option>
                        <?php endif; ?>
                    </select>
                </div>
            <?php endif; ?>
        </form>

    </div>
</div>
<script src="<?php echo base_url('public/vendors/jquery/jquery.min.js'); ?>"></script>