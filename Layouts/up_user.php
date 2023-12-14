<?php  


$load_user=load_user_email($email);
            
extract($load_user);
   
?>

<main>

    <form action="index.php?action=up_user" method="post">
        <div class="container signup-form">
            <div class="row  mt-3">
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Email:</label>
                    <input type="text" id="inputPassword5" name="email" class="form-control"
                        value="<?php if(isset($email) && ($email!='') ) echo $email?>"
                        aria-describedby="passwordHelpBlock">

                </div>
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Pass:</label>
                    <input type="text" id="inputPassword5" name="pass" class="form-control"
                        value="<?php if(isset($pass) && ($pass!='') ) echo $pass?>"
                        aria-describedby="passwordHelpBlock">

                </div>
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Name_kh:</label>
                    <input type="text" id="inputPassword5" name="name_kh" class="form-control"
                        value="<?php if(isset($name_kh) && ($name_kh!='') ) echo $name_kh?>"
                        aria-describedby="passwordHelpBlock">

                </div>
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Gender:</label>
                    <input type="text" id="inputPassword5" name="gender" class="form-control"
                        value="<?php if(isset($gender) && ($gender!='') ) echo $gender?>"
                        aria-describedby="passwordHelpBlock">

                </div>
                <div class="col-12">
                    <label for="inputPassword5" class="form-label">Phone:</label>
                    <input type="text" id="inputPassword5" name="phone" class="form-control"
                        value="<?php if(isset($phone) && ($phone!='') ) echo $phone?>"
                        aria-describedby="passwordHelpBlock">

                </div>

            </div>
            <div class="row">
                <div class="col text-center py-4">
                    <input type="hidden" name="id_user"
                        value="<?php if(isset($id_user) && ($id_user>0) ) echo $id_user?>">

                    <input type="submit" name="up_user" value="Cập Nhật" class="btn btn-secondary">
                </div>
            </div>
        </div>
    </form>

</main>