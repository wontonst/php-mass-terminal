Run a script on multiple remote computers. 

If you dont want each script to wait to finish execution be sure to add a "&" at the end of each command. Note that this means you won't get STDOUT anymore.

Add username/server in servers.php

Make a script, name it whatever like whatever.sh

Run

<pre>
php run.php whatever.sh
</pre>

The script will run whatever.sh on all devices in server and output stdout to working directory filename 

<pre>
[username@ip].[unixtimestamp]
</pre>
