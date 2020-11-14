

var firstName = document.getElementById("first_name");
var lastName = document.getElementById("last_name");
var em_ail = document.getElementById("email_field");

function registerUser(){

	var first = firstName.value;
	var last = lastName.value;
	var email = em_ail.value;

	try{

	const database = firebase.database();
	const autoId = database.ref('/users/').push().key;
	
    database.ref('/users/' + autoId).set({
    	FisrtName: first,
    	LastName:last,
    	Email: email
    });
	}
	catch(err){
		alert(err);
   }
}
 