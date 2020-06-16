<div class="d-block">
    <h4 class="mb-4 p-4 text-center bg-primary">Tableau de Bord  Admin</h4>

    <div class="row">

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-0 rounded-0">
          <div class="card-body">
            <div class="card-innerBody d-flex align-items-center">
              <div class="card-icon  text-light">
              <i class="fas fa-user-edit fa-3x"></i>              
            </div>
              <div class="ml-auto">
                <p class="card-label text-right text-muted">Admin</p>
                <h4 class="card-text text-right ">99</h4>
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Nombre d'Administrateurs</small>
          </div>
        </div>
      </div>


      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-0 rounded-0">
          <div class="card-body">
            <div class="card-innerBody d-flex align-items-center">
              <div class="card-icon text-light">
                <i class="fas fa-gamepad fa-3x" aria-hidden="true"></i>
              </div>
              <div class="ml-auto">
                <p class="card-label text-right text-muted">Joueur</p>
                <h4 class="card-text text-right ">258</h4>
              </div>
            </div>
          </div>
          <div class="card-footer text-center ">
            <small class="text-muted">Nombre de Joueurs</small>
          </div>
        </div>
      </div>

      <div class="col-md-6 col-lg-4 mb-4">
        <div class="card border-0 rounded-0">
          <div class="card-body">
            <div class="card-innerBody d-flex align-items-center">
              <div class="card-icon text-light">
                <i class="far fa-question-circle fa-3x" aria-hidden="true"></i>
              </div>
              <div class="ml-auto">
                <p class="card-label text-right text-muted">Questions</p>
                <h4 class="card-text text-right "> 15</h4>
              </div>
            </div>
          </div>
          <div class="card-footer text-center">
            <small class="text-muted">Nombre de Questions par jeu</small>
          </div>
        </div>
      </div>

    </div>

<div>
<canvas id="myChart1" style=" height: 45%; width: 55%; font-size: 1.5vw;"></canvas>
</div>
</div>
<script>
        var ctx1 = document.getElementById("myChart1");
        var myChart1 = new Chart(ctx1, {
            type: 'doughnut',
            data: {
                labels: ["Choix Multiple", "Choix Simple", "Choix Texte"],
                datasets: [{
                    label: 'NOMBRE',
                    data: [25,15,10],
                    backgroundColor:["#39ff14", "#86f6f7","#ff2281"],
                    borderColor: "#fff"
                        }]
                },
            options: {
                title:{
                    text: "Représentation des types de Questions",
                    display: true,
                    color: "black"
                }
            }
        });


</script>
