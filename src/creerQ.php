<form action="" method="post"><div class="bg-white">
    <div class="pt-1 p-4 bg-primary text-center text">
        <h3>CREER UNE QUESTION</h3>
    </div>
    <div class=" mt-2 d-block  ml-5">
            <div class="d-flex mx-2">
                <h3 class=" mt-5">Questions</h3>
                <textarea  name="questions" id="quest" ></textarea>
            </div>
            <div class="d-flex mx-2 mt-2">
                <h3>Nbre de points</h3>
                <input name="score"  id="point" type="number" min="1" />
            </div>
            <div class="d-flex mx-2 mt-2">
               <h3>Type de réponse</h3>
               <select id="choix" name="choix" >
                 <option value="">Donnez le type de réponse</option>
                 <option value="ChoixMultiple">Choix Multiple</option>
                 <option value="ChoixSimple">Choix Simple</option>
                 <option value="ChoixText">Choix Text</option>
               </select>
               <img id="plus" class="d-none"  src="../asset/Images/Icones/icajoutreponse.png">
            </div>
            <div class="d-block mx-2 mt-2 rep" id="rep">
              
            </div>
            <div class="but d-flex">
                <p id="message"></p>
               <button name="valider" type="button" id="valider">Enregistrer</button>
            </div>
    </div> 
</div>
</form>
<script src="../asset/javascript/creerQScript.js"></script>
<script src="../asset/javascript/saveQuestion.js"></script>