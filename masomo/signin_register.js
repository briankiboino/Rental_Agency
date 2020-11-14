//Variable that stores a random string which is merged with user's name to form username
var random_Id = Math.random().toString().substr(2, 5)

//Declaration of variables that store temporary details about the user
var payment = "Pending";
var status = "Offline";
var cover_image = "https://firebasestorage.googleapis.com/v0/b/masomo-kwetu.appspot.com/o/covers%2Fuser_sunflower.jpg?alt=media&token=02f42148-bef1-4844-a02c-c3500de5fdd8";
var profile_image = "https://firebasestorage.googleapis.com/v0/b/masomo-kwetu.appspot.com/o/profiles%2Fuser_turqoise.jpg?alt=media&token=d1f5dfdb-596c-4a64-bed9-e5d423c24eed";
var reg_date = (new Date()).toString().split(' ').splice(1,3).join(' ');
var subscription_payment = "00:00:00:00";
var post = "No";
var role = "Student";

//Sign up
const signupForm = document.querySelector('#signup_form');
signupForm.addEventListener('submit', (e) => {
	e.preventDefault();

	//Get user email and passwords
	const email = signupForm['email_field'].value;
	const password = signupForm['pass_word'].value;
    const confirm_password = signupForm['confirm'].value;

	//Sign up user
	//Check the length of the password if its < 6
	if(password.length < 6){
		alert('Password should be a minimum of 6 characters!');
	}
	else{
         
        //Check if the passwords in the input fields match
		if(password == confirm_password){

			//Create new user using the email and password
			auth.createUserWithEmailAndPassword(email, password).then(cred => {

			//Push the rest of the details of the user to the database	
		    return database.ref('/users/' + cred.user.uid).set({ 
		     FirstName: signupForm['first'].value,
		     LastName: signupForm['last'].value,
		     Username: signupForm['first'].value + "_" + signupForm['last'].value + "_" + random_Id,
		     School: signupForm['school'].value,
		     Email: signupForm['email_field'].value,
		     AdmissionNumber: signupForm['adm_number'].value,
		     PaymentStatus: payment,
		     Status: status,
		     Cover: cover_image,
		     Profile: profile_image,
		     Date: reg_date,
		     Subscription: subscription_payment,
		     Posts: post,
		     Role: role

		     }).then(() => {
                  const user_email = signupForm['email_field'].value;
                  user = firebase.auth().currentUser;
                  user.sendEmailVerification().then(function() {

                  	 alert('An email has been sent. Please check and verify');
                     signupForm.reset();

                  });

		     });
			 }).catch(err => {
			 	alert(err);
			 })
}
else{
	alert('Passwords do not match');
}
}
});

//Sign in
const loginForm = document.querySelector('#signin_form');
loginForm.addEventListener('submit', (e) => {
  e.preventDefault();

  //Get user info
  const sign_in_email = loginForm['username'].value;
  const sign_in_password = loginForm['password'].value;
 
  if(sign_in_password.length < 6){
		alert('Password should be a minimum of 6 characters!');
	}
	else{
    auth.signInWithEmailAndPassword(sign_in_email, sign_in_password).then(cred => { 
    loginForm.reset();
    //Listen for auth status changes
    auth.onAuthStateChanged(user => {
      if(user){
        console.log(cred.user.uid);
       
        window.open("starter.php", "_self");
      }
      else{
        console.log('User logged out');
      }
    });
  }).catch(err => {
                  alert('Incorrect email or password');
			}).then(() => {

			});
	}
});




    
    

	
