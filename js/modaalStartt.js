
$(document).ready(function() {
    //inhoud modaalvenster
    var Sc2 = $('#plaatjediv').detach();
    var Wow = $('#img_modaal1').detach();
    var Csgo = $('#img_modaal2').detach();
    var Modaal3 = $('#img_modaal3').detach();
    var Modaal4 = $('#img_modaal4').detach();
    var Modaal5 = $('#img_modaal5').detach();
    var Modaal6 = $('#img_modaal6').detach();
    var Modaal7 = $('#img_modaal7').detach();
    var Modaal8 = $('#img_modaal8').detach();
    var Modaal9 = $('#img_modaal9').detach();
    // var Lol = $('#Art_img').detach();

    //events
    $('.Artwork').on('click', function()  {
        console.log('yoyoy');
        VenObj.openen({$inhoud: Sc2, breedte: 700});

    });
    $('.home_img').on('click', function()  {
        VenObj.openen({$inhoud: Wow, breedte: 700});

    });
    $('.home_img2').on('click', function()  {
        VenObj.openen({$inhoud: Csgo, breedte: 700});

    });
    $('.Art_img').on('click', function()  {
        VenObj.openen({$inhoud: Lol, breedte: 700});

    });

    $('.home_img3').on('click', function()  {
        VenObj.openen({$inhoud: Modaal3, breedte: 700});

    });
    $('.home_img4').on('click', function()  {
        VenObj.openen({$inhoud: Modaal4, breedte: 700});

    });
    $('.home_img5').on('click', function()  {
        VenObj.openen({$inhoud: Modaal5, breedte: 700});

    });
    $('.home_img6').on('click', function()  {
        VenObj.openen({$inhoud: Modaal6, breedte: 700});

    });

    $('.home_img7').on('click', function()  {
        VenObj.openen({$inhoud: Modaal7, breedte: 700});

    });

    $('.home_img8').on('click', function()  {
        VenObj.openen({$inhoud: Modaal8, breedte: 700});

    });

    $('.home_img9').on('click', function()  {
        VenObj.openen({$inhoud: Modaal9, breedte: 700});

    });
});