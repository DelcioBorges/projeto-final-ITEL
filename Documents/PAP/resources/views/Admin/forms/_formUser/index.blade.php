<div class="row">
    <div class="form-group col-sm-6">
        <input value="{{isset($users->primeiro_nome)? $users->primeiro_nome : '' }}" type="text" class="form-control" placeholder="Primeiro Nome" name="primeiro_nome">
    </div>
    <div class="form-group col-sm-6">
        <input value="{{isset($users->ultimo_nome)? $users->ultimo_nome : '' }}" type="text" class="form-control" placeholder="Último Nome" name="ultimo_nome">
    </div>
</div>

<div class="row">
        <div class="form-group col-sm-6">
        <input value="{{isset($users->email)? $users->email : '' }}" type="email" class="form-control" placeholder="Email" name="email">
        </div>

        <div class="form-group col-sm-6">
            <select name="perfil_acesso">    
                <option value="Administrador">Administrador</option>
                <option value="Supervisor"> Supervisor</option>
                <option value="Usuário normal"> Usuário normal</option>

            </select>
    </div>

</div>

<div class="row">
    <div class="form-group">
        <input  type="file" class="form-control" name="foto" >
    </div><br>
        
   <img src="{{isset($users->foto)? asset('img/users/' .$users->foto) : ''}}" width="100">
  
</div>