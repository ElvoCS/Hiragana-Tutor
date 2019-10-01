<?php  include('server.php'); ?>



<!DOCTYPE html>


<div class="backg">
<head>
<meta charset="utf-8">
<link href="bootstrap-4.3.1-dist/css/bootstrap-grid.min.css" rel="stylesheet">
<script src="bootstrap-4.3.1-dist/js/bootstrap.bundle.min.js"></script>
<link rel="stylesheet" type="text/css" href="style.css">
<script src="function.js"></script> 
<title>Develop by EP</title>
</head>

<body>
    <?php if (isset($_SESSION['message'])): ?>
    <div class="msg">
      
      <?php 
      echo $_SESSION['message']; 
      unset($_SESSION['message']);
      ?>
           </div>
          <?php endif ?>


  
  <div id= "sidebar">
    <div class="toggle-btn" onclick="toggleSidebar()">
        <span></span>
        <span></span>
        <span></span>
        
    </div>

    <ul>
    <li id="home" onclick="home();">Home</li>
    <li id="createUser" onclick="createUser();">Create User</li>
    <li id="quizbtn" onclick="quiz();">Quiz</li>

    </ul>
    
</div>



<div><h1 style="text-align: center;">Japanase Tutor</h1></div>

<!-- signup -->
<div id="userform" style="visibility: hidden;">
        <form method="post" action="server.php" style="border:1px solid #ccc">
                
          
          
          <div class="container">
                  <h1>Sign Up</h1>
                  <p>Please fill in this form to create an account.</p>
                  <hr>
              
                  <label for="email"><b>Email</b></label>
                  <input type="text" placeholder="Enter Email" name="email" value="<?php echo $email;?>" required>
              
                  <label for="password"><b>Password</b></label>
                  <input type="password" placeholder="Enter Password" name="password" value="<?php echo $password;?>" required>
              
  
                
              
                  
              
                  <p>By creating an account you agree to our <a href="#" style="color:dodgerblue">Terms & Privacy</a>.</p>
              
                  <div class="clearfix">
                    <button type="button" class="cancelbtn">Cancel</button>
                    <button type="submit" name="signup" class="signupbtn">Sign Up</button>
                  </div>
                </div>
              </form> 

</div>




 <div>   
  <table id="table" class="table table-dark" style="visibility:visible;">>
    <thead>
      <tr>
        <th scope="col"></th>
        <th scope="col" style = "text-align: center;">a</th>
        <th scope="col" style = "text-align: center;">i</th>
        <th scope="col" style = "text-align: center;">u</th>
        <th scope="col" style = "text-align: center;">e</th>
        <th scope="col" style = "text-align: center;">o</th>
      </tr>
    </thead>
    <tbody>
      <tr>
        <th scope="row"></th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/a.png" alt="Card image cap" value="PLAY"  onclick="playa();" >
          <img class="top" src="japanese/a.gif" >
          <audio id="a" src="japanese/a.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/i.png" alt="Card image cap" value="PLAY"  onclick="playi();" >
          <img class="top" src="japanese/i.gif">
          <audio id="i" src="japanese/i.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/u.png" alt="Card image cap" value="PLAY"  onclick="playu();">
          <img class="top" src="japanese/u.gif">
          <audio id="u" src="japanese/u.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/e.png" alt="Card image cap" value="PLAY"  onclick="playe();">
          <img class="top" src="japanese/e.gif">
          <audio id="e" src="japanese/e.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/o.png" alt="Card image cap" value="PLAY"  onclick="playo();">
          <img class="top" src="japanese/o.gif">
          <audio id="o" src="japanese/o.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">k</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/k-a.png" alt="Card image cap" value="PLAY"  onclick="playka();">
          <img class="top" src="japanese/k-a.gif">
          <audio id="ka" src="japanese/ka.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/k-i.png" alt="Card image cap" value="PLAY"  onclick="playki();">
          <img class="top" src="japanese/k-i.gif">
          <audio id="ki" src="japanese/ki.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/k-u.png" alt="Card image cap" value="PLAY"  onclick="playku();">
          <img class="top" src="japanese/k-u.gif">
          <audio id="ku" src="japanese/ku.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/k-e.png" alt="Card image cap" value="PLAY"  onclick="playke();">
          <img class="top" src="japanese/k-e.gif">
          <audio id="ke" src="japanese/ke.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/k-o.png" alt="Card image cap"  value="PLAY"  onclick="playko();">
          <img class="top" src="japanese/k-o.gif">
          <audio id="o" src="japanese/o.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">s</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/s-a.png" alt="Card image cap" value="PLAY"  onclick="playsa();">
          <img class="top" src="japanese/s-a.gif">
          <audio id="sa" src="japanese/sa.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/s-i.png" alt="Card image cap" value="PLAY"  onclick="playsi();">
          <img class="top" src="japanese/s-i.gif">
          <audio id="si" src="japanese/si.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/s-u.png" alt="Card image cap" value="PLAY"  onclick="playsu();">
          <img class="top" src="japanese/s-u.gif">
          <audio id="su" src="japanese/su.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/s-e.png" alt="Card image cap" value="PLAY"  onclick="playse();">
          <img class="top" src="japanese/s-e.gif">
          <audio id="se" src="japanese/se.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/s-o.png" alt="Card image cap"  value="PLAY"  onclick="playso();">
          <img class="top" src="japanese/s-o.gif">
          <audio id="so" src="japanese/so.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">t</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/t-a.png" alt="Card image cap" value="PLAY"  onclick="playta();">
          <img class="top" src="japanese/t-a.gif">
          <audio id="ta" src="japanese/ta.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/t-i.png" alt="Card image cap" value="PLAY"  onclick="playti();">
          <img class="top" src="japanese/t-i.gif">
          <audio id="ti" src="japanese/ti.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/t-u.png" alt="Card image cap" value="PLAY"  onclick="playtu();">
          <img class="top" src="japanese/t-u.gif">
          <audio id="tu" src="japanese/tu.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/t-e.png" alt="Card image cap" value="PLAY"  onclick="playte();">
          <img class="top" src="japanese/t-e.gif">
          <audio id="te" src="japanese/te.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/t-o.png" alt="Card image cap" value="PLAY"  onclick="playto();">
          <img class="top" src="japanese/t-o.gif">
          <audio id="to" src="japanese/to.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">n</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/n-a.png" alt="Card image cap" value="PLAY"  onclick="playna();">
          <img class="top" src="japanese/n-a.gif">
          <audio id="na" src="japanese/na.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/n-i.png" alt="Card image cap" value="PLAY"  onclick="playni();">
          <img class="top" src="japanese/n-i.gif">
          <audio id="ni" src="japanese/ni.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/n-u.png" alt="Card image cap" value="PLAY"  onclick="playnu();">
          <img class="top" src="japanese/n-u.gif">
          <audio id="nu" src="japanese/nu.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/n-e.png" alt="Card image cap" value="PLAY"  onclick="playne();">
          <img class="top" src="japanese/n-e.gif">
          <audio id="ne" src="japanese/ne.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/n-o.png" alt="Card image cap" value="PLAY"  onclick="playno();">
          <img class="top" src="japanese/n-o.gif">
          <audio id="no" src="japanese/no.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">h</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/h-a.png" alt="Card image cap" value="PLAY"  onclick="playha();">
          <img class="top" src="japanese/h-a.gif">
          <audio id="ha" src="japanese/ha.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/h-i.png" alt="Card image cap" value="PLAY"  onclick="playhi();">
          <img class="top" src="japanese/h-i.gif">
          <audio id="hi" src="japanese/hi.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/h-u.png" alt="Card image cap" value="PLAY"  onclick="playhu();">
          <img class="top" src="japanese/h-u.gif">
          <audio id="hu" src="japanese/hu.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/h-e.png" alt="Card image cap" value="PLAY"  onclick="playhe();">
          <img class="top" src="japanese/h-e.gif">
          <audio id="he" src="japanese/he.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/h-o.png" alt="Card image cap" value="PLAY"  onclick="playho();">
          <img class="top" src="japanese/h-o.gif">
          <audio id="ho" src="japanese/ho.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">m</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/m-a.png" alt="Card image cap" value="PLAY"  onclick="playma();">
          <img class="top" src="japanese/m-a.gif">
          <audio id="ma" src="japanese/ma.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/m-i.png" alt="Card image cap" value="PLAY"  onclick="playmi();">
          <img class="top" src="japanese/m-i.gif">
          <audio id="mi" src="japanese/mi.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/m-u.png" alt="Card image cap" value="PLAY"  onclick="playmu();">
          <img class="top" src="japanese/m-u.gif">
          <audio id="mu" src="japanese/mu.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/m-e.png" alt="Card image cap" value="PLAY"  onclick="playme();">
          <img class="top" src="japanese/m-e.gif">
          <audio id="me" src="japanese/me.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/m-o.png" alt="Card image cap" value="PLAY"  onclick="playmo();">
          <img class="top" src="japanese/m-o.gif">
          <audio id="mo" src="japanese/mo.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">y</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/y-a.png" alt="Card image cap" value="PLAY"  onclick="playya();">
          <img class="top" src="japanese/y-a.gif">
          <audio id="ya" src="japanese/ya.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img src="japanese/empty.png" alt="Card image cap">
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/y-u.png" alt="Card image cap" value="PLAY"  onclick="playyu();">
          <img class="top" src="japanese/y-u.gif">
          <audio id="yu" src="japanese/yu.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img src="japanese/empty.png" alt="Card image cap">
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/y-o.png" alt="Card image cap" value="PLAY"  onclick="playyo();">
          <img class="top" src="japanese/y-o.gif">
          <audio id="yo" src="japanese/yo.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">r</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/r-a.png" alt="Card image cap" value="PLAY"  onclick="playra();">
          <img class="top" src="japanese/r-a.gif">
          <audio id="ra" src="japanese/ra.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/r-i.png" alt="Card image cap" value="PLAY"  onclick="playri();">
          <img class="top" src="japanese/r-i.gif">
          <audio id="ri" src="japanese/ri.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/r-u.png" alt="Card image cap" value="PLAY"  onclick="playru();">
          <img class="top" src="japanese/r-u.gif">
          <audio id="ru" src="japanese/ru.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/r-e.png" alt="Card image cap" value="PLAY"  onclick="playre();">
          <img class="top" src="japanese/r-e.gif">
          <audio id="re" src="japanese/re.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static" src="japanese/r-o.png" alt="Card image cap" value="PLAY"  onclick="playro();">
          <img class="top" src="japanese/r-o.gif">
          <audio id="ro" src="japanese/ro.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">w</th>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/w-a.png" alt="Card image cap" value="PLAY"  onclick="playwa();">
          <img class="top" src="japanese/w-a.gif">
          <audio id="wa" src="japanese/wa.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/w-i.png" alt="Card image cap" value="PLAY"  onclick="playwi();">
          <img class="top" src="japanese/w-i.gif">
          <audio id="wi" src="japanese/wi.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img src="japanese/empty.png" alt="Card image cap">
          <div class="card-body">
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img src="japanese/w-e.png" alt="Card image cap" value="PLAY"  onclick="playwe();">
          <div class="card-body">
              <audio id="we" src="japanese/we.ogg" ></audio>
          </div>
        </div></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/w-o.png" alt="Card image cap" value="PLAY"  onclick="playwo();">
          <img class="top" src="japanese/w-o.gif">
          <audio id="wo" src="japanese/wo.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
      </tr>
      <tr>
        <th scope="row">n</th>
        <td></td>
        <td></td>
        <td><div class="card" style="width: 10rem;">
          <img class="static"src="japanese/n-single.png" alt="Card image cap" value="PLAY"  onclick="playn();">
          <img class="top" src="japanese/n-single.gif">
          <audio id="n" src="japanese/n.ogg" ></audio>
          <div class="card-body">
          </div>
        </div></td>
        <td></td>
        <td></td>
      </tr>
    </tbody>
  </table>
</div>





 




<!-- quiz -->
<div id ="quiz" style="visibility: hidden;">
<table style="width:1000px">
	<tr>
	  <td>
	  	<div>
	  		<p class="question">1. What is the name of this vowel?</p>
         <img src="japanese/a.png">
	    	<ul>
	    	<input class="answer" type="radio" name="q1" value="1">
	        <label id="correctString1">a </label>
	    	<br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>e</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>i</label>
	        <br>
	        <input class="answer" type="radio" name="q1" value="0">
	        <label>o</label>
    		</ul>
	  	</div>
	  </td>
	  <td>
	  	<div>
        <p class="question">2. What is the name of this symbol?</p>
        <img src="japanese/k-a.png">


	    	<ul>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>ko</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="1">
	        <label id="correctString2">ka </label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>ki</label>
	        <br>
	        <input class="answer" type="radio" name="q2" value="0">
	        <label>ke</label>
	    	</ul>
	  	</div>
	  </td>
	</tr>
  
  <tr>
	  <td>
	  	<div>
        <p class="question">3. What is the name of this symbol?</p>
        <img src="japanese/m-i.png">


	    	<ul>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>me</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="1">
	        <label id="correctString3">mi</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>mu</label>
	        <br>
	        <input class="answer" type="radio" name="q3" value="0">
	        <label>mo</label>
	    	</ul>
		</div>
	  </td>
   
    <td>
	  	<div>
        <p class="question">4. What is the name of this symbol?</p>
        <img src="japanese/r-o.png">


	    	<ul>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>ri</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="1">
	        <label id="correctString4">ro</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>ra</label>
	        <br>
	        <input class="answer" type="radio" name="q4" value="0">
	        <label>re</label>
    		</ul>
	  	</div>
    </td>
	</tr>
  
  <tr>
	  <td>
	  	<div>
        <p class="question">5. What is the name of this symbol?</p>
        <img src="japanese/s-a.png">


	    	<ul>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>se</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="1">
	        <label id="correctString5">sa</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>so</label>
	        <br>
	        <input class="answer" type="radio" name="q5" value="0">
	        <label>si</label>
	    	</ul>
		</div>
	  </td>
   
    <td>
	  	<div>
        <p class="question">6. What is the name of this symbol?</p>
        <img src="japanese/r-a.png">


	    	<ul>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>ri</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="1">
	        <label id="correctString6">ra</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>ro</label>
	        <br>
	        <input class="answer" type="radio" name="q6" value="0">
	        <label>re</label>
    		</ul>
	  	</div>
    </td>
	</tr>
  
  <tr>
	  <td>
	  	<div>
        <p class="question">7. What is the name of this symbol?</p>
        <img src="japanese/n-a.png">


	    	<ul>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>ne</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="1">
	        <label id="correctString7">na</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>nu</label>
	        <br>
	        <input class="answer" type="radio" name="q7" value="0">
	        <label>no</label>
	    	</ul>
		</div>
	  </td>
   
    <td>
	  	<div>
        <p class="question">8. What is the name of this symbol?</p>
        <img src="japanese/t-o.png">


	    	<ul>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label>ti</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="1">
	        <label id="correctString8">to</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label>ta</label>
	        <br>
	        <input class="answer" type="radio" name="q8" value="0">
	        <label>te</label>
    		</ul>
	  	</div>
    </td>
	</tr>
  <tr>
	  <td>
	  	<div>
        <p class="question">9. What is the name of this symbol?</p>
        <img src="japanese/m-o.png">


	    	<ul>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>me</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="1">
	        <label id="correctString9">mo</label>
	        <br>
	        <input class="answer" type="radio" name="q9" value="0">
	        <label>mu</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>mi</label>
	    	</ul>
		</div>
	  </td>
   
    <td>
	  	<div>
        <p class="question">10. What is the name of this symbol?</p>
        <img src="japanese/m-u.png">


	    	<ul>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>mi</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="1">
	        <label id="correctString10">mu</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>ma</label>
	        <br>
	        <input class="answer" type="radio" name="q10" value="0">
	        <label>me</label>
    		</ul>
	  	</div>
    </td>
	</tr>
  
  
  </table>
<br/>
  <div class="submitter">
          <input class="quizSubmit" id="submitButton" onClick="submitQuiz()"
          type="submit" value="Submit" />
    </div>
 
 
    <div> 
<!--show only wrong answers on submit-->
    <div class="quizAnswers" id="correctAnswer1"></div>
	  <div class="quizAnswers" id="correctAnswer2"></div>
    <div class="quizAnswers" id="correctAnswer3"></div>
    <div class="quizAnswers" id="correctAnswer4"></div>
    <div class="quizAnswers" id="correctAnswer5"></div>
	  <div class="quizAnswers" id="correctAnswer6"></div>
    <div class="quizAnswers" id="correctAnswer7"></div>
    <div class="quizAnswers" id="correctAnswer8"></div>
    <div class="quizAnswers" id="correctAnswer9"></div>
	  <div class="quizAnswers" id="correctAnswer10"></div>

<!--show score upon submit-->
    <div>
      
    <h2 class="quizScore" id="userScore"></h2>
      
    </div>
  
  
  </div>
</div>

<div id="container">

  Original gifs and images found here <a href="https://commons.wikimedia.org/wiki/Category:Hiragana_stroke_order_(animated_image_set)">LINK</a>

  <br>Original sound files can be found here <a href="http://www.guidetojapanese.org/learn/complete/hiragana">LINK</a>
	    

	</div>


</body>
</div>


</html>
