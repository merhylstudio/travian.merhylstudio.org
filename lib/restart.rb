########################################################
###
### MerhylStudio
##
## Capistrano restart task
## 
#

namespace :merhyl do 
  desc 'Restart httpd'
    task :restart do
      on roles(:web), in: :sequence, wait: 5 do
        # Restart mechanism here
        execute :touch, release_path.join('tmp/restart.txt')
        run 'systemctl restart httpd'
    end
  end
end

namespace :deploy do
  after :publishing, 'merhyl:restart'
end

