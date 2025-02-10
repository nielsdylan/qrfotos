class GalleryView {

    constructor(model) {
        this.model = model;
    }

    listar = () => {

    }

    eventos = () => {
        // $('#form-guardar [data-action="agregar-imagen"]').click((e) => {
        //     e.preventDefault();
        //     console.log('ss');

        // });
        $('#form-guardar').on('click', 'a[data-action="agregar-imagen"]', (e) => {
            e.preventDefault();
            $('[data-action="input-imagen"]').trigger('click');
        });
        $('[data-action="input-imagen"]').change(function (e) {
            // curre
            readImage(this, $(e.currentTarget));
        });
        function readImage (input, current) {
            console.log(input.files[0]);

            let html = '';
            if (input.files && input.files[0]) {
                var reader = new FileReader();
                let id = Math.random();
                reader.onload = function (e) {
                    html = `
                        <div class="col-md-2" data-key="`+id+`">
                            <div  style="
                                background: url(`+e.target.result+`);
                                background-size: contain;
                                background-position: center;
                                background-repeat: no-repeat;
                                height: 150px;margin-top: 20px;
                                position: relative; ">
                                <i class="fa fa-trash position-absolute top-0 end-0 text-danger" data-key="`+id+`" id="eliminar-imagen"></i>
                            </div>
                            <input class="form-control form-control-sm d-none" type="file" value="" name="imagen[`+id+`][]" value="`+input.files[0]+`">
                            <input class="form-control form-control-sm" type="text" value="" name="descripcion[`+id+`]">
                        </div>
                    `;
                    $('[data-section="imagenes"]').append(html);
                    // $('.imagen_logo_nuevo').attr('src', e.target.result); // Renderizamos la imagen
                }
                reader.readAsDataURL(input.files[0]);
                imagenesJSON.push({
                    id:id,
                    nameFile: input.files[0].name,
                    file: input.files[0]
                    // size: input.files[0].size
                })
                $('[data-action="input-imagen"]').val('');
            }
        }
        $('#form-guardar').submit((e) => {
            e.preventDefault();
            let data = new FormData($(e.currentTarget)[0]);


            $.each(imagenesJSON, function (index, element) {
                data.append(`fotos[`+element.id+`]`, element.file);
            });
            let model = this.model;
            console.log(data);
            console.log(imagenesJSON);

            Swal.fire({
                title: "¿Está seguro de guardar?",
                text: "Se generara un registro!",
                icon: "warning",
                showCancelButton: true,
                confirmButtonText: "Si, Confirmar!",
                showLoaderOnConfirm: true,
                allowOutsideClick: true,
                backdrop: true,

                preConfirm: async (login) => {
                    return model.guardarFotos(data).then((respuesta) => {
                        return respuesta;

                    }).fail(() => {

                    }).always(() => {
                    });
                },
                allowOutsideClick: () => !Swal.isLoading()
            }).then((result) => {
                console.log(result);

                if (result.isConfirmed) {
                    Swal.fire({
                        title: result.value.title,
                        text: result.value.message,
                        icon: result.value.type,
                    });
                }
            });
        });

        // $('[data-section="imagenes"] #eliminar-imagen').click((e) => {
        $('[data-section="imagenes"]').on('click', '#eliminar-imagen', (e) => {
            e.preventDefault();
            let key = $(e.currentTarget).attr('data-key');
            let array = [];
            $('[data-section="imagenes"]').find('.col-md-2[data-key="'+key+'"]').remove();

            imagenesJSON = imagenesJSON.filter(obj => obj.id != key);

        });
    }
}
