# Local environment with Docker

* Clone project to your development workspace

    ```bash
    git clone git@github.com:chivy-we/inno-shop.git ~/dev/docker-projects/inno-shop
    ```

* Navigate to your project

    ```bash
    cd ~/dev/docker-projects/inno-shop
    sudo chown -R ${USER}:${USER} .
    ```
    > Note: if it is required folder permission, please run `sudo chmod 777 -R storage`
    

* Install package dependency

    ```bash
    composer install
    ```

* Manually up docker

    ```bash
    git clone git clone https://github.com/Laradock/laradock.git
    cd laradock
    cp env-example .env
    docker-compose up -d nginx mysql workspace 
    ```
