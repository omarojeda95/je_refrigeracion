$(function () {
    console.log('Hola');
});

$("#combo_servicio").change(function (e) {
    e.preventDefault();
    id = $(this).val();
    $.ajax({
        type: "POST",
        url: "./get_dash_servicio",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        data: {
            id: id
        },
        success: function (response) {
            // Inicio Imagenes
            let div_images = '';
            response['imagenes'].forEach(element => {
                div_images += `<div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio${element['id']}" name="customRadio"
                                        class="custom-control-input" ${(element['principal'] == 1) ? 'checked' : ''}>
                                        <label class="custom-control-label" for="customRadio${element['id']}">
                                            <img src="${element['url']}" width="200px"> <button class="btn btn-sm btn-danger">Eliminar</button>
                                        </label>
                                </div>`;
            });
            $("#imagen_servicios").html(div_images);
            // Fin
        },
        error: function (msg) {
            console.log(msg);
            var errors = msg.responseJSON;
        }
    });
});

let editar_imagenes = () => {
    id_servicio = $("#combo_servicio").val();
    console.log(id_servicio);
    if (id_servicio) {
        $("#modal_edit_imagen").modal("show");
    }
}

let save_imagenes = () => {

    // console.log($('#form_imagen')[0].dropzone.getAcceptedFiles()[0]);

    fdata = new FormData();
    obj = $('#form_imagen')[0].dropzone.getAcceptedFiles();
    result = Object.keys(obj).map((key) => [Number(key), obj[key]]);
    console.log(result);
    fdata.append('files[]', result);
    $.ajax({
        type: "POST",
        url: "./subir_imagenes",
        headers: {
            "X-CSRF-TOKEN": $('meta[name="csrf-token"]').attr('content')
        },
        data: fdata,
        contentType: false,
        processData: false,
        success: function (response) {
            // Inicio Imagenes
            let div_images = '';
            response['imagenes'].forEach(element => {
                div_images += `<div class="custom-control custom-radio mb-2">
                                    <input type="radio" id="customRadio${element['id']}" name="customRadio"
                                        class="custom-control-input" ${(element['principal'] == 1) ? 'checked' : ''}>
                                        <label class="custom-control-label" for="customRadio${element['id']}">
                                            <img src="${element['url']}" width="200px"> <button class="btn btn-sm btn-danger">Eliminar</button>
                                        </label>
                                </div>`;
            });
            $("#imagen_servicios").html(div_images);
            // Fin
        },
        error: function (msg) {
            console.log(msg);
            var errors = msg.responseJSON;
        }
    });
    // var formData = new FormData(this);
    // $.ajax({
    //     type: 'POST',
    //     url: "{{ url('upload')}}",
    //     data: formData,
    //     cache: false,
    //     contentType: false,
    //     processData: false,
    //     success: (data) => {
    //         this.reset();
    //         alert('Image has been uploaded using jQuery ajax successfully');
    //     },
    //     error: function (data) {
    //         console.log(data);
    //     }
    // });
}
