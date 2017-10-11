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

