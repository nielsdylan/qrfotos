class CustomerModel {

    constructor(token) {
        this.token = token;
    }

    guardar = (data) =>{
        return $.ajax({
            url: route('administrador.clientes.guardar'),
            type: 'POST',
            dataType: "JSON",
            // processData: false,
            // contentType: false,
            data: data
        });
    }
    editar = (data) =>{
        return $.ajax({
            url: route('administrador.clientes.guardar'),
            type: 'POST',
            dataType: "JSON",
            // processData: false,
            // contentType: false,
            data: data
        });
    }
    eliminar = (id) =>{
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
