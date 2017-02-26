@extends('timetable.list')
@section('showcase')

    <div id="showcase">
        <div class="row">
            <div class="col-md-12" style="margin-left:auto;text-align: center">
                <h1>LOCALBIOFOOD</h1>
                <h2>Labākais no Latvijas laukiem</h2>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="text-align:right">
                <a href="#container" data-category="fruits">
                    <div class="col-sm-9">
                        <h3>Augļi</h3>
                        <small>Dažādi augļi, āboli, bumbieri, banāni utt.</small>
                    </div>
                    <div class="col-sm-3">
                        <img src="/assets/images/icons/fruits.png" alt="">
                    </div>
                </a>
            </div>
            <div class="col-sm-6 ">
                <a href="#container" data-category="meat">
                    <div class="col-sm-3">
                        <img src="/assets/images/icons/meat.png" alt="">
                    </div>
                    <div class="col-sm-9">
                        <h3> Gaļas produkti</h3>
                        <small> Vistas gaļa, cūkgaļa, jēra gaļa, liellopu gaļa utt.</small>
                    </div>
                </a>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="text-align:right">
                <div class="col-sm-9">
                    <h3>Piena produkti</h3>
                    <small>Siers, piens, jogurti, biezpiens utt.</small>
                </div>
                <div class="col-sm-3">
                    <img src="/assets/images/icons/milk.png" alt="">
                </div>
            </div>
            <div class="col-sm-6" >
                <div class="col-sm-3">
                    <img src="/assets/images/icons/vegetables.png" alt="">
                </div>
                <div class="col-sm-9">
                    <h3> Dārzeņi </h3>
                    <small> Burkāni, gurķi, redīsi, sīpoli utt</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-6" style="text-align:right">
                <div class="col-sm-9">
                    <h3>Medus</h3>
                    <small>Medus un biškopības produkti</small>
                </div>
                <div class="col-sm-3">
                    <img src="/assets/images/icons/honey.png" alt="">
                </div>
            </div>
            <div class="col-sm-6">
                <div class="col-sm-3">
                    <img src="/assets/images/icons/fish.png" alt="">
                </div>
                <div class="col-sm-9">
                    <h3>Zivis</h3>
                    <small> Zivis un zivju izstrādājumi</small>
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-5 col-sm-offset-3">
                <div class="col-sm-8" style="text-align:right; ">
                    <div class="col-sm-9" >
                        <h3>Maize</h3>
                        <small>Maize un graudu izstrādājumi</small>
                    </div>
                    <div class="col-sm-3">
                        <img src="/assets/images/icons/bread.png" alt="">
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection