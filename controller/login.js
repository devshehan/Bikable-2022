function getDataFromLogin(){

    // var form = document.querySelector('.loginInterface');
    // form.onsubmit = (e) => {
    //     e.preventDefault();
    // }
    // console.log(document.getElementById('loginEmailBox').value);
    // console.log(document.getElementById('passwordEmailbox').value);
    // const enteredEmail = "shehan";
    // const passwd = "12112";

    var formData = new FormData(document.getElementById('loginInterface'));
    // console.log(formData.get('userEmail'));

    var xmlhttp = new XMLHttpRequest();
    xmlhttp.onreadystatechange = function(){
        if(this.readyState == 4 && this.status == 200){
            if(this.responseText == "success"){
                location.href="dashboard.php";
            }
        }
    };

    xmlhttp.open("POST", "../../model/loginModel.php");
    xmlhttp.send(formData);

    // formData.append("email",enteredEmail);
    // formData.append("password",passwd);

    // console.log(formData);



    // //send request

}