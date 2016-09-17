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
set :repo_url, 'https://git@github.com/merhylstudio/travian.git'
#ask :branch, 'git rev-parse --abbrev-ref HEAD'.chomp
set :branch, 'master'

# Linked in shared folder
append :linked_files, "config/database.yml"
append :linked_dirs, "logs", "tmp/cache"


#############################################################
## Deploy flow
##
namespace :deploy do
  # make sure we're deploying what we think we're deploying
  #before :deploy, 'deploy:check'

  # Finishing tasks
  after :finishing, 'deploy:cleanup'
end

