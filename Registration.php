<html>

<head>
    <title>Individual Delegate Registration</title>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="icon.ico" />
	<script src="https://code.jquery.com/jquery-1.10.2.js"></script>
    <link href="style.css" type="text/css" rel="stylesheet">

<script>
 function getCheckedRadio(radioGroup)
 {
     var checkedRadio = document.getElementsByName(radioGroup);
     var len=checkedRadio.length;
     for(var i=0;i<len;i++)
     {
         if(checkedRadio[i].checked)
         return checkedRadio[i].value;
     }
 }
    function chk()
{
	var name=document.getElementById('name').value;
    var cls=document.getElementById('class').value;
    var institution=document.getElementById('institution').value;
    var email=document.getElementById('email').value;
    var phone=document.getElementById('phone').value;
    var accommodation=getCheckedRadio('accommodation');
    var payment=getCheckedRadio('payment');

    var pref1=getCheckedRadio('pref1');
    var p1d2=document.getElementById('p1d2').value;
    var p1i2=document.getElementById('p1i2').value;
    var p1q1=document.getElementById('p1q1').value;
    var p1q2=document.getElementById('p1q2').value;
    var p1q3=document.getElementById('p1q3').value;

    var pref2=getCheckedRadio('pref2');
    var p2d2=document.getElementById('p2d2').value;
    var p2i2=document.getElementById('p2i2').value;
    var p2q1=document.getElementById('p2q1').value;
    var p2q2=document.getElementById('p2q2').value;
    var p2q3=document.getElementById('p2q3').value;

    var experience=document.getElementById('experience').value;

	var dataString='name='+name+'&class='+cls+'&institution='+institution+'&email='+email+'&phone='+phone+'&pref1='+pref1+'&pref2='+pref2+'&p1i2='+p1i2+'&p1d2='+p1d2+'&p2d2='+p2d2+'&p2i2='+p2i2+'&accommodation='+accommodation+'&payment='+payment+'&p1q1='+p1q1+'&p1q2='+p1q2+'&p1q3='+p1q3+'&p2q1='+p2q1+'&p2q2='+p2q2+'&p2q3='+p2q3+'&experience='+experience;
	$.ajax({
	type:"post",
	url:"backend.php",
	data:dataString,
	cache:false,
	success: function(html) {
		$('.msg').html(html);
	}
	});
	return false;
}
 </script>

</head>

<body>
   <div class="message">
       <div class="msg">Processing your request. Please wait... </div>
       <div class="closeBtn"><div class="closeBtnTxt">CLOSE</div></div>
   </div>
    <div class="header">
        <img class="logo" src="bkg1.png"/>
    </div>

     <div class="questions">
        <div class="heading">
             Individual Delegate Registration Form
             <hr>
         </div>
		<form  method="POST">
       <div class="questionsWrap">
           <div>
          NOTE: <ul><li>Historic Security Council is a double delegation.</li>
                    <li>United States National Security Council is an application based committee.</li></ul></div>
          <p>
			 Name <br><br><input type="text" id="name" name="name" value="<?php echo $name; ?>"><br><br></p>
        <p>  Class<br><br><input type="text" id="class" name="class" value="<?php echo $class; ?>"><br><br></p>
	    <p>  Institution<br><br> <input type="text" id="institution" name="institution" value="<?php echo $institution; ?>"><br><br></p>
        <p>  E-mail<br><br> <input type="text" id="email" name="email" value="<?php echo $email; ?>"><br><br></p>
        <p>  Phone<br><br> <input type="text" id="phone" name="phone" value="<?php echo $phone; ?>"><br><br></p>

        <p> Will you be requiring accommodation in the city? </p>
        <div id="set"><input type="radio" name="accommodation" value="Yes">Yes</div>
        <div id="set"><input type="radio" name="accommodation" value="No">No</div>

        <p> Please identify your preferred payment option: </p>
        <div id="set"><input type="radio" name="payment" value="Wire transfer">Wire transfer</div>
        <div id="set"><input type="radio" name="payment" value="Draft payment">Draft payment</div>
        <div id="set"><input type="radio" name="payment" value="Cash Deposit">Cash Deposit</div>


        <p> Committee Preference 1

        <div id="set"><span class="pref1"><input type="radio" name="pref1" value="Special Political and Decolonization Committee"></span>Special Political and Decolonization Committee<br></div>
        <div id="set"><span class="pref1"><input type="radio" name="pref1" value="United Nations Human Rights Council 2016"></span>United Nations Human Rights Council 2016<br></div>
        <div id="set"><span class="HSC1"><input type="radio" name="pref1" value="Historic Security Council"></span>Historic Security Council<br></div>
                        <div class="pref1com3">
                            <p>  Name of Second Delegate<br><br> <input type="text" id="p1d2" name="p1d2" value="<?php echo $p1d2; ?>"><br><br></p>
                            <p>  Institution of Second Delegate<br><br> <input type="text" id="p1i2" name="p1i2" value="<?php echo $p1i2; ?>"><br><br></p>
                         </div>
        <div id="set"><span class="pref1"><input type="radio" name="pref1" value="Indian Parliament"></span>Indian Parliament<br></div>
        <div id="set"><span class="pref1"><input type="radio" name="pref1" value="S.H.I.E.L.D."></span><span style="letter-spacing: 1px"> S.H.I.E.L.D.</span><br></div>
        <div id="set"><span class="UNSC1"><input type="radio" name="pref1" value="United States National Security Council">United States National Security Council<br></div>

                <div class="pref1com6">
                    <div id="set"><p>1. In your opinion, what are some of the most central and pertinent issues relating to US National Security at the moment? (300 words)</div>
                    <textarea rows="15" cols="100" id="p1q1" name="p1q1" value="<?php echo $p1q1; ?>"></textarea> </p>
                     <div id="set"><p>2. An unidentified Piper Seneca V aircraft is in the air over Nashville, Tennessee. It is not responding to radio communications from Air Traffic Control. It is 110 miles from the Browns Ferry Nuclear Reactor. As the National Security Advisor, you have been called to the White House Situation Room. What would be your response to this crisis and how would you justify it? (200 words)  </div>
                    <textarea rows="15" cols="100" id="p1q2" name="p1q2" value="<?php echo $p1q2; ?>"></textarea></p>
                    <div id="set"><p> 3. List your five favourite things about the possibility of Donald J. Trump becoming the next US President. (150 words) </div>
                    <textarea rows="15" cols="100" id="p1q3" name="p1q3" value="<?php echo $p1q3; ?>"></textarea></p>
              </div>


       <p> Committee Preference 2</p>

        <div id="set"><span class="pref2"><input type="radio" name="pref2" value="Special Political and Decolonization Committee"></span>Special Political and Decolonization Committee<br></div>
        <div id="set"><span class="pref2"><input type="radio" name="pref2" value="United Nations Human Rights Council 2016"></span>United Nations and Human Rights Council 2016<br></div>
        <div id="set"><span class="HSC2"><input type="radio" name="pref2" value="Historic Security Council"></span>Historic Security Council<br></div>

                         <div class="pref2com3">
                            <p>  Name of Second Delegate<br><br> <input type="text" id="p2d2" name="p2d2" value="<?php echo $p2d2; ?>"><br><br></p>
                            <p>  Institution of Second Delegate<br><br> <input type="text" id="p2i2" name="p2i2" value="<?php echo $p2i2; ?>"><br><br></p>
                         </div>

        <div id="set"><span class="pref2"><input type="radio" name="pref2" value="Indian Parliament"></span>Indian Parliament<br></div>
        <div id="set"><span class="pref2"><input type="radio" name="pref2" value="S.H.I.E.L.D."></span><span style="letter-spacing: 1px"> S.H.I.E.L.D.</span><br></div>
        <div id="set"><span class="UNSC2"><input type="radio" name="pref2" value="United States National Security Council"></span>United States National Security Council<br></div>

                <div class="pref2com6">
                    <div id="set"><p>1. In your opinion, what are some of the most central and pertinent issues relating to US National Security at the moment? (300 words)</div>
                    <textarea rows="15" cols="100" id="p2q1" name="p2q1" value="<?php echo $p2q1; ?>"></textarea> </p>
                     <div id="set"><p>2. An unidentified Piper Seneca V aircraft is in the air over Nashville, Tennessee. It is not responding to radio communications from Air Traffic Control. It is 110 miles from the Browns Ferry Nuclear Reactor. As the National Security Advisor, you have been called to the White House Situation Room. What would be your response to this crisis and how would you justify it? (200 words)  </div>
                    <textarea rows="15" cols="100" id="p2q2" name="p2q2" value="<?php echo $p2q2; ?>"></textarea></p>
                    <div id="set"><p> 3. List your five favourite things about the possibility of Donald J. Trump becoming the next US President. (150 words) </div>
                    <textarea rows="15" cols="100" id="p2q3" name="p2q3" value="<?php echo $p2q3; ?>"></textarea></p>
              </div>
          <p> Model UN experience </p>
          <div>Format: Name of MUN, Year of Participation, Council/Committee, Country/Portfolio, Awards Won. Please write N/A if you have no prior MUN experience.</div><br>
          <textarea rows="15"  id="experience" name="experience"></textarea>


        </div>
            <input class="submitBtn" type="submit" value="SUBMIT" style="padding: 10px; border-radius: 5px" onclick="return chk()">

		</form>
     </div>

     <div class="footer">

     </div>



</body>
 <script>
        $(".pref1com6").hide();
        $(".pref1com3").hide();

       $(".message").hide();

        $(".submitBtn").on("mouseup",function()
        {
           $(".message").fadeIn("slow");
        });
        $(".closeBtn").on("mouseup", function()
        {
           $(".message").fadeOut("slow");
            $(".msg").html("Processing your request. Please wait...");
        });
           $(".pref1").on("click", function()
           {
               $(".pref1com6").slideUp("slow");
               $(".pref1com3").slideUp("slow");
           });
           $(".UNSC1").on("click", function()
           {
               $(".pref1com6").slideDown("slow");
               $(".pref1com3").slideUp("slow");
           });
           $(".HSC1").on("click", function()
           {
               $(".pref1com3").slideDown("slow");
               $(".pref1com6").slideUp("slow");
           });

        $(".pref2com6").hide();
        $(".pref2com3").hide();
           $(".pref2").on("click", function()
           {
               $(".pref2com6").slideUp("slow");
               $(".pref2com3").slideUp("slow");
           });
           $(".UNSC2").on("click", function()
           {
               $(".pref2com6").slideDown("slow");
               $(".pref2com3").slideUp("slow");
           });
            $(".HSC2").on("click", function()
           {
               $(".pref2com3").slideDown("slow");
               $(".pref2com6").slideUp("slow");
           });

    </script>
</html>