@extends('layouts.app')

@section('header')
<header class="header header-inverse h-fullscreen pb-80" data-parallax="{{ asset('assets/img/lock_screenGT.JPG') }}" data-overlay="8">
    <div class="container text-center">

        <div class="row h-full">
            <div class="col-12 col-lg-8 offset-lg-2 align-self-center">

            <h1 class="display-4 hidden-sm-down">Moov-Africa Gabon Telecom</h1>
            <h1 class="hidden-md-up">lorem ipsum</h1>
            <br>
            <p class="lead text-white fs-20 hidden-sm-down"><span class="fw-400">Moov-Africa Gabon Telecom</span> organise cette inscription en ligne <br> évolutive et Optimisée pour <span class="mark-border">Un Sondage  </span>.</p>

            </div>

            <div class="col-12 align-self-end text-center">
            <a class="scroll-down-1 scroll-down-inverse" href="#" data-scrollto="section-formulaire"><span></span></a>
            </div>

        </div>

    </div>
</header>
@stop

@section('content')

    <section class="section" id="section-formulaire">
        <div class="container">

            <div class="row">
                @if (session()->has('msg_success'))
                    <div class="alert alert alert-success">
                        {{ session()->get('msg_success') }}
                    </div>
                @endif
                @if (session()->has('msg_primary'))
                    <div class="col alert alert-primary">
                        {{ session()->get('msg_primary') }}
                    </div>
                @endif
                @if (session()->has('msg_danger'))
                    <div class="col alert alert-danger">
                        {{ session()->get('msg_danger') }}
                    </div>
                @endif
            </div>


            <div class="row">

                <div class="col-12 col-lg-5 align-self-center text-center">
                    <h3 class="heading-alt fw-300">Formulaire d'Inscription</h3><br>
                    <p>We can't wait to show you the world's most powerful Software as a Service (SaaS) admin template. Tell us a few things about yourself and we'll show you a lot more about us.</p>
                    <br>

                    <form action="{{ route('participants.store')  }}" method="POST" enctype="multipart/form-data">
                        {{ csrf_field() }}
                        <div class="alert alert-success" style="display: none;">We received your request and will contact you back soon.</div>

                        <input type="hidden" name="subject" value="Request demo">

                        <div class="form-group">
                            <input class="form-control" type="text" name="nom" placeholder="Nom">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="occupation" placeholder="Occupation">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="email" name="email" placeholder="Adresse e-mail">
                        </div>

                        <div class="form-group">
                            <input class="form-control" type="text" name="phone" placeholder="Numéro Téléphone">
                        </div>

                        <div class="form-group input-group file-group">
                            <input type="text" class="form-control file-value" placeholder="Choisier un fichier..." readonly>
                            <input type="file" name="fichier" id="fichier" multiple>
                            <span class="input-group-btn">
                                <button class="btn btn-white file-browser" type="button"><i class="fa fa-upload"></i></button>
                            </span>
                        </div>

                        <button class="btn btn-primary btn-block" type="submit">Valider</button>
                    </form>
                </div>


                <div class="col-12 offset-lg-1 col-lg-6 p-90 hidden-md-down">
                    <img src="{{ asset('assets/img/Logo_Moov_Africa_Fond_Blanc.png') }}" alt="..." data-aos="fade-up">
                </div>

            </div>



        </div>
    </section>

@stop
