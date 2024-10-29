
import os
import shutil
print("                                                Bromine Simple Hoster")
print("\n")
print("1. Host on TOR")
print("2. Host on LOCALHOST")
print("3. Host on LAN")
print("4. Host on PUBLIC")
choice = input("[Enter Choice]:")
if choice == "1":
    torrc_location = input("Where is torrc stored on your system:")
    os.remove(torrc_location)
    shutil.move("Configs/torrc",torrc_location)        
    php_dot_ini_location = input("Where is php.ini stored on your system:")
    shutil.move("Configs/php.ini",php_dot_ini_location)
    print("\033[35mCongrats you are now hosting a Bromine instance on TOR (check /var/lib/tor/hidden_service/hostname and if you are on Windows then please allow it with your firewall)! :D\033[39m")
    os.system("php -S 127.0.0.1:8080")

if choice == "2":
    php_dot_ini_location = input("Where is php.ini stored on your system:")
    shutil.move("Configs/php.ini",php_dot_ini_location)
    print("\033[35mYou are now hosting an instance of Bromine on localhost:8080\033[39m")
    os.system("php -S localhost:8080")


if choice == "3":
    php_dot_ini_location = input("Where is php.ini stored on your system:")
    shutil.move("Configs/php.ini",php_dot_ini_location)
    print("\033[35mHosting on your private IP (LAN) right now (if you are on Windows then please allow it on past your firewall) :D\033[39m")
    os.system("php -S 0.0.0.0:8888")

if choice == "4":
    IMPORTANT_QUESTION_1 = input("Have you port forwarded yet (y/n):")
    if(IMPORTANT_QUESTION_1 == "n"):
        print("[\033[31mERROR\033[39m] Port forwarding is required to proceed!")

    else:

            public_ip = input("Enter Public IP:")
            php_dot_ini_location = input("Where is php.ini stored on your system:")
            shutil.move("Configs/php.ini",php_dot_ini_location)
            print("\033[35m Congrats you are now hosting a server on " + public_ip)
            os.system("php -S " + public_ip + ":8888")

        

