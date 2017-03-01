<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Memory</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootsrap -->
    <link rel="stylesheet" href="assets/css/bootstrap.min.css">

    <!-- Custom CSS -->
    <link rel="stylesheet" href="assets/css/customcss.css">

    <!-- Script du jeu -->
    <script type="text/javascript" src="assets/js/customjs.js"></script>
</head>

<body>
<!-- HEADER -->
<div class="container-fluid">
    <div class="row">
        <div class="top"></div>
    </div>

    <div class="row">
        <div class="banniere"></div>
    </div>

</div>




<!-- PLATEAU DE JEU -->

<div class="container-fluid">
    <div class="row">
        <div style="height: 120px;"></div>
    </div>
</div>

<div class="container">

    <div class="row" id="memory_board"></div>
    <script>newBoard();</script>
    <!--

Si le script est placé dans le head , utiliser :
     <script>newBoard();</script>
Autrement (si le script est a la fin du body , utiliser "window.addEventListener(newBoard());" apres la fonction "newBoard();"


-->

</div>

<div class="container-fluid">
    <div class="row">
        <div style="height: 30px;"></div>
    </div>
</div>


<div class="container">

    <div class="row">

        <div class="col-md-2">
            <button type="button" class="boutton" id="button" data-toggle="modal" data-target="#rules"> Régles du jeu</button>
        </div>

        <div class="col-md-2 col-md-offset-3">
            <button type="button" class="boutton" onclick="newBoard()"> Redémarrer la partie</button>
        </div>

        <div class="col-md-2 col-md-offset-3">
            <button type="button" class="boutton" id="button" data-toggle="modal" data-target="#scoreboard"> Tableau des scores</button>
        </div>

    </div>

</div>






<div class="container-fluid">
    <div class="row">
        <div style="height: 100px;"></div>
    </div>
</div>

<!-- MODALS -->
<div class="modal fade" id="rules" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: url('assets/images/block.png') repeat center;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">REGLES DU JEU</h4>
            </div>
            <div class="modal-body">

                <p>Toutes les cartes sont étalées faces cachées sur la table (ou par terre si on préfère jouer par terre).</p>

                <p> Un premier joueur retourne deux cartes. Si c'est la même image qui apparaît sur les deux cartes (ou la "paire" d'as rouge, de 8 noirs,etc.) le joueur gagne les cartes et en retourne à nouveau deux.</p>

                <p> Si les deux cartes ne vont pas ensemble, le joueur les replace face cachée à l'endroit exact où elles étaient, et c'est au joueur suivant de retourner deux cartes.</p>

                <p> Celui qui a une bonne mémoire se souviendra de l'emplacement des cartes déjà retournées et pourra les utiliser lorsqu'il en aura besoin pour compléter une paire.</p>

                <p> Le gagnant est celui qui accumule le plus de paires.</p>

                <p> Lorsque vous êtes seuls à l'intérieur avec un peu de matériel, vous pouvez en profiter pour jouer à fabriquer un jeu de memory des animaux ou un jeu de mémory des animaux du zodiaque chinois ou encore un jeu de memory à partir des fruits et légumes auquel vous jouerez à plusieurs ensuite.</p>
            </div>
        </div>
    </div>

</div> <!-- /.modal -->


<div class="modal fade" id="scoreboard" tabindex="-1" role="dialog" aria-hidden="true">

    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header" style="background: url('assets/images/block.png') repeat center;">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title">MEILLEURS SCORES</h4>
            </div>
            <div class="modal-body">
                <table class="table">
                    <thead>
                    <tr>
                        <th>Rang</th>
                        <th>Temp</th>
                        <th>Nb coups</th>
                        <th>Nom</th>
                    </tr>
                    </thead>
                    <tbody>
                    <tr>
                        <td>1</td>
                        <td>00:05:12</td>
                        <td>15</td>
                        <td>john</td>
                    </tr>
                    <tr>
                        <td>2</td>
                        <td>00:07:46</td>
                        <td>22</td>
                        <td>Ayy</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>00:10:27</td>
                        <td>36</td>
                        <td>Lmao</td>
                    </tr>
                    </tbody>
                </table>

            </div>
        </div>
    </div>

</div> <!-- /.modal -->



<!-- FOOTER -->
<div class="container-fluid">

    <div class="row">
        <div class="bot"></div>
    </div>

</div>


<!-- jQuery -->
<script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script>
<!-- Bootsrap javascript file -->
<script src="assets/js/bootstrap.min.js"></script>

</body>
</html>
