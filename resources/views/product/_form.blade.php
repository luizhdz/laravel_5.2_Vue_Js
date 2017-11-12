@extends('layouts.app')

@section('content')
    <div class="container">
      <h2>Productos</h2>
      <div id="produc-lists">
        @{{ message }}
      </div>
    </div>

    <script type="text/javascript">
    var app = new Vue({
              el: '#produc-lists',
                data: {
                  message: 'Nuevo Producto'
                }
              })
    </script>

@endsection
