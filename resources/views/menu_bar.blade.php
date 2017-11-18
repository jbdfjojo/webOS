@extends('template_default_bureaux/bureaux')

@section('title', 'menu')

@section('content')


    <div id="menu_bar">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-12">
                    <p>Menu</p>
                </div>
                <div class="col-lg-2">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col_left">
                                <a href="#"><span><i class="fa fa-user-circle  fa-2x" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="col-lg-12 col_left">
                                <a href="#"><span><i class="fa fa-shopping-basket fa-2x" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="col-lg-12 col_left">
                                <a href="#"><span><i class="fa fa-product-hunt fa-2x" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="col-lg-12 col_left">
                                <a href="#"><span><i class="fa fa-desktop fa-2x" aria-hidden="true"></i></span></a>
                            </div>
                            <div class="col-lg-12 col_left">
                                <a href="#"><i class="fa fa-cog fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-10">
                    <div class="container-fluid">
                        <div class="row">
                            <div class="col-lg-12 col_right_title_A">
                                <p>favoris</p>
                            </div>
                            <?php for ($i = 1; $i < 11; $i++): ?>
                                <div class="col-lg-5 col_right">
                                    programe <?= $i ?>
                                </div>
                            <?php endfor; ?>

                            <div class="col-lg-12 col_right_title_B">
                                <p>les plus utiliser</p>
                            </div>
                            <?php for ($i = 1; $i < 7; $i++): ?>
                            <div class="col-lg-5 col_right">
                                programe <?= $i ?>
                            </div>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

@endsection
