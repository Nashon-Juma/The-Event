@extends('layout.app')

<head>
    <title>New</title>
    <style>
        body {
  background: #2c3e50;
  color: white;
  font-family: monospace;
}
input, .modal {
  color: black;
}
.table-striped > tbody > tr:nth-child(2n + 1) > td,
.table-striped > tbody > tr:nth-child(2n + 1) > th {
  background-color: #34495e;
}
.row .alert {
  margin-top: 25px;
}
th, td {
  border-top: none !important;
}

h3 {
  background-color: #333;
  padding: 12px;
  border-top-right-radius: 20px;
  font-weight: bolder;
  letter-spacing: .1.1em;
}

.modal-content{
  border-radius: 0;
}

.modal-header, .modal-footer {
  background-color: #333;
  color: white;
  border: 0;
}

.modal-body {
  background: #2c3e50;
  color: white;
}

.close, .close:hover {
  color: white;
}

.btn {
  font-weight: bolder;
  letter-spacing: .2em;
}


/* The message box is shown when the user clicks on the password field */
.btnz{
	float:right;
}
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}
/*makes the success message go away*/
#success_message{ display: none;}
/* The message box is shown when the user clicks on the password field */
#message {
    display:none;
    background: #f1f1f1;
    color: #000;
    position: relative;
    padding: 20px;
    margin-top: 10px;
}

#message p {
    padding: 10px 35px;
    font-size: 15px;
    text-align:center;
}

/* Add a green text color and a checkmark when the requirements are right */
.valid {
    color: green;
}

.valid:before {
    position: relative;
    left: -35px;
    content: "✔";
}

/* Add a red text color and an "x" when the requirements are wrong */
.invalid {
    color: red;
}

.invalid:before {
    position: relative;
    left: -35px;
    content: "✖";
}


    </style>
</head>
<body>
    @section('content')

  <!-- ======= Hero Section ======= -->


      <button class="btn btnz" onclick="window.location.href='help/mainMenuHelp.pdf'">
        <i class="fa fa-question" ></i></button>
      <div class="container">
          <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>
      <!-- Form Name -->
        <class style="text-align:center;"> <h2>Add User</h2><br/>
      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">First Name</label>
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="first_name" placeholder="First Name" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" >Last Name</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="last_name" placeholder="Last Name" class="form-control"  type="text">
          </div>
        </div>
      </div>

      <!-- Text input-->
             <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text">
          </div>
        </div>
      </div>



      <!-- Select Basic -->

      <div class="form-group">
        <label class="col-md-4 control-label">Account Type</label>
          <div class="col-md-4 selectContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-list"></i></span>
          <select name="state" class="form-control selectpicker" >
            <option value=" " >Please Select user type</option>
            <option>Admin</option>
            <option>Standard User</option>
          </select>
        </div>
      </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label">Username</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input name="username" placeholder="Username" class="form-control"  type="text"required>
          </div>
      </div>
      </div>

      <!-- Text input-->

      <div class="form-group">
        <label class="col-md-4 control-label" for="psw">Password</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-lock"></i></span>
        <input name="psw" placeholder="Password" class="form-control" type="password" id="psw" pattern="(?=.*\d)(?=.*[a-z])(?=.*[A-Z]).{8,}" title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>
          </div>
      </div>
      </div>
          <div id="message">
        <h4>Password must contain the following:</h4>
        <p id="letter" class="invalid">A <b>lowercase</b> letter</p>
        <p id="capital" class="invalid">A <b>capital (uppercase)</b> letter</p>
        <p id="number" class="invalid">A <b>number</b></p>
        <p id="length" class="invalid">Minimum <b>8 characters</b></p>
      </div>
      <!-- Success message -->
      <div  style="text-align:center;" class="alert alert-success" role="alert" id="success_message"><i class="glyphicon glyphicon-thumbs-up"></i> Success! User Added Succesfully.</div>

      <!-- Button -->

      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
            <button name="submit" type="submit" class="btn btn-warning btn-block" id="contact-submit" data-submit="...Sending">Add User</button>
        </div>
      </div>

      </fieldset>
      </form>
      </div>
      </fieldset>
      </form>
      </div>
          </div>


      <!-- container -->

      @endsection
</body>
