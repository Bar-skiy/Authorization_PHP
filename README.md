# User authorization_PHP
Registration and authorization system on PHP and MySQL databases

http://f0728438.xsph.ru/

Форма регистрации и авторизации создана на локальном сервере и перенесена на удаленный сервер "Спринт Хост" с  бесплатным хостингом (авторизация в браузере Google Chrome работает в режиме "инкогнито").  
 Реализована проверка:  
   - при регистрации - длинны вводимой строки; дублирования вводимого логина с имеющимся в БД;   
   - при авторизации - наличия логина в базе данных, соответствие пароля логину. 
        
При наличии несоответствий происходит перенаправление на страницу с ошибкой. 

Данные регистрации складываются в базе данных MySQL, пароль хешируется.    
Авторизация происходит с помощью куки, где установлен срок жизни авторизации пользователя.     
