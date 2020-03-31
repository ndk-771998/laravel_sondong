# Media Manager for Laravel

- [Media Manager for Laravel](#media-manager-for-laravel)
- [Installation](#installation)
  - [Composer](#composer)
  - [Config and Migration](#config-and-migration)
  - [Environment](#environment)
- [Configuration](#configuration)
  - [URL Namespace](#url-namespace)
- [APIs List](#apis-list)
- [Prepare your model](#prepare-your-model)
- [Associating media](#associating-media)
- [Retrieve media](#retrieve-media)
- [S3 Disk Configuration](#s3-disk-configuration)

The User Component package provides a convenient way of managing application's users.

# Installation

## Composer

To include the package in your project, Please run following command.

```
composer require vicoders/media-manager
```

## Config and Migration

Run the following commands to publish configuration and migration files.

```
php artisan vendor:publish --provider="Dingo\Api\Provider\LaravelServiceProvider"
php artisan vendor:publish --provider="Tymon\JWTAuth\Providers\LaravelServiceProvider"
php artisan vendor:publish --provider "Prettus\Repository\Providers\RepositoryServiceProvider"
php artisan vendor:publish --provider "Spatie\MediaLibrary\MediaLibraryServiceProvider"
php artisan vendor:publish --provider "VCComponent\Laravel\MediaManager\MediaManagerProvider"
```

Create tables.

```
php artisan migrate
```

Make a change in `config/medialibrary.php`.

```php
'media_model' => VCComponent\Laravel\MediaManager\Entities\Media::class,
```

## Environment

In `.env` file, we need some configuration.

```
API_PREFIX=api
API_VERSION=v1
API_NAME="Your API Name"
API_DEBUG=false
```

Remember to update your `APP_URL`

```
APP_URL=http://somedomain.com
```

Generate `JWT_SECRET` in `.env`file.

```
php artisan jwt:secret
```

Run the following command:

```
php artisan storage:link
```

Now the package is ready to use.

# Configuration

## URL Namespace

To avoid duplication with your application's api endpoints, the package has a default namespace for its routes which is `media-manager`. For example:

```
{{url}}/api/media-manager/collections
```

You can modify the package url namespace to whatever you want by modifying the `MEDIA_MANAGER_NAMESPACE` variable in `.env` file.

```
MEDIA_MANAGER_NAMESPACE="your-namespace"
```

# APIs List

Here is the list of APIs provided by the package.

| Verb   | URI                                              | Action                                 |
| ------ | ------------------------------------------------ | -------------------------------------- |
| GET    | `/api/{namespace}/collections`                   | Get list of collection with pagination |
| GET    | `/api/{namespace}/collections/all`               | Get all collections                    |
| GET    | `/api/{namespace}/collections/{id}`              | Get collection item                    |
| POST   | `/api/{namespace}/collections`                   | Create collection                      |
| PUT    | `/api/{namespace}/collections/{id}`              | Update collection                      |
| DELETE | `/api/{namespace}/collections/{id}`              | Delete collection                      |
| ------ | ------                                           | ------                                 |
| GET    | `/api/{namespace}/medias`                        | Get list of collection with pagination |
| GET    | `/api/{namespace}/medias/all`                    | Get all medias                         |
| GET    | `/api/{namespace}/medias/{id}`                   | Get collection item                    |
| POST   | `/api/{namespace}/medias`                        | Create collection                      |
| PUT    | `/api/{namespace}/medias/{id}`                   | Update collection                      |
| DELETE | `/api/{namespace}/medias/{id}`                   | Delete collection                      |
| PUT    | `/api/{namespace}/medias/{id}/collection/attach` | Attach media to collection             |
| PUT    | `/api/{namespace}/medias/{id}/collection/detach` | Detach media from collection           |

# Prepare your model

To associate media with a model, the model must implement the following interface and trait:

```php
<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Spatie\MediaLibrary\HasMedia\HasMedia;
use VCComponent\Laravel\MediaManager\HasMediaTrait;

class Post extends Model implements HasMedia
{
    use HasMediaTrait;
    ...
}

```

# Associating media

You can associate a file with a model like this:

```php
$media_id = 2;
$post = Post::create($data);
$post->attachMedia($media_ids);
```

or you can pass an array of media ids:

```php
$media_ids = [1, 2, 3];
$post = Post::create($data);
$post->attachMedia($media_ids);
```

# Retrieve media

There are few solution you can use to retrieve media:

Using Eloquent model relationship:

```php
$mediaItems = $newsItem->media;
```

Using `getMedia` method:

```php
$mediaItems = $newsItem->getMedia();
```

You can retrieve media for specific collection:

```php
$collection_name = 'image';
$mediaItems = $newsItem->getMedia($collection_name);
```

# S3 Disk Configuration

By default all files are stored on the disk specified as the `disk_name` in the config file.

If you want to use `s3` to store your files, you are free to change the `disk_name` configuration by just add this env variable:

```
MEDIA_DISK=s3
```

Make sure you configure the correct s3 url in `config/medialibrary.php` file:

```
's3' => [
    'domain' => 'https://'.env('AWS_BUCKET').'.s3-'.env('AWS_DEFAULT_REGION').'.amazonaws.com',
],
```
