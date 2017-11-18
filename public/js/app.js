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

