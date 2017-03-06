# -*- mode: ruby -*-
# vi: set ft=ruby :

VAGRANTFILE_API_VERSION = "2"

Vagrant.configure(VAGRANTFILE_API_VERSION) do |config|
  config.vm.box = "ubuntu/xenial64"

  config.vm.hostname = "sl-site"

  # allow cloning secure git repos as user on host machine. obviates copying
  # ssh keys to guest machine
  config.ssh.forward_agent = true

  # Create a private network, which allows host-only access to the machine
  # using a specific IP.
  config.vm.network "public_network",bridge:"en0: Ethernet 1"

  #config.vm.synced_folder ".","/vagrant",disabled:true
end
