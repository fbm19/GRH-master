function loadPage(){
    $.ajax({
        url: "pages/Employee_Manag.php",
        success: function(html){
            $("#content-wrapper").innerHTLM = html;
        }
    });
}