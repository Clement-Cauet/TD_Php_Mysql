<!DOCTYPE html>
<html lang="fr">
    <head>
        <title>HTML_Exo6</title>
        <link rel="stylesheet" type="text/css" href="../../src/css/menu.css">
        <link rel="stylesheet" type="text/css" href="../../src/css/page.css">
        <meta charset="UTF-8">
    </head>
    <body>
        <?php
            include("menu.php");
        ?>
        <div>
            <form class="form-coucou"> <!-- Balise du formulaire -->
              <fieldset>
                <legend>Formulaire Coucou</legend>
                  <!-- Balise profil avec l'entrée du nom et de l'espèce -->
                      <label for="name">Entrez votre nom :</label>
                      <input type="text" name="name" id="name" required>
                      <label for="espece">Entrez votre espece :</label>
                      <input type="text" name="espece" id="espece" required>
                <legend>Sexe</legend>
                  <!-- Balise choix du nombre d'ailes restante -->         
                    <label for="title_1">
                      <input type="radio" id="title" name="title" value="aileG" >
                      Male
                    </label>
                    <label for="title_2">
                      <input type="radio" id="title" name="title" value="aileD">
                      Femelle
                    </label>
                    <label for="title_1">
                      <input type="radio" id="title" name="title" value="aile2" >
                      Non genré
                    </label>
                <legend>Date d'éclosion</legend>
                  <!-- Balise de menu déroulant pour la date d'éclosion -->      
                    <select name="numerodate" size="1">
                      <option></option>
                      <option>1</option>
                      <option>2</option>
                      <option>3</option>
                      <option>4</option>
                      <option>5</option>
                      <option>6</option>
                      <option>7</option>
                      <option>8</option>
                      <option>9</option>
                      <option>10</option>
                      <option>11</option>
                      <option>12</option>
                      <option>13</option>
                      <option>14</option>
                      <option>15</option>
                      <option>16</option>
                      <option>17</option>
                      <option>18</option>
                      <option>19</option>
                      <option>20</option>
                      <option>21</option>
                      <option>22</option>
                      <option>23</option>
                      <option>24</option>
                      <option>25</option>
                      <option>26</option>
                      <option>27</option>
                      <option>28</option>
                      <option>29</option>
                      <option>30</option>
                      <option>31</option>
                    </select>
                    <select name="moisdate" size="1">
                      <option></option>
                      <option>Janvier</option>
                      <option>Février</option>
                      <option>Mars</option>
                      <option>Avril</option>
                      <option>Mai</option>
                      <option>Juin</option>
                      <option>Juillet</option>
                      <option>Août</option>
                      <option>Septembre</option>
                      <option>Octobre</option>
                      <option>Novembre</option>
                      <option>Decembre</option>
                    </select>
                    <select name="anneedate" size="1">
                      <option></option>
                      <option>2020</option>
                      <option>2019</option>
                      <option>2018</option>
                      <option>2017</option>
                      <option>2016</option>
                      <option>2015</option>
                      <option>2014</option>
                      <option>2013</option>
                      <option>2012</option>
                      <option>2011</option>
                      <option>2010</option>
                    </select>
                  <!-- Balise adresse avec du nom de la forêt et du numéro de l'arbre -->
                    <label for="foret">Entrez le nom de votre forêt :</label>
                    <input type="text" name="foret" id="foret" required>
                    <label for="arbre">Entrez le numéro de votre arbre :</label>
                    <input type="text" name="arbre" id="arbre" required>
                <!-- Balise boutton avec le boutton d'envoie du formulaire et de remise à zéro -->
                  <input type="submit" name="submit" value="Envoyer">
                  <input type="reset" name="reset" value="Remise à zéro">
              </fieldset>
            </form>
        </div>
    </body>
</html>