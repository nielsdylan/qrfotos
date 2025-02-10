class GalleryModel {

    constructor(token) {
        this.token = token;
    }

    guardarFotos = (data) =>{
        return $.ajax({
            url: route('galeria.guardar-fotos'),
            type: 'POST',
            dataType: "JSON",
            processData: false,
            contentType: false,
            data: data
        });
    }
    eliminarFoto = (id) =>{
        return $.ajax({
            url: route('galeria.eliminar-fotos'),
            type: 'PUT',
            dataType: "JSON",
            // processData: false,
            // contentType: false,
            data: { _token: this.token, id:id }
        });
    }
}
