@extends('layouts.app')
@section('content')
    <!-- Heading section -->
    <div class="row header-style-row">
        <div class="col-lg-12">
            <h1 id="#first" class="header-style-first">Rīga</h1>
        </div>
    </div>
        <!-- Content section -->
    <div class="row">
        <div class="col-md-12 image-row-container" >
            <h2>
                Nesen pievienoti
            </h2>

            <section class="center slider">
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                    <div class="text">
                        15:30 Rīga, Cēsu iela
                    </div>
                    <div class="author">
                        LocalBioFoods
                    </div>
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                    <div class="text">
                        15:30 Rīga, Cēsu iela
                    </div>
                    <div class="author">
                        LocalBioFoods
                    </div>
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                    <div class="text">
                        15:30 Rīga, Cēsu iela
                    </div>
                    <div class="author">
                        LocalBioFoods
                    </div>
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                    <div class="text">
                        15:30 Rīga, Cēsu iela
                    </div>
                    <div class="author">
                        LocalBioFoods
                    </div>
                </div>
            </section>

            <p>
                <a href="" class="btn btn-success">Pilns saraksts...</a>
            </p>
        </div>

        <div class="col-md-12 image-row-container" >
            <div class="row">

                <div class="col-md-2">
                    <h2>Vidzeme</h2>
                    <select name="regions" id="" class="form-control">
                        <option value="">Vidzeme</option>
                        <option value="">2</option>
                        <option value="">3</option>
                        <option value="">4</option>
                    </select>
                </div>
            </div>


            <section class="center slider">
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                </div>
                <div>
                    <img src="http://svaigi.lv//file/product/270x270/Photo_2009_11_2016_2C_2014_2047_2019.jpg">
                </div>
            </section>

            <p>
                <a href="" class="btn btn-success">Pilns saraksts...</a>
            </p>
        </div>

        <div class="col-lg-6 col-md-12">
            <div id="map">
                <div>
                </div>
            </div>
        </div>
    </div>
    </div>
@endsection
@section('startpage')
    <div id="overlay" >
        <div class="container-center">
            <div class="header-text-block">
                <p>
                    Localbiofood <br />
                    Tava labākā izvēle
                </p>
            </div>
            <div class="header-button-block">
                <p><span id="header-button"><a href="/" ><i class="glyphicon glyphicon-chevron-down" style="padding-top:20px"></i></a></span></p>
            </div>
        </div>
    </div>
@endsection