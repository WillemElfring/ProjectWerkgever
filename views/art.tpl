<!DOCTYPE html>

<head>
    <meta charset="utf-8">
    <title>{$title}</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width">
    <link rel="stylesheet" type="text/css" href="css/main.css">
    <script src="http://code.jquery.com/jquery-1.12.0.min.js"></script>

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="css/modaal.css">
    <script src="js/modaalVenster.js"></script>
    <script src="js/modaalStartt.js"></script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.1.1/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>

</head>
<div class="art">
<h2>Kunstwerken</h2>
<div class="panel-group" id="accordion">
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse1 ">
                    Collapsible Group 1</a>
            </h4>
        </div>
        <div id="collapse1" class="panel-collapse collapse in">
            <div class="panel-body">
                <?php
                {foreach from=$result item=oneItem}
                    <tr>
                        <td>{$oneItem.id}</td>

                    </tr>

                {/foreach}

            </div>

    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">
                    Collapsible Group 2</a>
            </h4>
        </div>
        <div id="collapse2" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>
    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">
                    Collapsible Group 3</a>
            </h4>
        </div>
        <div id="collapse3" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>

    <div class="panel panel-default">
        <div class="panel-heading">
            <h4 class="panel-title">
                <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">
                    Collapsible Group 4</a>
            </h4>
        </div>
        <div id="collapse4" class="panel-collapse collapse">
            <div class="panel-body">
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
                <img src="https://s3-us-west-1.amazonaws.com/cominsoon-tech/campaign-bg/earth-7251x4018-planet-space-10121.jpg  "class="Artwork" alt="Smiley face" >
            </div>

        </div>
    </div>
</div>
</div>
