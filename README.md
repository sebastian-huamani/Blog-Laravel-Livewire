<h1 align="center"> Despues de un commit </h1>
<p align="center"> Despues de clonar un repositorio de laravel necesitaremos hacer algunos pasos adicionales para que todo valla bien. </p>



### Comandos:

```sh
- npm install
- composer install
- cp .env.example .env
- php artisan key:generate
- php artisan migrate --seed
```


### Modificar añgunos archivos:

el archivo 'vendor\fakerphp\faker\src\Faker\Provider\Image.php modificar'

```sh 
public const BASE_URL = 'https://placehold.jp';  // cambie la URL 
```

```sh
curl_setopt($ch, CURLOPT_FILE, $fp); //línea existente
curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);//nueva línea
curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);//nueva línea
$success = curl_exec($ch) && curl_getinfo($ch, CURLINFO_HTTP_CODE) === 200;//línea existente
```
