<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $link_id
 * @property string $created_at
 * @property string $updated_at
 * @property Link $link
 */
class Grid extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'grid';

    /**
     * @var array
     */
    protected $fillable = ['link_id', 'created_at', 'updated_at'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\BelongsTo
     */
    public function links()
    {
        return $this->belongsTo('App\Models\Link', 'link_id');
    }

    /**
     * Get grid position by id
     *
     * @param int $id
     *
     * @return void
     */
    public function getPositionById( int $id )
    {
        return $this->findOrFail($id);
    }

    public function createSlot( int $id, array $data )
    {
        $linkRecord = Link::create([
            'title' => $data['title'],
            'link' => $data['link'],
            'color' => $data['color'],
            'sequence' => Link::getNextSequence()
        ]);

        $this->getPositionById($id)->links()->associate($linkRecord)->save();
    }

    public function updateSlot( int $id, Link $linkRecord )
    {
        $this->getPositionById($id)->links()->associate($linkRecord)->save();
    }

    public function clearSlot( int $id )
    {
        $this->getPositionById($id)->links()->dissociate()->save();
    }
}
