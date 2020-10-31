<?php
require_once "v_s.php";
?>
<!DOCTYPE html>
<html>
<head>
</head>
<link rel="stylesheet" type="text/css" href="../css/webterminal.css" />
   <body > 

   <div id="heading">
      <h1 style="text-align:center; color:white">Assignment 5</h1>
    </div>
    <li> Describe permission mechanism on unix files and Folders
     
     <li>What is umask 
      
     <li>What is chmod
     <li> What will be permission on a file if  you set it to  555 . 
      
     <li>Can a folder exit witout executable permission? explain.
      
     <li>Locate the file with error_log
      
     <li>Create 4 empty files with  date and time stamp as prefix.
      
     <li>
         Create a folder sed and create a file sedtest.txt file with below content
               
         <pre>
               We are learnin Unix today. Unix is a great operating system 
               Unix has high security.
               Virus effects are almost 0 in unix as unix does not understand exe format
               Unix is more used for  Server related activities 
               Unix can also  be used for  Desktop  but compared to  windows its not that userfriendly
               Unix is enriched with lot of languages which are free and scalabe
               </pre>
 
     <li>Do dry run of sed  and replace Unix word in  the file  with linux
       
     <li> Using dry run of sed  replace  Unix  word in  the file  with linux  in 4th line
       
     <li> Using dry run of sed  replace  Unix  word in  the file  with linux  in 1,3 lines
       
     <li> Using dry run of sed  replace  Unix  word in  the file  with linux  in all occurences
      
     <li>  Repeat the above exercise with Actual changes. 
       
     <li>
         Americaniche academy  is trying to  trace the access of americaniche  accesss.  it wants to  track occurenence ipaddress,timstamp from below log . Also wants to  check how many times did a ipaddress   apreared in the log. Please provide solution.
                  
         <pre> 
         49.37.15.57 - - [27/Jul/2020:18:20:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:20:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:21:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:21:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:22:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:22:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:23:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:23:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:24:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:24:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:25:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:25:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:26:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:26:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:27:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:27:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         49.37.15.57 - - [27/Jul/2020:18:28:31 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 176 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/83.0.4103.116 Safari/537.36 OPR/69.0.3686.77"
         73.73.126.209 - - [27/Jul/2020:18:28:36 -0400] "POST /?_task=mail&_action=refresh HTTP/1.1" 200 1012 "http://email.americaniche.com/?_task=mail&_mbox=INBOX" "Mozilla/5.0 (Windows NT 10.0; Win64; x64) AppleWebKit/537.36 (KHTML, like Gecko) Chrome/84.0.4147.89 Safari/537.36"
         </pre>
     <li>  change email.americaniche.com to mail.americaniche.com in  output above
     <li>   using awk show line 3 to  line 6 in above output
     <li>  using awk show the count of above output 
     <li>   usinf awk show only first and last field of above output
     <li>   How to make run a shell script in  non-self and self executable mode and also in debug mode( debug mode is needed to run  to check wich line shell script is  failing)
     <li>   mention the  clear steps on how to make tursted relationship using client  identifiction certificate combination .
     <li>   mention the  clear steps on how to make tursted relationship using server  identification  certificate combination .</li>
<?php
include "switch.php";
?>
<br><br><br><br><br><br>
<?php
include "webterminal.php";
?>
<script src="../script/webterminal.js"></script>
</body>
</html>