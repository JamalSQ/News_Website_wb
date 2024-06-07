$(document).ready(function(){

    let drawer=$("#drawercontent");
    let hamburg=$("#hamburg");
    let closebtn=$("#closebtn");
    let dropdownbtn=$(".dropdown .btnbar");
    let dropdownbtnlist=$(".dropdown ul");

    let icon=$(".dropdown .btnbar i");

    // main drawer close open btn
    drawer.hide();

    hamburg.click(function(){
        drawer.css({
            left:'0px',
        }).toggle();
    });

    closebtn.click(function(){
        drawer.css({
            left:'-410px'
        }).toggle();
    });

    dropdownbtn.next("ul").hide();
     // drop down open close btn
     dropdownbtn.click(function(){
        $(this).next("ul").slideToggle(100);

     })
});
 


