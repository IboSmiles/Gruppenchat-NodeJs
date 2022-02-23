<div class="wrapper">
    <div class="container_chatroom">
        <div class="left">
            <div class="top">
                <input type="text" class="createGorupName" placeholder="Create Group" />
                <a class="search createGroup"></a>
                <a href="logout" class="logout" style="padding-left:40px">Logout</a><br>
               
                <!-- <button class="join-groups-btn" style="width:300px; border-radius:20px; font-size:15px; background-color:#00b0ff; margin-left:20px; padding:10px; color:white;">Join Groups</button> -->
              
            </div>
            <ul style="" class="people">
                <?php
                $obj = new Loggedin();
                    echo $obj->getAndShowGroups();
                ?>
            </ul>
        </div>
        <div class="right">
            <div class="top"><span>To: <span class="name"></span></span></div>
            <span class="gorupchats"></span>
            <div class="write">
                <a href="javascript:;" class="write-link attach"></a>
                <input type="text" class="send-information"/>
                <a href="javascript:;" class="write-link smiley"></a>
                <a href="javascript:;" class="write-link send"></a>
            </div>
        </div>
    </div>
</div>
<style>




/*//////////////////////////////////////////////////////////////////
[ FONT ]*/



/*//////////////////////////////////////////////////////////////////
[ RESTYLE TAG ]*/





a:focus {
	outline: none !important;
}

a:hover {
	text-decoration: none;
  color: #1b3815;
}

/*---------------------------------------------*/
h1,h2,h3,h4,h5,h6 {
	margin: 0px;
}

p {
	font-family: Ubuntu-Regular;
	font-size: 14px;
	line-height: 1.7;
	color: #666666;
	margin: 0px;
}

ul, li {
	margin: 0px;
	list-style-type: none;
}


/*---------------------------------------------*/
input {
	outline: none;
	border: none;
}

input[type="number"] {
    -moz-appearance: textfield;
    appearance: none;
    -webkit-appearance: none;
}

input[type="number"]::-webkit-outer-spin-button,
input[type="number"]::-webkit-inner-spin-button {
    -webkit-appearance: none;
}

textarea {
  outline: none;
  border: none;
}

textarea:focus, input:focus {
  border-color: transparent !important;
}


input::-webkit-input-placeholder { color: #1b3815;}
input:-moz-placeholder { color: #1b3815;}
input::-moz-placeholder { color: #1b3815;}
input:-ms-input-placeholder { color: #1b3815;}

textarea::-webkit-input-placeholder { color: #1b3815;}
textarea:-moz-placeholder { color: #1b3815;}
textarea::-moz-placeholder { color: #1b3815;}
textarea:-ms-input-placeholder { color: #1b3815;}

/*---------------------------------------------*/
button {
	outline: none !important;
	border: none;
	background: transparent;
}

button:hover {
	cursor: pointer;
}

iframe {
	border: none !important;
}

/*//////////////////////////////////////////////////////////////////
[ Utility ]*/
.txt1 {
  font-family: Ubuntu-Regular;
  font-size: 15px;
  color: #999999;
  line-height: 1.4;
}

.txt2 {
  font-family: Ubuntu-Regular;
  font-size: 15px;
  color: #57b846;
  line-height: 1.4;
}

.txt3 {
  font-family: Ubuntu-Bold;
  font-size: 15px;
  color: #57b846;
  line-height: 1.4;
  text-transform: uppercase;
}


/*//////////////////////////////////////////////////////////////////
[ login ]*/

.limiter {
  width: 100%;
  margin: 0 auto;
}

.container-login100 {
  width: 100%;  
  min-height: 100vh;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
  align-items: center;
  padding: 15px;
  position: relative;
  /* background-color: #fff; */
}

.wrap-login100 {
  width: 500px;
  background: #fff;
  border-radius: 20px;
  overflow: hidden;
  box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -moz-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -webkit-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -o-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  -ms-box-shadow: 0 3px 20px 0px rgba(0, 0, 0, 0.1);
  padding: 0 !important;
}


/*==================================================================
[ Form ]*/

.login100-form {
  width: 100%;
  position: relative;
}

.login100-form-title {
  font-family: JosefinSans-Bold;
  font-size: 30px;
  color: #fff;
  line-height: 1.2;
  text-align: center;

  display: block;
  position: absolute;
  width: 100%;
  top: 0;
  left: 0;
  background-color: #57b846;
  padding-top: 50px;
  padding-bottom: 39px;
}

/*------------------------------------------------------------------
[ Input ]*/

.wrap-input100 {
  width: 100%;
  background-color: #fff;
  border-radius: 27px;
  position: relative;
  z-index: 1;
}

.input100 {
  font-family: Ubuntu-Bold;
  font-size: 15px;
  color: #1b3815;
  line-height: 1.2;

  position: relative;
  display: block;
  width: 100%;
  height: 55px;
  background: #ebebeb;
  border-radius: 27px;
  padding: 0 35px 0 35px;
}


/*------------------------------------------------------------------
[ Focus Input ]*/

.focus-input100 {
  display: block;
  position: absolute;
  z-index: -1;
  width: 100%;
  height: 100%;
  top: 0;
  left: 50%;
  -webkit-transform: translateX(-50%);
  -moz-transform: translateX(-50%);
  -ms-transform: translateX(-50%);
  -o-transform: translateX(-50%);
  transform: translateX(-50%);
  border-radius: 31px;
  background-color: #ebebeb;
  pointer-events: none;
  
  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.input100:focus + .focus-input100 {
  width: calc(100% + 20px);
}

/*------------------------------------------------------------------
[ Button ]*/
.container-login100-form-btn {
  width: 100%;
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  flex-wrap: wrap;
  justify-content: center;
}

.login100-form-btn {
  display: -webkit-box;
  display: -webkit-flex;
  display: -moz-box;
  display: -ms-flexbox;
  display: flex;
  justify-content: center;
  align-items: center;
  padding: 0 20px;
  width: 100%;
  height: 50px;
  background-color: #57b846;
  border-radius: 25px;

  font-family: Ubuntu-Bold;
  font-size: 15px;
  color: #fff;
  line-height: 1.2;
  text-transform: uppercase;

  -webkit-transition: all 0.4s;
  -o-transition: all 0.4s;
  -moz-transition: all 0.4s;
  transition: all 0.4s;
}

.login100-form-btn:hover {
  background-color: #1b3815;
}


/*------------------------------------------------------------------
[ Alert validate ]*/

.validate-input {
  position: relative;
}

.alert-validate::before {
  content: attr(data-validate);
  position: absolute;
  z-index: 1000;
  max-width: 70%;
  background-color: #fff;
  border: 1px solid #c80000;
  border-radius: 14px;
  padding: 4px 25px 4px 10px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 10px;
  pointer-events: none;

  font-family: Ubuntu-Bold;
  color: #c80000;
  font-size: 13px;
  line-height: 1.4;
  text-align: left;

  visibility: hidden;
  opacity: 0;

  -webkit-transition: opacity 0.4s;
  -o-transition: opacity 0.4s;
  -moz-transition: opacity 0.4s;
  transition: opacity 0.4s;
}

.alert-validate::after {
  content: "\f06a";
  font-family: FontAwesome;
  display: block;
  position: absolute;
  z-index: 1100;
  color: #c80000;
  font-size: 16px;
  top: 50%;
  -webkit-transform: translateY(-50%);
  -moz-transform: translateY(-50%);
  -ms-transform: translateY(-50%);
  -o-transform: translateY(-50%);
  transform: translateY(-50%);
  right: 16px;
}

.alert-validate:hover:before {
  visibility: visible;
  opacity: 1;
}

@media (max-width: 992px) {
  .alert-validate::before {
    visibility: visible;
    opacity: 1;
  }
}

/*//////////////////////////////////////////////////////////////////
[ Responsive ]*/
@media (max-width: 576px) {
  .login100-form {
    padding-left: 15px;
    padding-right: 15px;
  }
}
.overlay_2{
    
}

.overlay_2 {
    z-index: 7000;
    position: fixed !important;
    top: 0;
    left: 0;
    height: 100%;
    width: 100%;
    display: none ;
    transform: scale(0.2);
}

@keyframes overlay_2Animation {
    0% {
        transform: scale(0.2);
    }
    100% {
        transform: scale(1);
    }
}

.overlay_2Disable {
    display: block !important;
    animation: overlay_2Animation 0.6s forwards;
}

</style>
<div class="overlay_2">
<div class="limiter">
		<div class="container-login100">
			<div class="wrap-login100">
				<form class="login100-form validate-form p-l-55 p-r-55 p-t-178">
					<span class="login100-form-title">
						Create Group
					</span>

					<div class="wrap-input100 validate-input m-b-16" data-validate="Please enter username">
						<input class="input100 groupName" type="text" name="groupName" placeholder="Gorupname">
						<span class="focus-input100"></span>
					</div>

					<div class="wrap-input100 validate-input" data-validate = "Please enter password">
						<input class="input100 membersToAdd" type="text" name="membersToAdd" placeholder="Choose Members to add, divided with ','...">
						<span class="focus-input100"></span>
					</div>


					<div class="container-login100-form-btn">
						<button class="login100-form-btn createGroupWithMembers ">
							Create
						</button>
					</div>

					<div class="flex-col-c p-t-170 p-b-40">
						<span class="txt1 p-b-9">
							
						</span>

						<a href="#" class="txt3">
							
						</a>
					</div>
				</form>
			</div>
		</div>
	</div>
</div>