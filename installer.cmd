@echo off
echo Installing Laravel Project...

echo Installing Composer...
call composer install

echo Generating Key...
call php artisan key:generate

echo Running npm install...
call npm install
call npm run build

echo Serving Project...
call php artisan serve



echo Laravel Project installation completed.
pause