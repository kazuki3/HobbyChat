# README

## HobbyChat
話題に応じた投稿ができる掲示板アプリ br
作成日 : 2019年6月12日

## userテーブル
| Column | Type | Options |
|:-----------|------------:|:------------:|
|nickname|string|null:falsee|
|email|string|null:false, unique: true|
|password|string|null:false|
|sex|string|null:false|
|self_introduction|text|default:"よろしく"|

### Association
* has_many :contributions
* has_many :rooms
* has_many :user_rooms


## contributionテーブル
| Column | Type | Options |
|:-----------|------------:|:------------:|
|message|string|null:true|
|image|string|null:true|
|user|foreign|null:false|
|room|foreign|null:false|

### Association
* belongs_to :user
* belongts_to :room

## roomテーブル
| Column | Type | Options |
|:-----------|------------:|:------------:|
|room_name|integer|null:false|
|category|string|null:false|
|thumbnail|string|null:false|
|Administrator|foreign|nul:false|

### Association
* belongs_to :user
* has_many :contributions
* has_many :user_rooms

## user_roomテーブル
| Column | Type | Options |
|:-----------|------------:|:------------:|
|room|foreign|null:false|
|user|foreign|null:false|

### Association
* belongs_to :user
* belongs_to :room
