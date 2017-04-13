<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/modaal.css">
    <link rel="stylesheet" type="text/css" href="css/modaalCss.css">
    <script src="js/modaalVenster.js"></script>
    <script src="js/modaalStartt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<div class="art">
<h2>Art</h2>

<div class="panel-group" id="accordion">






    <div class="panel panel-default">
        {foreach from=$getAlbum item=album}

        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse{$album.id} ">
                      {$album.name}</a>
            </h4>
        </div>


        <div id="collapse{$album.id}" class="panel-collapse collapse">
            <div class="panel-body">

                {foreach from=$album.items item=oneItem}
                    <tr>

                        <td>


                            {*<img src="art/{$oneItem.image}" style="width:20%; margin-left: 2% " onclick="openModal();currentSlide({$oneItem.id})" class="hover-shadow cursor">*}
                                <img style="width:30%;cursor:zoom-in"
                                     onclick="document.getElementById('modal0{$oneItem.id}').style.display='block'"
                                     class="Art_img" src="art/{$oneItem.image}">




                        </td>

                        {*<div id="myModal" class="modal">*}
                            {*<span class="close cursor" onclick="closeModal()">&times;</span>*}
                            {*<div class="modal-content">*}

                                {*{foreach from=$album.items item=oneItem}*}
                                {*<div class="mySlides">*}
                                    {*<div class="numbertext">1 / 4</div>*}
                                    {*<img src="art/{$oneItem.image}" style="width: 1200px" height="500px">*}
                                {*</div>*}
                                {*{/foreach}*}


                                {*<a class="prev" onclick="plusSlides(-1)">&#10094;</a>*}
                                {*<a class="next" onclick="plusSlides(1)">&#10095;</a>*}

                                {*<div class="caption-container">*}
                                    {*<p id="caption"></p>*}
                                {*</div>*}

                                {*{foreach from=$album.items item=oneItem}*}

                                {*<div class="column">*}
                                    {*<img class="demo cursor" src="art/{$oneItem.image}" style="width:0%" onclick="currentSlide({$oneItem.id})" alt="{$oneItem.content}">*}
                                {*</div>*}
                                {*{/foreach}*}
                            {*</div>*}
                        {*</div>*}








                        <div id="modal0{$oneItem.id}" class="w3-modal" onclick="this.style.display='none'">
                            <span class="w3-button w3-hover-red w3-xlarge w3-display-topright">&times;</span>
                            <div class="w3-modal-content w3-animate-zoom">
                                <img src="art/{$oneItem.image}" style="width:100%">
                                <h1>{$oneItem.content}</h1>
                                </div>

                            </div>

                      </tr>



                        {/foreach}

            </div>

    </div>

        {/foreach}


<script src="js/modaal2.js"></script>

            </div>
        </div>
    </div>
    <a href="#0" class="cd-top">Top</a>
    <script src="js/back.js"></script>



