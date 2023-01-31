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
            finish: "Login",
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
            $.ajax({
                    method: "POST",
                    url: "login.php",
                    data: { username: $("#username").val(), password: $("#password").val()},
                    success: function(html){
                    window.location.replace("../admin/?insere=1");}
            });
    });
});
