<?php

return [

    /*
    |--------------------------------------------------------------------------
    | Default Filesystem Disk
    |--------------------------------------------------------------------------
    |
    | Here you may specify the default filesystem disk that should be used
    | by the framework. The "local" disk, as well as a variety of cloud
    | based disks are available to your application. Just store away!
    |
    */

    'default' => env('FILESYSTEM_DISK', 'gcs'),


    /*
    |--------------------------------------------------------------------------
    | Filesystem Disks
    |--------------------------------------------------------------------------
    |
    | Here you may configure as many filesystem "disks" as you wish, and you
    | may even configure multiple disks of the same driver. Defaults have
    | been set up for each driver as an example of the required values.
    |
    | Supported Drivers: "local", "ftp", "sftp", "s3"
    |
    */

    'disks' => [

        'local' => [
            'driver' => 'local',
            'root' => storage_path('app'),
            'throw' => false,
        ],

        'public' => [
            'driver' => 'local',
            'root' => storage_path('app/public'),
            'url' => env('APP_URL') . '/storage',
            'visibility' => 'public',
            'throw' => false,
        ],

        's3' => [
            'driver' => 's3',
            'key' => env('AWS_ACCESS_KEY_ID'),
            'secret' => env('AWS_SECRET_ACCESS_KEY'),
            'region' => env('AWS_DEFAULT_REGION'),
            'bucket' => env('AWS_BUCKET'),
            'url' => env('AWS_URL'),
            'endpoint' => env('AWS_ENDPOINT'),
            'use_path_style_endpoint' => env('AWS_USE_PATH_STYLE_ENDPOINT', false),
            'throw' => false,
        ],
        'gcs' => [
            'driver' => 'gcs',
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'clin-technologies'),
            'bucket' => env('GOOGLE_CLOUD_BUCKET', 'clin-technologies-bucket'),
            'path_prefix' => 'straddie',
            'key_file' => [
                "type" => "service_account",
                "project_id" => "clin-technologies",
                "private_key_id" => "c9cf3cfca01d0d2fee2b7716d9c503538aa166fb",
                "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDhZKSTylhoUpFI\nWG6COhcB5iEUFm3rHVEBZQFPhQCGXYfR3k+MPcf3yfYxbq0mSAEPh6V9oG7xfXUq\nrQG2wN/Mo6pLtCpfzXH+kylNmXdYjLLP3pF+vDOi525aDf25UhQYb9i2BR52/XqJ\nEi8P7wXevarcDWRlL1ECsruLxJJEalXLRdzCE58VKHLFwQYIs2hKdQICb2SMjFUS\nGSRxa0opsXkMToO9uDl51yhKW/+XoGaVQ66EBT+wwf03GhehC6r/QQREe2K1RDoV\nLmkYpJmU1kTUZtRtXE0mEJ18wQJpU14N7beKprg/Par1Xzsp4tR8oAb0wP6Jus69\nSnaDPiSvAgMBAAECggEATW2G8fQ9eZz/pqQmVltBQxg8vctUuEOKa9m4YQpWG1Jv\nEYP2vL0OgEtjZSjZl4B9yMl26tidtBy+jsn/ADpyxzhkDHyYX+/SHLuOIUe6jXNM\nDAev4KMjc+9f49TRmAOfvqNRhXnttL+wA/14qFcao6FxXAXHutDN2gjvT3zYKGLf\n0y9sj3AYHbMZBiEidMWwRkPxaOk/FTWb4uY9iIRLJa1QbMz4U+mcArHP/5B0XSI1\neYbRJ43WHpTi61aFzvRc99dzCOXvfItvtsp22sOxdIvzOiPgM7qDy+6Z8lMHrhmt\nTGPFnFZR812LJBj0LAbNfHUpXwoyBelz1OlHOW5ynQKBgQD87q6Gll/zEig4xC74\nvBUDaV7PcLrHmGqz6kqqdQrglJBd/5dNsh4gOo+bMgu+SjH9RTCYJfiobLRrrJbG\nb4CqgPPcfGhHXNnnsojrgK21aBm/pzn97lwgCWYcRgOHbTI3sduS9upN3ursxshJ\nkIrMU5gFK2EQ1zjHCjLH29HKVQKBgQDkIHS0HQmIjE2ARTbrH/xv4B+WhA2Ln/Mz\naJux0HbFhF0AQiYjlf4s3rgn0LYMd2C/eTkE0VnMNb4aQ0wdfXQaCS/qmJ5IbnKK\nQnbxIxCU3A+AmT/M/SFrPlS2VvuWqQmxVa9ufiSx/n5GyoHQPhYo59ntmdOJSmDx\nigT1WzC+8wKBgQCLY6pQx4xnM4lxB0TvlQ9riuVSIsj8eFXNgv/VAp2U+Kq68sFa\ncx/BGSTNHX51RwRXlIrcPojToNypPjr1bruUu24pA3KgaV45Hx3v00Fn6M/P3APM\nmlCw4x0f1cHaH2Z+ZQkh6+tiMMh85mu4huzHAAaWSrq6gjFrF4a2t8Dc5QKBgQC9\nyAZupM1+jIIZGPu0JXsDs2dz902xf5J6jSchiXSVoyUfhuhlqG249Fwtu2MIAfQ5\ntmZqDKPw0DDjdmMHEYwZ8NStDOR5C3E8dkivGOW9gUlgSZ2bMmav6j3dJ4XL87p9\njfQRLt3mOfrhd60BCfWzeBaDpPond/ooVxMC7ychYwKBgQDOX87EKLgPrJgrmGCu\nQb0fx1GaXkgpww4g45zNd83ls7eOcydc52GRFOmuox/WrEO9IybFkBdM/ihbyDOH\n4fC7KHsNUGf9tzcRgfzVJgyC04g4k4RaFJdnnDK3uVEUyFl0OABDfhjLLYXD6Lma\nXOvZloxAXTMyW7VmeK8emmwNrw==\n-----END PRIVATE KEY-----\n",
                "client_email" => "laravel-storage-gabriel@clin-technologies.iam.gserviceaccount.com",
                "client_id" => "108465834051630265024",
                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
                "token_uri" => "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/laravel-storage-gabriel%40clin-technologies.iam.gserviceaccount.com",
                "universe_domain" => "googleapis.com"
            ],
            'visibility_handler' => \League\Flysystem\GoogleCloudStorage\UniformBucketLevelAccessVisibility::class,
        ],
        'gcs_public' => [
            'driver' => 'gcs',
            'project_id' => env('GOOGLE_CLOUD_PROJECT_ID', 'clin-technologies'),
            'bucket' => 'public-clin-technologies-bucket',
            'key_file' => [
                "type" => "service_account",
                "project_id" => "clin-technologies",
                "private_key_id" => "c9cf3cfca01d0d2fee2b7716d9c503538aa166fb",
                "private_key" => "-----BEGIN PRIVATE KEY-----\nMIIEvwIBADANBgkqhkiG9w0BAQEFAASCBKkwggSlAgEAAoIBAQDhZKSTylhoUpFI\nWG6COhcB5iEUFm3rHVEBZQFPhQCGXYfR3k+MPcf3yfYxbq0mSAEPh6V9oG7xfXUq\nrQG2wN/Mo6pLtCpfzXH+kylNmXdYjLLP3pF+vDOi525aDf25UhQYb9i2BR52/XqJ\nEi8P7wXevarcDWRlL1ECsruLxJJEalXLRdzCE58VKHLFwQYIs2hKdQICb2SMjFUS\nGSRxa0opsXkMToO9uDl51yhKW/+XoGaVQ66EBT+wwf03GhehC6r/QQREe2K1RDoV\nLmkYpJmU1kTUZtRtXE0mEJ18wQJpU14N7beKprg/Par1Xzsp4tR8oAb0wP6Jus69\nSnaDPiSvAgMBAAECggEATW2G8fQ9eZz/pqQmVltBQxg8vctUuEOKa9m4YQpWG1Jv\nEYP2vL0OgEtjZSjZl4B9yMl26tidtBy+jsn/ADpyxzhkDHyYX+/SHLuOIUe6jXNM\nDAev4KMjc+9f49TRmAOfvqNRhXnttL+wA/14qFcao6FxXAXHutDN2gjvT3zYKGLf\n0y9sj3AYHbMZBiEidMWwRkPxaOk/FTWb4uY9iIRLJa1QbMz4U+mcArHP/5B0XSI1\neYbRJ43WHpTi61aFzvRc99dzCOXvfItvtsp22sOxdIvzOiPgM7qDy+6Z8lMHrhmt\nTGPFnFZR812LJBj0LAbNfHUpXwoyBelz1OlHOW5ynQKBgQD87q6Gll/zEig4xC74\nvBUDaV7PcLrHmGqz6kqqdQrglJBd/5dNsh4gOo+bMgu+SjH9RTCYJfiobLRrrJbG\nb4CqgPPcfGhHXNnnsojrgK21aBm/pzn97lwgCWYcRgOHbTI3sduS9upN3ursxshJ\nkIrMU5gFK2EQ1zjHCjLH29HKVQKBgQDkIHS0HQmIjE2ARTbrH/xv4B+WhA2Ln/Mz\naJux0HbFhF0AQiYjlf4s3rgn0LYMd2C/eTkE0VnMNb4aQ0wdfXQaCS/qmJ5IbnKK\nQnbxIxCU3A+AmT/M/SFrPlS2VvuWqQmxVa9ufiSx/n5GyoHQPhYo59ntmdOJSmDx\nigT1WzC+8wKBgQCLY6pQx4xnM4lxB0TvlQ9riuVSIsj8eFXNgv/VAp2U+Kq68sFa\ncx/BGSTNHX51RwRXlIrcPojToNypPjr1bruUu24pA3KgaV45Hx3v00Fn6M/P3APM\nmlCw4x0f1cHaH2Z+ZQkh6+tiMMh85mu4huzHAAaWSrq6gjFrF4a2t8Dc5QKBgQC9\nyAZupM1+jIIZGPu0JXsDs2dz902xf5J6jSchiXSVoyUfhuhlqG249Fwtu2MIAfQ5\ntmZqDKPw0DDjdmMHEYwZ8NStDOR5C3E8dkivGOW9gUlgSZ2bMmav6j3dJ4XL87p9\njfQRLt3mOfrhd60BCfWzeBaDpPond/ooVxMC7ychYwKBgQDOX87EKLgPrJgrmGCu\nQb0fx1GaXkgpww4g45zNd83ls7eOcydc52GRFOmuox/WrEO9IybFkBdM/ihbyDOH\n4fC7KHsNUGf9tzcRgfzVJgyC04g4k4RaFJdnnDK3uVEUyFl0OABDfhjLLYXD6Lma\nXOvZloxAXTMyW7VmeK8emmwNrw==\n-----END PRIVATE KEY-----\n",
                "client_email" => "laravel-storage-gabriel@clin-technologies.iam.gserviceaccount.com",
                "client_id" => "108465834051630265024",
                "auth_uri" => "https://accounts.google.com/o/oauth2/auth",
                "token_uri" => "https://oauth2.googleapis.com/token",
                "auth_provider_x509_cert_url" => "https://www.googleapis.com/oauth2/v1/certs",
                "client_x509_cert_url" => "https://www.googleapis.com/robot/v1/metadata/x509/laravel-storage-gabriel%40clin-technologies.iam.gserviceaccount.com",
                "universe_domain" => "googleapis.com"
            ],
            'visibility_handler' => \League\Flysystem\GoogleCloudStorage\UniformBucketLevelAccessVisibility::class,
        ],

    ],

    /*
    |--------------------------------------------------------------------------
    | Symbolic Links
    |--------------------------------------------------------------------------
    |
    | Here you may configure the symbolic links that will be created when the
    | `storage:link` Artisan command is executed. The array keys should be
    | the locations of the links and the values should be their targets.
    |
    */

    'links' => [
        public_path('storage') => storage_path('app/public'),
    ],

];
