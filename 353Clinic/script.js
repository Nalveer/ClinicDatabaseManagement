
function findClinic(){

  var cid = document.getElementById("cid").value;
  var date = document.getElementById("pDate").value;

  //if empty input
  if(cid=="" || date==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("innerBlock1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getClinicA.php?c="+cid+"&d="+date, true);
  xhttp.send();

}

function findPatient(){

  var pid = document.getElementById("pid").value;

  //if empty input
  if(pid==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("innerBlock2").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getPatientA.php?p="+pid, true);
  xhttp.send();

}

function findDentist(){

  var did = document.getElementById("did").value;
  var date = document.getElementById("dDate").value;

  //if empty input
  if(did=="" || date==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("innerBlock3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getClinicA.php?c="+did+"&d="+date, true);
  xhttp.send();

}
function executeQuery(){

  var q = document.getElementById("query").value;

  if(q!=""){

    var xhttp;
    xhttp = new XMLHttpRequest();
    xhttp.onreadystatechange = function() {
      if (this.readyState == 4 && this.status == 200) {
        document.getElementById("innerDiv2").innerHTML = this.responseText;
      }
    };
    xhttp.open("GET", "ExecuteQ.php?q="+q, true);
    xhttp.send();

  }
}

function done(){
  location.reload();
}


function add(x,y){

  document.getElementById(x).style.display="block";
  document.getElementById(y).style.display="none";
}

function delete1(x,y){
  document.getElementById(x).style.display="block";
  document.getElementById(y).style.display="none";
}

function addClinic(){

  var name = document.getElementById("addname").value;
  var cid = document.getElementById("addcid").value;
  var addr = document.getElementById("addaddr").value;
  var queryType = "add";
  //if empty input
  if(cid=="" || name=="" || addr==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp1").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "modifyClinic.php?c="+cid+"&a="+addr+"&n="+name+"&q="+queryType, true);
  xhttp.send();

}

function deleteClinic(){

  var cid = document.getElementById("delcid").value;
  var queryType = "delete";
  var name ="na";
  var addr = "na";

  if(cid==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp2").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "modifyClinic.php?c="+cid+"&a="+addr+"&n="+name+"&q="+queryType, true);
  xhttp.send();

}

function addPatient(){

  var name = document.getElementById("addnameP").value;
  var pid = document.getElementById("addpid").value;
//  var addr = document.getElementById("addaddrP").value;
  var queryType = "add";
  //if empty input
  if(pid=="" || name==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp3").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "modifyPatient.php?p="+pid+"&n="+name+"&q="+queryType, true);
  xhttp.send();

}

function deletePatient(){

  var pid = document.getElementById("delpid").value;
  var queryType = "delete";
  var name ="na";
  var addr = "na";

  if(pid==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp4").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "modifyPatient.php?p="+pid+"&a="+addr+"&n="+name+"&q="+queryType, true);
  xhttp.send();


}

function addDentist(){

  var name = document.getElementById("addnameD").value;
  var did = document.getElementById("addDid").value;
  var addr = document.getElementById("addaddrD").value;
  var queryType = "add";
  //if empty input
  if(did=="" || name=="" || addr==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp5").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "modifyDentist.php?d="+did+"&a="+addr+"&n="+name+"&q="+queryType, true);
  xhttp.send();

}

function deleteDentist(){

  var did = document.getElementById("delDid").value;
  var queryType = "delete";
  var name ="na";
  var addr = "na";

  if(did==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp6").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET", "modifyDentist.php?d="+did+"&a="+addr+"&n="+name+"&q="+queryType, true);
  xhttp.send();


}

function findPatientBill(){

  var pid = document.getElementById("pidB").value;
  //if empty input
  if(pid==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("innerBlock7").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "getPatientBill.php?p="+pid, true);
  xhttp.send();

}

function addBill(){

  var pid = document.getElementById("addnameB").value;
  var bill = document.getElementById("addBill").value;
  var appt = document.getElementById("addAppoint").value;
  var amount = document.getElementById("addAmount").value;
  var queryType = "add";
  //if empty input
  if(pid=="" || bill=="" || appt=="" ||amount==""){
    alert("Invalid Input");
    location.reload();
  };
  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp7").innerHTML = this.responseText;
    }
  };
  xhttp.open("GET", "modifyBill.php?p="+pid+"&b="+bill+"&ap="+appt+"&a="+amount+"&q="+queryType, true);
  xhttp.send();

}

function deleteBill(){

  var bill = document.getElementById("delBill").value;
  var queryType = "delete";
  var pid = 0;
  var amount = 0;
  var appt = 0;


  if(bill==""){
    alert("Invalid Input");
    location.reload();
  };

  var xhttp;
  xhttp = new XMLHttpRequest();
  xhttp.onreadystatechange = function() {
    if (this.readyState == 4 && this.status == 200) {
      document.getElementById("resp8").innerHTML = this.responseText;
    }
  };

  xhttp.open("GET","modifyBill.php?p="+pid+"&b="+bill+"&ap="+appt+"&a="+amount+"&q="+queryType, true);
  xhttp.send();


}

function viewUnpaidBill(){

  document.getElementById("unpaidB").style.display = "block";
  document.getElementById("addB").style.display = "none";
  document.getElementById("delB").style.display = "none";

}
