# Wordpress MySQL Nginx Creation Playbook

## :warning: Warning
Do not run without being familiar with Ansible Playbooks and this script.

## Summary
 - Install + Configure MySQL
 - Install + Configure Wordpress + Themes + Plugins
 - Install + Configure Nginx
 - Install + Configure FPM-PHP

## Usage
- Check Syntax: `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --check`
- Run Full: `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --extra-vars "wp_domain=enter-wp-domain-name-here"`
- Example `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --extra-vars "wp_domain=my-wordpress-domain.net"`

