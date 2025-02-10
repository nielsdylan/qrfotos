class GalleryListView {

    constructor(model) {
        this.model = model;
    }

    listar = () => {

    }

    eventos = () => {

        // $('[data-section="imagenes"] #eliminar-imagen').click((e) => {
        $('[data-section="list-images"]').on('click', '#eliminar-imagen', (e) => {
            e.preventDefault();
            let key = $(e.currentTarget).attr('data-key');
            console.log(key);

            this.model.eliminarFoto(key).then((respuesta) => {
                console.log(respuesta);

            }).fail(() => {
            }).always(() => {
            });
            $('[data-section="list-images"]').find('.col-md-2[data-key="'+key+'"]').remove();

        });
    }
}
