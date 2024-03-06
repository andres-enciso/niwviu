<div class="card">
    <div class="card-body">


        <form class="row" action="<?php echo isset($data) ? base_url('user/update/' . $data['user_id']) : base_url('user/save'); ?>" method="post">

            <div class="col-md-6">
                <div class="form-group">
                    <label for="name">Nombre del usuario</label>
                    <input type="text" class="form-control" id="name" name="name" placeholder="Nombre de la categoria" value="<?php echo isset($data) ? $data['name'] : ''; ?>">

                    <i class="form-group__bar"></i>
                </div>
                <div class="form-group">
                    <label for="name">Email</label>
                    <input type="email" class="form-control" id="email" name="email" placeholder="email" value="<?php echo isset($data) ? $data['email'] : ''; ?>" required>

                    <i class="form-group__bar"></i>
                </div>
                <button type="submit" class="btn btn-primary">Guardar</button>
            </div>
        </form>
    </div>
</div>
<script src="<?php echo base_url('public/vendors/jquery/jquery.min.js'); ?>"></script>

<script>
    document.getElementById("email").addEventListener("input", function() {
        var emailInput = document.getElementById("email");
        var email = emailInput.value;
        var emailRegex = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
        var isValid = emailRegex.test(email);
        
        if (!isValid) {
            emailInput.setCustomValidity("Ingrese un correo electrónico válido.");
        } else {
            emailInput.setCustomValidity("");
        }
    });
</script>