function entero(e, id, precio) {
    var caracter
    caracter = e.keyCode
    status = caracter
    if (caracter > 47 && caracter < 58) {

        var precio_div_id = "precio_div_" + id;
        var cantidad_div_id = "cantidad_" + id;
        var cantidad_div = document.getElementById(cantidad_div_id).value;
        var precio_total_presentacion = precio * cantidad_div;
        document.getElementById(precio_div_id).innerHTML = precio_total_presentacion;

        return true;
    }
    return false
}

function sumar_numero(id, precio, descuento) {
    var cantidad_div_id = "cantidad_" + id;
    document.getElementById(cantidad_div_id).value++;

    var precio_div_id = "precio_div_" + id;
    var descuento_div_id = "descuento_div_" + id;
    var cantidad_div = document.getElementById(cantidad_div_id).value;

    var precio_total_presentacion = precio * cantidad_div;
    var descuento_total_presentacion = descuento * cantidad_div;

    $('#' + precio_div_id).html("$" + formato(precio_total_presentacion));
    $('#' + descuento_div_id).html("$" + formato(descuento_total_presentacion));
}

function restar_numero(id, precio, descuento) {
    var cantidad_div_id = "cantidad_" + id;
    if (document.getElementById(cantidad_div_id).value > 1) {
        document.getElementById(cantidad_div_id).value--;

        var precio_div_id = "precio_div_" + id;
        var descuento_div_id = "descuento_div_" + id;
        var cantidad_div = document.getElementById(cantidad_div_id).value;

        var precio_total_presentacion = precio * cantidad_div;
        var descuento_total_presentacion = descuento * cantidad_div;

        document.getElementById(precio_div_id).innerHTML = "$" + formato(precio_total_presentacion);
        document.getElementById(descuento_div_id).innerHTML = "$" + formato(descuento_total_presentacion);
    }
}

function formato(valor) {
    valor = Math.round(parseFloat(valor));
    return addPuntos(valor);
}

function addPuntos(nStr) {
    if (String(nStr).substr(0, 1) == '0') {
        return 0;
    }
    if (parseInt(nStr) > 0) {
        var aux = '';
        var cont = 0;
        for (i = String(nStr).length - 1; i >= 0; i--) {
            aux = String(nStr).substr(i, 1) + aux;
            cont++;
            if (cont < String(nStr).length) {
                if (cont % 3 == 0) aux = '.' + aux;
            }
        }
        aux = aux.replace('.', ',');
        //aux = aux+'.00';

        return aux;
    } else {
        return 0;
    }
}




$(document).ready(function() {


    $('.tile')
        // tile mouse actions
        .on('mouseover', function() {
            $(this).children('.photo').css({ 'transform': 'scale(' + $(this).attr('data-scale') + ')' });
        })
        .on('mouseout', function() {
            $(this).children('.photo').css({ 'transform': 'scale(1)' });
        })
        .on('mousemove', function(e) {
            $(this).children('.photo').css({ 'transform-origin': ((e.pageX - $(this).offset().left) / $(this).width()) * 100 + '% ' + ((e.pageY - $(this).offset().top) / $(this).height()) * 100 + '%' });
        })
        // tiles set up
        .each(function() {
            $(this)
                // add a photo container
                .append('<div class="photo"></div>')

                // set up a background image for each tile based on data-image attribute
                .children('.photo').css({ 'background-image': 'url(' + $(this).attr('data-image') + ')' });
        })


    $('.miniatura_img').each(function() {
        $(this).on('click', function(e) {
            e.preventDefault();
            $('.photo').css({ 'background-image': 'url(' + $(this).attr('src') + ')' });
        })
    });

    $(".button-add-to-cart").on("click", function() {
        $('.nav-tabs a[href="#produflash"]').tab('show');
    });

    window.onscroll = function() { scrollFunction() };

    function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("to_up").style.display = "block";
        } else {
            document.getElementById("to_up").style.display = "none";
        }
    }
    $('#to_up').click(function() {
        $("html, body").animate({ scrollTop: 0 }, 600);
        return false;
    });
});