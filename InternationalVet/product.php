<?php include 'header.php'; ?>
<section id="product-view" class="box-white distance-box" >
    <div class="row container-fluid">
        <div class="col-lg-7">
            <div class="tile center-block" data-scale="2.4" data-image="images/image-9.jpg"></div>
            <div class="miniatura center-block">
                <img class="miniatura_img" src="images/image-9.jpg">
                <img class="miniatura_img" src="images/image-10.jpg">
                <img class="miniatura_img" src="images/image-11.jpg">
                <img class="miniatura_img" src="images/image-12.jpg">
            </div>
        </div>
        <div class="col-lg-5">
            <h1 class="product-title" data-hook="product-title" style="color: #4E6CB1">Skyla Vb1</h1>
            <br>
            <span id="precio_div_1" ata-hook="product-price" style="color: #9D3E92; font-size: 2rem;">$1.704.989</span>
            <br>
            <span style="font-size: 0.8rem">Cantidad</span>
            <br>
            <div class="btn btn-group">
                <input type="button" value="-" onClick="restar_numero(1,1704989, 0)" class="btn btn-link" style="color: black">
                <input type="text" id="cantidad_1" name="cantidad_1" value="1" readonly="readonly" style="width: 1.7rem">
                <input type="button" value="+" onClick="sumar_numero(1,1704989, 0)" class="btn btn-link" style="color: black">
            </div>
            <br>
            <div>
                <p style="color: #4E6CB1; font-weight: bold; font-size: 0.8rem" class="text-center-justified">
                    El Skyla Vb1 es un analizador automático de bioquímica líquida para veterinaria. Sistema compacto diseñado para realizar test de bioquímica en la propia clínica de manera rápida, fiable y precisa. Es sencillo e intuitivo de manejar; ideal para clínicas veterinarias, clínica ambulante, laboratorios y compañías farmaceúticas y bioquímicas.
                </p>
            </div>
            
            <a href="" data-toggle="tab" class="nav-link active btn btn-info" style="background: #4E6CB1; border:none; box-shadow: none;">Realizar mi solicitud</a>
        </div>
    </div>
</section>
<section class="distance container-fluid ">
    <div class="">
        <ul class="nav nav-tabs box-white tab-bordered " role="tablist">
            <li class="nav-item  ">
                <a class="nav-link active" data-toggle="tab" href="#info" role="tab">Caracteristicas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#description" role="tab">Ventajas</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#produflash" role="tab">Perfiles</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#commentaries" role="tab">Determinaciones Individuales</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" data-toggle="tab" href="#payment" role="tab">Descargas</a>
            </li>
        </ul>
        <div class="tab-content box-white">
            <div class="tab-pane active" id="info" role="tabpanel">
                hola
            </div>
            <div class="tab-pane" id="description" role="tabpanel">
            </div>
            <div class="tab-pane" id="produflash" role="tabpanel">
            </div>
            <div class="tab-pane" id="commentaries" role="tabpanel">
            </div>
            <div class="tab-pane" id="payment" role="tabpanel">
            </div>
        </div>
    </div>
</section>
<?php include 'footer.php'; ?>