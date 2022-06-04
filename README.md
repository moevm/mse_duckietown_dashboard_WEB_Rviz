# mse_duckietown_dashboard_WEB_Rviz

Проект представляет из себя внедрение в систему /compose/ приложение Foxglove. 
\compose\ — это платформа CMS (система управления контентом), написанная на PHP, которая предоставляет функциональные возможности для быстрой разработки веб-приложений на серверах Linux. 
Foxglove — это веб-приложение для воспроизведения и визуализации пакетов ROS. Также данное приложение было дополнено требуемым от заказчиков функционалом.  
В качестве технологий использовались ROS, PHP, REACT, Docker.


# Подготовка к запуску проекта:
Для работы команд нужно установить docker.  
Для запуска проекта нужно развернуть контейнеры foxglove, \compose\\, и добавить в систему \compose\ пакет.

## Загрузка \compose\\:
Для загрузки \compose\ нужно ввести команду в терминале:
<pre><code>docker pull afdaniele/compose</code></pre>
![image](https://user-images.githubusercontent.com/54946557/161268701-40236ee6-8c53-41de-800a-aa28b3f1ba03.png)  
Рисунок 1.1 - Загрузка контейнера \compose\ в терминале.

## Загрузка foxglove:
Для загрузки foxglove контейнера нужно ввести команду в терминале:
<pre><code>docker pull whitecurl/foxglove:latest</code></pre>

Либо клонировать репозиторий foxglove и собрать приложение самостоятельно:
<pre><code>git clone https://github.com/lastrise/studio.git
cd studio
docker build ./</code></pre>

## Добавление пакета в \compose\\:
Запустить контейнер \compose\\:
![_Y-nOh0YCEEYeDo-e6ZCT-fPEZ6T8LvOvOVNXuJiHzwb4iW6P0qDK_t9d8f1Tv73OusWzyiJWkmbDluJhXGUXlD7](https://user-images.githubusercontent.com/54913485/171691763-7c0f9c1f-53e3-41a2-b835-abd8162efb68.jpg)
Рисунок 1.2 - Контейнер whitecurl/foxglove в Docker Desktop.  
В Docker Desktop перейти во вкладку Containers и открыть CLI терминал контейнера afdaniele/compose. В терминале контейнера ввести:
<pre><code>cd /user-data
mkdir packages
cd packages
git clone https://github.com/moevm/mse_duckietown_dashboard_WEB_Rviz
mv mse_duckietown_dashboard_WEB_Rviz ./webviz</code></pre>

# Запуск проекта:
Сначала нужно собрать образы контейнеров: foxglove, \compose\:

Для этого нужно запустить контейнер afdaniele/compose: 
<pre><code>docker run -p 80:80 [image_id]</code></pre>

Запустить контейнер foxglove:
<pre><code>docker run -p 8080:8080 [image_id]</code></pre>
image_id - идентификатор image, который можно посмотреть с помощью команды:
<pre><code>docker image ls
mv mse_duckietown_dashboard_WEB_Rviz ./webviz </code></pre>

Затем перейти в браузере по ссылке: http://localhost:8080. Выполнить установку \compose\ по инструкции, которая будет выведена на экран после шага(Skip; Next; Finish; Sign in as Developer). Адрес и порт визуализатора настраиваются в настройках \compose\\, а именно в \compose\ зайти во вкладку Settings » Package: webviz, установить Webviz port: 80.

![image](https://user-images.githubusercontent.com/54946557/167693601-94850600-012a-4423-850a-7e3f7b240ca1.png)  
Рисунок 1.3 - Окно после регистрации в \compose\\.  
Перейти на вкладку Webviz.

![image](https://user-images.githubusercontent.com/54946557/167317709-908c0edc-bd11-4082-a423-2c75023395bc.png)
Рисунок 1.4 - Приложение для визуализации Webviz.
