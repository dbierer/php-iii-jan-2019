
Q1: How can I generate the Postman JSON file?

Q2: Why services classes (UserEntity and UserColletion) generated from db tables are empty? Are there any conventions in Apigility( because Swagger calls work)?


Note 1: possibly useful links  
> https://apigility.org/documentation/api-doc/swagger
> https://github.com/samsonasik/ApigilityConsumer
> https://github.com/zfcampus/zf-apigility-documentation-apiblueprint

Note 2: Zend Expressive t doesn't in XAMPP Windows 10 work because throws some warnings like this but there is a solution
```
 PHP engine  PHP Warning:  "continue" targeting switch is equivalent to "break". Did you mean to use "continue 2"? in D:\xampp73\htdocs\php-iii-jan-2019\sandbox\alfonso\PHP3_LES7\myproject\vendor\zendframework\zend-developer-tools\src\Options.php on line 369

# serve command in composer.json does not work
> php -S 0.0.0.0:8080 -t public/
# It works
> php -S 0.0.0.0:8080 -ddisplay_errors=0 -t public > public/index.php
```

