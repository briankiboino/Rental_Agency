//Log out
const logout = document.querySelector('#logout');
logout.addEventListener('click', (e) => {
	e.preventDefault();
	auth.signOut().then(() => {
         auth.onAuthStateChanged(user => {
			if(user){
			}
			else{
				window.open("index.php", "_self");
			}
		});
	});
});

