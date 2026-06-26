GeoFort-Tech PHP Website

Run with Docker:
docker build -t geofort-tech-php:v1 .
docker run -d --name geofort-tech-php -p 8080:80 geofort-tech-php:v1

Open http://localhost:8080

GitHub Pages and S3 static website hosting do not execute PHP.
Use Docker, XAMPP, EC2, Lightsail, Elastic Beanstalk, or another PHP-compatible server.
