# mse_duckietown_dashboard_WEB_Rviz

Проект представляет из себя внедрение в систему /compose/ приложение Foxglove. 
\compose\ — это платформа CMS (система управления контентом), написанная на PHP, которая предоставляет функциональные возможности для быстрой разработки веб-приложений на серверах Linux. 
Foxglove — это веб-приложение для воспроизведения и визуализации пакетов ROS. Также данное приложение было дополнено требуемым от заказчиков функционалом.  
В качестве технологий использовались ROS, PHP, REACT, Docker.


# Установка и запуск Duckietown Dashbord: 
1. Скачать докер по ссылке: https://docs.docker.com/get-docker/  
2. В терминале ввести команду : 
<pre><code>docker pull afdaniele/compose
</code></pre>
![image](https://user-images.githubusercontent.com/54946557/161268701-40236ee6-8c53-41de-800a-aa28b3f1ba03.png)  
3. Запустить контейнер. При запуске контейнера в настройках сделать доступным его 80 порт извне. Необходимо указать порт для интерфейса localhost. Сокет по этому адресу будет мостом до приложения на 80 порту контейнера.
![image](https://user-images.githubusercontent.com/54946557/161269031-8ccb7a96-ac57-4fa1-b36d-698c771231bc.png)  
4. Перейти в браузере по ссылке http://localhost:80. Выполнить установку /compose/ по инструкции, которая будет выведена на экран после шага 
![image](https://user-images.githubusercontent.com/54946557/167693601-94850600-012a-4423-850a-7e3f7b240ca1.png)
5. Зарегистрироваться на https://www.duckietown.org, получить индивидуальный токен для входа в приложение  
![image](https://user-images.githubusercontent.com/54946557/161269502-8494d509-bc24-4207-a7b9-9ad2682bc5b8.png)


# Добавление пакета Duckietown:
Загрузить пакет в Docker-контейнер с системой /compose/ в  директорию "/user-data/packages/".

# Запуск проекта:
Сначала нужно собрать образы контейнеров: foxglove, \compose\
1. Запустить  compose:
 <pre><code> docker run [image_id]
</code></pre>
2. Клонируем репозиторий:
<pre><code> git clone https://github.com/lastrise/studio.git
</code></pre>
3. Запустить второй контейнер:
<pre><code> docker run -p 8080:8080 [image id]</code></pre>
4. Перейти в браузере по ссылке: http://localhost:80    
Страница профиля Duckietown Dashboard:
![image](https://user-images.githubusercontent.com/54946557/167317629-ddec2094-efbc-485c-964f-f1db94b0b6ac.png)
5. Нажать на кнопку: "Webviz".   
Приложение для визуализации Webviz: 
![image](https://user-images.githubusercontent.com/54946557/167317709-908c0edc-bd11-4082-a423-2c75023395bc.png)


