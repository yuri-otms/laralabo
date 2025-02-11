FROM mysql:8.0-debian

RUN apt-get update
# ロケールのインストール
RUN apt-get -y install locales-all

# 環境変数の設定
ENV LANG ja_JP.UTF-8
ENV LANGUAGE ja_JP:ja
ENV LC_ALL ja_JP.UTF-8

# MySQLの設定(performance_schema=OFF)
COPY my.cnf /etc/my.cnf