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
 
    <div class="container mt-5 mb-3">
        <h6>Canais de Atendimento</h6>
        <div class="row">
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-mailchimp"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">E-mail</h6>
                            </div>
                        </div>
                        <div class="badge"> <span>info</span> </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Canal destinado a responder <br>dúvidas sobre prazos de entrega</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">32 respondidos <span class="text2">de 50 pessoas</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-dribbble"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">WhatsApp</h6>
                            </div>
                        </div>
                        <div class="badge"> <span>Produto</span> </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Canal destinado a responder<br>dúvidas sobre produtos</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">42 respondidos <span class="text2">de 70 pessoas</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card p-3 mb-2">
                    <div class="d-flex justify-content-between">
                        <div class="d-flex flex-row align-items-center">
                            <div class="icon"> <i class="bx bxl-reddit"></i> </div>
                            <div class="ms-2 c-details">
                                <h6 class="mb-0">SAC</h6> <span>2 days ago</span>
                            </div>
                        </div>
                        <div class="badge"> <span>reclamações</span> </div>
                    </div>
                    <div class="mt-5">
                        <h3 class="heading">Canal Destinado para reclamações<br>e melhorias</h3>
                        <div class="mt-5">
                            <div class="progress">
                                <div class="progress-bar" role="progressbar" style="width: 50%" aria-valuenow="50" aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                            <div class="mt-3"> <span class="text1">52 respondidos <span class="text2">de 100 pessoas</span></span> </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
      
@endsection