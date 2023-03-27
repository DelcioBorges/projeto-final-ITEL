<div class="row">
    <div class="form-group col-sm-12">
        <input class="form-control" type="text" name="estado" placeholder="Estado do contentor" value="{{isset($contentores->estado) ? $contentores->estado : ''}}"><br>
    </div> 
    <div class="form-group col-sm-12">
    
        @if (isset($endereco))
            <select class="form-control" name="id_endereco">
            <option>Selecione um endereço</option>
            @foreach ($endereco as $enderecos )
                <option value="{{$enderecos->id}}"> {{$enderecos->nome_endereco}} </option>
            @endforeach    
            </select>
            @else
            
            <option>Não existem endereços</option>
            </select>
        @endif
    </div>

</div>  
