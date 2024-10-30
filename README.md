<div align="center">
  <h1>Bromine</h1>
</div>
<link rel = "stylesheet" href="styles.css">
<p align="center">
<img src="favicon.ico" style="width:100px;">
</p>
<p>Bromine is a lightweight and customisable file sharing service that does not claim to be anonymous but claims to be decently secure compared to competitors which require the use of user accounts where as by default Bromine instances do not require user accounts thus making it significantly harder for prying eyes to request subpeonas although it may still be possible to recover IP or session ID which could be used be an attacker to learn more about you and whom you are and if anonymity is your top priority then you should probably use encrypted files and use tor on a Bromine instance you trust!</p>
<br></br>
<br></br>

<h1>Installing Bromine on a server</h1>
<p>Firstly ensure you have git installed and run the command below</p>
<code>git clone https://github.com/nmUnderscore9/bromine.git</code>
<p>If you don't then you are likely using either Windows 10 or MacOS in which case git is available via brew or winget </p>
<p>Then install php from either your package manager or simply php.net and then run the command below</p>
<code>cd bromine && sudo ./run-forever.sh</code>
<p>Now congrats you are technically running a server but here's the problem you are actual running a local server to where only your device can view it continue to the next section to learn how to take it online</p>
<h1>Hidden Services & Domains</h1>
<p>So in order to host it on a hidden service your going to need Tor installed then just go to your /etc/tor/torrc or C:\Tor\Torrc on Windows and on MacOS it is ~/Library/Application\ Support/TorBrowser-Data/Tor/torrc file and open it and it should like something like below</p>
<code>
HiddenServiceDir /var/lib/tor/hidden_http/
HiddenServiceVersion 3
HiddenServicePort 80 127.0.0.1:80
</code>
<p>And now if you run the "./run-forever.sh" script it will then host your Bromine instance on the dark web anonymously and now you are now the proud owner of a Bromine-based server which you can call what you like when your done with it but please keep my XMR wallet in the Donate section and you can put yours alongside it if you like but please do not remove it</p>
<p>Using domains is very self explanitory you could use a provider like namecheap to host your file sharing service for dirtcheap but from what I found online it is pretty easy to set up apparently you log into your "CPanel" account and then click on the phpMyAdmin button and you should be able to add files and modifications from there </p>
<h1>Modifying your server</h1>
<p>I recommend modifying your server heavily but I will not be going through how because there are just so many possible methods but I recommend modifying TOS.html and Bromine.asc which is the PGP key file and I recommend for you to replace it with your own and for context a PGP key is just a key that authenticates it is you so if your website got taken down you could then make a statement on another platform using the signed key and this would prove to others that it is you an not an imposter which could also potentially help you get websites and accounts recovered in some rare cases </p>
<h1>Closing your server</h1>
<p>This is extremely simple just close all your php instances then type <code>sudo killall php</code> then type <code>sudo vim /etc/tor/torrc</code> and edit the file to remove the last few lines also please note this command was just an example and would only work if you were running a linux machine with vim</p>
<h1>Updating your server</h1>
<p>This is something you were probably thinking from the start so obviosuly you want to update the operating system of the machine but you also would need to update it quite frequently and you might want to PGP verify the update too if possible and then you should also update your version of PHP when it starts becoming insecure of you are unsure on when this is just search it up and another one that I almost guarantee never crossed your mind is updating Bromine so every few weeks try updating it when a new version is available which you can update in your terminal by typing <code>cd $HOME && git clone https://github.com/nmUnderscore9/bromine.git && cd bromine
</code> which is a simple command that would update your version of Bromine </p>
<h1>Supporting the project</h1>
<p>You can help this project by donating to my <a href="https://ko-fi.com/nm_9_yt">Ko-Fi</a> however if you are unable to support me financially you can do something arguably better which is to help me and my project via getting the word out like making social media videos about it or even something as simple as suggesting Bromine in a technical Discord server for example</p>
