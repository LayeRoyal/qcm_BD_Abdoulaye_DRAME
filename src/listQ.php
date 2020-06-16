<div class="bg-white">
    <div class="pt-1 p-4 bg-primary text-center text">
        <h3>LISTE DES QUESTIONS</h3>
    </div>
    <div id="scrollZone" class='px-5 '>
    </div>
</div>
<script>
 
  $(document).ready(function(){
        let offset = 0;
        let limit=5;
        $.ajax({
                type: "POST",
                url: "http://localhost/qcm_BD_Abdoulaye_DRAME/qcm_BD_Abdoulaye_DRAME/src/getQuestion.php",
                dataType: "JSON",
                data: {limit:limit,offset:offset},
                success: function (data) {
                    scrollZone.html('')
                    printData(data,scrollZone);
                    offset +=limit;
                    console.log(data);

                }
            });

            //  Scroll
        const scrollZone = $('#scrollZone')
        scrollZone.scroll(function(){
        //console.log(scrollZone[0].clientHeight)
        const st = scrollZone[0].scrollTop;
        const sh = scrollZone[0].scrollHeight;
        const ch = scrollZone[0].clientHeight;
        
        if(sh-st <= ch){
            $.ajax({
                type: "POST",
                url: "http://localhost/qcm_BD_Abdoulaye_DRAME/qcm_BD_Abdoulaye_DRAME/src/getQuestion.php",
                data: {limit:limit,offset:offset},
                dataType: "JSON",
                success: function (data) {    

                    printData(data,scrollZone);
                    offset +=limit;
                }
            });
        }
           
        })
    });

    function printData(data,scrollZone){
        $.each(data, function(indice,questions)
        {
            scrollZone.append(`
                <h4 >${questions.id_question} - ${questions.question}</h4>
                            `);
            $.each(questions.reponse,function(indice2,reponses)
            {
                if(questions.type=="choix simple")
                {
                    if(reponses.statut==1)
                    {
                        scrollZone.append(`
                        <div class="d-flex  mx-5"><input type="radio" checked/><h4 class=" mx-5">${reponses.rep}</h4></div>
                    `);
                    }
                    else{
                        scrollZone.append(`
                            <div class="d-flex  mx-5"><input type="radio"/><h4 class=" mx-5">${reponses.rep}</h4></div>
                    `);
                    }
                    
                }
                else if(questions.type=="choix multiple")
                {
                    if(reponses.statut==1)
                    {
                        scrollZone.append(`
                        <div class="d-flex  mx-5"><input type="checkbox" checked/><h4 class=" mx-5">${reponses.rep}</h4></div>
                     `);
                    }
                    else{
                        scrollZone.append(`
                            <div class="d-flex  mx-5"><input type="checkbox"/><h4 class=" mx-5">${reponses.rep}</h4></div>
                    `);
                    }
                }
                else{
                    scrollZone.append(`
                    <div class="d-flex mx-5"><textarea class=" mx-5">${reponses.rep}</textarea></div>
                `);
                }
            });
        });
}
</script>