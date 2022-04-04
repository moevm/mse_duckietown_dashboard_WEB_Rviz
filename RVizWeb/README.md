# Установка RVizWeb

1. Установите ROS core. Инструкция по установке (для Ubuntu 20.04):
        http://wiki.ros.org/noetic/Installation/Ubuntu

2. Создайте директорию для рабочего пространства catkin:

        mkdir -p ~/ws/src
        cd ~/ws/src
        git clone https://github.com/osrf/rvizweb/

3. Установите LTS-версию Node.js, добавьте PPA, чтобы `rosdep` смог извлечь его:

        sudo apt update
        sudo apt install nodejs
        curl -sL https://deb.nodesource.com/setup_8.x | sudo bash -

4. Установите системные зависимости ROS:

        cd ~/ws
        rosdep install --from-paths src --ignore-src -r -y

5. Создайте и установите рабочее пространство; при этом будут запущены `bower` и `polymer-cli` для создания и установки сайта:

        cd ~/ws
        catkin_make install

6. Запустите RVizWeb:

        . ~/ws/install/setup.bash
        roslaunch rvizweb rvizweb.launch

7. Откройте сайт в браузере:

    http://localhost:8001/rvizweb/www/index.html


# Установка RVizWeb в докер контейнере Ubuntu

1. Установите Docker. Инструкция по установке (для Ubuntu 20.04):
        https://docs.docker.com/engine/install/ubuntu/

2. Загрузите образ Ubuntu:

        docker pull ubuntu

3. Запустите контейнер:

        docker run -it ubuntu

4. Установите RVizWeb в контейнере по инструкции выше

5. Чтобы выйти из контейнера, введите `exit`.

6. Чтобы посмотреть список всех контейнеров: 

		`docker ps -a`
		
7. Чтобы запустить контейнер ubuntu: 
		
		`docker start -i {container id/name}`

8. Чтобы удалить контейнер:

	`docker rm {container id/name}`
