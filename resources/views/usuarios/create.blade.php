<x-layout title='Cadastro de Usuário'>
    
    <form action="{{ route('usuarios.store') }}" method="POST">
        <!-- @CSRF é necessário para que o formulário enviado seja reconhecido pelo servidor -->
        @csrf
    
        <div class="form-text mb-2 text-center"> Cadastre </div>
        {{-- <div class="form-text mb-2 text-center">Preencha este formulário</div> --}}
        
        <input type="text" id="nome" name="nome" class="form-control mb-2" placeholder="Nome completo">

        <input type="text" id="nome_usr" name="nome_usr" class="form-control mb-2" placeholder="Nome de login">

        <input type="email" id="email" name="email" class="form-control mb-2" placeholder="Email">
        
        <input type="password" id="password" name="password" class="form-control mb-2" placeholder="Senha">

        <select class="form-select mb-2" name="perfil_id">
            @foreach ($perfis as $perfil)
                <option value="{{ $perfil->id }}" @if ($perfil->id == 2) selected @endif>{{ $perfil->nome }}</option>
            @endforeach
        </select>

        <select class="form-select mb-2" name="setor_id">
            @foreach ($setores as $setor)
                <option value="{{ $setor->id }}">{{ $setor->nome }}</option>
            @endforeach
        </select>

        <div class="text-center mt-3">
            <button type="submit" class="btn btn-primary botao">Salvar</button>
            <a href="{{ route('login') }}" class="btn btn-dark botao">Cancelar</a>
        </div>
    </form>
    
    
    
</x-layout>