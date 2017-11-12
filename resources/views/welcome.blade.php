@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Usuarios</h2>
      <div id="user-lists">
        <div class="col-md-10 col-md-offset-1">
          <table class="table">
            <thead>
              <tr>
                <th>Id</th>
                <th>Usuario</th>
                <th>&ensp;</th>
              </tr>
            </thead>
            <tbody>
              <tr v-for="user in users">
                <td>@{{user.id}}</td>
                <td>@{{user.name}}</td>
                <td>
                  <a href="" class="btn btn-danger" v-on:click.prevent="deleteUser( user )" >Eliminar</a>
                </td>
              </tr>
            </tbody>
          </table>
        </div>
      </div>
    </div>

    <script type="text/javascript">
    var app = new Vue({
                el: '#user-lists',
                data: {
                  users:[]
                },
                created: function () {
                  this.getUsers();
                },
                methods:{
                  getUsers: function() {
                    var urlGetUsers = "users";
                    axios.get(urlGetUsers).then(response =>{
                      this.users = response.data
                    });
                  },
                  deleteUser: function(user) {
                    var url = "users/"+user.id;
                    axios.delete(url).then(response =>{
                      this.getUsers();
                      toastr.success('Eliminado Correctamente!');
                    });

                    console.log(user.id);
                  },
                  createKeep: function() {
                  			var url = 'users';
                  			axios.post(url, {
                  				keep: this.newUser
                  			}).then(response => {
                  				this.getUsers();
                  				this.newKeep = '';
                  				this.newUser = [];
                  				$('#create').modal('hide');
                  				toastr.success('Nuevo Usuario creado con éxito');
                  			}).catch(error => {
                  				this.errors = 'Corrija para poder crear con éxito'
                  			});
                  }
                }
              })
    </script>

@endsection
