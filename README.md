# mse_duckietown_dashboard_WEB_Rviz

Проект представляет из себя внедрение в систему /compose/ приложение Foxglove. 
\compose\ — это платформа CMS (система управления контентом), написанная на PHP, которая предоставляет функциональные возможности для быстрой разработки веб-приложений на серверах Linux. 
Foxglove — это веб-приложение для воспроизведения и визуализации пакетов ROS. Также данное приложение было дополнено требуемым от заказчиков функционалом.  
В качестве технологий использовались ROS, PHP, REACT, Docker.


# Установка и запуск Duckietown Dashbord: 
Для работы команд нужно установить docker.
Сначала нужно собрать образы контейнеров: foxglove , \compose\ :
Для этого нужно запустить контейнер afdaniele/compose: 
<pre><code>docker run -p 80:80 [image_id]</code></pre>
Запустить контейнер foxglove:
<pre><code>docker run -p 8080:8080 [image_id]</code></pre>
image_id - идентификатор image, который можно посмотреть с помощью команды:
<pre><code>docker image ls</code></pre>
При отсутствии контейнеров foxglove , \compose\ нужно их установить. Для этого в терминале нужно ввести команду:
<pre><code>docker pull afdaniele/compose</code></pre>
![image](https://user-images.githubusercontent.com/54946557/161268701-40236ee6-8c53-41de-800a-aa28b3f1ba03.png)  
Рисунок 1.1 - Установка контейнера \compose\ в терминале.
<pre><code>git clone https://github.com/lastrise/studio.git
cd studio
docker build ./</code></pre>
Для установки foxglove контейнера нужно ввести команду:
<pre><code>docker pull whitecurl/foxglove:latest</code></pre>
Запустить контейнер:
![_Y-nOh0YCEEYeDo-e6ZCT-fPEZ6T8LvOvOVNXuJiHzwb4iW6P0qDK_t9d8f1Tv73OusWzyiJWkmbDluJhXGUXlD7](https://user-images.githubusercontent.com/54913485/171691763-7c0f9c1f-53e3-41a2-b835-abd8162efb68.jpg)
Рисунок 1.2 - Контейнер whitecurl/foxglove в терминале.

В Docker Desktop перейти во вкладку Containers и открыть CLI терминал контейнера afdaniele/compose. В терминале контейнера ввести:
<pre><code>cd /user-data
mkdir packages
cd packages
git clone https://github.com/moevm/mse_duckietown_dashboard_WEB_Rviz
mv mse_duckietown_dashboard_WEB_Rviz ./webviz</code></pre>
Перейти в браузере по ссылке: http://localhost:8080

Выполнить установку /compose/ по инструкции, которая будет выведена на экран после шага(Skip; Next; Finish; Sign in as Developer). Адрес и порт визуализатора настраиваются в настройках \compose\, а именно в /compose/ зайти во вкладку Settings >> Package: webviz, установить Webviz port: 80.

Примечание: Настройки в \compose\ можно опустить, если изначально установить контейнер webviz на порт 8080, а контейнер compose на другой порт, например, 80, но для этого нужно поменять инструкцию, сделать новые скриншоты Docker Desktop с нужными портами и поменять в инструкции ссылки localhost.
![image](https://user-images.githubusercontent.com/54946557/167693601-94850600-012a-4423-850a-7e3f7b240ca1.png)
Рисунок 1.3 - Окно после регистрации в \compose\.
Нажать на кнопку: "Webviz".   

Приложение для визуализации Webviz: 
![image](https://user-images.githubusercontent.com/54946557/167317709-908c0edc-bd11-4082-a423-2c75023395bc.png)

# Добавление пакета Duckietown:
Загрузить пакет в Docker-контейнер с системой /compose/ в  директорию "/user-data/packages/".



