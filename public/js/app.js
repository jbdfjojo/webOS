$(document).ready(function(){

        //  redimensionnement de la div Corps auto

        $(window).resize(function(){
            let width_ecran =  $(window).width()
            let height_ecran =  $(window).height() - 75

            $('#corps').height(height_ecran)
        })

        $(window).bind('resizeEnd', function() {
            let width_ecran =  $(window).width()
            let height_ecran =  $(window).height() - 75
            $('#corps').height(height_ecran)
        });

    });

    function dossier_url() {

        let CheminComplet = document.location.href;
        let NomDuFichier     = CheminComplet.substring(CheminComplet.lastIndexOf( "/" )+1 );

        return NomDuFichier;
    }

/***
 * menu bar
 */
    // detecte si le menu est ouvert ou non si il l'est on le ferme est vise verse-ca
    function menu_bar(){

       if(dossier_url() != 'bureau'){
           document.location.href="bureau";
       }else {
           document.location.href="menu_bar";
       }

    }

    // on detecte si on clique hort du menu si oui on le ferme
    $(document).click(function(event) {
        if(!$(event.target).closest('#menu_bar').length){
            if(dossier_url() != 'bureau'){
                document.location.href="bureau";
            }
        }
    });



/**
 *  bureau move icon
 */

let tab_icon_bureau = []
let icon_type = '            <div class="icone_bureau">\n' +
    '                            <div style="padding: 5px"><i class="fa fa-bluetooth fa-3x" aria-hidden="true"></i></div>\n' +
    '                            <div style="padding: 5px">nom du programe</div>\n' +
    '                        </div>';

// on recupere tout les element de la grille
let grid_bureau = document.getElementsByClassName('grid_bureau');

// on transforme la colection en tableaux
grid_bureau = [].slice.call(grid_bureau)

// on parcourt le tableaux
grid_bureau.forEach(function(element) {

    /*
    if(element.querySelector('.icone_bureau') != null){

        tab_icon_bureau.push({
            "position" : element.getAttribute('id'),
            "icone_programe" : element.querySelector('.icone_bureau')

        })
    }else {
        tab_icon_bureau.push({
            "position" : null,
            "icone_programe" : null

        })
    }
    */

    console.log(element.querySelector('.icone_bureau'))

    tab_icon_bureau.push({
        "id" : null ,
        "position" : null,
        "icone_programe" : null

    })

});

tab_icon_bureau[9] = {
    "id" : 10,
    "position" : "position_10",
    "icone_programe" : icon_type

}

console.log(tab_icon_bureau);


