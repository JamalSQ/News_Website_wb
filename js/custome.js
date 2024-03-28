
    // let btn=document.getElementsByTagName(button);
    $(document).ready(function () {

        $("#drawer").click(function () {
            $(".drawer").toggle(500);
        });

        // For the editable text 
        let diabox = true;

        $("#dialogbox").css({ "display": "none" });

        $("#login").click(function () {
            if (diabox == false) {
                $("#dialogbox").css({ "display": "none" }).fadeToggle(500);
                diabox = true;
            } else {
                $("#dialogbox").fadeToggle(500);
                diabox = false;
            }

        });

        $("header h1").click(function () {

            let text = $("h1").text();
            $("#hdr").val(text);
            $("#hdr").attr("type", "text");
            $("h1").hide();
        });

        $("#hdr").focusout(function () {

            let inputToH1 = $("input").val();

            // console.log(inputToH1);
            $("header h1").text(inputToH1);
            $("#hdr").attr("type", "hidden");
            $("header h1").show();
        });

        $("#ChBgColor").click(function () {
            var newbackground = $("#color").val();
            $("body").css("--background-color", newbackground);
        });

        $("#ChTColor").click(function () {
            var textColor = $("#color").val();
            $("body").css("--text-color", textColor);
        });
    });



    // Dragable code for the particular element
    function drag(event, uniqueID) {

        var draggable = document.getElementById(uniqueID);
        event.dataTransfer.setData("text", uniqueID);

        // Save initial position
        var initialX = event.clientX;
        var initialY = event.clientY;

        // Function to handle drag move
        function moveElement(event) {
            // var draggable = document.getElementById("draggable");
            var deltaX = event.clientX - initialX;
            var deltaY = event.clientY - initialY;
            initialX = event.clientX;
            initialY = event.clientY;
            draggable.style.left = (draggable.offsetLeft + deltaX) + "px";
            draggable.style.top = (draggable.offsetTop + deltaY) + "px";
        }

        // Function to handle drag end
        function endDrag(event) {
            document.removeEventListener("mousemove", moveElement);
            document.removeEventListener("mouseup", endDrag);
        }

        document.addEventListener("mousemove", moveElement);
        document.addEventListener("mouseup", endDrag);
    }

