<!doctype html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">

    <!-- librairie  bootstrap installer par composer-->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css">

    <!--librairie glyph installer manuellement-->
    <link rel="stylesheet" href="../resources/Lib/font-awesome/css/font-awesome.min.css">

    <!--fichier css-->
    <link rel="stylesheet" href="css/Style.css">

    <title>@yield('title', 'bureau')</title>
</head>
<body>

<div class="container-fluid">
    <div class="row">
        <div class="col-lg-12">
            <div id="corps">
                @yield('content')
            </div>
        </div>

    </div>

</div>

<div id="barre_des_tache">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-1">
                <div id="btn_menu">
                    <a href="javascript:menu_bar()"><span class="btn btn-primary"> menu </span></a>
                </div>
            </div>
            <div class="col-lg-9">
                <div id="programe_ouvert">
                    <div class="container-fluid">
                        <div class="row">
                            <?php for ($i = 1; $i < 12; $i++): ?>
                                <?php if ($i < 11): ?>
                                    <div class="col-lg-1" style="margin-left: 5px">
                                        <a href="#"><span class="btn btn-primary"> programe <?= $i ?> </span></a>
                                    </div>
                                <?php else: ?>
                                    <div class="col-lg-1" style="margin-left: 12px">
                                        <a href="#"><span class="btn btn-primary"> programe <?= $i ?></span></a>
                                    </div>
                                <?php endif; ?>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-1">
                <div id="date">
                    jj/mm/aaaa
                </div>
            </div>
            <div class="col-lg-1">
                <div id="heure">
                    00:00
                </div>
            </div>
        </div>
    </div>
</div>

<script src="https://code.jquery.com/jquery-3.2.1.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.11.0/umd/popper.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/js/bootstrap.min.js"></script>
<script src="js/app.js"></script>
</body>
</html>