# Ethical Hacking - Phishing
Here is where I'll track my progress in my attempts to phish my school's students. <br>
Step 1 - Get mailing list (Social Engineering) <br>
Step 2 - Learn to e-mail spoof (Hack?) <br>
Step 3 - Make phishing website that looks like organizational login <br>
Step 4 - Mail everyone and get results <br>
 
# Social Engineering - Mailing list gathering
<a href="https://tools.kali.org/information-gathering/theharvester">Kali tool - harvesting</a><br>
<a href="https://www.dionach.com/blog/social-engineering-and-phishing-email-attacks">Social engineering and phishing!</a><br>
<a href="https://github.com/mogaal/sendemail">Email sending tool for linux</a><br>
<a href="https://github.com/laramies/theHarvester">The Harvester tool for Kali</a><br>
<a href="https://null-byte.wonderhowto.com/how-to/scrape-target-email-addresses-with-theharvester-0176307/">Blogpost about The Harvester</a>
# Fake EMAIL
<a href="https://dylan.tweney.com/2017/10/25/how-to-fake-an-email-from-almost-anyone-in-under-5-minutes/">Blogpost about spoofing</a>




# Steps undertaken
<p>Send a mail to the info section of my campus, asking them for a mailing list to use for an inquiry!</p>
<p>Got a response, they can't send me the e-mails due to GDPR, damn!</p>
<p>Created a near carbon copy of the desktop version of the login page, need to think about mobile version later down the line. </p>

<p>I've managed to succesfully spoof an e-mail! I can now send e-mails from 'Notifications@instructure.com'. Which is my school's notification service.</p>
<p>I simply utilized Kali Linux, installed the SendEmail package and used the following string as the command.</p>
<pre>sendemail -f notifications@instructure.com -t tymo.dekock@student.kdg.be -m "Hello world" -s uit.telenet.be -u "Canvas notification"</pre>
<p>Send a mail to two of my teachers, one of them seems to be on vacation until the 7th, maybe I'll get a response of him after. Within these mails is a request for them to share a link to my malicious website to their student, disguised as a login to the school network. If they type in their e-mails they will be redirected to a form so they should think it's legit. </p>
<p>Made the website mobile friendly too.</p>
<p>Proceeding to learn how to make a email template for sendemail protocol in kali linux.</p>

<p>Made a pretty convincing template in html. Time to start sending!</p>
<p>Sending the spoofed e-mail to e-mail adresses I know, lets hope this works!</p>
