# basic_php
このリポジトリは、Docker Compose を使用して PHP、MySQL、phpMyAdmin の環境を構築するためのものです。

## Requirements
- Docker
- Docker Compose

## Usage
1. リポジトリを clone します。
```bash
git clone https://github.com/masashidesu/basic_php
```
2. `basic_php/docker` ディレクトリに移動します。
```bash
cd basic_php/docker
```
3. Docker Compose を実行します。
```bash
docker-compose up -d
```

4. ブラウザから `http://localhost:9001` にアクセスして、phpMyAdmin にログインします。

## Note
- `src/php_app` ディレクトリには、PHP アプリケーションのソースコードを格納してください。
- `db` ディレクトリには、MySQL のデータが格納されます。

## License
このリポジトリは、Mstudioのもとで公開されています。
