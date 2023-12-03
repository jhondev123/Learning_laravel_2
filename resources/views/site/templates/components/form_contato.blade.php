{{$slot}}
{{print_r($errors)}}
<form method="POST" action="{{ route('site.contato') }}">
    @csrf
    <input type="text" placeholder="Nome" class="{{$class}}" name="nome" value="{{old('nome')}}">
    <br>
    <input type="text" placeholder="Telefone" class="{{$class}}" name="telefone"value="{{old('telefone')}}">
    <br>
    <input type="text" placeholder="E-mail" class="{{$class}}"name='email'value="{{old('email')}}">
    <br>
    
    <select class="{{$class}}" name="motivo_contato">
        <option value="" checked disabled>Qual o motivo do contato?</option>
        @foreach($motivo_contatos as $key => $motivo_contato)
        <option value="{{$motivo_contato->id}}" {{old('motivo_contato') == $motivo_contato->id ? 'selected': ''}}>{{$motivo_contato->motivo_contato}}</option>
        @endforeach
      
    </select>
    <br>
    <textarea class="{{$class}}" name="mensagem">
        @if(old("mensagem")!= '')
        {{old("mensagem")}}
        @else
        Preencha aqui a sua mensagem
        @endif
    </textarea>
    <br>
    <button type="submit" class="borda-preta">ENVIAR</button>
</form>