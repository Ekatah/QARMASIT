@extends('base.header')

@section('headband')

    <div class="container-fluid bandeauDegraderCouleur">
    <div class="container">
        <div class="row">
            <div class="col-md-12 textTypeTwo">
                <br><h1>Eco-Service, l'écologie pour tous.</h1>
                <p>test</p><br>
                <button class="baseButton button2">Visiter la boutique</button>
            </div>
        </div>
    </div>
    </div>
@endsection

@section('content')
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <h1>Présentation concept Eco-responsabilité</h1><br>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="assets/Images/Home/water_drop.png" title="Water_drop" alt="Water_drop"></a>
            </div>
            <div class="col-md-8 blockText ml-3 mt-3 py-3">
                <p>Test<br>test</p>
            </div>
        </div>
    </div>
    <br>
    <div class="jumbotron greenBlock">
        <div class="container">
            <div class="col-md-12 blockText ml-3 mt-3 py-3">
                <p>Test<br>test</p>
            </div>
            <br>
            <div class="col-md-8 blockText ml-3 mt-3 py-3">
                <p class="">Test<br>test</p>
            </div>
            <div class="col-md-4">
                <a href="#"><img src="assets/Images/Home/cloud_weather.png" title="Cloud_weather" alt="Cloud-weather"></a>
            </div>
        </div>
    </div>
    <br>
    <div class="container">
        <div class="row">
            <div class="col-md-4">
                <a href="#"><img src="assets/Images/Home/bicycle_eco.png" title="bicycle_eco" alt="bicycle_eco"></a>
            </div>
            <div class="col-md-8 blockText ml-3 mt-3 py-3">
                <p>Test<br>test</p>
            </div>
            <div class="col-md-12 blockText ml-3 mt-3 py-3">
                <p>Test<br>test</p>
            </div>
        </div>
    </div>
@endsection

@extends('base.footer')
