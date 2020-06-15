# facebook_post_public_group



## Instruccíones
---
Ir al archivo [post.php](https://github.com/SkarYxD/facebook_post_public_group/blob/master/post.php) & editar las siguientes lineas:
```php
23 'link' => 'http://www.google.com', // Enlace de la publicación, puede ser una imagen
24 'message' => 'Google.com', // Mensaje que se publicara
```

En el archivo [config.php](https://github.com/SkarYxD/facebook_post_public_group/blob/master/config.php) editar las siguientes lineas:
```php
5 $config['App_ID'] = 'APP_ID'; //AQUI TU ID DE APP
6 $config['App_Secret'] = 'APP_SECRET' //AQUI TU SECRET DE APP;
```

Archivo [index.php](https://github.com/SkarYxD/facebook_post_public_group/blob/master/index.php) editar las siguientes lineas:
```php
31 $permissions = ['email', 'user_likes','publish_to_groups']; // Permisos para publicar
32 $loginUrl = $helper->getLoginUrl('http://localhost/post.php', $permissions); // Escribir la dirección de donde se encuentre el archivo post.php
```


[Facebook Doc](https://developers.facebook.com/docs/apps/?translation)

[Crear AP](https://developers.facebook.com/apps/)

Telegram -> @MrPopos2

---
[Dona<3](https://www.paypal.me/joaqhoc)
