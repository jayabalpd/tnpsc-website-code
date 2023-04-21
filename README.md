# tnpsc-website-code
Windows Frequently Asked Questions
How do I install XAMPP?
XAMPP for Windows exists in three different flavors:

Installer:
Probably the easiest way to install XAMPP.

ZIP:
For purists: XAMPP as ordinary ZIP archive.

7zip:
For purists with low bandwidth: XAMPP as 7zip archive.

Note: If you extract the files, there can be false-positives virus warnings.

Using the installer:

The XAMPP control panel for start/stop Apache, MySQL, FileZilla & Mercury or install these server as services.

Installing from ZIP

Unzip the zip archives into the folder of your choice. XAMPP is extracting to the subdirectory "C:\xampp" below the selected target directory. Now start the file "setup_xampp.bat", to adjust the XAMPP configuration to your system.

If you choose a root directory "C:\" as target, you must not start "setup_xampp.bat".

Like with the installer version, you can now use the "XAMPP Control Panel" for additional tasks.

Does XAMPP include MySQL or MariaDB?
Since XAMPP 5.5.30 and 5.6.14, XAMPP ships MariaDB instead of MySQL. The commands and tools are the same for both.

How can I start XAMPP without setup?
If you extract XAMPP in a top level folder like "C:\" or "D:\", you can start most servers like Apache or MySQL directly without execution of the file "setup_xampp.bat".

Not using the setup script, or selecting relative paths in the setup script, is preferred if you are installing XAMPP on a usb drive. Because on each pc such a drive can have an other drive letter. You can switch from absolute to relative paths at any time with the setup script.

Using the installer from our Downloads page is the easiest way to install XAMPP. After the installation is complete, you will find XAMPP under Start | Programs | XAMPP. You can use the XAMPP Control Panel to start/stop all server and also install/uninstall services.

The XAMPP control panel for start/stop Apache, MySQL, FileZilla & Mercury or install these server as services.

How do I start and stop XAMPP?
The universal control center is the "XAMPP Control Panel" (thanks www.nat32.com). It is started with:

\xampp\xampp-control.exe

You can also use some batchfiles to start/stop the servers:

Apache & MySQL start: \xampp\xampp_start.exe
Apache & MySQL stop: \xampp\xampp_stop.exe
Apache start: \xampp\apache_start.bat
Apache stop: \xampp\apache_stop.bat
MySQL start: \xampp\mysql_start.bat
MySQL stop: \xampp\mysql_stop.bat
Mercury Mailserver start: \xampp\mercury_start.bat
Mercury Mailserver stop: \xampp\mercury_stop.bat
FileZilla Server start: \xampp\filezilla_start.bat
FileZilla Server stop: \xampp\filezilla_stop.bat
How can I test that everything worked?
Type in the following URL at your favourite web browser:

http://localhost/ or http://127.0.0.1/

You should see the XAMPP start page, as shown below.


How can I install a server as a service?
Each server in XAMPP you can install also as Windows service. You can also install it from the XAMPP Control Panel. In this case it is necessary to run the scripts or the Control Panel with Administrator privileges.

Apache service install: \xampp\apache\apache_installservice.bat

Apache service uninstall: \xampp\apache\apache_uninstallservice.bat

MySQL service install: \xampp\mysql\mysql_installservice.bat

MySQL service uninstall: \xampp\mysql\mysql_uninstallservice.bat

FileZilla service (un)install: \xampp\filezilla_setup.bat

Mercury: No service installation available

Is XAMPP production ready?
XAMPP is not meant for production use but only for development environments. XAMPP is configured to be open as possible to allow the developer anything he/she wants. For development environments, this is great but in a production environment, it could be fatal.

Here a list of missing security in XAMPP:

The MySQL administrator (root) has no password.
The MySQL daemon is accessible via network.
ProFTPD uses the password "lampp" for user "daemon".
The default users of Mercury and FileZilla are known.
All points can be a huge security risk. Especially if XAMPP is accessible via network and people outside your LAN. It can also help to use a firewall or a (NAT) router. In case of a router or firewall, your PC is normally not accessible via network. It is up to you to fix these problems. As a small help there is the "XAMPP Security console".

Please secure XAMPP before publishing anything online. A firewall or an external router are only sufficient for low levels of security. For slightly more security, you can run the "XAMPP Security console" and assign passwords.

If you want have your XAMPP accessible from the internet, you should go to the following URI which can fix some problems:

http://localhost/security/

With the security console you can set a password for the MySQL user "root" and phpMyAdmin. You can also enable a authentication for the XAMPP demopages.

This web based tool does not fix any additional security issues! Especially the FileZilla FTP server and the Mercury mail server you must secure yourself.

How do I uninstall XAMPP?
If you installed XAMPP using the installer version, please use the Uninstaller. The Uninstaller will delete all XAMPP entries from your registry and it will uninstall some installed services included with XAMPP. We highly recommend that you use the Uninstall program for removing XAMPP installations from the Installer version.Please backup all the data you want to keep before uninstalling XAMPP.

If you installed XAMPP using the ZIP and 7zip versions, shut down all XAMPP servers and exit all panels. If you installed any services, uninstall and shut them down too. Now simply delete the entire folder where XAMPP is installed. There are no registry entries and no environment variables to clean up.

What is the "lite" version of XAMPP?
XAMPP Lite (means "light" as in "light-weight") is a smaller bundle of XAMPP components, which is recommended for quick work using only PHP and MySQL. Some servers or tools such as Mercury Mail and FileZilla FTP are missing in the Lite version.

Where should I place my web content?
The main directory for all WWW documents is \xampp\htdocs. If you put a file "test.html" in this directory, you can access it with the URI "http://localhost/test.html".

And "test.php"? Just use "http://localhost/test.php". A simple testscript can be:

<?php
echo 'Hello world';
?>

A new subdirectory for your web? Just make a new directory (e.g. "new") inside the directory "\xampp\htdocs" (best without whitespaces and only ASCII), create a test file in this directory and access it with "http://localhost/new/test.php".

Further specifics

HTML:
Executable: \xampp\htdocs
Allowed endings: .html .htm
=> basic package

SSI:
Executable: \xampp\htdocs
Allowed endings: .shtml
=> basic package

CGI:
Executable: \xampp\htdocs and \xampp\cgi-bin
Allowed endings: .cgi
=> basic package

PHP:
Executable: \xampp\htdocs and \xampp\cgi-bin
Allowed endings: .php
=> basic package

Perl:
Executable: \xampp\htdocs and \xampp\cgi-bin
Allowed endings: .pl
=> basic package

Apache::ASP Perl:
Executable: \xampp\htdocs
Allowed endings: .asp
=> basic package

JSP Java:
Executable: \xampp\tomcat\webapps\java (e.g.)
Allowed endings: .jsp
=> Tomcat add-on

Servlets Java:
Executable: \xampp\tomcat\webapps\java (e.g.)
Allowed endings: .html (u.a)
=> Tomcat add-on

Can I move the XAMPP installation?
Yes. After moving of the XAMPP directory, you must execute "setup_xampp.bat". The paths in the configuration files will be adjusted with this step.

If you have installed any server as Windows service, you must first remove the Windows service, and after the moving you can install the service again.

WARNING: The configuration files from your own scripts, like PHP applications, are not adjusted. But it's possible to write a "plug-in" for the installer. With such a plug-in, the installer can adjust such files too.

What are "Automatic start pages" for the WWW directories?
The standard filename for the Apache function "DirectoryIndex" is "index.html" or "index.php". Every time you are just browsing to a folder (e.g. "http://localhost/xampp/"), and Apache can find such a file, Apache is displaying this file instead of a directory listing.

Where can I change the configuration?
Almost all settings in XAMPP you can change with configuration files. Just open the file in a textedit and change the setting you want. Only FileZilla and Mercury should be configured with the application config tool.

Why can't XAMPP work on Windows XP SP2?
Microsoft delivers a better firewall with service pack 2 (SP2), which starts automatically. This firewall now blocks the necessary ports 80 (http) and 443 (https) and Apache can't start.

The fast solution:

Disable the Microsoft firewall with the toolbar and try to start XAMPP onces more. The better solution is to define an exception within the security center.

The following ports are used for basic functionality:

Apache (HTTP): Port 80
Apache (WebDAV): Port 81
Apache (HTTPS): Port 443
MySQL: Port 3306
FileZilla (FTP): Port 21
FileZilla (Admin): Port 14147
Mercury (SMTP): Port 25
Mercury (POP3): Port 110
Mercury (IMAP): Port 143
Mercury (HTTP): Port 2224
Mercury (Finger): Port 79
Mercury (PH): Port 105
Mercury (PopPass): Port 106
Tomcat (AJP/1.3): Port 8009
Tomcat (HTTP): Port 8080

Why doesn't XAMPP work on Vista?
User Account Control (UAC)

In the directory "C:\program files" you don't have full write privileges, even as Admin. Or you have only limited privileges (e.g. for ".\xampp\htdocs"). In this case you can't edit a file.
Solution: Raise your privileges within explorer (right click / security) or disable the user account control (UAC).

You have installed Apache/MySQL in "C:\xampp" as Windows service. But you can't start/stop the services with the "XAMPP Control Panel" or can't uninstall them.

Solution: Use the service management console from Windows or disable UAC.

Disabling the User Account Control (UAC)

To disable the UAC, use the program "msconfig". In "msconfig" go to "Tools", select "disable user account control" and verify your selection. Now you must restart Windows. At the same time, you can enable the UAC again.

How do I check the md5 checksum?
To compare files, often checksums are used. A standard to create this checksum md5 (Message Digest Algorithm 5).

With this md5 checksum you can test, if your download of the XAMPP package is correct or not. Of course you need a program which can create these checksums. For Windows you can use a tool from Microsoft:

Availability and description of the File Checksum Integrity Verifier utility

It's also possible to use any other program which can create md5 checksums, like the GNU md5sum.

As you have installed such a program (e.g. fciv.exe), you can do following steps:

Download XAMPP (f.e. xampp-win32-1.8.2-0.exe)
Create the checksum with:
fciv.exe xampp-win32-1.8.2-0.exe
And now you can compare this checksum with that one you can find on the XAMPP for Windows homepage.
If both checksums equal, all is ok. If not, the download is broken or the file has been changed.

Why have changes in my php.ini not taken effect?
If a change in the "php.ini" has no effect, it's possible PHP is using a different one. You can verify this with phpinfo(). Go to the URI http://localhost/xampp/phpinfo.php and search for "Loaded Configuration File". This value shows you the "php.ini" PHP is really using.

Note: After changing the "php.ini" you have to restart Apache so that Apache/PHP can read the new settings.

Help! There is a virus in XAMPP!
Some antivirus programs mistake XAMPP for a virus, typically flagging the file xampp-manager.exe This is a false positive meaning that the antivirus erroneously identified it as a virus, when it is not. Before we release each new version of XAMPP we run it through virus scanning software. At the moment we are using Kapersky Online Virus Scanner. You can also use the online tool Virus Total for scanning XAMPP or send us an email to security (at) apachefriends (dot) org if you find any issue.

How do I configure my antivirus application?
We have included all dependences and servers required for running the bundled web application, so you will find that XAMPP installs large numbers of files. If you are installing a XAMPP application on a Windows machine with an antivirus app enabled, this may slow down the installation significantly, and there is also a chance that one of the servers (web server, database server) may be blocked by the antivirus software. If you have an antivirus tool enabled, check the following settings for running XAMPP without performance issues:

Add exceptions in the firewall: for Apache, MySQL or any other server.
Scan files when executing: If you have enabled the antivirus scan for all files, the executable files for the servers may slow down.
Scan the traffic for different URLs: If you are developing with XAMPP on your own machine, you can exclude "localhost" traffic in the Antivirus settings.
Why doesn't the Apache server start on my system?
This problem can be one of several reasons:

You have started more then one HTTP Server (IIS, Sambar, ZEUS and so on). Only one Server can use port 80. This error message indicate the problem:
(OS 10048)... make_sock: could not bind to adress 0.0.0.0:80 no listening sockets available, shutting down
You have other software, such as the Internet Telephone "Skype" which also blocks the port 80. If the problem is "Skype", you can go in Skype to Actions --> Options --> Connection --> remove the check mark at "use port 80 for an alternate port" and restart Skype. Now it should work.
You have a firewall which blocks the Apache port. Not all firewalls are compatible with Apache, and sometimes deactivating the firewall is not enough and you must deinstall it. This error message indicates a firewall:
(OS 10038)Socket operation on non-socket: make_sock: for address 0.0.0.0:80, apr_socket_opt_set: (SO_KEEPALIVE)
Also if Apache can start, but your browser can't connect to it it could be due to one of the following:

Some virus scanners can cause this in the same way that firewalls can interfere.
You have XP Professional without service pack 1. You must have at least SP1 for XAMPP.
Tip: If you have problems with used ports, you can try the tool "xampp-portcheck.exe". Maybe it can help.

Why is my CPU load for Apache almost 99%?
There is one of two scenarios at play here. Either your CPU is maxing out, or you can browser connect to the server, but not see anything (the system is trying unsucessfully to load the page). In either case you can find the following message in the Apache log file:

Child: Encountered too many AcceptEx faults accepting client connections. winnt_mpm: falling back to 'AcceptFilter none'.

The MPM falls back to a safer implementation, but some client requests were not processed correctly. In order to avoid this error, use "AcceptFilter" with accept filter "none" in the "\xampp\apache\conf\extra\httpd-mpm.conf" file.

Why are pictures and style-sheets not displayed?
Sometimes there are problems with displaying pictures and style-sheets. Especially if these files are located on a network drive. In this case you can enable (or add) one if the following lines in the file "\xampp\apache\conf\httpd.conf":

EnableSendfile off
EnableMMAP off

This problem can also be caused by programs for regulating bandwidth, like NetLimiter.

How do I send email with XAMPP?
To configure XAMPP to use the included sendmail.exe binary for email delivery, follow these steps:

Edit the XAMPP "php.ini" file. Within this file, find the [mail function] section and replace it with the following directives. Change the XAMPP installation path if needed. sendmail_path = "\"C:\xampp\sendmail\sendmail.exe\" -t"
Edit the XAMPP "sendmail.ini" file. Within this file, find the [sendmail] section and replace it with the following directives: smtp_server=smtp.gmail.com smtp_port=465 smtp_ssl=auto error_logfile=error.log auth_username=your-gmail-username@gmail.com auth_password=your-gmail-password
Remember to replace the dummy values shown with your actual Gmail address and account password. If you don't plan to use Gmail's SMTP server, replace the SMTP host details with appropriate values for your organization or ISP's SMTP server.

Restart the Apache server using the XAMPP control panel.
You can now use PHP's mail() function to send email from your application.

How can I set a root password in MySQL?
Configure it with the "XAMPP Shell" (command prompt). Open the shell from the XAMPP control pane and execute this command:mysqladmin.exe -u root password secretThis sets the root password to 'secret'.

Can I use my own MySQL server?
Yes. Simply don't start the MySQL from the XAMPP package. Please note that two servers cannot be started on the same port. If you have set a password for "root", please do not forget to edit the file "\xampp\phpMyAdmin\config.inc.php".

How do I restrict access to phpMyAdmin from the outside?
In the basic configuration of XAMPP, phpMyAdmin is accessible only from the same host that XAMPP is running on, at http://127.0.0.1 or http://localhost.

Before you can access the MySQL server, phpMyAdmin will prompt you for a user name and password. Don't forget to set a password for the user "root" first.

How do I enable access to phpMyAdmin from the outside?
In the basic configuration of XAMPP, phpMyAdmin is accessible only from the same host that XAMPP is running on, at http://127.0.0.1 or http://localhost.

IMPORTANT: Enabling external access for phpMyAdmin in production environments is a significant security risk. You are strongly advised to only allow access from localhost. A remote attacker could take advantage of any existing vulnerability for executing code or for modifying your data.

To enable remote access to phpMyAdmin, follow these steps:

Edit the apache\conf\extra\httpd-xampp.conf file in your XAMPP installation directory.
Within this file, find the lines below.
Alias /phpmyadmin "C:/xampp/phpMyAdmin/" <Directory "C:/xampp/phpMyAdmin"> AllowOverride AuthConfig Require local

Then replace 'Require local' with 'Require all granted'.
Alias /phpmyadmin "C:/xampp/phpMyAdmin/" <Directory "C:/xampp/phpMyAdmin"> AllowOverride AuthConfig Require all granted

Restart the Apache server using the XAMPP control panel.
Where is the IMAP support for PHP?
As default, the IMAP support for PHP is deactivated in XAMPP due to some mysterious initialization errors with some home versions like Windows 98. If you work with NT systems, you can open the file "\xampp\php\php.ini" to activate the php exstension by removing the beginning semicolon at the line ";extension=php_imap.dll". It should be:
extension=php_imap.dll

Now restart Apache and IMAP should work. You can use the same steps for every extension, which is not enabled in the default configuration.

Why don't some PHP open source apps work with XAMPP on Windows?
A lot of PHP applications or extensions that have been written for Linux haven’t been ported to Windows.

Can I delete the "install" directory after installation?
It's better not to. The scripts here are still needed for all additional packages (add-ons) and upgrades of XAMPP.

How do I activate the eaccelerator?
Like other (Zend) extensions, you can activate it in "php.ini". In this file, enable the line ";zend_extension = "\xampp\php\ext\php_eaccelerator.dll"". It should be:
zend_extension = "\xampp\php\ext\php_eaccelerator.dll"

How do I fix a connection error to my MS SQL server?
If the mssql extension was loaded in the php.ini, sometimes problems appear when only TCP/IP is used. You can fix that problem with a newer "ntwdblib.dll" from Microsoft. Please replace the older file in "\xampp\apache\bin" and "\xampp\php" with the new one. Because of the license, we can't package a newer version of this file with XAMPP.

How do I work with the PHP mcrypt extension?
For this, we have opened a topic in the forum with examples and possible solutions: MCrypt topic

Do Microsoft Active Server Pages (ASP) work with XAMPP?
No. And Apache::ASP with the Perl Add-On is not the same. Apache::ASP only knows Perl-Script, but ASP from the Internet Information Server (IIS) also knows the normal VBScript. But for ASP .NET, there is a 3rd party Apache module available.

How can I get XAMPP working on port 80 under Windows 10?
By default, Windows 10 starts Microsoft IIS on port 80, which is the same default port used by Apache in XAMPP. As a result, Apache cannot bind to port 80.

To disable IIS from running on port 80, follow these steps:

Open the Services panel in Computer Management.
Search for the 'World Wide Web Publishing Service' and select it.
Click the link to 'Stop the service'.
Double-click the service name.
In the 'Startup type' field, change the startup type to 'Disabled'.
Click 'OK' to save your changes.
You should now be able to start Apache in XAMPP on port 80.

For more information, refer to the 'Troubleshoot Apache Startup Problems' guide included with XAMPP or this forum post.

How can I use Microsoft Edge to access local addresses under Windows 10?
If your local machine has the host name 'myhost', you will not be able to access URLs such as http://myhost in Microsoft Edge. To resolve this, you should instead use the addresses http://127.0.0.1 or http://localhost.

Where are the main XAMPP configuration files?
The main XAMPP configuration files are located as follows:

Apache configuration file: \xampp\apache\conf\httpd.conf, \xampp\apache\conf\extra\httpd-xampp.conf
PHP configuration file: \xampp\php\php.ini
MySQL configuration file: \xampp\mysql\bin\my.ini
FileZilla Server configuration file: \xampp\FileZillaFTP\FileZilla Server.xml
Apache Tomcat configuration file: \xampp\tomcat\conf\server.xml
Apache Tomcat configuration file: \xampp\sendmail\sendmail.ini
Mercury Mail configuration file: \xampp\MercuryMail\MERCURY.INI
<b>Supporter</b>

thanks for <a href="https://www.tnpscgroup4.in/">TNPSC group 4</a> to help create this code
