@extends('LayoutLanding')
@section('middleContent')


  <div class="container mt-5">
    <div class="row align-items-center">
      <div class="col text-center">
        <form method="post" action="cadastrarUsuario">
          <h2 class="mb-3">Cadastro de usuário</h2>
          @csrf
          <input type="text" name="nm_user" placeholder="Nome de usuário"><br>
          <input type="email" name="ds_email" placeholder="E-mail"><br>
          <input type="text" name="ds_public_place" placeholder="Logradouro"><br>
          <input type="text" name="ds_complement" placeholder="Complemento"><br>
          <input type="text" name="nm_neighborhood" placeholder="Bairro"><br>
          <input type="text" name="nr_cep" placeholder="CEP"><br>
          <input type="text" name="nr_phone" placeholder="Número de telefone"><br>
          <input type="text" name="ds_bio" placeholder="Bio"><br>
          <input type="date" name="dt_birth" placeholder="Data de nascimento"><br>
          <input type="password" name="ds_password" placeholder="Senha"><br>
          <button type="submit">Lá vai</button>
        </form>
      </div>
    </div>
  </div>

  @endsection