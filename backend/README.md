#Fitness Backend System

###概要
フィットネスモバイルアプリのAPIサーバー/管理画面Webサーバーを兼ねる

###必須環境
- PHP 8.1 ~
- mysql 8.0 ~
- composer 2.0 ~

###設計
- API部分はMVC + Serviceで構築する。ビジネスロジックはModel/Serviceに集約し、クライアント側の処理が複雑にならないようエラーレスポンスは全て統一形式のJSONで返却する
- APIのサービスは疎結合にし、Mock動作可能にする

