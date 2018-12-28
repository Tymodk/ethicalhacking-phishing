# Ethical Hacking - Phishing
Here is where I'll track my progress in my attempts to phish my school's students. <br>
Step 1 - Get mailing list (Social Engineering) <br>
Step 2 - Learn to e-mail spoof (Hack?) <br>
Step 3 - Make phishing website that looks like organizational login <br>
Step 4 - Mail everyone and get results <br>
 
# Social Engineering - Mailing list gathering
<a href="https://tools.kali.org/information-gathering/theharvester">Kali tool - harvesting</a>
<a href="https://www.dionach.com/blog/social-engineering-and-phishing-email-attacks">Social engineering and phishing!</a>
# Fake EMAIL
<a href="https://dylan.tweney.com/2017/10/25/how-to-fake-an-email-from-almost-anyone-in-under-5-minutes/">Blogpost about spoofing</a>




# Steps undertaken
Send a mail to the info section of my campus, asking them for a mailing list to use for an inquiry!
Got a response, they can't send me the e-mails due to GDPR, damn!
Created a near carbon copy of the desktop version of the login page, need to think about mobile version later down the line. 

I've managed to succesfully spoof an e-mail! I can now send e-mails from 'Notifications@instructure.com'. Which is my school's notification service.
I simply utilized Kali Linux, installed the SendEmail package and used the following string as the command.
<pre>sendemail -f notifications@instructure.com -t tymo.dekock@student.kdg.be -m "Hello world" -s uit.telenet.be -u "Canvas notification"</pre>
Send a mail to two of my teachers, one of them seems to be on vacation until the 7th, maybe I'll get a response of him after. Within these mails is a request for them to share a link to my malicious website to their student, disguised as a login to the school network. If they type in their e-mails they will be redirected to a form so they should think it's legit. 
Made the website mobile friendly too.
Proceeding to learn how to make a email template for sendemail protocol in kali linux.

