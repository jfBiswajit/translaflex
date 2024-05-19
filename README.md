# TranslaFlex

Effortlessly translate your Laravel application.

#### composer.json

```
"repositories": [
    {
        "type": "vcs",
        "url": "https://github.com/jfBiswajit/translaflex"
    }
]

```

#### Install

`composer require jfBiswajit/translaflex`

#### Publish (Required)

`php artisan translaflex:publish`

#### Publish TranslaFlex Config (Optional)

`php artisan vendor:publish --provider="JfBiswajit\TranslaFlex\TranslaFlexServiceProvider" --tag="config"`

#### Migrate

`php artisan migrate`

#### Create Translation
`yourdomain.com/translaflex/create`

![Create Translation](art/add-translation.png)

#### Usages
`__('message.wellcome_to_the_site')`

#### Result
![Create Translation](art/welcome.png)
