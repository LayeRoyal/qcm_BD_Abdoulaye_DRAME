

function readURL(input) {
    if (input.files && input.files[0]) {
         //image type verification
         if((input.files[0].type)!="image/jpeg" && (input.files[0].type)!="image/jpg" && (input.files[0].type)!="image/png")
         {
             alert("Veuillez choisir une image au format png,jpg ou jpeg ")
         }
                  //image size verification
         else if((input.files[0].size)>2096000)
         {
             alert("Taille trop grande \n Veuillez choisir une taille inferieur à 2MB")
         }
         else{
            var reader = new FileReader();
            reader.onload = function(e) {
              $('#avatar').attr('src', e.target.result);
              
            }
        
            reader.readAsDataURL(input.files[0]);
         }
     
    }
  }
  
  $("#file").change(function() {
    readURL(this);
  });


//javascript form validation
var fname = document.getElementById('fname');
var login = document.getElementById('login');
var lname = document.getElementById('lname');
var pass = document.getElementById('pass');
var confpass= document.getElementById('confpass');

validate(login);
validate(fname);
validate(lname);
validate(pass);
validate(confpass);

//fonction qui verifie si c bon
function validate(input){ 
input.addEventListener('keyup', e => {
	e.preventDefault();
	
	checkInputs();
});

function checkInputs()
{  
const inputValue=input.value;
    if(inputValue === '') {
        input.className="error";
      
        $( input ).next().css( "visibility", "visible" );
	}
    else {
        input.className="success";
        $( input ).next().css( "visibility", "hidden" );

        //verifions si le login existe déjà
        if(input==login)
        {
            fetch('getUser.php').then(function (reponse)
            {
               
                return reponse.json();
                
            }).then(function(data) {               
               for(let i=0; i<data.length;i++)
               {
                   if(data[i].login==inputValue)
                   {
                    $( input ).next().html('Ce Login existe déjà')
                    $( input ).next().css( "visibility", "visible" );
                    input.className="error"; break;
                    

                   }
                   else{
                    
                     $( input ).next().html('field required')
             
                   }
                   
               }
                
                    }
                    );

        }
        // verifier si les 2 mdp sont identiques 
        if(input==confpass && pass.value==confpass.value)
        {
            confpass.className="success";
        }
        else if(confpass.value!='' && pass.value!=confpass.value){
            confpass.className="error";
        }
		
    }
   

}
}

