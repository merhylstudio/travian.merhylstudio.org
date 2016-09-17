# Config valid only for current version of Capistrano
lock '3.6.1'

# Set the log level
set :log_level, :debug

# Remote server and website common parameters
set :application, "travian"
set :deploy_user, "billy"
set :deploy_to, "/app/httpd/www/#{fetch(:application)}"
set :keep_releases, 5

# Git parameters with URL to repository (can be local)
set :scm, :git
set :repo_url, 'https://git@github.com/merhylstudio/travian.merhylstudio.org.git'
#ask :branch, 'git rev-parse --abbrev-ref HEAD'.chomp
set :branch, 'master'

# Linked in shared folder
append :linked_files, "config/database.yml"
append :linked_dirs, "logs", "tmp/cache"

# Chemin de composer (shared_path)
SSHKit.config.command_map[:composer] = "php #{shared_path.join("composer.phar")}"

# debug sur composer
set :composer_install_flags, '--no-dev --no-interaction --optimize-autoloader'

set :pty, true

#############################################################
## FLOW
##
namespace :deploy do
  # Installing composer (in shared_path by default)
  after :starting, 'composer:install_executable'

  # Finishing tasks
  after :finishing, 'deploy:cleanup'
end

