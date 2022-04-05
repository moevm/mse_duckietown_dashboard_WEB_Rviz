# mse_duckietown_dashboard_WEB_Rviz


Инструкция по добавлению пакета Duckietown:
1. Загрузить пакет в Docker-контейнер с системой /compose/.
2. Местоположение всех пользовательских пакетов находится в директории "/user-data/packages/".
3. Необходимо переместить загруженный пакет в директорию из пункта 2.

Инструкция по установке ROS Docker:
http://wiki.ros.org/docker/Tutorials/Docker
1.	Скачиваем Docker Desktop https://docs.docker.com/get-docker/
2.	В консоли (для Windows cmd) пишем  
docker pull ros
docker pull ros:noetic-robot
3.	Запускаем 
docker run -it ros

