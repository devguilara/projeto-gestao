@extends('site.layouts.basic')
@section('titulo', 'Contato')
@section('conteudo')
    <div class="topo">

        <div class="logo">
            <img src="{{ asset('img/logo.png') }}">
        </div>

        <div class="menu">
            <ul>
                <li><a href="{{ route('site.index') }}">Principal</a></li>
                <li><a href="{{ route('site.sobre') }}">Sobre Nós</a></li>
                <li><a href="{{ route('site.contato') }}">Contato</a></li>
            </ul>
        </div>
    </div>

    <div class="conteudo-pagina">
        <div class="titulo-pagina">
            <h1>Entre em contato conosco</h1>
        </div>

        <div class="informacao-pagina">
            <div class="contato-principal">
                <form>
                    <input type="text" placeholder="Nome" class="borda-preta" required />
                    <input type="text" placeholder="Telefone" class="borda-preta" required />
                    <input type="email" placeholder="E-mail" class="borda-preta" required />
                    <select class="borda-preta" required>
                        <option value="" disabled selected>Qual o motivo do contato?</option>
                        <option value="duvida">Dúvida</option>
                        <option value="elogio">Elogio</option>
                        <option value="reclamacao">Reclamação</option>
                    </select>
                    <textarea class="borda-preta" placeholder="Preencha aqui a sua mensagem" required></textarea>
                    <button type="submit" class="borda-preta">ENVIAR</button>
                </form>

            </div>
        </div>
    </div>

    <div class="rodape">
        <div class="redes-sociais">
            <h2>Redes sociais</h2>
            <img src="{{ asset('img/facebook.png') }}">
            <img src="{{ asset('img/linkedin.png') }}">
            <img src="{{ asset('img/youtube.png') }}">
        </div>
        <div class="area-contato">
            <h2>Contato</h2>
            <span>(11) 3333-4444</span>
            <br>
            <span>supergestao@dominio.com.br</span>
        </div>
        <div class="localizacao">
            <h2>Localização</h2>
            <img src="{{ asset('img/mapa.png') }}">
        </div>
    </div>
@endsection
