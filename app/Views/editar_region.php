<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Bootstrap demo</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <h1>Regiones</h1>
        <nav class="navbar navbar-expand-lg bg-body-tertiary">
        <div class="container-fluid">
          <a class="navbar-brand" href="<?php echo base_url ('/');?>">Inicio</a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavDropdown" aria-controls="navbarNavDropdown" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarNavDropdown">
            <ul class="navbar-nav">
              <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                  Ci Ciudadanos
                </a>
                  <ul class="dropdown-menu">
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_ciudadanos');?>">Ciudadanos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_departamentos');?>">Departamentos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_municipios');?>">Municipios</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_nivelesacad');?>">Niveles Academicos</a></li>
                    <li><a class="dropdown-item" href="<?php echo base_url ('ver_regiones');?>">Regiones</a></li>
                  </ul>
              </li>
             
            </ul>
          </div>
        </div>
      </nav>
        <form action="<?=base_url('modificar_region')?>" method="post">
            <div class="mb-3">
                <label for="txtCodRegion" class="form-label">Código de Región</label>
                 <input type="number" class="form-control" id="txtCodRegion" name="txtCodRegion" placeholder="Ingrese codigo de region" value="<?=$datos['cod_region'];?>">
            </div>
            <div class="mb-3">
                <label for="txtNombre" class="form-label">Nombre</label>
                 <input type="text" class="form-control" id="txtNombre" name="txtNombre" placeholder="Ingrese Nombre de la region " value="<?=$datos['nombre'];?>">
            </div>
            <div class="mb-3">
                <label for="txtDescripcion" class="form-label">Descripción</label>
                 <input type="text" class="form-control" id="txtDescripcion" name="txtDescripcion" placeholder="Ingrese Descripcion de la region" value="<?=$datos['descripcion'];?>">
            </div>
            <button type="submit" class="btn btn-primary" id="btnGuardar" name="btnGuardar">Guardar Cambios</button>
        </form>


      
    </div>

    



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>