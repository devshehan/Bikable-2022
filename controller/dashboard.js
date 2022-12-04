// create xmlhttp object
var data;
var xmlHttp = new XMLHttpRequest();
xmlHttp.onreadystatechange = function(){
    if(this.readyState == 4 && this.status == 200){
        console.log(this.responseText);
        data = JSON.parse(this.responseText);
        console.log(data);

        var person1 = data[0].first_name + " " + data[0].last_name;
        var person2 = data[1].first_name + " " + data[1].last_name;

        console.log(person1);
        console.log(person2);

        document.getElementById("e1").innerHTML = person1;
        document.getElementById("e2").innerHTML = person2;
    }
};


xmlHttp.open("POST","../../model/readAdminModel.php",true);
xmlHttp.send();


//take person two administrator's data from the database
// person 1
var person1 = data[0].first_name + " " + data[0].last_name;
var person2 = data[1].first_name + " " + data[1].last_name;
// var person1 = data[2].first_name + " " + data[0].last_name;
// var person1 = data[3].first_name + " " + data[0].last_name;


//display data on the USER INTERFACE
document.getElementById("e1").innerHTML = person1;
document.getElementById("e2").innerHTML = person2;
