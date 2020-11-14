<?php

            require_once 'connect.php';

            if (isset($_POST['signin'])) {
             $Username = $_POST['username'];
             $Password = $_POST['password'];
             $pass = sha1($Password);

            if($stmt = $conn->prepare('SELECT id, username, password FROM admin WHERE username = ?')){
              $stmt->bind_param('s', $_POST['username']);
              $stmt->execute();
              $stmt->store_result();

              if ($stmt->num_rows > 0) {
                $stmt->bind_result($id, $username, $password);
                $stmt->fetch();
                
               if ($password == $pass) {
                          session_start();
                          $_SESSION['user_id'] = $id;
                          echo "<script>window.open('admin.php', '_self')</script>";
                        }
               }
               else{
                echo "<font color='red'>Incorrect password or username!</font>";
               }
             } 
              }
?>