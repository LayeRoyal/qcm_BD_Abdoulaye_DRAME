$('#create').click(function(){
    const fname = $('#fname').val();
    const lname = $('#lname').val();
    const login = $('#login').val();
    const confpass = $('#confpass').val();
    const pass = $('#pass').val();
    const avatar =$('#file').val();
    console.log(avatar);
    if(fname == '' || lname == '' ||  login == '' ||   pass == '' ){
        $('#resultA').html('<h5 class="alting">Veuillez remplir tous les champs svp!</h5>'); 
    }
    else if( avatar == '')
    {
        $('#resultA').html('<h5 class="alting">Veuillez choisir une image!</h5>'); 

    }
    var fd = new FormData();
    var files = $('#file')[0].files[0];
    fd.append('file',files);
    fd.append('nom',fname);
    fd.append('prenom',lname);
    fd.append('login',login);
    fd.append('pass',pass);
    fd.append('confpass',confpass);


    $.ajax({
        url: 'http://localhost/qcm_BD_Abdoulaye_DRAME/qcm_BD_Abdoulaye_DRAME/src/saveAdmin.php',
        type: 'post',
        data: fd,
        contentType: false,
        processData: false,
        success: function(response){
            if(response == 0){
                alert('file not uploaded');
             
            }
            else if(response=='pass')
            {
                $('#resultA').html('<h5 class="alting">password did not match</h5>'); 
            }
            else if(response=='login')
            {
                $('#resultA').html('<h5 class="alting">ce login existe déjà</h5>'); 
            }
            else if(response=='success')
            {
                $('#resultA').html('<h5 class="bon">Inscription réussie avec succes!</h5>'); 
                $('#fname, #lname, #login ,#confpass, #pass, #file').val('');
                $('#fname, #lname, #login ,#confpass, #pass').removeClass('success');
                $('#avatar').attr('src','../asset/Images/backg.png')
            }
        },
    });
});
