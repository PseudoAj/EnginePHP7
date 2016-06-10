# -*- mode: ruby -*-
# vi: set ft=ruby :

PROJECT_NAME = "EnginePHP7"
API_VERSION  = "2"

Vagrant.configure(API_VERSION) do |config|
  config.vm.define PROJECT_NAME, primary: true do |config|
    config.vm.provider :virtualbox do |vb|
      vb.name = PROJECT_NAME
    end

    config.vm.box = "bento/centos-7.2"
    config.vm.network :forwarded_port, guest: 80, host: 8080
    config.vm.provision "shell", path: "bootstrap.sh"
  end
end
