function changeColor(){
    var color = $('#color').val();
    $('#first').css('background-color', color);
}

function alertText(){
    alert("Clicked!");
}

function vanish(){
    if($('#third').css('display') != "none"){
    $('#third').fadeOut('slow');
    $('#vanishBtn').html("Display");
    }
    else{
        $('#third').fadeIn('slow');
        $('#vanishBtn').html("Vanish");
    }
}