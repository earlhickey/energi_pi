# server_pi
####Ansible Playbook to configure a headless minimal raspbian release into a energy monitoring, headless server type setup with minimal security essentials.

## Setup

1. update the *hosts* file to use the IP's of your raspberry pi below the [pis] group
2. rename **/goup_vars/pis.dist** to **/goup_vars/pis**
3. edit the **/goup_vars/pis** file for your own users needs!

Generate crypted passwords for the user on Linux:

```
mkpasswd --method=SHA-512
```

## Usage

Once you've done the setup simply cd into the server_pi directory and run:

```
ansible-playbook -i hosts server_pi.yml
```

And get something to drink!

Once it's complete, you can login as your new user and run raspi-config

```
sudo raspi-config
```

To complete the expanding of your SD card etc. Also make sure to change the password for the pi user!
<br />*or remove that user completly!*


