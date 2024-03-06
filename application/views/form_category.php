<div class="card">
    <div class="card-body">


        <form class="row" action="<?php echo isset($data) ? base_url('category/update/' . $data['category_id']) : base_url('category/save'); ?>" method="post">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la categoria" value="<?php echo isset($data) ? $data['name'] : ''; ?>">

                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="name">Descripcion</label>
                    <input type="text" class="form-control" id="description" name="description" placeholder="Descripcion" value="<?php echo isset($data) ? $data['description'] : ''; ?>">

                    <i class="form-group__bar"></i>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url('public/vendors/jquery/jquery.min.js'); ?>"></script>