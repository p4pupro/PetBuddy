# Symfony v.4 PetBuddy

# Author: Domingo Pérez <domingoperezguerrero@gmail.com>



  * Run your application:
    1. Change to the project directory
    2. Execute the php -S 127.0.0.1:8000 -t public command;
    3. Browse to the http://localhost:8000/ URL.

       Quit the server with CTRL-C.
       Run composer require server --dev for a better web server.

  * Read the documentation https://symfony.com/doc


 __Next: Configuration__


  * Modify your DATABASE_URL config in .env

  * Configure the driver (mysql) and
    server_version (5.7) in _config/packages/doctrine.yaml_


 __How to test?__


  * Write test cases in the _tests/_ folder
  * Run php bin/phpunit


 __Architecture__
 
  * Use of the MVC.
  * Generation and injection of a "HotelService" service, to follow the MicroServices standard. --> _services.yaml_

###Include:
*  friendsofsymfony/rest-bundle (>=2.2)
*  jms/serializer-bundle (>=2.0)
*  nelmio/cors-bundle (1.5.4)
