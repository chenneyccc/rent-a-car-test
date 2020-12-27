@extends('layouts.app')

@section('content')


    <main role="main">

        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Rent-A-Car</h1>
                <p class="lead text-muted"> De beste auto’s huur je bij Rent A Car.
                    In Nederland vind je 1 Rent A Car vestiging.
                    Onze prijzen zijn voordelig en onze service is
                    erg betrouwbaar en onze auto's
                    zijn gemiddeld niet ouder dan 6 maanden.
                    Zo ben je verzekerd van kwaliteit.
                    Kies de voertuigcategorie die het best bij
                    jou past.
                    Ga je voor een busje, een luxe auto, een SUV,
                    een sportieve auto of een cabrio?
                    Kijk snel naar de mogelijkheden bij een vestiging bij jou in de buurt.
                    Ook als je een leenauto nodig hebt, kun je bij ons terecht.
                    Neem een kijkje op onze website.</p>
                <p>
                    <a href="{{route('assortiment.index')}}" class="btn btn-primary my-2">Zie hier ons assortiment</a>
                    <a href="#" class="btn btn-secondary my-2">Lees hier meer over ons</a>
                </p>
            </div>
        </section>

        <div class="album py-5 bg-light">
            <div class="container">

                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ URL::to('../img/bmw.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">De zomer is in aantocht en dan wilt u toch niets liever dan ultieme zomergevoel beleven? Huur dan eens een cabrio bij Rent A Car. Geniet gedurende het voorjaar en zomer van de mooie steden en natuur die Nederland rijk is. Daarnaast kunt u natuurlijk ook op vakantie naar het buitenland met deze cabrio.</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top"  src="{{ URL::to('../img/audi.png') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Iedereen droomt er wel eens van om in een exclusieve auto rond te rijden. Bij Rent A Car kun je tegen een aantrekkelijke prijs een luxueuze auto huren. Dit kan voor een langere periode, maar natuurlijk is dit ook mogelijk voor een dag. U kunt bij ons een betrouwbare auto huren.

                                </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="card mb-4 box-shadow">
                            <img class="card-img-top" src="{{ URL::to('../img/mercedes-suv.jpg') }}" alt="Card image cap">
                            <div class="card-body">
                                <p class="card-text">Een SUV huren betekent veel comfort, vermogen, zitplaatsen én bagageruimte. Dankzij de flexibiliteit van een SUV is het een ideale huurauto voor zowel korte stedentrips als langere autovakanties: iedereen heeft genoeg ruimte om de hele reis lang te kunnen blijven genieten. </p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <button type="button" class="btn btn-sm btn-outline-secondary">View</button>
                                        <button type="button" class="btn btn-sm btn-outline-secondary">Edit</button>
                                    </div>
                                    <small class="text-muted">9 mins</small>
                                </div>
                            </div>
                        </div>
                    </div>
            </div>
        </div>

    </main>



@endsection
