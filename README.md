
    OPÇÃO 1:
        se tiver o package make (sudo apt-get install make para instalar no wsl ou ubuntu)
        apenas digite na raiz do projeto: 
            
            make setup
            e abra o navegador em http://127.0.0.1:8000/



    OPÇÃO 2:
        sem o package make apenas siga digite os comandos abaixo na mesma ordem:

            docker-compose build --no-cache --force-rm
            docker-compose up -d
            docker exec app composer update
            docker exec app composer install
            docker-compose exec db mysql -u root -p'password' -e "DROP DATABASE IF EXISTS oaktechtest;"
            docker-compose exec db mysql -u root -p'password' -e "CREATE DATABASE oaktechtest;"
            docker exec app php artisan migrate
            docker exec app php artisan db:seed

                e abra o navegador em http://127.0.0.1:8000/