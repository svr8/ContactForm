<?php
  
	$name="";
    $class="";
	$institution="";
    $email="";
    $phone="";
    $accommodation="";
    $payment="";
    $experience="";
    
    $q1="";
    $q2="";
    $q3="";
    
    $p1d2="";
    $p1i2="";
    $p2d2="";
    $p2i2="";
    
    $pref1="";    
    $p1q1="";
    $p1q2="";
    $p1q3="";
    
    $pref2="";
    $p2q1="";
    $p2q2="";
    $p2q3="";
    
    $error = " ";
	
		$name = $_POST['name'];
		$class = $_POST['class'];
        $institution = $_POST['institution'];
        $email = $_POST['email'];
        $phone = $_POST['phone'];
        $accommodation = $_POST['accommodation'];
        $payment = $_POST['payment'];
        $experience = $_POST['experience'];
      
        $pref1 = $_POST['pref1'];
        $p1i2 = $_POST['p1i2'];
        $p1d2 = $_POST['p1d2'];
        $p1q1=$_POST['p1q1'];
        $p1q2=$_POST['p1q2'];
        $p1q3=$_POST['p1q3'];
        
        $pref2 = $_POST['pref2'];
        $p2d2 = $_POST['p2d2'];
        $p2i2 = $_POST['p2i2'];
	    $p2q1=$_POST['p2q1'];
        $p2q2=$_POST['p2q2'];
        $p2q3=$_POST['p2q3'];        
	    
        if($pref1==$pref2)
        {
            $pref1=$pref2=NULL;
        }
        
        if($name=='undefined') { $name=NULL; }
        if($class=='undefined') { $class=NULL; }
        if($institution=='undefined') { $institution=NULL; }
        if($email=='undefined') { $email=NULL; }
        if($phone=='undefined') { $phone=NULL; }
        if($accommodation=='undefined') { $accommodation=NULL; }
        if($payment=='undefined') { $payment=NULL; }
        if($experience=='undefined') { $experience=NULL; }
        
        if($pref1=='undefined') { $pref1=NULL; }
        if($pref2=='undefined') { $pref2=NULL; }
        
        if($pref1=="Historic Security Council")
        {
            if($p1d2=="") $pref1=NULL;
            if($p1i2=="") $pref1=NULL;
        }
        else if($pref1=="United States National Security Council")
        {
            if($p1q1=="") $pref1=NULL;
            if($p1q2=="") $pref1=NULL;
            if($p1q3=="") $pref1=NULL;
        }
        if($pref2=="Historic Security Council")
        {
            if($p2d2=="") $pref2=NULL;
            if($p2i2=="") $pref2=NULL;
        }
        else if($pref2=="United States National Security Council")
        {
            if($p2q1=="") $pref2=NULL;
            if($p2q2=="") $pref2=NULL;
            if($p2q3=="") $pref2=NULL;
        }
        
	if($name!=NULL && $institution!=NULL && $email!=NULL && $phone!=NULL && $pref1!=NULL && $pref2!=NULL && $payment!=NULL && $accommodation!=NULL && $experience!=NULL)
	{				
		$to = 'register@thejmun.org';
        $subject = 'Delegate Application';
        $body = "Name of delegate: ".$name."\nClass: ".$class."\nSchool/Institution: ".$institution."\nE-mail: ".$email."\nContact no.: ".$phone."\n\n\nPayment Method: ".$payment."\nMode of Accommodation: ".$accommodation."\n\nCommittee Preference 1: ".$pref1;
        
        if($pref1=="Historic Security Council")
        $body .="\n\nName of Second Delegate: ".$p1d2."\nSchool/Institution of Second Delegate: \n".$p1i2."\n";
        else if($pref1=="United States National Security Council")
        $body .="\n\n\n===========\nQuestion 1:\n===========  \n".$p1q1."\n\n\n===========\nQuestion 2:\n=========== \n".$p1q2."\n\n\n===========\nQuestion 3:\n=========== \n".$p1q3;
       
        $body .="\n\n=======================\nCommittee Preference 2: ".$pref2;
   
        if($pref2=="Historic Security Council")
        $body .="\n\nName of Second Delegate: ".$p2d2."\nSchool/Institution of Second Delegate: ".$p2i2."\n";
        else if($pref2=="United States National Security Council")
        $body .="\n\n\n===========\nQuestion 1\n===========:\n".$p2q1."\n\n\n===========\nQuestion 2:\n===========\n".$p2q2."\n\n\n===========\nQuestion 3:\n=========== \n".$p2q3."\n";
        
        $body.="\n\n===========\nEXPERIENCE:\n=========== \n\n".$experience;
    
        $headers = 'FROM: '.$email;
        
        if(mail($to, $subject, $body, $headers)) { $error="Form was submitted successfully.";}
        else $error="Form could not be submitted. Please try again."; 
       
        if($pref1=='United States National Security Council')
        {
            $q1 = $p1q1;
            $q2 = $p1q2;
            $q3 = $p1q3;
        }
        else if($pref2=='United States National Security Council')
        {
            $q1 = $p2q1;
            $q2 = $p2q2;
            $q3 = $p2q3;
        }
        if($pref2=='United States National Security Council' || $pref1=='United States National Security Council')
        { 
            $to='usnsc@thejmun.org';
            $subject = 'USNSC Application';
            $body = "Name of delegate: ".$name."\nClass: ".$class."\nSchool/Institution: ".$institution."\n\n\n===========\nQuestion 1:\n=========== \n\n".$q1."\n\n\n===========\nQuestion 2:\n===========\n\n".$q2."\n\n\n===========\nQuestion 3:\n===========\n\n".$q3;
            if(mail($to, $subject, $body, $headers)) { }
            else $error="Form could not be submitted. Please try again.";
            
        }
        //AUTO REPLY:
        $to=$email;
        $subject="JMUN'16 Delegate Application";
        $headers="FROM: register@thejmun.org";
        $body="Dear Sir/Madam, \nWe are delighted to inform you that your delegate application has been accepted by the JMUN Secretariat. \nYou have been registered as the part of the conference, to be held from  26th- 28th May. We eagerly await your presence on these three days of intense debating diplomacy and munning prowess.\n\nTo complete your registration process, you are required to make the payment of 1700/- INR. Details of the transaction are as follows:\n\n
1. Wire Transfer (Preferable)\n\nSavings Bank Account: State Bank of India \nName of the Account: Seth M.R. Jaipuria School\nAccount Number: 10070331887 \nIFSC Code: SBIN0009916\n\nAddress:\nState Bank of India,\nVijay Khand,\nGomti Nagar,\nLucknow-226010.\n\n\n 2. Draft Payment \n\nThe draft should be drawn in favour of Seth M.R. Jaipuria School Lucknow\n\nKindly address the envelope containing the draft to:\n\nSeth M.R. Jaipuria School,\nVineet Khand,\nGomti Nagar,\nLucknow-226010\n\n\n3. Cash Deposit \n\nPayments in cash should be submitted to our Model UN coordinator, Dr. Preeti Singh. \n\nNote: The registration process will be completed only on emailing us your bank confirmation receipt (for wire transfer) or draft payment receipt. Please email us at payment@thejmun.org when you make the wire transfer.\n\nFor any details please do not hesitate to contact us at contact@thejmun.org \nOr\nAnushka Ganguli (Undersecretary General for  Delegate affairs)\nPhone Number: 8795986378\nEmail Address: anushkaganguli29@gmail.com\n";
if(mail($to, $subject, $body, $headers)) {  }
else $error="Form could not be submitted. Please try again";

        
	}
	else 
    {
        $error="Please fill in the following: \n";
        if($name=="") $error=$error."Name \n";
        if($class=="") $error=$error."Class \n";
        if($institution=="") $error=$error."Institution \n";
        if($email=="") $error=$error."Email \n";
        if($phone=="") $error=$error."Phone \n";
        if($payment=="") $error=$error."Payment \n";
        if($accommodation=="") $error=$error."Accommodation \n";
        if($pref1=="") $error=$error."Committee Preference 1 \n";
        if($pref2=="") $error=$error."Committee Preference 2 \n";
        if($experience=="") $error=$error."Your prior experience \n";
        
        if($pref1=="Historic Security Council")
        {
            if($p1d2=="") $error=$error."Name of Second Delegate";
            if($p1i2=="") $error=$error."Institution of Second Delegate";
        }
        else if($pref1=="United States National Security Council")
        {
            if($p1q1=="") $error=$error."Question 1 under United States National Security Council";
            if($p1q2=="") $error=$error."Question 2 under United States National Security Council";
            if($p1q3=="") $error=$error."Question 3 under United States National Security Council";
        }
        if($pref2=="Historic Security Council")
        {
            if($p2d2=="") $error=$error."Name of Second Delegate";
            if($p2i2=="") $error=$error."Institution of Second Delegate";
        }
        else if($pref2=="United States National Security Council")
        {
            if($p2q1=="") $error=$error."Question 1 under United States National Security Council";
            if($p2q2=="") $error=$error."Question 2 under United States National Security Council";
            if($p2q3=="") $error=$error."Question 3 under United States National Security Council";
        }
        if($pref1==$pref2)
        {
            $error=$error."You must choose two different committees.";
        }
        
        $error=nl2br($error);
    }
   

	echo $error;
?>