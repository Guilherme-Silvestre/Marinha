$(function(){
	$("#wizard").steps({
        headerTag: "h4",
        bodyTag: "section",
        transitionEffect: "fade",
        enableAllSteps: true,
        onStepChanging: function (event, currentIndex, newIndex) { 
            if ( newIndex === 1 ) {
                $('.wizard > .steps ul').addClass('step-3');
            } else {
                $('.wizard > .steps ul').removeClass('step-3');
            }
            return true; 
        },
        labels: {
            next: "Continue",
            previous: "Back"
        }
    });
    // Custom Button Jquery Steps
    $('.forward').click(function(){
    	$("#wizard").steps('next');
    })
    $('.backward').click(function(){
        $("#wizard").steps('previous');
    })
    // Date Picker
    var dp1 = $('#dp1').datepicker().data('datepicker');
    dp1.selectDate(new Date());
})
$(document).ready(function () { 
    $("#wizard").find(".actions a[href$='#finish']").parent().one('click', function (event){
        if(($("#genero").val() != "") && ($("#idade").val() != "") && ($("#escolaridade").val() != "") && ($("#primeiravisita").val() != "") && ($("#razaovisita").val() != "") && ($("#ultimavisita").val() != "") && ($("#fatoresvisita").val() != "")) {
            $.ajax({
                    method: "POST",
                    url: "inseririnquerito.php",
                    data: { genero: $("#genero").val(), idade: $("#idade").val(), escolaridade: $("#escolaridade").val(), primeiravisita: $("#primeiravisita").val(), razaovisita: $("#razaovisita").val(), ultimavisita: $("#ultimavisita").val(), fatoresvisita: $("#fatoresvisita").val()},
                    success: function(html){
                    alert("inserido com sucesso!");
                    window.location.replace("../index.php?insere=1");}
            });
        }     
        else {
            alert("Preencha os campos todos");
            location.reload();
            return false;
        }   
    });
});