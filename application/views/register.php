<!DOCTYPE html>
<html>
    <head>
        <title>Register</title>
        <link rel="stylesheet" href="../static/css/bootstrap.css">
        <link rel = "stylesheet" href = "../static/css/register.css">
    </head>
    <body>
        <div class ="container-fluid">
            <div class = "row mt-5">
                <div class ="col-4">
                </div>
                <div class ="col-3 shadow-lg p-3 mb-5  rounded">

                    <form method="post" id="register_form">

                        <div class="form-group text-white">
                            <label for="exampleInputName1">Name</label>
                            <input type="text" class="form-control" name="name" id="exampleInputName1" placeholder="Name">
                        </div>
                        <div class="form-group text-white">
                            <label for="exampleInputPhoneNumber1">Number</label>
                            <input type="number" class="form-control" name="number" id="exampleInputPhoneNumber1" 
                                   placeholder="Enter Number">    
                        </div>
                        <div class="form-group text-white">
                            <label for="exampleInputEmail1">Email address</label>
                            <input type="email" class="form-control" name="email" id="exampleInputEmail1" aria-describedby="emailHelp" placeholder="Enter email">

                        </div>
                        <div class="form-group text-white">
                            <label for="exampleInputPassword1">Password</label>
                            <input type="password" class="form-control" id="exampleInputPassword1" name="password" 
                                   placeholder="Password">
                        </div>
                        <div class="form-group text-white">
                            <label for="birthDate" class="col-sm-3 control-label">Birthday</label>
                            <div class="col-sm-9">
                                <input type="date" id="birthDate" class="form-control">
                            </div>
                        </div>
                        <div class="form-group text-white">
                            <label for="country" class="col-sm-3 control-label">Country</label>
                            <div class="col-sm-12">
                                <select id="country" class="form-control">
                                    <option>India</option>
                                    <option>Bahamas</option>
                                    <option>Uruguay</option>
                                    <option>Denmark</option>
                                    <option>China</option>
                                    <option>Pakistan</option>
                                    <option>Gabon</option>
                                    <option>Bangladesh</option>
                                </select>
                            </div>
                        </div> <!-- /.form-group -->
                        <div class="form-group text-white">
                            <label class="control-label col-sm-3">Gender</label>
                            <div class="co  l-sm-6">
                                <div class="row">
                                    <div class="col-sm-3">
                                        <label class="radio-inline">
                                            <input type="radio" id="femaleRadio" value="Female">Female
                                        </label>
                                    </div>
                                    <div class="col-sm-4 ml-4">
                                        <label class="radio-inline">
                                            <input type="radio" id="maleRadio" value="Male">Male
                                        </label>
                                    </div>
                                </div>
                            </div>
                        </div> 
                        <div class="form-group form-check text-white">
                            <input type="checkbox" class="form-check-input" id="exampleCheck1">
                            <label class="form-check-label" for="exampleCheck1">I accept terms</label>
                        </div>
                        <button type="submit" id="submit" class="btn btn-block rounded btn-danger"><span class=" font-weight-bold ">Submit</span></button>
                    </form>

                </div>
                <div class="col-4">
                </div>
            </div>
            <div class="row fixed-bottom text-white bg-dark">
                <div class="col-3">
                    <p>Language</p>

                </div>
                <div class="col-3">
                    <p>Career</p>
                </div>
                <div class="col-3">
                    <p>Contact Us</p>
                </div>
                <div class="col-3">
                    <p>hello</p>
                </div>
            </div>     
        </div>
        <script type="text/javascript" src="/static/javascript/bootstrap.js"></script>
        <script type="text/javascript" src="/static/javascript/bootstrap.min.js"></script>
        <script type="text/javascript" src="/static/javascript/jquery-3.3.1.min.js"></script>
        <script type="text/javascript" src="/static/javascript/register.js"></script>

    </body>
</html>