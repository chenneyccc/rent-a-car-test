@extends('layouts.app')
@section('content')
    <style>
        :root {
            --jumbotron-padding-y: 3rem;
        }

        .jumbotron {
            padding-top: var(--jumbotron-padding-y);
            padding-bottom: var(--jumbotron-padding-y);
            margin-bottom: 0;
            background-color: #fff;
        }
        @media (min-width: 768px) {
            .jumbotron {
                padding-top: calc(var(--jumbotron-padding-y) * 2);
                padding-bottom: calc(var(--jumbotron-padding-y) * 2);
            }
        }

        .jumbotron p:last-child {
            margin-bottom: 0;
        }

        .jumbotron-heading {
            font-weight: 300;
        }

        .jumbotron .container {
            max-width: 40rem;
        }

        footer {
            padding-top: 3rem;
            padding-bottom: 3rem;
        }

        footer p {
            margin-bottom: .25rem;
        }

        .box-shadow { box-shadow: 0 .25rem .75rem rgba(0, 0, 0, .05); }
    </style>

    <main role="main">

    <div class="container marketing">

        <!-- Three columns of text below the carousel -->
        <div class="row">
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ URL::to('../img/ceo.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Fred van Jansen</h2>
                <p> Fred van Jansen is de eigenaar van Rent A Car en is verantwoordelijk voor het bedrijf. </p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ URL::to('../img/mevrouw.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Ineke van Sluiter.</h2>
                <p>Ineke van Sluiter doet de administratie van Rent A car en is betrokken bij verschillende projecten. </p>

            </div><!-- /.col-lg-4 -->
            <div class="col-lg-4">
                <img class="rounded-circle" src="{{ URL::to('../img/meneer.jpg') }}" alt="Generic placeholder image" width="140" height="140">
                <h2>Ronald Oranje.</h2>
                <p> Rondald Oranje versterkt het team van Rent A Car en is te vinden in onze winkel.</p>

            </div><!-- /.col-lg-4 -->
        </div><!-- /.row -->


        <!-- START THE FEATURETTES -->

        <hr class="featurette-divider">

        <div class="row featurette">
            <div class="col-md-7">
                <h2 class="featurette-heading">Onze Winkel.<span class="text-muted"></span></h2>
                <p class="lead">Adres: Bouwjaarstraat 5</p>
                <p class="lead">Postcode: 1339HZ</p>
                <p class="lead">Telefoon-nummer: 06-28192016</p>

            </div>
            <div class="col-md-5">
                <img class="featurette-image img-fluid mx-auto" src="{{ URL::to('../img/bedrijf.jpg') }}" alt="Generic placeholder image">
            </div>
        </div>


        <!-- /END THE FEATURETTES -->

    </div><!-- /.container -->


@endsection