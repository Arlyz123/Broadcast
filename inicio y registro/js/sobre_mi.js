const btn_editar = document.getElementById('edit');


btn_editar.addEventListener("click", function(){
    
    //Division Principal

    const div_general = C.create('div');

    //General

    const salto_de_linea = C.create('br');

    //Divisiones de miembro Estudios, Deportes, Pelicula, Cancion, Estado

    const div_estudios = C.create('div');
    const div_deportes = C.create('div');
    const div_eleccion_deportes = C.create('div')
    const div_pelicula = C.create('div');
    const div_cancion = C.create('div');
    const div_estado = C.create('div');

    //Creacion de cada formulario por miembro
    
    // Estudios

    const h2_estudios = C.create('h2', {innerHTML: 'Estudios'});
    const h3_institucion = C.create('h3', {innerHTML: 'Institución'});

    const input_institucion = C.create('input', {
        type: 'text', class: 'input_sobre_mi', name: 'institucion[]',
        placeholder: "Ingrese su Institución"
    });

    //Deportes

    const h2_deportes = C.create('h2', {innerHTML: 'Deportes'});
    const h3_elegir_deporte = C.create('h3',{innerHTML: 'Elija algún deporte:'});


    const span_futbol = C.create('span', {innerHTML: 'Fútbol'});
    const checkbox_futbol = C.create('input', {
        type: 'checkbox', class: 'check_box_sobre_mi', name: 'futbol[]',
        value: 'Futbol'
    });

    const span_basket = C.create('span', {innerHTML: 'Basket'});
    const checkbox_basket = C.create('input', {
        type: 'checkbox', class: 'check_box_sobre_mi', name: 'basket[]',
        value: 'Basket'
    });

    const span_voley = C.create('span', {innerHTML: 'Voley'});
    const checkbox_voley = C.create('input', {
        type: 'checkbox', class: 'check_box_sobre_mi', name: 'voley[]',
        value: 'Voley'
    });

    const span_tenis = C.create('span', {innerHTML: 'Tenis'});
    const checkbox_tenis = C.create('input', {
        type: 'checkbox', class: 'check_box_sobre_mi', name: 'tenis[]',
        value: 'Tenis'
    });

    const span_natacion = C.create('span', {innerHTML: 'Natación'});
    const checkbox_natacion = C.create('input', {
        type: 'checkbox', class: 'check_box_sobre_mi', name: 'natacion[]',
        value: 'Natacion'
    });

    const span_otro_deporte = C.create('span', {innerHTML: 'Otro'});
    const input_otro_deporte = C.create('input', {
        type: 'text', class: 'input_sobre_mi', name: 'otro_deporte[]',
        placeholder: 'Ingrese otro deporte'
    });

    //Pelicula

    const h2_pelicula_fav = C.create('h2', {innerHTML: 'Película Favorita'});
    const h3_pelicula_fav = C.create('h3',{innerHTML: 'Ingrese su película favorita'});

    const input_pelicula_fav = C.create('input', {type: 'text', class: 
    'input_sobre_mi', name: 'pelicula_fav[]', placeholder: 'Ingrese la pelicula'
    });


    //Cancion

    const h2_cancion_fav = C.create('h2', {innerHTML: 'Canción Favorita'});
    const h3_cancion_fav = C.create('h3',{innerHTML: 'Ingrese su canción favorita'});

    const input_cancion_fav = C.create('input', {type: 'text', class: 
    'input_sobre_mi', name: 'cancion_fav[]', placeholder: 'Ingrese la canción'
    });

    // Estado 

    const h2_estado_relacion = C.create('h2', {innerHTML: 'Estado de Relación'});
    const h3_estado_relacion = C.create('h3', {innerHTML: 'Elija su estado de relación'});

    const input_estado_relacion = C.create('select', {name: 'estado_relacion[]'});
    const er_opcion_0 = C.create('option', {value: '0', innerHTML: '--Selección--'})
    const er_opcion_1 = C.create('option', {value: 'Soltero', innerHTML: 'Soltero/a'});
    const er_opcion_2 = C.create('option', {value: 'En relacion', innerHTML: 'En Relación'});
    const er_opcion_3 = C.create('option', {value: 'Casado', innerHTML: 'Casado/a'});
    const er_opcion_4 = C.create('option', {value: 'Viudo', innerHTML: 'Viudo/a'});
    

    //boton de cancelar

    const cancelar = C.create('a', {href: 'javascript:void(0)', innerHTML:
    'Cancelar X', onclick: function(){C.remove(div_general);}
    });

    //boton de guardar 

    const guardar = C.create('input', {
        type: 'submit', value:'guardar', id: 'guardar'
    });


    //Apendeamos cada etiqueta a su nodo padre
    //estudios
    C.append([h2_estudios, h3_institucion, input_institucion], div_estudios);
    //deporte
    C.append([
        span_futbol, checkbox_futbol, salto_de_linea,
        span_basket, checkbox_basket, salto_de_linea,
        span_voley, checkbox_voley, salto_de_linea,
        span_tenis, checkbox_tenis, salto_de_linea,
        span_natacion, checkbox_natacion, salto_de_linea,
        span_otro_deporte, salto_de_linea,
        input_otro_deporte
    ], div_eleccion_deportes);
    C.append([h2_deportes, h3_elegir_deporte, div_eleccion_deportes], div_deportes);
    //pelicula
    C.append([h2_pelicula_fav, h3_pelicula_fav, input_pelicula_fav], div_pelicula);
    //cancion
    C.append([h2_cancion_fav, h3_cancion_fav, input_cancion_fav], div_cancion);
    //estado
    C.append([er_opcion_0, er_opcion_1, er_opcion_2, er_opcion_3, er_opcion_4], input_estado_relacion);
    C.append([h2_estado_relacion, h3_estado_relacion, input_estado_relacion], div_estado);

    //Append al div general

    C.append([
        div_estudios, salto_de_linea,
        div_deportes, salto_de_linea, 
        div_pelicula, salto_de_linea, 
        div_cancion, salto_de_linea,
        div_estado, salto_de_linea,
        cancelar, guardar

    ], div_general);

    //Unir todo al nodo principal del index

    C.append(div_general, C.id('Editado'));

})