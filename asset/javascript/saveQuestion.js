$('#valider').click(function(){
    const quest = $('#quest').val();
    const point = $('#point').val();
    const choix = $('#choix').val();

    if(quest == '' || point == ''  ){
        $('#message').html('<h5 class="alting">Veuillez remplir tous les champs svp!</h5>'); 
    }
    else if(  choix == '')
    {
        $('#message').html('<h5 class="alting">Veuillez choisir type de repose et donner les reponses!</h5>'); 

    }
    else{

    $.ajax({
        url: 'http://localhost/qcm_BD_Abdoulaye_DRAME/qcm_BD_Abdoulaye_DRAME/src/saveQuestion.php',
        type: 'post',
        data: $('form').serialize(),
        success: function(response){
            if(response == ''){
                alert('file not uploaded');
                console.log(response);
                
             
            }
            else {
                console.log(response);

            }
          
        },
    });
    }
//     var fd = new FormData();
//     var files = $('#file')[0].files[0];
//     fd.append('file',files);
//     fd.append('nom',fname);
//     fd.append('prenom',lname);
//     fd.append('login',login);
//     fd.append('pass',pass);
//     fd.append('confpass',confpass);


 });
