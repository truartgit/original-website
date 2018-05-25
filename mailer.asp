<%'=================================================================================================
' Axsen Form Mailer
' Version 5.0
' Last Updated: 8-24-2007
'===================================================================================================
' NOTE: to use this file for mailing, use the following code in your web form
'
' <form method=post action=mailer.asp>
'   <input type=hidden name=mailer_subject value="subject - with at least one space">
'   <input type=hidden name=mailer_recip_name value="John Doe">
'   <input type=hidden name=mailer_recip_address value="john@doe.com">
'   <input type=hidden name=mailer_redirect value="thankyou.htm">
'   <textarea id="SpamTrap" name="SpamTrap" rows="3" cols="4" style="display:none;"></textarea>
'
' ... Rest of Form goes here
'
'-------------------------- DO NOT EDIT BELOW THIS LINE --------------------------------------------
'===================================================================================================
	OPTION EXPLICIT												' for variable declarations
	DIM FromName, FromAddress									' for the sender's info
	DIM RecipName, RecipAddress									' for the receiver's info
	DIM Subject, Redirect										' for the subject and redirect URL
	DIM item, intloop, str, Mailer, CRLF						' for misc information
	DIM GetServerName, SpamBotMsg								' for misc information
	CRLF = CHR(13) & CHR(10)									' set the line breaks
'===================================================================================================
	SpamBotMsg   = "Form Error. Incorrect use detected.<br />If you feel this message is in error, please contact the website owner.<br />"
	FromName     = "Website Form"								' set default from name             
	FromAddress  = "server@axsen.com"							' set default from address          
	RecipName    = "axsen.com"									' set default recipient name        
	RecipAddress = "webmaster@axsen.com"						' set default recipient address     
	GetServerName = Request.ServerVariables("SERVER_NAME")
	Subject      = "Phish Attempt - " & GetServerName			' set default subject               
'===================================================================================================

	IF Request("mailer_fromname") <> "" THEN					' override default from name        
		FromName = request("mailer_fromname")	                ' with value from form              
	END IF                                                                                          
	IF Request("mailer_fromaddress") <> "" THEN                 ' override default from address     
		FromAddress = request("mailer_fromaddress")	            ' with value from form              
	END IF                                                                                          
	IF Request("mailer_recip_name") <> "" THEN                  ' override default recipient name   
		RecipName = Request("mailer_recip_name")                ' with value from form              
	END IF                                                                                          
	IF Request("mailer_recip_address") <> "" THEN               ' override default recipient address
		RecipAddress = Request("mailer_recip_address")			' with value from form              
	END IF																							
	IF Request("mailer_subject") <> "" THEN                     ' override default subject          
		Subject = Request("mailer_subject")                     ' with value from form              
	END IF                              															
	IF Request("mailer_redirect") <> "" THEN					' override default redirect			
		Redirect = Request("mailer_redirect")					' with value from form              
	END IF																							
'===================================================================================================

If Request("mailer_redirect") = "" then
	response.write "Error: Please call this script from a Form, rather than directly."
	response.End
End if

' ... Check if SpamTrap field (which should be empty) has any content - if it does, abort script
If Request("SpamTrap") <> "" then
	response.write "Error 1: " & (SpamBotMsg)
	response.End
End if

' ... Check that the Subject Field has a space - if is does not, abort script
if instr((Subject),chr(32)) =0 then
	response.write "Error 2: " & (SpamBotMsg)
    response.End
End if

' ... Check if any of the header fields have CRLF or BCC - if they do, abort script
if instr((FromName),chr(13)) >=1 or instr((FromName),chr(10)) >=1 or instr(1,(FromName),"bcc",1) >= 1 then
	response.write "Error 3: " & (SpamBotMsg)
     response.End
End if

if instr((FromAddress),chr(13)) >=1 or instr((FromAddress),chr(10)) >=1 or instr(1,(FromAddress),"bcc",1) >= 1 then
	response.write "Error 4: " & (SpamBotMsg)
     response.End
End if

if instr((RecipName),chr(13)) >=1 or instr((RecipName),chr(10)) >=1 or instr(1,(RecipName),"bcc",1) >= 1 then
	response.write "Error 5: " & (SpamBotMsg)
     response.End
End if

if instr((RecipAddress),chr(13)) >=1 or instr((RecipAddress),chr(10)) >=1 or instr(1,(RecipAddress),"bcc",1) >= 1 then
	response.write "Error 6: " & (SpamBotMsg)
     response.End
End if

if instr((Subject),chr(13)) >=1 or instr((Subject),chr(10)) >=1 or instr(1,(Subject),"bcc",1) >= 1 then
	response.write "Error 7: " & (SpamBotMsg)
     response.End
End if

'===================================================================================================
	str = str & "Form Submitted " & NOW & " (EST)" & CRLF					' add first line of string body		
	str = str & "========================================" & CRLF & CRLF									
	   For Each item In Request.Form
		   Select Case item
			 Case "mailer_recip_name"
			 Case "mailer_recip_address"
			 Case "mailer_subject"
			 Case "mailer_redirect"
			 Case "Submit"
			 Case "SpamTrap"
		   Case Else
				FOR intloop = 1 TO Request.Form(item).Count	
					str = str & Item & " = " & Request.Form(Item)(intloop) & CRLF & CRLF							
				NEXT																						
		   End Select  
	   Next
'===================================================================================================

' ... Check for and remove BCC in all fields

DIM RegularExpressionObject									' for removing potential spoofers    

Set RegularExpressionObject = New RegExp 
	With RegularExpressionObject 
		.Pattern = "bcc" 
		.IgnoreCase = True 
		.Global = True 
	End With 

FromName=RegularExpressionObject.Replace(FromName, " ")
FromAddress=RegularExpressionObject.Replace(FromAddress, " ")
RecipName=RegularExpressionObject.Replace(RecipName, " ")
RecipAddress=RegularExpressionObject.Replace(RecipAddress, " ")
Subject=RegularExpressionObject.Replace(Subject, " ")
str=RegularExpressionObject.Replace(str, " ")

Set RegularExpressionObject = nothing

'===================================================================================================
	SET Mailer = CreateObject("CDO.Message")			' set object type					
		Mailer.From = FromAddress							' set email from address			
		Mailer.To = RecipAddress					' set recipient information			
		Mailer.Subject = Subject									' set subject						
		Mailer.TextBody = str								     	' set body text						
		Mailer.Send												' send email						
	SET Mailer = nothing										' set objects to null				
	IF redirect <> "" THEN										' if a redirect value exists		
		Response.Redirect Redirect								' redirect to new page				
	END IF
'=================================================================================================%>