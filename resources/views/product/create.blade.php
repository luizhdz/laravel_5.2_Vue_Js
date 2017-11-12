<form method="POST" v-on:submit.prevent="createUser">
<div class="modal fade" id="create">
	<div class="modal-dialog">
		<div class="modal-content">
			<div class="modal-header">
				<button type="button" class="close" data-dismiss="modal">
					<span>&times;</span>
				</button>
				<h4>Crear</h4>
			</div>
			<div class="modal-body">
				<label for="user">Nueva Usuario</label>
        <input type="text" name="name" class="form-control" v-model="newUser"><br>
				<input type="text" name="name" class="form-control" v-model="newUser">
				<span v-for="error in errors" class="text-danger">@{{ error }}</span>
			</div>
			<div class="modal-footer">
				<input type="submit" class="btn btn-primary" value="Guardar">
			</div>
		</div>
	</div>
</div>
</form>
