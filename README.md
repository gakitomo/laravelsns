## usersテーブル

|Column|Type|Options|
|------|----|-------|
|name|string|null: false|
|email|string|null: false, unique: true|
|password|string|null:false|

### Association
- has_many :articles
- has_many :likes
- has_many :follows

## articlesテーブル

|Column|Type|Options|
|------|----|-------|
|id|integer|null:false|
|title|string|null:false|
|body|string|null:false|
|user_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- has_many :tags through: article_tag
- has_many :likes

## likesテーブル

|Column|Type|Options|
|------|----|-------|
|id|integer|null:false|
|user_id|integer|null: false, foreign_key: true|
|article_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :user
- belongs_to :article

## tagsテーブル

|Column|Type|Options|
|------|----|-------|
|id|integer|null:false|
|name|string|null: false, unique: true|

### Association
- has_many :tags through: article_tag

## article_tagテーブル

|Column|Type|Options|
|------|----|-------|
|id|integer|null:false|
|article_id|integer|null: false, foreign_key: true|
|tag_id|integer|null: false, foreign_key: true|

### Association
- belongs_to :article
- belongs_to :tag

## followsテーブル

|Column|Type|Options|
|------|----|-------|
|id|integer|null:false|
|follower_id|integer|null:false|
|followee_id|integer|null:false|

### Association
- belongs_to :user