@extends('layouts.app')


@section('content')
@if (session('msg'))
    <div class="row justify-content-center">
        <div class="alert alert-success  mt-5 w-50" role="alert">
          
             
                   
                        <strong>{{ session('msg') }}</strong>
                        <button type="button" class="btn-close float-end" data-bs-dismiss="alert" aria-label="Close"></button>
                  
                  
          
        </div>
    </div>
    @endif
    <div class="row justify-content-center">
        <div class=" col-lg-6 col-md-8">
            <div class="card p-3">
                <div class="row justify-content-center">
                    <div class="col-12">
                        <h2 class="heading text-center">Cadastar Usuário</h2>
                    </div>
                </div>
                <form action="/users/save" method="post" class="form-card">
                    @csrf
                    <div class="row justify-content-center">
                        <div class="col-12">
                            <div class="input-group"> <input type="text" name="name" class="form-control" required />
                                <label>Nome</label> </div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col  mb-3">
                            <div class="input-group"><input type="email" name="email" class="form-control"
                                    placeholder="email@email.com" required /><label for="email" class="form-label">E-mail</label>
                            </div>
                        </div>
                        <div class="col mb-3">
                            <div class="input-group"> <input type="text" name="password" class="form-control"
                                    placeholder="Informe uma senha" required /><label for="password"
                                    class="form-label">Senha</label></div>
                        </div>
                        <div class="col mb-3">
                            <div class="input-group"> <input type="text" name="phoneNumber"
                                    class="form-control" id="phoneNumber" required/><label for="phoneNumber"
                                    class="form-label">Telefone</label></div>
                        </div>
                    </div>
                    <div class="row justify-content-center">
                        <div class="col-sm-6 mb-3">

                            <div class="input-group">
                                <input type="text" name="postalCode" id="postalCode" class="form-control"
                                    onmouseout="buscaCep()" required /><label for="postalCode" class="form-label">CEP</label>

                            </div>
                        </div>
                        <div class="col-sm-6 mb-3">

                            <div class="input-group"><input type="text" name="city" class="form-control" required /><label
                                    for="city" class="form-label">Cidade</label></div>
                        </div>
                        <div class="col mb-3">

                            <div class="input-group"><input type="text" name="district" class="form-control" required /><label
                                    for="district" class="form-label">Bairro</label></div>
                        </div>
                        <div class="col mb-3">

                            <div class="input-group"><input type="text" name="street" class="form-control" required/> <label
                                    for="street" class="form-label">Rua</label></div>
                        </div>
                        <div class="col mb-3">

                            <div class="input-group"><input type="text" name="state" class="form-control" required/><label
                                    for="number" class="form-label">Estado</label></div>
                        </div>

                    </div>
                    <div class="row justify-content-center">
                        <div class="col-md-12"> <input type="submit" value="Salvar"
                                class="btn btn-dark btn-pay placeicon"> </div>
                    </div>

                </form>
            </div>
        </div>
    </div>
@endsection
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.6.0/jquery.min.js" integrity="sha512-894YE6QWD5I59HgZOGReFYm4dnWc1Qt5NtvYSaNcOP+u1T9qYdvdihz0PPSiiqn/+/3e7Jo4EaG7TubfWGUrMQ==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.mask/1.14.15/jquery.mask.min.js"></script>
<script>
  $(document).ready(function(){
     $('#phoneNumber').mask('(00) 00000-0000');
     $('#postalCode').mask('00000-000');
    });
</script>