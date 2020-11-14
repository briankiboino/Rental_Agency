 //Get image and description from the user
   var validImagetypes = ["image/gif", "image/jpeg", "image/png"];

   //Upload post and store into firebase storage
   const postForm = document.querySelector('#upload_post_form');
   let desc = document.getElementById('description').value;     
   let picture = postForm['post_image'].files[0];
   
   postForm.addEventListener('submit', (e) => {
       e.preventDefault();
       if(picture == ""){
            alert("No image has been selected! Please select an image to upload.");
       }
       else{
        //Reference to database
       database.ref('/posts/').once('value').then(function(snapshot){
           
          //Get name of the image and date
          var name = picture;
          console.log(name);
          var dateStr = new Date().getTime();
          var fileCompleteName = name + "_" +dateStr;

          //Reference to the firebase storage
          var storageRef = firebase.storage().ref("/Posts/");
          var postStorageRef = storageRef.child(fileCompleteName);
          
          //Push image to the storage
          var uploadTask = postStorageRef.put(picture);

          //Observe state change events while uploading
          uploadTask.on("state_changed", function(snapshot) {
              
              //Print the progress
              var progressPercentage = (snapshot.bytesTransferred / snapshot.totalBytes) * 100;
              console.log("Upload is" + progressPercentage + "% done");

          },
              //Catch any error that occurs during uploading process and print it
              function error(err){

                alert(err);

              },
              
              //If image is uploaded successfully push details of image and uploader to the database
              function complete()
              {
                 
                 //Retrieve current user's information from database
                 const auth = firebase.auth();
                 var user = auth.currentUser;
                 var userName;

                 return database.ref('/users/' + user.uid).once('value').then(function(snapshot)
                 {

                    var first_name = (snapshot.val() && snaposhot.val().FirstName);
                    var last_name = (snapshot.val() && snapshot.val().LastName);

                    userName = first_name + " " + last_name;

                 });

                    //Upload data into database
                    uploadTask.snapshot.ref.getDownloadURL().then(function(downloadUrl)
                    {
                      
                        var timr = new Date();
                        var options = 
                        {
                          
                          weekday: "long",
                          monht: "long",
                          day: "2-digit",
                          year: "numeric",

                        };

                        //Create object that will store data into database
                        var postDat = 

                         {

                            "image": downloadUrl,
                            "name": fileCompleteName,
                            "desc": desc,
                            "uid": user.uid,
                            "counter": 10000 - counter,
                            "username": userName,
                            "time": time.toLocaleString('en-US', {hour: 'nmeric', minute: 'numeric', hour12: true}),
                            "date": time.toLocaleString('en-US', options),

                         };
                         
                         //Push data to realtime database
                         var newPostRef = database.push();

                         newPostRef.set(postData, function(err){
                              
                              //Catch the error and print it
                              if(err){
                                alert(err);
                              }
                              else{
                                alert('You just uploaded a post a moment ago');
                                postForm.reset();
                              }

                         });

                    })

              }

          );
       

       });
     }
});