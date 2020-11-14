//Log out
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
	e.preventDefault();
	auth.onAuthStateChanged(user => {
	if(user){
	auth.signOut().then(() => {

		var offlineStatus = {

            Status: "Offline",

		}

		return database.ref('/users/' + user.uid).update(offlineStatus).then(() => {

		});
	});
}
});
});

