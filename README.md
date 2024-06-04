# yii2-docker-basic
**Docker setup**
1. Clone this repo folder inside your root
2. `docker-compose build`
3. `docker-compose up -d`

**Yii2 setup**
1. Update yii2 config with new dbhost (which is `db`).  
    ```
    ...
    'components' => [
        'db' => [
            'class' => 'yii\db\Connection',
            'dsn' => 'mysql:host=db;dbname=dbname',
            'username' => 'username',
            'password' => 'password',
            'charset' => 'utf8',
        ],
        ...
    ```  
    
    You can check other DB credentials in `docker-compose.yml`

2. Open shell to `php` container via `docker-compose exec php bash`
    1. `composer install`
    2. `php yii migrate`
    
3. Test your application by going to `http:\\localhost\`