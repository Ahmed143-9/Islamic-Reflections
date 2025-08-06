<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Str;

class Post extends Model
{
    use HasFactory;

    protected $fillable = [
        'user_id',
        'title',
        'slug',
        'category',
        'content',
        'excerpt',
        'is_published',
        'views_count',
        'likes_count',
        'comments_count'
    ];

    protected $casts = [
        'is_published' => 'boolean',
        'views_count' => 'integer',
        'likes_count' => 'integer',
        'comments_count' => 'integer',
    ];

    // Relationships
    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function comments()
    {
        return $this->hasMany(Comment::class)->orderBy('created_at', 'desc');
    }

    public function likes()
    {
        return $this->hasMany(Like::class);
    }

    // Auto-generate slug when creating
    protected static function boot()
    {
        parent::boot();
        
        static::creating(function ($post) {
            if (!$post->slug) {
                $post->slug = Str::slug($post->title) . '-' . Str::random(5);
            }
        });
    }

    // Get route key name for model binding
    public function getRouteKeyName()
    {
        return 'slug';
    }

    // Increment views
    public function incrementViews()
    {
        $this->increment('views_count');
    }

    // Islamic categories for posts
    public static function getCategories()
    {
        return [
            'quran' => 'Quran & Tafsir',
            'hadith' => 'Hadith & Sunnah',
            'fiqh' => 'Fiqh & Islamic Law',
            'aqeedah' => 'Aqeedah & Beliefs',
            'akhlaq' => 'Islamic Ethics & Character',
            'ibadah' => 'Worship & Rituals',
            'seerah' => 'Prophet\'s Biography',
            'dua' => 'Duas & Supplications',
            'ramadan' => 'Ramadan & Fasting',
            'hajj' => 'Hajj & Pilgrimage',
            'family' => 'Islamic Family Life',
            'knowledge' => 'Islamic Knowledge',
            'history' => 'Islamic History',
            'spirituality' => 'Islamic Spirituality',
            'contemporary' => 'Contemporary Issues'
        ];
    }

    // Get category display name
    public function getCategoryNameAttribute()
    {
        return self::getCategories()[$this->category] ?? 'General';
    }

    // Get excerpt or generate one
    public function getExcerptAttribute($value)
    {
        return $value ?: Str::limit(strip_tags($this->content), 150);
    }

    // Get reading time estimate
    public function getReadingTimeAttribute()
    {
        $words = str_word_count(strip_tags($this->content));
        $minutes = ceil($words / 200); // Average reading speed
        return $minutes . ' min read';
    }

    // Format created date
    public function getFormattedDateAttribute()
    {
        return $this->created_at->format('M d, Y');
    }

    // Get share URL
    public function getShareUrlAttribute()
    {
        return route('posts.show', $this->slug);
    }
}
        