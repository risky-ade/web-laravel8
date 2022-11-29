<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Project extends Model
{
    use HasFactory;
    protected $table = "projects";
    // protected $guarded = [];

    // protected $with = ['client','service'];
    protected $fillable=['client_id','service_id','title','tanggal', 'alamat', 'deskripsi'];

    public function client()
    {
        return $this->belongsTo(Client::class);
    }

    public function service()
    {
        return $this->belongsTo(Service::class);
    }

    public function images()
    {
        return $this->hasMany(Image::class);
    }

}
