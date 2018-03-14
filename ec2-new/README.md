# EC2 Instance Creations

## :warning: Warning
Do not run without being familiar with Ansible Playbooks and this script.

## Summary
 - Creates a new EC2 Instance
 - Sets tags and instance name
 - Assigns a public ip to the new instance

## Usage
- Check Script Syntax: `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --check`
- Run: `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --extra-vars "instance_name=enter-name-here" --ask-sudo-pass`
- Alternative: `AWS_PROFILE={PROFILE NAME} ansible-playbook site.yml --extra-vars "instance_name=enter-name-here" --extra-vars "ansible_sudo_pass=yourPassword"`
