<input type="text" name="fName1" id="fName1"  readonly value="<?php 
                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['firstName'];
                        }
                      ?>">
                    <label for="fName1">
                      
            </label>
                  </div>
                  <div class="input-group">
                      <i class="fas fa-user"></i>
                      <input type="text" name="lName1" id="lName1"  readonly value="<?php 
                          $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                          while($row=mysqli_fetch_array($query)){
                              echo $row['lastName'];
                        } 
                            ?>">
                      <label for="lName1">
            </label>
                  </div>
                  <div class="input-group">
                      <i class="fas fa-envelope"></i>
                      <input type="email" name="email1" id="email1" readonly value="<?php 
                        $query=mysqli_query($conn, "SELECT users.* FROM `users` WHERE users.email='$email'");
                        while($row=mysqli_fetch_array($query)){
                            echo $row['email'];
                        }
                      ?>
                      ">
                      <label for="email">
            </label>
