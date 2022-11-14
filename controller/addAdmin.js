function addAdmin(){

    // take form from the UI
    var formData = new FormData(document.getElementById('addAdminInterface'));

    //make a connection XMLHttp request
    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "success"){
                alert("Data successfully added to the system.");
                location.href="dashboard.php";
            }
        }
    }

    xmlhttp.open('POST', '../../model/addAdminModel.php');
    xmlhttp.send(formData);

}