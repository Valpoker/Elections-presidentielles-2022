$(document).ready(function(){
    $(".bi-heart").click(function(){
    if($(this).attr("class") == "bi bi-heart"){
        $(this).attr("class", "bi bi-heart fill");
        $.ajax({
            url: "forum.php",
            type: "POST",
            data: {
                action: "liker_forum",
                num_salle: $(this).attr("num_salle") },
        });
    }
    else{
        $(this).attr("class", "bi bi-heart");
        $.ajax({
            url: "forum.php",
            type: "POST",
            data: {
                action: "disliker_forum",
                num_salle: $(this).attr("num_salle") },
        });
    }
});
    });
