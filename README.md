# mse_duckietown_dashboard_WEB_Rviz
Инструкция, как развернуть локально Duckietown Dashboard:
1.Скачать докер по ссылке: https://docs.docker.com/get-docker/  
2. В терминале ввести команду : docker pull afdaniele/compose
![image](https://user-images.githubusercontent.com/54946557/161268701-40236ee6-8c53-41de-800a-aa28b3f1ba03.png)  
3.Запустить контейнер. При запуске контейнера в настройках сделать доступным его 80 порт извне. Необходимо указать порт для интерфейса localhost. Сокет по этому адресу будет мостом до приложения на 80 порту контейнера.
![image](https://user-images.githubusercontent.com/54946557/161269031-8ccb7a96-ac57-4fa1-b36d-698c771231bc.png)  
4.Перейти в браузере по ссылке http://localhost:80. Выполнить установку /compose/ по инструкции, которая будет выведена на экран после шага 
![image](https://user-images.githubusercontent.com/54946557/161269284-fbbd0ee9-1cef-4649-9a63-a665d0dea0a4.png)  
Результат выполнения шага 3.  
4.Зарегистрироваться на https://www.duckietown.org, получить индивидуальный токен для входа в приложение  
![image](https://user-images.githubusercontent.com/54946557/161269502-8494d509-bc24-4207-a7b9-9ad2682bc5b8.png)

Инструкция по установке ROS Docker:
http://wiki.ros.org/docker/Tutorials/Docker
1.	Скачиваем Docker Desktop https://docs.docker.com/get-docker/
2.	В консоли (для Windows cmd) пишем  
docker pull ros
docker pull ros:noetic-robot
3.	Запускаем 
docker run -it ros

