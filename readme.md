# www.bravist.com

The Universal management framework for Laravel

基于Laravel的通用型内容管理框架



## Feature

+ Laravel 5.4.*
    - laracasts/flash 操作动态提示组件
    - laracasts/presenter MVVM模式中的View-Model抽象层
    - laravel/passport  实现OAuth2.0的全能组件
    - predis/predis Redis连接组件
    - rinvex/repository Repository架构模式中的抽象封装组件
    - yzalis/identicon base64图片生成工具
    - zizaco/entrust 用户角色权限组件

## Usage


1. clone the repository

```shell

$ git clone https://github.com/bravist/www.bravist.com
```

2. install backend & frontend dependeny

```shell

$ cd www.bravist.com

$ composer install -vvv

$ yarn install  

#or npm install

```

3. configuration

```shell

$ cp .example.env .env

$ php artisan key:generate

## modify .env database connection

```


4. complie the frontend resources

```shell

$ npm run dev|prod

```


5. create database and set the passport

```shell

$ php artisan migrate

$ php artisan passport:install

```


6. done


if use use macOS and valet. visit www.bravist.com.dev.
