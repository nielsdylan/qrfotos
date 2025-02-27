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
    editar = (user_id) =>{
        return $.ajax({
            url: route('administrador.clientes.editar',{id:user_id}),
            type: 'GET',
            dataType: "JSON",
            // processData: false,
            // contentType: false,
            data: {_token: this.token}
        });
    }
    eliminar = (id) =>{
        return $.ajax({
            url: route('administrador.clientes.eliminar',{id:user_id}),
            type: 'PUT',
            dataType: "JSON",
            // processData: false,
            // contentType: false,
            data: { _token: this.token, id:id }
        });
    }
}
