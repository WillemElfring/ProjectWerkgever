
$(document).ready(function() {
    //inhoud modaalvenster
    var Sc2 = $('#plaatjediv').detach();
    var Wow = $('#img_modaal1').detach();
    var Csgo = $('#img_modaal2').detach();
    var Lol = $('#Lol').detach();

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
    $('#LoLThumb').on('click', function()  {
        VenObj.openen({$inhoud: Lol, breedte: 700});

    });

});