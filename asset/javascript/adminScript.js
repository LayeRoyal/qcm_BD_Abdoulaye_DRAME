loading('listQ');
loading('creerQ');
loading('listJ');
loading('creerA');
loading('dashboard');
$(document).ready(function(){ $("#include").load("dashboard.php")});

function loading(lien) {
    $(document).ready(function(){
        $("#"+lien).click(function(){
            $("#include").load(lien+".php");
            $("li").removeClass("active")
            $("#"+lien).addClass("active");
        });
    });    
}
