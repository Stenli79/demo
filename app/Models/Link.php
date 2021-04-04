<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

/**
 * @property int $id
 * @property int $color_id
 * @property string $title
 * @property string $link
 * @property int $sequence
 * @property string $created_at
 * @property string $updated_at
 * @property Grid[] $grids
 */
class Link extends Model
{
    /**
     * The table associated with the model.
     *
     * @var string
     */
    protected $table = 'links';

    /**
     * @var string[]
     */
    protected $visible = ['color','title','link','sequence'];

    /**
     * @var array
     */
    protected $fillable = ['color', 'title', 'link', 'sequence'];

    /**
     * @return \Illuminate\Database\Eloquent\Relations\HasMany
     */
    public function grids()
    {
        return $this->hasMany('App\Grid', 'link_id');
    }

    /**
     * Get link by id
     *
     * @param int $id
     *
     * @return Link
     */
    public function getLinkById(int $id )
    {
        return $this->findOrFail($id);
    }

    /**
     * Move link one position up
     *
     * @param int $id
     *
     * @return void
     */
    public function moveUp( int $id )
    {
        $element        = $this->getLinkById( $id );
        $switchElement  = $this ->where('sequence', '<', $element->sequence)
                                ->orderBy('sequence', 'desc')
                                ->first();

        if( !empty( $switchElement ) )
        {
            $this->switchElements( $element, $switchElement );
        }
    }

    /**
     * Move link one position down
     *
     * @param int $id
     *
     * @return void
     */
    public function moveDown( int $id )
    {
        $element        = $this->getLinkById( $id );
        $switchElement  = $this ->where('sequence', '>', $element->sequence)
                                ->orderBy('sequence', 'asc')
                                ->first();

        if( !empty( $switchElement ) )
        {
           $this->switchElements( $element, $switchElement );
        }
    }

    /**
     * Update with given data
     *
     * @param int $id
     * @param array $data
     *
     * @return bool
     */
    public function updateLink(int $id, array $data )
    {
        return $this->getLinkById($id)->update($data);
    }

    public static function getNextSequence()
    {
        return Link::max('sequence') +1;
    }

    ////////////////////////////////////////////////////////////////////////////////////////////////////////////////////

    /**
     * Switch Links Elements
     *
     * @param Link $element
     * @param Link $switchElement
     *
     * @return void
     */
    private function switchElements(Link $element, Link $switchElement )
    {
        $temp = $element->sequence;
        $element->sequence = $switchElement->sequence;
        $switchElement->sequence = $temp;
        $element->save();
        $switchElement->save();
    }
}
