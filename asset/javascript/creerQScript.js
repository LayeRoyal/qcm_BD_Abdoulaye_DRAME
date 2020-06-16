var adding=document.getElementById("plus");
var choice=document.getElementById("choix");
var rep=document.getElementById("rep");

adding.className='d-none';

choice.addEventListener("change",emptyrep);
function emptyrep(){
    
    var choice=document.getElementById("choix");
    var rep=document.getElementById("rep");
   if(choice.value=="ChoixText")
    {               
        adding.className='d-none';  
        rep.innerHTML="";
        let div=document.createElement("div");
        div.className="d-flex mt-4";
        rep.appendChild(div)
        let text=document.createElement("TEXTAREA");
        let label=document.createElement("h3");
        text.name="ctext";
        text.id="quest";
        label.innerHTML="Réponse";
        label.className="mt-5 mr-3";

        label.id="textlab";

        div.append(label);
        div.append(text);
       
    }
    else {
        rep.innerHTML="";
        if((choice.value=="ChoixMultiple") || (choice.value=="ChoixSimple"))
        {
            adding.className='d-block';
        }
        else{
            adding.className='d-none';
        }
    }
       
}

adding.addEventListener("click",addinput);

function addinput() {
    var choice=document.getElementById("choix");
    var rep=document.getElementById("rep");

    if( (choice.value=="ChoixMultiple") || (choice.value=="ChoixSimple") )
    {
       if(rep.children.length<=5)
       {
        let div=document.createElement("div");
        div.id="multisimple";
        div.className=(rep.children.length)+1;

        rep.appendChild(div);
        let i= (rep.children.length);
        let label=document.createElement("label");
        let input=document.createElement("input");
        let  cb=document.createElement("input");
        let img=document.createElement('img');
         label.id="lab";
         label.innerHTML="Réponse "+(i)+" :";
         input.id="ipt";
         input.name="ipt"+i;
         cb.id="ckbox";
         img.setAttribute("src","../asset/Images/Icones/icsupprimer.png");
        img.id="imgsup";
        img.className=i;

        //boutton supprimer
        img.addEventListener("click", suprep);
        function suprep()
        {
           if(i==div.className)
           {
               div.remove();
           } 
        }

         if(choice.value=="ChoixMultiple")
         {  
            cb.type="checkbox";
            cb.name="ckbox"+i;               
         }
         else
         {               
            cb.type="radio";
            cb.name="ckbox";
         }
            div.appendChild(label);
            div.appendChild(input);
            div.appendChild(cb);
            div.appendChild(img);
         

       }
           
    }     

    else if(choice.value==""){
        rep.innerHTML="";
    }
 }